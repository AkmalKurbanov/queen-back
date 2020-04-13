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

/* D:\OSPanel\domains\queen-back/themes/queen/pages/home.htm */
class __TwigTemplate_5e522a9423c0e9c2c75eee83f9d6e60a3d8b32d3ee0296bb5a1a7b6814d3815b extends \Twig\Template
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
        echo "<div class=\"domain-selection\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Огромный выбор и лучшие цены на регистрацию и продление</h3>
    <h2 class=\"flabCaption__secondCap\">ПОДБЕРИТЕ ДОМЕННОЕ ИМЯ</h2>
  </div>
  <div class=\"container\">
    <form action=\"\" class=\"form\">
      <div class=\"form__input\">
        <i class=\"fal fa-search\"></i>
        <input type=\"text\">
      </div>
      <div class=\"flabBtnWrap\">
        <button class=\"flabBtnWrap__btn\" type=\"submit\">поиск домена</button>
      </div>
    </form>
    <div class=\"domain-selection__success domain-info\">
      <p>
        <span>queen.kg</span> свободен для регистрации.
      </p>
      <div class=\"flabBtnWrap\">
        <a class=\"flabBtnWrap__btn\" href=\"#\">купить домен</a>
      </div>
    </div>
    <div class=\"domain-selection__success domain-info\">
      <p>
        <span>queen.kg</span> уже занят. Посмотреть информацию о домене.
      </p>
      <br>
      <p>Вы можете проверить:</p>
      <br>
      <div class=\"flabDetailedDesc\">
        <table class=\"wow fadeInRight\">
          <tbody>
            <tr>
              <td data-header-title=\"Домен\">queen.kg</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.ru</td>
              <td data-header-title=\"Статус\">Свободно</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.com</td>
              <td data-header-title=\"Статус\">Свободно</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.org</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.info</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.net</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class=\"flabAbout\" id=\"about\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Queen Host</h3>
    <h2 class=\"flabCaption__secondCap\">О компании</h2>
  </div>
  
  ";
        // line 88
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "records", [], "any", false, false, false, 88);
        // line 89
        echo "  ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "displayColumn", [], "any", false, false, false, 89);
        // line 90
        echo "  ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "noRecordsMessage", [], "any", false, false, false, 90);
        // line 91
        echo "  ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "detailsPage", [], "any", false, false, false, 91);
        // line 92
        echo "  ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 92);
        // line 93
        echo "  ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 93);
        // line 94
        echo "

  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 97
            echo "
  <div class=\"flabAbout__desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"flabAbout__imgWrap order-md-1 wow fadeInRight\">
          <img src=\"";
            // line 102
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, false, 102));
            echo "\" alt=\"\">
        </div>
        <div class=\"col-xl-8 col-lg-8 order-md-2 wow fadeInLeft\" data-wow-duration=\"1.8s\">
          ";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 105);
            echo "
        </div>
      </div>
    </div>
  </div>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "  <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "</div>
<div class=\"flabAdvantages\" id=\"advantages\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Почему выбирают нас</h3>
    <h2 class=\"flabCaption__secondCap\">Преимущества нашей площадки</h2>
  </div>
  <div class=\"container\">
    <div class=\"flabAdvantages__list\">
      <div class=\"row\">

        ";
        // line 124
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "records", [], "any", false, false, false, 124);
        // line 125
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "displayColumn", [], "any", false, false, false, 125);
        // line 126
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "noRecordsMessage", [], "any", false, false, false, 126);
        // line 127
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsPage", [], "any", false, false, false, 127);
        // line 128
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 128);
        // line 129
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 129);
        // line 130
        echo "

        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 133
            echo "
        <div class=\"col-xl-6 col-lg-6\">
          <div class=\"flabAdvantages__item wow fadeInLeft\" data-wow-duration=\"1s\">
            <div class=\"flabAdvantages__icon\"><i class=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "icon", [], "any", false, false, false, 136), "html", null, true);
            echo "\"></i></div>
            <div class=\"flabAdvantages__desc\">
              <h2 class=\"flabAdvantages__itemCaption\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 138), "html", null, true);
            echo "</h2>
              ";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 139);
            echo "
              
            </div>
          </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"flabRate\" id=\"rate\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Мы предлагаем вам</h3>
    <h2 class=\"flabCaption__secondCap\">Базовые тарифы на хостинг</h2>
  </div>
  <div class=\"container\">
    <ul class=\"flabRate__choosePanel nav nav-tabs wow fadeInUp\" role=\"tablist\">
      <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#mounth\" role=\"tab\" data-toggle=\"tab\">Ежемесячно</a>
      </li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"#year\" role=\"tab\" data-toggle=\"tab\">Годовой</a></li>
    </ul>
    <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"mounth\">
        <div class=\"flabRate__list\">
          <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--firstRate\">
                    <img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/svg/rate/rate1.svg");
        echo "\" alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Базовый</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">500</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--secondRate\"><img src=\"images/svg/rate/rate2.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">стандарт</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">1500</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"year\">
        <div class=\"flabRate__list\">
          <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--firstRate\"><img src=\"images/svg/rate/rate1.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Базовый</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">1000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--secondRate\"><img src=\"images/svg/rate/rate2.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">стандарт</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">3000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">4000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"flabRate__additional\">
      <p>Цены представлены без учета налогов НСП и НДС</p>
    </div>
  </div>
</div>
<div class=\"flabDetailedDesc\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Подробное описание</h3>
    <h2 class=\"flabCaption__secondCap\">ВЫБЕРИТЕ ТАРИФНЫЙ ПЛАН</h2>
  </div>
  <div class=\"container\">

    ";
        // line 348
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["tarifs"] ?? null), "records", [], "any", false, false, false, 348);
        // line 349
        echo "
    <div class=\"flabDetailedDesc__rateTable wow fadeInLeft\">
      <table>
        <tr>
          <td rowspan=\"3\" colspan=\"2\">
            <div class=\"flabDetailedDesc__logo\">
              <div class=\"flabDetailedDesc__logoWrap\">
                <img src=\"";
        // line 356
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/svg/logoWithout.svg");
        echo "\" alt=\"\">
              </div>
            </div>
          </td>
          ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 361
            echo "          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 363), "html", null, true);
            echo "</h2>
            </div>
          </th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "        </tr>
        <tr>
          ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 370
            echo "          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">";
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price_month", [], "any", false, false, false, 373), "html", null, true);
            echo "</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price_year", [], "any", false, false, false, 381), "html", null, true);
            echo "</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          </td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "        </tr>
        <tr>
          ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 391
            echo "          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "        </tr>
      </table>

    </div>
    <table class=\"wow fadeInRight\">
      <thead>
        <tr>
          <th>Посещений в месяц</th>
          ";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 405
            echo "          <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "visits", [], "any", false, false, false, 405), "html", null, true);
            echo "</th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Количество сайтов\">Всего сайтов</td>
          ";
        // line 412
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 413
            echo "          <td data-header-title=\"Базовый\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "sites", [], "any", false, false, false, 413), "html", null, true);
            echo "</td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "        </tr>
        <tr>
          <td data-header-title=\"Объем\">Дисковое пространство</td>
          ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 419
            echo "          <td data-header-title=\"Базовый\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "disk", [], "any", false, false, false, 419), "html", null, true);
            echo "</td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Импортированный SSL</td>
          ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 425
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "ssl", [], "any", false, false, false, 425) == 1)) {
                // line 426
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 428
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 430
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "        </tr>
        <tr>
          <td data-header-title=\"Часы работы\">Техподдержка 24/7</td>
          ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 435
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "support", [], "any", false, false, false, 435) == 1)) {
                // line 436
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 438
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 440
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Консультационные услуги</td>
          ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 445
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "consult", [], "any", false, false, false, 445) == 1)) {
                // line 446
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 448
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 450
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "        </tr>
      </tbody>
    </table>
    <table class=\"wow fadeInLeft\">
      <thead>
        <tr>
          <th>PHP 5.2-7.1</th>
          ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 459
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "php", [], "any", false, false, false, 459) == 1)) {
                // line 460
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 462
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 464
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Программное обеспечение\">Ruby&Rails</td>
          ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 471
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "ruby", [], "any", false, false, false, 471) == 1)) {
                // line 472
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 474
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 476
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "        </tr>
        <tr>
          <td data-header-title=\"Язык программирования\">Python 3.0</td>
          ";
        // line 480
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 481
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "python", [], "any", false, false, false, 481) == 1)) {
                // line 482
                echo "          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          ";
            } else {
                // line 484
                echo "          <td data-header-title=\"Базовый\"></td>
          ";
            }
            // line 486
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "        </tr>
        <tr>
          <td data-header-title=\"Субдомены\">Субдоменов</td>
          ";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 491
            echo "          <td data-header-title=\"Базовый\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "subdomains", [], "any", false, false, false, 491), "html", null, true);
            echo "</td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "        </tr>
        <tr>
          <td data-header-title=\"Почтовые ящики\">Почтовые ящики</td>
          ";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 497
            echo "          <td data-header-title=\"Базовый\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "mail", [], "any", false, false, false, 497), "html", null, true);
            echo "</td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
        echo "        </tr>
        <tr>
          <td data-header-title=\"База данных\">FTP и БД</td>
          ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 503
            echo "          <td data-header-title=\"Базовый\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "ftp_db", [], "any", false, false, false, 503), "html", null, true);
            echo "</td>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "        </tr>
      </tbody>
    </table>
  </div>

</div>
<div class=\"flabAll\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Все тарифы</h3>
    <h2 class=\"flabCaption__secondCap\">Лучшие CMS</h2>
  </div>
  <div class=\"container\">
    <p>Если Вы предпочитаете более сложный движок, чем WordPress, опробуйте варианты:</p>
    <ul class=\"flabList flabList--allRateList wow fadeInUp\">
      <li>Joomla — для всех видов интернет-ресурсов.</li>
      <li>Drupal — для проектов e-commerce.</li>
      <li>OpenCart — для каталогов, интернет-магазинов.</li>
    </ul>
    <p>Для сложных коммерческих вебсайтов выгодно заказать хостинг под Битрикс. Эта система управления полностью
      заточена под торговые нужды: клиентам не придется дорабатывать функционал, вносить изменения в коды.
      Программа легко сочетается с обеспечением 1С. За годы развития движка создано множество дополнений,
      расширяющих возможности.</p>
    <p>Вы можете стать обладателем Bitrix, заказав наши услуги. Тестовый период позволит опробовать систему
      бесплатно. При освоении CMS можете рассчитывать на помощь программистов, обслуживающих Битрикс в Бишкеке.
      Удобная панель хостинга позволит быстро научиться управлять своими проектами самостоятельно.</p>
    <div class=\"flabAll__bonus\">
      <h2>Бонусы и подарки</h2>
      <div class=\"flabAll__bonusList\">
        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"1s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-gift\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>3 месяца в подарок</strong> при переносе к нам и оплате за полгода</p>
              </div>
            </div>
          </div>
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"1.8s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-discount\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>Скидки до 15%</strong> при оплате хостинга за год</p>
              </div>
            </div>
          </div>
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"2s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-gift-clock\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>Регистрация или продление домена в подарок </strong>при оплате за год</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class=\"flabAll__platform\">
      <div class=\"row no-gutters\">
        <div class=\"col-xl-4\">
          <div class=\"flabAll__platformCaption\">
            <h2>Оптимизировано под:</h2>
          </div>
        </div>
        <div class=\"col-xl-8\">
          <div class=\"flabAll__platformList\">
            <div class=\"flabSlider flabSlider--platformSlider swiper-container platformSlider-js\">
              <div class=\"flabSlider__wrap swiper-wrapper\">
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/wordpress.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/modx.png\" alt=\"\"></div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/1-c-bitrix.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/october.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/joomla.png\" alt=\"\"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"flabFaq\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Вопрос - Ответ</h3>
    <h2 class=\"flabCaption__secondCap\">Часто задаваемые вопросы</h2>
  </div>
  <div class=\"container\">
    <div class=\"flabFaq__acardion accardion-js\">

      ";
        // line 597
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "records", [], "any", false, false, false, 597);
        // line 598
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "displayColumn", [], "any", false, false, false, 598);
        // line 599
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "noRecordsMessage", [], "any", false, false, false, 599);
        // line 600
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsPage", [], "any", false, false, false, 600);
        // line 601
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 601);
        // line 602
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 602);
        // line 603
        echo "

      ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 606
            echo "      <div class=\"flabFaq__acardionItem wow fadeInLeft\" data-wow-duration=\"1s\">
        <span> ";
            // line 607
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "question", [], "any", false, false, false, 607), "html", null, true);
            echo "</span>
        <i class=\"fal fa-angle-down\"></i>
        <div class=\"flabFaq__desc\">
          ";
            // line 610
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 610);
            echo "
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 614
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "    </div>
  </div>
</div>
<div class=\"flabReviews\" id=\"reviews\" style=\"background-image:url(images/rewievs/rewievsBg.jpg)\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap flabCaption__firstCap--white\">Нас рекомендуют. И есть за что!</h3>
    <h2 class=\"flabCaption__secondCap flabCaption__secondCap--white\">Отзывы клиентов</h2>
  </div>
  <div class=\"flabSlider flabSlider--reviewsSlider swiper-container reviewsSlider-js\">
    <div class=\"flabSlider__wrap swiper-wrapper\">
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\queen-back/themes/queen/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  979 => 616,  970 => 614,  961 => 610,  955 => 607,  952 => 606,  947 => 605,  943 => 603,  940 => 602,  937 => 601,  934 => 600,  931 => 599,  928 => 598,  926 => 597,  832 => 505,  823 => 503,  819 => 502,  814 => 499,  805 => 497,  801 => 496,  796 => 493,  787 => 491,  783 => 490,  778 => 487,  772 => 486,  768 => 484,  764 => 482,  761 => 481,  757 => 480,  752 => 477,  746 => 476,  742 => 474,  738 => 472,  735 => 471,  731 => 470,  724 => 465,  718 => 464,  714 => 462,  710 => 460,  707 => 459,  703 => 458,  694 => 451,  688 => 450,  684 => 448,  680 => 446,  677 => 445,  673 => 444,  668 => 441,  662 => 440,  658 => 438,  654 => 436,  651 => 435,  647 => 434,  642 => 431,  636 => 430,  632 => 428,  628 => 426,  625 => 425,  621 => 424,  616 => 421,  607 => 419,  603 => 418,  598 => 415,  589 => 413,  585 => 412,  578 => 407,  569 => 405,  565 => 404,  555 => 396,  545 => 391,  541 => 390,  537 => 388,  524 => 381,  513 => 373,  508 => 370,  504 => 369,  500 => 367,  490 => 363,  486 => 361,  482 => 360,  475 => 356,  466 => 349,  464 => 348,  283 => 170,  258 => 147,  249 => 145,  238 => 139,  234 => 138,  229 => 136,  224 => 133,  219 => 132,  215 => 130,  212 => 129,  209 => 128,  206 => 127,  203 => 126,  200 => 125,  198 => 124,  186 => 114,  177 => 112,  165 => 105,  159 => 102,  152 => 97,  147 => 96,  143 => 94,  140 => 93,  137 => 92,  134 => 91,  131 => 90,  128 => 89,  126 => 88,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"domain-selection\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Огромный выбор и лучшие цены на регистрацию и продление</h3>
    <h2 class=\"flabCaption__secondCap\">ПОДБЕРИТЕ ДОМЕННОЕ ИМЯ</h2>
  </div>
  <div class=\"container\">
    <form action=\"\" class=\"form\">
      <div class=\"form__input\">
        <i class=\"fal fa-search\"></i>
        <input type=\"text\">
      </div>
      <div class=\"flabBtnWrap\">
        <button class=\"flabBtnWrap__btn\" type=\"submit\">поиск домена</button>
      </div>
    </form>
    <div class=\"domain-selection__success domain-info\">
      <p>
        <span>queen.kg</span> свободен для регистрации.
      </p>
      <div class=\"flabBtnWrap\">
        <a class=\"flabBtnWrap__btn\" href=\"#\">купить домен</a>
      </div>
    </div>
    <div class=\"domain-selection__success domain-info\">
      <p>
        <span>queen.kg</span> уже занят. Посмотреть информацию о домене.
      </p>
      <br>
      <p>Вы можете проверить:</p>
      <br>
      <div class=\"flabDetailedDesc\">
        <table class=\"wow fadeInRight\">
          <tbody>
            <tr>
              <td data-header-title=\"Домен\">queen.kg</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.ru</td>
              <td data-header-title=\"Статус\">Свободно</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.com</td>
              <td data-header-title=\"Статус\">Свободно</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.org</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.info</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
            <tr>
              <td data-header-title=\"Домен\">queen.net</td>
              <td data-header-title=\"Статус\">Занят</td>
              <td>
                <a href=\"#\">Информация о домене</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class=\"flabAbout\" id=\"about\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Queen Host</h3>
    <h2 class=\"flabCaption__secondCap\">О компании</h2>
  </div>
  
  {% set records = about.records %}
  {% set displayColumn = about.displayColumn %}
  {% set noRecordsMessage = about.noRecordsMessage %}
  {% set detailsPage = about.detailsPage %}
  {% set detailsKeyColumn = about.detailsKeyColumn %}
  {% set detailsUrlParameter = about.detailsUrlParameter %}


  {% for record in records %}

  <div class=\"flabAbout__desc\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"flabAbout__imgWrap order-md-1 wow fadeInRight\">
          <img src=\"{{ record.img|media }}\" alt=\"\">
        </div>
        <div class=\"col-xl-8 col-lg-8 order-md-2 wow fadeInLeft\" data-wow-duration=\"1.8s\">
          {{ record.description|raw }}
        </div>
      </div>
    </div>
  </div>

  {% else %}
  <li class=\"no-data\">{{ noRecordsMessage }}</li>
  {% endfor %}
</div>
<div class=\"flabAdvantages\" id=\"advantages\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Почему выбирают нас</h3>
    <h2 class=\"flabCaption__secondCap\">Преимущества нашей площадки</h2>
  </div>
  <div class=\"container\">
    <div class=\"flabAdvantages__list\">
      <div class=\"row\">

        {% set records = advantages.records %}
        {% set displayColumn = advantages.displayColumn %}
        {% set noRecordsMessage = advantages.noRecordsMessage %}
        {% set detailsPage = advantages.detailsPage %}
        {% set detailsKeyColumn = advantages.detailsKeyColumn %}
        {% set detailsUrlParameter = advantages.detailsUrlParameter %}


        {% for record in records %}

        <div class=\"col-xl-6 col-lg-6\">
          <div class=\"flabAdvantages__item wow fadeInLeft\" data-wow-duration=\"1s\">
            <div class=\"flabAdvantages__icon\"><i class=\"{{ record.icon }}\"></i></div>
            <div class=\"flabAdvantages__desc\">
              <h2 class=\"flabAdvantages__itemCaption\">{{ record.title }}</h2>
              {{ record.description|raw }}
              
            </div>
          </div>
        </div>
        {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
        {% endfor %}
      </div>
    </div>
  </div>
</div>
<div class=\"flabRate\" id=\"rate\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Мы предлагаем вам</h3>
    <h2 class=\"flabCaption__secondCap\">Базовые тарифы на хостинг</h2>
  </div>
  <div class=\"container\">
    <ul class=\"flabRate__choosePanel nav nav-tabs wow fadeInUp\" role=\"tablist\">
      <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#mounth\" role=\"tab\" data-toggle=\"tab\">Ежемесячно</a>
      </li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"#year\" role=\"tab\" data-toggle=\"tab\">Годовой</a></li>
    </ul>
    <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"mounth\">
        <div class=\"flabRate__list\">
          <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--firstRate\">
                    <img src=\"{{'images/svg/rate/rate1.svg'|theme}}\" alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Базовый</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">500</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--secondRate\"><img src=\"images/svg/rate/rate2.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">стандарт</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">1500</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"year\">
        <div class=\"flabRate__list\">
          <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--firstRate\"><img src=\"images/svg/rate/rate1.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Базовый</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">1000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--secondRate\"><img src=\"images/svg/rate/rate2.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">стандарт</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">3000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">4000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
              <div class=\"flabRate__item\">
                <div class=\"flabRate__statusImgWrap\">
                  <div class=\"flabRate__imgWrap flabRate__imgWrap--thirdtRate\"><img src=\"images/svg/rate/rate3.svg\"
                      alt=\"\"></div>
                </div>
                <div class=\"flabRate__itemDesc\">
                  <h2 class=\"flabRate__caption\">Премиум</h2>
                  <p class=\"flabRate__priceWrap\"><span class=\"flabRate__price\">2000</span> <span
                      class=\"flabRate__currency\">c</span><br>в месяц</p>
                </div>
                <ul class=\"flabRate__itemList\">
                  <li><span>5 gb</span> <span>/ SSD диск</span></li>
                  <li><span>2</span> <span>/ Сайта</span></li>
                  <li><span>24/7</span> <span>/ Техподдержка</span></li>
                </ul>
                <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\"
                    class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"flabRate__additional\">
      <p>Цены представлены без учета налогов НСП и НДС</p>
    </div>
  </div>
</div>
<div class=\"flabDetailedDesc\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Подробное описание</h3>
    <h2 class=\"flabCaption__secondCap\">ВЫБЕРИТЕ ТАРИФНЫЙ ПЛАН</h2>
  </div>
  <div class=\"container\">

    {% set records = tarifs.records %}

    <div class=\"flabDetailedDesc__rateTable wow fadeInLeft\">
      <table>
        <tr>
          <td rowspan=\"3\" colspan=\"2\">
            <div class=\"flabDetailedDesc__logo\">
              <div class=\"flabDetailedDesc__logoWrap\">
                <img src=\"{{'assets/images/svg/logoWithout.svg'|theme}}\" alt=\"\">
              </div>
            </div>
          </td>
          {% for record in records %}
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">{{record.title}}</h2>
            </div>
          </th>
          {% endfor %}
        </tr>
        <tr>
          {% for record in records %}
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">{{record.price_month}}</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">{{record.price_year}}</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          </td>
          {% endfor %}
        </tr>
        <tr>
          {% for record in records %}
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          {% endfor %}
        </tr>
      </table>

    </div>
    <table class=\"wow fadeInRight\">
      <thead>
        <tr>
          <th>Посещений в месяц</th>
          {% for record in records %}
          <th>{{record.visits}}</th>
          {% endfor %}
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Количество сайтов\">Всего сайтов</td>
          {% for record in records %}
          <td data-header-title=\"Базовый\">{{record.sites}}</td>
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"Объем\">Дисковое пространство</td>
          {% for record in records %}
          <td data-header-title=\"Базовый\">{{record.disk}}</td>
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Импортированный SSL</td>
          {% for record in records %}
          {% if (record.ssl == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"Часы работы\">Техподдержка 24/7</td>
          {% for record in records %}
          {% if (record.support == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Консультационные услуги</td>
          {% for record in records %}
          {% if (record.consult == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
      </tbody>
    </table>
    <table class=\"wow fadeInLeft\">
      <thead>
        <tr>
          <th>PHP 5.2-7.1</th>
          {% for record in records %}
          {% if (record.php == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Программное обеспечение\">Ruby&Rails</td>
          {% for record in records %}
          {% if (record.ruby == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"Язык программирования\">Python 3.0</td>
          {% for record in records %}
          {% if (record.python == 1) %}
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          {% else %}
          <td data-header-title=\"Базовый\"></td>
          {% endif %}
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"Субдомены\">Субдоменов</td>
          {% for record in records %}
          <td data-header-title=\"Базовый\">{{record.subdomains}}</td>
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"Почтовые ящики\">Почтовые ящики</td>
          {% for record in records %}
          <td data-header-title=\"Базовый\">{{record.mail}}</td>
          {% endfor %}
        </tr>
        <tr>
          <td data-header-title=\"База данных\">FTP и БД</td>
          {% for record in records %}
          <td data-header-title=\"Базовый\">{{record.ftp_db}}</td>
          {% endfor %}
        </tr>
      </tbody>
    </table>
  </div>

</div>
<div class=\"flabAll\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Все тарифы</h3>
    <h2 class=\"flabCaption__secondCap\">Лучшие CMS</h2>
  </div>
  <div class=\"container\">
    <p>Если Вы предпочитаете более сложный движок, чем WordPress, опробуйте варианты:</p>
    <ul class=\"flabList flabList--allRateList wow fadeInUp\">
      <li>Joomla — для всех видов интернет-ресурсов.</li>
      <li>Drupal — для проектов e-commerce.</li>
      <li>OpenCart — для каталогов, интернет-магазинов.</li>
    </ul>
    <p>Для сложных коммерческих вебсайтов выгодно заказать хостинг под Битрикс. Эта система управления полностью
      заточена под торговые нужды: клиентам не придется дорабатывать функционал, вносить изменения в коды.
      Программа легко сочетается с обеспечением 1С. За годы развития движка создано множество дополнений,
      расширяющих возможности.</p>
    <p>Вы можете стать обладателем Bitrix, заказав наши услуги. Тестовый период позволит опробовать систему
      бесплатно. При освоении CMS можете рассчитывать на помощь программистов, обслуживающих Битрикс в Бишкеке.
      Удобная панель хостинга позволит быстро научиться управлять своими проектами самостоятельно.</p>
    <div class=\"flabAll__bonus\">
      <h2>Бонусы и подарки</h2>
      <div class=\"flabAll__bonusList\">
        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"1s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-gift\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>3 месяца в подарок</strong> при переносе к нам и оплате за полгода</p>
              </div>
            </div>
          </div>
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"1.8s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-discount\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>Скидки до 15%</strong> при оплате хостинга за год</p>
              </div>
            </div>
          </div>
          <div class=\"col-xl-4 col-lg-4\">
            <div class=\"flabAll__bonusItem wow flipInY\" data-wow-duration=\"2s\">
              <div class=\"flabAll__bonusItemIcon\"><i class=\"flabio-gift-clock\"></i></div>
              <div class=\"flabAll__bonusItemDes\">
                <p><strong>Регистрация или продление домена в подарок </strong>при оплате за год</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class=\"flabAll__platform\">
      <div class=\"row no-gutters\">
        <div class=\"col-xl-4\">
          <div class=\"flabAll__platformCaption\">
            <h2>Оптимизировано под:</h2>
          </div>
        </div>
        <div class=\"col-xl-8\">
          <div class=\"flabAll__platformList\">
            <div class=\"flabSlider flabSlider--platformSlider swiper-container platformSlider-js\">
              <div class=\"flabSlider__wrap swiper-wrapper\">
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/wordpress.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/modx.png\" alt=\"\"></div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/1-c-bitrix.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/october.png\" alt=\"\">
                </div>
                <div class=\"flabSlider__item swiper-slide\"><img src=\"images/svg/platform/joomla.png\" alt=\"\"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"flabFaq\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap\">Вопрос - Ответ</h3>
    <h2 class=\"flabCaption__secondCap\">Часто задаваемые вопросы</h2>
  </div>
  <div class=\"container\">
    <div class=\"flabFaq__acardion accardion-js\">

      {% set records = FAQ.records %}
      {% set displayColumn = FAQ.displayColumn %}
      {% set noRecordsMessage = FAQ.noRecordsMessage %}
      {% set detailsPage = FAQ.detailsPage %}
      {% set detailsKeyColumn = FAQ.detailsKeyColumn %}
      {% set detailsUrlParameter = FAQ.detailsUrlParameter %}


      {% for record in records %}
      <div class=\"flabFaq__acardionItem wow fadeInLeft\" data-wow-duration=\"1s\">
        <span> {{ record.question }}</span>
        <i class=\"fal fa-angle-down\"></i>
        <div class=\"flabFaq__desc\">
          {{ record.description|raw }}
        </div>
      </div>
      {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}
    </div>
  </div>
</div>
<div class=\"flabReviews\" id=\"reviews\" style=\"background-image:url(images/rewievs/rewievsBg.jpg)\">
  <div class=\"flabCaption wow fadeInDown\">
    <h3 class=\"flabCaption__firstCap flabCaption__firstCap--white\">Нас рекомендуют. И есть за что!</h3>
    <h2 class=\"flabCaption__secondCap flabCaption__secondCap--white\">Отзывы клиентов</h2>
  </div>
  <div class=\"flabSlider flabSlider--reviewsSlider swiper-container reviewsSlider-js\">
    <div class=\"flabSlider__wrap swiper-wrapper\">
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
      <div class=\"flabSlider__item swiper-slide\">
        <div class=\"flabReviews__comment\">
          <div class=\"flabReviews__revInfo\">
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-user\"></i></span>
              <p>Владимир</p>
            </div>
            <div class=\"flabReviews__revInfoItem\"><span><i class=\"far fa-globe\"></i></span>
              <p>Владимир</p>
            </div>
          </div>
          <div class=\"flabReviews__desc\">
            <p>Мой сайт на этом хостинге уже третий год, у них же регистрировал доменное имя. Полностью
              доволен,
              нареканий нет, надежный и быстрый, ни разу не было такого, что сайт недоступен или
              тормозит. Масса
              полезных связанных сервисов. Наверное единственный незначительный минус - цена, она не
              такая низкая,
              как у других хостеров, однако для меня всегда лучше заплатить чуть больше, но быть
              уверенным в том,
              что никаких проблем не возникнет. Если резюмировать, то это взрослый, состоявшийся
              хостинг для
              взрослых, серьезных людей.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "D:\\OSPanel\\domains\\queen-back/themes/queen/pages/home.htm", "");
    }
}
