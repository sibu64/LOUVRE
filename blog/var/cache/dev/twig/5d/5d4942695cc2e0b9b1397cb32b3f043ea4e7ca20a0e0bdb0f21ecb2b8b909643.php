<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_fe7ee52135cc8f6d059105e39c3950db45f88bfcf9ff4ff0eec473cd93a67062 extends Twig_Template
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
        $__internal_e08c68c7c2bdf4d36b63e8eeb1d098df05169941de2f586c4e4bf484fbe8bdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08c68c7c2bdf4d36b63e8eeb1d098df05169941de2f586c4e4bf484fbe8bdc6->enter($__internal_e08c68c7c2bdf4d36b63e8eeb1d098df05169941de2f586c4e4bf484fbe8bdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_98186ee6148731e9fe32c2afe7626151dbbe1aaae306979ebc361d97b2a7db11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98186ee6148731e9fe32c2afe7626151dbbe1aaae306979ebc361d97b2a7db11->enter($__internal_98186ee6148731e9fe32c2afe7626151dbbe1aaae306979ebc361d97b2a7db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e08c68c7c2bdf4d36b63e8eeb1d098df05169941de2f586c4e4bf484fbe8bdc6->leave($__internal_e08c68c7c2bdf4d36b63e8eeb1d098df05169941de2f586c4e4bf484fbe8bdc6_prof);

        
        $__internal_98186ee6148731e9fe32c2afe7626151dbbe1aaae306979ebc361d97b2a7db11->leave($__internal_98186ee6148731e9fe32c2afe7626151dbbe1aaae306979ebc361d97b2a7db11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
