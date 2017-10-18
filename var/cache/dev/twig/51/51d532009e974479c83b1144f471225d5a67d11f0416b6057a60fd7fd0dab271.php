<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583a3b92b9a7bd6090eba44b50a58a9a45e489885d3f12270d6a94dd923c6652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583a3b92b9a7bd6090eba44b50a58a9a45e489885d3f12270d6a94dd923c6652->enter($__internal_583a3b92b9a7bd6090eba44b50a58a9a45e489885d3f12270d6a94dd923c6652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d3518df4b2e9a1b0b12b22811884c2e482f417463035b6102b9c890eb99e4788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3518df4b2e9a1b0b12b22811884c2e482f417463035b6102b9c890eb99e4788->enter($__internal_d3518df4b2e9a1b0b12b22811884c2e482f417463035b6102b9c890eb99e4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_583a3b92b9a7bd6090eba44b50a58a9a45e489885d3f12270d6a94dd923c6652->leave($__internal_583a3b92b9a7bd6090eba44b50a58a9a45e489885d3f12270d6a94dd923c6652_prof);

        
        $__internal_d3518df4b2e9a1b0b12b22811884c2e482f417463035b6102b9c890eb99e4788->leave($__internal_d3518df4b2e9a1b0b12b22811884c2e482f417463035b6102b9c890eb99e4788_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53f7a79380302802f58a15132ccf849205d77cc51963fe56658d9ac401d0f031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f7a79380302802f58a15132ccf849205d77cc51963fe56658d9ac401d0f031->enter($__internal_53f7a79380302802f58a15132ccf849205d77cc51963fe56658d9ac401d0f031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38eb463dd08e41734ce952a2af017ae55a49b5234711298cae31b16090f020a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38eb463dd08e41734ce952a2af017ae55a49b5234711298cae31b16090f020a8->enter($__internal_38eb463dd08e41734ce952a2af017ae55a49b5234711298cae31b16090f020a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_38eb463dd08e41734ce952a2af017ae55a49b5234711298cae31b16090f020a8->leave($__internal_38eb463dd08e41734ce952a2af017ae55a49b5234711298cae31b16090f020a8_prof);

        
        $__internal_53f7a79380302802f58a15132ccf849205d77cc51963fe56658d9ac401d0f031->leave($__internal_53f7a79380302802f58a15132ccf849205d77cc51963fe56658d9ac401d0f031_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bfd0671edf60cac17bf0f678307bf687502eb9ef6a41726a05ff3f72b525009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfd0671edf60cac17bf0f678307bf687502eb9ef6a41726a05ff3f72b525009->enter($__internal_8bfd0671edf60cac17bf0f678307bf687502eb9ef6a41726a05ff3f72b525009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85b6fbaba4cbdbaa8cf6052270ca00f5bc041a5f9c280bb27b7ef2743a191bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b6fbaba4cbdbaa8cf6052270ca00f5bc041a5f9c280bb27b7ef2743a191bb8->enter($__internal_85b6fbaba4cbdbaa8cf6052270ca00f5bc041a5f9c280bb27b7ef2743a191bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85b6fbaba4cbdbaa8cf6052270ca00f5bc041a5f9c280bb27b7ef2743a191bb8->leave($__internal_85b6fbaba4cbdbaa8cf6052270ca00f5bc041a5f9c280bb27b7ef2743a191bb8_prof);

        
        $__internal_8bfd0671edf60cac17bf0f678307bf687502eb9ef6a41726a05ff3f72b525009->leave($__internal_8bfd0671edf60cac17bf0f678307bf687502eb9ef6a41726a05ff3f72b525009_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc58d287ab67d185023465ff931dc2e87a4af8edf1ef53a2603ba13cb6060d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc58d287ab67d185023465ff931dc2e87a4af8edf1ef53a2603ba13cb6060d0->enter($__internal_ddc58d287ab67d185023465ff931dc2e87a4af8edf1ef53a2603ba13cb6060d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a77d4cdca591ec1a4765495245e6870c2ce2ea06a195217325abd54d240e901f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77d4cdca591ec1a4765495245e6870c2ce2ea06a195217325abd54d240e901f->enter($__internal_a77d4cdca591ec1a4765495245e6870c2ce2ea06a195217325abd54d240e901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a77d4cdca591ec1a4765495245e6870c2ce2ea06a195217325abd54d240e901f->leave($__internal_a77d4cdca591ec1a4765495245e6870c2ce2ea06a195217325abd54d240e901f_prof);

        
        $__internal_ddc58d287ab67d185023465ff931dc2e87a4af8edf1ef53a2603ba13cb6060d0->leave($__internal_ddc58d287ab67d185023465ff931dc2e87a4af8edf1ef53a2603ba13cb6060d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/steve/WeddingTablePlanning/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
