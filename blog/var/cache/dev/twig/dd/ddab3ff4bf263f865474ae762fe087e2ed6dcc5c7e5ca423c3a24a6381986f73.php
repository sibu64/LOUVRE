<?php

/* ::base.html.twig */
class __TwigTemplate_168373775b7e98459a42141fd891efc60f474d7d95f56672954e55245650c7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9c124f637000780fa51417ad123bca4eca5d8fc296fa6f6e4f6789df1cba164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c124f637000780fa51417ad123bca4eca5d8fc296fa6f6e4f6789df1cba164->enter($__internal_a9c124f637000780fa51417ad123bca4eca5d8fc296fa6f6e4f6789df1cba164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_74ef09feef7c3e24267920b28ba8823939362603edad8c07e8e8fd02d4edc91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ef09feef7c3e24267920b28ba8823939362603edad8c07e8e8fd02d4edc91a->enter($__internal_74ef09feef7c3e24267920b28ba8823939362603edad8c07e8e8fd02d4edc91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        
    </body>
</html>
";
        
        $__internal_a9c124f637000780fa51417ad123bca4eca5d8fc296fa6f6e4f6789df1cba164->leave($__internal_a9c124f637000780fa51417ad123bca4eca5d8fc296fa6f6e4f6789df1cba164_prof);

        
        $__internal_74ef09feef7c3e24267920b28ba8823939362603edad8c07e8e8fd02d4edc91a->leave($__internal_74ef09feef7c3e24267920b28ba8823939362603edad8c07e8e8fd02d4edc91a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d7a19a8f4196ebffb7cfe4ba7dd1bfc72094ba640299958e47cc3ce3cbc1e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7a19a8f4196ebffb7cfe4ba7dd1bfc72094ba640299958e47cc3ce3cbc1e78->enter($__internal_8d7a19a8f4196ebffb7cfe4ba7dd1bfc72094ba640299958e47cc3ce3cbc1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2577cfec151342500f26dcfb5b510816bff4888176b86b5939d751f2bdfc8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2577cfec151342500f26dcfb5b510816bff4888176b86b5939d751f2bdfc8ff->enter($__internal_f2577cfec151342500f26dcfb5b510816bff4888176b86b5939d751f2bdfc8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Billet simple pour l'Alaska";
        
        $__internal_f2577cfec151342500f26dcfb5b510816bff4888176b86b5939d751f2bdfc8ff->leave($__internal_f2577cfec151342500f26dcfb5b510816bff4888176b86b5939d751f2bdfc8ff_prof);

        
        $__internal_8d7a19a8f4196ebffb7cfe4ba7dd1bfc72094ba640299958e47cc3ce3cbc1e78->leave($__internal_8d7a19a8f4196ebffb7cfe4ba7dd1bfc72094ba640299958e47cc3ce3cbc1e78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f19f609801edce0e714bb9c2987372fcfef0c2f0704ad3fd242aa6fa2a937859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19f609801edce0e714bb9c2987372fcfef0c2f0704ad3fd242aa6fa2a937859->enter($__internal_f19f609801edce0e714bb9c2987372fcfef0c2f0704ad3fd242aa6fa2a937859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2660d374f652d0ac0fe6d1f028c222a09a773d1cd8eafd815d8479fd295a213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660d374f652d0ac0fe6d1f028c222a09a773d1cd8eafd815d8479fd295a213d->enter($__internal_2660d374f652d0ac0fe6d1f028c222a09a773d1cd8eafd815d8479fd295a213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  
            <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=stylesheet type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Resources/css/billet.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2660d374f652d0ac0fe6d1f028c222a09a773d1cd8eafd815d8479fd295a213d->leave($__internal_2660d374f652d0ac0fe6d1f028c222a09a773d1cd8eafd815d8479fd295a213d_prof);

        
        $__internal_f19f609801edce0e714bb9c2987372fcfef0c2f0704ad3fd242aa6fa2a937859->leave($__internal_f19f609801edce0e714bb9c2987372fcfef0c2f0704ad3fd242aa6fa2a937859_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef10effc5ca8841372b058237e1cc99955366947cbc1268914747f75be1aa1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef10effc5ca8841372b058237e1cc99955366947cbc1268914747f75be1aa1e4->enter($__internal_ef10effc5ca8841372b058237e1cc99955366947cbc1268914747f75be1aa1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_156a5336d97778106458a0be06ed025f4ad5e600591bd331c92398732f4bc2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156a5336d97778106458a0be06ed025f4ad5e600591bd331c92398732f4bc2e8->enter($__internal_156a5336d97778106458a0be06ed025f4ad5e600591bd331c92398732f4bc2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3r0or8x36u7pn7kkcoa3549djkb1pc4sww7qo01ryiezdcsx\"></script>
";
        // line 15
        echo "        <script>tinymce.init({ selector:'.tinymce'});
        </script>        
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_156a5336d97778106458a0be06ed025f4ad5e600591bd331c92398732f4bc2e8->leave($__internal_156a5336d97778106458a0be06ed025f4ad5e600591bd331c92398732f4bc2e8_prof);

        
        $__internal_ef10effc5ca8841372b058237e1cc99955366947cbc1268914747f75be1aa1e4->leave($__internal_ef10effc5ca8841372b058237e1cc99955366947cbc1268914747f75be1aa1e4_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e32bc733a21f2063fe46b1cb59e4120dbe2debf67a5029e9032870cb5c3621e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e32bc733a21f2063fe46b1cb59e4120dbe2debf67a5029e9032870cb5c3621e->enter($__internal_9e32bc733a21f2063fe46b1cb59e4120dbe2debf67a5029e9032870cb5c3621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80ac1fef6706b5cfb5fa6c134d26a400991e724d95dab26a7251331c0c8e608d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ac1fef6706b5cfb5fa6c134d26a400991e724d95dab26a7251331c0c8e608d->enter($__internal_80ac1fef6706b5cfb5fa6c134d26a400991e724d95dab26a7251331c0c8e608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80ac1fef6706b5cfb5fa6c134d26a400991e724d95dab26a7251331c0c8e608d->leave($__internal_80ac1fef6706b5cfb5fa6c134d26a400991e724d95dab26a7251331c0c8e608d_prof);

        
        $__internal_9e32bc733a21f2063fe46b1cb59e4120dbe2debf67a5029e9032870cb5c3621e->leave($__internal_9e32bc733a21f2063fe46b1cb59e4120dbe2debf67a5029e9032870cb5c3621e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 21,  122 => 15,  119 => 13,  110 => 12,  98 => 9,  85 => 6,  67 => 5,  54 => 22,  52 => 21,  48 => 19,  46 => 12,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Billet simple pour l'Alaska{% endblock %}</title>
        {% block stylesheets %}  
            <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=stylesheet type=\"text/css\" href=\"{{asset('Resources/css/billet.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block javascripts %}
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3r0or8x36u7pn7kkcoa3549djkb1pc4sww7qo01ryiezdcsx\"></script>
{#        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>#}
        <script>tinymce.init({ selector:'.tinymce'});
        </script>        
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/blog/app/Resources/views/base.html.twig");
    }
}
