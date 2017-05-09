<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_25e7baa543f923f43fb74f0a34dc226656cc467fe9a31fe4729c75723b94abab extends Twig_Template
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
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 2
            echo "    </div>
    </div>
    ";
            // line 4
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_footer.tpl"), "default/layout/show_footer.tpl", 4)->display($context);
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/footer.js.tpl"), "default/layout/show_footer.tpl", 6)->display($context);
        }
        // line 8
        echo "    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  28 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_footer.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\show_footer.tpl");
    }
}
