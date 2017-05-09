<?php

/* default/layout/topbar.tpl */
class __TwigTemplate_180a42b1ffc2bbbe537b4f70af9474c2db2f50485e8b90dc4735adcdcdb3c42e extends Twig_Template
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
        echo "<!-- Topbar -->
";
        // line 2
        if (((isset($context["show_toolbar"]) ? $context["show_toolbar"] : null) == 1)) {
            // line 3
            echo "
    <nav id=\"toolbar-admin\" class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#toolbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
            // line 13
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
            echo "\">
                    <img src=\"";
            // line 14
            echo Template::get_icon_path("icon-chamilo.png", 22);
            echo "\" title=\"";
            echo api_get_setting("siteName");
            echo "\"> 
                </a>
            </div>
            ";
            // line 17
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array())) {
                // line 18
                echo "                <div class=\"collapse navbar-collapse\" id=\"toolbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
                // line 20
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
                echo "user_portal.php\"> ";
                echo get_lang("MyCourses");
                echo "</a></li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 22
                echo get_lang("Tracking");
                echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                // line 24
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "mySpace/\">";
                echo get_lang("CoursesReporting");
                echo "</a></li>
                                <li><a href=\"";
                // line 25
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "mySpace/index.php?view=admin\">";
                echo get_lang("AdminReports");
                echo "</a></li>
                                <li><a href=\"";
                // line 26
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "tracking/exams.php\">";
                echo get_lang("ExamsReporting");
                echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                // line 28
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "dashboard/\">";
                echo get_lang("Dashboard");
                echo "</a></li>
                            </ul>
                        </li>
                        ";
                // line 31
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array()) == 1)) {
                    // line 32
                    echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 33
                    echo get_lang("Administration");
                    echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                    // line 35
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/\">";
                    echo get_lang("Home");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 36
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_list.php\">";
                    echo get_lang("UserList");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 37
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/course_list.php\">";
                    echo get_lang("CourseList");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 38
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "session/session_list.php\">";
                    echo get_lang("SessionList");
                    echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                    // line 40
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php\">";
                    echo get_lang("Settings");
                    echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                    // line 42
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php?category=Plugins\">";
                    echo get_lang("Plugins");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 43
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php?category=Regions\">";
                    echo get_lang("Regions");
                    echo "</a></li>
                            </ul>
                        </li>

                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 48
                    echo get_lang("Add");
                    echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                    // line 50
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_add.php\">";
                    echo get_lang("User");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 51
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/course_add.php\">";
                    echo get_lang("Course");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 52
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "session/session_add.php\">";
                    echo get_lang("Session");
                    echo "</a></li>
                            </ul>
                        </li>
                        ";
                }
                // line 56
                echo "                    </ul>

                    ";
                // line 58
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array()) == 1)) {
                    // line 59
                    echo "                    <form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_list.php\" method=\"get\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
                    // line 60
                    echo get_lang("SearchUsers");
                    echo "\" name=\"keyword\">
                    </form>
                    ";
                }
                // line 63
                echo "
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
                // line 65
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
                echo "index.php?logout=logout&uid=";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "user_id", array());
                echo "\">";
                echo get_lang("Logout");
                echo "</a></li>
                    </ul>
                </div> <!-- /nav collapse -->
            ";
            }
            // line 69
            echo "        </div> <!-- /container-->
    </nav><!-- /topbar -->

";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/topbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 69,  198 => 65,  194 => 63,  188 => 60,  183 => 59,  181 => 58,  177 => 56,  168 => 52,  162 => 51,  156 => 50,  151 => 48,  141 => 43,  135 => 42,  128 => 40,  121 => 38,  115 => 37,  109 => 36,  103 => 35,  98 => 33,  95 => 32,  93 => 31,  85 => 28,  78 => 26,  72 => 25,  66 => 24,  61 => 22,  54 => 20,  50 => 18,  48 => 17,  40 => 14,  36 => 13,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/topbar.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\topbar.tpl");
    }
}
