<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_b1cdf7667e99c6cab16571c3da9de04b26345eb730e5585b734740fdf57840a8 extends Twig_Template
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
        $__internal_e7c8f169d59d27f0d16d4afcfab7600447bc37cfb840eb979431240bb5306bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c8f169d59d27f0d16d4afcfab7600447bc37cfb840eb979431240bb5306bb5->enter($__internal_e7c8f169d59d27f0d16d4afcfab7600447bc37cfb840eb979431240bb5306bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $__internal_a6e1f730d0290044df5cc60448a1bd1bda76c969d7c4a70d584dd91e2d43bfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e1f730d0290044df5cc60448a1bd1bda76c969d7c4a70d584dd91e2d43bfce->enter($__internal_a6e1f730d0290044df5cc60448a1bd1bda76c969d7c4a70d584dd91e2d43bfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c8f169d59d27f0d16d4afcfab7600447bc37cfb840eb979431240bb5306bb5->leave($__internal_e7c8f169d59d27f0d16d4afcfab7600447bc37cfb840eb979431240bb5306bb5_prof);

        
        $__internal_a6e1f730d0290044df5cc60448a1bd1bda76c969d7c4a70d584dd91e2d43bfce->leave($__internal_a6e1f730d0290044df5cc60448a1bd1bda76c969d7c4a70d584dd91e2d43bfce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11aaa049d48636664bcdea6deda05b114a1e1e6981dbe220cf10c2749672805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11aaa049d48636664bcdea6deda05b114a1e1e6981dbe220cf10c2749672805->enter($__internal_c11aaa049d48636664bcdea6deda05b114a1e1e6981dbe220cf10c2749672805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5765189c8eba41b6e603540d4a17e813f1c8d863c9875e246140f06b3ae7c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5765189c8eba41b6e603540d4a17e813f1c8d863c9875e246140f06b3ae7c28->enter($__internal_c5765189c8eba41b6e603540d4a17e813f1c8d863c9875e246140f06b3ae7c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OCUserBundle:Security:login";
        
        $__internal_c5765189c8eba41b6e603540d4a17e813f1c8d863c9875e246140f06b3ae7c28->leave($__internal_c5765189c8eba41b6e603540d4a17e813f1c8d863c9875e246140f06b3ae7c28_prof);

        
        $__internal_c11aaa049d48636664bcdea6deda05b114a1e1e6981dbe220cf10c2749672805->leave($__internal_c11aaa049d48636664bcdea6deda05b114a1e1e6981dbe220cf10c2749672805_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6b29b6eb4279412d7e64f42fc8b419a2a12c8148db402e58985cbbf14079f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6b29b6eb4279412d7e64f42fc8b419a2a12c8148db402e58985cbbf14079f0->enter($__internal_ac6b29b6eb4279412d7e64f42fc8b419a2a12c8148db402e58985cbbf14079f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c4259562cbc93d228c4653393ad3efc16fba084d5f2c077db99ac6ffa0a0df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4259562cbc93d228c4653393ad3efc16fba084d5f2c077db99ac6ffa0a0df9->enter($__internal_3c4259562cbc93d228c4653393ad3efc16fba084d5f2c077db99ac6ffa0a0df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c4259562cbc93d228c4653393ad3efc16fba084d5f2c077db99ac6ffa0a0df9->leave($__internal_3c4259562cbc93d228c4653393ad3efc16fba084d5f2c077db99ac6ffa0a0df9_prof);

        
        $__internal_ac6b29b6eb4279412d7e64f42fc8b419a2a12c8148db402e58985cbbf14079f0->leave($__internal_ac6b29b6eb4279412d7e64f42fc8b419a2a12c8148db402e58985cbbf14079f0_prof);

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
