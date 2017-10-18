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
        $__internal_046a60a2d79e707986f014ff2ec7fcbd4963aedc2a2d9d7a09cb30ad694a1e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046a60a2d79e707986f014ff2ec7fcbd4963aedc2a2d9d7a09cb30ad694a1e6d->enter($__internal_046a60a2d79e707986f014ff2ec7fcbd4963aedc2a2d9d7a09cb30ad694a1e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c2d6db37fa9ea77b7b7427d4e560317c9b93e6ba63c7787ed5e75446674c57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2d6db37fa9ea77b7b7427d4e560317c9b93e6ba63c7787ed5e75446674c57b->enter($__internal_1c2d6db37fa9ea77b7b7427d4e560317c9b93e6ba63c7787ed5e75446674c57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046a60a2d79e707986f014ff2ec7fcbd4963aedc2a2d9d7a09cb30ad694a1e6d->leave($__internal_046a60a2d79e707986f014ff2ec7fcbd4963aedc2a2d9d7a09cb30ad694a1e6d_prof);

        
        $__internal_1c2d6db37fa9ea77b7b7427d4e560317c9b93e6ba63c7787ed5e75446674c57b->leave($__internal_1c2d6db37fa9ea77b7b7427d4e560317c9b93e6ba63c7787ed5e75446674c57b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b90b73609b46b05d7b8a48984ca7ce38a7b00cf44efa28c3d1ac424bb1b19ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b90b73609b46b05d7b8a48984ca7ce38a7b00cf44efa28c3d1ac424bb1b19ac->enter($__internal_9b90b73609b46b05d7b8a48984ca7ce38a7b00cf44efa28c3d1ac424bb1b19ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4df647a8e2386bf1f41bdf85b9328adacf77fbee7b400f8a58a646227eeabb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df647a8e2386bf1f41bdf85b9328adacf77fbee7b400f8a58a646227eeabb55->enter($__internal_4df647a8e2386bf1f41bdf85b9328adacf77fbee7b400f8a58a646227eeabb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4df647a8e2386bf1f41bdf85b9328adacf77fbee7b400f8a58a646227eeabb55->leave($__internal_4df647a8e2386bf1f41bdf85b9328adacf77fbee7b400f8a58a646227eeabb55_prof);

        
        $__internal_9b90b73609b46b05d7b8a48984ca7ce38a7b00cf44efa28c3d1ac424bb1b19ac->leave($__internal_9b90b73609b46b05d7b8a48984ca7ce38a7b00cf44efa28c3d1ac424bb1b19ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fff68f7d818610a1b9bc95682ce43060852fc40c15e69cc8be45425bee2cefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fff68f7d818610a1b9bc95682ce43060852fc40c15e69cc8be45425bee2cefd->enter($__internal_9fff68f7d818610a1b9bc95682ce43060852fc40c15e69cc8be45425bee2cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30a70804b1a5eb59a2f10e24a20ae42230d9e6d970654ed1d15c3d0df0d61ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a70804b1a5eb59a2f10e24a20ae42230d9e6d970654ed1d15c3d0df0d61ace->enter($__internal_30a70804b1a5eb59a2f10e24a20ae42230d9e6d970654ed1d15c3d0df0d61ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_30a70804b1a5eb59a2f10e24a20ae42230d9e6d970654ed1d15c3d0df0d61ace->leave($__internal_30a70804b1a5eb59a2f10e24a20ae42230d9e6d970654ed1d15c3d0df0d61ace_prof);

        
        $__internal_9fff68f7d818610a1b9bc95682ce43060852fc40c15e69cc8be45425bee2cefd->leave($__internal_9fff68f7d818610a1b9bc95682ce43060852fc40c15e69cc8be45425bee2cefd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6af7f443f5938aa8cecbbbaf2a731c8b32f6a35bdd4655dbf7388bbce20aee74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af7f443f5938aa8cecbbbaf2a731c8b32f6a35bdd4655dbf7388bbce20aee74->enter($__internal_6af7f443f5938aa8cecbbbaf2a731c8b32f6a35bdd4655dbf7388bbce20aee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc5581869e98ff62f25ccdb670907675d5ce66721c24c7996b27b1872e0f12ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5581869e98ff62f25ccdb670907675d5ce66721c24c7996b27b1872e0f12ce->enter($__internal_fc5581869e98ff62f25ccdb670907675d5ce66721c24c7996b27b1872e0f12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fc5581869e98ff62f25ccdb670907675d5ce66721c24c7996b27b1872e0f12ce->leave($__internal_fc5581869e98ff62f25ccdb670907675d5ce66721c24c7996b27b1872e0f12ce_prof);

        
        $__internal_6af7f443f5938aa8cecbbbaf2a731c8b32f6a35bdd4655dbf7388bbce20aee74->leave($__internal_6af7f443f5938aa8cecbbbaf2a731c8b32f6a35bdd4655dbf7388bbce20aee74_prof);

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
