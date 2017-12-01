<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f105047b354efc8b735bf76a9266c0d36af85fb6d992e9fbd51ae88d75a78747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a25eb23391ce50d7fa06f9f2a05bab90f4a4b9cef7ab2f8e331013bcd0001f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25eb23391ce50d7fa06f9f2a05bab90f4a4b9cef7ab2f8e331013bcd0001f39->enter($__internal_a25eb23391ce50d7fa06f9f2a05bab90f4a4b9cef7ab2f8e331013bcd0001f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bed6f7e76babbdc4ed0c2f2b93ee744a7e3d05cd27cc14009d83e7ea573cd3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed6f7e76babbdc4ed0c2f2b93ee744a7e3d05cd27cc14009d83e7ea573cd3ba->enter($__internal_bed6f7e76babbdc4ed0c2f2b93ee744a7e3d05cd27cc14009d83e7ea573cd3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25eb23391ce50d7fa06f9f2a05bab90f4a4b9cef7ab2f8e331013bcd0001f39->leave($__internal_a25eb23391ce50d7fa06f9f2a05bab90f4a4b9cef7ab2f8e331013bcd0001f39_prof);

        
        $__internal_bed6f7e76babbdc4ed0c2f2b93ee744a7e3d05cd27cc14009d83e7ea573cd3ba->leave($__internal_bed6f7e76babbdc4ed0c2f2b93ee744a7e3d05cd27cc14009d83e7ea573cd3ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6707bdacbfbb131e9e599d9411e8a95aa39dbfe155c16fb9e62d001f2103833f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6707bdacbfbb131e9e599d9411e8a95aa39dbfe155c16fb9e62d001f2103833f->enter($__internal_6707bdacbfbb131e9e599d9411e8a95aa39dbfe155c16fb9e62d001f2103833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62f16d05b3276e47953ffe11a56ddb219ab02e6431324d801b591fe303f43d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f16d05b3276e47953ffe11a56ddb219ab02e6431324d801b591fe303f43d4b->enter($__internal_62f16d05b3276e47953ffe11a56ddb219ab02e6431324d801b591fe303f43d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_62f16d05b3276e47953ffe11a56ddb219ab02e6431324d801b591fe303f43d4b->leave($__internal_62f16d05b3276e47953ffe11a56ddb219ab02e6431324d801b591fe303f43d4b_prof);

        
        $__internal_6707bdacbfbb131e9e599d9411e8a95aa39dbfe155c16fb9e62d001f2103833f->leave($__internal_6707bdacbfbb131e9e599d9411e8a95aa39dbfe155c16fb9e62d001f2103833f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b29b1a04a9ca3082d125fbd18545a1a2f88902a5156e1b46303c80f721d91526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29b1a04a9ca3082d125fbd18545a1a2f88902a5156e1b46303c80f721d91526->enter($__internal_b29b1a04a9ca3082d125fbd18545a1a2f88902a5156e1b46303c80f721d91526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f23afb6ba9466fae08e6bd0d5c50bf31c8b24b5b0c390b0122f3fba4bfa239e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23afb6ba9466fae08e6bd0d5c50bf31c8b24b5b0c390b0122f3fba4bfa239e0->enter($__internal_f23afb6ba9466fae08e6bd0d5c50bf31c8b24b5b0c390b0122f3fba4bfa239e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f23afb6ba9466fae08e6bd0d5c50bf31c8b24b5b0c390b0122f3fba4bfa239e0->leave($__internal_f23afb6ba9466fae08e6bd0d5c50bf31c8b24b5b0c390b0122f3fba4bfa239e0_prof);

        
        $__internal_b29b1a04a9ca3082d125fbd18545a1a2f88902a5156e1b46303c80f721d91526->leave($__internal_b29b1a04a9ca3082d125fbd18545a1a2f88902a5156e1b46303c80f721d91526_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_67cd4e2d22617db01886cb9cc7e985ee0fc01dedc84bd0494e4449e570117033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cd4e2d22617db01886cb9cc7e985ee0fc01dedc84bd0494e4449e570117033->enter($__internal_67cd4e2d22617db01886cb9cc7e985ee0fc01dedc84bd0494e4449e570117033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df5367d0760cea23b77d27306d135549061acf5bed0bae4d39bd7822cad5079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5367d0760cea23b77d27306d135549061acf5bed0bae4d39bd7822cad5079d->enter($__internal_df5367d0760cea23b77d27306d135549061acf5bed0bae4d39bd7822cad5079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_df5367d0760cea23b77d27306d135549061acf5bed0bae4d39bd7822cad5079d->leave($__internal_df5367d0760cea23b77d27306d135549061acf5bed0bae4d39bd7822cad5079d_prof);

        
        $__internal_67cd4e2d22617db01886cb9cc7e985ee0fc01dedc84bd0494e4449e570117033->leave($__internal_67cd4e2d22617db01886cb9cc7e985ee0fc01dedc84bd0494e4449e570117033_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
