<?php

/* default/guest_edit.html.twig */
class __TwigTemplate_ab7fa42c78eb634fa831d2bef62740e062b80446775b013539c4404b1941870f extends Twig_Template
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
        $__internal_5c6a949bb5670ce0e802b3016964f8b250d820cfb645a809d45f52de5cf0602c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6a949bb5670ce0e802b3016964f8b250d820cfb645a809d45f52de5cf0602c->enter($__internal_5c6a949bb5670ce0e802b3016964f8b250d820cfb645a809d45f52de5cf0602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_edit.html.twig"));

        $__internal_109cdd801a36ca5803d445f59bd42d38110e7696d4f5ef7fcd9e9e4cb3d77629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109cdd801a36ca5803d445f59bd42d38110e7696d4f5ef7fcd9e9e4cb3d77629->enter($__internal_109cdd801a36ca5803d445f59bd42d38110e7696d4f5ef7fcd9e9e4cb3d77629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_edit.html.twig"));

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
        
        $__internal_5c6a949bb5670ce0e802b3016964f8b250d820cfb645a809d45f52de5cf0602c->leave($__internal_5c6a949bb5670ce0e802b3016964f8b250d820cfb645a809d45f52de5cf0602c_prof);

        
        $__internal_109cdd801a36ca5803d445f59bd42d38110e7696d4f5ef7fcd9e9e4cb3d77629->leave($__internal_109cdd801a36ca5803d445f59bd42d38110e7696d4f5ef7fcd9e9e4cb3d77629_prof);

    }

    public function getTemplateName()
    {
        return "default/guest_edit.html.twig";
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
", "default/guest_edit.html.twig", "/home/steve/WeddingTablePlanning/app/Resources/views/default/guest_edit.html.twig");
    }
}
