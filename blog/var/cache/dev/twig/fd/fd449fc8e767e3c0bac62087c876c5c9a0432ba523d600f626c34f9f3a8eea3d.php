<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_334e8cec55b59171454216f6ed87d927b85fb316dc79da62512e5ded98a8917b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCUserBundle:Security:login.html.twig", 1);
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
        $__internal_54d45bd83e6fed48c7b686e2b44b20ad32c0673257762847af4f27231d74813b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d45bd83e6fed48c7b686e2b44b20ad32c0673257762847af4f27231d74813b->enter($__internal_54d45bd83e6fed48c7b686e2b44b20ad32c0673257762847af4f27231d74813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $__internal_9e13186c6a902a62b3c3b64c9a66537e74c06d3384d57338000ebb1bd638213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e13186c6a902a62b3c3b64c9a66537e74c06d3384d57338000ebb1bd638213d->enter($__internal_9e13186c6a902a62b3c3b64c9a66537e74c06d3384d57338000ebb1bd638213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d45bd83e6fed48c7b686e2b44b20ad32c0673257762847af4f27231d74813b->leave($__internal_54d45bd83e6fed48c7b686e2b44b20ad32c0673257762847af4f27231d74813b_prof);

        
        $__internal_9e13186c6a902a62b3c3b64c9a66537e74c06d3384d57338000ebb1bd638213d->leave($__internal_9e13186c6a902a62b3c3b64c9a66537e74c06d3384d57338000ebb1bd638213d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4679fe0f09ba304217b21711ddf27dc099d4524c4b1e754c09a98ae9bc223845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4679fe0f09ba304217b21711ddf27dc099d4524c4b1e754c09a98ae9bc223845->enter($__internal_4679fe0f09ba304217b21711ddf27dc099d4524c4b1e754c09a98ae9bc223845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54cebdd5820778a3f2bd2f9a547478883adcefc25a46925107beb1f35bcdeed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cebdd5820778a3f2bd2f9a547478883adcefc25a46925107beb1f35bcdeed8->enter($__internal_54cebdd5820778a3f2bd2f9a547478883adcefc25a46925107beb1f35bcdeed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OCUserBundle:Security:login";
        
        $__internal_54cebdd5820778a3f2bd2f9a547478883adcefc25a46925107beb1f35bcdeed8->leave($__internal_54cebdd5820778a3f2bd2f9a547478883adcefc25a46925107beb1f35bcdeed8_prof);

        
        $__internal_4679fe0f09ba304217b21711ddf27dc099d4524c4b1e754c09a98ae9bc223845->leave($__internal_4679fe0f09ba304217b21711ddf27dc099d4524c4b1e754c09a98ae9bc223845_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_449b0c38eaac9697fa7eae43c2bf8f777dae6fb905e36fc3c36c88f268dd3a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449b0c38eaac9697fa7eae43c2bf8f777dae6fb905e36fc3c36c88f268dd3a75->enter($__internal_449b0c38eaac9697fa7eae43c2bf8f777dae6fb905e36fc3c36c88f268dd3a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79f1c1bdfef48a4e9f5946bc7f496d7cd43814e824645d82c417a54a57531a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f1c1bdfef48a4e9f5946bc7f496d7cd43814e824645d82c417a54a57531a03->enter($__internal_79f1c1bdfef48a4e9f5946bc7f496d7cd43814e824645d82c417a54a57531a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Welcome to the Security:login page</h1>

    <form method=\"POST\">
        <label for=\"_username\">Entrez votre e-mail</label>
        <input type=\"text\" name=\"_username\" required>
        <label for=\"_password\">Entrez votre mot de passe</label>
        <input type=\"password\" name=\"_password\" required>        
        <label for=\"_remember_me\">Se souvenir de moi</label>
        <input type=\"checkbox\" name=\"_remember_me\">

        <button type=\"submit\">
            Se Connecter
        </button>

   
        
    
";
        
        $__internal_79f1c1bdfef48a4e9f5946bc7f496d7cd43814e824645d82c417a54a57531a03->leave($__internal_79f1c1bdfef48a4e9f5946bc7f496d7cd43814e824645d82c417a54a57531a03_prof);

        
        $__internal_449b0c38eaac9697fa7eae43c2bf8f777dae6fb905e36fc3c36c88f268dd3a75->leave($__internal_449b0c38eaac9697fa7eae43c2bf8f777dae6fb905e36fc3c36c88f268dd3a75_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <h1>Welcome to the Security:login page</h1>

    <form method=\"POST\">
        <label for=\"_username\">Entrez votre e-mail</label>
        <input type=\"text\" name=\"_username\" required>
        <label for=\"_password\">Entrez votre mot de passe</label>
        <input type=\"password\" name=\"_password\" required>        
        <label for=\"_remember_me\">Se souvenir de moi</label>
        <input type=\"checkbox\" name=\"_remember_me\">

        <button type=\"submit\">
            Se Connecter
        </button>

   
        
    
{% endblock %}
", "OCUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
