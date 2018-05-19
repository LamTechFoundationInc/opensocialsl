/**
 * @file
 * Enable CTRL+Enter to submit a form.
 */

(function ($) {

  'use strict';

  Drupal.behaviors.keycodeSubmit = {
    attach: function (context, settings) {

      // Enable CTRL+Enter to submit a form.
      var keySubmit = function (form, textarea, submit) {
        textarea.on("keydown", function (e) {
          // Make sure the textarea contains text.
          if ($.trim(textarea.val()) != "") {
            if ((e.keyCode == 13 && e.ctrlKey) || (e.keyCode == 13 && e.metaKey)){
              e.preventDefault();
              submit.prop('disabled', true);
              form.submit();
            }
          }
        });
      }

      // Post form.
      var postForm = $('#social-post-entity-form');
      keySubmit($(postForm), $('.form-textarea', postForm), $('.form-submit', postForm));

      // Comment forms.
      $('.comment-form').each(function () {
        keySubmit($(this), $('.form-textarea', this), $('.form-submit', this));
      });

    }
  };
})(jQuery);
;
(function ($) {

  'use strict';

  Drupal.behaviors.socialCommentUpload = {
    attach: function(context, setting) {
      $('.comment-attachments').once('socialCommentUpload').each(function () {
        var $content = $('> div', this).filter(function () {
              return !$(this).hasClass('panel-heading');
            }),
            $header = $('> summary', this),
            display = true,
            handle = function () {
              display = !display;
              $content.toggle(display);
            };

        $header
          .on('click', handle)
          .ready(handle);
      });
    }
  };

})(jQuery);
;
/*! jQuery UI - v1.12.1 - 2017-03-31
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../keycode","../position","../safe-active-element","../unique-id","../version","../widget"],a):a(jQuery)}(function(a){return a.widget("ui.menu",{version:"1.12.1",defaultElement:"<ul>",delay:300,options:{icons:{submenu:"ui-icon-caret-1-e"},items:"> *",menus:"ul",position:{my:"left top",at:"right top"},role:"menu",blur:null,focus:null,select:null},_create:function(){this.activeMenu=this.element,this.mouseHandled=!1,this.element.uniqueId().attr({role:this.options.role,tabIndex:0}),this._addClass("ui-menu","ui-widget ui-widget-content"),this._on({"mousedown .ui-menu-item":function(a){a.preventDefault()},"click .ui-menu-item":function(b){var c=a(b.target),d=a(a.ui.safeActiveElement(this.document[0]));!this.mouseHandled&&c.not(".ui-state-disabled").length&&(this.select(b),b.isPropagationStopped()||(this.mouseHandled=!0),c.has(".ui-menu").length?this.expand(b):!this.element.is(":focus")&&d.closest(".ui-menu").length&&(this.element.trigger("focus",[!0]),this.active&&1===this.active.parents(".ui-menu").length&&clearTimeout(this.timer)))},"mouseenter .ui-menu-item":function(b){if(!this.previousFilter){var c=a(b.target).closest(".ui-menu-item"),d=a(b.currentTarget);c[0]===d[0]&&(this._removeClass(d.siblings().children(".ui-state-active"),null,"ui-state-active"),this.focus(b,d))}},mouseleave:"collapseAll","mouseleave .ui-menu":"collapseAll",focus:function(a,b){var c=this.active||this.element.find(this.options.items).eq(0);b||this.focus(a,c)},blur:function(b){this._delay(function(){var c=!a.contains(this.element[0],a.ui.safeActiveElement(this.document[0]));c&&this.collapseAll(b)})},keydown:"_keydown"}),this.refresh(),this._on(this.document,{click:function(a){this._closeOnDocumentClick(a)&&this.collapseAll(a),this.mouseHandled=!1}})},_destroy:function(){var b=this.element.find(".ui-menu-item").removeAttr("role aria-disabled"),c=b.children(".ui-menu-item-wrapper").removeUniqueId().removeAttr("tabIndex role aria-haspopup");this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeAttr("role aria-labelledby aria-expanded aria-hidden aria-disabled tabIndex").removeUniqueId().show(),c.children().each(function(){var b=a(this);b.data("ui-menu-submenu-caret")&&b.remove()})},_keydown:function(b){var c,d,e,f,g=!0;switch(b.keyCode){case a.ui.keyCode.PAGE_UP:this.previousPage(b);break;case a.ui.keyCode.PAGE_DOWN:this.nextPage(b);break;case a.ui.keyCode.HOME:this._move("first","first",b);break;case a.ui.keyCode.END:this._move("last","last",b);break;case a.ui.keyCode.UP:this.previous(b);break;case a.ui.keyCode.DOWN:this.next(b);break;case a.ui.keyCode.LEFT:this.collapse(b);break;case a.ui.keyCode.RIGHT:this.active&&!this.active.is(".ui-state-disabled")&&this.expand(b);break;case a.ui.keyCode.ENTER:case a.ui.keyCode.SPACE:this._activate(b);break;case a.ui.keyCode.ESCAPE:this.collapse(b);break;default:g=!1,d=this.previousFilter||"",f=!1,e=b.keyCode>=96&&b.keyCode<=105?(b.keyCode-96).toString():String.fromCharCode(b.keyCode),clearTimeout(this.filterTimer),e===d?f=!0:e=d+e,c=this._filterMenuItems(e),c=f&&c.index(this.active.next())!==-1?this.active.nextAll(".ui-menu-item"):c,c.length||(e=String.fromCharCode(b.keyCode),c=this._filterMenuItems(e)),c.length?(this.focus(b,c),this.previousFilter=e,this.filterTimer=this._delay(function(){delete this.previousFilter},1e3)):delete this.previousFilter}g&&b.preventDefault()},_activate:function(a){this.active&&!this.active.is(".ui-state-disabled")&&(this.active.children("[aria-haspopup='true']").length?this.expand(a):this.select(a))},refresh:function(){var b,c,d,e,f,g=this,h=this.options.icons.submenu,i=this.element.find(this.options.menus);this._toggleClass("ui-menu-icons",null,!!this.element.find(".ui-icon").length),d=i.filter(":not(.ui-menu)").hide().attr({role:this.options.role,"aria-hidden":"true","aria-expanded":"false"}).each(function(){var b=a(this),c=b.prev(),d=a("<span>").data("ui-menu-submenu-caret",!0);g._addClass(d,"ui-menu-icon","ui-icon "+h),c.attr("aria-haspopup","true").prepend(d),b.attr("aria-labelledby",c.attr("id"))}),this._addClass(d,"ui-menu","ui-widget ui-widget-content ui-front"),b=i.add(this.element),c=b.find(this.options.items),c.not(".ui-menu-item").each(function(){var b=a(this);g._isDivider(b)&&g._addClass(b,"ui-menu-divider","ui-widget-content")}),e=c.not(".ui-menu-item, .ui-menu-divider"),f=e.children().not(".ui-menu").uniqueId().attr({tabIndex:-1,role:this._itemRole()}),this._addClass(e,"ui-menu-item")._addClass(f,"ui-menu-item-wrapper"),c.filter(".ui-state-disabled").attr("aria-disabled","true"),this.active&&!a.contains(this.element[0],this.active[0])&&this.blur()},_itemRole:function(){return{menu:"menuitem",listbox:"option"}[this.options.role]},_setOption:function(a,b){if("icons"===a){var c=this.element.find(".ui-menu-icon");this._removeClass(c,null,this.options.icons.submenu)._addClass(c,null,b.submenu)}this._super(a,b)},_setOptionDisabled:function(a){this._super(a),this.element.attr("aria-disabled",String(a)),this._toggleClass(null,"ui-state-disabled",!!a)},focus:function(a,b){var c,d,e;this.blur(a,a&&"focus"===a.type),this._scrollIntoView(b),this.active=b.first(),d=this.active.children(".ui-menu-item-wrapper"),this._addClass(d,null,"ui-state-active"),this.options.role&&this.element.attr("aria-activedescendant",d.attr("id")),e=this.active.parent().closest(".ui-menu-item").children(".ui-menu-item-wrapper"),this._addClass(e,null,"ui-state-active"),a&&"keydown"===a.type?this._close():this.timer=this._delay(function(){this._close()},this.delay),c=b.children(".ui-menu"),c.length&&a&&/^mouse/.test(a.type)&&this._startOpening(c),this.activeMenu=b.parent(),this._trigger("focus",a,{item:b})},_scrollIntoView:function(b){var c,d,e,f,g,h;this._hasScroll()&&(c=parseFloat(a.css(this.activeMenu[0],"borderTopWidth"))||0,d=parseFloat(a.css(this.activeMenu[0],"paddingTop"))||0,e=b.offset().top-this.activeMenu.offset().top-c-d,f=this.activeMenu.scrollTop(),g=this.activeMenu.height(),h=b.outerHeight(),e<0?this.activeMenu.scrollTop(f+e):e+h>g&&this.activeMenu.scrollTop(f+e-g+h))},blur:function(a,b){b||clearTimeout(this.timer),this.active&&(this._removeClass(this.active.children(".ui-menu-item-wrapper"),null,"ui-state-active"),this._trigger("blur",a,{item:this.active}),this.active=null)},_startOpening:function(a){clearTimeout(this.timer),"true"===a.attr("aria-hidden")&&(this.timer=this._delay(function(){this._close(),this._open(a)},this.delay))},_open:function(b){var c=a.extend({of:this.active},this.options.position);clearTimeout(this.timer),this.element.find(".ui-menu").not(b.parents(".ui-menu")).hide().attr("aria-hidden","true"),b.show().removeAttr("aria-hidden").attr("aria-expanded","true").position(c)},collapseAll:function(b,c){clearTimeout(this.timer),this.timer=this._delay(function(){var d=c?this.element:a(b&&b.target).closest(this.element.find(".ui-menu"));d.length||(d=this.element),this._close(d),this.blur(b),this._removeClass(d.find(".ui-state-active"),null,"ui-state-active"),this.activeMenu=d},this.delay)},_close:function(a){a||(a=this.active?this.active.parent():this.element),a.find(".ui-menu").hide().attr("aria-hidden","true").attr("aria-expanded","false")},_closeOnDocumentClick:function(b){return!a(b.target).closest(".ui-menu").length},_isDivider:function(a){return!/[^\-\u2014\u2013\s]/.test(a.text())},collapse:function(a){var b=this.active&&this.active.parent().closest(".ui-menu-item",this.element);b&&b.length&&(this._close(),this.focus(a,b))},expand:function(a){var b=this.active&&this.active.children(".ui-menu ").find(this.options.items).first();b&&b.length&&(this._open(b.parent()),this._delay(function(){this.focus(a,b)}))},next:function(a){this._move("next","first",a)},previous:function(a){this._move("prev","last",a)},isFirstItem:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},isLastItem:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},_move:function(a,b,c){var d;this.active&&(d="first"===a||"last"===a?this.active["first"===a?"prevAll":"nextAll"](".ui-menu-item").eq(-1):this.active[a+"All"](".ui-menu-item").eq(0)),d&&d.length&&this.active||(d=this.activeMenu.find(this.options.items)[b]()),this.focus(c,d)},nextPage:function(b){var c,d,e;return this.active?void(this.isLastItem()||(this._hasScroll()?(d=this.active.offset().top,e=this.element.height(),this.active.nextAll(".ui-menu-item").each(function(){return c=a(this),c.offset().top-d-e<0}),this.focus(b,c)):this.focus(b,this.activeMenu.find(this.options.items)[this.active?"last":"first"]()))):void this.next(b)},previousPage:function(b){var c,d,e;return this.active?void(this.isFirstItem()||(this._hasScroll()?(d=this.active.offset().top,e=this.element.height(),this.active.prevAll(".ui-menu-item").each(function(){return c=a(this),c.offset().top-d+e>0}),this.focus(b,c)):this.focus(b,this.activeMenu.find(this.options.items).first()))):void this.next(b)},_hasScroll:function(){return this.element.outerHeight()<this.element.prop("scrollHeight")},select:function(b){this.active=this.active||a(b.target).closest(".ui-menu-item");var c={item:this.active};this.active.has(".ui-menu").length||this.collapseAll(b,!0),this._trigger("select",b,c)},_filterMenuItems:function(b){var c=b.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&"),d=new RegExp("^"+c,"i");return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter(function(){return d.test(a.trim(a(this).children(".ui-menu-item-wrapper").text()))})}})});;
/*! jQuery UI - v1.12.1 - 2017-03-31
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){"function"==typeof define&&define.amd?define(["jquery","./menu","../keycode","../position","../safe-active-element","../version","../widget"],a):a(jQuery)}(function(a){return a.widget("ui.autocomplete",{version:"1.12.1",defaultElement:"<input>",options:{appendTo:null,autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null,change:null,close:null,focus:null,open:null,response:null,search:null,select:null},requestIndex:0,pending:0,_create:function(){var b,c,d,e=this.element[0].nodeName.toLowerCase(),f="textarea"===e,g="input"===e;this.isMultiLine=f||!g&&this._isContentEditable(this.element),this.valueMethod=this.element[f||g?"val":"text"],this.isNewMenu=!0,this._addClass("ui-autocomplete-input"),this.element.attr("autocomplete","off"),this._on(this.element,{keydown:function(e){if(this.element.prop("readOnly"))return b=!0,d=!0,void(c=!0);b=!1,d=!1,c=!1;var f=a.ui.keyCode;switch(e.keyCode){case f.PAGE_UP:b=!0,this._move("previousPage",e);break;case f.PAGE_DOWN:b=!0,this._move("nextPage",e);break;case f.UP:b=!0,this._keyEvent("previous",e);break;case f.DOWN:b=!0,this._keyEvent("next",e);break;case f.ENTER:this.menu.active&&(b=!0,e.preventDefault(),this.menu.select(e));break;case f.TAB:this.menu.active&&this.menu.select(e);break;case f.ESCAPE:this.menu.element.is(":visible")&&(this.isMultiLine||this._value(this.term),this.close(e),e.preventDefault());break;default:c=!0,this._searchTimeout(e)}},keypress:function(d){if(b)return b=!1,void(this.isMultiLine&&!this.menu.element.is(":visible")||d.preventDefault());if(!c){var e=a.ui.keyCode;switch(d.keyCode){case e.PAGE_UP:this._move("previousPage",d);break;case e.PAGE_DOWN:this._move("nextPage",d);break;case e.UP:this._keyEvent("previous",d);break;case e.DOWN:this._keyEvent("next",d)}}},input:function(a){return d?(d=!1,void a.preventDefault()):void this._searchTimeout(a)},focus:function(){this.selectedItem=null,this.previous=this._value()},blur:function(a){return this.cancelBlur?void delete this.cancelBlur:(clearTimeout(this.searching),this.close(a),void this._change(a))}}),this._initSource(),this.menu=a("<ul>").appendTo(this._appendTo()).menu({role:null}).hide().menu("instance"),this._addClass(this.menu.element,"ui-autocomplete","ui-front"),this._on(this.menu.element,{mousedown:function(b){b.preventDefault(),this.cancelBlur=!0,this._delay(function(){delete this.cancelBlur,this.element[0]!==a.ui.safeActiveElement(this.document[0])&&this.element.trigger("focus")})},menufocus:function(b,c){var d,e;return this.isNewMenu&&(this.isNewMenu=!1,b.originalEvent&&/^mouse/.test(b.originalEvent.type))?(this.menu.blur(),void this.document.one("mousemove",function(){a(b.target).trigger(b.originalEvent)})):(e=c.item.data("ui-autocomplete-item"),!1!==this._trigger("focus",b,{item:e})&&b.originalEvent&&/^key/.test(b.originalEvent.type)&&this._value(e.value),d=c.item.attr("aria-label")||e.value,void(d&&a.trim(d).length&&(this.liveRegion.children().hide(),a("<div>").text(d).appendTo(this.liveRegion))))},menuselect:function(b,c){var d=c.item.data("ui-autocomplete-item"),e=this.previous;this.element[0]!==a.ui.safeActiveElement(this.document[0])&&(this.element.trigger("focus"),this.previous=e,this._delay(function(){this.previous=e,this.selectedItem=d})),!1!==this._trigger("select",b,{item:d})&&this._value(d.value),this.term=this._value(),this.close(b),this.selectedItem=d}}),this.liveRegion=a("<div>",{role:"status","aria-live":"assertive","aria-relevant":"additions"}).appendTo(this.document[0].body),this._addClass(this.liveRegion,null,"ui-helper-hidden-accessible"),this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_destroy:function(){clearTimeout(this.searching),this.element.removeAttr("autocomplete"),this.menu.element.remove(),this.liveRegion.remove()},_setOption:function(a,b){this._super(a,b),"source"===a&&this._initSource(),"appendTo"===a&&this.menu.element.appendTo(this._appendTo()),"disabled"===a&&b&&this.xhr&&this.xhr.abort()},_isEventTargetInWidget:function(b){var c=this.menu.element[0];return b.target===this.element[0]||b.target===c||a.contains(c,b.target)},_closeOnClickOutside:function(a){this._isEventTargetInWidget(a)||this.close()},_appendTo:function(){var b=this.options.appendTo;return b&&(b=b.jquery||b.nodeType?a(b):this.document.find(b).eq(0)),b&&b[0]||(b=this.element.closest(".ui-front, dialog")),b.length||(b=this.document[0].body),b},_initSource:function(){var b,c,d=this;a.isArray(this.options.source)?(b=this.options.source,this.source=function(c,d){d(a.ui.autocomplete.filter(b,c.term))}):"string"==typeof this.options.source?(c=this.options.source,this.source=function(b,e){d.xhr&&d.xhr.abort(),d.xhr=a.ajax({url:c,data:b,dataType:"json",success:function(a){e(a)},error:function(){e([])}})}):this.source=this.options.source},_searchTimeout:function(a){clearTimeout(this.searching),this.searching=this._delay(function(){var b=this.term===this._value(),c=this.menu.element.is(":visible"),d=a.altKey||a.ctrlKey||a.metaKey||a.shiftKey;b&&(!b||c||d)||(this.selectedItem=null,this.search(null,a))},this.options.delay)},search:function(a,b){return a=null!=a?a:this._value(),this.term=this._value(),a.length<this.options.minLength?this.close(b):this._trigger("search",b)!==!1?this._search(a):void 0},_search:function(a){this.pending++,this._addClass("ui-autocomplete-loading"),this.cancelSearch=!1,this.source({term:a},this._response())},_response:function(){var b=++this.requestIndex;return a.proxy(function(a){b===this.requestIndex&&this.__response(a),this.pending--,this.pending||this._removeClass("ui-autocomplete-loading")},this)},__response:function(a){a&&(a=this._normalize(a)),this._trigger("response",null,{content:a}),!this.options.disabled&&a&&a.length&&!this.cancelSearch?(this._suggest(a),this._trigger("open")):this._close()},close:function(a){this.cancelSearch=!0,this._close(a)},_close:function(a){this._off(this.document,"mousedown"),this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.blur(),this.isNewMenu=!0,this._trigger("close",a))},_change:function(a){this.previous!==this._value()&&this._trigger("change",a,{item:this.selectedItem})},_normalize:function(b){return b.length&&b[0].label&&b[0].value?b:a.map(b,function(b){return"string"==typeof b?{label:b,value:b}:a.extend({},b,{label:b.label||b.value,value:b.value||b.label})})},_suggest:function(b){var c=this.menu.element.empty();this._renderMenu(c,b),this.isNewMenu=!0,this.menu.refresh(),c.show(),this._resizeMenu(),c.position(a.extend({of:this.element},this.options.position)),this.options.autoFocus&&this.menu.next(),this._on(this.document,{mousedown:"_closeOnClickOutside"})},_resizeMenu:function(){var a=this.menu.element;a.outerWidth(Math.max(a.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(b,c){var d=this;a.each(c,function(a,c){d._renderItemData(b,c)})},_renderItemData:function(a,b){return this._renderItem(a,b).data("ui-autocomplete-item",b)},_renderItem:function(b,c){return a("<li>").append(a("<div>").text(c.label)).appendTo(b)},_move:function(a,b){return this.menu.element.is(":visible")?this.menu.isFirstItem()&&/^previous/.test(a)||this.menu.isLastItem()&&/^next/.test(a)?(this.isMultiLine||this._value(this.term),void this.menu.blur()):void this.menu[a](b):void this.search(null,b)},widget:function(){return this.menu.element},_value:function(){return this.valueMethod.apply(this.element,arguments)},_keyEvent:function(a,b){this.isMultiLine&&!this.menu.element.is(":visible")||(this._move(a,b),b.preventDefault())},_isContentEditable:function(a){if(!a.length)return!1;var b=a.prop("contentEditable");return"inherit"===b?this._isContentEditable(a.parent()):"true"===b}}),a.extend(a.ui.autocomplete,{escapeRegex:function(a){return a.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")},filter:function(b,c){var d=new RegExp(a.ui.autocomplete.escapeRegex(c),"i");return a.grep(b,function(a){return d.test(a.label||a.value||a)})}}),a.widget("ui.autocomplete",a.ui.autocomplete,{options:{messages:{noResults:"No search results.",results:function(a){return a+(a>1?" results are":" result is")+" available, use up and down arrow keys to navigate."}}},__response:function(b){var c;this._superApply(arguments),this.options.disabled||this.cancelSearch||(c=b&&b.length?this.options.messages.results(b.length):this.options.messages.noResults,this.liveRegion.children().hide(),a("<div>").text(c).appendTo(this.liveRegion))}}),a.ui.autocomplete});;
/*!

 diff v3.5.0

Software License Agreement (BSD License)

Copyright (c) 2009-2015, Kevin Decker <kpdecker@gmail.com>

All rights reserved.

Redistribution and use of this software in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above
  copyright notice, this list of conditions and the
  following disclaimer.

* Redistributions in binary form must reproduce the above
  copyright notice, this list of conditions and the
  following disclaimer in the documentation and/or other
  materials provided with the distribution.

* Neither the name of Kevin Decker nor the names of its
  contributors may be used to endorse or promote products
  derived from this software without specific prior
  written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR
IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT
OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
@license
*/
!function(a,b){"object"==typeof exports&&"object"==typeof module?module.exports=b():"function"==typeof define&&define.amd?define([],b):"object"==typeof exports?exports.JsDiff=b():a.JsDiff=b()}(this,function(){/******/
return function(a){/******/
// The require function
/******/
function b(d){/******/
// Check if module is in cache
/******/
if(c[d])/******/
return c[d].exports;/******/
// Create a new module (and put it into the cache)
/******/
var e=c[d]={/******/
exports:{},/******/
id:d,/******/
loaded:!1};/******/
// Return the exports of the module
/******/
/******/
// Execute the module function
/******/
/******/
// Flag the module as loaded
/******/
return a[d].call(e.exports,e,e.exports,b),e.loaded=!0,e.exports}// webpackBootstrap
/******/
// The module cache
/******/
var c={};/******/
// Load entry module and return exports
/******/
/******/
// expose the modules object (__webpack_modules__)
/******/
/******/
// expose the module cache
/******/
/******/
// __webpack_public_path__
/******/
return b.m=a,b.c=c,b.p="",b(0)}([/* 0 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){return a&&a.__esModule?a:{"default":a}}b.__esModule=!0,b.canonicalize=b.convertChangesToXML=b.convertChangesToDMP=b.merge=b.parsePatch=b.applyPatches=b.applyPatch=b.createPatch=b.createTwoFilesPatch=b.structuredPatch=b.diffArrays=b.diffJson=b.diffCss=b.diffSentences=b.diffTrimmedLines=b.diffLines=b.diffWordsWithSpace=b.diffWords=b.diffChars=b.Diff=void 0;/*istanbul ignore end*/
var/*istanbul ignore start*/e=c(1),f=d(e),/*istanbul ignore start*/g=c(2),/*istanbul ignore start*/h=c(3),/*istanbul ignore start*/i=c(5),/*istanbul ignore start*/j=c(6),/*istanbul ignore start*/k=c(7),/*istanbul ignore start*/l=c(8),/*istanbul ignore start*/m=c(9),/*istanbul ignore start*/n=c(10),/*istanbul ignore start*/o=c(11),/*istanbul ignore start*/p=c(13),/*istanbul ignore start*/q=c(14),/*istanbul ignore start*/r=c(16),/*istanbul ignore start*/s=c(17);/* See LICENSE file for terms of use */
/*
	 * Text diff implementation.
	 *
	 * This library supports the following APIS:
	 * JsDiff.diffChars: Character by character diff
	 * JsDiff.diffWords: Word (as defined by \b regex) diff which ignores whitespace
	 * JsDiff.diffLines: Line based diff
	 *
	 * JsDiff.diffCss: Diff targeted at CSS content
	 *
	 * These methods are based on the implementation proposed in
	 * "An O(ND) Difference Algorithm and its Variations" (Myers, 1986).
	 * http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.4.6927
	 */
b.Diff=f["default"],/*istanbul ignore start*/
b.diffChars=g.diffChars,/*istanbul ignore start*/
b.diffWords=h.diffWords,/*istanbul ignore start*/
b.diffWordsWithSpace=h.diffWordsWithSpace,/*istanbul ignore start*/
b.diffLines=i.diffLines,/*istanbul ignore start*/
b.diffTrimmedLines=i.diffTrimmedLines,/*istanbul ignore start*/
b.diffSentences=j.diffSentences,/*istanbul ignore start*/
b.diffCss=k.diffCss,/*istanbul ignore start*/
b.diffJson=l.diffJson,/*istanbul ignore start*/
b.diffArrays=m.diffArrays,/*istanbul ignore start*/
b.structuredPatch=q.structuredPatch,/*istanbul ignore start*/
b.createTwoFilesPatch=q.createTwoFilesPatch,/*istanbul ignore start*/
b.createPatch=q.createPatch,/*istanbul ignore start*/
b.applyPatch=n.applyPatch,/*istanbul ignore start*/
b.applyPatches=n.applyPatches,/*istanbul ignore start*/
b.parsePatch=o.parsePatch,/*istanbul ignore start*/
b.merge=p.merge,/*istanbul ignore start*/
b.convertChangesToDMP=r.convertChangesToDMP,/*istanbul ignore start*/
b.convertChangesToXML=s.convertChangesToXML,/*istanbul ignore start*/
b.canonicalize=l.canonicalize},/* 1 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";function c(){}function d(a,b,c,d,e){for(var f=0,g=b.length,h=0,i=0;f<g;f++){var j=b[f];if(j.removed){
// Reverse add and remove so removes are output first to match common convention
// The diffing algorithm is tied to add then remove output and this is the simplest
// route to get the desired output with minimal overhead.
if(j.value=a.join(d.slice(i,i+j.count)),i+=j.count,f&&b[f-1].added){var k=b[f-1];b[f-1]=b[f],b[f]=k}}else{if(!j.added&&e){var l=c.slice(h,h+j.count);l=l.map(function(a,b){var c=d[i+b];return c.length>a.length?c:a}),j.value=a.join(l)}else j.value=a.join(c.slice(h,h+j.count));h+=j.count,
// Common case
j.added||(i+=j.count)}}
// Special case handle for when one terminal is ignored (i.e. whitespace).
// For this case we merge the terminal into the prior string and drop the change.
// This is only available for string mode.
var m=b[g-1];return g>1&&"string"==typeof m.value&&(m.added||m.removed)&&a.equals("",m.value)&&(b[g-2].value+=m.value,b.pop()),b}function e(a){return{newPos:a.newPos,components:a.components.slice(0)}}b.__esModule=!0,b["default"]=/*istanbul ignore end*/c,c.prototype={/*istanbul ignore start*/
/*istanbul ignore end*/
diff:function(a,b){function c(a){return h?(setTimeout(function(){h(void 0,a)},0),!0):a}
// Main worker method. checks all permutations of a given edit length for acceptance.
function f(){for(var f=-1*l;f<=l;f+=2){var g=/*istanbul ignore start*/void 0,h=n[f-1],m=n[f+1],o=(m?m.newPos:0)-f;h&&(
// No one else is going to attempt to use this value, clear it
n[f-1]=void 0);var p=h&&h.newPos+1<j,q=m&&0<=o&&o<k;if(p||q){
// If we have hit the end of both strings, then we are done
if(
// Select the diagonal that we want to branch from. We select the prior
// path whose position in the new string is the farthest from the origin
// and does not pass the bounds of the diff graph
!p||q&&h.newPos<m.newPos?(g=e(m),i.pushComponent(g.components,void 0,!0)):(g=h,// No need to clone, we've pulled it from the list
g.newPos++,i.pushComponent(g.components,!0,void 0)),o=i.extractCommon(g,b,a,f),g.newPos+1>=j&&o+1>=k)return c(d(i,g.components,b,a,i.useLongestToken));
// Otherwise track this path as a potential candidate and continue.
n[f]=g}else
// If this path is a terminal then prune
n[f]=void 0}l++}/*istanbul ignore start*/
var/*istanbul ignore end*/g=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},h=g.callback;"function"==typeof g&&(h=g,g={}),this.options=g;var i=this;
// Allow subclasses to massage the input prior to running
a=this.castInput(a),b=this.castInput(b),a=this.removeEmpty(this.tokenize(a)),b=this.removeEmpty(this.tokenize(b));var j=b.length,k=a.length,l=1,m=j+k,n=[{newPos:-1,components:[]}],o=this.extractCommon(n[0],b,a,0);if(n[0].newPos+1>=j&&o+1>=k)
// Identity per the equality and tokenizer
return c([{value:this.join(b),count:b.length}]);
// Performs the length of edit iteration. Is a bit fugly as this has to support the
// sync and async mode which is never fun. Loops over execEditLength until a value
// is produced.
if(h)!function q(){setTimeout(function(){
// This should not happen, but we want to be safe.
/* istanbul ignore next */
// This should not happen, but we want to be safe.
/* istanbul ignore next */
return l>m?h():void(f()||q())},0)}();else for(;l<=m;){var p=f();if(p)return p}},/*istanbul ignore start*/
/*istanbul ignore end*/
pushComponent:function(a,b,c){var d=a[a.length-1];d&&d.added===b&&d.removed===c?
// We need to clone here as the component clone operation is just
// as shallow array clone
a[a.length-1]={count:d.count+1,added:b,removed:c}:a.push({count:1,added:b,removed:c})},/*istanbul ignore start*/
/*istanbul ignore end*/
extractCommon:function(a,b,c,d){for(var e=b.length,f=c.length,g=a.newPos,h=g-d,i=0;g+1<e&&h+1<f&&this.equals(b[g+1],c[h+1]);)g++,h++,i++;return i&&a.components.push({count:i}),a.newPos=g,h},/*istanbul ignore start*/
/*istanbul ignore end*/
equals:function(a,b){return this.options.comparator?this.options.comparator(a,b):a===b||this.options.ignoreCase&&a.toLowerCase()===b.toLowerCase()},/*istanbul ignore start*/
/*istanbul ignore end*/
removeEmpty:function(a){for(var b=[],c=0;c<a.length;c++)a[c]&&b.push(a[c]);return b},/*istanbul ignore start*/
/*istanbul ignore end*/
castInput:function(a){return a},/*istanbul ignore start*/
/*istanbul ignore end*/
tokenize:function(a){return a.split("")},/*istanbul ignore start*/
/*istanbul ignore end*/
join:function(a){return a.join("")}}},/* 2 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return h.diff(a,b,c)}b.__esModule=!0,b.characterDiff=void 0,b.diffChars=e;var/*istanbul ignore start*/f=c(1),g=d(f),h=/*istanbul ignore start*/b.characterDiff=new/*istanbul ignore start*/g["default"]},/* 3 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){/*istanbul ignore start*/
return c=(0,i.generateOptions)(c,{ignoreWhitespace:!0}),l.diff(a,b,c)}function f(a,b,c){return l.diff(a,b,c)}b.__esModule=!0,b.wordDiff=void 0,b.diffWords=e,/*istanbul ignore start*/
b.diffWordsWithSpace=f;var/*istanbul ignore start*/g=c(1),h=d(g),/*istanbul ignore start*/i=c(4),j=/^[A-Za-z\xC0-\u02C6\u02C8-\u02D7\u02DE-\u02FF\u1E00-\u1EFF]+$/,k=/\S/,l=/*istanbul ignore start*/b.wordDiff=new/*istanbul ignore start*/h["default"];l.equals=function(a,b){return this.options.ignoreCase&&(a=a.toLowerCase(),b=b.toLowerCase()),a===b||this.options.ignoreWhitespace&&!k.test(a)&&!k.test(b)},l.tokenize=function(a){
// Join the boundary splits that we do not consider to be boundaries. This is primarily the extended Latin character set.
for(var b=a.split(/(\s+|\b)/),c=0;c<b.length-1;c++)
// If we have an empty string in the next field and we have only word chars before and after, merge
!b[c+1]&&b[c+2]&&j.test(b[c])&&j.test(b[c+2])&&(b[c]+=b[c+2],b.splice(c+1,2),c--);return b}},/* 4 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";function c(a,b){if("function"==typeof a)b.callback=a;else if(a)for(var c in a)/* istanbul ignore else */
a.hasOwnProperty(c)&&(b[c]=a[c]);return b}b.__esModule=!0,b.generateOptions=c},/* 5 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return j.diff(a,b,c)}function f(a,b,c){var d=/*istanbul ignore start*/(0,i.generateOptions)(c,{ignoreWhitespace:!0});return j.diff(a,b,d)}b.__esModule=!0,b.lineDiff=void 0,b.diffLines=e,/*istanbul ignore start*/
b.diffTrimmedLines=f;var/*istanbul ignore start*/g=c(1),h=d(g),/*istanbul ignore start*/i=c(4),j=/*istanbul ignore start*/b.lineDiff=new/*istanbul ignore start*/h["default"];j.tokenize=function(a){var b=[],c=a.split(/(\n|\r\n)/);
// Ignore the final empty token that occurs if the string ends with a new line
c[c.length-1]||c.pop();
// Merge the content and line separators into single tokens
for(var d=0;d<c.length;d++){var e=c[d];d%2&&!this.options.newlineIsToken?b[b.length-1]+=e:(this.options.ignoreWhitespace&&(e=e.trim()),b.push(e))}return b}},/* 6 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return h.diff(a,b,c)}b.__esModule=!0,b.sentenceDiff=void 0,b.diffSentences=e;var/*istanbul ignore start*/f=c(1),g=d(f),h=/*istanbul ignore start*/b.sentenceDiff=new/*istanbul ignore start*/g["default"];h.tokenize=function(a){return a.split(/(\S.+?[.!?])(?=\s+|$)/)}},/* 7 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return h.diff(a,b,c)}b.__esModule=!0,b.cssDiff=void 0,b.diffCss=e;var/*istanbul ignore start*/f=c(1),g=d(f),h=/*istanbul ignore start*/b.cssDiff=new/*istanbul ignore start*/g["default"];h.tokenize=function(a){return a.split(/([{}:;,]|\s+)/)}},/* 8 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return l.diff(a,b,c)}
// This function handles the presence of circular references by bailing out when encountering an
// object that is already on the "stack" of items being processed. Accepts an optional replacer
function f(a,b,c,d,e){b=b||[],c=c||[],d&&(a=d(e,a));var h=/*istanbul ignore start*/void 0;for(h=0;h<b.length;h+=1)if(b[h]===a)return c[h];var i=/*istanbul ignore start*/void 0;if("[object Array]"===k.call(a)){for(b.push(a),i=new Array(a.length),c.push(i),h=0;h<a.length;h+=1)i[h]=f(a[h],b,c,d,e);return b.pop(),c.pop(),i}if(a&&a.toJSON&&(a=a.toJSON()),/*istanbul ignore start*/"object"===("undefined"==typeof/*istanbul ignore end*/a?"undefined":g(a))&&null!==a){b.push(a),i={},c.push(i);var j=[],l=/*istanbul ignore start*/void 0;for(l in a)/* istanbul ignore else */
a.hasOwnProperty(l)&&j.push(l);for(j.sort(),h=0;h<j.length;h+=1)l=j[h],i[l]=f(a[l],b,c,d,l);b.pop(),c.pop()}else i=a;return i}b.__esModule=!0,b.jsonDiff=void 0;var g="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(a){return typeof a}:function(a){return a&&"function"==typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a};b.diffJson=e,/*istanbul ignore start*/
b.canonicalize=f;var/*istanbul ignore start*/h=c(1),i=d(h),/*istanbul ignore start*/j=c(5),k=Object.prototype.toString,l=/*istanbul ignore start*/b.jsonDiff=new/*istanbul ignore start*/i["default"];
// Discriminate between two lines of pretty-printed, serialized JSON where one of them has a
// dangling comma and the other doesn't. Turns out including the dangling comma yields the nicest output:
l.useLongestToken=!0,l.tokenize=/*istanbul ignore start*/j.lineDiff.tokenize,l.castInput=function(a){/*istanbul ignore start*/
var b=/*istanbul ignore end*/this.options,c=b.undefinedReplacement,d=b.stringifyReplacer,e=void 0===d?function(a,b){/*istanbul ignore end*/
return"undefined"==typeof b?c:b}:d;return"string"==typeof a?a:JSON.stringify(f(a,null,null,e),e,"  ")},l.equals=function(a,b){/*istanbul ignore start*/
return i["default"].prototype.equals.call(l,a.replace(/,([\r\n])/g,"$1"),b.replace(/,([\r\n])/g,"$1"))}},/* 9 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}function e(a,b,c){return h.diff(a,b,c)}b.__esModule=!0,b.arrayDiff=void 0,b.diffArrays=e;var/*istanbul ignore start*/f=c(1),g=d(f),h=/*istanbul ignore start*/b.arrayDiff=new/*istanbul ignore start*/g["default"];h.tokenize=function(a){return a.slice()},h.join=h.removeEmpty=function(a){return a}},/* 10 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}/*istanbul ignore end*/
function e(a,b){/**
	   * Checks if the hunk exactly fits on the provided location
	   */
function c(a,b){for(var c=0;c<a.lines.length;c++){var d=a.lines[c],f=d.length>0?d[0]:" ",g=d.length>0?d.substr(1):d;if(" "===f||"-"===f){
// Context sanity check
if(!j(b+1,e[b],f,g)&&(k++,k>l))return!1;b++}}return!0}/*istanbul ignore start*/
var/*istanbul ignore end*/d=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};if("string"==typeof b&&(b=/*istanbul ignore start*/(0,g.parsePatch)(b)),Array.isArray(b)){if(b.length>1)throw new Error("applyPatch only works with a single input.");b=b[0]}
// Search best fit offsets for each hunk based on the previous ones
for(var e=a.split(/\r\n|[\n\v\f\r\x85]/),f=a.match(/\r\n|[\n\v\f\r\x85]/g)||[],h=b.hunks,j=d.compareLine||function(a,b,c,d){/*istanbul ignore end*/
return b===d},k=0,l=d.fuzzFactor||0,m=0,n=0,o=/*istanbul ignore start*/void 0,p=/*istanbul ignore start*/void 0,q=0;q<h.length;q++){for(var r=h[q],s=e.length-r.oldLines,t=0,u=n+r.oldStart-1,v=/*istanbul ignore start*/(0,i["default"])(u,m,s);void 0!==t;t=v())if(c(r,u+t)){r.offset=n+=t;break}if(void 0===t)return!1;
// Set lower text limit to end of the current hunk, so next ones don't try
// to fit over already patched text
m=r.offset+r.oldStart+r.oldLines}for(var w=0,x=0;x<h.length;x++){var y=h[x],z=y.oldStart+y.offset+w-1;w+=y.newLines-y.oldLines,z<0&&(
// Creating a new file
z=0);for(var A=0;A<y.lines.length;A++){var B=y.lines[A],C=B.length>0?B[0]:" ",D=B.length>0?B.substr(1):B,E=y.linedelimiters[A];if(" "===C)z++;else if("-"===C)e.splice(z,1),f.splice(z,1);else if("+"===C)e.splice(z,0,D),f.splice(z,0,E),z++;else if("\\"===C){var F=y.lines[A-1]?y.lines[A-1][0]:null;"+"===F?o=!0:"-"===F&&(p=!0)}}}
// Handle EOFNL insertion/removal
if(o)for(;!e[e.length-1];)e.pop(),f.pop();else p&&(e.push(""),f.push("\n"));for(var G=0;G<e.length-1;G++)e[G]=e[G]+f[G];return e.join("")}
// Wrapper that supports multiple file patches via callbacks.
function f(a,b){function c(){var f=a[d++];return f?void b.loadFile(f,function(a,d){if(a)return b.complete(a);var g=e(d,f,b);b.patched(f,g,function(a){return a?b.complete(a):void c()})}):b.complete()}"string"==typeof a&&(a=/*istanbul ignore start*/(0,g.parsePatch)(a));var d=0;c()}b.__esModule=!0,b.applyPatch=e,/*istanbul ignore start*/
b.applyPatches=f;var/*istanbul ignore start*/g=c(11),/*istanbul ignore start*/h=c(12),i=d(h)},/* 11 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";function c(a){function b(){var a={};
// Parse diff metadata
for(h.push(a);i<f.length;){var b=f[i];
// File header found, end parsing diff metadata
if(/^(\-\-\-|\+\+\+|@@)\s/.test(b))break;
// Diff index
var g=/^(?:Index:|diff(?: -r \w+)+)\s+(.+?)\s*$/.exec(b);g&&(a.index=g[1]),i++}for(
// Parse file headers if they are defined. Unified diff requires them, but
// there's no technical issues to have an isolated hunk without file header
c(a),c(a),
// Parse hunks
a.hunks=[];i<f.length;){var j=f[i];if(/^(Index:|diff|\-\-\-|\+\+\+)\s/.test(j))break;if(/^@@/.test(j))a.hunks.push(d());else{if(j&&e.strict)
// Ignore unexpected content unless in strict mode
throw new Error("Unknown line "+(i+1)+" "+JSON.stringify(j));i++}}}
// Parses the --- and +++ headers, if none are found, no lines
// are consumed.
function c(a){var b=/^(---|\+\+\+)\s+(.*)$/.exec(f[i]);if(b){var c="---"===b[1]?"old":"new",d=b[2].split("\t",2),e=d[0].replace(/\\\\/g,"\\");/^".*"$/.test(e)&&(e=e.substr(1,e.length-2)),a[c+"FileName"]=e,a[c+"Header"]=(d[1]||"").trim(),i++}}
// Parses a hunk
// This assumes that we are at the start of a hunk.
function d(){for(var a=i,b=f[i++],c=b.split(/@@ -(\d+)(?:,(\d+))? \+(\d+)(?:,(\d+))? @@/),d={oldStart:+c[1],oldLines:+c[2]||1,newStart:+c[3],newLines:+c[4]||1,lines:[],linedelimiters:[]},h=0,j=0;i<f.length&&!(0===f[i].indexOf("--- ")&&i+2<f.length&&0===f[i+1].indexOf("+++ ")&&0===f[i+2].indexOf("@@"));i++){var k=0==f[i].length&&i!=f.length-1?" ":f[i][0];if("+"!==k&&"-"!==k&&" "!==k&&"\\"!==k)break;d.lines.push(f[i]),d.linedelimiters.push(g[i]||"\n"),"+"===k?h++:"-"===k?j++:" "===k&&(h++,j++)}
// Perform optional sanity checking
if(
// Handle the empty block count case
h||1!==d.newLines||(d.newLines=0),j||1!==d.oldLines||(d.oldLines=0),e.strict){if(h!==d.newLines)throw new Error("Added line count did not match for hunk at line "+(a+1));if(j!==d.oldLines)throw new Error("Removed line count did not match for hunk at line "+(a+1))}return d}for(/*istanbul ignore start*/
var/*istanbul ignore end*/e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},f=a.split(/\r\n|[\n\v\f\r\x85]/),g=a.match(/\r\n|[\n\v\f\r\x85]/g)||[],h=[],i=0;i<f.length;)b();return h}b.__esModule=!0,b.parsePatch=c},/* 12 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";b.__esModule=!0,b["default"]=/*istanbul ignore end*/function(a,b,c){var d=!0,e=!1,f=!1,g=1;return function h(){if(d&&!f){
// Check if trying to fit beyond text length, and if not, check it fits
// after offset location (or desired location on first iteration)
if(e?g++:d=!1,a+g<=c)return g;f=!0}if(!e)
// Check if trying to fit before text beginning, and if not, check it fits
// before offset location
// Check if trying to fit before text beginning, and if not, check it fits
// before offset location
return f||(d=!0),b<=a-g?-g++:(e=!0,h())}}},/* 13 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}/*istanbul ignore end*/
function e(a){/*istanbul ignore start*/
var b=/*istanbul ignore end*/v(a.lines),c=b.oldLines,d=b.newLines;void 0!==c?a.oldLines=c:delete a.oldLines,void 0!==d?a.newLines=d:delete a.newLines}function f(a,b,c){a=g(a,c),b=g(b,c);var d={};
// For index we just let it pass through as it doesn't have any necessary meaning.
// Leaving sanity checks on this to the API consumer that may know more about the
// meaning in their own context.
(a.index||b.index)&&(d.index=a.index||b.index),(a.newFileName||b.newFileName)&&(h(a)?h(b)?(
// Both changed... figure it out
d.oldFileName=i(d,a.oldFileName,b.oldFileName),d.newFileName=i(d,a.newFileName,b.newFileName),d.oldHeader=i(d,a.oldHeader,b.oldHeader),d.newHeader=i(d,a.newHeader,b.newHeader)):(
// No header or no change in theirs, use ours
d.oldFileName=a.oldFileName,d.newFileName=a.newFileName,d.oldHeader=a.oldHeader,d.newHeader=a.newHeader):(
// No header or no change in ours, use theirs (and ours if theirs does not exist)
d.oldFileName=b.oldFileName||a.oldFileName,d.newFileName=b.newFileName||a.newFileName,d.oldHeader=b.oldHeader||a.oldHeader,d.newHeader=b.newHeader||a.newHeader)),d.hunks=[];for(var e=0,f=0,m=0,n=0;e<a.hunks.length||f<b.hunks.length;){var o=a.hunks[e]||{oldStart:1/0},p=b.hunks[f]||{oldStart:1/0};if(j(o,p))
// This patch does not overlap with any of the others, yay.
d.hunks.push(k(o,m)),e++,n+=o.newLines-o.oldLines;else if(j(p,o))
// This patch does not overlap with any of the others, yay.
d.hunks.push(k(p,n)),f++,m+=p.newLines-p.oldLines;else{
// Overlap, merge as best we can
var q={oldStart:Math.min(o.oldStart,p.oldStart),oldLines:0,newStart:Math.min(o.newStart+m,p.oldStart+n),newLines:0,lines:[]};l(q,o.oldStart,o.lines,p.oldStart,p.lines),f++,e++,d.hunks.push(q)}}return d}function g(a,b){if("string"==typeof a){if(/^@@/m.test(a)||/^Index:/m.test(a))/*istanbul ignore start*/
return(0,x.parsePatch)(a)[0];if(!b)throw new Error("Must provide a base reference or pass in a patch");/*istanbul ignore start*/
return(0,w.structuredPatch)(void 0,void 0,b,a)}return a}function h(a){return a.newFileName&&a.newFileName!==a.oldFileName}function i(a,b,c){return b===c?b:(a.conflict=!0,{mine:b,theirs:c})}function j(a,b){return a.oldStart<b.oldStart&&a.oldStart+a.oldLines<b.oldStart}function k(a,b){return{oldStart:a.oldStart,oldLines:a.oldLines,newStart:a.newStart+b,newLines:a.newLines,lines:a.lines}}function l(a,b,c,f,g){
// This will generally result in a conflicted hunk, but there are cases where the context
// is the only overlap where we can successfully merge the content here.
var h={offset:b,lines:c,index:0},i={offset:f,lines:g,index:0};
// Now in the overlap content. Scan through and select the best changes from each.
for(
// Handle any leading content
p(a,h,i),p(a,i,h);h.index<h.lines.length&&i.index<i.lines.length;){var j=h.lines[h.index],k=i.lines[i.index];if("-"!==j[0]&&"+"!==j[0]||"-"!==k[0]&&"+"!==k[0])if("+"===j[0]&&" "===k[0]){/*istanbul ignore start*/
var l;/*istanbul ignore end*/
// Mine inserted
/*istanbul ignore start*/
(l=/*istanbul ignore end*/a.lines).push.apply(/*istanbul ignore start*/l,/*istanbul ignore start*/d(/*istanbul ignore end*/r(h)))}else if("+"===k[0]&&" "===j[0]){/*istanbul ignore start*/
var s;/*istanbul ignore end*/
// Theirs inserted
/*istanbul ignore start*/
(s=/*istanbul ignore end*/a.lines).push.apply(/*istanbul ignore start*/s,/*istanbul ignore start*/d(/*istanbul ignore end*/r(i)))}else"-"===j[0]&&" "===k[0]?
// Mine removed or edited
n(a,h,i):"-"===k[0]&&" "===j[0]?
// Their removed or edited
n(a,i,h,!0):j===k?(
// Context identity
a.lines.push(j),h.index++,i.index++):
// Context mismatch
o(a,r(h),r(i));else
// Both modified ...
m(a,h,i)}
// Now push anything that may be remaining
q(a,h),q(a,i),e(a)}function m(a,b,c){var e=r(b),f=r(c);if(t(e)&&t(f)){
// Special case for remove changes that are supersets of one another
if(/*istanbul ignore start*/(0,y.arrayStartsWith)(e,f)&&u(c,e,e.length-f.length)){/*istanbul ignore start*/
var g;/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore start*/
/*istanbul ignore end*/
return void(g=a.lines).push.apply(g,d(e))}if(/*istanbul ignore start*/(0,y.arrayStartsWith)(f,e)&&u(b,f,f.length-e.length)){/*istanbul ignore start*/
var h;/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore start*/
/*istanbul ignore end*/
return void(h=a.lines).push.apply(h,d(f))}}else if(/*istanbul ignore start*/(0,y.arrayEqual)(e,f)){/*istanbul ignore start*/
var i;/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore end*/
/*istanbul ignore start*/
/*istanbul ignore start*/
/*istanbul ignore end*/
return void(i=a.lines).push.apply(i,d(e))}o(a,e,f)}function n(a,b,c,e){var f=r(b),g=s(c,f);if(g.merged){/*istanbul ignore start*/
var h;/*istanbul ignore end*/
/*istanbul ignore start*/
(h=/*istanbul ignore end*/a.lines).push.apply(/*istanbul ignore start*/h,/*istanbul ignore start*/d(/*istanbul ignore end*/g.merged))}else o(a,e?g:f,e?f:g)}function o(a,b,c){a.conflict=!0,a.lines.push({conflict:!0,mine:b,theirs:c})}function p(a,b,c){for(;b.offset<c.offset&&b.index<b.lines.length;){var d=b.lines[b.index++];a.lines.push(d),b.offset++}}function q(a,b){for(;b.index<b.lines.length;){var c=b.lines[b.index++];a.lines.push(c)}}function r(a){for(var b=[],c=a.lines[a.index][0];a.index<a.lines.length;){var d=a.lines[a.index];if(
// Group additions that are immediately after subtractions and treat them as one "atomic" modify change.
"-"===c&&"+"===d[0]&&(c="+"),c!==d[0])break;b.push(d),a.index++}return b}function s(a,b){for(var c=[],d=[],e=0,f=!1,g=!1;e<b.length&&a.index<a.lines.length;){var h=a.lines[a.index],i=b[e];
// Once we've hit our add, then we are done
if("+"===i[0])break;
// Consume any additions in the other block as a conflict to attempt
// to pull in the remaining context after this
if(f=f||" "!==h[0],d.push(i),e++,"+"===h[0])for(g=!0;"+"===h[0];)c.push(h),h=a.lines[++a.index];i.substr(1)===h.substr(1)?(c.push(h),a.index++):g=!0}if("+"===(b[e]||"")[0]&&f&&(g=!0),g)return c;for(;e<b.length;)d.push(b[e++]);return{merged:d,changes:c}}function t(a){return a.reduce(function(a,b){return a&&"-"===b[0]},!0)}function u(a,b,c){for(var d=0;d<c;d++){var e=b[b.length-c+d].substr(1);if(a.lines[a.index+d]!==" "+e)return!1}return a.index+=c,!0}function v(a){var b=0,c=0;return a.forEach(function(a){if("string"!=typeof a){var d=v(a.mine),e=v(a.theirs);void 0!==b&&(d.oldLines===e.oldLines?b+=d.oldLines:b=void 0),void 0!==c&&(d.newLines===e.newLines?c+=d.newLines:c=void 0)}else void 0===c||"+"!==a[0]&&" "!==a[0]||c++,void 0===b||"-"!==a[0]&&" "!==a[0]||b++}),{oldLines:b,newLines:c}}b.__esModule=!0,b.calcLineCount=e,/*istanbul ignore start*/
b.merge=f;var/*istanbul ignore start*/w=c(14),/*istanbul ignore start*/x=c(11),/*istanbul ignore start*/y=c(15)},/* 14 */
/***/
function(a,b,c){/*istanbul ignore start*/
"use strict";/*istanbul ignore start*/
function d(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}/*istanbul ignore end*/
function e(a,b,c,e,f,g,i){// Append an empty value to make cleanup easier
function j(a){return a.map(function(a){return" "+a})}i||(i={}),"undefined"==typeof i.context&&(i.context=4);var k=/*istanbul ignore start*/(0,h.diffLines)(c,e,i);k.push({value:"",lines:[]});for(var l=[],m=0,n=0,o=[],p=1,q=1,r=function(/*istanbul ignore end*/a){var b=k[a],f=b.lines||b.value.replace(/\n$/,"").split("\n");if(b.lines=f,b.added||b.removed){/*istanbul ignore start*/
var g;/*istanbul ignore end*/
// If we have previous context, start with that
if(!m){var h=k[a-1];m=p,n=q,h&&(o=i.context>0?j(h.lines.slice(-i.context)):[],m-=o.length,n-=o.length)}
// Output our changes
/*istanbul ignore start*/
(g=/*istanbul ignore end*/o).push.apply(/*istanbul ignore start*/g,/*istanbul ignore start*/d(/*istanbul ignore end*/f.map(function(a){return(b.added?"+":"-")+a}))),
// Track the updated file position
b.added?q+=f.length:p+=f.length}else{
// Identical context lines. Track line changes
if(m)
// Close out any changes that have been output (or join overlapping)
if(f.length<=2*i.context&&a<k.length-2){/*istanbul ignore start*/
var r;/*istanbul ignore end*/
// Overlapping
/*istanbul ignore start*/
(r=/*istanbul ignore end*/o).push.apply(/*istanbul ignore start*/r,/*istanbul ignore start*/d(/*istanbul ignore end*/j(f)))}else{/*istanbul ignore start*/
var s,t=Math.min(f.length,i.context);/*istanbul ignore start*/
(s=/*istanbul ignore end*/o).push.apply(/*istanbul ignore start*/s,/*istanbul ignore start*/d(/*istanbul ignore end*/j(f.slice(0,t))));var u={oldStart:m,oldLines:p-m+t,newStart:n,newLines:q-n+t,lines:o};if(a>=k.length-2&&f.length<=i.context){
// EOF is inside this hunk
var v=/\n$/.test(c),w=/\n$/.test(e);0!=f.length||v?v&&w||o.push("\\ No newline at end of file"):
// special case: old has no eol and no trailing context; no-nl can end up before adds
o.splice(u.oldLines,0,"\\ No newline at end of file")}l.push(u),m=0,n=0,o=[]}p+=f.length,q+=f.length}},s=0;s<k.length;s++)/*istanbul ignore start*/
r(/*istanbul ignore end*/s);return{oldFileName:a,newFileName:b,oldHeader:f,newHeader:g,hunks:l}}function f(a,b,c,d,f,g,h){var i=e(a,b,c,d,f,g,h),j=[];a==b&&j.push("Index: "+a),j.push("==================================================================="),j.push("--- "+i.oldFileName+("undefined"==typeof i.oldHeader?"":"\t"+i.oldHeader)),j.push("+++ "+i.newFileName+("undefined"==typeof i.newHeader?"":"\t"+i.newHeader));for(var k=0;k<i.hunks.length;k++){var l=i.hunks[k];j.push("@@ -"+l.oldStart+","+l.oldLines+" +"+l.newStart+","+l.newLines+" @@"),j.push.apply(j,l.lines)}return j.join("\n")+"\n"}function g(a,b,c,d,e,g){return f(a,a,b,c,d,e,g)}b.__esModule=!0,b.structuredPatch=e,/*istanbul ignore start*/
b.createTwoFilesPatch=f,/*istanbul ignore start*/
b.createPatch=g;var/*istanbul ignore start*/h=c(5)},/* 15 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";function c(a,b){return a.length===b.length&&d(a,b)}function d(a,b){if(b.length>a.length)return!1;for(var c=0;c<b.length;c++)if(b[c]!==a[c])return!1;return!0}b.__esModule=!0,b.arrayEqual=c,/*istanbul ignore start*/
b.arrayStartsWith=d},/* 16 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";
// See: http://code.google.com/p/google-diff-match-patch/wiki/API
function c(a){for(var b=[],c=/*istanbul ignore start*/void 0,d=/*istanbul ignore start*/void 0,e=0;e<a.length;e++)c=a[e],d=c.added?1:c.removed?-1:0,b.push([d,c.value]);return b}b.__esModule=!0,b.convertChangesToDMP=c},/* 17 */
/***/
function(a,b){/*istanbul ignore start*/
"use strict";function c(a){for(var b=[],c=0;c<a.length;c++){var e=a[c];e.added?b.push("<ins>"):e.removed&&b.push("<del>"),b.push(d(e.value)),e.added?b.push("</ins>"):e.removed&&b.push("</del>")}return b.join("")}function d(a){var b=a;return b=b.replace(/&/g,"&amp;"),b=b.replace(/</g,"&lt;"),b=b.replace(/>/g,"&gt;"),b=b.replace(/"/g,"&quot;")}b.__esModule=!0,b.convertChangesToXML=c}])});;
(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(["jquery"], function ($) {
      return (root.returnExportsGlobal = factory($));
    });
  } else if (typeof exports === 'object') {
    // Node. Does not work with strict CommonJS, but
    // only CommonJS-like enviroments that support module.exports,
    // like Node.
    module.exports = factory(require("jquery"));
  } else {
    factory(jQuery);
  }
}(this, function ($) {

/*
  Implement Github like autocomplete mentions
  http://ichord.github.com/At.js

  Copyright (c) 2013 chord.luo@gmail.com
  Licensed under the MIT license.
*/

/*
本插件操作 textarea 或者 input 内的插入符
只实现了获得插入符在文本框中的位置，我设置
插入符的位置.
*/

"use strict";
var EditableCaret, InputCaret, Mirror, Utils, discoveryIframeOf, methods, oDocument, oFrame, oWindow, pluginName, setContextBy;

pluginName = 'caret';

EditableCaret = (function() {
  function EditableCaret($inputor) {
    this.$inputor = $inputor;
    this.domInputor = this.$inputor[0];
  }

  EditableCaret.prototype.setPos = function(pos) {
    var fn, found, offset, sel;
    if (sel = oWindow.getSelection()) {
      offset = 0;
      found = false;
      (fn = function(pos, parent) {
        var node, range, _i, _len, _ref, _results;
        _ref = parent.childNodes;
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          node = _ref[_i];
          if (found) {
            break;
          }
          if (node.nodeType === 3) {
            if (offset + node.length >= pos) {
              found = true;
              range = oDocument.createRange();
              range.setStart(node, pos - offset);
              sel.removeAllRanges();
              sel.addRange(range);
              break;
            } else {
              _results.push(offset += node.length);
            }
          } else {
            _results.push(fn(pos, node));
          }
        }
        return _results;
      })(pos, this.domInputor);
    }
    return this.domInputor;
  };

  EditableCaret.prototype.getIEPosition = function() {
    return this.getPosition();
  };

  EditableCaret.prototype.getPosition = function() {
    var inputor_offset, offset;
    offset = this.getOffset();
    inputor_offset = this.$inputor.offset();
    offset.left -= inputor_offset.left;
    offset.top -= inputor_offset.top;
    return offset;
  };

  EditableCaret.prototype.getOldIEPos = function() {
    var preCaretTextRange, textRange;
    textRange = oDocument.selection.createRange();
    preCaretTextRange = oDocument.body.createTextRange();
    preCaretTextRange.moveToElementText(this.domInputor);
    preCaretTextRange.setEndPoint("EndToEnd", textRange);
    return preCaretTextRange.text.length;
  };

  EditableCaret.prototype.getPos = function() {
    var clonedRange, pos, range;
    if (range = this.range()) {
      clonedRange = range.cloneRange();
      clonedRange.selectNodeContents(this.domInputor);
      clonedRange.setEnd(range.endContainer, range.endOffset);
      pos = clonedRange.toString().length;
      clonedRange.detach();
      return pos;
    } else if (oDocument.selection) {
      return this.getOldIEPos();
    }
  };

  EditableCaret.prototype.getOldIEOffset = function() {
    var range, rect;
    range = oDocument.selection.createRange().duplicate();
    range.moveStart("character", -1);
    rect = range.getBoundingClientRect();
    return {
      height: rect.bottom - rect.top,
      left: rect.left,
      top: rect.top
    };
  };

  EditableCaret.prototype.getOffset = function(pos) {
    var clonedRange, offset, range, rect, shadowCaret;
    if (oWindow.getSelection && (range = this.range())) {
      if (range.endOffset - 1 > 0 && range.endContainer !== this.domInputor) {
        clonedRange = range.cloneRange();
        clonedRange.setStart(range.endContainer, range.endOffset - 1);
        clonedRange.setEnd(range.endContainer, range.endOffset);
        rect = clonedRange.getBoundingClientRect();
        offset = {
          height: rect.height,
          left: rect.left + rect.width,
          top: rect.top
        };
        clonedRange.detach();
      }
      if (!offset || (offset != null ? offset.height : void 0) === 0) {
        clonedRange = range.cloneRange();
        shadowCaret = $(oDocument.createTextNode("|"));
        clonedRange.insertNode(shadowCaret[0]);
        clonedRange.selectNode(shadowCaret[0]);
        rect = clonedRange.getBoundingClientRect();
        offset = {
          height: rect.height,
          left: rect.left,
          top: rect.top
        };
        shadowCaret.remove();
        clonedRange.detach();
      }
    } else if (oDocument.selection) {
      offset = this.getOldIEOffset();
    }
    if (offset) {
      offset.top += $(oWindow).scrollTop();
      offset.left += $(oWindow).scrollLeft();
    }
    return offset;
  };

  EditableCaret.prototype.range = function() {
    var sel;
    if (!oWindow.getSelection) {
      return;
    }
    sel = oWindow.getSelection();
    if (sel.rangeCount > 0) {
      return sel.getRangeAt(0);
    } else {
      return null;
    }
  };

  return EditableCaret;

})();

InputCaret = (function() {
  function InputCaret($inputor) {
    this.$inputor = $inputor;
    this.domInputor = this.$inputor[0];
  }

  InputCaret.prototype.getIEPos = function() {
    var endRange, inputor, len, normalizedValue, pos, range, textInputRange;
    inputor = this.domInputor;
    range = oDocument.selection.createRange();
    pos = 0;
    if (range && range.parentElement() === inputor) {
      normalizedValue = inputor.value.replace(/\r\n/g, "\n");
      len = normalizedValue.length;
      textInputRange = inputor.createTextRange();
      textInputRange.moveToBookmark(range.getBookmark());
      endRange = inputor.createTextRange();
      endRange.collapse(false);
      if (textInputRange.compareEndPoints("StartToEnd", endRange) > -1) {
        pos = len;
      } else {
        pos = -textInputRange.moveStart("character", -len);
      }
    }
    return pos;
  };

  InputCaret.prototype.getPos = function() {
    if (oDocument.selection) {
      return this.getIEPos();
    } else {
      return this.domInputor.selectionStart;
    }
  };

  InputCaret.prototype.setPos = function(pos) {
    var inputor, range;
    inputor = this.domInputor;
    if (oDocument.selection) {
      range = inputor.createTextRange();
      range.move("character", pos);
      range.select();
    } else if (inputor.setSelectionRange) {
      inputor.setSelectionRange(pos, pos);
    }
    return inputor;
  };

  InputCaret.prototype.getIEOffset = function(pos) {
    var h, textRange, x, y;
    textRange = this.domInputor.createTextRange();
    pos || (pos = this.getPos());
    textRange.move('character', pos);
    x = textRange.boundingLeft;
    y = textRange.boundingTop;
    h = textRange.boundingHeight;
    return {
      left: x,
      top: y,
      height: h
    };
  };

  InputCaret.prototype.getOffset = function(pos) {
    var $inputor, offset, position;
    $inputor = this.$inputor;
    if (oDocument.selection) {
      offset = this.getIEOffset(pos);
      offset.top += $(oWindow).scrollTop() + $inputor.scrollTop();
      offset.left += $(oWindow).scrollLeft() + $inputor.scrollLeft();
      return offset;
    } else {
      offset = $inputor.offset();
      position = this.getPosition(pos);
      return offset = {
        left: offset.left + position.left - $inputor.scrollLeft(),
        top: offset.top + position.top - $inputor.scrollTop(),
        height: position.height
      };
    }
  };

  InputCaret.prototype.getPosition = function(pos) {
    var $inputor, at_rect, end_range, format, html, mirror, start_range;
    $inputor = this.$inputor;
    format = function(value) {
      value = value.replace(/<|>|`|"|&/g, '?').replace(/\r\n|\r|\n/g, "<br/>");
      if (/firefox/i.test(navigator.userAgent)) {
        value = value.replace(/\s/g, '&nbsp;');
      }
      return value;
    };
    if (pos === void 0) {
      pos = this.getPos();
    }
    start_range = $inputor.val().slice(0, pos);
    end_range = $inputor.val().slice(pos);
    html = "<span style='position: relative; display: inline;'>" + format(start_range) + "</span>";
    html += "<span id='caret' style='position: relative; display: inline;'>|</span>";
    html += "<span style='position: relative; display: inline;'>" + format(end_range) + "</span>";
    mirror = new Mirror($inputor);
    return at_rect = mirror.create(html).rect();
  };

  InputCaret.prototype.getIEPosition = function(pos) {
    var h, inputorOffset, offset, x, y;
    offset = this.getIEOffset(pos);
    inputorOffset = this.$inputor.offset();
    x = offset.left - inputorOffset.left;
    y = offset.top - inputorOffset.top;
    h = offset.height;
    return {
      left: x,
      top: y,
      height: h
    };
  };

  return InputCaret;

})();

Mirror = (function() {
  Mirror.prototype.css_attr = ["borderBottomWidth", "borderLeftWidth", "borderRightWidth", "borderTopStyle", "borderRightStyle", "borderBottomStyle", "borderLeftStyle", "borderTopWidth", "boxSizing", "fontFamily", "fontSize", "fontWeight", "height", "letterSpacing", "lineHeight", "marginBottom", "marginLeft", "marginRight", "marginTop", "outlineWidth", "overflow", "overflowX", "overflowY", "paddingBottom", "paddingLeft", "paddingRight", "paddingTop", "textAlign", "textOverflow", "textTransform", "whiteSpace", "wordBreak", "wordWrap"];

  function Mirror($inputor) {
    this.$inputor = $inputor;
  }

  Mirror.prototype.mirrorCss = function() {
    var css,
      _this = this;
    css = {
      position: 'absolute',
      left: -9999,
      top: 0,
      zIndex: -20000
    };
    if (this.$inputor.prop('tagName') === 'TEXTAREA') {
      this.css_attr.push('width');
    }
    $.each(this.css_attr, function(i, p) {
      return css[p] = _this.$inputor.css(p);
    });
    return css;
  };

  Mirror.prototype.create = function(html) {
    this.$mirror = $('<div></div>');
    this.$mirror.css(this.mirrorCss());
    this.$mirror.html(html);
    this.$inputor.after(this.$mirror);
    return this;
  };

  Mirror.prototype.rect = function() {
    var $flag, pos, rect;
    $flag = this.$mirror.find("#caret");
    pos = $flag.position();
    rect = {
      left: pos.left,
      top: pos.top,
      height: $flag.height()
    };
    this.$mirror.remove();
    return rect;
  };

  return Mirror;

})();

Utils = {
  contentEditable: function($inputor) {
    return !!($inputor[0].contentEditable && $inputor[0].contentEditable === 'true');
  }
};

methods = {
  pos: function(pos) {
    if (pos || pos === 0) {
      return this.setPos(pos);
    } else {
      return this.getPos();
    }
  },
  position: function(pos) {
    if (oDocument.selection) {
      return this.getIEPosition(pos);
    } else {
      return this.getPosition(pos);
    }
  },
  offset: function(pos) {
    var offset;
    offset = this.getOffset(pos);
    return offset;
  }
};

oDocument = null;

oWindow = null;

oFrame = null;

setContextBy = function(settings) {
  var iframe;
  if (iframe = settings != null ? settings.iframe : void 0) {
    oFrame = iframe;
    oWindow = iframe.contentWindow;
    return oDocument = iframe.contentDocument || oWindow.document;
  } else {
    oFrame = void 0;
    oWindow = window;
    return oDocument = document;
  }
};

discoveryIframeOf = function($dom) {
  var error;
  oDocument = $dom[0].ownerDocument;
  oWindow = oDocument.defaultView || oDocument.parentWindow;
  try {
    return oFrame = oWindow.frameElement;
  } catch (_error) {
    error = _error;
  }
};

$.fn.caret = function(method, value, settings) {
  var caret;
  if (methods[method]) {
    if ($.isPlainObject(value)) {
      setContextBy(value);
      value = void 0;
    } else {
      setContextBy(settings);
    }
    caret = Utils.contentEditable(this) ? new EditableCaret(this) : new InputCaret(this);
    return methods[method].apply(caret, [value]);
  } else {
    return $.error("Method " + method + " does not exist on jQuery.caret");
  }
};

$.fn.caret.EditableCaret = EditableCaret;

$.fn.caret.InputCaret = InputCaret;

$.fn.caret.Utils = Utils;

$.fn.caret.apis = methods;


}));
;
// Generated by CoffeeScript 1.12.5
(function() {
  var $, MentionsBase, MentionsContenteditable, MentionsInput, Selection, entityMap, escapeHtml, escapeRegExp, namespace,
    bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
    extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
    hasProp = {}.hasOwnProperty,
    slice = [].slice;

  namespace = "mentionsInput";

  if (typeof module === "object" && typeof module.exports === "object") {
    $ = require("jquery");
    require("jquery-ui/ui/widgets/autocomplete");
  } else {
    $ = window.jQuery;
  }

  Selection = {
    get: function(input) {
      return {
        start: input[0].selectionStart,
        end: input[0].selectionEnd
      };
    },
    set: function(input, start, end) {
      if (end == null) {
        end = start;
      }
      if (input[0].selectionStart) {
        input[0].selectStart = start;
        return input[0].selectionEnd = end;
      }
    }
  };

  entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    "\"": "&quot;",
    "'": "&#39;",
    "/": "&#x2F;"
  };

  escapeHtml = function(text) {
    return text.replace(/[&<>"'\/]/g, function(s) {
      return entityMap[s];
    });
  };

  escapeRegExp = function(str) {
    var specials;
    specials = /[.*+?|()\[\]{}\\$^]/g;
    return str.replace(specials, "\\$&");
  };

  $.widget("ui.areacomplete", $.ui.autocomplete, {
    options: $.extend({}, $.ui.autocomplete.prototype.options, {
      matcher: "(\\b[^,]*)",
      suffix: ''
    }),
    _create: function() {
      this.overriden = {
        select: this.options.select,
        focus: this.options.focus
      };
      this.options.select = $.proxy(this.selectCallback, this);
      this.options.focus = $.proxy(this.focusCallback, this);
      $.ui.autocomplete.prototype._create.call(this);
      return this.matcher = new RegExp(this.options.matcher + '$');
    },
    selectCallback: function(event, ui) {
      var after, before, newval, value;
      value = this._value();
      before = value.substring(0, this.start);
      after = value.substring(this.end);
      newval = ui.item.value + this.options.suffix;
      value = before + newval + after;
      this._value(value);
      Selection.set(this.element, before.length + newval.length);
      if (this.overriden.select) {
        ui.item.pos = this.start;
        this.overriden.select(event, ui);
      }
      return false;
    },
    focusCallback: function() {
      if (this.overriden.focus) {
        return this.overriden.focus(event, ui);
      }
      return false;
    },
    search: function(value, event) {
      var match, pos;
      if (!value) {
        value = this._value();
        pos = Selection.get(this.element).start;
        value = value.substring(0, pos);
        match = this.matcher.exec(value);
        if (!match) {
          return '';
        }
        this.start = match.index;
        this.end = match.index + match[0].length;
        this.searchTerm = match[1];
      }
      return $.ui.autocomplete.prototype.search.call(this, this.searchTerm, event);
    },
    _renderItem: function(ul, item) {
      return this.options.renderItem(ul, item);
    }
  });

  $.widget("ui.editablecomplete", $.ui.areacomplete, {
    options: $.extend({}, $.ui.areacomplete.prototype.options, {
      showAtCaret: false
    }),
    selectCallback: function(event, ui) {
      var mention, pos;
      pos = {
        start: this.start,
        end: this.end
      };
      if (this.overriden.select) {
        ui.item.pos = pos;
        if (this.overriden.select(event, ui) === false) {
          return false;
        }
      }
      mention = document.createTextNode(ui.item.value);
      insertMention(mention, pos, this.options.suffix);
      this.element.change();
      return false;
    },
    search: function(value, event) {
      var match, node, pos, sel;
      if (!value) {
        sel = window.getSelection();
        node = sel.focusNode;
        value = node.textContent;
        pos = sel.focusOffset;
        value = value.substring(0, pos);
        match = this.matcher.exec(value);
        if (!match) {
          return '';
        }
        this.start = match.index;
        this.end = match.index + match[0].length;
        this._setDropdownPosition(node);
        this.searchTerm = match[1];
      }
      return $.ui.autocomplete.prototype.search.call(this, this.searchTerm, event);
    },
    _setDropdownPosition: function(node) {
      var boundary, posX, posY, rect;
      if (this.options.showAtCaret) {
        boundary = document.createRange();
        boundary.setStart(node, this.start);
        boundary.collapse(true);
        rect = boundary.getClientRects()[0];
        posX = rect.left + (window.scrollX || window.pageXOffset);
        posY = rect.top + rect.height + (window.scrollY || window.pageYOffset);
        this.options.position.of = document;
        return this.options.position.at = "left+" + posX + " top+" + posY;
      }
    }
  });

  MentionsBase = (function() {
    MentionsBase.prototype.marker = '\u200B';

    function MentionsBase(input1, options) {
      this.input = input1;
      this.options = $.extend({}, this.settings, options);
      if (!this.options.source) {
        this.options.source = this.input.data('source') || [];
      }
    }

    MentionsBase.prototype._getMatcher = function() {
      var allowedChars;
      allowedChars = '[^' + this.options.trigger + ']';
      return '[' + this.options.trigger + '](' + allowedChars + '{0,20})';
    };

    MentionsBase.prototype._markupMention = function(mention) {
      return this.options.markup(mention);
    };

    return MentionsBase;

  })();

  MentionsInput = (function(superClass) {
    var mimicProperties;

    extend(MentionsInput, superClass);

    mimicProperties = ['backgroundColor', 'marginTop', 'marginBottom', 'marginLeft', 'marginRight', 'paddingTop', 'paddingBottom', 'paddingLeft', 'paddingRight', 'borderTopWidth', 'borderLeftWidth', 'borderBottomWidth', 'borderRightWidth', 'fontSize', 'fontStyle', 'fontFamily', 'fontWeight', 'lineHeight', 'height', 'boxSizing'];

    function MentionsInput(input1, options) {
      var container;
      this.input = input1;
      this._updateHScroll = bind(this._updateHScroll, this);
      this._updateVScroll = bind(this._updateVScroll, this);
      this._updateValue = bind(this._updateValue, this);
      this._onSelect = bind(this._onSelect, this);
      this._addMention = bind(this._addMention, this);
      this._updateMentions = bind(this._updateMentions, this);
      this._update = bind(this._update, this);
      this.settings = {
        trigger: '@',
        widget: 'areacomplete',
        suffix: ' ',
        autocomplete: {
          autoFocus: true,
          delay: 0
        }
      };
      MentionsInput.__super__.constructor.call(this, this.input, options);
      this.mentions = [];
      this.input.addClass('input');
      container = $('<div>', {
        'class': 'mentions-input'
      });
      container.css('display', this.input.css('display'));
      this.container = this.input.wrapAll(container).parent();
      this.hidden = this._createHidden();
      this.highlighter = this._createHighlighter();
      this.highlighterContent = $('div', this.highlighter);
      this.input.focus((function(_this) {
        return function() {
          return _this.highlighter.addClass('focus');
        };
      })(this)).blur((function(_this) {
        return function() {
          return _this.highlighter.removeClass('focus');
        };
      })(this));
      options = $.extend({
        matcher: this._getMatcher(),
        select: this._onSelect,
        suffix: this.options.suffix,
        source: this.options.source,
        markup: this.options.markup,
        renderItem: this.options.renderItem,
        appendTo: this.input.parent()
      }, this.options.autocomplete);
      this.autocomplete = this.input[this.options.widget](options);
      this._setValue(this.input.val());
      this._initEvents();
    }

    MentionsInput.prototype._initEvents = function() {
      var tagName;
      this.input.on("input." + namespace + " change." + namespace, this._update);
      tagName = this.input.prop("tagName");
      if (tagName === "INPUT") {
        this.input.on("focus." + namespace, (function(_this) {
          return function() {
            return _this.interval = setInterval(_this._updateHScroll, 10);
          };
        })(this));
        return this.input.on("blur." + namespace, (function(_this) {
          return function() {
            setTimeout(_this._updateHScroll, 10);
            return clearInterval(_this.interval);
          };
        })(this));
      } else if (tagName === "TEXTAREA") {
        this.input.on("scroll." + namespace, ((function(_this) {
          return function() {
            return setTimeout(_this._updateVScroll, 10);
          };
        })(this)));
        return this.input.on("resize." + namespace, ((function(_this) {
          return function() {
            return setTimeout(_this._updateVScroll, 10);
          };
        })(this)));
      }
    };

    MentionsInput.prototype._setValue = function(value) {
      var match, mentionRE, offset;
      offset = 0;
      mentionRE = /@\[([^\]]+)\]\(([^ \)]+)\)/g;
      this.value = value.replace(mentionRE, '$1');
      this.input.val(this.value);
      match = mentionRE.exec(value);
      while (match) {
        this._addMention({
          name: match[1],
          uid: match[2],
          pos: match.index - offset
        });
        offset += match[2].length + 5;
        match = mentionRE.exec(value);
      }
      return this._updateValue();
    };

    MentionsInput.prototype._createHidden = function() {
      var hidden;
      hidden = $('<input>', {
        type: 'hidden',
        name: this.input.attr('name')
      });
      $.each(this.input.data(), function(name, value) {
        return hidden.attr("data-" + name.replace(/([a-zA-Z])(?=[A-Z])/g, '$1-').toLowerCase(), JSON.stringify(value));
      });
      this.input.removeData();
      hidden.appendTo(this.container);
      this.input.removeAttr('name');
      return hidden;
    };

    MentionsInput.prototype._createHighlighter = function() {
      var content, highlighter, j, len, property;
      highlighter = $('<div>', {
        'class': 'highlighter'
      });
      if (this.input.prop("tagName") === "INPUT") {
        highlighter.css('whiteSpace', 'pre');
      } else {
        highlighter.css('whiteSpace', 'pre-wrap');
        highlighter.css('wordWrap', 'break-word');
      }
      content = $('<div>', {
        'class': 'highlighter-content'
      });
      highlighter.append(content).prependTo(this.container);
      for (j = 0, len = mimicProperties.length; j < len; j++) {
        property = mimicProperties[j];
        highlighter.css(property, this.input.css(property));
      }
      this.input.css('backgroundColor', 'transparent');
      return highlighter;
    };

    MentionsInput.prototype._update = function() {
      this._updateMentions();
      return this._updateValue();
    };

    MentionsInput.prototype._updateMentions = function() {
      var change, cursor, diff, i, j, k, len, mention, piece, ref, update_pos, value;
      value = this.input.val();
      diff = diffChars(this.value, value);
      update_pos = (function(_this) {
        return function(cursor, delta) {
          var j, len, mention, ref, results;
          ref = _this.mentions;
          results = [];
          for (j = 0, len = ref.length; j < len; j++) {
            mention = ref[j];
            if (mention.pos >= cursor) {
              results.push(mention.pos += delta);
            } else {
              results.push(void 0);
            }
          }
          return results;
        };
      })(this);
      cursor = 0;
      for (j = 0, len = diff.length; j < len; j++) {
        change = diff[j];
        if (change.added) {
          update_pos(cursor, change.count);
        } else if (change.removed) {
          update_pos(cursor, -change.count);
        }
        if (!change.removed) {
          cursor += change.count;
        }
      }
      ref = this.mentions.slice(0);
      for (i = k = ref.length - 1; k >= 0; i = k += -1) {
        mention = ref[i];
        piece = value.substring(mention.pos, mention.pos + mention.name.length);
        if (mention.name !== piece) {
          this.mentions.splice(i, 1);
        }
      }
      return this.value = value;
    };

    MentionsInput.prototype._addMention = function(mention) {
      this.mentions.push(mention);
      return this.mentions.sort(function(a, b) {
        return a.pos - b.pos;
      });
    };

    MentionsInput.prototype._onSelect = function(event, ui) {
      this._updateMentions();
      this._addMention({
        name: ui.item.value,
        pos: ui.item.pos,
        uid: ui.item.uid,
        profile_id: ui.item.profile_id
      });
      return this._updateValue();
    };

    MentionsInput.prototype._updateValue = function() {
      var cursor, hdContent, hlContent, j, len, mention, piece, ref, value;
      value = this.input.val();
      hlContent = [];
      hdContent = [];
      cursor = 0;
      ref = this.mentions;
      for (j = 0, len = ref.length; j < len; j++) {
        mention = ref[j];
        piece = value.substring(cursor, mention.pos);
        hlContent.push(escapeHtml(piece));
        hdContent.push(piece);
        hlContent.push("<strong>" + mention.name + "</strong>");
        hdContent.push(this._markupMention(mention));
        cursor = mention.pos + mention.name.length;
      }
      piece = value.substring(cursor);
      this.highlighterContent.html(hlContent.join('') + escapeHtml(piece));
      return this.hidden.val(hdContent.join('') + piece);
    };

    MentionsInput.prototype._updateVScroll = function() {
      var scrollTop;
      scrollTop = this.input.scrollTop();
      this.highlighterContent.css({
        top: "-" + scrollTop + "px"
      });
      return this.highlighter.height(this.input.height());
    };

    MentionsInput.prototype._updateHScroll = function() {
      var scrollLeft;
      scrollLeft = this.input.scrollLeft();
      return this.highlighterContent.css({
        left: "-" + scrollLeft + "px"
      });
    };

    MentionsInput.prototype._replaceWithSpaces = function(value, what) {
      return value.replace(what, Array(what.length).join(' '));
    };

    MentionsInput.prototype._cutChar = function(value, index) {
      return value.substring(0, index) + value.substring(index + 1);
    };

    MentionsInput.prototype.setValue = function() {
      var j, len, piece, pieces, value;
      pieces = 1 <= arguments.length ? slice.call(arguments, 0) : [];
      value = '';
      for (j = 0, len = pieces.length; j < len; j++) {
        piece = pieces[j];
        if (typeof piece === 'string') {
          value += piece;
        } else {
          value += this._markupMention(piece);
        }
      }
      return this._setValue(value);
    };

    MentionsInput.prototype.getValue = function() {
      return this.hidden.val();
    };

    MentionsInput.prototype.getRawValue = function() {
      return this.input.val().replace(this.marker, '');
    };

    MentionsInput.prototype.getMentions = function() {
      return this.mentions;
    };

    MentionsInput.prototype.clear = function() {
      this.input.val('');
      return this._update();
    };

    MentionsInput.prototype.destroy = function() {
      this.input.areacomplete("destroy");
      this.input.off("." + namespace).attr('name', this.hidden.attr('name'));
      return this.container.replaceWith(this.input);
    };

    return MentionsInput;

  })(MentionsBase);

  MentionsContenteditable = (function(superClass) {
    var insertMention, mentionTpl;

    extend(MentionsContenteditable, superClass);

    MentionsContenteditable.prototype.selector = '[data-mention]';

    function MentionsContenteditable(input1, options) {
      this.input = input1;
      this._onSelect = bind(this._onSelect, this);
      this._addMention = bind(this._addMention, this);
      this.settings = {
        trigger: '@',
        widget: 'editablecomplete',
        autocomplete: {
          autoFocus: true,
          delay: 0
        }
      };
      MentionsContenteditable.__super__.constructor.call(this, this.input, options);
      options = $.extend({
        matcher: this._getMatcher(),
        suffix: this.marker,
        select: this._onSelect,
        source: this.options.source,
        showAtCaret: this.options.showAtCaret
      }, this.options.autocomplete);
      this.autocomplete = this.input[this.options.widget](options);
      this._setValue(this.input.html());
      this._initEvents();
    }

    mentionTpl = function(mention) {
      return "<strong data-mention=\"" + mention.uid + "\">" + mention.value + "</strong>";
    };

    insertMention = function(mention, pos, suffix) {
      var node, range, selection;
      selection = window.getSelection();
      node = selection.focusNode;
      range = selection.getRangeAt(0);
      range.setStart(node, pos.start);
      range.setEnd(node, pos.end);
      range.deleteContents();
      range.insertNode(mention);
      if (suffix) {
        suffix = document.createTextNode(suffix);
        $(suffix).insertAfter(mention);
        range.setStartAfter(suffix);
      } else {
        range.setStartAfter(mention);
      }
      range.collapse(true);
      selection.removeAllRanges();
      selection.addRange(range);
      return mention;
    };

    MentionsContenteditable.prototype._initEvents = function() {
      return this.input.find(this.selector).each((function(_this) {
        return function(i, el) {
          return _this._watch(el);
        };
      })(this));
    };

    MentionsContenteditable.prototype._setValue = function(value) {
      var mentionRE;
      mentionRE = /@\[([^\]]+)\]\(([^ \)]+)\)/g;
      value = value.replace(mentionRE, (function(_this) {
        return function(match, value, uid) {
          return mentionTpl({
            value: value,
            uid: uid
          }) + _this.marker;
        };
      })(this));
      return this.input.html(value);
    };

    MentionsContenteditable.prototype._addMention = function(data) {
      var mention, mentionNode;
      mentionNode = $(mentionTpl(data))[0];
      mention = insertMention(mentionNode, data.pos, this.marker);
      return this._watch(mention);
    };

    MentionsContenteditable.prototype._onSelect = function(event, ui) {
      this._addMention(ui.item);
      this.input.trigger("change." + namespace);
      return false;
    };

    MentionsContenteditable.prototype._watch = function(mention) {
      return mention.addEventListener('DOMCharacterDataModified', function(e) {
        var offset, range, sel, text;
        if (e.newValue !== e.prevValue) {
          text = e.target;
          sel = window.getSelection();
          offset = sel.focusOffset;
          $(text).insertBefore(mention);
          $(mention).remove();
          range = document.createRange();
          range.setStart(text, offset);
          range.collapse(true);
          sel.removeAllRanges();
          return sel.addRange(range);
        }
      });
    };

    MentionsContenteditable.prototype.update = function() {
      this._initValue();
      this._initEvents();
      return this.input.focus();
    };

    MentionsContenteditable.prototype.setValue = function() {
      var j, len, piece, pieces, value;
      pieces = 1 <= arguments.length ? slice.call(arguments, 0) : [];
      value = '';
      for (j = 0, len = pieces.length; j < len; j++) {
        piece = pieces[j];
        if (typeof piece === 'string') {
          value += piece;
        } else {
          value += this._markupMention(piece);
        }
      }
      this._setValue(value);
      this._initEvents();
      return this.input.focus();
    };

    MentionsContenteditable.prototype.getValue = function() {
      var markupMention, value;
      value = this.input.clone();
      markupMention = this._markupMention;
      $(this.selector, value).replaceWith(function() {
        var name, uid;
        uid = $(this).data('mention');
        name = $(this).text();
        return markupMention({
          name: name,
          uid: uid
        });
      });
      return value.html().replace(this.marker, '');
    };

    MentionsContenteditable.prototype.getMentions = function() {
      var mentions;
      mentions = [];
      $(this.selector, this.input).each(function() {
        return mentions.push({
          uid: $(this).data('mention'),
          name: $(this).text()
        });
      });
      return mentions;
    };

    MentionsContenteditable.prototype.clear = function() {
      return this.input.html('');
    };

    MentionsContenteditable.prototype.destroy = function() {
      this.input.editablecomplete("destroy");
      this.input.off("." + namespace);
      return this.input.html(this.getValue());
    };

    return MentionsContenteditable;

  })(MentionsBase);


/*
    Copyright (c) 2009-2011, Kevin Decker <kpdecker@gmail.com>
*/
function diffChars(oldString, newString) {
  // Handle the identity case (this is due to unrolling editLength == 0
  if (newString === oldString) {
    return [{ value: newString }];
  }
  if (!newString) {
    return [{ value: oldString, removed: true }];
  }
  if (!oldString) {
    return [{ value: newString, added: true }];
  }

  var newLen = newString.length, oldLen = oldString.length;
  var maxEditLength = newLen + oldLen;
  var bestPath = [{ newPos: -1, components: [] }];

  // Seed editLength = 0, i.e. the content starts with the same values
  var oldPos = extractCommon(bestPath[0], newString, oldString, 0);
  if (bestPath[0].newPos+1 >= newLen && oldPos+1 >= oldLen) {
    // Identity per the equality and tokenizer
    return [{value: newString}];
  }

  // Main worker method. checks all permutations of a given edit length for acceptance.
  function execEditLength() {
    for (var diagonalPath = -1*editLength; diagonalPath <= editLength; diagonalPath+=2) {
      var basePath;
      var addPath = bestPath[diagonalPath-1],
          removePath = bestPath[diagonalPath+1];
      oldPos = (removePath ? removePath.newPos : 0) - diagonalPath;
      if (addPath) {
        // No one else is going to attempt to use this value, clear it
        bestPath[diagonalPath-1] = undefined;
      }

      var canAdd = addPath && addPath.newPos+1 < newLen;
      var canRemove = removePath && 0 <= oldPos && oldPos < oldLen;
      if (!canAdd && !canRemove) {
        // If this path is a terminal then prune
        bestPath[diagonalPath] = undefined;
        continue;
      }

      // Select the diagonal that we want to branch from. We select the prior
      // path whose position in the new string is the farthest from the origin
      // and does not pass the bounds of the diff graph
      if (!canAdd || (canRemove && addPath.newPos < removePath.newPos)) {
        basePath = clonePath(removePath);
        pushComponent(basePath.components, undefined, true);
      } else {
        basePath = addPath;   // No need to clone, we've pulled it from the list
        basePath.newPos++;
        pushComponent(basePath.components, true, undefined);
      }

      var oldPos = extractCommon(basePath, newString, oldString, diagonalPath);

      // If we have hit the end of both strings, then we are done
      if (basePath.newPos+1 >= newLen && oldPos+1 >= oldLen) {
        return buildValues(basePath.components, newString, oldString);
      } else {
        // Otherwise track this path as a potential candidate and continue.
        bestPath[diagonalPath] = basePath;
      }
    }

    editLength++;
  }

  // Performs the length of edit iteration. Is a bit fugly as this has to support the
  // sync and async mode which is never fun. Loops over execEditLength until a value
  // is produced.
  var editLength = 1;
  while(editLength <= maxEditLength) {
    var ret = execEditLength();
    if (ret) {
      return ret;
    }
  }
}

function buildValues(components, newString, oldString) {
    var componentPos = 0,
        componentLen = components.length,
        newPos = 0,
        oldPos = 0;

    for (; componentPos < componentLen; componentPos++) {
      var component = components[componentPos];
      if (!component.removed) {
        component.value = newString.slice(newPos, newPos + component.count);
        newPos += component.count;

        // Common case
        if (!component.added) {
          oldPos += component.count;
        }
      } else {
        component.value = oldString.slice(oldPos, oldPos + component.count);
        oldPos += component.count;
      }
    }

    return components;
  }

function pushComponent(components, added, removed) {
  var last = components[components.length-1];
  if (last && last.added === added && last.removed === removed) {
    // We need to clone here as the component clone operation is just
    // as shallow array clone
    components[components.length-1] = {count: last.count + 1, added: added, removed: removed };
  } else {
    components.push({count: 1, added: added, removed: removed });
  }
}

function extractCommon(basePath, newString, oldString, diagonalPath) {
  var newLen = newString.length,
      oldLen = oldString.length,
      newPos = basePath.newPos,
      oldPos = newPos - diagonalPath,

      commonCount = 0;
  while (newPos+1 < newLen && oldPos+1 < oldLen && newString[newPos+1] == oldString[oldPos+1]) {
    newPos++;
    oldPos++;
    commonCount++;
  }

  if (commonCount) {
    basePath.components.push({count: commonCount});
  }

  basePath.newPos = newPos;
  return oldPos;
}

function clonePath(path) {
    return { newPos: path.newPos, components: path.components.slice(0) };
};

  $.fn[namespace] = function() {
    var args, options, returnValue;
    options = arguments[0], args = 2 <= arguments.length ? slice.call(arguments, 1) : [];
    returnValue = this;
    this.each(function() {
      var instance, ref;
      if (typeof options === 'string' && options.charAt(0) !== '_') {
        instance = $(this).data('mentionsInput');
        if (options in instance) {
          return returnValue = instance[options].apply(instance, args);
        }
      } else {
        if ((ref = this.tagName) === 'INPUT' || ref === 'TEXTAREA') {
          return $(this).data('mentionsInput', new MentionsInput($(this), options));
        } else if (this.contentEditable === "true") {
          return $(this).data('mentionsInput', new MentionsContenteditable($(this), options));
        }
      }
    });
    return returnValue;
  };

}).call(this);
;
// Generated by CoffeeScript 1.12.6
(function() {
  var extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
    hasProp = {}.hasOwnProperty;

  (function($) {
    "use strict";
    var Mentions, MentionsCKEditor, MentionsHandlerBase, MentionsInput;
    $.widget("ui.mentionsAutocomplete", $.ui.autocomplete, {
      options: $.extend({}, $.ui.autocomplete.prototype.options, {
        messages: {
          noResults: ""
        }
      }),
      _create: function() {
        this.overriden = {
          select: this.options.select,
          focus: this.options.focus,
          change: this.options.change
        };
        this.options.select = $.proxy(this.selectCallback, this);
        this.options.focus = $.proxy(this.focusCallback, this);
        this.options.change = $.proxy(this.changeCallback, this);
        $.ui.autocomplete.prototype._create.call(this);
        this.liveRegion.remove();
      },
      search: function(value, event) {
        if (!value) {
          return false;
        }
        return $.ui.autocomplete.prototype.search.call(this, value, event);
      },
      selectCallback: function(event, ui) {
        if (this.overriden.select) {
          return this.overriden.select(event, ui);
        }
        return false;
      },
      focusCallback: function(event, ui) {
        if (this.overriden.focus) {
          return this.overriden.focus(event, ui);
        }
        return false;
      },
      changeCallback: function(event, ui) {
        if (this.overriden.change) {
          return this.overriden.change(event, ui);
        }
        return false;
      },
      _value: function() {
        return false;
      },
      _renderItem: function(ul, item) {
        if (typeof this.options.renderItem === "function") {
          return this.options.renderItem(ul, item);
        }
        return $.ui.autocomplete.prototype._renderItem.call(this, ul, item);
      }
    });
    MentionsHandlerBase = (function() {
      function MentionsHandlerBase(mentions1) {
        this.mentions = mentions1;
        this.element = $(this.mentions.element);
        this.cache = {
          mentions: [],
          value: {
            original: "",
            compiled: ""
          }
        };
      }

      MentionsHandlerBase.prototype.initEvents = function() {
        throw "initEvents method is not implemented";
      };

      MentionsHandlerBase.prototype.setValue = function(value) {
        throw "setValue method is not implemented";
      };

      return MentionsHandlerBase;

    })();
    MentionsInput = (function(superClass) {
      extend(MentionsInput, superClass);

      function MentionsInput(mentions1) {
        this.mentions = mentions1;
        MentionsInput.__super__.constructor.call(this, this.mentions);
        this.createHiddenField();
        this.element.mentionsAutocomplete(jQuery.extend({}, {
          select: (function(_this) {
            return function(event, ui) {
              return _this.onSelect(event, ui);
            };
          })(this),
          appendTo: this.element.parent()
        }, this.mentions.settings.autocomplete));
      }

      MentionsInput.prototype.initEvents = function() {
        return this.element.on("input", (function(_this) {
          return function(event) {
            return _this.handleInput(event);
          };
        })(this));
      };

      MentionsInput.prototype.handleInput = function() {
        var match1, match2, position, query, trigger, value;
        position = this.element.caret("pos");
        value = this.element.val().substring(0, position);
        this.refreshMentions(this.cache.value.compiled, this.compile(this.element.val()));
        this.cache.value = {
          original: this.decompile(this.element.val()),
          compiled: this.compile(this.element.val())
        };
        this.updateValues();
        match1 = /(\S+)$/g.exec(value);
        if (!match1) {
          this.element.mentionsAutocomplete("close");
          return;
        }
        trigger = this.mentions.settings.trigger;
        match2 = new RegExp("(?:^|\s)[" + trigger + "]([^" + trigger + "]{" + this.mentions.settings.length.join(",") + "})$").exec(match1[0]);
        if (!match2) {
          this.element.mentionsAutocomplete("close");
          return;
        }
        this.start = match1.index;
        this.end = this.start + match2[0].length;
        query = match2[1];
        if (this.timer) {
          window.clearTimeout(this.timer);
        }
        return this.timer = window.setTimeout((function(_this) {
          return function() {
            return _this.mentions.fetchData(query, function(response) {
              _this.element.mentionsAutocomplete("option", "source", function(req, add) {
                return add(response);
              });
              return _this.element.mentionsAutocomplete("search", query);
            });
          };
        })(this), this.mentions.settings.delay);
      };

      MentionsInput.prototype.createHiddenField = function() {
        this.hidden = $("<input />", {
          type: "hidden",
          name: this.element.attr("name")
        });
        return this.element.after(this.hidden).removeAttr("name");
      };

      MentionsInput.prototype.updateValues = function() {
        this.hidden.val(this.cache.value.original);
        return this.element.val(this.cache.value.compiled);
      };

      MentionsInput.prototype.compile = function(value) {
        var j, len, mention, piece, position, ref, result;
        result = "";
        position = 0;
        ref = this.cache.mentions;
        for (j = 0, len = ref.length; j < len; j++) {
          mention = ref[j];
          result += value.substring(position, mention.start.original);
          piece = value.substring(mention.start.original, mention.start.original + mention.value.original.length);
          position += value.substring(position, mention.start.original).length;
          if (mention.value.original === piece) {
            result += mention.value.compiled;
            position += piece.length;
          }
        }
        return result + value.substring(position);
      };

      MentionsInput.prototype.decompile = function(value) {
        var j, len, mention, piece, position, ref, result;
        result = "";
        position = 0;
        ref = this.cache.mentions;
        for (j = 0, len = ref.length; j < len; j++) {
          mention = ref[j];
          result += value.substring(position, mention.start.compiled);
          piece = value.substring(mention.start.compiled, mention.start.compiled + mention.value.compiled.length);
          position += value.substring(position, mention.start.compiled).length;
          if (mention.value.compiled === piece) {
            result += mention.value.original;
            position += piece.length;
          }
        }
        return result + value.substring(position);
      };

      MentionsInput.prototype.refreshMentions = function(oldValue, newValue) {
        var cursor, diff, item, j, k, key, len, len1, mention, piece, position, ref, results, setPosition, value;
        position = 0;
        if (newValue) {
          value = newValue;
        } else {
          value = this.cache.value.compiled;
        }
        if (oldValue && newValue) {
          diff = JsDiff.diffChars(oldValue, newValue);
          cursor = 0;
          setPosition = (function(_this) {
            return function(cursor, delta) {
              var j, key, len, mention, ref, results;
              ref = _this.cache.mentions;
              results = [];
              for (key = j = 0, len = ref.length; j < len; key = ++j) {
                mention = ref[key];
                if (mention.start.compiled >= cursor) {
                  results.push(_this.cache.mentions[key].start.compiled += delta);
                } else {
                  results.push(void 0);
                }
              }
              return results;
            };
          })(this);
          for (j = 0, len = diff.length; j < len; j++) {
            item = diff[j];
            if (item.added) {
              setPosition(cursor, item.count);
            } else if (item.removed) {
              setPosition(cursor, -item.count);
            }
            if (!item.removed) {
              cursor += item.count;
            }
          }
        }
        ref = this.cache.mentions;
        results = [];
        for (key = k = 0, len1 = ref.length; k < len1; key = ++k) {
          mention = ref[key];
          piece = value.substring(mention.start.compiled, mention.start.compiled + mention.value.compiled.length);
          position = value.substring(position, mention.start.compiled).length;
          if (mention.value.compiled === piece) {
            this.cache.mentions[key].start.original = position;
            results.push(position += piece.length);
          } else {
            results.push(this.cache.mentions.splice(key, 1));
          }
        }
        return results;
      };

      MentionsInput.prototype.onSelect = function(event, ui) {
        var after, before, mention, start, value;
        before = this.cache.value.compiled.substring(0, this.start);
        after = this.cache.value.compiled.substring(this.end);
        mention = this.mentions.settings.template(ui.item);
        start = {
          original: 0,
          compiled: this.start
        };
        value = {
          original: this.mentions.settings.markup(ui.item),
          compiled: mention
        };
        this.cache.mentions.push({
          start: start,
          value: value
        });
        value = before + mention + this.mentions.settings.suffix + after;
        this.cache.value.compiled = value;
        this.refreshMentions();
        this.cache.value.original = this.decompile(value);
        return this.updateValues();
      };

      MentionsInput.prototype.setValue = function(value) {
        this.cache.value = {
          original: this.decompile(value),
          compiled: this.compile(value)
        };
        this.updateValues();
        return this.refreshMentions();
      };

      return MentionsInput;

    })(MentionsHandlerBase);
    MentionsCKEditor = (function(superClass) {
      extend(MentionsCKEditor, superClass);

      function MentionsCKEditor(mentions1) {
        var editor, element, mentions;
        this.mentions = mentions1;
        MentionsCKEditor.__super__.constructor.call(this, this.mentions);
        this.createHiddenField();
        this.editor = CKEDITOR.instances[this.element.attr("id")];
        this.mentions.settings.suffix = this.mentions.settings.suffix.replace(" ", "\u00A0");
        editor = this.editor;
        element = this.element;
        mentions = this.mentions;
        this.element.mentionsAutocomplete(jQuery.extend({}, this.mentions.settings.autocomplete, {
          select: (function(_this) {
            return function(event, ui) {
              return _this.onSelect(event, ui);
            };
          })(this),
          appendTo: this.element.parent(),
          open: function(event, ui) {
            var offset, position, top;
            position = $(editor.document.$.body).caret("position", {
              iframe: editor.window.$.frameElement
            });
            offset = $(editor.document.$.body).caret("offset", {
              iframe: editor.window.$.frameElement
            });
            top = 5 + position.height + position.top + $(editor.ui.space("top").$).outerHeight(true) + offset.height;
            element.data("ui-mentionsAutocomplete").menu.element.css({
              left: 0,
              top: top
            });
            if (mentions.settings.autocomplete.open) {
              return mentions.settings.autocomplete.open.call(this, event, ui);
            }
          }
        }));
      }

      MentionsCKEditor.prototype.initEvents = function() {
        this.editor.on("change", (function(_this) {
          return function() {
            return _this.handleInput();
          };
        })(this));
        return $(this.editor.window.$.document.body).on("click", (function(_this) {
          return function() {
            return _this.element.mentionsAutocomplete("close");
          };
        })(this));
      };

      MentionsCKEditor.prototype.handleInput = function() {
        var match1, match2, node, position, query, selection, trigger, value;
        this.refreshMentions();
        this.updateValues();
        selection = this.editor.window.$.getSelection();
        node = selection.focusNode;
        value = node.textContent;
        position = selection.focusOffset;
        value = value.substring(0, position);
        match1 = /(\S+)$/g.exec(value);
        if (this.timer) {
          window.clearTimeout(this.timer);
        }
        if (!match1) {
          this.element.mentionsAutocomplete("close");
          return;
        }
        trigger = this.mentions.settings.trigger;
        match2 = new RegExp("(?:^|\s)[" + trigger + "]([^" + trigger + "]{" + this.mentions.settings.length.join(",") + "})$").exec(match1[0]);
        if (!match2) {
          this.element.mentionsAutocomplete("close");
          return;
        }
        this.start = match1.index;
        this.end = this.start + match2[0].length;
        query = match2[1];
        return this.timer = window.setTimeout((function(_this) {
          return function() {
            return _this.mentions.fetchData(query, function(response) {
              _this.element.mentionsAutocomplete("option", "source", function(req, add) {
                return add(response);
              });
              return _this.element.mentionsAutocomplete("search", query);
            });
          };
        })(this), this.mentions.settings.delay);
      };

      MentionsCKEditor.prototype.createHiddenField = function() {
        this.hidden = $("<input />", {
          type: "hidden",
          name: this.element.attr("name")
        });
        return this.element.after(this.hidden).removeAttr("name");
      };

      MentionsCKEditor.prototype.updateValues = function() {
        return this.hidden.val(this.getValue());
      };

      MentionsCKEditor.prototype.refreshMentions = function() {
        var j, key, len, mention, ref, results;
        ref = this.cache.mentions;
        results = [];
        for (key = j = 0, len = ref.length; j < len; key = ++j) {
          mention = ref[key];
          if (mention.$node.html() !== this.mentions.settings.template(mention.item)) {
            results.push(this.cache.mentions.splice(key, 1));
          } else {
            results.push(void 0);
          }
        }
        return results;
      };

      MentionsCKEditor.prototype.onSelect = function(event, ui) {
        var $node, _id, mention, position;
        _id = Math.random().toString().split(".")[1];
        mention = this.mentions.settings.template(ui.item);
        position = {
          start: this.start,
          end: this.end
        };
        $node = $("<mention />", {
          id: _id
        }).html(mention).data("mentionItem", ui.item);
        ui.item._id = _id;
        this.insertMention($node, position, ui.item);
        this.updateValues();
        return this.editor.focus();
      };

      MentionsCKEditor.prototype.insertMention = function($node, position, item) {
        var node, range, selection, suffix;
        selection = this.editor.window.$.getSelection();
        node = selection.focusNode;
        range = selection.getRangeAt(0);
        range.setStart(node, position.start);
        range.setEnd(node, position.end);
        range.deleteContents();
        if (this.mentions.settings.suffix) {
          suffix = document.createTextNode(this.mentions.settings.suffix);
          range.insertNode($node.get(0));
          $node.after(suffix);
          range.setStartAfter(suffix);
        } else {
          range.insertNode($node.get(0));
        }
        this.cache.mentions.push({
          position: position,
          item: item,
          $node: $node
        });
        range.collapse(true);
        selection.removeAllRanges();
        return selection.addRange(range);
      };

      MentionsCKEditor.prototype.getValue = function() {
        var $container, j, len, markup, mention, ref;
        $container = $(this.editor.document.$.body.cloneNode(true));
        ref = this.cache.mentions;
        for (j = 0, len = ref.length; j < len; j++) {
          mention = ref[j];
          markup = this.mentions.settings.markup(mention.item);
          $("mention#" + mention.item._id, $container).before(markup).remove();
        }
        return $container.html();
      };

      MentionsCKEditor.prototype.setValue = function(value) {
        this.editor.setData(value);
        this.updateValues();
        return this.refreshMentions();
      };

      return MentionsCKEditor;

    })(MentionsHandlerBase);
    Mentions = (function() {
      function Mentions(element1, settings) {
        var ref;
        this.element = element1;
        this.settings = $.extend({}, {
          trigger: "@",
          suffix: " ",
          delay: 200,
          source: [],
          length: [1, 20],
          autocomplete: {},
          markup: function(item) {
            return "[~" + item.value + "]";
          },
          template: function(item) {
            return item.label;
          }
        }, settings);
        $(this.element).wrap($("<div />", {
          "class": "mentions-input"
        }));
        if (window.CKEDITOR && window.CKEDITOR.instances[this.element.id]) {
          this.handler = new MentionsCKEditor(this);
        } else if ((ref = this.element.tagName) === "INPUT" || ref === "TEXTAREA") {
          this.handler = new MentionsInput(this);
        } else {
          throw "Element " + this.element.tagName + " is not supported";
        }
        this.handler.initEvents();
      }

      Mentions.prototype.fetchData = function(query, callback) {
        if (typeof this.settings.source === "object") {
          return callback(this.settings.source);
        } else if (typeof this.settings.source === "string") {
          return $.getJSON(this.settings.source, {
            term: query
          }, function(response) {
            return callback(response);
          });
        }
      };

      return Mentions;

    })();
    return $.fn.extend({
      mentionsOldInput: function(settings) {
        return this.each(function(i, e) {
          return $(e).data("mentionsInput", new Mentions(e, settings));
        });
      }
    });
  })(jQuery);

}).call(this);


/**
 * @file
 */

(function ($) {

  "use strict";

  var CKEDITOR = window.CKEDITOR || {
    on: function(event, callback) {
      callback();
    },
    instances: {}
  };

  // Render Mention Item.
  var renderMentionItem = function (ul, item) {
    var $li = $("<li />"),
      $a = $("<a />", {
        class: "mention__item"
      }).appendTo($li);

    $a.append(item.html_item);
    return $li.appendTo(ul);
  };

  // Markup for Mention Item.
  var markupMentionItem = function(item, settings) {
    var type = settings.socialMentions.suggestionsFormat;
    if (type == "full_name" || (type == "all" && item.profile_id)) {
      return settings.socialMentions.prefix + item.profile_id + settings.socialMentions.suffix;
    }
    return settings.socialMentions.prefix + item.name + settings.socialMentions.suffix;
  };

  // Adds mention input config for the textarea.
  var initMentions = function(element, context, settings) {
    $(element).mentionsInput({
      source: settings.path.baseUrl + "mentions-autocomplete",
      renderItem: function(ul, item) {
        return renderMentionItem(ul, item);
      },
      markup: function(item) {
        return markupMentionItem(item, settings);
      },
      template: function(item) {
        return item.value;
      }
    });

    // Hook up the autogrow resize event to the highligher resize event handler.
    $(element).on('autosize:resized', function () { $(element).trigger('resize.mentionsInput'); });
  };

  // Adds mention input config for the textarea.
  var initCKEditorMentions = function(element, context, settings) {
    $(element).mentionsOldInput({
      source: settings.path.baseUrl + "mentions-autocomplete",
      autocomplete: {
        renderItem: function(ul, item) {
          return renderMentionItem(ul, item);
        },
        open: function(event, ui) {
          if (!CKEDITOR.instances[this.id]) {
            var menu = $(this).data("ui-mentionsAutocomplete").menu;
            menu.focus(null, $("li", menu.element).eq(0));

            if (window.matchMedia("(min-width: 600px)").matches) {
              var commentTextarea = $(this).offset().top + $(this).height();
              var userList = $(this).siblings(".ui-autocomplete");
              var userListHeight = $(userList).innerHeight();
              var documentHeight = $(document).height();
              var distanceFromBottom = (documentHeight - commentTextarea);
              if (distanceFromBottom < userListHeight) {
                // class rule set bottom and top position
                // so list displays above the textarea
                $(userList).addClass("upward");
              }
            }
          }
        }
      },
      markup: function(item) {
        return markupMentionItem(item, settings);
      },
      template: function(item) {
        return item.value;
      }
    });
  };

  // Initiate mentions.
  Drupal.behaviors.socialMentions = {
    attach: function(context, settings) {
      var formIds = ".comment-form, #social-post-entity-form";

      CKEDITOR.on("instanceReady", function () {
        $(formIds).once("socialMentions").each(function (i, element) {
          $.each($(".form-textarea", element), function (i, textarea) {
            if (typeof CKEDITOR.instances[$(textarea).attr('id')] === 'undefined') {
              initMentions(textarea, context, settings);
            }
            else {
              initCKEditorMentions(textarea, context, settings);
            }
          });
        });
      });
    }
  };

  // Adds a custom behaviour for clicking on the reply button.
  Drupal.behaviors.socialMentionsReply = {
    attach: function (context, settings) {
      CKEDITOR.on("instanceReady", function () {
        $(".comment-form").once("socialMentionsReply").each(function (i, e) {
          var form = e,
            $textarea = $(".form-textarea", form),
            mentionsInput = $textarea.data("mentionsInput"),
            editor = CKEDITOR.instances[$textarea.attr("id")];

          $(".mention-reply").on("click", function (e) {
            e.preventDefault();

            var author = $(this).data("author"),
              empty = editor ? !editor.getData().length : !$textarea.val().length;

            if (author && empty) {
              if (!editor) {
                $textarea.val(author.value);

                mentionsInput._updateMentions();
                mentionsInput._addMention({
                  name: author.value,
                  pos: 0,
                  uid: author.uid,
                  profile_id: author.profile_id
                });
                mentionsInput._updateValue();

                $textarea.focus();
              }
              else {
                mentionsInput.handler.refreshMentions();

                mentionsInput.handler.editor.focus();
                mentionsInput.handler.handleInput();
                mentionsInput.handler.onSelect({}, {
                  item: author
                });
                mentionsInput.handler.editor.focus();
              }

              if (this.hash.length) {
                var pid = this.hash.substr(1);

                $(".parent-comment", form).val(pid);
              }
            }
          });

          $textarea.on("input", function () {
            if (editor) {
              if (!mentionsInput.mentions.length) {
                $(".parent-comment", form).val("");
              }
            }
          });
        });
      });
    }
  };

})(jQuery);
;
(function ($) {

  'use strict';

  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};

  /**
   * This script adds the required and error classes to the details wrapper.
   */
  Drupal.behaviors.fieldGroupDetails = {
    attach: function (context) {
      $(context).find('.field-group-details').once('field-group-details').each(function () {
        var $this = $(this);

        if ($this.is('.required-fields') && ($this.find('[required]').length > 0 || $this.find('.form-required').length > 0)) {
          $('summary', $this).first().addClass('form-required');
        }
      });
    }
  };

})(jQuery);
;
(function ($) {

  'use strict';

  /**
   * Drupal FieldGroup object.
   */
  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};
  Drupal.FieldGroup.groupWithfocus = null;

  Drupal.FieldGroup.setGroupWithfocus = function (element) {
    element.css({display: 'block'});
    Drupal.FieldGroup.groupWithfocus = element;
  };

  /**
   * Behaviors.
   */
  Drupal.behaviors.fieldGroup = {
    attach: function (context, settings) {

      settings.field_group = settings.field_group || drupalSettings.field_group;
      if (typeof settings.field_group === 'undefined') {
        return;
      }

      // Execute all of them.
      $.each(Drupal.FieldGroup.Effects, function (func) {
        // We check for a wrapper function in Drupal.field_group as
        // alternative for dynamic string function calls.
        var type = func.toLowerCase().replace('process', '');
        if (typeof settings.field_group[type] !== 'undefined' && $.isFunction(this.execute)) {
          this.execute(context, settings, settings.field_group[type]);
        }
      });

      // Add a new ID to each fieldset.
      $('.group-wrapper fieldset').each(function () {
        // Tats bad, but we have to keep the actual id to prevent layouts to break.
        var fieldgroupID = 'field_group-' + $(this).attr('id') + ' ' + $(this).attr('id');
        $(this).attr('id', fieldgroupID);
      });

      // Set the hash in url to remember last userselection.
      $('.group-wrapper ul li').each(function () {
        var fieldGroupNavigationListIndex = $(this).index();
        $(this).children('a').click(function () {
          var fieldset = $('.group-wrapper fieldset').get(fieldGroupNavigationListIndex);
          // Grab the first id, holding the wanted hashurl.
          var hashUrl = $(fieldset).attr('id').replace(/^field_group-/, '').split(' ')[0];
          window.location.hash = hashUrl;
        });
      });
    }
  };

})(jQuery);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.detailsAria = {
    attach: function attach() {
      $('body').once('detailsAria').on('click.detailsAria', 'summary', function (event) {
        var $summary = $(event.currentTarget);
        var open = $(event.currentTarget.parentNode).attr('open') === 'open' ? 'false' : 'true';

        $summary.attr({
          'aria-expanded': open,
          'aria-pressed': open
        });
      });
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Modernizr, Drupal) {
  function CollapsibleDetails(node) {
    this.$node = $(node);
    this.$node.data('details', this);

    var anchor = location.hash && location.hash !== '#' ? ', ' + location.hash : '';
    if (this.$node.find('.error' + anchor).length) {
      this.$node.attr('open', true);
    }

    this.setupSummary();

    this.setupLegend();
  }

  $.extend(CollapsibleDetails, {
    instances: []
  });

  $.extend(CollapsibleDetails.prototype, {
    setupSummary: function setupSummary() {
      this.$summary = $('<span class="summary"></span>');
      this.$node.on('summaryUpdated', $.proxy(this.onSummaryUpdated, this)).trigger('summaryUpdated');
    },
    setupLegend: function setupLegend() {
      var $legend = this.$node.find('> summary');

      $('<span class="details-summary-prefix visually-hidden"></span>').append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show')).prependTo($legend).after(document.createTextNode(' '));

      $('<a class="details-title"></a>').attr('href', '#' + this.$node.attr('id')).prepend($legend.contents()).appendTo($legend);

      $legend.append(this.$summary).on('click', $.proxy(this.onLegendClick, this));
    },
    onLegendClick: function onLegendClick(e) {
      this.toggle();
      e.preventDefault();
    },
    onSummaryUpdated: function onSummaryUpdated() {
      var text = $.trim(this.$node.drupalGetSummary());
      this.$summary.html(text ? ' (' + text + ')' : '');
    },
    toggle: function toggle() {
      var _this = this;

      var isOpen = !!this.$node.attr('open');
      var $summaryPrefix = this.$node.find('> summary span.details-summary-prefix');
      if (isOpen) {
        $summaryPrefix.html(Drupal.t('Show'));
      } else {
        $summaryPrefix.html(Drupal.t('Hide'));
      }

      setTimeout(function () {
        _this.$node.attr('open', !isOpen);
      }, 0);
    }
  });

  Drupal.behaviors.collapse = {
    attach: function attach(context) {
      if (Modernizr.details) {
        return;
      }
      var $collapsibleDetails = $(context).find('details').once('collapse').addClass('collapse-processed');
      if ($collapsibleDetails.length) {
        for (var i = 0; i < $collapsibleDetails.length; i++) {
          CollapsibleDetails.instances.push(new CollapsibleDetails($collapsibleDetails[i]));
        }
      }
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('details').not('[open]').find('> summary').trigger('click');
  };

  $('body').on('formFragmentLinkClickOrHashChange.details', handleFragmentLinkClickOrHashChange);

  Drupal.CollapsibleDetails = CollapsibleDetails;
})(jQuery, Modernizr, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.fileValidateAutoAttach = {
    attach: function attach(context, settings) {
      var $context = $(context);
      var elements = void 0;

      function initFileValidation(selector) {
        $context.find(selector).once('fileValidate').on('change.fileValidate', { extensions: elements[selector] }, Drupal.file.validateExtension);
      }

      if (settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(initFileValidation);
      }
    },
    detach: function detach(context, settings, trigger) {
      var $context = $(context);
      var elements = void 0;

      function removeFileValidation(selector) {
        $context.find(selector).removeOnce('fileValidate').off('change.fileValidate', Drupal.file.validateExtension);
      }

      if (trigger === 'unload' && settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(removeFileValidation);
      }
    }
  };

  Drupal.behaviors.fileAutoUpload = {
    attach: function attach(context) {
      $(context).find('input[type="file"]').once('auto-file-upload').on('change.autoFileUpload', Drupal.file.triggerUploadButton);
    },
    detach: function detach(context, setting, trigger) {
      if (trigger === 'unload') {
        $(context).find('input[type="file"]').removeOnce('auto-file-upload').off('.autoFileUpload');
      }
    }
  };

  Drupal.behaviors.fileButtons = {
    attach: function attach(context) {
      var $context = $(context);
      $context.find('.js-form-submit').on('mousedown', Drupal.file.disableFields);
      $context.find('.js-form-managed-file .js-form-submit').on('mousedown', Drupal.file.progressBar);
    },
    detach: function detach(context) {
      var $context = $(context);
      $context.find('.js-form-submit').off('mousedown', Drupal.file.disableFields);
      $context.find('.js-form-managed-file .js-form-submit').off('mousedown', Drupal.file.progressBar);
    }
  };

  Drupal.behaviors.filePreviewLinks = {
    attach: function attach(context) {
      $(context).find('div.js-form-managed-file .file a').on('click', Drupal.file.openInNewWindow);
    },
    detach: function detach(context) {
      $(context).find('div.js-form-managed-file .file a').off('click', Drupal.file.openInNewWindow);
    }
  };

  Drupal.file = Drupal.file || {
    validateExtension: function validateExtension(event) {
      event.preventDefault();

      $('.file-upload-js-error').remove();

      var extensionPattern = event.data.extensions.replace(/,\s*/g, '|');
      if (extensionPattern.length > 1 && this.value.length > 0) {
        var acceptableMatch = new RegExp('\\.(' + extensionPattern + ')$', 'gi');
        if (!acceptableMatch.test(this.value)) {
          var error = Drupal.t('The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.', {
            '%filename': this.value.replace('C:\\fakepath\\', ''),
            '%extensions': extensionPattern.replace(/\|/g, ', ')
          });
          $(this).closest('div.js-form-managed-file').prepend('<div class="messages messages--error file-upload-js-error" aria-live="polite">' + error + '</div>');
          this.value = '';

          event.stopImmediatePropagation();
        }
      }
    },
    triggerUploadButton: function triggerUploadButton(event) {
      $(event.target).closest('.js-form-managed-file').find('.js-form-submit').trigger('mousedown');
    },
    disableFields: function disableFields(event) {
      var $clickedButton = $(this).findOnce('ajax');

      if (!$clickedButton.length) {
        return;
      }

      var $enabledFields = [];
      if ($clickedButton.closest('div.js-form-managed-file').length > 0) {
        $enabledFields = $clickedButton.closest('div.js-form-managed-file').find('input.js-form-file');
      }

      var $fieldsToTemporarilyDisable = $('div.js-form-managed-file input.js-form-file').not($enabledFields).not(':disabled');
      $fieldsToTemporarilyDisable.prop('disabled', true);
      setTimeout(function () {
        $fieldsToTemporarilyDisable.prop('disabled', false);
      }, 1000);
    },
    progressBar: function progressBar(event) {
      var $clickedButton = $(this);
      var $progressId = $clickedButton.closest('div.js-form-managed-file').find('input.file-progress');
      if ($progressId.length) {
        var originalName = $progressId.attr('name');

        $progressId.attr('name', originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);

        setTimeout(function () {
          $progressId.attr('name', originalName);
        }, 1000);
      }

      setTimeout(function () {
        $clickedButton.closest('div.js-form-managed-file').find('div.ajax-progress-bar').slideDown();
      }, 500);
    },
    openInNewWindow: function openInNewWindow(event) {
      event.preventDefault();
      $(this).attr('target', '_blank');
      window.open(this.href, 'filePreview', 'toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');
    }
  };
})(jQuery, Drupal);;
/**
 * @file
 * Attaches behavior for the Filter module.
 */

(function ($) {
  'use strict';

  function updateFilterHelpLink () {
    var $link = $(this).parents('.filter-wrapper').find('.filter-help > a');
    var originalLink = $link.data('originalLink');
    if (!originalLink) {
      originalLink = $link.attr('href');
      $link.data('originalLink', originalLink);
    }
    $link.attr('href', originalLink + '/' + $(this).find(':selected').val());
  }

  $(document).on('change', '.filter-wrapper select.filter-list', updateFilterHelpLink);

  /**
   * Displays the guidelines of the selected text format automatically.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches behavior for updating filter guidelines.
   */
  Drupal.behaviors.filterGuidelines = {
    attach: function (context) {
      $(context).find('.filter-wrapper select.filter-list').once('filter-list').each(updateFilterHelpLink);
    }
  };

})(jQuery);
;
