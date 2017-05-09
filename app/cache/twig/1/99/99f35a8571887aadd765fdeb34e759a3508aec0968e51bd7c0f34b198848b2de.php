<?php

/* default/layout/menu_layout_2_col.tpl */
class __TwigTemplate_e5ac88156aa6a6332ed5a666d4ffca145eb966538c15261cbf2f396d2003ddae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar_home' => array($this, 'block_sidebar_home'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar_home', $context, $blocks);
    }

    public function block_sidebar_home($context, array $blocks = array())
    {
        echo " 
    ";
        // line 2
        echo (isset($context["profile_block"]) ? $context["profile_block"] : null);
        echo "
\t";
        // line 3
        echo (isset($context["course_block"]) ? $context["course_block"] : null);
        echo "
\t";
        // line 4
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "
    ";
        // line 5
        echo (isset($context["skills_block"]) ? $context["skills_block"] : null);
        echo "
    ";
        // line 6
        echo (isset($context["certificates_search_block"]) ? $context["certificates_search_block"] : null);
        echo "
\t";
        // line 7
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "
\t";
        // line 8
        echo (isset($context["help_block"]) ? $context["help_block"] : null);
        echo "
\t";
        // line 9
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "
\t";
        // line 10
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
\t";
        // line 11
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu_layout_2_col.tpl";
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu_layout_2_col.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\menu_layout_2_col.tpl");
    }
}
