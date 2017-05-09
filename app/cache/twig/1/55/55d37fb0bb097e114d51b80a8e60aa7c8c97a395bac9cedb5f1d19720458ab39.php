<?php

/* add_facebook_login_button/template.tpl */
class __TwigTemplate_9b9e0d893e9ba30d99560763af6903a00ca8db3cd3c25a85a7e5a28c17bf95fc extends Twig_Template
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
        if ($this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "show_message", array())) {
            // line 2
            echo "<a href=\"";
            echo $this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "facebook_href_link", array());
            echo "\">
    <img class=\"img-responsive\" src=\"";
            // line 3
            echo $this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "facebook_button_url", array());
            echo "\" style=\"margin:0 auto; border-radius:0\"/>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "add_facebook_login_button/template.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add_facebook_login_button/template.tpl", "C:\\xampp\\htdocs\\ameis\\plugin\\add_facebook_login_button\\template.tpl");
    }
}
