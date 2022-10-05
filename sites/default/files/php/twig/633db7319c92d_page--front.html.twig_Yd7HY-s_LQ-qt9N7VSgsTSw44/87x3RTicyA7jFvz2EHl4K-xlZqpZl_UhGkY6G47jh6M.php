<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/hitDigital/page--front.html.twig */
class __TwigTemplate_0e1ec54927f714de94af24fcc88193a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

";
        // line 10
        $this->loadTemplate("@app/header/header.html.twig", "themes/hitDigital/page--front.html.twig", 10)->display($context);
        // line 11
        echo "
<main class= \"main-content\" data-content=\"intro\"> 
    <div class=\"menu-container\">
        <a class=\"menu-publicacao introducao\" href=\"./intro\" data-move-to=\"intro\">
            INTRODUÇÃO
        </a>
        <a  class=\"menu-publicacao\" href=\"./contato\" data-move-to=\"contato\">
            CONTATO
        </a>
    </div>

    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 22)) {
            // line 23
            echo "        <section class=\"container\" id=\"intro\">
            <div class=\"section-container\">
                <div class=\"title\">
                    <h3>Introdução</h3>
                </div>
                <div class=\"container-publicacao\">
                    ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </section>
        ";
        }
        // line 34
        echo "
        <section class=\"container\" id=\"contato\">
             <div class=\"section-container\">
                <div class=\"title\">
                    <h3>Contato</h3>
                </div>
                <div class=\"container-form\">
                    <form>
                        <div class=\"forms\">
                            <div class=\"forms-input\">
                                <input type=\"name\" class=\"form-control\" id=\"name\" aria-describedby=\"nameHelp\" placeholder=\"Nome\" required>
                            </div>
                            <div class=\"forms-input\">
                                <input type=\"email\" class=\"form-control\" id=\"Email\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
                            </div>
                        </div>    
                            <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"text\" placeholder=\"Mensagem\"></textarea>
                            <button type=\"submit\" class=\"btn\">Enviar</button>
                    </form>
                </div>
        </section>
    </div>
</main>



  <a class=\"topo\" title=\"Voltar para o topo\" href=\"#\">&#10148;</a>

  ";
        // line 63
        echo "  ";
        $this->loadTemplate("@app/footer/footer.html.twig", "themes/hitDigital/page--front.html.twig", 63)->display($context);
        // line 64
        echo "
<div>
";
    }

    public function getTemplateName()
    {
        return "themes/hitDigital/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  106 => 63,  76 => 34,  68 => 29,  60 => 23,  58 => 22,  45 => 11,  43 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/hitDigital/page--front.html.twig", "D:\\xamp\\htdocs\\hit\\drupal-9.4.6\\themes\\hitDigital\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 10, "if" => 22);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
