<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_2324770316692cfce8a9c8dee1a48d7d8a157bc4f37156e5114c8ca359551ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body dir=\"";
        // line 12
        echo (isset($context["text_direction"]) ? $context["text_direction"] : null);
        echo "\" class=\"nav-md ";
        echo (isset($context["section_name"]) ? $context["section_name"] : null);
        echo " ";
        echo (isset($context["login_class"]) ? $context["login_class"] : null);
        echo "\">
<noscript>";
        // line 13
        echo get_lang("NoJavascript");
        echo "</noscript>
";
        // line 14
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 15
            echo "    <div class=\"container body\">
        <div class=\"main_container\">
         ";
            // line 17
            $this->displayBlock('menu', $context, $blocks);
            // line 19
            echo " 
        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <!-- top tiles -->
          <div class=\"row\">
            ";
            // line 24
            if (((isset($context["displayCookieUsageWarning"]) ? $context["displayCookieUsageWarning"] : null) == true)) {
                // line 25
                echo "            <!-- Display Cookies validation -->
            <div class=\"toolbar-cookie alert-warning\">
                <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                    <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                    <div class=\"cookieUsageValidation\">
                        ";
                // line 30
                echo get_lang("YouAcceptCookies");
                echo "
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                            (";
                // line 32
                echo get_lang("More");
                echo ")
                        </span>
                        <div style=\"display:none; margin:20px 0;\">
                            ";
                // line 35
                echo get_lang("HelpCookieUsageValidation");
                echo "
                        </div>
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                            (";
                // line 38
                echo get_lang("Accept");
                echo ")
                        </span>
                    </div>
                </form>
            </div>
            ";
            }
            // line 44
            echo "            ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_header.tpl"), "default/layout/show_header.tpl", 44)->display($context);
            // line 45
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 48
            echo "                ";
            echo (isset($context["flash_messages"]) ? $context["flash_messages"] : null);
            echo "
            ";
        }
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/head.tpl"), "default/layout/show_header.tpl", 9)->display($context);
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/menu.tpl"), "default/layout/show_header.tpl", 18)->display($context);
        // line 19
        echo "        ";
    }

    // line 45
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 46
        echo "                ";
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  142 => 45,  138 => 19,  135 => 18,  132 => 17,  127 => 9,  124 => 8,  116 => 48,  113 => 45,  110 => 44,  101 => 38,  95 => 35,  89 => 32,  84 => 30,  77 => 25,  75 => 24,  68 => 19,  66 => 17,  62 => 15,  60 => 14,  56 => 13,  48 => 12,  45 => 11,  43 => 8,  38 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_header.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\show_header.tpl");
    }
}
