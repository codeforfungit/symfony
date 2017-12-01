<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6c748e5ee15ea5d0cc1772739fe70977f891045a8e1d7e0f207451f1b11be99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c748e5ee15ea5d0cc1772739fe70977f891045a8e1d7e0f207451f1b11be99->enter($__internal_f6c748e5ee15ea5d0cc1772739fe70977f891045a8e1d7e0f207451f1b11be99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7c1a5cbaf554e0e531c1c21a08604ad1207ee48252d32bc8dec0c901d1b6cf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1a5cbaf554e0e531c1c21a08604ad1207ee48252d32bc8dec0c901d1b6cf89->enter($__internal_7c1a5cbaf554e0e531c1c21a08604ad1207ee48252d32bc8dec0c901d1b6cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f6c748e5ee15ea5d0cc1772739fe70977f891045a8e1d7e0f207451f1b11be99->leave($__internal_f6c748e5ee15ea5d0cc1772739fe70977f891045a8e1d7e0f207451f1b11be99_prof);

        
        $__internal_7c1a5cbaf554e0e531c1c21a08604ad1207ee48252d32bc8dec0c901d1b6cf89->leave($__internal_7c1a5cbaf554e0e531c1c21a08604ad1207ee48252d32bc8dec0c901d1b6cf89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ae8154d8f7b94ba50ac54e39b63e0306cf0b9e2148130f2f2f5326ddf7a9d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae8154d8f7b94ba50ac54e39b63e0306cf0b9e2148130f2f2f5326ddf7a9d3a->enter($__internal_2ae8154d8f7b94ba50ac54e39b63e0306cf0b9e2148130f2f2f5326ddf7a9d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9765b1ef0609b4fa5d31b09bf05cf05d2a8767942f601a09a927aeb7a9253af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9765b1ef0609b4fa5d31b09bf05cf05d2a8767942f601a09a927aeb7a9253af0->enter($__internal_9765b1ef0609b4fa5d31b09bf05cf05d2a8767942f601a09a927aeb7a9253af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9765b1ef0609b4fa5d31b09bf05cf05d2a8767942f601a09a927aeb7a9253af0->leave($__internal_9765b1ef0609b4fa5d31b09bf05cf05d2a8767942f601a09a927aeb7a9253af0_prof);

        
        $__internal_2ae8154d8f7b94ba50ac54e39b63e0306cf0b9e2148130f2f2f5326ddf7a9d3a->leave($__internal_2ae8154d8f7b94ba50ac54e39b63e0306cf0b9e2148130f2f2f5326ddf7a9d3a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_44de7e2050d68f3e18138c91fb27e0464569aa53d7e0fe08f7601ee9c6de8fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44de7e2050d68f3e18138c91fb27e0464569aa53d7e0fe08f7601ee9c6de8fec->enter($__internal_44de7e2050d68f3e18138c91fb27e0464569aa53d7e0fe08f7601ee9c6de8fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57e5a79359edac8e7919b3bcf705bfbb541aa8775f15fa6fc8fc4778c853c628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e5a79359edac8e7919b3bcf705bfbb541aa8775f15fa6fc8fc4778c853c628->enter($__internal_57e5a79359edac8e7919b3bcf705bfbb541aa8775f15fa6fc8fc4778c853c628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_57e5a79359edac8e7919b3bcf705bfbb541aa8775f15fa6fc8fc4778c853c628->leave($__internal_57e5a79359edac8e7919b3bcf705bfbb541aa8775f15fa6fc8fc4778c853c628_prof);

        
        $__internal_44de7e2050d68f3e18138c91fb27e0464569aa53d7e0fe08f7601ee9c6de8fec->leave($__internal_44de7e2050d68f3e18138c91fb27e0464569aa53d7e0fe08f7601ee9c6de8fec_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e0c142c79bb33476938be0db2ac775a747eef109a0192a3cf3de15cfd7c699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e0c142c79bb33476938be0db2ac775a747eef109a0192a3cf3de15cfd7c699->enter($__internal_f9e0c142c79bb33476938be0db2ac775a747eef109a0192a3cf3de15cfd7c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_901efb148f5c390e663a100d06febfc7b9d0d461e685083710d1980d417a8841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901efb148f5c390e663a100d06febfc7b9d0d461e685083710d1980d417a8841->enter($__internal_901efb148f5c390e663a100d06febfc7b9d0d461e685083710d1980d417a8841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_901efb148f5c390e663a100d06febfc7b9d0d461e685083710d1980d417a8841->leave($__internal_901efb148f5c390e663a100d06febfc7b9d0d461e685083710d1980d417a8841_prof);

        
        $__internal_f9e0c142c79bb33476938be0db2ac775a747eef109a0192a3cf3de15cfd7c699->leave($__internal_f9e0c142c79bb33476938be0db2ac775a747eef109a0192a3cf3de15cfd7c699_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "G:\\XAMPP\\htdocs\\sympfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
