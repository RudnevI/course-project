<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org" lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/another-style.css" />
    <title>
      ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и повышения
      квалификации сотрудников, занимающихся культурным наследием.
    </title>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="news-page-main-container">
      <img
        class="news-page-header-image"
        src="img/news-line-images/news2.png"
      />
      <div class="news-page-title">
        ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
        повышения квалификации сотрудников, занимающихся культурным наследием.
      </div>
      <div class="news-page-paragraph">
        <b> 19 ноября 2021 </b>
        <br />
        <br />
        Изменение климата, пандемия COVID-19 и другие кризисные ситуации создали
        абсолютно новые проблемы для объектов культурного наследия и связанных с
        ними объединений. Столкнувшись с новыми реалиями, специалисты,
        занимающиеся наследием вынуждены все больше переосмысливать подходы к
        управлению объектами. Сегодня охрана объекта культурного наследия
        выходит за рамки технических вопросов сохранности. Руководители объектов
        наследия должны также учитывать различные экономические, социальные и
        экологические аспекты, как это закреплено в Целях устойчивого развития.
        Персоналу, работающему с наследием, необходимо проходить переподготовку
        и повышение квалификации для решения таких новых задач в области
        управления. Структура компетентности по управлению культурным наследием,
        разработанная ЮНЕСКО - это новый инструментарий, который определяет
        знания, навыки и личные качества как отдельных специалистов по наследию,
        так и организаций, занимающихся наследием. Он определяет стандарт
        укрепления потенциала и охватывает четыре области компетенций: основные
        компетенции (например, работа с объединениями и мобилизация объектов
        наследия в целях локального развития), управленческие компетенции
        (например, стратегическое планирование и финансовый менеджмент),
        специальные технические компетенции, определение секретов создания
        наследия) и личные компетенции. Образовательным учреждениям также
        предлагается использовать Структуру компетентности при планировании и
        оценке своих образовательных и учебных программ.
        <br />
        <br />
        <br />
        <a
          href="http://ru.unesco.kz/competence-framework-for-cultural-heritage-management-a-user-guide-to-essential-skills"
          style="float: right"
          >Узнать больше</a
        >
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
