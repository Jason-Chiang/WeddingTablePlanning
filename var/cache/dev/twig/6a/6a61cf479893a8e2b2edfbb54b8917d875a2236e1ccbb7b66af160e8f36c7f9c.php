<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f8e01134d93bee5f3bfa5e3a18ae707d182ff3ae43406a1badd64982d1031901 extends Twig_Template
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
        $__internal_d4cc71e64c69b96dac969ac4f4bf1cef84a2e67219cf309c7fd320bb31db5ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cc71e64c69b96dac969ac4f4bf1cef84a2e67219cf309c7fd320bb31db5ed8->enter($__internal_d4cc71e64c69b96dac969ac4f4bf1cef84a2e67219cf309c7fd320bb31db5ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b41305726d0c97314d733d404e38f8767d8b22f3c1d30e37d5f7e9002967a02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41305726d0c97314d733d404e38f8767d8b22f3c1d30e37d5f7e9002967a02a->enter($__internal_b41305726d0c97314d733d404e38f8767d8b22f3c1d30e37d5f7e9002967a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d4cc71e64c69b96dac969ac4f4bf1cef84a2e67219cf309c7fd320bb31db5ed8->leave($__internal_d4cc71e64c69b96dac969ac4f4bf1cef84a2e67219cf309c7fd320bb31db5ed8_prof);

        
        $__internal_b41305726d0c97314d733d404e38f8767d8b22f3c1d30e37d5f7e9002967a02a->leave($__internal_b41305726d0c97314d733d404e38f8767d8b22f3c1d30e37d5f7e9002967a02a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/steve/WeddingTablePlanning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
