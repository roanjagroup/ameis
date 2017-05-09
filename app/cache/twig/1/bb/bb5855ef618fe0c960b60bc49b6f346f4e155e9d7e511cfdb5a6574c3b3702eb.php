<?php

/* default/layout/page.tpl */
class __TwigTemplate_07d6bf5ed93a289ba4859084b295ecf0eeda9e008ec5cc03d30543ce15817486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
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
    <div class=\"container body\">
        <div class=\"main_container\">
        ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo " 

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <!-- top tiles -->
          <div class=\"row\">
            ";
        // line 24
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 25
            echo "                ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_header.tpl"), "default/layout/page.tpl", 25)->display($context);
            // line 26
            echo "            ";
        }
        echo " 


            ";
        // line 29
        if (((isset($context["displayCookieUsageWarning"]) ? $context["displayCookieUsageWarning"] : null) == true)) {
            // line 30
            echo "            <!-- Display Cookies validation -->
            <div class=\"toolbar-cookie alert-warning\">
                <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                    <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                    <div class=\"cookieUsageValidation\">
                        ";
            // line 35
            echo get_lang("YouAcceptCookies");
            echo "
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                            (";
            // line 37
            echo get_lang("More");
            echo ")
                        </span>
                        <div style=\"display:none; margin:20px 0;\">
                            ";
            // line 40
            echo get_lang("HelpCookieUsageValidation");
            echo "
                        </div>
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                            (";
            // line 43
            echo get_lang("Accept");
            echo ")
                        </span>
                    </div>
                </form>
            </div>
            ";
        }
        // line 49
        echo "
     
            ";
        // line 51
        if ( !(null === (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null))) {
            // line 52
            echo "                <div class=\"nav-tools\">
                    ";
            // line 53
            echo (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null);
            echo "
                </div>
            ";
        }
        // line 56
        echo "    
                    ";
        // line 57
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 60
        echo "    
                    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                </div>
            </div>
    
            ";
        // line 67
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 68
            echo "            ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_footer.tpl"), "default/layout/page.tpl", 68)->display($context);
            // line 69
            echo "            ";
        }
        // line 70
        echo "      </div>
    </div>
  </body>
</html>";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/head.tpl"), "default/layout/page.tpl", 9)->display($context);
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/menu.tpl"), "default/layout/page.tpl", 17)->display($context);
        // line 18
        echo "        ";
    }

    // line 57
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 58
        echo "                        ";
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
                    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "                        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "default/layout/page.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 62,  192 => 61,  185 => 58,  182 => 57,  178 => 18,  175 => 17,  172 => 16,  168 => 9,  165 => 8,  158 => 70,  155 => 69,  152 => 68,  150 => 67,  145 => 64,  143 => 61,  140 => 60,  138 => 57,  135 => 56,  129 => 53,  126 => 52,  124 => 51,  120 => 49,  111 => 43,  105 => 40,  99 => 37,  94 => 35,  87 => 30,  85 => 29,  78 => 26,  75 => 25,  73 => 24,  65 => 18,  63 => 16,  57 => 13,  49 => 12,  46 => 11,  44 => 8,  39 => 6,  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\page.tpl");
    }
}
