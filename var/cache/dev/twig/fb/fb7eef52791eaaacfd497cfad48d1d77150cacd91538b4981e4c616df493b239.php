<?php

/* default/home.html.twig */
class __TwigTemplate_c404f245afaf0d4379baf48c5a63c90d41b634baf631f177217e20dbab8b78c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ae73cd5c701604b4a2d98f695c8e90a184aa4db20aec47475f8ce9ce6164e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae73cd5c701604b4a2d98f695c8e90a184aa4db20aec47475f8ce9ce6164e16->enter($__internal_6ae73cd5c701604b4a2d98f695c8e90a184aa4db20aec47475f8ce9ce6164e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_88c9d17f50567d1577d2e259c02d94464512fed2fe655ca155b37e9fc9eea82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c9d17f50567d1577d2e259c02d94464512fed2fe655ca155b37e9fc9eea82c->enter($__internal_88c9d17f50567d1577d2e259c02d94464512fed2fe655ca155b37e9fc9eea82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae73cd5c701604b4a2d98f695c8e90a184aa4db20aec47475f8ce9ce6164e16->leave($__internal_6ae73cd5c701604b4a2d98f695c8e90a184aa4db20aec47475f8ce9ce6164e16_prof);

        
        $__internal_88c9d17f50567d1577d2e259c02d94464512fed2fe655ca155b37e9fc9eea82c->leave($__internal_88c9d17f50567d1577d2e259c02d94464512fed2fe655ca155b37e9fc9eea82c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f7c750818e32963bf30a3cfa090a6ef01523be40d0d9f74421b850218578e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f7c750818e32963bf30a3cfa090a6ef01523be40d0d9f74421b850218578e4->enter($__internal_d9f7c750818e32963bf30a3cfa090a6ef01523be40d0d9f74421b850218578e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8914c298929d98e87fd6910e626960c1dac760966ee43e1d37c6d3fae6eb0d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8914c298929d98e87fd6910e626960c1dac760966ee43e1d37c6d3fae6eb0d9c->enter($__internal_8914c298929d98e87fd6910e626960c1dac760966ee43e1d37c6d3fae6eb0d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

";
        
        $__internal_8914c298929d98e87fd6910e626960c1dac760966ee43e1d37c6d3fae6eb0d9c->leave($__internal_8914c298929d98e87fd6910e626960c1dac760966ee43e1d37c6d3fae6eb0d9c_prof);

        
        $__internal_d9f7c750818e32963bf30a3cfa090a6ef01523be40d0d9f74421b850218578e4->leave($__internal_d9f7c750818e32963bf30a3cfa090a6ef01523be40d0d9f74421b850218578e4_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
            </div>

{% endblock %}
", "default/home.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\app\\Resources\\views\\default\\home.html.twig");
    }
}
