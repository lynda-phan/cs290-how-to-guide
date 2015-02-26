<?php

/* layout.twig */
class __TwigTemplate_944afb19be7aadfc34596e397ff966bf2db21a24130ca167c02e88b82b747d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 8,  28 => 7,  20 => 1,);
    }
}
