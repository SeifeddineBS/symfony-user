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

/* base.html.twig */
class __TwigTemplate_24c8777927a2dc75c826e564ca6a6e3cbf4cd962a7d12f38f2649a61e74c1a58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'StyleAfterTemplate' => [$this, 'block_StyleAfterTemplate'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
            'JsAfterTemplate' => [$this, 'block_JsAfterTemplate'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>
\t\t\t";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t\t</title>

\t\t<!-- Custom fonts for this template-->
\t\t";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "
\t\t";
        // line 27
        $this->displayBlock('StyleAfterTemplate', $context, $blocks);
        // line 28
        echo "\t</head>

\t<body
\t\tid=\"page-top\">

\t\t<!-- Page Wrapper -->
\t\t<div id=\"wrapper\">
\t\t\t";
        // line 35
        $this->displayBlock('sidebar', $context, $blocks);
        // line 172
        echo "
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div id=\"content\">
\t\t\t\t\t";
        // line 181
        $this->displayBlock('navbar', $context, $blocks);
        // line 396
        echo "

\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t";
        // line 399
        $this->displayBlock('content', $context, $blocks);
        // line 733
        echo "\t\t\t\t<!-- /.container-fluid -->

\t\t\t</div>

\t\t\t<!-- End of Main Content -->


\t\t</div>
\t\t<!-- End of Content Wrapper -->
\t\t<!-- Footer -->
\t\t";
        // line 743
        $this->displayBlock('footer', $context, $blocks);
        // line 752
        echo "\t\t<!-- End of Footer -->
\t</body>
</html></div><!-- End of Page Wrapper --><!-- Scroll to Top Button--><a class=\"scroll-to-top rounded\" href=\"#page-top\">
<i class=\"fas fa-angle-up\"></i></a>";
        // line 755
        $this->displayBlock('js', $context, $blocks);
        // line 771
        $this->displayBlock('JsAfterTemplate', $context, $blocks);
        echo "</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SB Admin 2 - Dashboard
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t\t<!-- Custom styles for this template-->
\t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/sb-admin-2.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 36
        echo "\t\t\t\t<!-- Sidebar -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t\t<i class=\"fas fa-laugh-wink\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Restoflex<sup>TANYT</sup>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\t\tInterface
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t\t<span>Components</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"cards.html\">Cards</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav Item - Utilities Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-wrench\"></i>
\t\t\t\t\t\t\t<span>Utilities</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Utilities:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\t\tAddons
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t<span>Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Login Screens:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"register.html\">Register</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
\t\t\t\t\t\t\t\t<div class=\"collapse-divider\"></div>
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Other Pages:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"404.html\">404 Page</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t\t";
        // line 132
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 133
            echo "
\t\t\t\t\t\t";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "idRole", [], "any", false, false, false, 134), "nomRole", [], "any", false, false, false, 134) == "Gérant")) {
                // line 135
                echo "
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 137
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEmployes");
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-chart-area\"></i>
\t\t\t\t\t\t\t\t\t<span>Employes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t";
        }
        // line 144
        echo "

\t\t\t\t\t<!-- Nav Item - Tables -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"tables.html\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t\t<button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 169
        echo "
\t\t\t\t</ul>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 182
        echo "\t\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_1.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_2.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_3.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t\t";
        // line 339
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 340
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "user", [], "any", false, false, false, 343), "nom", [], "any", false, false, false, 343), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 344, $this->source); })()), "user", [], "any", false, false, false, 344), "prenom", [], "any", false, false, false, 344), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile.svg"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 369
        echo "
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- Logout Modal-->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous allez déconnecter?</h5>
\t\t\t\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">êtes-vous sûr de vouloir vous déconnecter ?.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 387
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
        echo "\">Déconnexion</a>

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End of Topbar -->
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 399
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 400
        echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">


\t\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-download fa-sm text-white-50\"></i>
\t\t\t\t\t\t\t\tGenerate Report</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-primary shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEarnings (Monthly)</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-success shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEarnings (Annual)</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-info shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pending Requests Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-warning shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPending Requests</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Area Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-area\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myAreaChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pie Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-pie pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myPieChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 text-center small\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDirect
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tReferral
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Content Column -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Project Card Example -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Server Migration
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">20%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Sales Tracking
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">40%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Customer Database
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">60%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Payout Details
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">80%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Account Setup
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">Complete!</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Color System -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tPrimary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#4e73df</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-success text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSuccess
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#1cc88a</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-info text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#36b9cc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-warning text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tWarning
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#f6c23e</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-danger text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDanger
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#e74a3b</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-secondary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSecondary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#858796</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-light text-black shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tLight
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-black-50 small\">#f8f9fc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-dark text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDark
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#5a5c69</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Illustrations -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_posting_photo.svg\" alt=\" "), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Add some quality, svg illustrations to your project courtesy of
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        constantly updated collection of beautiful svg images that you can use
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        completely free and without attribution!</p>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        unDraw &rarr;</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Approach -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        CSS bloat and poor page performance. Custom CSS classes are used to create
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        custom components and custom utility classes.</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Before working with this theme, you should become familiar with the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Bootstrap framework, especially the utility classes.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 743
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 744
        echo "\t\t\t<footer class=\"sticky-footer bg-white\">
\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t<div class=\"copyright text-center my-auto\">
\t\t\t\t\t\t<span>Copyright &copy; BY TANYT 2022</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 755
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 756
        echo "<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level plugins -->
<script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1066 => 771,  1062 => 770,  1056 => 767,  1050 => 764,  1044 => 761,  1038 => 758,  1034 => 757,  1031 => 756,  1021 => 755,  1004 => 744,  994 => 743,  954 => 703,  649 => 400,  639 => 399,  620 => 387,  600 => 369,  573 => 345,  569 => 344,  565 => 343,  561 => 342,  557 => 340,  555 => 339,  525 => 312,  511 => 301,  497 => 290,  387 => 182,  377 => 181,  365 => 169,  344 => 144,  341 => 143,  332 => 137,  328 => 135,  326 => 134,  323 => 133,  321 => 132,  223 => 36,  213 => 35,  195 => 27,  183 => 24,  174 => 19,  164 => 18,  144 => 13,  132 => 771,  130 => 755,  125 => 752,  123 => 743,  111 => 733,  109 => 399,  104 => 396,  102 => 181,  91 => 172,  89 => 35,  80 => 28,  78 => 27,  75 => 26,  73 => 18,  68 => 15,  66 => 13,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>
\t\t\t{% block title %}SB Admin 2 - Dashboard
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Custom fonts for this template-->
\t\t{% block css%}
\t\t\t<link href=\"{{asset('back-office/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t\t<!-- Custom styles for this template-->
\t\t\t<link href=\"{{asset('back-office/css/sb-admin-2.min.css')}} \" rel=\"stylesheet\">
\t\t{% endblock %}

\t\t{% block StyleAfterTemplate %}{% endblock StyleAfterTemplate %}
\t</head>

\t<body
\t\tid=\"page-top\">

\t\t<!-- Page Wrapper -->
\t\t<div id=\"wrapper\">
\t\t\t{%block sidebar %}
\t\t\t\t<!-- Sidebar -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t\t<i class=\"fas fa-laugh-wink\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Restoflex<sup>TANYT</sup>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\t\tInterface
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t\t<span>Components</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"cards.html\">Cards</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav Item - Utilities Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-wrench\"></i>
\t\t\t\t\t\t\t<span>Utilities</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Utilities:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\t\tAddons
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t<span>Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Login Screens:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"register.html\">Register</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
\t\t\t\t\t\t\t\t<div class=\"collapse-divider\"></div>
\t\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Other Pages:</h6>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"404.html\">404 Page</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t\t\t\t\t{% if app.user.idRole.nomRole==\"Gérant\"%}

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('listEmployes') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-chart-area\"></i>
\t\t\t\t\t\t\t\t\t<span>Employes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}


\t\t\t\t\t<!-- Nav Item - Tables -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"tables.html\">
\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t<hr
\t\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t\t<button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
\t\t\t\t\t</div>

\t\t\t\t\t{#<!-- Sidebar Message -->
\t\t\t\t\t\t\t\t\t\t            <div class=\"sidebar-card\">
\t\t\t\t\t\t\t\t\t\t                <img class=\"sidebar-card-illustration mb-2\" src=\"{{asset('back-office/img/undraw_rocket.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t                <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
\t\t\t\t\t\t\t\t\t\t                <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
\t\t\t\t\t\t\t\t\t\t            </div>#}

\t\t\t\t</ul>
\t\t\t{% endblock %}

\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div id=\"content\">
\t\t\t\t\t{% block navbar%}
\t\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back-office/img/undraw_profile_1.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back-office/img/undraw_profile_2.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back-office/img/undraw_profile_3.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"{{asset ('#')}}\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom }}</span>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"{{asset('back-office/img/undraw_profile.svg')}}\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- Logout Modal-->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous allez déconnecter?</h5>
\t\t\t\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">êtes-vous sûr de vouloir vous déconnecter ?.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('deconnexion') }}\">Déconnexion</a>

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End of Topbar -->
\t\t\t\t{% endblock %}


\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t{% block content %}
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">


\t\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-download fa-sm text-white-50\"></i>
\t\t\t\t\t\t\t\tGenerate Report</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-primary shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEarnings (Monthly)</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-success shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEarnings (Annual)</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-info shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pending Requests Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-warning shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPending Requests</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Area Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-area\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myAreaChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pie Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-pie pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myPieChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 text-center small\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDirect
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tReferral
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Content Column -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Project Card Example -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Server Migration
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">20%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Sales Tracking
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">40%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Customer Database
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">60%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Payout Details
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">80%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Account Setup
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">Complete!</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Color System -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tPrimary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#4e73df</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-success text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSuccess
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#1cc88a</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-info text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#36b9cc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-warning text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tWarning
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#f6c23e</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-danger text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDanger
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#e74a3b</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-secondary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSecondary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#858796</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-light text-black shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tLight
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-black-50 small\">#f8f9fc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-dark text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDark
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#5a5c69</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Illustrations -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"{{asset('back-office/img/undraw_posting_photo.svg\" alt=\" ')}}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Add some quality, svg illustrations to your project courtesy of
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        constantly updated collection of beautiful svg images that you can use
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        completely free and without attribution!</p>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        unDraw &rarr;</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Approach -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        CSS bloat and poor page performance. Custom CSS classes are used to create
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        custom components and custom utility classes.</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Before working with this theme, you should become familiar with the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Bootstrap framework, especially the utility classes.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t<!-- /.container-fluid -->

\t\t\t</div>

\t\t\t<!-- End of Main Content -->


\t\t</div>
\t\t<!-- End of Content Wrapper -->
\t\t<!-- Footer -->
\t\t{% block footer %}
\t\t\t<footer class=\"sticky-footer bg-white\">
\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t<div class=\"copyright text-center my-auto\">
\t\t\t\t\t\t<span>Copyright &copy; BY TANYT 2022</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t{% endblock %}
\t\t<!-- End of Footer -->
\t</body>
</html></div><!-- End of Page Wrapper --><!-- Scroll to Top Button--><a class=\"scroll-to-top rounded\" href=\"#page-top\">
<i class=\"fas fa-angle-up\"></i></a>{% block js%}
<!-- Bootstrap core JavaScript-->
<script src=\"{{asset('back-office/vendor/jquery/jquery.min.js')}}\"></script>
<script src=\"{{asset('back-office/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{asset('back-office/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{asset('back-office/js/sb-admin-2.min.js')}}\"></script>

<!-- Page level plugins -->
<script src=\"{{asset('back-office/vendor/chart.js/Chart.min.js')}}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{asset('back-office/js/demo/chart-area-demo.js')}}\"></script>
<script src=\"{{asset('back-office/js/demo/chart-pie-demo.js')}}\"></script>{% endblock %}{% block JsAfterTemplate %}{% endblock JsAfterTemplate %}</body></html>
", "base.html.twig", "C:\\Users\\SeifBS\\Documents\\GitHub\\symfony-amir\\templates\\base.html.twig");
    }
}
