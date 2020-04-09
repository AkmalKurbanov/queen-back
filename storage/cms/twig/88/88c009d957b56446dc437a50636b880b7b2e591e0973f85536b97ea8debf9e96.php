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

/* /opt/lampp/htdocs/octobercms/themes/queen/partials/site/footer.htm */
class __TwigTemplate_13190c4c2b9a3b0ad2839ced4efcce07405933efb2370315069ef2765c89b606 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"flabFooter\" id=\"contacts\">
  <div class=\"flabFooter__top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-lg-3 col-md-12\">
          <div class=\"flabFooter__logo wow fadeInUp\" data-wow-duration=\"1.8s\">
            <a href=\"#\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/svg/logoFooter.svg");
        echo "\" alt=\"\"></a>
          </div>
        </div>
        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2s\">
            <h2 class=\"flabFooter__itemCap\">Навигация</h2>
            <ul class=\"flabFooter__nav\">

              ";
        // line 15
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "records", [], "any", false, false, false, 15);
        // line 16
        echo "              ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "displayColumn", [], "any", false, false, false, 16);
        // line 17
        echo "              ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "noRecordsMessage", [], "any", false, false, false, 17);
        // line 18
        echo "              ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsPage", [], "any", false, false, false, 18);
        // line 19
        echo "              ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 19);
        // line 20
        echo "              ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 20);
        // line 21
        echo "
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 23
            echo "              <li><a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "item", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "              <li class=\" no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </ul>
          </div>
        </div>
        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2.5s\">
            <h2 class=\"flabFooter__itemCap\">мы с соц.сетях</h2>
            <ul class=\"flabFooter__social\">
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-vk\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-google\"></i></a></li>
            </ul>
          </div>
        </div>

        ";
        // line 44
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "records", [], "any", false, false, false, 44);
        // line 45
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "displayColumn", [], "any", false, false, false, 45);
        // line 46
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "noRecordsMessage", [], "any", false, false, false, 46);
        // line 47
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "detailsPage", [], "any", false, false, false, 47);
        // line 48
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 48);
        // line 49
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 49);
        // line 50
        echo "
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 52
            echo "
        <div class=\"col-xl-3 col-lg-3 col-md-4\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2.8s\">
            <h2 class=\"flabFooter__itemCap\">Контакты</h2>
            <ul class=\"flabFooter__contacts\">
              <li><i class=\"far fa-map-marker-alt\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "place", [], "any", false, false, false, 57), "html", null, true);
            echo "</li>
              <li><i class=\"fal fa-mobile\"></i> <a target=\"_blank\"
                  href=\"tel:+";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "phone", [], "any", false, false, false, 59), "html", null, true);
            echo "\">+";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "phone", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
              </li>
              <li><i class=\"fal fa-envelope\"></i> <a target=\"_blank\"
                  href=\"mailto:";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "mail", [], "any", false, false, false, 62), "html", null, true);
            echo "  \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "mail", [], "any", false, false, false, 62), "html", null, true);
            echo "</a>
              </li>
            </ul>
          </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "        <p class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "`
      </div>
    </div>
  </div>
  <div class=\"flabFooter__bottom\">
    <div class=\"container\">
      <div class=\"flabFooter__bottomWrap\">
        <div class=\"flabFooter__copySite wow fadeInLeft\" data-wow-duration=\"1.8s\">
          <p>&copy; ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Queen Host</p>
        </div>
        <div class=\"flabFooter__copyDev wow fadeInRight\" data-wow-duration=\"3s\">
          <div class=\"flabCopyAg\">
            <iframe class=\"frame\" src=\"https://akmalkurbanov.github.io/copyright_Queen/white.html\"
              frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/octobercms/themes/queen/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  186 => 69,  177 => 68,  164 => 62,  156 => 59,  151 => 57,  144 => 52,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  127 => 47,  124 => 46,  121 => 45,  119 => 44,  100 => 27,  91 => 25,  81 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flabFooter\" id=\"contacts\">
  <div class=\"flabFooter__top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-lg-3 col-md-12\">
          <div class=\"flabFooter__logo wow fadeInUp\" data-wow-duration=\"1.8s\">
            <a href=\"#\"><img src=\"{{'assets/images/svg/logoFooter.svg'|theme}}\" alt=\"\"></a>
          </div>
        </div>
        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2s\">
            <h2 class=\"flabFooter__itemCap\">Навигация</h2>
            <ul class=\"flabFooter__nav\">

              {% set records = menu.records %}
              {% set displayColumn = menu.displayColumn %}
              {% set noRecordsMessage = menu.noRecordsMessage %}
              {% set detailsPage = menu.detailsPage %}
              {% set detailsKeyColumn = menu.detailsKeyColumn %}
              {% set detailsUrlParameter = menu.detailsUrlParameter %}

              {% for record in records %}
              <li><a href=\"#{{record.link}}\">{{record.item}}</a></li>
                {% else %}
              <li class=\" no-data\">{{ noRecordsMessage }}</li>
              {% endfor %}

            </ul>
          </div>
        </div>
        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2.5s\">
            <h2 class=\"flabFooter__itemCap\">мы с соц.сетях</h2>
            <ul class=\"flabFooter__social\">
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-vk\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a target=\"_blank\" href=\"#\"><i class=\"fab fa-google\"></i></a></li>
            </ul>
          </div>
        </div>

        {% set records = contacts.records %}
        {% set displayColumn = contacts.displayColumn %}
        {% set noRecordsMessage = contacts.noRecordsMessage %}
        {% set detailsPage = contacts.detailsPage %}
        {% set detailsKeyColumn = contacts.detailsKeyColumn %}
        {% set detailsUrlParameter = contacts.detailsUrlParameter %}

        {% for record in records %}

        <div class=\"col-xl-3 col-lg-3 col-md-4\">
          <div class=\"flabFooter__item wow fadeInUp\" data-wow-duration=\"2.8s\">
            <h2 class=\"flabFooter__itemCap\">Контакты</h2>
            <ul class=\"flabFooter__contacts\">
              <li><i class=\"far fa-map-marker-alt\"></i> {{ record.place }}</li>
              <li><i class=\"fal fa-mobile\"></i> <a target=\"_blank\"
                  href=\"tel:+{{ record.phone }}\">+{{ record.phone }}</a>
              </li>
              <li><i class=\"fal fa-envelope\"></i> <a target=\"_blank\"
                  href=\"mailto:{{ record.mail }}  \">{{ record.mail }}</a>
              </li>
            </ul>
          </div>
        </div>
        {% else %}
        <p class=\"no-data\">{{ noRecordsMessage }}</p>
        {% endfor %}`
      </div>
    </div>
  </div>
  <div class=\"flabFooter__bottom\">
    <div class=\"container\">
      <div class=\"flabFooter__bottomWrap\">
        <div class=\"flabFooter__copySite wow fadeInLeft\" data-wow-duration=\"1.8s\">
          <p>&copy; {{ \"now\"|date(\"Y\") }} Queen Host</p>
        </div>
        <div class=\"flabFooter__copyDev wow fadeInRight\" data-wow-duration=\"3s\">
          <div class=\"flabCopyAg\">
            <iframe class=\"frame\" src=\"https://akmalkurbanov.github.io/copyright_Queen/white.html\"
              frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "/opt/lampp/htdocs/octobercms/themes/queen/partials/site/footer.htm", "");
    }
}
