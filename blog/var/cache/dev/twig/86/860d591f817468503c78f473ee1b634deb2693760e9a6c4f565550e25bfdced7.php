<?php

/* OCUserBundle:Default:index.html.twig */
class __TwigTemplate_d8373f2a0d82e1ca29924bdbced5be24d4f7b5bf8d33582b37843cfd1576e5f9 extends Twig_Template
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
        $__internal_3f3ba9be453de25b34375c59e68dfdcc98c8d2806c330b12e18beb5981a8ee08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3ba9be453de25b34375c59e68dfdcc98c8d2806c330b12e18beb5981a8ee08->enter($__internal_3f3ba9be453de25b34375c59e68dfdcc98c8d2806c330b12e18beb5981a8ee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Default:index.html.twig"));

        $__internal_9e97d25c7fd786c2c98b1a94e77c1005e2f697ae1c556632b6b8854158d2e3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e97d25c7fd786c2c98b1a94e77c1005e2f697ae1c556632b6b8854158d2e3a8->enter($__internal_9e97d25c7fd786c2c98b1a94e77c1005e2f697ae1c556632b6b8854158d2e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3ba9be453de25b34375c59e68dfdcc98c8d2806c330b12e18beb5981a8ee08->leave($__internal_3f3ba9be453de25b34375c59e68dfdcc98c8d2806c330b12e18beb5981a8ee08_prof);

        
        $__internal_9e97d25c7fd786c2c98b1a94e77c1005e2f697ae1c556632b6b8854158d2e3a8->leave($__internal_9e97d25c7fd786c2c98b1a94e77c1005e2f697ae1c556632b6b8854158d2e3a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5826fc0366ebdb088f18eaedb1e543e0ed95bf5fa487517ea74a385d420d5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5826fc0366ebdb088f18eaedb1e543e0ed95bf5fa487517ea74a385d420d5a3->enter($__internal_b5826fc0366ebdb088f18eaedb1e543e0ed95bf5fa487517ea74a385d420d5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8d1ac6b0c049b29abe0d0e1a5ebbaab305b1aa4b6cd2fc88706482b119a7e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d1ac6b0c049b29abe0d0e1a5ebbaab305b1aa4b6cd2fc88706482b119a7e8d->enter($__internal_c8d1ac6b0c049b29abe0d0e1a5ebbaab305b1aa4b6cd2fc88706482b119a7e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OCUserBundle:Security:login";
        
        $__internal_c8d1ac6b0c049b29abe0d0e1a5ebbaab305b1aa4b6cd2fc88706482b119a7e8d->leave($__internal_c8d1ac6b0c049b29abe0d0e1a5ebbaab305b1aa4b6cd2fc88706482b119a7e8d_prof);

        
        $__internal_b5826fc0366ebdb088f18eaedb1e543e0ed95bf5fa487517ea74a385d420d5a3->leave($__internal_b5826fc0366ebdb088f18eaedb1e543e0ed95bf5fa487517ea74a385d420d5a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c53de1548ca6bf4d4102877f47908f6061ad721050d87e600963eb4b0a87104e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53de1548ca6bf4d4102877f47908f6061ad721050d87e600963eb4b0a87104e->enter($__internal_c53de1548ca6bf4d4102877f47908f6061ad721050d87e600963eb4b0a87104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e06240174925529903e688f29f543596d543ef6355c2e9cf31374e3adea438d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06240174925529903e688f29f543596d543ef6355c2e9cf31374e3adea438d4->enter($__internal_e06240174925529903e688f29f543596d543ef6355c2e9cf31374e3adea438d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e06240174925529903e688f29f543596d543ef6355c2e9cf31374e3adea438d4->leave($__internal_e06240174925529903e688f29f543596d543ef6355c2e9cf31374e3adea438d4_prof);

        
        $__internal_c53de1548ca6bf4d4102877f47908f6061ad721050d87e600963eb4b0a87104e->leave($__internal_c53de1548ca6bf4d4102877f47908f6061ad721050d87e600963eb4b0a87104e_prof);

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
