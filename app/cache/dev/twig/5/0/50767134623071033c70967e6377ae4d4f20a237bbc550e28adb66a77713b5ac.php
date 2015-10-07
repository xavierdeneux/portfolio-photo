<?php

/* XavSiteBundle:Default:index.html.twig */
class __TwigTemplate_3e92af099bba271377954f5a15e5af835c0b5376f00bc6fdb16568f7bd8c8635 extends Twig_Template
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
        $__internal_aaa8e8a103746abff3f47c4c9c73b7d018f07953e8eb22f137d98049a561f8ec = $this->env->getExtension("native_profiler");
        $__internal_aaa8e8a103746abff3f47c4c9c73b7d018f07953e8eb22f137d98049a561f8ec->enter($__internal_aaa8e8a103746abff3f47c4c9c73b7d018f07953e8eb22f137d98049a561f8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "XavSiteBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_aaa8e8a103746abff3f47c4c9c73b7d018f07953e8eb22f137d98049a561f8ec->leave($__internal_aaa8e8a103746abff3f47c4c9c73b7d018f07953e8eb22f137d98049a561f8ec_prof);

    }

    public function getTemplateName()
    {
        return "XavSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
