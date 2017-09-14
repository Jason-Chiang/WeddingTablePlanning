<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_353c8333e8e8087996d3765a3092a4bcf33f8ea68fa7de3311c9c5b6e2f967bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353c8333e8e8087996d3765a3092a4bcf33f8ea68fa7de3311c9c5b6e2f967bb->enter($__internal_353c8333e8e8087996d3765a3092a4bcf33f8ea68fa7de3311c9c5b6e2f967bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_85f846324035c1edfed8d2eea4c1d4d123b61fefcbeaa6383e234bc108c18864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f846324035c1edfed8d2eea4c1d4d123b61fefcbeaa6383e234bc108c18864->enter($__internal_85f846324035c1edfed8d2eea4c1d4d123b61fefcbeaa6383e234bc108c18864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353c8333e8e8087996d3765a3092a4bcf33f8ea68fa7de3311c9c5b6e2f967bb->leave($__internal_353c8333e8e8087996d3765a3092a4bcf33f8ea68fa7de3311c9c5b6e2f967bb_prof);

        
        $__internal_85f846324035c1edfed8d2eea4c1d4d123b61fefcbeaa6383e234bc108c18864->leave($__internal_85f846324035c1edfed8d2eea4c1d4d123b61fefcbeaa6383e234bc108c18864_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ca67b9d0d94eccf7bda7b6f79252129f45d43363df77f879fafacbde559b7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca67b9d0d94eccf7bda7b6f79252129f45d43363df77f879fafacbde559b7f1->enter($__internal_7ca67b9d0d94eccf7bda7b6f79252129f45d43363df77f879fafacbde559b7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24094c46829f2bb23b57b2c8db48f4e656b40f24eaa28e39492bec5e6fe54125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24094c46829f2bb23b57b2c8db48f4e656b40f24eaa28e39492bec5e6fe54125->enter($__internal_24094c46829f2bb23b57b2c8db48f4e656b40f24eaa28e39492bec5e6fe54125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_24094c46829f2bb23b57b2c8db48f4e656b40f24eaa28e39492bec5e6fe54125->leave($__internal_24094c46829f2bb23b57b2c8db48f4e656b40f24eaa28e39492bec5e6fe54125_prof);

        
        $__internal_7ca67b9d0d94eccf7bda7b6f79252129f45d43363df77f879fafacbde559b7f1->leave($__internal_7ca67b9d0d94eccf7bda7b6f79252129f45d43363df77f879fafacbde559b7f1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d1a216bcf3392e70a1a17b717d0eb605ac4c47c22807555a98282b4bf3cc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d1a216bcf3392e70a1a17b717d0eb605ac4c47c22807555a98282b4bf3cc7e->enter($__internal_45d1a216bcf3392e70a1a17b717d0eb605ac4c47c22807555a98282b4bf3cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2e53bd42d605dd3db5b3abe8b05e57ef02958d4d6c8e8a0d57dce21fe3cb0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e53bd42d605dd3db5b3abe8b05e57ef02958d4d6c8e8a0d57dce21fe3cb0ae->enter($__internal_b2e53bd42d605dd3db5b3abe8b05e57ef02958d4d6c8e8a0d57dce21fe3cb0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2e53bd42d605dd3db5b3abe8b05e57ef02958d4d6c8e8a0d57dce21fe3cb0ae->leave($__internal_b2e53bd42d605dd3db5b3abe8b05e57ef02958d4d6c8e8a0d57dce21fe3cb0ae_prof);

        
        $__internal_45d1a216bcf3392e70a1a17b717d0eb605ac4c47c22807555a98282b4bf3cc7e->leave($__internal_45d1a216bcf3392e70a1a17b717d0eb605ac4c47c22807555a98282b4bf3cc7e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d63fbd64dbde63b3e2c3885b3bd51b0761986988591d4887b267a5e279ab7723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63fbd64dbde63b3e2c3885b3bd51b0761986988591d4887b267a5e279ab7723->enter($__internal_d63fbd64dbde63b3e2c3885b3bd51b0761986988591d4887b267a5e279ab7723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d368c547abd4382254f6ddb515d2d0ab8e6cfb9da0f997fdc61c56adae390e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d368c547abd4382254f6ddb515d2d0ab8e6cfb9da0f997fdc61c56adae390e74->enter($__internal_d368c547abd4382254f6ddb515d2d0ab8e6cfb9da0f997fdc61c56adae390e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d368c547abd4382254f6ddb515d2d0ab8e6cfb9da0f997fdc61c56adae390e74->leave($__internal_d368c547abd4382254f6ddb515d2d0ab8e6cfb9da0f997fdc61c56adae390e74_prof);

        
        $__internal_d63fbd64dbde63b3e2c3885b3bd51b0761986988591d4887b267a5e279ab7723->leave($__internal_d63fbd64dbde63b3e2c3885b3bd51b0761986988591d4887b267a5e279ab7723_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/steve/WeddingTablePlanning/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
