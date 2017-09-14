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
        $__internal_d10330776d8a2757d644f3c82ca51acb8d2dd606ad7fa629a227a779f475f40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10330776d8a2757d644f3c82ca51acb8d2dd606ad7fa629a227a779f475f40f->enter($__internal_d10330776d8a2757d644f3c82ca51acb8d2dd606ad7fa629a227a779f475f40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b42015848b2771541320b501981969528cc268f41e17826829b333e8a02a041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42015848b2771541320b501981969528cc268f41e17826829b333e8a02a041a->enter($__internal_b42015848b2771541320b501981969528cc268f41e17826829b333e8a02a041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d10330776d8a2757d644f3c82ca51acb8d2dd606ad7fa629a227a779f475f40f->leave($__internal_d10330776d8a2757d644f3c82ca51acb8d2dd606ad7fa629a227a779f475f40f_prof);

        
        $__internal_b42015848b2771541320b501981969528cc268f41e17826829b333e8a02a041a->leave($__internal_b42015848b2771541320b501981969528cc268f41e17826829b333e8a02a041a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbce4fe8057cd1cf89b27ec5c37b2eadf693ca6ed8a63cc81ab0b24d825eaa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce4fe8057cd1cf89b27ec5c37b2eadf693ca6ed8a63cc81ab0b24d825eaa71->enter($__internal_cbce4fe8057cd1cf89b27ec5c37b2eadf693ca6ed8a63cc81ab0b24d825eaa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26f857e28902d76b2e585bfdd6d16095eae9978004c73836f37a5d925afbcbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f857e28902d76b2e585bfdd6d16095eae9978004c73836f37a5d925afbcbf6->enter($__internal_26f857e28902d76b2e585bfdd6d16095eae9978004c73836f37a5d925afbcbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26f857e28902d76b2e585bfdd6d16095eae9978004c73836f37a5d925afbcbf6->leave($__internal_26f857e28902d76b2e585bfdd6d16095eae9978004c73836f37a5d925afbcbf6_prof);

        
        $__internal_cbce4fe8057cd1cf89b27ec5c37b2eadf693ca6ed8a63cc81ab0b24d825eaa71->leave($__internal_cbce4fe8057cd1cf89b27ec5c37b2eadf693ca6ed8a63cc81ab0b24d825eaa71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0e9518edcb097ccc99a2e1d7494625010af54e7b6fe4c68ab511d68d98686f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e9518edcb097ccc99a2e1d7494625010af54e7b6fe4c68ab511d68d98686f7->enter($__internal_c0e9518edcb097ccc99a2e1d7494625010af54e7b6fe4c68ab511d68d98686f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94bf55cdc1757f536c2bddf866cd9789f712cb20f330751f276da0fbdbd8e7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bf55cdc1757f536c2bddf866cd9789f712cb20f330751f276da0fbdbd8e7f7->enter($__internal_94bf55cdc1757f536c2bddf866cd9789f712cb20f330751f276da0fbdbd8e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94bf55cdc1757f536c2bddf866cd9789f712cb20f330751f276da0fbdbd8e7f7->leave($__internal_94bf55cdc1757f536c2bddf866cd9789f712cb20f330751f276da0fbdbd8e7f7_prof);

        
        $__internal_c0e9518edcb097ccc99a2e1d7494625010af54e7b6fe4c68ab511d68d98686f7->leave($__internal_c0e9518edcb097ccc99a2e1d7494625010af54e7b6fe4c68ab511d68d98686f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e76ceb09e9a580a9c819dada6b0daed3d326042754e31bfe0be8582ccab9a8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76ceb09e9a580a9c819dada6b0daed3d326042754e31bfe0be8582ccab9a8cc->enter($__internal_e76ceb09e9a580a9c819dada6b0daed3d326042754e31bfe0be8582ccab9a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bba6a7f2b2b41c0529bde023a19a5110ac0478c1d48ae81d28d9c2cb07a01d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba6a7f2b2b41c0529bde023a19a5110ac0478c1d48ae81d28d9c2cb07a01d03->enter($__internal_bba6a7f2b2b41c0529bde023a19a5110ac0478c1d48ae81d28d9c2cb07a01d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bba6a7f2b2b41c0529bde023a19a5110ac0478c1d48ae81d28d9c2cb07a01d03->leave($__internal_bba6a7f2b2b41c0529bde023a19a5110ac0478c1d48ae81d28d9c2cb07a01d03_prof);

        
        $__internal_e76ceb09e9a580a9c819dada6b0daed3d326042754e31bfe0be8582ccab9a8cc->leave($__internal_e76ceb09e9a580a9c819dada6b0daed3d326042754e31bfe0be8582ccab9a8cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01c9e2d50f8bf5cee8c3d991e4833bb13760f662f8a410f7d3245e19f08fcb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c9e2d50f8bf5cee8c3d991e4833bb13760f662f8a410f7d3245e19f08fcb33->enter($__internal_01c9e2d50f8bf5cee8c3d991e4833bb13760f662f8a410f7d3245e19f08fcb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29058f8baf0de2696a02d27835095796e2b12a14f5ad6336931bd4a4a4257062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29058f8baf0de2696a02d27835095796e2b12a14f5ad6336931bd4a4a4257062->enter($__internal_29058f8baf0de2696a02d27835095796e2b12a14f5ad6336931bd4a4a4257062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29058f8baf0de2696a02d27835095796e2b12a14f5ad6336931bd4a4a4257062->leave($__internal_29058f8baf0de2696a02d27835095796e2b12a14f5ad6336931bd4a4a4257062_prof);

        
        $__internal_01c9e2d50f8bf5cee8c3d991e4833bb13760f662f8a410f7d3245e19f08fcb33->leave($__internal_01c9e2d50f8bf5cee8c3d991e4833bb13760f662f8a410f7d3245e19f08fcb33_prof);

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
