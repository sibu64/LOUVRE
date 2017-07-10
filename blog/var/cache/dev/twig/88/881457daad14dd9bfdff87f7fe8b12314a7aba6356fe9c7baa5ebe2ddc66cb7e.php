<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
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
        $__internal_7d698213bb595aa33f4abd1483ba71d74e9b32afb8460172d2b82cc3a4b6e9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d698213bb595aa33f4abd1483ba71d74e9b32afb8460172d2b82cc3a4b6e9bb->enter($__internal_7d698213bb595aa33f4abd1483ba71d74e9b32afb8460172d2b82cc3a4b6e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0658d8c4ccb4b52d5f094dcb5b080f403a2feab9eb68bdf5f673bf4707d16331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0658d8c4ccb4b52d5f094dcb5b080f403a2feab9eb68bdf5f673bf4707d16331->enter($__internal_0658d8c4ccb4b52d5f094dcb5b080f403a2feab9eb68bdf5f673bf4707d16331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <div id=\"alert\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 24
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " alert-dismissible\" role=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                            ";
                // line 27
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
</body>
</html>
";
        
        $__internal_7d698213bb595aa33f4abd1483ba71d74e9b32afb8460172d2b82cc3a4b6e9bb->leave($__internal_7d698213bb595aa33f4abd1483ba71d74e9b32afb8460172d2b82cc3a4b6e9bb_prof);

        
        $__internal_0658d8c4ccb4b52d5f094dcb5b080f403a2feab9eb68bdf5f673bf4707d16331->leave($__internal_0658d8c4ccb4b52d5f094dcb5b080f403a2feab9eb68bdf5f673bf4707d16331_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_778f8c166623977ee2f5a33ff30f35d043f4628339be57061b765ce1bc52c963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f8c166623977ee2f5a33ff30f35d043f4628339be57061b765ce1bc52c963->enter($__internal_778f8c166623977ee2f5a33ff30f35d043f4628339be57061b765ce1bc52c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e6a196e9f986e5ef7e67a4a642a78f2d7a1e95cfbe557adbdf8621666ebd0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6a196e9f986e5ef7e67a4a642a78f2d7a1e95cfbe557adbdf8621666ebd0b4->enter($__internal_7e6a196e9f986e5ef7e67a4a642a78f2d7a1e95cfbe557adbdf8621666ebd0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Billet simple pour l'Alaska";
        
        $__internal_7e6a196e9f986e5ef7e67a4a642a78f2d7a1e95cfbe557adbdf8621666ebd0b4->leave($__internal_7e6a196e9f986e5ef7e67a4a642a78f2d7a1e95cfbe557adbdf8621666ebd0b4_prof);

        
        $__internal_778f8c166623977ee2f5a33ff30f35d043f4628339be57061b765ce1bc52c963->leave($__internal_778f8c166623977ee2f5a33ff30f35d043f4628339be57061b765ce1bc52c963_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddac4bb1b22716e44b24db165cfb1fb7b57a89c59851f3c01699ae511ff44536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddac4bb1b22716e44b24db165cfb1fb7b57a89c59851f3c01699ae511ff44536->enter($__internal_ddac4bb1b22716e44b24db165cfb1fb7b57a89c59851f3c01699ae511ff44536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_84216bbd9201b015fb64061332e874d598224051eaae9afbdb8da90d9c7c60d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84216bbd9201b015fb64061332e874d598224051eaae9afbdb8da90d9c7c60d8->enter($__internal_84216bbd9201b015fb64061332e874d598224051eaae9afbdb8da90d9c7c60d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  
            <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=stylesheet type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Resources/css/billet.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_84216bbd9201b015fb64061332e874d598224051eaae9afbdb8da90d9c7c60d8->leave($__internal_84216bbd9201b015fb64061332e874d598224051eaae9afbdb8da90d9c7c60d8_prof);

        
        $__internal_ddac4bb1b22716e44b24db165cfb1fb7b57a89c59851f3c01699ae511ff44536->leave($__internal_ddac4bb1b22716e44b24db165cfb1fb7b57a89c59851f3c01699ae511ff44536_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cf65e2dcb8e974e4ab41d83b6d80d1897bf6ce4b7fb22ef2ecc6975c3afcda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf65e2dcb8e974e4ab41d83b6d80d1897bf6ce4b7fb22ef2ecc6975c3afcda1->enter($__internal_5cf65e2dcb8e974e4ab41d83b6d80d1897bf6ce4b7fb22ef2ecc6975c3afcda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1abe5977ae6ed2238631af86b8f2430728377eec5d2e945c3c70d6d8e5aa2158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abe5977ae6ed2238631af86b8f2430728377eec5d2e945c3c70d6d8e5aa2158->enter($__internal_1abe5977ae6ed2238631af86b8f2430728377eec5d2e945c3c70d6d8e5aa2158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3r0or8x36u7pn7kkcoa3549djkb1pc4sww7qo01ryiezdcsx\"></script>
            ";
        // line 15
        echo "            <script>tinymce.init({selector: '.tinymce'});
            </script>        
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_1abe5977ae6ed2238631af86b8f2430728377eec5d2e945c3c70d6d8e5aa2158->leave($__internal_1abe5977ae6ed2238631af86b8f2430728377eec5d2e945c3c70d6d8e5aa2158_prof);

        
        $__internal_5cf65e2dcb8e974e4ab41d83b6d80d1897bf6ce4b7fb22ef2ecc6975c3afcda1->leave($__internal_5cf65e2dcb8e974e4ab41d83b6d80d1897bf6ce4b7fb22ef2ecc6975c3afcda1_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed6310bc723907f21a31081dd16eda02b3ab3c8c7cf738d543de174f42108537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6310bc723907f21a31081dd16eda02b3ab3c8c7cf738d543de174f42108537->enter($__internal_ed6310bc723907f21a31081dd16eda02b3ab3c8c7cf738d543de174f42108537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad5cc50b2aad7e6b46ecd0bcc09c31893deafdcd064695e38dda632a41b0bb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5cc50b2aad7e6b46ecd0bcc09c31893deafdcd064695e38dda632a41b0bb8c->enter($__internal_ad5cc50b2aad7e6b46ecd0bcc09c31893deafdcd064695e38dda632a41b0bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad5cc50b2aad7e6b46ecd0bcc09c31893deafdcd064695e38dda632a41b0bb8c->leave($__internal_ad5cc50b2aad7e6b46ecd0bcc09c31893deafdcd064695e38dda632a41b0bb8c_prof);

        
        $__internal_ed6310bc723907f21a31081dd16eda02b3ab3c8c7cf738d543de174f42108537->leave($__internal_ed6310bc723907f21a31081dd16eda02b3ab3c8c7cf738d543de174f42108537_prof);

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
        return array (  172 => 32,  159 => 15,  156 => 13,  147 => 12,  135 => 9,  122 => 6,  104 => 5,  91 => 33,  89 => 32,  86 => 31,  80 => 30,  71 => 27,  62 => 24,  57 => 23,  53 => 22,  48 => 19,  46 => 12,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
            <script>tinymce.init({selector: '.tinymce'});
            </script>        
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}
    </head>
    <body>
        <div id=\"alert\">
            {% for key, flash in app.session.flashbag.all %}
                {% for flashMessage in flash %}
                    <div class=\"alert alert-{{ key }} alert-dismissible\" role=\"{{ key }}\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                            {{ flashMessage }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    {% block body %}{% endblock %}

</body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/blog/app/Resources/views/base.html.twig");
    }
}
