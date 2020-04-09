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

/* /opt/lampp/htdocs/octobercms/themes/queen/partials/popup-window/popup.htm */
class __TwigTemplate_9e6a344a9a42aa6cd5c4106370ca6a9b806c312aa4110d3a3034d69ee9fda4e3 extends \Twig\Template
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
        echo "<div class=\"popup-wrap\">
      <div class=\"popup-window\" id=\"registartion\">
        <div class=\"popup-close\">
          <div class=\"fal fa-times\"></div>
        </div>
        <div class=\"popup-logo\">
          <img src=\"images/svg/logoWindow.svg\" alt=\"\">
        </div>
        <h2>Регистрация</h2>
        <form action=\"\">
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваше имя\">
          </div>
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваш email\">
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Подтвердите пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"agree\">
            <input type=\"checkbox\" id=\"agree\" name=\"agree\">
            <label for=\"agree\">Нажимая на регистрацию,
              вы соглашаетесь с условиями
              и политикой конфиденциальности</label>
          </div>

          <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\" class=\"flabBtnWrap__btn\">Зарегистрироваться</a></div>
          <p>Уже зарегистрированы? <a href=\"#\">Войдите</a>.</p>
        </form>
      </div>
      <div class=\"popup-window\" id=\"log-in\">
        <div class=\"popup-close\">
          <div class=\"fal fa-times\"></div>
        </div>
        <div class=\"popup-logo\">
          <img src=\"images/svg/logoWindow.svg\" alt=\"\">
        </div>
        <h2>Вход</h2>
        <form action=\"\">
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваш email\">
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\" class=\"flabBtnWrap__btn\">Войти</a></div>
          <p><a href=\"#\">Забыли пароль?</a></p>
          <p><a href=\"#\">Регистрация</a></p>
        </form>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/octobercms/themes/queen/partials/popup-window/popup.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popup-wrap\">
      <div class=\"popup-window\" id=\"registartion\">
        <div class=\"popup-close\">
          <div class=\"fal fa-times\"></div>
        </div>
        <div class=\"popup-logo\">
          <img src=\"images/svg/logoWindow.svg\" alt=\"\">
        </div>
        <h2>Регистрация</h2>
        <form action=\"\">
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваше имя\">
          </div>
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваш email\">
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Подтвердите пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"agree\">
            <input type=\"checkbox\" id=\"agree\" name=\"agree\">
            <label for=\"agree\">Нажимая на регистрацию,
              вы соглашаетесь с условиями
              и политикой конфиденциальности</label>
          </div>

          <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\" class=\"flabBtnWrap__btn\">Зарегистрироваться</a></div>
          <p>Уже зарегистрированы? <a href=\"#\">Войдите</a>.</p>
        </form>
      </div>
      <div class=\"popup-window\" id=\"log-in\">
        <div class=\"popup-close\">
          <div class=\"fal fa-times\"></div>
        </div>
        <div class=\"popup-logo\">
          <img src=\"images/svg/logoWindow.svg\" alt=\"\">
        </div>
        <h2>Вход</h2>
        <form action=\"\">
          <div class=\"popup-input\">
            <input type=\"text\" placeholder=\"Ваш email\">
          </div>
          <div class=\"popup-input\">
            <input type=\"password\" placeholder=\"Пароль\">
            <div class=\"password-control\">
              <i class=\"fas fa-eye\"></i>
              <i class=\"fas fa-eye-slash\"></i>
            </div>
          </div>
          <div class=\"flabBtnWrap\"><a target=\"_blank\" href=\"#\" class=\"flabBtnWrap__btn\">Войти</a></div>
          <p><a href=\"#\">Забыли пароль?</a></p>
          <p><a href=\"#\">Регистрация</a></p>
        </form>
      </div>
    </div>", "/opt/lampp/htdocs/octobercms/themes/queen/partials/popup-window/popup.htm", "");
    }
}
