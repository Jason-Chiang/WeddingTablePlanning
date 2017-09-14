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
        $__internal_7926acc325e1fad3cf1b90152b6b47b77372e9d65065778b93f3b88666886923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7926acc325e1fad3cf1b90152b6b47b77372e9d65065778b93f3b88666886923->enter($__internal_7926acc325e1fad3cf1b90152b6b47b77372e9d65065778b93f3b88666886923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_350bcafc41393b65adc19adf92e0fe40926539805a8a6222691fb753da8444f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350bcafc41393b65adc19adf92e0fe40926539805a8a6222691fb753da8444f7->enter($__internal_350bcafc41393b65adc19adf92e0fe40926539805a8a6222691fb753da8444f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7926acc325e1fad3cf1b90152b6b47b77372e9d65065778b93f3b88666886923->leave($__internal_7926acc325e1fad3cf1b90152b6b47b77372e9d65065778b93f3b88666886923_prof);

        
        $__internal_350bcafc41393b65adc19adf92e0fe40926539805a8a6222691fb753da8444f7->leave($__internal_350bcafc41393b65adc19adf92e0fe40926539805a8a6222691fb753da8444f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf3f08ae65c985c828fc3bbbee561609eee12cabc77c925bc2cdc7df0b811b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3f08ae65c985c828fc3bbbee561609eee12cabc77c925bc2cdc7df0b811b07->enter($__internal_bf3f08ae65c985c828fc3bbbee561609eee12cabc77c925bc2cdc7df0b811b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5771ca0c28b74c0f5e3c586dfeb60b41dbd2861da38434e45ff777dacc7849ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5771ca0c28b74c0f5e3c586dfeb60b41dbd2861da38434e45ff777dacc7849ef->enter($__internal_5771ca0c28b74c0f5e3c586dfeb60b41dbd2861da38434e45ff777dacc7849ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5771ca0c28b74c0f5e3c586dfeb60b41dbd2861da38434e45ff777dacc7849ef->leave($__internal_5771ca0c28b74c0f5e3c586dfeb60b41dbd2861da38434e45ff777dacc7849ef_prof);

        
        $__internal_bf3f08ae65c985c828fc3bbbee561609eee12cabc77c925bc2cdc7df0b811b07->leave($__internal_bf3f08ae65c985c828fc3bbbee561609eee12cabc77c925bc2cdc7df0b811b07_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dc34a3e5448f8fb73b60218cf626a5b95664148bd3de33698c8668180604948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc34a3e5448f8fb73b60218cf626a5b95664148bd3de33698c8668180604948->enter($__internal_6dc34a3e5448f8fb73b60218cf626a5b95664148bd3de33698c8668180604948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bbc90ec39aad09ed9892590bd5e97649c2a8d074dc5677c2f55254a5c5e12d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbc90ec39aad09ed9892590bd5e97649c2a8d074dc5677c2f55254a5c5e12d8->enter($__internal_7bbc90ec39aad09ed9892590bd5e97649c2a8d074dc5677c2f55254a5c5e12d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7bbc90ec39aad09ed9892590bd5e97649c2a8d074dc5677c2f55254a5c5e12d8->leave($__internal_7bbc90ec39aad09ed9892590bd5e97649c2a8d074dc5677c2f55254a5c5e12d8_prof);

        
        $__internal_6dc34a3e5448f8fb73b60218cf626a5b95664148bd3de33698c8668180604948->leave($__internal_6dc34a3e5448f8fb73b60218cf626a5b95664148bd3de33698c8668180604948_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5fd932d59e5f473a456549797ff601564fa051882a123325d0d561c91881204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fd932d59e5f473a456549797ff601564fa051882a123325d0d561c91881204->enter($__internal_a5fd932d59e5f473a456549797ff601564fa051882a123325d0d561c91881204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f2a245527b636f42d1863102affe9463e223ce16e5a28b5a23dcd4b9b6a09e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2a245527b636f42d1863102affe9463e223ce16e5a28b5a23dcd4b9b6a09e2->enter($__internal_7f2a245527b636f42d1863102affe9463e223ce16e5a28b5a23dcd4b9b6a09e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f2a245527b636f42d1863102affe9463e223ce16e5a28b5a23dcd4b9b6a09e2->leave($__internal_7f2a245527b636f42d1863102affe9463e223ce16e5a28b5a23dcd4b9b6a09e2_prof);

        
        $__internal_a5fd932d59e5f473a456549797ff601564fa051882a123325d0d561c91881204->leave($__internal_a5fd932d59e5f473a456549797ff601564fa051882a123325d0d561c91881204_prof);

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
