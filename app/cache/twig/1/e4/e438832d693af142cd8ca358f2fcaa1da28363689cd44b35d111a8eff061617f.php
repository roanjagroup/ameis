<?php

/* follow_buttons/template.tpl */
class __TwigTemplate_b819a22343c27bdf74d78b2046326ac8f44c417ee088a0330ee97c84db0679b4 extends Twig_Template
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
        echo "<div>
<!-- AddThis Button BEGIN -->
";
        // line 3
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "message", array()))) {
            // line 4
            echo "    <h3>";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "message", array());
            echo "</h3>
";
        }
        // line 6
        echo "    
<div class=\"addthis_toolbox ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "plugin_info", array()), "icon_class", array());
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "plugin_info", array()), "position", array());
        echo " \">
    ";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "facebook", array()))) {
            // line 9
            echo "        <a class=\"addthis_button_facebook_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "facebook", array());
            echo "\"></a>
    ";
        }
        // line 11
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "twitter", array()))) {
            // line 12
            echo "        <a class=\"addthis_button_twitter_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "twitter", array());
            echo "\"></a>
    ";
        }
        // line 14
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "linkedin", array()))) {
            // line 15
            echo "        <a class=\"addthis_button_linkedin_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "linkedin", array());
            echo "\"></a>
    ";
        }
        // line 17
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "googleplus", array()))) {
            // line 18
            echo "        <a class=\"addthis_button_google_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "googleplus", array());
            echo "\"></a>
    ";
        }
        // line 20
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "youtube", array()))) {
            // line 21
            echo "        <a class=\"addthis_button_youtube_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "youtube", array());
            echo "\"></a>
    ";
        }
        // line 23
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "flickr", array()))) {
            // line 24
            echo "        <a class=\"addthis_button_flickr_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "flickr", array());
            echo "\"></a>
    ";
        }
        // line 26
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "vimeo", array()))) {
            // line 27
            echo "        <a class=\"addthis_button_vimeo_follow\" addthis:userid=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "vimeo", array());
            echo "\"></a>
    ";
        }
        // line 29
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "rss", array()))) {
            // line 30
            echo "        <a class=\"addthis_button_rss_follow\" addthis:url=\"";
            echo $this->getAttribute((isset($context["follow_buttons"]) ? $context["follow_buttons"] : null), "rss", array());
            echo "\"></a>
    ";
        }
        // line 32
        echo "</div>
<script type=\"text/javascript\" src=\"https://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f69d7995360186c\"></script>
<!-- AddThis Button END -->
</div>";
    }

    public function getTemplateName()
    {
        return "follow_buttons/template.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  105 => 30,  102 => 29,  96 => 27,  93 => 26,  87 => 24,  84 => 23,  78 => 21,  75 => 20,  69 => 18,  66 => 17,  60 => 15,  57 => 14,  51 => 12,  48 => 11,  42 => 9,  40 => 8,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "follow_buttons/template.tpl", "C:\\xampp\\htdocs\\ameis\\plugin\\follow_buttons\\template.tpl");
    }
}
