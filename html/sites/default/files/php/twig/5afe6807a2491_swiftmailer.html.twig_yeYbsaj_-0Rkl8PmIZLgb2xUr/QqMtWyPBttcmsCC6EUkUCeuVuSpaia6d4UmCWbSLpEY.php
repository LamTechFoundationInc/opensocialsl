<?php

/* themes/t4ddiaspora/templates/swiftmailer.html.twig */
class __TwigTemplate_826acbc61beee1a53b3420625f595a391ca52323f144b0811da27747bc5d76f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("date" => 384);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 33
        echo "<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>Open Social</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; }
        em {
            font-style: normal;
            font-weight: bold;  }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%; }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .header {
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
        }

        .postheader {
            padding-bottom: 30px;
            text-align: center;
            font-size: 18px;
        }

        .main {
            background: #fff;
            border-radius: ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["border_radius"] ?? null), "html", null, true));
        echo "px;
            width: 100%;
            box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24); }

        .wrapper {
            box-sizing: border-box;
            padding: 50px; }

        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center; }

        .content-block {
            padding-top: 10px;
        }
        .content-block img {
            margin: 10px 0;
        }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px; }

        ul {
            padding-left: 1em;
        }

        a {
            color: ";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true));
        echo ";
            font-weight: bold;
            text-decoration: none; }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto; }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center; }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #784288;
            border-radius: 5px;
            box-sizing: border-box;
            color: #784288;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize; }

        .btn-primary table td {
            background-color: #784288; }

        .btn-primary a {
            background-color: #784288;
            border-color: #784288;
            color: #ffffff; }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0; }

        .first {
            margin-top: 0; }

        .align-center {
            text-align: center; }

        .align-right {
            text-align: right; }

        .align-left {
            text-align: left; }

        .clear {
            clear: both; }

        .mt0 {
            margin-top: 0; }

        .mb0 {
            margin-bottom: 0; }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }

        .powered-by a {
            text-decoration: none; }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }

    </style>
</head>
<body class=\"\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
    <tr>
        <td>&nbsp;</td>
        <td class=\"container\">
            <div class=\"content\">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class=\"preheader\"></span>

                <div class=\"header\">
                    <img height=\"42\" src=\"";
        // line 343
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "\" alt=\"Logo\" />
                </div>

                <div class=\"postheader\">
                    ";
        // line 347
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
        echo "
                </div>

                <table class=\"main\">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class=\"wrapper\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                <tr>
                                    <td>
                                        ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class=\"footer\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"content-block\">
                                <img height=\"42\" src=\"";
        // line 373
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "\" alt=\"Logo\" />
                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block\">
                                <strong class=\"brand\">Open Social</strong><br />
                                <span class=\"tagline\">\"Make your people bloom\"</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block powered-by\">
                                Copyright &copy; ";
        // line 384
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ".
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/t4ddiaspora/templates/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 384,  400 => 373,  382 => 358,  368 => 347,  361 => 343,  195 => 180,  126 => 114,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * The default template file for e-mails.
 *
 * Available variables:
 * - subject: The subject.
 * - body: The message content.
 * - message: The \$message array created and used in the mail building
 *   procedure. Its content varies between cases, but typically contains at
 *   least the following elements:
 *   - id: The message identifier.
 *   - module: The module that handles the building of the message.
 *   - key: The key of the message.
 *   - to: The recipient email address.
 *   - from: The email address of the sender.
 *   - langcode: The langcode to use to compose the e-mail.
 *   - params: The message parameters.
 *
 * This template may be overriden by module and/or mail key, using any of the
 * following template names:
 * - swiftmailer.html.twig: global, used by default.
 * - swiftmailer--mymodule.html.twig: only emails sent by the module \"mymodule\".
 * - swiftmailer--mymodule--test.html.twig: only emails by the module
 *   \"mymodule\" with key \"test\".
 *
 * @see template_preprocess()
 * @see template_preprocess_swiftmailer()
 *
 * @ingroup themeable
 */
#}
<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>Open Social</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; }
        em {
            font-style: normal;
            font-weight: bold;  }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%; }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .header {
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
        }

        .postheader {
            padding-bottom: 30px;
            text-align: center;
            font-size: 18px;
        }

        .main {
            background: #fff;
            border-radius: {{ border_radius }}px;
            width: 100%;
            box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24); }

        .wrapper {
            box-sizing: border-box;
            padding: 50px; }

        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center; }

        .content-block {
            padding-top: 10px;
        }
        .content-block img {
            margin: 10px 0;
        }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px; }

        ul {
            padding-left: 1em;
        }

        a {
            color: {{ primary }};
            font-weight: bold;
            text-decoration: none; }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto; }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center; }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #784288;
            border-radius: 5px;
            box-sizing: border-box;
            color: #784288;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize; }

        .btn-primary table td {
            background-color: #784288; }

        .btn-primary a {
            background-color: #784288;
            border-color: #784288;
            color: #ffffff; }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0; }

        .first {
            margin-top: 0; }

        .align-center {
            text-align: center; }

        .align-right {
            text-align: right; }

        .align-left {
            text-align: left; }

        .clear {
            clear: both; }

        .mt0 {
            margin-top: 0; }

        .mb0 {
            margin-bottom: 0; }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }

        .powered-by a {
            text-decoration: none; }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }

    </style>
</head>
<body class=\"\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
    <tr>
        <td>&nbsp;</td>
        <td class=\"container\">
            <div class=\"content\">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class=\"preheader\"></span>

                <div class=\"header\">
                    <img height=\"42\" src=\"{{ logo }}\" alt=\"Logo\" />
                </div>

                <div class=\"postheader\">
                    {{ heading }}
                </div>

                <table class=\"main\">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class=\"wrapper\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                <tr>
                                    <td>
                                        {{ body }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class=\"footer\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"content-block\">
                                <img height=\"42\" src=\"{{ logo }}\" alt=\"Logo\" />
                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block\">
                                <strong class=\"brand\">Open Social</strong><br />
                                <span class=\"tagline\">\"Make your people bloom\"</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block powered-by\">
                                Copyright &copy; {{ \"now\"|date(\"Y\") }}.
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
", "themes/t4ddiaspora/templates/swiftmailer.html.twig", "/Users/tamba.s.lamin/DEV/opensocial/html/themes/t4ddiaspora/templates/swiftmailer.html.twig");
    }
}
