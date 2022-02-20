<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Архив новостей</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/news.css" />

    <style>
      html,
      body {
        height: 100%;
        width: 100%;
        margin: 0;
      }

      .slider-news {
        height: 80vh;
        width: 100%;

        /*  margin-top: 20vh;*/
        display: flex;
        justify-content: center;
      }

      .navbar > * {
        z-index: 2;
      }

      .slider-container {
        width: 100%;
        margin-left: 5vw;
        margin-right: 5vw;
      }

      .carousel {
        height: 100%;
      }

      .carousel-inner {
        height: 100%;
      }

      .slider-panel {
        height: 5vh;
        width: 100%;
        background-color: #f5f5f5;
      }

      .slider-panel > ol {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .slider-image {
        width: 100%;
        height: 75vh;
      }

      .panel {
        background-color: #0077d4;
        height: 10vh;
        width: 100%;
      }

      .footer {
        height: 10vh;
        width: 100%;
        background-color: #30475e;
      }

      a,
      a:hover,
      a:active {
        text-decoration: none;
        color: black;
      }

      a:hover {
        color: rgba(0, 0, 0, 0.418);
      }

      .slider-panel {
        padding-top: 2vh;
      }

      .carousel .carousel-indicators li {
        background-color: rgba(0, 0, 0, 0.418);
        z-index: 0;
      }

      .carousel .carousel-indicators li.active {
        background-color: black;
      }

      .carousel-indicators {
        margin-bottom: 1vh;
        display: flex;
        align-items: center;
        align-self: center;
        z-index: 0;
      }

      .slider-news {
        margin-top: 20vh;
      }
    </style>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="archive-news-block">
      <div class="archive-news-section">
        <div>
          <b
            >Четыре номинации из Центральной Азии включены в Репрезентативный
            список нематериального культурного наследия человечества</b
          >
        </div>
        <div>
          Все номинации были включены во время шестнадцатой сессии
          Межправительственного комитета по охране нематериального культурного
          наследия, которая проходила полностью в онлайн режиме с 13 по 18
          декабря 2021 года.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-1">Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
            повышения квалификации сотрудников, занимающихся культурным
            наследием.</b
          >
        </div>
        <div>
          Изменение климата, пандемия COVID-19 и другие кризисные ситуации
          создали абсолютно новые проблемы для объектов культурного наследия и
          связанных с ними объединений.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-2">Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием
            ключевых соглашений, свидетельствующих о возобновлении
            многостороннего сотрудничества в области восстановления образования,
            открытой науки и этических аспектов искусственного интеллекта.
            Организация отметила свою 75-ю годовщину в ходе этой сессии.</b
          >
        </div>
        <div>
          9 ноября 2021 года 193 государства-члена Организации подавляющим большинством
          проголосовали в поддержку кандидатуры г-жи Одрэ Азуле на второй
          четырехлетний срок в качестве Генерального директора ЮНЕСКО.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-3">Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >41-я сессия Генеральной Конференции ЮНЕСКО открылась в
            Штаб-квартире Организации в Париже 9 ноября 2021 года и продолжится
            до 24 ноября.
          </b>
        </div>

        <div class="archive-news-link">
          <a href="/news-page-4">Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >В Сеуле состоялась официальная инаугурации Сети живого наследия
            Шелкового пути, нового проекта Центра ЮНЕСКО-ICHCAP и Международного
            института центральноазиатских исследований МИЦАИ-IICAS
          </b>
        </div>
        <div>
          28 октября 2021 года в Сеуле состоялась официальная инаугурации Сети
          живого наследия Шелкового пути, нового проекта Центра ЮНЕСКО-ICHCAP и
          Международного института центральноазиатских исследований МИЦАИ-IICAS
          в Самарканде при участии представителей дипломатического корпуса
          государств, аккредитованных в Республике Корея.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-5">Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >В Улытау открылся первый Казахстанский общественный форум,
            посвященный сохранению и развитию нематериального культурного
            наследия
          </b>
        </div>
        <div>
          26 октября в Улытау открылся первый Казахстанский общественный форум,
          посвященный сохранению и развитию нематериального культурного
          наследия.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-6"> Узнать больше...</a>
        </div>
      </div>
      <div class="archive-news-section">
        <div>
          <b
            >Десятая Центральноазиатская субрегиональная встреча по сохранению
            нематериального культурного наследия</b
          >
        </div>
        <div>
          состоялась в Алматы 13-15 октября 2021 года. Встреча была организована
          Международным информационным и сетевым центром нематериального
          культурного наследия в Азиатско-Тихоокеанском регионе под эгидой
          ЮНЕСКО (ICHCAP) совместно с Кластерным Бюро ЮНЕСКО в Алматы и при
          поддержке Администрации культурного наследия Республики Корея.
        </div>
        <div class="archive-news-link">
          <a href="/news-page-7"> Узнать больше...</a>
        </div>
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
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
  </body>
</html>
