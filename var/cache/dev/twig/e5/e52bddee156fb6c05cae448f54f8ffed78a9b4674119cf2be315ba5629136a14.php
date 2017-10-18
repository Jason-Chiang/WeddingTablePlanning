<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_8d41ad16e2bb36e928a9ac29e8d2aa24c2246ee74f6176eca26c188cef40f224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d41ad16e2bb36e928a9ac29e8d2aa24c2246ee74f6176eca26c188cef40f224->enter($__internal_8d41ad16e2bb36e928a9ac29e8d2aa24c2246ee74f6176eca26c188cef40f224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7f688df1afc478f01b24cfecd481184f4a7e1ef62afd1a40f4a27d6ef1aceb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f688df1afc478f01b24cfecd481184f4a7e1ef62afd1a40f4a27d6ef1aceb98->enter($__internal_7f688df1afc478f01b24cfecd481184f4a7e1ef62afd1a40f4a27d6ef1aceb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8d41ad16e2bb36e928a9ac29e8d2aa24c2246ee74f6176eca26c188cef40f224->leave($__internal_8d41ad16e2bb36e928a9ac29e8d2aa24c2246ee74f6176eca26c188cef40f224_prof);

        
        $__internal_7f688df1afc478f01b24cfecd481184f4a7e1ef62afd1a40f4a27d6ef1aceb98->leave($__internal_7f688df1afc478f01b24cfecd481184f4a7e1ef62afd1a40f4a27d6ef1aceb98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ec0c4cd07f085a2f571773670c20a5e83d89ffa4aa484599680b8cafe3d5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ec0c4cd07f085a2f571773670c20a5e83d89ffa4aa484599680b8cafe3d5c7->enter($__internal_a7ec0c4cd07f085a2f571773670c20a5e83d89ffa4aa484599680b8cafe3d5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3fb673a11972405f5d95077ce6e9c46585c429a39631f36479a0b75dc8b1a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fb673a11972405f5d95077ce6e9c46585c429a39631f36479a0b75dc8b1a03->enter($__internal_d3fb673a11972405f5d95077ce6e9c46585c429a39631f36479a0b75dc8b1a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3fb673a11972405f5d95077ce6e9c46585c429a39631f36479a0b75dc8b1a03->leave($__internal_d3fb673a11972405f5d95077ce6e9c46585c429a39631f36479a0b75dc8b1a03_prof);

        
        $__internal_a7ec0c4cd07f085a2f571773670c20a5e83d89ffa4aa484599680b8cafe3d5c7->leave($__internal_a7ec0c4cd07f085a2f571773670c20a5e83d89ffa4aa484599680b8cafe3d5c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db96a6ad168cd94ac71fc76f9cb88491228ea60a4ad4b9ae51cb0e5e802f5882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db96a6ad168cd94ac71fc76f9cb88491228ea60a4ad4b9ae51cb0e5e802f5882->enter($__internal_db96a6ad168cd94ac71fc76f9cb88491228ea60a4ad4b9ae51cb0e5e802f5882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38b7a236ce76a8f727f6d77d4512a3c8b6e954578215ebc145f2c980c187cafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b7a236ce76a8f727f6d77d4512a3c8b6e954578215ebc145f2c980c187cafd->enter($__internal_38b7a236ce76a8f727f6d77d4512a3c8b6e954578215ebc145f2c980c187cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38b7a236ce76a8f727f6d77d4512a3c8b6e954578215ebc145f2c980c187cafd->leave($__internal_38b7a236ce76a8f727f6d77d4512a3c8b6e954578215ebc145f2c980c187cafd_prof);

        
        $__internal_db96a6ad168cd94ac71fc76f9cb88491228ea60a4ad4b9ae51cb0e5e802f5882->leave($__internal_db96a6ad168cd94ac71fc76f9cb88491228ea60a4ad4b9ae51cb0e5e802f5882_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9a341ca4fd14f41d9cb569f42b5141e9e55665c503aa4c60973a4d8e321e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9a341ca4fd14f41d9cb569f42b5141e9e55665c503aa4c60973a4d8e321e7f->enter($__internal_7e9a341ca4fd14f41d9cb569f42b5141e9e55665c503aa4c60973a4d8e321e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71434041525feba94400c8d096332954f3765295aa840c0d18f957a75f6f93eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71434041525feba94400c8d096332954f3765295aa840c0d18f957a75f6f93eb->enter($__internal_71434041525feba94400c8d096332954f3765295aa840c0d18f957a75f6f93eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71434041525feba94400c8d096332954f3765295aa840c0d18f957a75f6f93eb->leave($__internal_71434041525feba94400c8d096332954f3765295aa840c0d18f957a75f6f93eb_prof);

        
        $__internal_7e9a341ca4fd14f41d9cb569f42b5141e9e55665c503aa4c60973a4d8e321e7f->leave($__internal_7e9a341ca4fd14f41d9cb569f42b5141e9e55665c503aa4c60973a4d8e321e7f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbd7124dce590903246d7ae0444fcb6e9714282ca76270396233cb81dc0ae17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd7124dce590903246d7ae0444fcb6e9714282ca76270396233cb81dc0ae17b->enter($__internal_fbd7124dce590903246d7ae0444fcb6e9714282ca76270396233cb81dc0ae17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51f70e2a6a4a313cef1a487f38c9fb7bee8682406ac7dfcc6f4670d98299258b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f70e2a6a4a313cef1a487f38c9fb7bee8682406ac7dfcc6f4670d98299258b->enter($__internal_51f70e2a6a4a313cef1a487f38c9fb7bee8682406ac7dfcc6f4670d98299258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51f70e2a6a4a313cef1a487f38c9fb7bee8682406ac7dfcc6f4670d98299258b->leave($__internal_51f70e2a6a4a313cef1a487f38c9fb7bee8682406ac7dfcc6f4670d98299258b_prof);

        
        $__internal_fbd7124dce590903246d7ae0444fcb6e9714282ca76270396233cb81dc0ae17b->leave($__internal_fbd7124dce590903246d7ae0444fcb6e9714282ca76270396233cb81dc0ae17b_prof);

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
", "base.html.twig", "/home/steve/WeddingTablePlanning/app/Resources/views/base.html.twig");
    }
}
