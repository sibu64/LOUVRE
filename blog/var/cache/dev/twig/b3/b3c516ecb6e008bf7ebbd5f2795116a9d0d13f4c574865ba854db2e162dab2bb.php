<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c24b52a99e076f36143083598375da26bc08a9076ab245b0d3f0411be48be368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f709c610a7b8fa7f3d36f5709592350d254e3b4d25289e7e72b82dec286d754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f709c610a7b8fa7f3d36f5709592350d254e3b4d25289e7e72b82dec286d754->enter($__internal_9f709c610a7b8fa7f3d36f5709592350d254e3b4d25289e7e72b82dec286d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ef450e82370543915b88ec68ae0467b4b03e6c6839921f38470b508a1fad3593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef450e82370543915b88ec68ae0467b4b03e6c6839921f38470b508a1fad3593->enter($__internal_ef450e82370543915b88ec68ae0467b4b03e6c6839921f38470b508a1fad3593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_9f709c610a7b8fa7f3d36f5709592350d254e3b4d25289e7e72b82dec286d754->leave($__internal_9f709c610a7b8fa7f3d36f5709592350d254e3b4d25289e7e72b82dec286d754_prof);

        
        $__internal_ef450e82370543915b88ec68ae0467b4b03e6c6839921f38470b508a1fad3593->leave($__internal_ef450e82370543915b88ec68ae0467b4b03e6c6839921f38470b508a1fad3593_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_62210146e28afe89ad16b83bcf0fa40480ca17b8db7aea5fca6fba34e4b533b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62210146e28afe89ad16b83bcf0fa40480ca17b8db7aea5fca6fba34e4b533b7->enter($__internal_62210146e28afe89ad16b83bcf0fa40480ca17b8db7aea5fca6fba34e4b533b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_01ad442712cfbb701e323aba90f963e265220bc327b176a7142626cb9547cf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ad442712cfbb701e323aba90f963e265220bc327b176a7142626cb9547cf5a->enter($__internal_01ad442712cfbb701e323aba90f963e265220bc327b176a7142626cb9547cf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_01ad442712cfbb701e323aba90f963e265220bc327b176a7142626cb9547cf5a->leave($__internal_01ad442712cfbb701e323aba90f963e265220bc327b176a7142626cb9547cf5a_prof);

        
        $__internal_62210146e28afe89ad16b83bcf0fa40480ca17b8db7aea5fca6fba34e4b533b7->leave($__internal_62210146e28afe89ad16b83bcf0fa40480ca17b8db7aea5fca6fba34e4b533b7_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_718dbaad9d2d67b1d00f99fb6ba99a41a0e213902d03900a4705bf2b2fe31199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718dbaad9d2d67b1d00f99fb6ba99a41a0e213902d03900a4705bf2b2fe31199->enter($__internal_718dbaad9d2d67b1d00f99fb6ba99a41a0e213902d03900a4705bf2b2fe31199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e4937e574d37f5b1c09a283c1a24b362ef3faaebfc51a462ef041a86231c52ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4937e574d37f5b1c09a283c1a24b362ef3faaebfc51a462ef041a86231c52ff->enter($__internal_e4937e574d37f5b1c09a283c1a24b362ef3faaebfc51a462ef041a86231c52ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4937e574d37f5b1c09a283c1a24b362ef3faaebfc51a462ef041a86231c52ff->leave($__internal_e4937e574d37f5b1c09a283c1a24b362ef3faaebfc51a462ef041a86231c52ff_prof);

        
        $__internal_718dbaad9d2d67b1d00f99fb6ba99a41a0e213902d03900a4705bf2b2fe31199->leave($__internal_718dbaad9d2d67b1d00f99fb6ba99a41a0e213902d03900a4705bf2b2fe31199_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b6c39882f6aa838ba7e5a35508d23242b28b24c9e12a4e677147dd510d088a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c39882f6aa838ba7e5a35508d23242b28b24c9e12a4e677147dd510d088a16->enter($__internal_b6c39882f6aa838ba7e5a35508d23242b28b24c9e12a4e677147dd510d088a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ca726075761550b6e43a9687c33797f8b1b3554d4c87444e201d50c023760a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca726075761550b6e43a9687c33797f8b1b3554d4c87444e201d50c023760a62->enter($__internal_ca726075761550b6e43a9687c33797f8b1b3554d4c87444e201d50c023760a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_ca726075761550b6e43a9687c33797f8b1b3554d4c87444e201d50c023760a62->leave($__internal_ca726075761550b6e43a9687c33797f8b1b3554d4c87444e201d50c023760a62_prof);

        
        $__internal_b6c39882f6aa838ba7e5a35508d23242b28b24c9e12a4e677147dd510d088a16->leave($__internal_b6c39882f6aa838ba7e5a35508d23242b28b24c9e12a4e677147dd510d088a16_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dbf2a8ec1a19d1008b1bced13286afad62a05b0081f94b0da37ad72ea105b579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf2a8ec1a19d1008b1bced13286afad62a05b0081f94b0da37ad72ea105b579->enter($__internal_dbf2a8ec1a19d1008b1bced13286afad62a05b0081f94b0da37ad72ea105b579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_62ff64e6f189a450e900544762767ff3ecfa770f938712692dadaadd7aed4794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ff64e6f189a450e900544762767ff3ecfa770f938712692dadaadd7aed4794->enter($__internal_62ff64e6f189a450e900544762767ff3ecfa770f938712692dadaadd7aed4794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_62ff64e6f189a450e900544762767ff3ecfa770f938712692dadaadd7aed4794->leave($__internal_62ff64e6f189a450e900544762767ff3ecfa770f938712692dadaadd7aed4794_prof);

        
        $__internal_dbf2a8ec1a19d1008b1bced13286afad62a05b0081f94b0da37ad72ea105b579->leave($__internal_dbf2a8ec1a19d1008b1bced13286afad62a05b0081f94b0da37ad72ea105b579_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f678e77355e383904ee6d18f8435c2e6af83dfd29107dbbf67d93ddcf7a2ada3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f678e77355e383904ee6d18f8435c2e6af83dfd29107dbbf67d93ddcf7a2ada3->enter($__internal_f678e77355e383904ee6d18f8435c2e6af83dfd29107dbbf67d93ddcf7a2ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_876d6188b62032ff964296f9c7b486698921db7e411817229b56f9e16673ee0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876d6188b62032ff964296f9c7b486698921db7e411817229b56f9e16673ee0b->enter($__internal_876d6188b62032ff964296f9c7b486698921db7e411817229b56f9e16673ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_876d6188b62032ff964296f9c7b486698921db7e411817229b56f9e16673ee0b->leave($__internal_876d6188b62032ff964296f9c7b486698921db7e411817229b56f9e16673ee0b_prof);

        
        $__internal_f678e77355e383904ee6d18f8435c2e6af83dfd29107dbbf67d93ddcf7a2ada3->leave($__internal_f678e77355e383904ee6d18f8435c2e6af83dfd29107dbbf67d93ddcf7a2ada3_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d7574d1712ca3c6d83fc9ed53d64b32c2330b1b73954c06eac10a949207b1a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7574d1712ca3c6d83fc9ed53d64b32c2330b1b73954c06eac10a949207b1a21->enter($__internal_d7574d1712ca3c6d83fc9ed53d64b32c2330b1b73954c06eac10a949207b1a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5144cf18fcab475284a4876d0727e1415b5386dfbd74667bc82cdb6a3af3760a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5144cf18fcab475284a4876d0727e1415b5386dfbd74667bc82cdb6a3af3760a->enter($__internal_5144cf18fcab475284a4876d0727e1415b5386dfbd74667bc82cdb6a3af3760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5144cf18fcab475284a4876d0727e1415b5386dfbd74667bc82cdb6a3af3760a->leave($__internal_5144cf18fcab475284a4876d0727e1415b5386dfbd74667bc82cdb6a3af3760a_prof);

        
        $__internal_d7574d1712ca3c6d83fc9ed53d64b32c2330b1b73954c06eac10a949207b1a21->leave($__internal_d7574d1712ca3c6d83fc9ed53d64b32c2330b1b73954c06eac10a949207b1a21_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2c59222018c010a0d1d514aa42cd1a208095bf173f052103b47ee3d7895ddd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c59222018c010a0d1d514aa42cd1a208095bf173f052103b47ee3d7895ddd28->enter($__internal_2c59222018c010a0d1d514aa42cd1a208095bf173f052103b47ee3d7895ddd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c2366538d2785d17d67d007cf33e2b1ff70893d7813ec3dd70d1a4b6c51cb6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2366538d2785d17d67d007cf33e2b1ff70893d7813ec3dd70d1a4b6c51cb6d3->enter($__internal_c2366538d2785d17d67d007cf33e2b1ff70893d7813ec3dd70d1a4b6c51cb6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c2366538d2785d17d67d007cf33e2b1ff70893d7813ec3dd70d1a4b6c51cb6d3->leave($__internal_c2366538d2785d17d67d007cf33e2b1ff70893d7813ec3dd70d1a4b6c51cb6d3_prof);

        
        $__internal_2c59222018c010a0d1d514aa42cd1a208095bf173f052103b47ee3d7895ddd28->leave($__internal_2c59222018c010a0d1d514aa42cd1a208095bf173f052103b47ee3d7895ddd28_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a758759dcd49e325eb3c833130d2c47f3c24f32b3b66e8ddb30a5449d30d52b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a758759dcd49e325eb3c833130d2c47f3c24f32b3b66e8ddb30a5449d30d52b6->enter($__internal_a758759dcd49e325eb3c833130d2c47f3c24f32b3b66e8ddb30a5449d30d52b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_46f00d9ee74e4092e690e95db9e5aec955806e5b095d2ef121cc3b108582d081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f00d9ee74e4092e690e95db9e5aec955806e5b095d2ef121cc3b108582d081->enter($__internal_46f00d9ee74e4092e690e95db9e5aec955806e5b095d2ef121cc3b108582d081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_46f00d9ee74e4092e690e95db9e5aec955806e5b095d2ef121cc3b108582d081->leave($__internal_46f00d9ee74e4092e690e95db9e5aec955806e5b095d2ef121cc3b108582d081_prof);

        
        $__internal_a758759dcd49e325eb3c833130d2c47f3c24f32b3b66e8ddb30a5449d30d52b6->leave($__internal_a758759dcd49e325eb3c833130d2c47f3c24f32b3b66e8ddb30a5449d30d52b6_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7ca12843ec3b38876c1dee55c36806be4b30908b67b01bb6a364ba98196f9fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca12843ec3b38876c1dee55c36806be4b30908b67b01bb6a364ba98196f9fb5->enter($__internal_7ca12843ec3b38876c1dee55c36806be4b30908b67b01bb6a364ba98196f9fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_e4566b48743a2c6b1e5eb615e6543bddecbce4e45478de558edd8d000397c2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4566b48743a2c6b1e5eb615e6543bddecbce4e45478de558edd8d000397c2af->enter($__internal_e4566b48743a2c6b1e5eb615e6543bddecbce4e45478de558edd8d000397c2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4566b48743a2c6b1e5eb615e6543bddecbce4e45478de558edd8d000397c2af->leave($__internal_e4566b48743a2c6b1e5eb615e6543bddecbce4e45478de558edd8d000397c2af_prof);

        
        $__internal_7ca12843ec3b38876c1dee55c36806be4b30908b67b01bb6a364ba98196f9fb5->leave($__internal_7ca12843ec3b38876c1dee55c36806be4b30908b67b01bb6a364ba98196f9fb5_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a3f48940ec5604c0ce937f4e83a46b3422eeaff154dbaf12c43ac45dc9f0a46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f48940ec5604c0ce937f4e83a46b3422eeaff154dbaf12c43ac45dc9f0a46d->enter($__internal_a3f48940ec5604c0ce937f4e83a46b3422eeaff154dbaf12c43ac45dc9f0a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_32403968610f0324cc4c40764180458bc8561fbe796df8b2991c408a4435e38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32403968610f0324cc4c40764180458bc8561fbe796df8b2991c408a4435e38a->enter($__internal_32403968610f0324cc4c40764180458bc8561fbe796df8b2991c408a4435e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_32403968610f0324cc4c40764180458bc8561fbe796df8b2991c408a4435e38a->leave($__internal_32403968610f0324cc4c40764180458bc8561fbe796df8b2991c408a4435e38a_prof);

        
        $__internal_a3f48940ec5604c0ce937f4e83a46b3422eeaff154dbaf12c43ac45dc9f0a46d->leave($__internal_a3f48940ec5604c0ce937f4e83a46b3422eeaff154dbaf12c43ac45dc9f0a46d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
