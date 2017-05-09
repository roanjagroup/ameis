<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_483138a8a78524b4e7fffb07b5f8950a28cb3e8545ebf15c89b9b5ae16ac7d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'page_body' => array($this, 'block_page_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 5
            echo "    <div id=\"plugin_main_top\" class=\"col-md-12\">
        ";
            // line 6
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
    </div>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 11
            echo "        <div id=\"plugin_menu_top\">
            ";
            // line 12
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
        </div>
    ";
        }
        // line 15
        echo "    
    ";
        // line 16
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 0)) {
            // line 17
            echo "\t<div class=\"col-md-3 menu-column\">    
        ";
            // line 18
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 18)->display($context);
            // line 19
            echo "    </div>
    ";
        }
        // line 21
        echo "
\t<div class=\"";
        // line 22
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            echo "col-md-12 ";
        } else {
            echo " col-md-9 ";
        }
        echo "\">
        ";
        // line 23
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 24
            echo "            <div id=\"plugin_content_top\">
                ";
            // line 25
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
            </div>
        ";
        }
        // line 28
        echo "        ";
        if ((isset($context["home_page_block"]) ? $context["home_page_block"] : null)) {
            // line 29
            echo "            <section id=\"homepage-home\">
                ";
            // line 30
            echo (isset($context["home_page_block"]) ? $context["home_page_block"] : null);
            echo "
            </section>
        ";
        }
        // line 33
        echo "        
        ";
        // line 34
        echo (isset($context["sniff_notification"]) ? $context["sniff_notification"] : null);
        echo "
        
        ";
        // line 36
        $this->displayBlock('page_body', $context, $blocks);
        // line 39
        echo "        
        ";
        // line 40
        if ((isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null)) {
            // line 41
            echo "            <section id=\"homepage-course\">
            ";
            // line 42
            echo (isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null);
            echo "
            </section>
        ";
        }
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        if ((isset($context["announcements_block"]) ? $context["announcements_block"] : null)) {
            // line 55
            echo "            <section id=\"homepage-announcements\">
            ";
            // line 56
            echo (isset($context["announcements_block"]) ? $context["announcements_block"] : null);
            echo "
            </section>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ((isset($context["course_category_block"]) ? $context["course_category_block"] : null)) {
            // line 61
            echo "            <section id=\"homepage-course-category\">
                ";
            // line 62
            echo (isset($context["course_category_block"]) ? $context["course_category_block"] : null);
            echo "
            </section>
        ";
        }
        // line 65
        echo "
\t";
        // line 66
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 66)->display($context);
        // line 67
        echo "
    ";
        // line 68
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 69
            echo "        <div id=\"plugin_content_bottom\">
            ";
            // line 70
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 73
        echo "</div>
";
        // line 74
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 75
            echo "    <div id=\"plugin_main_bottom\" class=\"col-md-12\">
        ";
            // line 76
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
    </div>
";
        }
    }

    // line 36
    public function block_page_body($context, array $blocks = array())
    {
        // line 37
        echo "            ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 37)->display($context);
        // line 38
        echo "        ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "        ";
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            // line 48
            echo "            <section id=\"page-content\" class=\"";
            echo (isset($context["course_history_page"]) ? $context["course_history_page"] : null);
            echo "\">
                ";
            // line 49
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
            </section>
        ";
        }
        // line 52
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 52,  219 => 49,  214 => 48,  211 => 47,  208 => 46,  204 => 38,  201 => 37,  198 => 36,  190 => 76,  187 => 75,  185 => 74,  182 => 73,  176 => 70,  173 => 69,  171 => 68,  168 => 67,  166 => 66,  163 => 65,  157 => 62,  154 => 61,  152 => 60,  149 => 59,  143 => 56,  140 => 55,  138 => 54,  135 => 53,  133 => 46,  130 => 45,  124 => 42,  121 => 41,  119 => 40,  116 => 39,  114 => 36,  109 => 34,  106 => 33,  100 => 30,  97 => 29,  94 => 28,  88 => 25,  85 => 24,  83 => 23,  75 => 22,  72 => 21,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_2_col.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\layout_2_col.tpl");
    }
}
