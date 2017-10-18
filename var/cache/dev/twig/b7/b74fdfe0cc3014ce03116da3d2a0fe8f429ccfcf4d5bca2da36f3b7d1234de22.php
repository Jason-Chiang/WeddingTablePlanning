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
        $__internal_f9290449b4f0f344d6912b897d3bfda14e72835abbca9c83590b40d358c17fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9290449b4f0f344d6912b897d3bfda14e72835abbca9c83590b40d358c17fe8->enter($__internal_f9290449b4f0f344d6912b897d3bfda14e72835abbca9c83590b40d358c17fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_edit.html.twig"));

        $__internal_9d44438831ce669485a4f35cd9be75505ff480c82a0743de76f8e5ba75ce8520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d44438831ce669485a4f35cd9be75505ff480c82a0743de76f8e5ba75ce8520->enter($__internal_9d44438831ce669485a4f35cd9be75505ff480c82a0743de76f8e5ba75ce8520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/guest_edit.html.twig"));

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
        
        $__internal_f9290449b4f0f344d6912b897d3bfda14e72835abbca9c83590b40d358c17fe8->leave($__internal_f9290449b4f0f344d6912b897d3bfda14e72835abbca9c83590b40d358c17fe8_prof);

        
        $__internal_9d44438831ce669485a4f35cd9be75505ff480c82a0743de76f8e5ba75ce8520->leave($__internal_9d44438831ce669485a4f35cd9be75505ff480c82a0743de76f8e5ba75ce8520_prof);

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
