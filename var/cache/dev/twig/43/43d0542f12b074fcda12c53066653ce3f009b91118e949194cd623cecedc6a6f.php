<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aa9939da3403f8cbf6049c3189e3c6e2058a8d61e8e0f89858363c5e6468cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa9939da3403f8cbf6049c3189e3c6e2058a8d61e8e0f89858363c5e6468cb8->enter($__internal_8aa9939da3403f8cbf6049c3189e3c6e2058a8d61e8e0f89858363c5e6468cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a433ad16e25b01853f5c54f1f500ea51a06ffc56861bbf58b7bf73f1311f3e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a433ad16e25b01853f5c54f1f500ea51a06ffc56861bbf58b7bf73f1311f3e58->enter($__internal_a433ad16e25b01853f5c54f1f500ea51a06ffc56861bbf58b7bf73f1311f3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8aa9939da3403f8cbf6049c3189e3c6e2058a8d61e8e0f89858363c5e6468cb8->leave($__internal_8aa9939da3403f8cbf6049c3189e3c6e2058a8d61e8e0f89858363c5e6468cb8_prof);

        
        $__internal_a433ad16e25b01853f5c54f1f500ea51a06ffc56861bbf58b7bf73f1311f3e58->leave($__internal_a433ad16e25b01853f5c54f1f500ea51a06ffc56861bbf58b7bf73f1311f3e58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bd9d903556df451baa32b804b55781bdddb0866448085e873c1892d5a00a856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd9d903556df451baa32b804b55781bdddb0866448085e873c1892d5a00a856->enter($__internal_8bd9d903556df451baa32b804b55781bdddb0866448085e873c1892d5a00a856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e99e6a387205bdbfcc5335fcf33d9592c2ef7445b7754b146b943be1b76d95f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99e6a387205bdbfcc5335fcf33d9592c2ef7445b7754b146b943be1b76d95f9->enter($__internal_e99e6a387205bdbfcc5335fcf33d9592c2ef7445b7754b146b943be1b76d95f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e99e6a387205bdbfcc5335fcf33d9592c2ef7445b7754b146b943be1b76d95f9->leave($__internal_e99e6a387205bdbfcc5335fcf33d9592c2ef7445b7754b146b943be1b76d95f9_prof);

        
        $__internal_8bd9d903556df451baa32b804b55781bdddb0866448085e873c1892d5a00a856->leave($__internal_8bd9d903556df451baa32b804b55781bdddb0866448085e873c1892d5a00a856_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_955804a92a2174f2b66a2f6263659b39a38f52ad488853510a192eb6b0646c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955804a92a2174f2b66a2f6263659b39a38f52ad488853510a192eb6b0646c30->enter($__internal_955804a92a2174f2b66a2f6263659b39a38f52ad488853510a192eb6b0646c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f0a9bc70c0e938b1134500bee9c26aba1977d5f89bd79e30195f126f335cffc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a9bc70c0e938b1134500bee9c26aba1977d5f89bd79e30195f126f335cffc6->enter($__internal_f0a9bc70c0e938b1134500bee9c26aba1977d5f89bd79e30195f126f335cffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0a9bc70c0e938b1134500bee9c26aba1977d5f89bd79e30195f126f335cffc6->leave($__internal_f0a9bc70c0e938b1134500bee9c26aba1977d5f89bd79e30195f126f335cffc6_prof);

        
        $__internal_955804a92a2174f2b66a2f6263659b39a38f52ad488853510a192eb6b0646c30->leave($__internal_955804a92a2174f2b66a2f6263659b39a38f52ad488853510a192eb6b0646c30_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62877e5e637c764aada47e1f72b94e00a2927375f6bf8d296b1c6aebbcfef329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62877e5e637c764aada47e1f72b94e00a2927375f6bf8d296b1c6aebbcfef329->enter($__internal_62877e5e637c764aada47e1f72b94e00a2927375f6bf8d296b1c6aebbcfef329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d49638813a35b7293b383d6b155710a26e16c13885dc7730585939753f3873b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49638813a35b7293b383d6b155710a26e16c13885dc7730585939753f3873b1->enter($__internal_d49638813a35b7293b383d6b155710a26e16c13885dc7730585939753f3873b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d49638813a35b7293b383d6b155710a26e16c13885dc7730585939753f3873b1->leave($__internal_d49638813a35b7293b383d6b155710a26e16c13885dc7730585939753f3873b1_prof);

        
        $__internal_62877e5e637c764aada47e1f72b94e00a2927375f6bf8d296b1c6aebbcfef329->leave($__internal_62877e5e637c764aada47e1f72b94e00a2927375f6bf8d296b1c6aebbcfef329_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cd0717bd7a385ba176fb354e66afdf57728e54200e721a7c212461b3702fc10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd0717bd7a385ba176fb354e66afdf57728e54200e721a7c212461b3702fc10->enter($__internal_6cd0717bd7a385ba176fb354e66afdf57728e54200e721a7c212461b3702fc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56948bc0d1c19ae0265d3899b894513c8f2781992d8ff5d6bf180c81a3dfee08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56948bc0d1c19ae0265d3899b894513c8f2781992d8ff5d6bf180c81a3dfee08->enter($__internal_56948bc0d1c19ae0265d3899b894513c8f2781992d8ff5d6bf180c81a3dfee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56948bc0d1c19ae0265d3899b894513c8f2781992d8ff5d6bf180c81a3dfee08->leave($__internal_56948bc0d1c19ae0265d3899b894513c8f2781992d8ff5d6bf180c81a3dfee08_prof);

        
        $__internal_6cd0717bd7a385ba176fb354e66afdf57728e54200e721a7c212461b3702fc10->leave($__internal_6cd0717bd7a385ba176fb354e66afdf57728e54200e721a7c212461b3702fc10_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\app\\Resources\\views\\base.html.twig");
    }
}
