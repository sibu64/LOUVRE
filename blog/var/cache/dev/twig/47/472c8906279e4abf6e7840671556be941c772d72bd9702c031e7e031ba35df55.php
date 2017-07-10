<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_09bcd2dc6be0f24368f66cab57adaa6f58b8b387691a537e6d589e04371b69dc extends Twig_Template
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
        $__internal_3db78ae0cce3415f0de8d611fffb24c4db550dbd8e431b36a75e0b2dcb8ad946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db78ae0cce3415f0de8d611fffb24c4db550dbd8e431b36a75e0b2dcb8ad946->enter($__internal_3db78ae0cce3415f0de8d611fffb24c4db550dbd8e431b36a75e0b2dcb8ad946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f539aca9b65262674ccbf18de782a653398cb862455406a025e1c3cd1c5da81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f539aca9b65262674ccbf18de782a653398cb862455406a025e1c3cd1c5da81f->enter($__internal_f539aca9b65262674ccbf18de782a653398cb862455406a025e1c3cd1c5da81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_3db78ae0cce3415f0de8d611fffb24c4db550dbd8e431b36a75e0b2dcb8ad946->leave($__internal_3db78ae0cce3415f0de8d611fffb24c4db550dbd8e431b36a75e0b2dcb8ad946_prof);

        
        $__internal_f539aca9b65262674ccbf18de782a653398cb862455406a025e1c3cd1c5da81f->leave($__internal_f539aca9b65262674ccbf18de782a653398cb862455406a025e1c3cd1c5da81f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
