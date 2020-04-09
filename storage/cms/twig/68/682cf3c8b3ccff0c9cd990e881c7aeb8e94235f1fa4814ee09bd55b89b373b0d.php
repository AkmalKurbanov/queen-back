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

/* /opt/lampp/htdocs/octobercms/themes/queen/pages/home.htm */
class __TwigTemplate_210544aa5cf43b8b46e5382340cd1b75cd850959fef7ad475f293a16111e1130 extends \Twig\Template
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
            <div class=\"flabAdvantages__icon\"><i class=\"flabio-event\"></i></div>
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
            // line 144
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
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
        // line 169
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
    <div class=\"flabDetailedDesc__rateTable wow fadeInLeft\">
      <table>
        <tr>
          <td rowspan=\"3\" colspan=\"2\">
            <div class=\"flabDetailedDesc__logo\">
              <div class=\"flabDetailedDesc__logoWrap\">
                <img src=\"";
        // line 352
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/svg/logoWithout.svg");
        echo "\" alt=\"\">
              </div>
            </div>
          </td>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">Базовый</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">СТАНДАРТ</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">бизнес</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">ПРЕМИУМ</h2>
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">3000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
            </th>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">3000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>

        </tr>
      </table>
      <div class=\"info-domain\">
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarif\">
            <h2 class=\"flabRate__caption\">Базовый</h2>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarifPrice\">
            <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц</p>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarifPrice\">
            <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц</p>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <p>Посещений в месяц</p>
          <p>до 25000</p>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
              class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
        </div>
      </div>
    </div>
    <table class=\"wow fadeInRight\">
      <thead>
        <tr>
          <th>Посещений в месяц</th>
          <th>до 25000</th>
          <th>до 50000</th>
          <th>неограничено</th>
          <th>неограничено</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Количество сайтов\">Всего сайтов</td>
          <td data-header-title=\"Базовый\">2</td>
          <td data-header-title=\"Стандарт\">5</td>
          <td data-header-title=\"Премиум\">10</td>
          <td data-header-title=\"Премиум\">10</td>
        </tr>
        <tr>
          <td data-header-title=\"Объем\">Дисковое пространство</td>
          <td data-header-title=\"Базовый\">5 gb</td>
          <td data-header-title=\"Стандарт\">10 gb</td>
          <td data-header-title=\"Премиум\">20 gb</td>
          <td data-header-title=\"Премиум\">20 gb</td>
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Импортированный SSL</td>
          <td data-header-title=\"Базовый\"></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Часы работы\">Техподдержка 24/7</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Консультационные услуги</td>
          <td data-header-title=\"Базовый\"></td>
          <td data-header-title=\"Стандарт\"></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
      </tbody>
    </table>
    <table class=\"wow fadeInLeft\">
      <thead>
        <tr>
          <th>PHP 5.2-7.1</th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Программное обеспечение\">Ruby&amp;Rails</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Язык программирования\">Python 3.0</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Субдомены\">Субдоменов</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
        </tr>
        <tr>
          <td data-header-title=\"Почтовые ящики\">Почтовые ящики</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
        </tr>
        <tr>
          <td data-header-title=\"База данных\">FTP и БД</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
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

      ";
        // line 677
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "records", [], "any", false, false, false, 677);
        // line 678
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "displayColumn", [], "any", false, false, false, 678);
        // line 679
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "noRecordsMessage", [], "any", false, false, false, 679);
        // line 680
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsPage", [], "any", false, false, false, 680);
        // line 681
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 681);
        // line 682
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 682);
        // line 683
        echo "

      ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 686
            echo "      <div class=\"flabFaq__acardionItem wow fadeInLeft\" data-wow-duration=\"1s\">
        <span> ";
            // line 687
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "question", [], "any", false, false, false, 687), "html", null, true);
            echo "</span>
        <i class=\"fal fa-angle-down\"></i>
        <div class=\"flabFaq__desc\">
          ";
            // line 690
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 690);
            echo "
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 694
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 696
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
        return "/opt/lampp/htdocs/octobercms/themes/queen/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 696,  837 => 694,  828 => 690,  822 => 687,  819 => 686,  814 => 685,  810 => 683,  807 => 682,  804 => 681,  801 => 680,  798 => 679,  795 => 678,  793 => 677,  465 => 352,  279 => 169,  254 => 146,  245 => 144,  235 => 139,  231 => 138,  224 => 133,  219 => 132,  215 => 130,  212 => 129,  209 => 128,  206 => 127,  203 => 126,  200 => 125,  198 => 124,  186 => 114,  177 => 112,  165 => 105,  159 => 102,  152 => 97,  147 => 96,  143 => 94,  140 => 93,  137 => 92,  134 => 91,  131 => 90,  128 => 89,  126 => 88,  37 => 1,);
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
            <div class=\"flabAdvantages__icon\"><i class=\"flabio-event\"></i></div>
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
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">Базовый</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">СТАНДАРТ</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">бизнес</h2>
            </div>
          </th>
          <th colspan=\"2\">
            <div class=\"flabDetailedDesc__tarif\">
              <h2 class=\"flabRate__caption\">ПРЕМИУМ</h2>
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">3000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">2000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц
              </p>
            </div>
            </th>
          <td>
            <div class=\"flabDetailedDesc__tarifPrice flabDetailedDesc__tarifPrice--secondPrice\">
              <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                  class=\"flabRate__price flabRate__price--detailPrice\">3000</span> <span
                  class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в год
              </p>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>
          <td colspan=\"2\">
            <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
                class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
          </td>

        </tr>
      </table>
      <div class=\"info-domain\">
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarif\">
            <h2 class=\"flabRate__caption\">Базовый</h2>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarifPrice\">
            <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц</p>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabDetailedDesc__tarifPrice\">
            <p class=\"flabRate__priceWrap flabRate__priceWrap--detailPriceWrap\"><span
                class=\"flabRate__price flabRate__price--detailPrice\">1500</span> <span
                class=\"flabRate__currency flabRate__currency--detailCurrency\">c</span><br>в месяц</p>
          </div>
        </div>
        <div class=\"info-domain__item\">
          <p>Посещений в месяц</p>
          <p>до 25000</p>
        </div>
        <div class=\"info-domain__item\">
          <div class=\"flabBtnWrap flabBtnWrap--detailTarifBtnWrap\"><a target=\"_blank\" href=\"#\"
              class=\"flabBtnWrap__btn flabBtnWrap__btn--rateBtn\">Заказать</a></div>
        </div>
      </div>
    </div>
    <table class=\"wow fadeInRight\">
      <thead>
        <tr>
          <th>Посещений в месяц</th>
          <th>до 25000</th>
          <th>до 50000</th>
          <th>неограничено</th>
          <th>неограничено</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Количество сайтов\">Всего сайтов</td>
          <td data-header-title=\"Базовый\">2</td>
          <td data-header-title=\"Стандарт\">5</td>
          <td data-header-title=\"Премиум\">10</td>
          <td data-header-title=\"Премиум\">10</td>
        </tr>
        <tr>
          <td data-header-title=\"Объем\">Дисковое пространство</td>
          <td data-header-title=\"Базовый\">5 gb</td>
          <td data-header-title=\"Стандарт\">10 gb</td>
          <td data-header-title=\"Премиум\">20 gb</td>
          <td data-header-title=\"Премиум\">20 gb</td>
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Импортированный SSL</td>
          <td data-header-title=\"Базовый\"></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Часы работы\">Техподдержка 24/7</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"МИНИ САД\">Консультационные услуги</td>
          <td data-header-title=\"Базовый\"></td>
          <td data-header-title=\"Стандарт\"></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
      </tbody>
    </table>
    <table class=\"wow fadeInLeft\">
      <thead>
        <tr>
          <th>PHP 5.2-7.1</th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
          <th><i class=\"fal fa-check\"></i></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header-title=\"Программное обеспечение\">Ruby&amp;Rails</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Язык программирования\">Python 3.0</td>
          <td data-header-title=\"Базовый\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Стандарт\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
          <td data-header-title=\"Премиум\"><i class=\"fal fa-check\"></i></td>
        </tr>
        <tr>
          <td data-header-title=\"Субдомены\">Субдоменов</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
        </tr>
        <tr>
          <td data-header-title=\"Почтовые ящики\">Почтовые ящики</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
        </tr>
        <tr>
          <td data-header-title=\"База данных\">FTP и БД</td>
          <td data-header-title=\"Базовый\">не ограничено</td>
          <td data-header-title=\"Стандарт\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
          <td data-header-title=\"Премиум\">не ограничено</td>
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
</div>", "/opt/lampp/htdocs/octobercms/themes/queen/pages/home.htm", "");
    }
}
