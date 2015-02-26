<?php

/* shorten.twig */
class __TwigTemplate_f49b26fdaa2d65e9f69a3ae07fea306dc33cbe47b53289b033850d3a0c52e5c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>your shortened link is: <a href=\"http://localhost:8000/s/";
        echo twig_escape_filter($this->env, (isset($context["shortUrlKey"]) ? $context["shortUrlKey"] : null), "html", null, true);
        echo "\">http://localhost:8000/s/";
        echo twig_escape_filter($this->env, (isset($context["shortUrlKey"]) ? $context["shortUrlKey"] : null), "html", null, true);
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "shorten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
