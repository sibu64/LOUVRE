<?php

/* OCBlogBundle:Episode:edit.html.twig */
class __TwigTemplate_e62c46dbc5d04367a085d4c3b80d1beeda8159f8e4054e852a0c553c8b84c7b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Episode:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab4e82607f191a88a2f95e8cc876af193438a266515c31ef52b41cee0c18663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab4e82607f191a88a2f95e8cc876af193438a266515c31ef52b41cee0c18663->enter($__internal_6ab4e82607f191a88a2f95e8cc876af193438a266515c31ef52b41cee0c18663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:edit.html.twig"));

        $__internal_f22defa8976090419aa9cbf259fd9c3c561e72b2d19cc212c9995e21219c2288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22defa8976090419aa9cbf259fd9c3c561e72b2d19cc212c9995e21219c2288->enter($__internal_f22defa8976090419aa9cbf259fd9c3c561e72b2d19cc212c9995e21219c2288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab4e82607f191a88a2f95e8cc876af193438a266515c31ef52b41cee0c18663->leave($__internal_6ab4e82607f191a88a2f95e8cc876af193438a266515c31ef52b41cee0c18663_prof);

        
        $__internal_f22defa8976090419aa9cbf259fd9c3c561e72b2d19cc212c9995e21219c2288->leave($__internal_f22defa8976090419aa9cbf259fd9c3c561e72b2d19cc212c9995e21219c2288_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1063e03f8a8eb90dab98fc4d1bf09775bcef3b478369042c4ed3f99552704d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1063e03f8a8eb90dab98fc4d1bf09775bcef3b478369042c4ed3f99552704d4f->enter($__internal_1063e03f8a8eb90dab98fc4d1bf09775bcef3b478369042c4ed3f99552704d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32005740d37445ff57ed1a5cef1de00b26eebb5fcfb15b97b9f9b58e3f961aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32005740d37445ff57ed1a5cef1de00b26eebb5fcfb15b97b9f9b58e3f961aa1->enter($__internal_32005740d37445ff57ed1a5cef1de00b26eebb5fcfb15b97b9f9b58e3f961aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Modifier un épisode</h1>
         
        <div>

        <ul style=\"background-color: transparent;\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <li> 
            <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12  btn btn-block btn-primary text-center\" style=\"margin-bottom:10px;";
        // line 14
        echo "\" value=\"Modifier\" />
        </li>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
        
        
            <li>
                <a  href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info text-center\" style=\"margin-bottom:10px;padding-left:40px; \">Retour à la liste</a>
            </li>
            <li>
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-danger text-center\" value=\"Supprimer\"/>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>
        </div>
    </div>
    
";
        
        $__internal_32005740d37445ff57ed1a5cef1de00b26eebb5fcfb15b97b9f9b58e3f961aa1->leave($__internal_32005740d37445ff57ed1a5cef1de00b26eebb5fcfb15b97b9f9b58e3f961aa1_prof);

        
        $__internal_1063e03f8a8eb90dab98fc4d1bf09775bcef3b478369042c4ed3f99552704d4f->leave($__internal_1063e03f8a8eb90dab98fc4d1bf09775bcef3b478369042c4ed3f99552704d4f_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Episode:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  84 => 23,  78 => 20,  71 => 16,  67 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Modifier un épisode</h1>
         
        <div>

        <ul style=\"background-color: transparent;\">

        {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <li> 
            <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12  btn btn-block btn-primary text-center\" style=\"margin-bottom:10px;{#margin-left:40px;padding-left:40px;#}{#margin-left:40px;#}\" value=\"Modifier\" />
        </li>
        {{ form_end(edit_form) }}
        
        
            <li>
                <a  href=\"{{ path('admin_episode_index') }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info text-center\" style=\"margin-bottom:10px;padding-left:40px; \">Retour à la liste</a>
            </li>
            <li>
                {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-danger text-center\" value=\"Supprimer\"/>
                {{ form_end(delete_form) }}
            </li>
        </ul>
        </div>
    </div>
    
{% endblock %}
", "OCBlogBundle:Episode:edit.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/edit.html.twig");
    }
}
