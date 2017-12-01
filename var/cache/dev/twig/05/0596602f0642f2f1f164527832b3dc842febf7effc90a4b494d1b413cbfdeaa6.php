<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd060cbe3b5a0850436734dc267ef670fbe1f07998c4674e2ea2cf92f46d0728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd060cbe3b5a0850436734dc267ef670fbe1f07998c4674e2ea2cf92f46d0728->enter($__internal_bd060cbe3b5a0850436734dc267ef670fbe1f07998c4674e2ea2cf92f46d0728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6876111fc6447951f83aa4595adec6524ec9df2fb160d99ecbe1b51e1ce7338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6876111fc6447951f83aa4595adec6524ec9df2fb160d99ecbe1b51e1ce7338->enter($__internal_c6876111fc6447951f83aa4595adec6524ec9df2fb160d99ecbe1b51e1ce7338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd060cbe3b5a0850436734dc267ef670fbe1f07998c4674e2ea2cf92f46d0728->leave($__internal_bd060cbe3b5a0850436734dc267ef670fbe1f07998c4674e2ea2cf92f46d0728_prof);

        
        $__internal_c6876111fc6447951f83aa4595adec6524ec9df2fb160d99ecbe1b51e1ce7338->leave($__internal_c6876111fc6447951f83aa4595adec6524ec9df2fb160d99ecbe1b51e1ce7338_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c4024b0047a0029fe21cf9f4b61788a2c2c2e85240fff61f8bebff854e28c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4024b0047a0029fe21cf9f4b61788a2c2c2e85240fff61f8bebff854e28c7f->enter($__internal_3c4024b0047a0029fe21cf9f4b61788a2c2c2e85240fff61f8bebff854e28c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_478ef6208c18e7886b3f22274fc8de0689d60949afaf4e74a9cf4d1d5640178d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478ef6208c18e7886b3f22274fc8de0689d60949afaf4e74a9cf4d1d5640178d->enter($__internal_478ef6208c18e7886b3f22274fc8de0689d60949afaf4e74a9cf4d1d5640178d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_478ef6208c18e7886b3f22274fc8de0689d60949afaf4e74a9cf4d1d5640178d->leave($__internal_478ef6208c18e7886b3f22274fc8de0689d60949afaf4e74a9cf4d1d5640178d_prof);

        
        $__internal_3c4024b0047a0029fe21cf9f4b61788a2c2c2e85240fff61f8bebff854e28c7f->leave($__internal_3c4024b0047a0029fe21cf9f4b61788a2c2c2e85240fff61f8bebff854e28c7f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03285ca9c6829947979a24a8b3ddb6caf208029a5991ac345a225dfe48f9b31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03285ca9c6829947979a24a8b3ddb6caf208029a5991ac345a225dfe48f9b31d->enter($__internal_03285ca9c6829947979a24a8b3ddb6caf208029a5991ac345a225dfe48f9b31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f30ee5e9bf04c08483d81ded79cea20ef173b245a9689458edb83f59920d9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f30ee5e9bf04c08483d81ded79cea20ef173b245a9689458edb83f59920d9a1->enter($__internal_1f30ee5e9bf04c08483d81ded79cea20ef173b245a9689458edb83f59920d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1f30ee5e9bf04c08483d81ded79cea20ef173b245a9689458edb83f59920d9a1->leave($__internal_1f30ee5e9bf04c08483d81ded79cea20ef173b245a9689458edb83f59920d9a1_prof);

        
        $__internal_03285ca9c6829947979a24a8b3ddb6caf208029a5991ac345a225dfe48f9b31d->leave($__internal_03285ca9c6829947979a24a8b3ddb6caf208029a5991ac345a225dfe48f9b31d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95e999cb2db7a662267a8627b1ee2018c813e3b108d3fd14003d082efe90102f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e999cb2db7a662267a8627b1ee2018c813e3b108d3fd14003d082efe90102f->enter($__internal_95e999cb2db7a662267a8627b1ee2018c813e3b108d3fd14003d082efe90102f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ff8945938a461feb29005dce347e6b0bbde2d40e5874c2d5037c45ab2db0386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff8945938a461feb29005dce347e6b0bbde2d40e5874c2d5037c45ab2db0386->enter($__internal_8ff8945938a461feb29005dce347e6b0bbde2d40e5874c2d5037c45ab2db0386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8ff8945938a461feb29005dce347e6b0bbde2d40e5874c2d5037c45ab2db0386->leave($__internal_8ff8945938a461feb29005dce347e6b0bbde2d40e5874c2d5037c45ab2db0386_prof);

        
        $__internal_95e999cb2db7a662267a8627b1ee2018c813e3b108d3fd14003d082efe90102f->leave($__internal_95e999cb2db7a662267a8627b1ee2018c813e3b108d3fd14003d082efe90102f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
