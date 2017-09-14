<?php

/* default/guest_add.html.twig */
class __TwigTemplate_2e902348c4af616a03b3a47c0c96cdb59dba61b9904a1710e71b9da439c1e55a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b4ef72e748cd1d3b21e27a0288e703bd5c452f8fc37f5b12dc2f3d05cce0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b4ef72e748cd1d3b21e27a0288e703bd5c452f8fc37f5b12dc2f3d05cce0ed->enter($__internal_13b4ef72e748cd1d3b21e27a0288e703bd5c452f8fc37f5b12dc2f3d05cce0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_add.html.twig"));

        $__internal_a3ed809a31f339e40ae2f9dd29e962672a8ede1cb89dac5c1d0373caf46d40aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ed809a31f339e40ae2f9dd29e962672a8ede1cb89dac5c1d0373caf46d40aa->enter($__internal_a3ed809a31f339e40ae2f9dd29e962672a8ede1cb89dac5c1d0373caf46d40aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_13b4ef72e748cd1d3b21e27a0288e703bd5c452f8fc37f5b12dc2f3d05cce0ed->leave($__internal_13b4ef72e748cd1d3b21e27a0288e703bd5c452f8fc37f5b12dc2f3d05cce0ed_prof);

        
        $__internal_a3ed809a31f339e40ae2f9dd29e962672a8ede1cb89dac5c1d0373caf46d40aa->leave($__internal_a3ed809a31f339e40ae2f9dd29e962672a8ede1cb89dac5c1d0373caf46d40aa_prof);

    }

    public function getTemplateName()
    {
        return "default/guest_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
", "default/guest_add.html.twig", "/home/steve/WeddingTablePlanning/app/Resources/views/default/guest_add.html.twig");
    }
}
