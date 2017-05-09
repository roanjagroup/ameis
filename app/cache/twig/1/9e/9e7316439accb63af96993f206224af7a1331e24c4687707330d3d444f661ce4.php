<?php

/* default/layout/menu.tpl */
class __TwigTemplate_1c65ff8bf975ae5040526a9b3db3d19bd7da9a2e15cd7382cf136ef54fb32e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'sidebar_home' => array($this, 'block_sidebar_home'),
            'sidebar_social' => array($this, 'block_sidebar_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topbar', $context, $blocks);
        // line 4
        echo "<div class=\"col-md-3 left_col\">
  <div class=\"left_col scroll-view\">
    <div class=\"navbar nav_title\" style=\"border: 0;\"> ";
        // line 6
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo " <a href=\"";
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
        echo "\" class=\"site_title\"> <span>";
        echo (isset($context["portal_name"]) ? $context["portal_name"] : null);
        echo "</span></a></div>
    <div class=\"clearfix\"></div>
    
    <!-- menu profile quick info --> 
    ";
        // line 10
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 11
            echo "    <div class=\"profile clearfix\">
      <div class=\"profile_pic\"> <img src=\"";
            // line 12
            echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_medium", array());
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
            echo "\" class=\"img-circle profile_img\"> </div>
      <div class=\"profile_info\"> <span>Welcome,</span>
        <h2><a href=\"";
            // line 14
            echo (isset($context["profile_url"]) ? $context["profile_url"] : null);
            echo "\">";
            echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
            echo "</a></h2>
      </div>
    </div>
    ";
        }
        // line 17
        echo " 
    <!-- /menu profile quick info --> 
    
    <br />
    ";
        // line 21
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 22
            echo "        <div id=\"plugin_menu_top\">
            ";
            // line 23
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
        </div>
    ";
        }
        // line 25
        echo "  
    <!-- sidebar menu -->
    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
      <div class=\"menu_section\">
        <h3>General</h3>
        <ul class=\"nav side-menu\">
       \t\t<li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                <ul class=\"nav child_menu\">
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                  <li class=\"";
            echo $this->getAttribute($context["item"], "current", array());
            echo "\"><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
                </ul> 
        \t</li>
            ";
        // line 38
        $this->displayBlock('sidebar_home', $context, $blocks);
        // line 40
        echo "  
            ";
        // line 41
        $this->displayBlock('sidebar_social', $context, $blocks);
        // line 43
        echo "  
             ";
        // line 44
        echo (isset($context["social_menu_block"]) ? $context["social_menu_block"] : null);
        echo " 
        </ul>             
      </div>
    </div>
    <!-- /sidebar menu -->     

    ";
        // line 50
        if ((isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null)) {
            // line 51
            echo "    <div id=\"plugin_menu_bottom\">
        ";
            // line 52
            echo (isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null);
            echo "
    </div>
    ";
        }
        // line 54
        echo "  
    <!-- /menu footer buttons -->
    <div class=\"sidebar-footer hidden-small\"> 
      <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\"> 
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> 
      </a> 
      <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\"> 
        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span> 
      </a> 
      <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\"> 
        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span> 
      </a> 
      <a id=\"logout_button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 66
        echo get_lang("Logout");
        echo "\" href=\"";
        echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
        echo "\"> 
        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span> 
      </a> 
    </div>
    <!-- /menu footer buttons --> 
  </div>
</div>
<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
          <div class=\"nav toggle\">
            <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
          </div>
        ";
        // line 80
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            echo "                
            <ul class=\"nav navbar-nav navbar-right\">
                ";
            // line 82
            if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "status", array()) != 6)) {
                // line 83
                echo "                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
                // line 85
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "\">";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li class=\"user-header\">
                            <div class=\"text-center\">
                            <img class=\"img-circle\" src=\"";
                // line 91
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_medium", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "\" />
                            <p class=\"name\"><a href=\"";
                // line 92
                echo (isset($context["profile_url"]) ? $context["profile_url"] : null);
                echo "\">";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "</a></p>
                            <p><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
                // line 93
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "email", array());
                echo "</p>
                            </div>
                        </li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"user-body\">
                            <a title=\"";
                // line 98
                echo get_lang("Inbox");
                echo "\" href=\"";
                echo (isset($context["message_url"]) ? $context["message_url"] : null);
                echo "\">
                                <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                // line 99
                echo get_lang("Inbox");
                echo "
                            </a>
                            ";
                // line 101
                if ((isset($context["certificate_url"]) ? $context["certificate_url"] : null)) {
                    // line 102
                    echo "                            <a title=\"";
                    echo get_lang("MyCertificates");
                    echo "\" href=\"";
                    echo (isset($context["certificate_url"]) ? $context["certificate_url"] : null);
                    echo "\">
                                <em class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></em> ";
                    // line 103
                    echo get_lang("MyCertificates");
                    echo "
                            </a>
                            ";
                }
                // line 106
                echo "
                            <a id=\"logout_button\" title=\"";
                // line 107
                echo get_lang("Logout");
                echo "\" href=\"";
                echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
                echo "\" >
                                <em class=\"fa fa-sign-out\"></em> ";
                // line 108
                echo get_lang("Logout");
                echo "
                            </a>
                        </li>
                    </ul>
                </li>
                ";
            }
            // line 113
            echo "   
                ";
            // line 114
            if ( !(null === (isset($context["user_notifications"]) ? $context["user_notifications"] : null))) {
                // line 115
                echo "                <li role=\"presentation\">
                    <a class=\"dropdown-toggle info-number\" href=\"";
                // line 116
                echo (isset($context["message_url"]) ? $context["message_url"] : null);
                echo "\">
                    <i class=\"fa fa-envelope-o\"></i>
                    ";
                // line 118
                echo (isset($context["user_notifications"]) ? $context["user_notifications"] : null);
                echo "
                    </a>
                </li>
                ";
            }
            // line 122
            echo "            </ul> 
            ";
        }
        // line 123
        echo "   
        </nav>
    </div>
</div>
<!-- /top navigation -->
        ";
    }

    // line 1
    public function block_topbar($context, array $blocks = array())
    {
        // line 2
        echo "   ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/topbar.tpl"), "default/layout/menu.tpl", 2)->display($context);
    }

    // line 38
    public function block_sidebar_home($context, array $blocks = array())
    {
        // line 39
        echo "                ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/menu_layout_2_col.tpl"), "default/layout/menu.tpl", 39)->display($context);
        // line 40
        echo "            ";
    }

    // line 41
    public function block_sidebar_social($context, array $blocks = array())
    {
        // line 42
        echo "                ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/menu_layout_3_col.tpl"), "default/layout/menu.tpl", 42)->display($context);
        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 43,  314 => 42,  311 => 41,  307 => 40,  304 => 39,  301 => 38,  296 => 2,  293 => 1,  284 => 123,  280 => 122,  273 => 118,  268 => 116,  265 => 115,  263 => 114,  260 => 113,  251 => 108,  245 => 107,  242 => 106,  236 => 103,  229 => 102,  227 => 101,  222 => 99,  216 => 98,  208 => 93,  202 => 92,  196 => 91,  183 => 85,  179 => 83,  177 => 82,  172 => 80,  153 => 66,  139 => 54,  133 => 52,  130 => 51,  128 => 50,  119 => 44,  116 => 43,  114 => 41,  111 => 40,  109 => 38,  104 => 35,  91 => 34,  87 => 33,  77 => 25,  71 => 23,  68 => 22,  66 => 21,  60 => 17,  51 => 14,  44 => 12,  41 => 11,  39 => 10,  28 => 6,  24 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\menu.tpl");
    }
}
