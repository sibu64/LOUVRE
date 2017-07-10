<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c741c5f6bc1a1a68320510fea59e2f31657fbe2195a68abf8bbfc1fc309ecc2d extends Twig_Template
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
        $__internal_64becb799518bddd65249233c6770480948bb6c0e94183127c7f78f66cdce5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64becb799518bddd65249233c6770480948bb6c0e94183127c7f78f66cdce5f3->enter($__internal_64becb799518bddd65249233c6770480948bb6c0e94183127c7f78f66cdce5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4419283db8322b3ce722aa7202882b009a8928c6a7fdc4c05fba24a8e91b8a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4419283db8322b3ce722aa7202882b009a8928c6a7fdc4c05fba24a8e91b8a4f->enter($__internal_4419283db8322b3ce722aa7202882b009a8928c6a7fdc4c05fba24a8e91b8a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_64becb799518bddd65249233c6770480948bb6c0e94183127c7f78f66cdce5f3->leave($__internal_64becb799518bddd65249233c6770480948bb6c0e94183127c7f78f66cdce5f3_prof);

        
        $__internal_4419283db8322b3ce722aa7202882b009a8928c6a7fdc4c05fba24a8e91b8a4f->leave($__internal_4419283db8322b3ce722aa7202882b009a8928c6a7fdc4c05fba24a8e91b8a4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
