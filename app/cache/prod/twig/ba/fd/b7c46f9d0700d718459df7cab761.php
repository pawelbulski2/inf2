<?php

/* WebMainBundle::layout.html.twig */
class __TwigTemplate_bafdb7c46f9d0700d718459df7cab761 extends Twig_Template
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
        echo "<!DOCTYPE html 
\tPUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"pl\" lang=\"pl\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"Content-Language\" content=\"pl\" />
    <title>www.infouslugi.pl</title>
    <meta name=\"keywords\" content=\"\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"googlebot\" content=\"index,follow\" />
    <meta name=\"msnbot\" content=\"index,follow\" />
    <meta name=\"Robots\" content=\"index, follow, all\" />
    <meta name=\"revisit-after\" content=\"2 days\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js\" ></script> 
</head>
<body> 
    <div class=\"wrapper1\">
        <div class=\"wrapper2\">
            ";
        // line 21
        $this->env->loadTemplate("WebMainBundle::header.html.twig")->display($context);
        // line 22
        echo "            <div class=\"wrapper3\">
                ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>
            ";
        // line 27
        $this->env->loadTemplate("WebMainBundle::footer.html.twig")->display($context);
        // line 28
        echo "        </div>
    </div>
</body>
</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "WebMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  63 => 23,  55 => 28,  53 => 27,  50 => 26,  48 => 23,  45 => 22,  43 => 21,  34 => 15,  18 => 1,  29 => 5,  26 => 4,);
    }
}
