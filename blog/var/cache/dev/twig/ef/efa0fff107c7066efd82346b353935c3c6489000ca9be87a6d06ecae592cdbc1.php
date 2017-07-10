<?php

/* OCUserBundle:Default:index.html.twig */
class __TwigTemplate_96a429e5eddc71f2d421295c14d49e221f220205cf12aa6b21a579fbc8e2ed24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCUserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3f799d4cf2cd3120144579608b5039228a9f8bed4df20c45a6f4b18dca2001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3f799d4cf2cd3120144579608b5039228a9f8bed4df20c45a6f4b18dca2001->enter($__internal_3d3f799d4cf2cd3120144579608b5039228a9f8bed4df20c45a6f4b18dca2001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Default:index.html.twig"));

        $__internal_04be7cf28285aa325f0986d4e413ed1684d39e81ae15fbaf41e67aa12a01d096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04be7cf28285aa325f0986d4e413ed1684d39e81ae15fbaf41e67aa12a01d096->enter($__internal_04be7cf28285aa325f0986d4e413ed1684d39e81ae15fbaf41e67aa12a01d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3f799d4cf2cd3120144579608b5039228a9f8bed4df20c45a6f4b18dca2001->leave($__internal_3d3f799d4cf2cd3120144579608b5039228a9f8bed4df20c45a6f4b18dca2001_prof);

        
        $__internal_04be7cf28285aa325f0986d4e413ed1684d39e81ae15fbaf41e67aa12a01d096->leave($__internal_04be7cf28285aa325f0986d4e413ed1684d39e81ae15fbaf41e67aa12a01d096_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a3eb5e8abda968387a51287fcde76fdbd61a3e81bc5e0b18008f57cf2e293d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a3eb5e8abda968387a51287fcde76fdbd61a3e81bc5e0b18008f57cf2e293d->enter($__internal_e1a3eb5e8abda968387a51287fcde76fdbd61a3e81bc5e0b18008f57cf2e293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2bf14b54f975e867e64365709ec1a66fd3662d22c150c75707f602ed293a559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bf14b54f975e867e64365709ec1a66fd3662d22c150c75707f602ed293a559->enter($__internal_c2bf14b54f975e867e64365709ec1a66fd3662d22c150c75707f602ed293a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OCUserBundle:Security:login";
        
        $__internal_c2bf14b54f975e867e64365709ec1a66fd3662d22c150c75707f602ed293a559->leave($__internal_c2bf14b54f975e867e64365709ec1a66fd3662d22c150c75707f602ed293a559_prof);

        
        $__internal_e1a3eb5e8abda968387a51287fcde76fdbd61a3e81bc5e0b18008f57cf2e293d->leave($__internal_e1a3eb5e8abda968387a51287fcde76fdbd61a3e81bc5e0b18008f57cf2e293d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_612ce553a34ed38364b5db5ffcdf962e1df90c2312accb2ee3b70e3796b64a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612ce553a34ed38364b5db5ffcdf962e1df90c2312accb2ee3b70e3796b64a81->enter($__internal_612ce553a34ed38364b5db5ffcdf962e1df90c2312accb2ee3b70e3796b64a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a13bf8636052c6429c8359a40f99a40425656d6f563425a955fa5a52793a1da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13bf8636052c6429c8359a40f99a40425656d6f563425a955fa5a52793a1da3->enter($__internal_a13bf8636052c6429c8359a40f99a40425656d6f563425a955fa5a52793a1da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Bienvenue sur le blog de l'écrivain Jean Forteroche!</h1>
    
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_user_logout");
        echo "\" method=\"post\">
   <input type=\"submit\" value=\"Se déconnecter\"/>
   </form>
    <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_user_login");
        echo "\" method=\"post\">
   <input type=\"submit\" value=\"Se connecter\"/>
   </form>
";
        
        $__internal_a13bf8636052c6429c8359a40f99a40425656d6f563425a955fa5a52793a1da3->leave($__internal_a13bf8636052c6429c8359a40f99a40425656d6f563425a955fa5a52793a1da3_prof);

        
        $__internal_612ce553a34ed38364b5db5ffcdf962e1df90c2312accb2ee3b70e3796b64a81->leave($__internal_612ce553a34ed38364b5db5ffcdf962e1df90c2312accb2ee3b70e3796b64a81_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}OCUserBundle:Security:login{% endblock %}

{% block body %}
    <h1>Bienvenue sur le blog de l'écrivain Jean Forteroche!</h1>
    
    <form action=\"{{ path('oc_user_logout') }}\" method=\"post\">
   <input type=\"submit\" value=\"Se déconnecter\"/>
   </form>
    <form action=\"{{ path('oc_user_login') }}\" method=\"post\">
   <input type=\"submit\" value=\"Se connecter\"/>
   </form>
{% endblock %}", "OCUserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/UserBundle/Resources/views/Default/index.html.twig");
    }
}
