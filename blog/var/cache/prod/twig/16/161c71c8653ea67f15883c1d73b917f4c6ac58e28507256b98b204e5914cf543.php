<?php

/* OCUserBundle:Default:index.html.twig */
class __TwigTemplate_ba463aa64ebce959a4cde2bf00227fef535d018ac376aaf3390763bec321a219 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "OCUserBundle:Security:login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        return array (  48 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCUserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/UserBundle/Resources/views/Default/index.html.twig");
    }
}
