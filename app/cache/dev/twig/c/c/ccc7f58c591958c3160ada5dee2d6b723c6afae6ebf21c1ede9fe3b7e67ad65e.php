<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7413f1745cc60ed4b656f9607950ccbc29a84d4fe485181ccf28c1eef2fdad27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf49e593f0863d5e2d8bbae4326d4201e4f218b4dbcb922683c6eb53b2fc339c = $this->env->getExtension("native_profiler");
        $__internal_cf49e593f0863d5e2d8bbae4326d4201e4f218b4dbcb922683c6eb53b2fc339c->enter($__internal_cf49e593f0863d5e2d8bbae4326d4201e4f218b4dbcb922683c6eb53b2fc339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf49e593f0863d5e2d8bbae4326d4201e4f218b4dbcb922683c6eb53b2fc339c->leave($__internal_cf49e593f0863d5e2d8bbae4326d4201e4f218b4dbcb922683c6eb53b2fc339c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8faae9844741aae6a2db328e994751de0dcec1d0400349b937794c7920b7967 = $this->env->getExtension("native_profiler");
        $__internal_d8faae9844741aae6a2db328e994751de0dcec1d0400349b937794c7920b7967->enter($__internal_d8faae9844741aae6a2db328e994751de0dcec1d0400349b937794c7920b7967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d8faae9844741aae6a2db328e994751de0dcec1d0400349b937794c7920b7967->leave($__internal_d8faae9844741aae6a2db328e994751de0dcec1d0400349b937794c7920b7967_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d3cee406c995dbf27011a3e5463a397b6fd136ddadc096f2b430c3b06d6106 = $this->env->getExtension("native_profiler");
        $__internal_40d3cee406c995dbf27011a3e5463a397b6fd136ddadc096f2b430c3b06d6106->enter($__internal_40d3cee406c995dbf27011a3e5463a397b6fd136ddadc096f2b430c3b06d6106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40d3cee406c995dbf27011a3e5463a397b6fd136ddadc096f2b430c3b06d6106->leave($__internal_40d3cee406c995dbf27011a3e5463a397b6fd136ddadc096f2b430c3b06d6106_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ce052b0777b6528e8c74a31485d32a06aee39508eacc64dad79987f8d586706 = $this->env->getExtension("native_profiler");
        $__internal_7ce052b0777b6528e8c74a31485d32a06aee39508eacc64dad79987f8d586706->enter($__internal_7ce052b0777b6528e8c74a31485d32a06aee39508eacc64dad79987f8d586706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7ce052b0777b6528e8c74a31485d32a06aee39508eacc64dad79987f8d586706->leave($__internal_7ce052b0777b6528e8c74a31485d32a06aee39508eacc64dad79987f8d586706_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
