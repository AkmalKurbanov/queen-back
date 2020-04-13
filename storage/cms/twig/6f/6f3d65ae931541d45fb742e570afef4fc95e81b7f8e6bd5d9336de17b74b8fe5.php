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

/* D:\OSPanel\domains\asdasd/themes/queen/partials/site/header.htm */
class __TwigTemplate_55ac56c9e02cb59a428b9dbed8f4bbb78f6ce5428ac42e5e7a806b0a7348831d extends \Twig\Template
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
        echo "<div class=\"mmenu-nav\"></div>
<div class=\"flabHeader\" id=\"top\" style=\"background-image:url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header/headerBg.png");
        echo ")\">
  <div class=\"flabHamburger\"><span class=\"flabHamburger__item\"></span> <span class=\"flabHamburger__item\"></span>
    <span class=\"flabHamburger__item\"></span></div>
  <div class=\"container\">
    <div class=\"flabHeader__nav\">
      <div class=\"flabHeader__userPanel\">
        <ul>
          <li><a target=\"_blank\" href=\"#\"><i class=\"flabio-24-hours\"></i> Поддержка</a></li>
          <li><a target=\"_blank\" href=\"#\" id=\"login\"><i class=\"fal fa-lock-alt\"></i>Войти</a></li>
        </ul>
      </div>
      <div class=\"flabHeader__navWrap row\">
        <div class=\"col-xl-3 col-lg-2 col-md-2\">
          <div class=\"flabHeader__logo\">
            <a href=\"index.html\">
              <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/svg/logoHeader.svg");
        echo "\" alt=\"\">
            </a>
          </div>
        </div>
        <div class=\"col-xl-9 col-lg-10 col-md-10\">
          <div class=\"flabHeader__navList mmenu-js\">
            <ul>

              ";
        // line 25
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "records", [], "any", false, false, false, 25);
        // line 26
        echo "              ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "displayColumn", [], "any", false, false, false, 26);
        // line 27
        echo "              ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "noRecordsMessage", [], "any", false, false, false, 27);
        // line 28
        echo "              ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsPage", [], "any", false, false, false, 28);
        // line 29
        echo "              ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 29);
        // line 30
        echo "              ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 30);
        // line 31
        echo "
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 33
            echo "              <li><a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "item", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "              <li class=\" no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"flabSlider flabSlider--mainSlider swiper-container mainSlider-js\">
      <div class=\"flabSlider__wrap swiper-wrapper\">
        ";
        // line 45
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 45);
        // line 46
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 46);
        // line 47
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 47);
        // line 48
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 48);
        // line 49
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 49);
        // line 50
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 50);
        // line 51
        echo "
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 53
            echo "        <div class=\"flabSlider__item swiper-slide\">
          <div class=\"row\">
            <div class=\"col-xl-5 col-lg-5 col-md-5 order-md-2\">
              <div class=\"flabHeader__slideImgWrap wow zoomIn\">
                <div class=\"flabHeader__slideImg\"><img src=\"";
            // line 57
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, false, 57));
            echo "\" alt=\"\">
                </div>
              </div>
            </div>
            <div class=\"col-xl-7 col-lg-7 col-md-7 order-md-1\">
              <div class=\"flabHeader__slideDescWrap wow fadeIn\">
                <h2 class=\"flabHeader__slideCaption\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "heading", [], "any", false, false, false, 63), "html", null, true);
            echo "</h2>

                ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 65);
            echo "

                <div class=\"flabBtnWrap\">
                  <a target=\"_blank\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, false, 68), "html", null, true);
            echo "\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--btnMainSlider\">Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "        <p class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "`

      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\asdasd/themes/queen/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  188 => 77,  174 => 68,  168 => 65,  163 => 63,  154 => 57,  148 => 53,  143 => 52,  140 => 51,  137 => 50,  134 => 49,  131 => 48,  128 => 47,  125 => 46,  123 => 45,  113 => 37,  104 => 35,  94 => 33,  89 => 32,  86 => 31,  83 => 30,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  58 => 17,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mmenu-nav\"></div>
<div class=\"flabHeader\" id=\"top\" style=\"background-image:url({{'assets/images/header/headerBg.png'|theme}})\">
  <div class=\"flabHamburger\"><span class=\"flabHamburger__item\"></span> <span class=\"flabHamburger__item\"></span>
    <span class=\"flabHamburger__item\"></span></div>
  <div class=\"container\">
    <div class=\"flabHeader__nav\">
      <div class=\"flabHeader__userPanel\">
        <ul>
          <li><a target=\"_blank\" href=\"#\"><i class=\"flabio-24-hours\"></i> Поддержка</a></li>
          <li><a target=\"_blank\" href=\"#\" id=\"login\"><i class=\"fal fa-lock-alt\"></i>Войти</a></li>
        </ul>
      </div>
      <div class=\"flabHeader__navWrap row\">
        <div class=\"col-xl-3 col-lg-2 col-md-2\">
          <div class=\"flabHeader__logo\">
            <a href=\"index.html\">
              <img src=\"{{'assets/images/svg/logoHeader.svg'|theme}}\" alt=\"\">
            </a>
          </div>
        </div>
        <div class=\"col-xl-9 col-lg-10 col-md-10\">
          <div class=\"flabHeader__navList mmenu-js\">
            <ul>

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
      </div>
    </div>
    <div class=\"flabSlider flabSlider--mainSlider swiper-container mainSlider-js\">
      <div class=\"flabSlider__wrap swiper-wrapper\">
        {% set records = builderList.records %}
        {% set displayColumn = builderList.displayColumn %}
        {% set noRecordsMessage = builderList.noRecordsMessage %}
        {% set detailsPage = builderList.detailsPage %}
        {% set detailsKeyColumn = builderList.detailsKeyColumn %}
        {% set detailsUrlParameter = builderList.detailsUrlParameter %}

        {% for record in records %}
        <div class=\"flabSlider__item swiper-slide\">
          <div class=\"row\">
            <div class=\"col-xl-5 col-lg-5 col-md-5 order-md-2\">
              <div class=\"flabHeader__slideImgWrap wow zoomIn\">
                <div class=\"flabHeader__slideImg\"><img src=\"{{ record.img|media }}\" alt=\"\">
                </div>
              </div>
            </div>
            <div class=\"col-xl-7 col-lg-7 col-md-7 order-md-1\">
              <div class=\"flabHeader__slideDescWrap wow fadeIn\">
                <h2 class=\"flabHeader__slideCaption\">{{ record.heading }}</h2>

                {{ record.description|raw }}

                <div class=\"flabBtnWrap\">
                  <a target=\"_blank\" href=\"{{record.link}}\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--btnMainSlider\">Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        {% else %}
        <p class=\"no-data\">{{ noRecordsMessage }}</p>
        {% endfor %}`

      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</div>", "D:\\OSPanel\\domains\\asdasd/themes/queen/partials/site/header.htm", "");
    }
}
