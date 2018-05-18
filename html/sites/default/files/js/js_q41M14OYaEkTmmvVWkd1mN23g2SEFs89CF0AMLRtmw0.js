/**
 * @file
 * Defines the behaviors needed for cropper integration.
 */

(function ($, Drupal, debounce) {
  'use strict';

  var $window = $(window);

  /**
   * @class Drupal.ImageWidgetCrop
   *
   * @param {HTMLElement|jQuery} element
   *   The wrapper element.
   */
  Drupal.ImageWidgetCrop = function (element) {

    /**
     * The wrapper element.
     *
     * @type {jQuery}
     */
    this.$wrapper = $(element);

    /**
     * The summary element.
     *
     * @type {jQuery}
     */
    this.$summary = this.$wrapper.find(this.selectors.summary).first();

    /**
     * Flag indicating whether the instance has been initialized.
     *
     * @type {Boolean}
     */
    this.initialized = false;

    /**
     * The current summary text.
     *
     * @type {String}
     */
    this.summary = Drupal.t('Crop image');

    /**
     * The individual ImageWidgetCropType instances.
     *
     * @type {Array.<Drupal.ImageWidgetCropType>}
     */
    this.types = [];

    // Initialize the instance.
    this.init();
  };

  /**
   * The selectors used to identify elements for this module.
   *
   * @type {Object.<String, String>}
   */
  Drupal.ImageWidgetCrop.prototype.selectors = {
    // Unfortunately, core does not provide a way to inject attributes into the
    // wrapper element's "summary" in a stable way. So, we can only target
    // the immediate children known to be the likely elements. Contrib can
    // extend this selector if needed.
    summary: '> summary, > legend',
    types: '[data-drupal-iwc=type]',
    wrapper: '[data-drupal-iwc=wrapper]'
  };

  /**
   * Destroys this instance.
   */
  Drupal.ImageWidgetCrop.prototype.destroy = function () {
    this.types.forEach(function (type) {
      type.destroy();
    });
  };

  /**
   * Initializes the instance.
   */
  Drupal.ImageWidgetCrop.prototype.init = function () {
    if (this.initialized) {
      return;
    }

    // Find all the types.
    var _this = this;
    this.$wrapper.find(this.selectors.types).each(function () {
      _this.types.push(new Drupal.ImageWidgetCropType(_this, this));
    });

    // Debounce resize event to prevent any issues.
    $window.on('resize.iwc', debounce(this.resize.bind(this), 250));

    // Update the summary when triggered from vertical tabs underneath it.
    this.$wrapper.on('summaryUpdated', this.updateSummary.bind(this));

    // Trigger the initial summaryUpdate event.
    this.$wrapper.trigger('summaryUpdated');
  };

  /**
   * The "resize" event callback.
   *
   * @see Drupal.ImageWidgetCropType.prototype.resize
   */
  Drupal.ImageWidgetCrop.prototype.resize = function () {
    var args = arguments;

    // Proxy the resize event to each ImageWidgetCropType instance.
    this.types.forEach(function (type) {
      type.resize.apply(type, args);
    });
  };

  /**
   * Updates the summary of the wrapper.
   */
  Drupal.ImageWidgetCrop.prototype.updateSummary = function () {
    var text = Drupal.t('Crop image');

    // Determine if any ImageWidgetCropType has been applied.
    for (var i = 0, l = this.types.length; i < l; i++) {
      var type = this.types[i];
      if (type.getValue('applied')) {
        text = Drupal.t('Crop image (cropping applied)');
        break;
      }
    }

    if (this.summary !== text) {
      this.$summary.text(this.summary = text);
    }
  };

}(jQuery, Drupal, Drupal.debounce));
;
/**
 * @file
 * Defines the behaviors needed for cropper integration.
 */

(function ($, Drupal) {
  'use strict';

  /**
   * @class Drupal.ImageWidgetCropType
   *
   * @param {Drupal.ImageWidgetCrop} instance
   *   The main ImageWidgetCrop instance that created this one.
   *
   * @param {HTMLElement|jQuery} element
   *   The wrapper element.
   */
  Drupal.ImageWidgetCropType = function (instance, element) {

    /**
     * The ImageWidgetCrop instance responsible for creating this type.
     *
     * @type {Drupal.ImageWidgetCrop}
     */
    this.instance = instance;

    /**
     * The Cropper plugin wrapper element.
     *
     * @type {jQuery}
     */
    this.$cropperWrapper = $();

    /**
     * The wrapper element.
     *
     * @type {jQuery}
     */
    this.$wrapper = $(element);

    /**
     * The table element, if any.
     *
     * @type {jQuery}
     */
    this.$table = this.$wrapper.find(this.selectors.table);

    /**
     * The image element.
     *
     * @type {jQuery}
     */
    this.$image = this.$wrapper.find(this.selectors.image);

    /**
     * The reset element.
     *
     * @type {jQuery}
     */
    this.$reset = this.$wrapper.find(this.selectors.reset);

    /**
     * @type {Cropper}
     */
    this.cropper = null;

    /**
     * Flag indicating whether this instance is enabled.
     *
     * @type {Boolean}
     */
    this.enabled = true;

    /**
     * The hard limit of the crop.
     *
     * @type {{height: Number, width: Number, reached: {height: Boolean, width: Boolean}}}
     */
    this.hardLimit = {
      height: null,
      width: null,
      reached: {
        height: false,
        width: false
      }
    };

    /**
     * The unique identifier for this ImageWidgetCrop type.
     *
     * @type {String}
     */
    this.id = null;

    /**
     * Flag indicating whether the instance has been initialized.
     *
     * @type {Boolean}
     */
    this.initialized = false;

    /**
     * An object of recorded setInterval instances.
     *
     * @type {Object.<Number, jQuery>}
     */
    this.intervals = {};

    /**
     * The delta ratio of image based on its natural dimensions.
     *
     * @type {Number}
     */
    this.naturalDelta = null;

    /**
     * The natural height of the image.
     *
     * @type {Number}
     */
    this.naturalHeight = null;

    /**
     * The natural width of the image.
     *
     * @type {Number}
     */
    this.naturalWidth = null;

    /**
     * The original height of the image.
     *
     * @type {Number}
     */
    this.originalHeight = 0;

    /**
     * The original width of the image.
     *
     * @type {Number}
     */
    this.originalWidth = 0;

    /**
     * The current Cropper options.
     *
     * @type {Cropper.options}
     */
    this.options = {};

    /**
     * Flag indicating whether to show the default crop.
     *
     * @type {Boolean}
     */
    this.showDefaultCrop = true;

    /**
     * The soft limit of the crop.
     *
     * @type {{height: Number, width: Number, reached: {height: Boolean, width: Boolean}}}
     */
    this.softLimit = {
      height: null,
      width: null,
      reached: {
        height: false,
        width: false
      }
    };

    /**
     * The numeric representation of a ratio.
     *
     * @type {Number}
     */
    this.ratio = NaN;

    /**
     * The value elements.
     *
     * @type {Object.<String, jQuery>}
     */
    this.values = {
      applied: this.$wrapper.find(this.selectors.values.applied),
      height: this.$wrapper.find(this.selectors.values.height),
      width: this.$wrapper.find(this.selectors.values.width),
      x: this.$wrapper.find(this.selectors.values.x),
      y: this.$wrapper.find(this.selectors.values.y)
    };

    /**
     * Flag indicating whether the instance is currently visible.
     *
     * @type {Boolean}
     */
    this.visible = false;

    // Initialize the instance.
    this.init();
  };

  /**
   * The prefix used for all Image Widget Crop data attributes.
   *
   * @type {RegExp}
   */
  Drupal.ImageWidgetCropType.prototype.dataPrefix = /^drupalIwc/;

  /**
   * Default options to pass to the Cropper plugin.
   *
   * @type {Object}
   */
  Drupal.ImageWidgetCropType.prototype.defaultOptions = {
    autoCropArea: 1,
    background: false,
    responsive: false,
    viewMode: 1,
    zoomable: false
  };

  /**
   * The selectors used to identify elements for this module.
   *
   * @type {Object}
   */
  Drupal.ImageWidgetCropType.prototype.selectors = {
    image: '[data-drupal-iwc=image]',
    reset: '[data-drupal-iwc=reset]',
    table: '[data-drupal-iwc=table]',
    values: {
      applied: '[data-drupal-iwc-value=applied]',
      height: '[data-drupal-iwc-value=height]',
      width: '[data-drupal-iwc-value=width]',
      x: '[data-drupal-iwc-value=x]',
      y: '[data-drupal-iwc-value=y]'
    }
  };

  /**
   * The "built" event handler for the Cropper plugin.
   */
  Drupal.ImageWidgetCropType.prototype.built = function () {
    this.$cropperWrapper = this.$wrapper.find('.cropper-container');
    this.updateHardLimits();
    this.updateSoftLimits();
  };

  /**
   * The "cropend" event handler for the Cropper plugin.
   */
  Drupal.ImageWidgetCropType.prototype.cropEnd = function () {
    // Immediately return if there is no cropper instance (for whatever reason).
    if (!this.cropper) {
      return;
    }

    // Retrieve the cropper data.
    var data = this.cropper.getData();

    // Ensure the applied state is enabled.
    data.applied = 1;

    // Data returned by Cropper plugin should be multiplied with delta in order
    // to get the proper crop sizes for the original image.
    this.setValues(data, this.naturalDelta);

    // Trigger summary updates.
    this.$wrapper.trigger('summaryUpdated');
  };

  /**
   * The "cropmove" event handler for the Cropper plugin.
   */
  Drupal.ImageWidgetCropType.prototype.cropMove = function () {
    this.updateSoftLimits();
  };

  /**
   * Destroys this instance.
   */
  Drupal.ImageWidgetCropType.prototype.destroy = function () {
    this.destroyCropper();

    this.$image.off('.iwc');
    this.$reset.off('.iwc');

    // Clear any intervals that were set.
    for (var interval in this.intervals) {
      if (this.intervals.hasOwnProperty(interval)) {
        clearInterval(interval);
        delete this.intervals[interval];
      }
    }
  };

  /**
   * Destroys the Cropper plugin instance.
   */
  Drupal.ImageWidgetCropType.prototype.destroyCropper = function () {
    this.$image.off('.iwc.cropper');
    if (this.cropper) {
      this.cropper.destroy();
      this.cropper = null;
    }
  };

  /**
   * Disables this instance.
   */
  Drupal.ImageWidgetCropType.prototype.disable = function () {
    if (this.cropper) {
      this.cropper.disable();
    }
    this.$table.removeClass('responsive-enabled--opened');
  };

  /**
   * Enables this instance.
   */
  Drupal.ImageWidgetCropType.prototype.enable = function () {
    if (this.cropper) {
      this.cropper.enable();
    }
    this.$table.addClass('responsive-enabled--opened');
  };

  /**
   * Retrieves a crop value.
   *
   * @param {'applied'|'height'|'width'|'x'|'y'} name
   *   The name of the crop value to retrieve.
   * @param {Number} [delta]
   *   The delta amount to divide value by, if any.
   *
   * @return {Number}
   *   The crop value.
   */
  Drupal.ImageWidgetCropType.prototype.getValue = function (name, delta) {
    var value = 0;
    if (this.values[name] && this.values[name][0]) {
      value = parseInt(this.values[name][0].value, 10) || 0;
    }
    return name !== 'applied' && value && delta ? Math.round(value / delta) : value;
  };

  /**
   * Retrieves all crop values.
   *
   * @param {Number} [delta]
   *   The delta amount to divide value by, if any.
   *
   * @return {{applied: Number, height: Number, width: Number, x: Number, y: Number}}
   *   The crop value key/value pairs.
   */
  Drupal.ImageWidgetCropType.prototype.getValues = function (delta) {
    var values = {};
    for (var name in this.values) {
      if (this.values.hasOwnProperty(name)) {
        values[name] = this.getValue(name, delta);
      }
    }
    return values;
  };

  /**
   * Initializes the instance.
   */
  Drupal.ImageWidgetCropType.prototype.init = function () {
    // Immediately return if already initialized.
    if (this.initialized) {
      return;
    }

    // Set the default options.
    this.options = $.extend({}, this.defaultOptions);

    // Extend this instance with data from the wrapper.
    var data = this.$wrapper.data();
    for (var i in data) {
      if (data.hasOwnProperty(i) && this.dataPrefix.test(i)) {
        // Remove Drupal + module prefix and lowercase the first letter.
        var prop = i.replace(this.dataPrefix, '');
        prop = prop.charAt(0).toLowerCase() + prop.slice(1);

        // Check if data attribute exists on this object.
        if (prop && this.hasOwnProperty(prop)) {
          var value = data[i];

          // Parse the ratio value.
          if (prop === 'ratio') {
            value = this.parseRatio(value);
          }
          this[prop] = typeof value === 'object' ? $.extend(true, {}, this[prop], value) : value;
        }
      }
    }

    // Bind necessary events.
    this.$image
      .on('visible.iwc', function () {
        this.visible = true;
        this.naturalHeight = parseInt(this.$image.prop('naturalHeight'), 10);
        this.naturalWidth = parseInt(this.$image.prop('naturalWidth'), 10);
        // Calculate delta between original and thumbnail images.
        this.naturalDelta = this.originalHeight && this.naturalHeight ? this.originalHeight / this.naturalHeight : null;
      }.bind(this))
      // Only initialize the cropper plugin once.
      .one('visible.iwc', this.initializeCropper.bind(this))
      .on('hidden.iwc', function () {
        this.visible = false;
      }.bind(this));

    this.$reset
      .on('click.iwc', this.reset.bind(this));

    // Star polling visibility of the image that should be able to be cropped.
    this.pollVisibility(this.$image);

    // Bind the drupalSetSummary callback.
    this.$wrapper.drupalSetSummary(this.updateSummary.bind(this));

    // Trigger the initial summaryUpdate event.
    this.$wrapper.trigger('summaryUpdated');
    var isIE = /*@cc_on!@*/false || !!document.documentMode;
    if (isIE) {
      var $image = this.$image;
      $('.image-data__crop-wrapper > summary').on('click', function () {
        setTimeout(function () {$image.trigger('visible.iwc')}, 100);
      });
    }
  };

  /**
   * Initializes the Cropper plugin.
   */
  Drupal.ImageWidgetCropType.prototype.initializeCropper = function () {
    // Calculate minimal height for cropper container (minimal width is 200).
    var minDelta = (this.originalWidth / 200);
    this.options.minContainerHeight = this.originalHeight / minDelta;

    // Only autoCrop if 'Show default crop' is checked.
    this.options.autoCrop = this.showDefaultCrop;

    // Set aspect ratio.
    this.options.aspectRatio = this.ratio;

    // Initialize data.
    var values = this.getValues(this.naturalDelta);
    this.options.data = this.options.data || {};
    if (values.applied) {
      // Remove the "applied" value as it has no meaning in Cropper.
      delete values.applied;

      // Merge in the values.
      this.options.data = $.extend(true, this.options.data, values);

      // Enforce autoCrop if there's currently a crop applied.
      this.options.autoCrop = true;
    }

    this.options.data.rotate = 0;
    this.options.data.scaleX = 1;
    this.options.data.scaleY = 1;

    this.$image
      .on('built.iwc.cropper', this.built.bind(this))
      .on('cropend.iwc.cropper', this.cropEnd.bind(this))
      .on('cropmove.iwc.cropper', this.cropMove.bind(this))
      .cropper(this.options);

    this.cropper = this.$image.data('cropper');
    this.options = this.cropper.options;

    // If "Show default crop" is checked apply default crop.
    if (this.showDefaultCrop) {
      // All data returned by cropper plugin multiple with delta in order to get
      // proper crop sizes for original image.
      this.setValue(this.$image.cropper('getData'), this.naturalDelta);
      this.$wrapper.trigger('summaryUpdated');
    }
  };

  /**
   * Creates a poll that checks visibility of an item.
   *
   * @param {HTMLElement|jQuery} element
   *   The element to poll.
   *
   * Replace once vertical tabs have proper events ?
   * When following issue are fixed @see https://www.drupal.org/node/2653570.
   */
  Drupal.ImageWidgetCropType.prototype.pollVisibility = function (element) {
    var $element = $(element);

    // Immediately return if there's no element.
    if (!$element[0]) {
      return;
    }

    var isElementVisible = function (el) {
      var rect = el.getBoundingClientRect();
      var vWidth = window.innerWidth || document.documentElement.clientWidth;
      var vHeight = window.innerHeight || document.documentElement.clientHeight;

      // Immediately Return false if it's not in the viewport.
      if (rect.right < 0 || rect.bottom < 0 || rect.left > vWidth || rect.top > vHeight) {
        return false;
      }

      // Return true if any of its four corners are visible.
      var efp = function (x, y) {
        return document.elementFromPoint(x, y);
      };
      return (
        el.contains(efp(rect.left, rect.top))
        || el.contains(efp(rect.right, rect.top))
        || el.contains(efp(rect.right, rect.bottom))
        || el.contains(efp(rect.left, rect.bottom))
      );
    };

    var value = null;
    var interval = setInterval(function () {
      var visible = isElementVisible($element[0]);
      if (value !== visible) {
        $element.trigger((value = visible) ? 'visible.iwc' : 'hidden.iwc');
      }
    }, 250);
    this.intervals[interval] = $element;
  };

  /**
   * Parses a ration value into a numeric one.
   *
   * @param {String} ratio
   *   A string representation of the ratio.
   *
   * @return {Number.<float>|NaN}
   *   The numeric representation of the ratio.
   */
  Drupal.ImageWidgetCropType.prototype.parseRatio = function (ratio) {
    if (ratio && /:/.test(ratio)) {
      var parts = ratio.split(':');
      var num1 = parseInt(parts[0], 10);
      var num2 = parseInt(parts[1], 10);
      return num1 / num2;
    }
    return parseFloat(ratio);
  };

  /**
   * Reset cropping for an element.
   *
   * @param {Event} e
   *   The event object.
   */
  Drupal.ImageWidgetCropType.prototype.reset = function (e) {
    if (!this.cropper) {
      return;
    }

    if (e instanceof Event || e instanceof $.Event) {
      e.preventDefault();
      e.stopPropagation();
    }

    this.options = $.extend({}, this.cropper.options, this.defaultOptions);

    var delta = null;

    // Retrieve all current values and zero (0) them out.
    var values = this.getValues();
    for (var name in values) {
      if (values.hasOwnProperty(name)) {
        values[name] = 0;
      }
    }

    // If 'Show default crop' is not checked just re-initialize the cropper.
    if (!this.showDefaultCrop) {
      this.destroyCropper();
      this.initializeCropper();
    }
    // Reset cropper to the original values.
    else {
      this.cropper.reset();
      this.cropper.options = this.options;

      // Set the delta.
      delta = this.naturalDelta;

      // Merge in the original cropper values.
      values = $.extend(values, this.cropper.getData());
    }

    this.setValues(values, delta);
    this.$wrapper.trigger('summaryUpdated');
  };

  /**
   * The "resize" event handler proxied from the main instance.
   *
   * @see Drupal.ImageWidgetCrop.prototype.resize
   */
  Drupal.ImageWidgetCropType.prototype.resize = function () {
    // Immediately return if currently not visible.
    if (!this.visible) {
      return;
    }

    // Get previous data for cropper.
    var canvasDataOld = this.$image.cropper('getCanvasData');
    var cropBoxData = this.$image.cropper('getCropBoxData');

    // Re-render cropper.
    this.$image.cropper('render');

    // Get new data for cropper and calculate resize ratio.
    var canvasDataNew = this.$image.cropper('getCanvasData');
    var ratio = 1;
    if (canvasDataOld.width !== 0) {
      ratio = canvasDataNew.width / canvasDataOld.width;
    }

    // Set new data for crop box.
    $.each(cropBoxData, function (index, value) {
      cropBoxData[index] = value * ratio;
    });
    this.$image.cropper('setCropBoxData', cropBoxData);

    this.updateHardLimits();
    this.updateSoftLimits();
    this.$wrapper.trigger('summaryUpdated');
  };

  /**
   * Sets a single crop value.
   *
   * @param {'applied'|'height'|'width'|'x'|'y'} name
   *   The name of the crop value to set.
   * @param {Number} value
   *   The value to set.
   * @param {Number} [delta]
   *   A delta to modify the value with.
   */
  Drupal.ImageWidgetCropType.prototype.setValue = function (name, value, delta) {
    if (!this.values.hasOwnProperty(name) || !this.values[name][0]) {
      return;
    }
    value = value ? parseFloat(value) : 0;
    if (delta && name !== 'applied') {
      value = Math.round(value * delta);
    }
    this.values[name][0].value = value;
    this.values[name].trigger('change.iwc, input.iwc');
  };

  /**
   * Sets multiple crop values.
   *
   * @param {{applied: Number, height: Number, width: Number, x: Number, y: Number}} obj
   *   An object of key/value pairs of values to set.
   * @param {Number} [delta]
   *   A delta to modify the value with.
   */
  Drupal.ImageWidgetCropType.prototype.setValues = function (obj, delta) {
    for (var name in obj) {
      if (!obj.hasOwnProperty(name)) {
        continue;
      }
      this.setValue(name, obj[name], delta);
    }
  };

  /**
   * Converts horizontal and vertical dimensions to canvas dimensions.
   *
   * @param {Number} x - horizontal dimension in image space.
   * @param {Number} y - vertical dimension in image space.
   */
  Drupal.ImageWidgetCropType.prototype.toCanvasDimensions = function (x, y) {
    var imageData = this.cropper.getImageData();
    return {
      width: imageData.width * (x / this.originalWidth),
      height: imageData.height * (y / this.originalHeight)
    }
  };

  /**
   * Converts horizontal and vertical dimensions to image dimensions.
   *
   * @param {Number} x - horizontal dimension in canvas space.
   * @param {Number} y - vertical dimension in canvas space.
   */
  Drupal.ImageWidgetCropType.prototype.toImageDimensions = function (x, y) {
    var imageData = this.cropper.getImageData();
    return {
      width: x * (this.originalWidth / imageData.width),
      height: y * (this.originalHeight / imageData.height)
    }
  };

  /**
   * Update hard limits.
   */
  Drupal.ImageWidgetCropType.prototype.updateHardLimits = function () {
    // Immediately return if there is no cropper plugin instance or hard limits.
    if (!this.cropper || !this.hardLimit.width || !this.hardLimit.height) {
      return;
    }

    var options = this.cropper.options;

    // Limits works in canvas so we need to convert dimensions.
    var converted = this.toCanvasDimensions(this.hardLimit.width, this.hardLimit.height);
    options.minCropBoxWidth = converted.width;
    options.minCropBoxHeight = converted.height;

    // After updating the options we need to limit crop box.
    this.cropper.limitCropBox(true, false);
  };

  /**
   * Update soft limits.
   */
  Drupal.ImageWidgetCropType.prototype.updateSoftLimits = function () {
    // Immediately return if there is no cropper plugin instance or soft limits.
    if (!this.cropper || !this.softLimit.width || !this.softLimit.height) {
      return;
    }

    // We do comparison in image dimensions so lets convert first.
    var cropBoxData = this.cropper.getCropBoxData();
    var converted = this.toImageDimensions(cropBoxData.width, cropBoxData.height);

    var dimensions = ['width', 'height'];
    for (var i = 0, l = dimensions.length; i < l; i++) {
      var dimension = dimensions[i];
      if (converted[dimension] < this.softLimit[dimension]) {
        if (!this.softLimit.reached[dimension]) {
          this.softLimit.reached[dimension] = true;
        }
      }
      else if (this.softLimit.reached[dimension]) {
        this.softLimit.reached[dimension] = false;
      }
      this.$cropperWrapper.toggleClass('cropper--' + dimension + '-soft-limit-reached', this.softLimit.reached[dimension]);
    }
    this.$wrapper.trigger('summaryUpdated');
  };

  /**
   * Updates the summary of the wrapper.
   */
  Drupal.ImageWidgetCropType.prototype.updateSummary = function () {
    var summary = [];
    if (this.getValue('applied')) {
      summary.push(Drupal.t('Cropping applied.'));
    }
    if (this.softLimit.reached.height || this.softLimit.reached.width) {
      summary.push(Drupal.t('Soft limit reached.'));
    }
    return summary.join('<br>');
  };

}(jQuery, Drupal));
;
/**
 * @file
 * Defines the Drupal behaviors needed for the Image Widget Crop module.
 */

(function ($, Drupal) {
  'use strict';

  /**
   * Drupal behavior for the Image Widget Crop module.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the behavior and creates Cropper instances.
   * @prop {Drupal~behaviorAttach} detach
   *   Detaches the behavior and destroys Cropper instances.
   */
  Drupal.behaviors.imageWidgetCrop = {
    attach: function (context) {
      this.createInstances(context);
    },
    detach: function (context) {
      this.destroyInstances(context);
    },

    /**
     * Creates necessary instances of Drupal.ImageWidgetCrop.
     *
     * @param {HTMLElement|jQuery} [context=document]
     *   The context which to find elements in.
     */
    createInstances: function (context) {
      var $context = $(context || document);
      $context.find(Drupal.ImageWidgetCrop.prototype.selectors.wrapper).each(function () {
        var $element = $(this);
        if (!$element.data('ImageWidgetCrop')) {
          $element.data('ImageWidgetCrop', new Drupal.ImageWidgetCrop($element));
        }
      });
    },

    /**
     * Destroys any instances of Drupal.ImageWidgetCrop.
     *
     * @param {HTMLElement|jQuery} [context=document]
     *   The context which to find elements in.
     */
    destroyInstances: function (context) {
      var $context = $(context || document);
      $context.find(Drupal.ImageWidgetCrop.prototype.selectors.wrapper).each(function () {
        var $element = $(this);
        var instance = $element.data('ImageWidgetCrop');
        if (instance) {
          instance.destroy();
          $element.removeData('ImageWidgetCrop');
        }
      });
    }
  };

}(jQuery, Drupal));
;
!function(e,a,t){"use strict";a.ImageWidgetCropType.prototype.updateSummary=function(){return""},a.behaviors.socialBaseImageWidgetCrop={attach:function(a,t){e(".image-widget-data").each(function(a,t){e("> .form-file",t).length||e(t).data("crop-attached")?e("> .form-file",t).length&&e(t).data("crop-attached")&&e(t).data("crop-attached",!1):(e(t).parent().next(".image-data__crop-wrapper").attr("open","open"),e(t).data("crop-attached",!0))})}},e(".image-widget-data").each(function(a,t){e("> .form-file",t).length||e(t).data("crop-attached",!0)}),delete a.behaviors.imageWidgetCrop.detach}(jQuery,Drupal,drupalSettings);;
/**
 * @file
 * Defines the custom behaviors needed for cropper integration.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Updates the summary of the wrapper.
   */
  Drupal.ImageWidgetCropType.prototype.updateSummary = function () {
    return '';
  };

  Drupal.behaviors.socialBaseImageWidgetCrop = {
    attach: function(context, drupalSettings) {
      // Open widget when file is uploaded.
      $('.image-widget-data').each(function (i, e) {
        if (!$('> .form-file', e).length && !$(e).data('crop-attached')) {
          $(e).parent().next('.image-data__crop-wrapper').attr('open', 'open');
          $(e).data('crop-attached', true);
        }
        else if ($('> .form-file', e).length && $(e).data('crop-attached')) {
          $(e).data('crop-attached', false);
        }
      });
    }
  };

  $('.image-widget-data').each(function (i, e) {
    if (!$('> .form-file', e).length) {
      $(e).data('crop-attached', true);
    }
  });

  delete Drupal.behaviors.imageWidgetCrop.detach;

})(jQuery, Drupal, drupalSettings);
;
/**
 * @file
 * Theme hooks for the Drupal Bootstrap base theme.
 */
(function ($, Drupal) {

  if (Drupal.ImageWidgetCrop && Drupal.ImageWidgetCrop.prototype && Drupal.ImageWidgetCrop.prototype.selectors && Drupal.ImageWidgetCrop.prototype.selectors.summary) {
    Drupal.ImageWidgetCrop.prototype.selectors.summary += ', > .panel-heading > .panel-title';
  }

})(window.jQuery, window.Drupal);
;
/**
 * @file
 * Overrides core/misc/vertical-tabs.js.
 */

(function ($, window, Drupal, drupalSettings) {
  "use strict";

  /**
   * This script transforms a set of details into a stack of vertical
   * tabs. Another tab pane can be selected by clicking on the respective
   * tab.
   *
   * Each tab may have a summary which can be updated by another
   * script. For that to work, each details element has an associated
   * 'verticalTabCallback' (with jQuery.data() attached to the details),
   * which is called every time the user performs an update to a form
   * element inside the tab pane.
   */
  Drupal.behaviors.verticalTabs = {
    attach: function (context) {
      var width = drupalSettings.widthBreakpoint || 640;
      var mq = '(max-width: ' + width + 'px)';

      if (window.matchMedia(mq).matches) {
        return;
      }

      $(context).find('[data-vertical-tabs-panes]').once('vertical-tabs').each(function () {
        var $this = $(this).addClass('tab-content vertical-tabs-panes');

        var focusID = $(':hidden.vertical-tabs__active-tab', this).val();
        if (typeof focusID === 'undefined' || !focusID.length) {
          focusID = false;
        }
        var tab_focus;

        // Check if there are some details that can be converted to vertical-tabs
        var $details = $this.find('> .panel');
        if ($details.length === 0) {
          return;
        }

        // Create the tab column.
        var tab_list = $('<ul class="nav nav-tabs vertical-tabs-list"></ul>');
        $this.wrap('<div class="tabbable tabs-left vertical-tabs clearfix"></div>').before(tab_list);

        // Transform each details into a tab.
        $details.each(function () {
          var $that = $(this);
          var vertical_tab = new Drupal.verticalTab({
            title: $that.find('> .panel-heading > .panel-title, > .panel-heading').last().html(),
            details: $that
          });
          tab_list.append(vertical_tab.item);
          $that
            .removeClass('collapsed')
            // prop() can't be used on browsers not supporting details element,
            // the style won't apply to them if prop() is used.
            .attr('open', true)
            .removeClass('collapsible collapsed panel panel-default')
            .addClass('tab-pane vertical-tabs-pane')
            .data('verticalTab', vertical_tab)
            .find('> .panel-heading').remove();
          if (this.id === focusID) {
            tab_focus = $that;
          }
        });

        $(tab_list).find('> li:first').addClass('first');
        $(tab_list).find('> li:last').addClass('last');

        if (!tab_focus) {
          // If the current URL has a fragment and one of the tabs contains an
          // element that matches the URL fragment, activate that tab.
          var $locationHash = $this.find(window.location.hash);
          if (window.location.hash && $locationHash.length) {
            tab_focus = $locationHash.closest('.vertical-tabs-pane');
          }
          else {
            tab_focus = $this.find('> .vertical-tabs-pane:first');
          }
        }
        if (tab_focus.length) {
          tab_focus.data('verticalTab').focus();
        }
      });

      // Provide some Bootstrap tab/Drupal integration.
      // @todo merge this into the above code from core.
      $(context).find('.tabbable').once('bootstrap-tabs').each(function () {
        var $wrapper = $(this);
        var $tabs = $wrapper.find('.nav-tabs');
        var $content = $wrapper.find('.tab-content');
        var borderRadius = parseInt($content.css('borderBottomRightRadius'), 10);
        var bootstrapTabResize = function() {
          if ($wrapper.hasClass('tabs-left') || $wrapper.hasClass('tabs-right')) {
            $content.css('min-height', $tabs.outerHeight());
          }
        };
        // Add min-height on content for left and right tabs.
        bootstrapTabResize();
        // Detect tab switch.
        if ($wrapper.hasClass('tabs-left') || $wrapper.hasClass('tabs-right')) {
          $tabs.on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
            bootstrapTabResize();
            if ($wrapper.hasClass('tabs-left')) {
              if ($(e.target).parent().is(':first-child')) {
                $content.css('borderTopLeftRadius', '0');
              }
              else {
                $content.css('borderTopLeftRadius', borderRadius + 'px');
              }
            }
            else {
              if ($(e.target).parent().is(':first-child')) {
                $content.css('borderTopRightRadius', '0');
              }
              else {
                $content.css('borderTopRightRadius', borderRadius + 'px');
              }
            }
          });
        }
      });
    }
  };

  /**
   * The vertical tab object represents a single tab within a tab group.
   *
   * @param settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   *   - details: The jQuery object of the details element that is the tab pane.
   */
  Drupal.verticalTab = function (settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('verticalTab', settings));

    this.link.attr('href', '#' + settings.details.attr('id'));

    this.link.on('click', function (e) {
      e.preventDefault();
      self.focus();
    });

    // Keyboard events added:
    // Pressing the Enter key will open the tab pane.
    this.link.on('keydown', function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        self.focus();
        // Set focus on the first input field of the visible details/tab pane.
        $(".vertical-tabs-pane :input:visible:enabled:first").trigger('focus');
      }
    });

    this.details
      .on('summaryUpdated', function () {
        self.updateSummary();
      })
      .trigger('summaryUpdated');
  };

  Drupal.verticalTab.prototype = {
    /**
     * Displays the tab's content pane.
     */
    focus: function () {
      this.details
        .siblings('.vertical-tabs-pane')
        .each(function () {
          $(this).removeClass('active').find('> div').removeClass('in');
          var tab = $(this).data('verticalTab');
          tab.item.removeClass('selected');
        })
        .end()
        .addClass('active')
        .siblings(':hidden.vertical-tabs-active-tab')
        .val(this.details.attr('id'));
      this.details.find('> div').addClass('in');
      this.details.data('verticalTab').item.find('a').tab('show');
      this.item.addClass('selected');
      // Mark the active tab for screen readers.
      $('#active-vertical-tab').remove();
      this.link.append('<span id="active-vertical-tab" class="visually-hidden">' + Drupal.t('(active tab)') + '</span>');
    },

    /**
     * Updates the tab's summary.
     */
    updateSummary: function () {
      this.summary.html(this.details.drupalGetSummary());
    },

    /**
     * Shows a vertical tab pane.
     */
    tabShow: function () {
      // Display the tab.
      this.item.show();
      // Show the vertical tabs.
      this.item.closest('.form-type-vertical-tabs').show();
      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.vertical-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Display the details element.
      this.details.removeClass('vertical-tab-hidden').show();
      // Focus this tab.
      this.focus();
      return this;
    },

    /**
     * Hides a vertical tab pane.
     */
    tabHide: function () {
      // Hide this tab.
      this.item.hide();
      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.vertical-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Hide the details element.
      this.details.addClass('vertical-tab-hidden').hide();
      // Focus the first visible tab (if there is one).
      var $firstTab = this.details.siblings('.vertical-tabs-pane:not(.vertical-tab-hidden):first');
      if ($firstTab.length) {
        $firstTab.data('verticalTab').focus();
      }
      // Hide the vertical tabs (if no tabs remain).
      else {
        this.item.closest('.form-type-vertical-tabs').hide();
      }
      return this;
    }
  };

  /**
   * Theme function for a vertical tab.
   *
   * @param settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   * @return
   *   This function has to return an object with at least these keys:
   *   - item: The root tab jQuery element
   *   - link: The anchor tag that acts as the clickable area of the tab
   *       (jQuery version)
   *   - summary: The jQuery element that contains the tab summary
   */
  Drupal.theme.verticalTab = function (settings) {
    var tab = {};
    tab.item = $('<li class="vertical-tab-button" tabindex="-1"></li>')
      .append(tab.link = $('<a href="#' + settings.details[0].id + '" data-toggle="tab"></a>')
        .append(tab.title = $('<span></span>').html(settings.title))
        .append(tab.summary = $('<div class="summary"></div>')
      )
    );
    return tab;
  };

})(jQuery, this, Drupal, drupalSettings);
;
/* ========================================================================
 * Bootstrap: tab.js v3.3.7
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.3.7'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
          .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
            .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
            .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, debounce) {
  var liveElement = void 0;
  var announcements = [];

  Drupal.behaviors.drupalAnnounce = {
    attach: function attach(context) {
      if (!liveElement) {
        liveElement = document.createElement('div');
        liveElement.id = 'drupal-live-announce';
        liveElement.className = 'visually-hidden';
        liveElement.setAttribute('aria-live', 'polite');
        liveElement.setAttribute('aria-busy', 'false');
        document.body.appendChild(liveElement);
      }
    }
  };

  function announce() {
    var text = [];
    var priority = 'polite';
    var announcement = void 0;

    var il = announcements.length;
    for (var i = 0; i < il; i++) {
      announcement = announcements.pop();
      text.unshift(announcement.text);

      if (announcement.priority === 'assertive') {
        priority = 'assertive';
      }
    }

    if (text.length) {
      liveElement.innerHTML = '';

      liveElement.setAttribute('aria-busy', 'true');

      liveElement.setAttribute('aria-live', priority);

      liveElement.innerHTML = text.join('\n');

      liveElement.setAttribute('aria-busy', 'false');
    }
  }

  Drupal.announce = function (text, priority) {
    announcements.push({
      text: text,
      priority: priority
    });

    return debounce(announce, 200)();
  };
})(Drupal, Drupal.debounce);;
(function(){if(window.matchMedia&&window.matchMedia("all").addListener){return false}var e=window.matchMedia,i=e("only all").matches,n=false,t=0,a=[],r=function(i){clearTimeout(t);t=setTimeout(function(){for(var i=0,n=a.length;i<n;i++){var t=a[i].mql,r=a[i].listeners||[],o=e(t.media).matches;if(o!==t.matches){t.matches=o;for(var s=0,l=r.length;s<l;s++){r[s].call(window,t)}}}},30)};window.matchMedia=function(t){var o=e(t),s=[],l=0;o.addListener=function(e){if(!i){return}if(!n){n=true;window.addEventListener("resize",r,true)}if(l===0){l=a.push({mql:o,listeners:s})}s.push(e)};o.removeListener=function(e){for(var i=0,n=s.length;i<n;i++){if(s[i]===e){s.splice(i,1)}}};return o}})();
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  var activeItem = Drupal.url(drupalSettings.path.currentPath);

  $.fn.drupalToolbarMenu = function () {
    var ui = {
      handleOpen: Drupal.t('Extend'),
      handleClose: Drupal.t('Collapse')
    };

    function toggleClickHandler(event) {
      var $toggle = $(event.target);
      var $item = $toggle.closest('li');

      toggleList($item);

      var $openItems = $item.siblings().filter('.open');
      toggleList($openItems, false);
    }

    function linkClickHandler(event) {
      if (!Drupal.toolbar.models.toolbarModel.get('isFixed')) {
        Drupal.toolbar.models.toolbarModel.set('activeTab', null);
      }

      event.stopPropagation();
    }

    function toggleList($item, switcher) {
      var $toggle = $item.children('.toolbar-box').children('.toolbar-handle');
      switcher = typeof switcher !== 'undefined' ? switcher : !$item.hasClass('open');

      $item.toggleClass('open', switcher);

      $toggle.toggleClass('open', switcher);

      $toggle.find('.action').text(switcher ? ui.handleClose : ui.handleOpen);
    }

    function initItems($menu) {
      var options = {
        class: 'toolbar-icon toolbar-handle',
        action: ui.handleOpen,
        text: ''
      };

      $menu.find('li > a').wrap('<div class="toolbar-box">');

      $menu.find('li').each(function (index, element) {
        var $item = $(element);
        if ($item.children('ul.toolbar-menu').length) {
          var $box = $item.children('.toolbar-box');
          options.text = Drupal.t('@label', { '@label': $box.find('a').text() });
          $item.children('.toolbar-box').append(Drupal.theme('toolbarMenuItemToggle', options));
        }
      });
    }

    function markListLevels($lists, level) {
      level = !level ? 1 : level;
      var $lis = $lists.children('li').addClass('level-' + level);
      $lists = $lis.children('ul');
      if ($lists.length) {
        markListLevels($lists, level + 1);
      }
    }

    function openActiveItem($menu) {
      var pathItem = $menu.find('a[href="' + location.pathname + '"]');
      if (pathItem.length && !activeItem) {
        activeItem = location.pathname;
      }
      if (activeItem) {
        var $activeItem = $menu.find('a[href="' + activeItem + '"]').addClass('menu-item--active');
        var $activeTrail = $activeItem.parentsUntil('.root', 'li').addClass('menu-item--active-trail');
        toggleList($activeTrail, true);
      }
    }

    return this.each(function (selector) {
      var $menu = $(this).once('toolbar-menu');
      if ($menu.length) {
        $menu.on('click.toolbar', '.toolbar-box', toggleClickHandler).on('click.toolbar', '.toolbar-box a', linkClickHandler);

        $menu.addClass('root');
        initItems($menu);
        markListLevels($menu);

        openActiveItem($menu);
      }
    });
  };

  Drupal.theme.toolbarMenuItemToggle = function (options) {
    return '<button class="' + options.class + '"><span class="action">' + options.action + '</span><span class="label">' + options.text + '</span></button>';
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  var options = $.extend({
    breakpoints: {
      'toolbar.narrow': '',
      'toolbar.standard': '',
      'toolbar.wide': ''
    }
  }, drupalSettings.toolbar, {
    strings: {
      horizontal: Drupal.t('Horizontal orientation'),
      vertical: Drupal.t('Vertical orientation')
    }
  });

  Drupal.behaviors.toolbar = {
    attach: function attach(context) {
      if (!window.matchMedia('only screen').matches) {
        return;
      }

      $(context).find('#toolbar-administration').once('toolbar').each(function () {
        var model = new Drupal.toolbar.ToolbarModel({
          locked: JSON.parse(localStorage.getItem('Drupal.toolbar.trayVerticalLocked')),
          activeTab: document.getElementById(JSON.parse(localStorage.getItem('Drupal.toolbar.activeTabID'))),
          height: $('#toolbar-administration').outerHeight()
        });

        Drupal.toolbar.models.toolbarModel = model;

        Object.keys(options.breakpoints).forEach(function (label) {
          var mq = options.breakpoints[label];
          var mql = window.matchMedia(mq);
          Drupal.toolbar.mql[label] = mql;

          mql.addListener(Drupal.toolbar.mediaQueryChangeHandler.bind(null, model, label));

          Drupal.toolbar.mediaQueryChangeHandler.call(null, model, label, mql);
        });

        Drupal.toolbar.views.toolbarVisualView = new Drupal.toolbar.ToolbarVisualView({
          el: this,
          model: model,
          strings: options.strings
        });
        Drupal.toolbar.views.toolbarAuralView = new Drupal.toolbar.ToolbarAuralView({
          el: this,
          model: model,
          strings: options.strings
        });
        Drupal.toolbar.views.bodyVisualView = new Drupal.toolbar.BodyVisualView({
          el: this,
          model: model
        });

        model.trigger('change:isFixed', model, model.get('isFixed'));
        model.trigger('change:activeTray', model, model.get('activeTray'));

        var menuModel = new Drupal.toolbar.MenuModel();
        Drupal.toolbar.models.menuModel = menuModel;
        Drupal.toolbar.views.menuVisualView = new Drupal.toolbar.MenuVisualView({
          el: $(this).find('.toolbar-menu-administration').get(0),
          model: menuModel,
          strings: options.strings
        });

        Drupal.toolbar.setSubtrees.done(function (subtrees) {
          menuModel.set('subtrees', subtrees);
          var theme = drupalSettings.ajaxPageState.theme;
          localStorage.setItem('Drupal.toolbar.subtrees.' + theme, JSON.stringify(subtrees));

          model.set('areSubtreesLoaded', true);
        });

        Drupal.toolbar.views.toolbarVisualView.loadSubtrees();

        $(document).on('drupalViewportOffsetChange.toolbar', function (event, offsets) {
          model.set('offsets', offsets);
        });

        model.on('change:orientation', function (model, orientation) {
          $(document).trigger('drupalToolbarOrientationChange', orientation);
        }).on('change:activeTab', function (model, tab) {
          $(document).trigger('drupalToolbarTabChange', tab);
        }).on('change:activeTray', function (model, tray) {
          $(document).trigger('drupalToolbarTrayChange', tray);
        });

        if (Drupal.toolbar.models.toolbarModel.get('orientation') === 'horizontal' && Drupal.toolbar.models.toolbarModel.get('activeTab') === null) {
          Drupal.toolbar.models.toolbarModel.set({
            activeTab: $('.toolbar-bar .toolbar-tab:not(.home-toolbar-tab) a').get(0)
          });
        }
      });
    }
  };

  Drupal.toolbar = {
    views: {},

    models: {},

    mql: {},

    setSubtrees: new $.Deferred(),

    mediaQueryChangeHandler: function mediaQueryChangeHandler(model, label, mql) {
      switch (label) {
        case 'toolbar.narrow':
          model.set({
            isOriented: mql.matches,
            isTrayToggleVisible: false
          });

          if (!mql.matches || !model.get('orientation')) {
            model.set({ orientation: 'vertical' }, { validate: true });
          }
          break;

        case 'toolbar.standard':
          model.set({
            isFixed: mql.matches
          });
          break;

        case 'toolbar.wide':
          model.set({
            orientation: mql.matches && !model.get('locked') ? 'horizontal' : 'vertical'
          }, { validate: true });

          model.set({
            isTrayToggleVisible: mql.matches
          });
          break;

        default:
          break;
      }
    }
  };

  Drupal.theme.toolbarOrientationToggle = function () {
    return '<div class="toolbar-toggle-orientation"><div class="toolbar-lining">' + '<button class="toolbar-icon" type="button"></button>' + '</div></div>';
  };

  Drupal.AjaxCommands.prototype.setToolbarSubtrees = function (ajax, response, status) {
    Drupal.toolbar.setSubtrees.resolve(response.subtrees);
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Backbone, Drupal) {
  Drupal.toolbar.MenuModel = Backbone.Model.extend({
    defaults: {
      subtrees: {}
    }
  });
})(Backbone, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Backbone, Drupal) {
  Drupal.toolbar.ToolbarModel = Backbone.Model.extend({
    defaults: {
      activeTab: null,

      activeTray: null,

      isOriented: false,

      isFixed: false,

      areSubtreesLoaded: false,

      isViewportOverflowConstrained: false,

      orientation: 'horizontal',

      locked: false,

      isTrayToggleVisible: true,

      height: null,

      offsets: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },

    validate: function validate(attributes, options) {
      if (attributes.orientation === 'horizontal' && this.get('locked') && !options.override) {
        return Drupal.t('The toolbar cannot be set to a horizontal orientation when it is locked.');
      }
    }
  });
})(Backbone, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, Backbone) {
  Drupal.toolbar.BodyVisualView = Backbone.View.extend({
    initialize: function initialize() {
      this.listenTo(this.model, 'change:activeTray ', this.render);
      this.listenTo(this.model, 'change:isFixed change:isViewportOverflowConstrained', this.isToolbarFixed);
    },
    isToolbarFixed: function isToolbarFixed() {
      var isViewportOverflowConstrained = this.model.get('isViewportOverflowConstrained');
      $('body').toggleClass('toolbar-fixed', isViewportOverflowConstrained || this.model.get('isFixed'));
    },
    render: function render() {
      $('body').toggleClass('toolbar-tray-open', !!this.model.get('activeTray'));
    }
  });
})(jQuery, Drupal, Backbone);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Backbone, Drupal) {
  Drupal.toolbar.MenuVisualView = Backbone.View.extend({
    initialize: function initialize() {
      this.listenTo(this.model, 'change:subtrees', this.render);
    },
    render: function render() {
      var _this = this;

      var subtrees = this.model.get('subtrees');

      Object.keys(subtrees || {}).forEach(function (id) {
        _this.$el.find('#toolbar-link-' + id).once('toolbar-subtrees').after(subtrees[id]);
      });

      if ('drupalToolbarMenu' in $.fn) {
        this.$el.children('.toolbar-menu').drupalToolbarMenu();
      }
    }
  });
})(jQuery, Backbone, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Backbone, Drupal) {
  Drupal.toolbar.ToolbarAuralView = Backbone.View.extend({
    initialize: function initialize(options) {
      this.strings = options.strings;

      this.listenTo(this.model, 'change:orientation', this.onOrientationChange);
      this.listenTo(this.model, 'change:activeTray', this.onActiveTrayChange);
    },
    onOrientationChange: function onOrientationChange(model, orientation) {
      Drupal.announce(Drupal.t('Tray orientation changed to @orientation.', {
        '@orientation': orientation
      }));
    },
    onActiveTrayChange: function onActiveTrayChange(model, tray) {
      var relevantTray = tray === null ? model.previous('activeTray') : tray;

      if (!relevantTray) {
        return;
      }
      var action = tray === null ? Drupal.t('closed') : Drupal.t('opened');
      var trayNameElement = relevantTray.querySelector('.toolbar-tray-name');
      var text = void 0;
      if (trayNameElement !== null) {
        text = Drupal.t('Tray "@tray" @action.', {
          '@tray': trayNameElement.textContent, '@action': action
        });
      } else {
        text = Drupal.t('Tray @action.', { '@action': action });
      }
      Drupal.announce(text);
    }
  });
})(Backbone, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings, Backbone) {
  Drupal.toolbar.ToolbarVisualView = Backbone.View.extend({
    events: function events() {
      var touchEndToClick = function touchEndToClick(event) {
        event.preventDefault();
        event.target.click();
      };

      return {
        'click .toolbar-bar .toolbar-tab .trigger': 'onTabClick',
        'click .toolbar-toggle-orientation button': 'onOrientationToggleClick',
        'touchend .toolbar-bar .toolbar-tab .trigger': touchEndToClick,
        'touchend .toolbar-toggle-orientation button': touchEndToClick
      };
    },
    initialize: function initialize(options) {
      this.strings = options.strings;

      this.listenTo(this.model, 'change:activeTab change:orientation change:isOriented change:isTrayToggleVisible', this.render);
      this.listenTo(this.model, 'change:mqMatches', this.onMediaQueryChange);
      this.listenTo(this.model, 'change:offsets', this.adjustPlacement);
      this.listenTo(this.model, 'change:activeTab change:orientation change:isOriented', this.updateToolbarHeight);

      this.$el.find('.toolbar-tray .toolbar-lining').append(Drupal.theme('toolbarOrientationToggle'));

      this.model.trigger('change:activeTab');
    },
    updateToolbarHeight: function updateToolbarHeight() {
      var toolbarTabOuterHeight = $('#toolbar-bar').find('.toolbar-tab').outerHeight() || 0;
      var toolbarTrayHorizontalOuterHeight = $('.is-active.toolbar-tray-horizontal').outerHeight() || 0;
      this.model.set('height', toolbarTabOuterHeight + toolbarTrayHorizontalOuterHeight);

      $('body').css({
        'padding-top': this.model.get('height')
      });

      this.triggerDisplace();
    },
    triggerDisplace: function triggerDisplace() {
      _.defer(function () {
        Drupal.displace(true);
      });
    },
    render: function render() {
      this.updateTabs();
      this.updateTrayOrientation();
      this.updateBarAttributes();

      $('body').removeClass('toolbar-loading');

      if (this.model.changed.orientation === 'vertical' || this.model.changed.activeTab) {
        this.loadSubtrees();
      }

      return this;
    },
    onTabClick: function onTabClick(event) {
      if (event.target.hasAttribute('data-toolbar-tray')) {
        var activeTab = this.model.get('activeTab');
        var clickedTab = event.target;

        this.model.set('activeTab', !activeTab || clickedTab !== activeTab ? clickedTab : null);

        event.preventDefault();
        event.stopPropagation();
      }
    },
    onOrientationToggleClick: function onOrientationToggleClick(event) {
      var orientation = this.model.get('orientation');

      var antiOrientation = orientation === 'vertical' ? 'horizontal' : 'vertical';
      var locked = antiOrientation === 'vertical';

      if (locked) {
        localStorage.setItem('Drupal.toolbar.trayVerticalLocked', 'true');
      } else {
        localStorage.removeItem('Drupal.toolbar.trayVerticalLocked');
      }

      this.model.set({
        locked: locked,
        orientation: antiOrientation
      }, {
        validate: true,
        override: true
      });

      event.preventDefault();
      event.stopPropagation();
    },
    updateTabs: function updateTabs() {
      var $tab = $(this.model.get('activeTab'));

      $(this.model.previous('activeTab')).removeClass('is-active').prop('aria-pressed', false);

      $(this.model.previous('activeTray')).removeClass('is-active');

      if ($tab.length > 0) {
        $tab.addClass('is-active').prop('aria-pressed', true);
        var name = $tab.attr('data-toolbar-tray');

        var id = $tab.get(0).id;
        if (id) {
          localStorage.setItem('Drupal.toolbar.activeTabID', JSON.stringify(id));
        }

        var $tray = this.$el.find('[data-toolbar-tray="' + name + '"].toolbar-tray');
        if ($tray.length) {
          $tray.addClass('is-active');
          this.model.set('activeTray', $tray.get(0));
        } else {
          this.model.set('activeTray', null);
        }
      } else {
        this.model.set('activeTray', null);
        localStorage.removeItem('Drupal.toolbar.activeTabID');
      }
    },
    updateBarAttributes: function updateBarAttributes() {
      var isOriented = this.model.get('isOriented');
      if (isOriented) {
        this.$el.find('.toolbar-bar').attr('data-offset-top', '');
      } else {
        this.$el.find('.toolbar-bar').removeAttr('data-offset-top');
      }

      this.$el.toggleClass('toolbar-oriented', isOriented);
    },
    updateTrayOrientation: function updateTrayOrientation() {
      var orientation = this.model.get('orientation');

      var antiOrientation = orientation === 'vertical' ? 'horizontal' : 'vertical';

      $('body').toggleClass('toolbar-vertical', orientation === 'vertical').toggleClass('toolbar-horizontal', orientation === 'horizontal');

      var removeClass = antiOrientation === 'horizontal' ? 'toolbar-tray-horizontal' : 'toolbar-tray-vertical';
      var $trays = this.$el.find('.toolbar-tray').removeClass(removeClass).addClass('toolbar-tray-' + orientation);

      var iconClass = 'toolbar-icon-toggle-' + orientation;
      var iconAntiClass = 'toolbar-icon-toggle-' + antiOrientation;
      var $orientationToggle = this.$el.find('.toolbar-toggle-orientation').toggle(this.model.get('isTrayToggleVisible'));
      $orientationToggle.find('button').val(antiOrientation).attr('title', this.strings[antiOrientation]).text(this.strings[antiOrientation]).removeClass(iconClass).addClass(iconAntiClass);

      var dir = document.documentElement.dir;
      var edge = dir === 'rtl' ? 'right' : 'left';

      $trays.removeAttr('data-offset-left data-offset-right data-offset-top');

      $trays.filter('.toolbar-tray-vertical.is-active').attr('data-offset-' + edge, '');

      $trays.filter('.toolbar-tray-horizontal.is-active').attr('data-offset-top', '');
    },
    adjustPlacement: function adjustPlacement() {
      var $trays = this.$el.find('.toolbar-tray');
      if (!this.model.get('isOriented')) {
        $trays.removeClass('toolbar-tray-horizontal').addClass('toolbar-tray-vertical');
      }
    },
    loadSubtrees: function loadSubtrees() {
      var $activeTab = $(this.model.get('activeTab'));
      var orientation = this.model.get('orientation');

      if (!this.model.get('areSubtreesLoaded') && typeof $activeTab.data('drupal-subtrees') !== 'undefined' && orientation === 'vertical') {
        var subtreesHash = drupalSettings.toolbar.subtreesHash;
        var theme = drupalSettings.ajaxPageState.theme;
        var endpoint = Drupal.url('toolbar/subtrees/' + subtreesHash);
        var cachedSubtreesHash = localStorage.getItem('Drupal.toolbar.subtreesHash.' + theme);
        var cachedSubtrees = JSON.parse(localStorage.getItem('Drupal.toolbar.subtrees.' + theme));
        var isVertical = this.model.get('orientation') === 'vertical';

        if (isVertical && subtreesHash === cachedSubtreesHash && cachedSubtrees) {
          Drupal.toolbar.setSubtrees.resolve(cachedSubtrees);
        } else if (isVertical) {
            localStorage.removeItem('Drupal.toolbar.subtreesHash.' + theme);
            localStorage.removeItem('Drupal.toolbar.subtrees.' + theme);

            Drupal.ajax({ url: endpoint }).execute();

            localStorage.setItem('Drupal.toolbar.subtreesHash.' + theme, subtreesHash);
          }
      }
    }
  });
})(jQuery, Drupal, drupalSettings, Backbone);;
/*!
 * hoverIntent v1.8.1 // 2014.08.11 // jQuery v1.9.1+
 * http://briancherne.github.io/jquery-hoverIntent/
 *
 * You may use hoverIntent under the terms of the MIT license. Basically that
 * means you are free to use hoverIntent as long as this header is left intact.
 * Copyright 2007, 2014 Brian Cherne
 */

/* hoverIntent is similar to jQuery's built-in "hover" method except that
 * instead of firing the handlerIn function immediately, hoverIntent checks
 * to see if the user's mouse has slowed down (beneath the sensitivity
 * threshold) before firing the event. The handlerOut function is only
 * called after a matching handlerIn.
 *
 * // basic usage ... just like .hover()
 * .hoverIntent( handlerIn, handlerOut )
 * .hoverIntent( handlerInOut )
 *
 * // basic usage ... with event delegation!
 * .hoverIntent( handlerIn, handlerOut, selector )
 * .hoverIntent( handlerInOut, selector )
 *
 * // using a basic configuration object
 * .hoverIntent( config )
 *
 * @param  handlerIn   function OR configuration object
 * @param  handlerOut  function OR selector for delegation OR undefined
 * @param  selector    selector OR undefined
 * @author Brian Cherne <brian(at)cherne(dot)net>
 */

;(function(factory) {
  'use strict';
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (jQuery && !jQuery.fn.hoverIntent) {
    factory(jQuery);
  }
})(function($) {
  'use strict';

  // default configuration values
  var _cfg = {
    interval: 100,
    sensitivity: 6,
    timeout: 0
  };

  // counter used to generate an ID for each instance
  var INSTANCE_COUNT = 0;

  // current X and Y position of mouse, updated during mousemove tracking (shared across instances)
  var cX, cY;

  // saves the current pointer position coordinates based on the given mousemove event
  var track = function(ev) {
    cX = ev.pageX;
    cY = ev.pageY;
  };

  // compares current and previous mouse positions
  var compare = function(ev,$el,s,cfg) {
    // compare mouse positions to see if pointer has slowed enough to trigger `over` function
    if ( Math.sqrt( (s.pX-cX)*(s.pX-cX) + (s.pY-cY)*(s.pY-cY) ) < cfg.sensitivity ) {
      $el.off(s.event,track);
      delete s.timeoutId;
      // set hoverIntent state as active for this element (permits `out` handler to trigger)
      s.isActive = true;
      // overwrite old mouseenter event coordinates with most recent pointer position
      ev.pageX = cX; ev.pageY = cY;
      // clear coordinate data from state object
      delete s.pX; delete s.pY;
      return cfg.over.apply($el[0],[ev]);
    } else {
      // set previous coordinates for next comparison
      s.pX = cX; s.pY = cY;
      // use self-calling timeout, guarantees intervals are spaced out properly (avoids JavaScript timer bugs)
      s.timeoutId = setTimeout( function(){compare(ev, $el, s, cfg);} , cfg.interval );
    }
  };

  // triggers given `out` function at configured `timeout` after a mouseleave and clears state
  var delay = function(ev,$el,s,out) {
    delete $el.data('hoverIntent')[s.id];
    return out.apply($el[0],[ev]);
  };

  $.fn.hoverIntent = function(handlerIn,handlerOut,selector) {
    // instance ID, used as a key to store and retrieve state information on an element
    var instanceId = INSTANCE_COUNT++;

    // extend the default configuration and parse parameters
    var cfg = $.extend({}, _cfg);
    if ( $.isPlainObject(handlerIn) ) {
      cfg = $.extend(cfg, handlerIn);
      if ( !$.isFunction(cfg.out) ) {
        cfg.out = cfg.over;
      }
    } else if ( $.isFunction(handlerOut) ) {
      cfg = $.extend(cfg, { over: handlerIn, out: handlerOut, selector: selector } );
    } else {
      cfg = $.extend(cfg, { over: handlerIn, out: handlerIn, selector: handlerOut } );
    }

    // A private function for handling mouse 'hovering'
    var handleHover = function(e) {
      // cloned event to pass to handlers (copy required for event object to be passed in IE)
      var ev = $.extend({},e);

      // the current target of the mouse event, wrapped in a jQuery object
      var $el = $(this);

      // read hoverIntent data from element (or initialize if not present)
      var hoverIntentData = $el.data('hoverIntent');
      if (!hoverIntentData) { $el.data('hoverIntent', (hoverIntentData = {})); }

      // read per-instance state from element (or initialize if not present)
      var state = hoverIntentData[instanceId];
      if (!state) { hoverIntentData[instanceId] = state = { id: instanceId }; }

      // state properties:
      // id = instance ID, used to clean up data
      // timeoutId = timeout ID, reused for tracking mouse position and delaying "out" handler
      // isActive = plugin state, true after `over` is called just until `out` is called
      // pX, pY = previously-measured pointer coordinates, updated at each polling interval
      // event = string representing the namespaced event used for mouse tracking

      // clear any existing timeout
      if (state.timeoutId) { state.timeoutId = clearTimeout(state.timeoutId); }

      // namespaced event used to register and unregister mousemove tracking
      var mousemove = state.event = 'mousemove.hoverIntent.hoverIntent'+instanceId;

      // handle the event, based on its type
      if (e.type === 'mouseenter') {
        // do nothing if already active
        if (state.isActive) { return; }
        // set "previous" X and Y position based on initial entry point
        state.pX = ev.pageX; state.pY = ev.pageY;
        // update "current" X and Y position based on mousemove
        $el.off(mousemove,track).on(mousemove,track);
        // start polling interval (self-calling timeout) to compare mouse coordinates over time
        state.timeoutId = setTimeout( function(){compare(ev,$el,state,cfg);} , cfg.interval );
      } else { // "mouseleave"
        // do nothing if not already active
        if (!state.isActive) { return; }
        // unbind expensive mousemove event
        $el.off(mousemove,track);
        // if hoverIntent state is true, then call the mouseOut function after the specified delay
        state.timeoutId = setTimeout( function(){delay(ev,$el,state,cfg.out);} , cfg.timeout );
      }
    };

    // listen for mouseenter and mouseleave
    return this.on({'mouseenter.hoverIntent':handleHover,'mouseleave.hoverIntent':handleHover}, cfg.selector);
  };
});
;
(function ($, Drupal) {
  Drupal.behaviors.adminToolbar = {
    attach: function (context, settings) {

      $('a.toolbar-icon', context).removeAttr('title');

      $('.toolbar-tray li.menu-item--expanded, .toolbar-tray ul li.menu-item--expanded .menu-item', context).hoverIntent({
        over: function () {
          // At the current depth, we should delete all "hover-intent" classes.
          // Other wise we get unwanted behaviour where menu items are expanded while already in hovering other ones.
          $(this).parent().find('li').removeClass('hover-intent');
          $(this).addClass('hover-intent');
        },
        out: function () {
          $(this).removeClass('hover-intent');
        },
        timeout: 250
      });

      // Make the toolbar menu navigable with keyboard.
      $('ul.toolbar-menu li.menu-item--expanded a', context).on('focusin', function () {
        $('li.menu-item--expanded', context).removeClass('hover-intent');
        $(this).parents('li.menu-item--expanded').addClass('hover-intent');
      });

      $('ul.toolbar-menu li.menu-item a', context).keydown(function (e) {
        if ((e.shiftKey && (e.keyCode || e.which) == 9)) {
          if ($(this).parent('.menu-item').prev().hasClass('menu-item--expanded')) {
            $(this).parent('.menu-item').prev().addClass('hover-intent');
          }
        }
      });

      $('.toolbar-menu:first-child > .menu-item:not(.menu-item--expanded) a, .toolbar-tab > a', context).on('focusin', function () {
        $('.menu-item--expanded').removeClass('hover-intent');
      });

      $('.toolbar-menu:first-child > .menu-item', context).on('hover', function () {
        $(this, 'a').css("background: #fff;");
      });

      $('ul:not(.toolbar-menu)', context).on({
        mousemove: function () {
          $('li.menu-item--expanded').removeClass('hover-intent');
        },
        hover: function () {
          $('li.menu-item--expanded').removeClass('hover-intent');
        }
      });

    }
  };
})(jQuery, Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  var pathInfo = drupalSettings.path;
  var escapeAdminPath = sessionStorage.getItem('escapeAdminPath');
  var windowLocation = window.location;

  if (!pathInfo.currentPathIsAdmin && !/destination=/.test(windowLocation.search)) {
    sessionStorage.setItem('escapeAdminPath', windowLocation);
  }

  Drupal.behaviors.escapeAdmin = {
    attach: function attach() {
      var $toolbarEscape = $('[data-toolbar-escape-admin]').once('escapeAdmin');
      if ($toolbarEscape.length && pathInfo.currentPathIsAdmin) {
        if (escapeAdminPath !== null) {
          $toolbarEscape.attr('href', escapeAdminPath);
        } else {
          $toolbarEscape.text(Drupal.t('Home'));
        }
      }
    }
  };
})(jQuery, Drupal, drupalSettings);;
