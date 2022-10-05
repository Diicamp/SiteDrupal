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

/* @app/header/headerMenu.html.twig */
class __TwigTemplate_588546f9c8e9f1e42d236b624bf9129d extends \Twig\Template
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
        // line 4
        echo "


<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css\"
  rel=\"stylesheet\" />

<script type=\"text/javascript\"
  src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js\">
</script>

<div class=\"collapse\" id=\"navbarToggleExternalContent9\">
  <div class=\"bg-light shadow-3 p-4 col text-center border d-flex justify-content-start flex-wrap\">
    ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuMain", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
  </div>
</div>

<!--HEADER-->
<div class=\"row cl-1 py-2 \">

<!--CONTAINER  -->
<div class=\"container-header p-3 d-flex align-items-center gap-4\">
  <!--LOGO-->
   <div>
      <div class=\"logo-principal\">
        <a href=\"#\">
          <img src=\"themes/hitDigital/img/logo.png \" alt=\"\">
        </a>
      </div>    
    </div>

    <nav aria-label=\"primaria\">
                <ul class=\"header-menu\">
                    <li><a href=\"#\">SOBRE</a></li>
                    <li><a href=\"#\">SERVIÇOS</a></li>
                    <li><a href=\"#\">TECNOLOGIAS</a></li>
                    <li><a href=\"#\">OUTSOURCING</a></li>
                    <li><a href=\"#\">GESTÃO REMOTA</a></li>
                    <li><a href=\"#\">CONTATO</a></li>
                </ul>
    </nav>

  </div>
   

</div>";
    }

    public function getTemplateName()
    {
        return "@app/header/headerMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@app/header/headerMenu.html.twig", "D:\\xamp\\htdocs\\hit\\drupal-9.4.6\\themes\\hitDigital\\templates\\header\\headerMenu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
