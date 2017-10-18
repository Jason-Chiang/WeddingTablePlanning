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
        $__internal_9c86f020317fca75256270c00cb75e79dbe656cd9add63fdb79dc3b23ecbcbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c86f020317fca75256270c00cb75e79dbe656cd9add63fdb79dc3b23ecbcbaf->enter($__internal_9c86f020317fca75256270c00cb75e79dbe656cd9add63fdb79dc3b23ecbcbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fa041caae921cd5c2da5d82038e7030a03c65016493e6290e9051fcfc02458a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa041caae921cd5c2da5d82038e7030a03c65016493e6290e9051fcfc02458a4->enter($__internal_fa041caae921cd5c2da5d82038e7030a03c65016493e6290e9051fcfc02458a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c86f020317fca75256270c00cb75e79dbe656cd9add63fdb79dc3b23ecbcbaf->leave($__internal_9c86f020317fca75256270c00cb75e79dbe656cd9add63fdb79dc3b23ecbcbaf_prof);

        
        $__internal_fa041caae921cd5c2da5d82038e7030a03c65016493e6290e9051fcfc02458a4->leave($__internal_fa041caae921cd5c2da5d82038e7030a03c65016493e6290e9051fcfc02458a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f52a45ba742ef72b6f1f03ce63ef921cdc048d572ccae2cb089fd7079cd38391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52a45ba742ef72b6f1f03ce63ef921cdc048d572ccae2cb089fd7079cd38391->enter($__internal_f52a45ba742ef72b6f1f03ce63ef921cdc048d572ccae2cb089fd7079cd38391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c71604b0deac87d686d22d32832e34614414165140858bb1322de57d38f1bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c71604b0deac87d686d22d32832e34614414165140858bb1322de57d38f1bb6->enter($__internal_1c71604b0deac87d686d22d32832e34614414165140858bb1322de57d38f1bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c71604b0deac87d686d22d32832e34614414165140858bb1322de57d38f1bb6->leave($__internal_1c71604b0deac87d686d22d32832e34614414165140858bb1322de57d38f1bb6_prof);

        
        $__internal_f52a45ba742ef72b6f1f03ce63ef921cdc048d572ccae2cb089fd7079cd38391->leave($__internal_f52a45ba742ef72b6f1f03ce63ef921cdc048d572ccae2cb089fd7079cd38391_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_24590004047b3679cee338019cd6601e3eb3cd9b34591dd4b5831b249ad748a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24590004047b3679cee338019cd6601e3eb3cd9b34591dd4b5831b249ad748a8->enter($__internal_24590004047b3679cee338019cd6601e3eb3cd9b34591dd4b5831b249ad748a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a3d9e3e48d94e7b796a2066d0d853d0cc3a9801c38c0c1386c7727b14927415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3d9e3e48d94e7b796a2066d0d853d0cc3a9801c38c0c1386c7727b14927415->enter($__internal_7a3d9e3e48d94e7b796a2066d0d853d0cc3a9801c38c0c1386c7727b14927415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a3d9e3e48d94e7b796a2066d0d853d0cc3a9801c38c0c1386c7727b14927415->leave($__internal_7a3d9e3e48d94e7b796a2066d0d853d0cc3a9801c38c0c1386c7727b14927415_prof);

        
        $__internal_24590004047b3679cee338019cd6601e3eb3cd9b34591dd4b5831b249ad748a8->leave($__internal_24590004047b3679cee338019cd6601e3eb3cd9b34591dd4b5831b249ad748a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_782ee6e1aa30c76f3557b7b42cf53e7bda4d40f5ee134c0074bc924f1e05678d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782ee6e1aa30c76f3557b7b42cf53e7bda4d40f5ee134c0074bc924f1e05678d->enter($__internal_782ee6e1aa30c76f3557b7b42cf53e7bda4d40f5ee134c0074bc924f1e05678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2c912178cc1668d28754e43fe1b980a8509a42f9037a27521d583e6ebf200a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c912178cc1668d28754e43fe1b980a8509a42f9037a27521d583e6ebf200a0->enter($__internal_f2c912178cc1668d28754e43fe1b980a8509a42f9037a27521d583e6ebf200a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f2c912178cc1668d28754e43fe1b980a8509a42f9037a27521d583e6ebf200a0->leave($__internal_f2c912178cc1668d28754e43fe1b980a8509a42f9037a27521d583e6ebf200a0_prof);

        
        $__internal_782ee6e1aa30c76f3557b7b42cf53e7bda4d40f5ee134c0074bc924f1e05678d->leave($__internal_782ee6e1aa30c76f3557b7b42cf53e7bda4d40f5ee134c0074bc924f1e05678d_prof);

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
