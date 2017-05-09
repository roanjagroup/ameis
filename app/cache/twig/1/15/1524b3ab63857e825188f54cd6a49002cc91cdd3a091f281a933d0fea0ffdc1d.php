<?php

/* default/layout/menu_layout_3_col.tpl */
class __TwigTemplate_4471631de8a497fe45cb508e1f8633170fab22c1913ae65897c7c43040151925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar_social' => array($this, 'block_sidebar_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar_social', $context, $blocks);
    }

    public function block_sidebar_social($context, array $blocks = array())
    {
        echo " 
  ";
        // line 2
        echo (isset($context["login_block"]) ? $context["login_block"] : null);
        echo "
  ";
        // line 3
        echo (isset($context["account_block"]) ? $context["account_block"] : null);
        echo "
  ";
        // line 4
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "
  ";
        // line 5
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "
  ";
        // line 6
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "
  ";
        // line 7
        echo (isset($context["plugin_courses_right_block"]) ? $context["plugin_courses_right_block"] : null);
        echo "
  ";
        // line 8
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
  ";
        // line 9
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu_layout_3_col.tpl";
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu_layout_3_col.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\menu_layout_3_col.tpl");
    }
}
