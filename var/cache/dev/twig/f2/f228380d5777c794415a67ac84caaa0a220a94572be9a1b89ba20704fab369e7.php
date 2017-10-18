<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_4e4ad2ac458685eb4a09ac8e1f643875b1b519ec2a5a7d9f1b2f1e63207a4e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4ad2ac458685eb4a09ac8e1f643875b1b519ec2a5a7d9f1b2f1e63207a4e15->enter($__internal_4e4ad2ac458685eb4a09ac8e1f643875b1b519ec2a5a7d9f1b2f1e63207a4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eeb40ff0160d7c80a965f412b0db28dacfee8f377dd90ae04f9dadd6b80242ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb40ff0160d7c80a965f412b0db28dacfee8f377dd90ae04f9dadd6b80242ab->enter($__internal_eeb40ff0160d7c80a965f412b0db28dacfee8f377dd90ae04f9dadd6b80242ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4ad2ac458685eb4a09ac8e1f643875b1b519ec2a5a7d9f1b2f1e63207a4e15->leave($__internal_4e4ad2ac458685eb4a09ac8e1f643875b1b519ec2a5a7d9f1b2f1e63207a4e15_prof);

        
        $__internal_eeb40ff0160d7c80a965f412b0db28dacfee8f377dd90ae04f9dadd6b80242ab->leave($__internal_eeb40ff0160d7c80a965f412b0db28dacfee8f377dd90ae04f9dadd6b80242ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddf0e90d9148b52cabf55413394942481b905f9a6a324c7b15f5631584dd1cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf0e90d9148b52cabf55413394942481b905f9a6a324c7b15f5631584dd1cff->enter($__internal_ddf0e90d9148b52cabf55413394942481b905f9a6a324c7b15f5631584dd1cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f69c1f0f5bc9baa466040ef57c5195d052c9578aab71feee0eec11e1bfb7d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f69c1f0f5bc9baa466040ef57c5195d052c9578aab71feee0eec11e1bfb7d37->enter($__internal_8f69c1f0f5bc9baa466040ef57c5195d052c9578aab71feee0eec11e1bfb7d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f69c1f0f5bc9baa466040ef57c5195d052c9578aab71feee0eec11e1bfb7d37->leave($__internal_8f69c1f0f5bc9baa466040ef57c5195d052c9578aab71feee0eec11e1bfb7d37_prof);

        
        $__internal_ddf0e90d9148b52cabf55413394942481b905f9a6a324c7b15f5631584dd1cff->leave($__internal_ddf0e90d9148b52cabf55413394942481b905f9a6a324c7b15f5631584dd1cff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48ec3a3b8f77d6a3577a833c207eb678b725358fa3a85a004753f848745b7728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ec3a3b8f77d6a3577a833c207eb678b725358fa3a85a004753f848745b7728->enter($__internal_48ec3a3b8f77d6a3577a833c207eb678b725358fa3a85a004753f848745b7728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd3aaa79e0d26cfc0fc59163206a5ee1593bec3122891d828efe62dee5fe9a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3aaa79e0d26cfc0fc59163206a5ee1593bec3122891d828efe62dee5fe9a28->enter($__internal_fd3aaa79e0d26cfc0fc59163206a5ee1593bec3122891d828efe62dee5fe9a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd3aaa79e0d26cfc0fc59163206a5ee1593bec3122891d828efe62dee5fe9a28->leave($__internal_fd3aaa79e0d26cfc0fc59163206a5ee1593bec3122891d828efe62dee5fe9a28_prof);

        
        $__internal_48ec3a3b8f77d6a3577a833c207eb678b725358fa3a85a004753f848745b7728->leave($__internal_48ec3a3b8f77d6a3577a833c207eb678b725358fa3a85a004753f848745b7728_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8de945be953a80c801d72e17310c9435059d607f464d19290b02597addb6d9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de945be953a80c801d72e17310c9435059d607f464d19290b02597addb6d9b0->enter($__internal_8de945be953a80c801d72e17310c9435059d607f464d19290b02597addb6d9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79779c9635b480d2c46f6ddeda588ee9323d6422b3454a5f220a3227c037a646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79779c9635b480d2c46f6ddeda588ee9323d6422b3454a5f220a3227c037a646->enter($__internal_79779c9635b480d2c46f6ddeda588ee9323d6422b3454a5f220a3227c037a646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79779c9635b480d2c46f6ddeda588ee9323d6422b3454a5f220a3227c037a646->leave($__internal_79779c9635b480d2c46f6ddeda588ee9323d6422b3454a5f220a3227c037a646_prof);

        
        $__internal_8de945be953a80c801d72e17310c9435059d607f464d19290b02597addb6d9b0->leave($__internal_8de945be953a80c801d72e17310c9435059d607f464d19290b02597addb6d9b0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/steve/WeddingTablePlanning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
