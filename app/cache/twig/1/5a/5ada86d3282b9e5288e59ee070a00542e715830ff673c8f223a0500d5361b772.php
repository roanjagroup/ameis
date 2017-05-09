<?php

/* default//user_portal/classic_courses_without_category.tpl */
class __TwigTemplate_0dd9df7fd7266474acabe3603ecda552397934c4052e292293fab0598014c18f extends Twig_Template
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
        if ( !twig_test_empty((isset($context["courses"]) ? $context["courses"] : null))) {
            // line 2
            echo "<div class=\"grid-courses\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3 classic-courses\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                        ";
                // line 8
                if (($this->getAttribute($context["item"], "thumbnails", array()) != "")) {
                    // line 9
                    echo "                            <img class=\"img-responsive\" src=\"";
                    echo $this->getAttribute($context["item"], "thumbnails", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\"/>
                        ";
                } else {
                    // line 11
                    echo "                            ";
                    echo Template::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", array()));
                    echo "
                        ";
                }
                // line 13
                echo "                </div>
                <div class=\"description\">
                    ";
                // line 15
                if (($this->getAttribute($context["item"], "edit_actions", array()) != "")) {
                    // line 16
                    echo "                        <div class=\"pull-right\">
                            ";
                    // line 17
                    if (($this->getAttribute($context["item"], "document", array()) == "")) {
                        // line 18
                        echo "                                <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", array());
                        echo "\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </a>
                            ";
                    } else {
                        // line 22
                        echo "                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 23
                        echo $this->getAttribute($context["item"], "edit_actions", array());
                        echo "\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                    ";
                        // line 26
                        echo $this->getAttribute($context["item"], "document", array());
                        echo "
                                </div>
                            ";
                    }
                    // line 29
                    echo "                        </div>
                    ";
                }
                // line 31
                echo "                    <h4 class=\"course-items-title\">
                        ";
                // line 32
                if (($this->getAttribute($context["item"], "visibility", array()) == twig_constant("COURSE_VISIBILITY_CLOSED"))) {
                    // line 33
                    echo "                            ";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", array());
                    echo "
                        ";
                } else {
                    // line 35
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\">
                                ";
                    // line 36
                    echo $this->getAttribute($context["item"], "title", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", array());
                    echo "
                            </a>
                            ";
                    // line 38
                    echo $this->getAttribute($context["item"], "notifications", array());
                    echo "
                            ";
                    // line 39
                    if ($this->getAttribute($context["item"], "is_special_course", array())) {
                        // line 40
                        echo "                                ";
                        echo Template::get_image("klipper.png", 22, get_lang("CourseAutoRegister"));
                        echo "
                            ";
                    }
                    // line 42
                    echo "                        ";
                }
                // line 43
                echo "                    </h4>
                    <div class=\"course-items-session\">
                        <div class=\"list-teachers\">
                            ";
                // line 46
                echo Template::get_image("teacher.png", 16, get_lang("Professor"));
                echo "
                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 48
                    echo "                                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                    // line 49
                    echo "                                ";
                    if (((isset($context["counter"]) ? $context["counter"] : null) > 1)) {
                        echo " | ";
                    }
                    // line 50
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["teacher"], "url", array());
                    echo "\" class=\"ajax\"
                                   data-title=\"";
                    // line 51
                    echo $this->getAttribute($context["teacher"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", array());
                    echo "\">
                                    ";
                    // line 52
                    echo $this->getAttribute($context["teacher"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", array());
                    echo "
                                </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                        </div>
                    </div>
                </div>
            </div>            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_without_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  173 => 55,  162 => 52,  156 => 51,  151 => 50,  146 => 49,  143 => 48,  139 => 47,  135 => 46,  130 => 43,  127 => 42,  121 => 40,  119 => 39,  115 => 38,  108 => 36,  103 => 35,  95 => 33,  93 => 32,  90 => 31,  86 => 29,  80 => 26,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  58 => 16,  56 => 15,  52 => 13,  46 => 11,  36 => 9,  34 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default//user_portal/classic_courses_without_category.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\user_portal\\classic_courses_without_category.tpl");
    }
}
