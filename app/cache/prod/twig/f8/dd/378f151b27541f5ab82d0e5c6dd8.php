<?php

/* WebMainBundle:Default:index.html.twig */
class __TwigTemplate_f8dd378f151b27541f5ab82d0e5c6dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMainBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"index\">
    <ul>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "category"));
        foreach ($context['_seq'] as $context["_key"] => $context["top"]) {
            // line 8
            echo "        <li class=\"category block\">
            <a href=\"\">
                <span class=\"photo block margin0auto center\"><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/category/" . $this->getAttribute($this->getContext($context, "top"), "photo"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "top"), "name"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "top"), "name"), "html", null, true);
            echo "\"/></span>
                <span class=\"test name block center\"><strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "top"), "name"), "html", null, true);
            echo "</strong></span>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  49 => 11,  41 => 10,  37 => 8,  33 => 7,  29 => 5,  26 => 4,);
    }
}
