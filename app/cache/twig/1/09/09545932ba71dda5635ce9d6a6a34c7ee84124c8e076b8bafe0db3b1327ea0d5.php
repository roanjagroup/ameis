<?php

/* default/layout/page_header.tpl */
class __TwigTemplate_e7556f9fd8cf6ef94263a38df639157ae31886fd00757800a3a65295cebca2ae extends Twig_Template
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
        // line 1
        echo "
<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 3
        echo (isset($context["help_content"]) ? $context["help_content"] : null);
        echo "
    ";
        // line 4
        echo (isset($context["bug_notification"]) ? $context["bug_notification"] : null);
        echo "
</div>
<div class=\"extra-header\">";
        // line 6
        echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
        echo "</div>
<header id=\"header-section\">
  <section>
      <div class=\"container\">
      <div class=\"row\">
               <div class=\"col-md-12\">
                  <div class=\"col-sm-4\">
                      ";
        // line 13
        if ( !(null === (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null))) {
            // line 14
            echo "                      <div id=\"plugin_header_left\">
                          ";
            // line 15
            echo (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null);
            echo "
                      </div>
                      ";
        }
        // line 18
        echo "                  </div>
                  <div class=\"col-sm-4\">
                      ";
        // line 20
        if ( !(null === (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null))) {
            // line 21
            echo "                      <div id=\"plugin_header_center\">
                          ";
            // line 22
            echo (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null);
            echo "
                      </div>
                      ";
        }
        // line 25
        echo "                  </div>
                  <div class=\"col-sm-4\">
                      ";
        // line 27
        if ( !(null === (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null))) {
            // line 28
            echo "                      <div id=\"plugin_header_right\">
                          ";
            // line 29
            echo (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null);
            echo "
                      </div>
                      ";
        }
        // line 32
        echo "                      <div class=\"section-notifications\">
                          <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                              ";
        // line 34
        echo (isset($context["notification_menu"]) ? $context["notification_menu"] : null);
        echo "
                          </ul>
                      </div>
                      ";
        // line 37
        echo (isset($context["accessibility"]) ? $context["accessibility"] : null);
        echo "
                  </div>
              </div>
          </div>
      </div>
  </section>
</header>
";
        // line 44
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/course_navigation.tpl"), "default/layout/page_header.tpl", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  93 => 37,  87 => 34,  83 => 32,  77 => 29,  74 => 28,  72 => 27,  68 => 25,  62 => 22,  59 => 21,  57 => 20,  53 => 18,  47 => 15,  44 => 14,  42 => 13,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_header.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\page_header.tpl");
    }
}
