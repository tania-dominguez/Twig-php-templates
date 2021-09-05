<?php

/* with_sidebar.twig */
class __TwigTemplate_d6fcc7d4a5fb6afa26be1f5273c5e917c655f9de8b9cb696917616ae8fc9b1ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "with_sidebar.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-4\">";
        // line 6
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "        </div>
        <div class=\"col-xs-8\">";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "        </div>
    </div>";
    }

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
        // line 7
        echo "                <h1>Hot news</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi at cupiditate doloribus ducimus facere neque quia? Accusantium fuga, odit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quaerat.</p>";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "with_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 7,  48 => 6,  43 => 15,  41 => 13,  38 => 11,  36 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-4\">
            {% block sidebar %}
                <h1>Hot news</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi at cupiditate doloribus ducimus facere neque quia? Accusantium fuga, odit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quaerat.</p>
            {% endblock sidebar %}
        </div>
        <div class=\"col-xs-8\">
            {% block main %}
            {% endblock main %}
        </div>
    </div>
{% endblock content %}", "with_sidebar.twig", "C:\\xampp\\htdocs\\Twig-sample\\templates\\with_sidebar.twig");
    }
}
