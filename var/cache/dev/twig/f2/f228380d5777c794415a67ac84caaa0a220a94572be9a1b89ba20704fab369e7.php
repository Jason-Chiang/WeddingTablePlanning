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
        $__internal_15713d0e4375e1cedbcf881562f85c44a43dd24b3866477e3a8d8c6fa7b0fee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15713d0e4375e1cedbcf881562f85c44a43dd24b3866477e3a8d8c6fa7b0fee8->enter($__internal_15713d0e4375e1cedbcf881562f85c44a43dd24b3866477e3a8d8c6fa7b0fee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c9846483d5c6332d05d7e2afd80a6c554640b5d11861363bd10507964340ae56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9846483d5c6332d05d7e2afd80a6c554640b5d11861363bd10507964340ae56->enter($__internal_c9846483d5c6332d05d7e2afd80a6c554640b5d11861363bd10507964340ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15713d0e4375e1cedbcf881562f85c44a43dd24b3866477e3a8d8c6fa7b0fee8->leave($__internal_15713d0e4375e1cedbcf881562f85c44a43dd24b3866477e3a8d8c6fa7b0fee8_prof);

        
        $__internal_c9846483d5c6332d05d7e2afd80a6c554640b5d11861363bd10507964340ae56->leave($__internal_c9846483d5c6332d05d7e2afd80a6c554640b5d11861363bd10507964340ae56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2917982b2e8cd94d27157684e3cafe4ed790629805fcde2437f62babbe37591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2917982b2e8cd94d27157684e3cafe4ed790629805fcde2437f62babbe37591b->enter($__internal_2917982b2e8cd94d27157684e3cafe4ed790629805fcde2437f62babbe37591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59a7290fa4cd33edb726a6c07f6343c8ba6ff4f878a4813641619367d909035d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a7290fa4cd33edb726a6c07f6343c8ba6ff4f878a4813641619367d909035d->enter($__internal_59a7290fa4cd33edb726a6c07f6343c8ba6ff4f878a4813641619367d909035d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59a7290fa4cd33edb726a6c07f6343c8ba6ff4f878a4813641619367d909035d->leave($__internal_59a7290fa4cd33edb726a6c07f6343c8ba6ff4f878a4813641619367d909035d_prof);

        
        $__internal_2917982b2e8cd94d27157684e3cafe4ed790629805fcde2437f62babbe37591b->leave($__internal_2917982b2e8cd94d27157684e3cafe4ed790629805fcde2437f62babbe37591b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2d296e8ddc4801dcc98edf61bfd50ad3d506764f0d858589ad8f9cf4cf34e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d296e8ddc4801dcc98edf61bfd50ad3d506764f0d858589ad8f9cf4cf34e26->enter($__internal_b2d296e8ddc4801dcc98edf61bfd50ad3d506764f0d858589ad8f9cf4cf34e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_153b410dd3de53ee0b74d8d7b2b1034964494888153700147d3dc3dab7e66744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153b410dd3de53ee0b74d8d7b2b1034964494888153700147d3dc3dab7e66744->enter($__internal_153b410dd3de53ee0b74d8d7b2b1034964494888153700147d3dc3dab7e66744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_153b410dd3de53ee0b74d8d7b2b1034964494888153700147d3dc3dab7e66744->leave($__internal_153b410dd3de53ee0b74d8d7b2b1034964494888153700147d3dc3dab7e66744_prof);

        
        $__internal_b2d296e8ddc4801dcc98edf61bfd50ad3d506764f0d858589ad8f9cf4cf34e26->leave($__internal_b2d296e8ddc4801dcc98edf61bfd50ad3d506764f0d858589ad8f9cf4cf34e26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e6f2c85e5cc12e624e5d48bb1bf53a9134ac27f42ed689faca993013bd3efce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6f2c85e5cc12e624e5d48bb1bf53a9134ac27f42ed689faca993013bd3efce->enter($__internal_8e6f2c85e5cc12e624e5d48bb1bf53a9134ac27f42ed689faca993013bd3efce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d9e98eaa4a347b0d05b7c11b66475926f52e12e1bf0a6a7df8a00c44506c638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9e98eaa4a347b0d05b7c11b66475926f52e12e1bf0a6a7df8a00c44506c638->enter($__internal_3d9e98eaa4a347b0d05b7c11b66475926f52e12e1bf0a6a7df8a00c44506c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d9e98eaa4a347b0d05b7c11b66475926f52e12e1bf0a6a7df8a00c44506c638->leave($__internal_3d9e98eaa4a347b0d05b7c11b66475926f52e12e1bf0a6a7df8a00c44506c638_prof);

        
        $__internal_8e6f2c85e5cc12e624e5d48bb1bf53a9134ac27f42ed689faca993013bd3efce->leave($__internal_8e6f2c85e5cc12e624e5d48bb1bf53a9134ac27f42ed689faca993013bd3efce_prof);

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
