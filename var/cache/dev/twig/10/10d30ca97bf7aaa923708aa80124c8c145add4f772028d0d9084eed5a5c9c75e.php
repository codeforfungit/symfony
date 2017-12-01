<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_726d36879e71ebb7ed80a6dc5c575868b170d2283df22943c9ce5aec66d31353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726d36879e71ebb7ed80a6dc5c575868b170d2283df22943c9ce5aec66d31353->enter($__internal_726d36879e71ebb7ed80a6dc5c575868b170d2283df22943c9ce5aec66d31353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1390fdae6996b368501f01b11021293dd5731d3bc4a12a4eb1134aca9307942a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1390fdae6996b368501f01b11021293dd5731d3bc4a12a4eb1134aca9307942a->enter($__internal_1390fdae6996b368501f01b11021293dd5731d3bc4a12a4eb1134aca9307942a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726d36879e71ebb7ed80a6dc5c575868b170d2283df22943c9ce5aec66d31353->leave($__internal_726d36879e71ebb7ed80a6dc5c575868b170d2283df22943c9ce5aec66d31353_prof);

        
        $__internal_1390fdae6996b368501f01b11021293dd5731d3bc4a12a4eb1134aca9307942a->leave($__internal_1390fdae6996b368501f01b11021293dd5731d3bc4a12a4eb1134aca9307942a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad8fdd268911da19d35b827007cbbd14f196027fc0d245d93961e24030d6572b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8fdd268911da19d35b827007cbbd14f196027fc0d245d93961e24030d6572b->enter($__internal_ad8fdd268911da19d35b827007cbbd14f196027fc0d245d93961e24030d6572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4e793b311160e08535e859b4ad73417e1d30d3418b2ef53f0638bc059ab080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e793b311160e08535e859b4ad73417e1d30d3418b2ef53f0638bc059ab080c->enter($__internal_e4e793b311160e08535e859b4ad73417e1d30d3418b2ef53f0638bc059ab080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4e793b311160e08535e859b4ad73417e1d30d3418b2ef53f0638bc059ab080c->leave($__internal_e4e793b311160e08535e859b4ad73417e1d30d3418b2ef53f0638bc059ab080c_prof);

        
        $__internal_ad8fdd268911da19d35b827007cbbd14f196027fc0d245d93961e24030d6572b->leave($__internal_ad8fdd268911da19d35b827007cbbd14f196027fc0d245d93961e24030d6572b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad4786c69fecf7e3acadccb951394978ed563cb700fb14a2f4d28a96ea65c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4786c69fecf7e3acadccb951394978ed563cb700fb14a2f4d28a96ea65c471->enter($__internal_ad4786c69fecf7e3acadccb951394978ed563cb700fb14a2f4d28a96ea65c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94ac14d2eab7be661c647f2b8d110498434e00ded914e46a2c5653cd8d6742af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ac14d2eab7be661c647f2b8d110498434e00ded914e46a2c5653cd8d6742af->enter($__internal_94ac14d2eab7be661c647f2b8d110498434e00ded914e46a2c5653cd8d6742af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94ac14d2eab7be661c647f2b8d110498434e00ded914e46a2c5653cd8d6742af->leave($__internal_94ac14d2eab7be661c647f2b8d110498434e00ded914e46a2c5653cd8d6742af_prof);

        
        $__internal_ad4786c69fecf7e3acadccb951394978ed563cb700fb14a2f4d28a96ea65c471->leave($__internal_ad4786c69fecf7e3acadccb951394978ed563cb700fb14a2f4d28a96ea65c471_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cf4f324e694ac98c0e4e8dd99db7f830753e6828312b9f423b785e9b0a9a7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf4f324e694ac98c0e4e8dd99db7f830753e6828312b9f423b785e9b0a9a7a2->enter($__internal_6cf4f324e694ac98c0e4e8dd99db7f830753e6828312b9f423b785e9b0a9a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08bc6d4184befb2e08b563c4ca40fb874e953b3932f181c63b607bfd4ccb9205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bc6d4184befb2e08b563c4ca40fb874e953b3932f181c63b607bfd4ccb9205->enter($__internal_08bc6d4184befb2e08b563c4ca40fb874e953b3932f181c63b607bfd4ccb9205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08bc6d4184befb2e08b563c4ca40fb874e953b3932f181c63b607bfd4ccb9205->leave($__internal_08bc6d4184befb2e08b563c4ca40fb874e953b3932f181c63b607bfd4ccb9205_prof);

        
        $__internal_6cf4f324e694ac98c0e4e8dd99db7f830753e6828312b9f423b785e9b0a9a7a2->leave($__internal_6cf4f324e694ac98c0e4e8dd99db7f830753e6828312b9f423b785e9b0a9a7a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
