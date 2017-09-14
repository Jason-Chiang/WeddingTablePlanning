<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_426fa12300bf005c3ed3e01d94aa4cdef6bf4c58cf7681086235f174cf6ba989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426fa12300bf005c3ed3e01d94aa4cdef6bf4c58cf7681086235f174cf6ba989->enter($__internal_426fa12300bf005c3ed3e01d94aa4cdef6bf4c58cf7681086235f174cf6ba989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5259a93c261bbced8bd977f8ca8e7489c8e33b0e8a7e3761c27ee87048f2ff81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5259a93c261bbced8bd977f8ca8e7489c8e33b0e8a7e3761c27ee87048f2ff81->enter($__internal_5259a93c261bbced8bd977f8ca8e7489c8e33b0e8a7e3761c27ee87048f2ff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426fa12300bf005c3ed3e01d94aa4cdef6bf4c58cf7681086235f174cf6ba989->leave($__internal_426fa12300bf005c3ed3e01d94aa4cdef6bf4c58cf7681086235f174cf6ba989_prof);

        
        $__internal_5259a93c261bbced8bd977f8ca8e7489c8e33b0e8a7e3761c27ee87048f2ff81->leave($__internal_5259a93c261bbced8bd977f8ca8e7489c8e33b0e8a7e3761c27ee87048f2ff81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e467bc62e079f7064f0b3b279f6de30d2eefa5f731f2c3d206493ddf4e3be527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e467bc62e079f7064f0b3b279f6de30d2eefa5f731f2c3d206493ddf4e3be527->enter($__internal_e467bc62e079f7064f0b3b279f6de30d2eefa5f731f2c3d206493ddf4e3be527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c9f986f45c446562f67ba450b91a3865b8e61d752af5031937dd204dcac762b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9f986f45c446562f67ba450b91a3865b8e61d752af5031937dd204dcac762b->enter($__internal_0c9f986f45c446562f67ba450b91a3865b8e61d752af5031937dd204dcac762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0c9f986f45c446562f67ba450b91a3865b8e61d752af5031937dd204dcac762b->leave($__internal_0c9f986f45c446562f67ba450b91a3865b8e61d752af5031937dd204dcac762b_prof);

        
        $__internal_e467bc62e079f7064f0b3b279f6de30d2eefa5f731f2c3d206493ddf4e3be527->leave($__internal_e467bc62e079f7064f0b3b279f6de30d2eefa5f731f2c3d206493ddf4e3be527_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4421afea99707ed4cde7490ee1526620ae6b3546ea955d6a061c3b49f547be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4421afea99707ed4cde7490ee1526620ae6b3546ea955d6a061c3b49f547be9->enter($__internal_e4421afea99707ed4cde7490ee1526620ae6b3546ea955d6a061c3b49f547be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47290006b949f8e7dfff251b8f815cd5e4917723acc3626e3adedcb654ab9bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47290006b949f8e7dfff251b8f815cd5e4917723acc3626e3adedcb654ab9bc6->enter($__internal_47290006b949f8e7dfff251b8f815cd5e4917723acc3626e3adedcb654ab9bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_47290006b949f8e7dfff251b8f815cd5e4917723acc3626e3adedcb654ab9bc6->leave($__internal_47290006b949f8e7dfff251b8f815cd5e4917723acc3626e3adedcb654ab9bc6_prof);

        
        $__internal_e4421afea99707ed4cde7490ee1526620ae6b3546ea955d6a061c3b49f547be9->leave($__internal_e4421afea99707ed4cde7490ee1526620ae6b3546ea955d6a061c3b49f547be9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abca316b45e284a19e22c8f86c4e6ec27b243faea79c48033e46b5f63921c54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abca316b45e284a19e22c8f86c4e6ec27b243faea79c48033e46b5f63921c54a->enter($__internal_abca316b45e284a19e22c8f86c4e6ec27b243faea79c48033e46b5f63921c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c5d24de40e2b172b6643d8986fb0605a780911a18770f3b0e4087d9f6264b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5d24de40e2b172b6643d8986fb0605a780911a18770f3b0e4087d9f6264b6e->enter($__internal_3c5d24de40e2b172b6643d8986fb0605a780911a18770f3b0e4087d9f6264b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3c5d24de40e2b172b6643d8986fb0605a780911a18770f3b0e4087d9f6264b6e->leave($__internal_3c5d24de40e2b172b6643d8986fb0605a780911a18770f3b0e4087d9f6264b6e_prof);

        
        $__internal_abca316b45e284a19e22c8f86c4e6ec27b243faea79c48033e46b5f63921c54a->leave($__internal_abca316b45e284a19e22c8f86c4e6ec27b243faea79c48033e46b5f63921c54a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/steve/WeddingTablePlanning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
