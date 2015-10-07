<?php

/* base.html.twig */
class __TwigTemplate_de38eb36438dd765d2adbe9f34b46a7de8e1a1eb21eb04ac56e88ecd62639eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad43a491baaa28b4390f945627c698f12f99367af07fc221699a78522e7bc65 = $this->env->getExtension("native_profiler");
        $__internal_3ad43a491baaa28b4390f945627c698f12f99367af07fc221699a78522e7bc65->enter($__internal_3ad43a491baaa28b4390f945627c698f12f99367af07fc221699a78522e7bc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3ad43a491baaa28b4390f945627c698f12f99367af07fc221699a78522e7bc65->leave($__internal_3ad43a491baaa28b4390f945627c698f12f99367af07fc221699a78522e7bc65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_791a7a2c0f80e23a2cacd0d688760436c5eb511371e9ab43f60c1717c3e1e0c2 = $this->env->getExtension("native_profiler");
        $__internal_791a7a2c0f80e23a2cacd0d688760436c5eb511371e9ab43f60c1717c3e1e0c2->enter($__internal_791a7a2c0f80e23a2cacd0d688760436c5eb511371e9ab43f60c1717c3e1e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_791a7a2c0f80e23a2cacd0d688760436c5eb511371e9ab43f60c1717c3e1e0c2->leave($__internal_791a7a2c0f80e23a2cacd0d688760436c5eb511371e9ab43f60c1717c3e1e0c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e453ff5f561e63372b5cf3563c692ffe4a70724f58b89a50c797b1f0b61187 = $this->env->getExtension("native_profiler");
        $__internal_47e453ff5f561e63372b5cf3563c692ffe4a70724f58b89a50c797b1f0b61187->enter($__internal_47e453ff5f561e63372b5cf3563c692ffe4a70724f58b89a50c797b1f0b61187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47e453ff5f561e63372b5cf3563c692ffe4a70724f58b89a50c797b1f0b61187->leave($__internal_47e453ff5f561e63372b5cf3563c692ffe4a70724f58b89a50c797b1f0b61187_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b39af3bb3f1871a080311792e607bbe152dcc19bbefe8aad469d0c1b6517ac = $this->env->getExtension("native_profiler");
        $__internal_b1b39af3bb3f1871a080311792e607bbe152dcc19bbefe8aad469d0c1b6517ac->enter($__internal_b1b39af3bb3f1871a080311792e607bbe152dcc19bbefe8aad469d0c1b6517ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1b39af3bb3f1871a080311792e607bbe152dcc19bbefe8aad469d0c1b6517ac->leave($__internal_b1b39af3bb3f1871a080311792e607bbe152dcc19bbefe8aad469d0c1b6517ac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c8e8561f32b527f4dfb1f9319c1b3c47f83fe39ab3d9bc4d36274d46055e817 = $this->env->getExtension("native_profiler");
        $__internal_2c8e8561f32b527f4dfb1f9319c1b3c47f83fe39ab3d9bc4d36274d46055e817->enter($__internal_2c8e8561f32b527f4dfb1f9319c1b3c47f83fe39ab3d9bc4d36274d46055e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c8e8561f32b527f4dfb1f9319c1b3c47f83fe39ab3d9bc4d36274d46055e817->leave($__internal_2c8e8561f32b527f4dfb1f9319c1b3c47f83fe39ab3d9bc4d36274d46055e817_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
