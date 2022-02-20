<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org" lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Новости</title>

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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/news_one.css" />
    <style>
      .latest-news-block,
      body {
        background-color: white;
        color: black;
      }

      .latest-news-photo {
        align-self: flex-start;
      }

      .latest-news-block > * {
        color: black;
      }

      .latest-news-section > p {
        align-self: flex-start;
      }

      .latest-news-section {
        row-gap: 3vmin;
        margin-bottom: 5vmin;
      }
    </style>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="alt-news-carousel-block">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide alt-news-carousel"
        data-ride="carousel"
      >
        <div class="carousel-inner alt-news-carousel-inner">
          <div class="carousel-item active">
            <div class="alt-news-carousel-row">
              <img
                class=""
                src="img/news-line-images/news1.png"
                alt="First slide"
              />
              <div class="alt-news-carousel-paragraph">
                <p>
                  <b class="date" style="color: white">20 декабря 2021</b>
                  <br />
                  <br />
                  <b
                    >Четыре номинации из Центральной Азии включены в
                    Репрезентативный список нематериального культурного наследия
                    человечества</b
                  >

                  <br />
                  <br />
                  Все номинации были включены во время шестнадцатой сессии
                  Межправительственного комитета по охране нематериального
                  культурного наследия, которая проходила полностью в онлайн
                  режиме с 13 по 18 декабря 2021 года.
                  <br />
                  <br />
                  <a href="/news-page-1" class="more-link">
                    <button class="more-button">Узнать больше</button>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="alt-news-carousel-row">
              <img
                class=""
                src="img/news-line-images/news2.png"
                alt="First slide"
              />
              <div class="alt-news-carousel-paragraph">
                <p>
                  <b class="date" style="color: white">19 ноября 2021</b>
                  <br />
                  <br />
                  <b
                    >ЮНЕСКО подготовлен и представлен новый стандарт
                    переподготовки и повышения квалификации сотрудников,
                    занимающихся культурным наследием.</b
                  >

                  <br />
                  <br />
                  Изменение климата, пандемия COVID-19 и другие кризисные
                  ситуации создали абсолютно новые проблемы для объектов
                  культурного наследия и связанных с ними объединений.
                  <br />
                  <br />
                  <a href="/news-page-2" class="more-link">
                    <button class="more-button">Узнать больше</button>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="alt-news-carousel-row">
              <img
                class=""
                src="img/news-line-images/news3.png"
                alt="First slide"
              />
              <div class="alt-news-carousel-paragraph">
                <p>
                  <b class="date" style="color: white">25 ноября 2021</b>
                  <br />
                  <br />
                  <b
                    >41-я сессия Генеральной конференции ЮНЕСКО завершилась
                    принятием ключевых соглашений.</b
                  >

                  <br />
                  <br />
                  9 ноября 193 государства-члена Организации подавляющим
                  большинством проголосовали в поддержку кандидатуры г-жи Одрэ
                  Азуле на второй четырехлетний срок в качестве Генерального
                  директора ЮНЕСКО.
                  <br />
                  <br />
                  <a href="/news-page-3" class="more-link">
                    <button class="more-button">Узнать больше</button>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="latest-news-block">
      <div class="latest-news-section">
        <img
          src="img/news-line-images/news1.png"
          alt=""
          class="latest-news-photo"
        />

        <p>
          <b class="date">20 декабря 2021</b>
          <br />
          <br />
          <br />
          <b
            >Четыре номинации из Центральной Азии включены в Репрезентативный
            список нематериального культурного наследия человечества</b
          >
          Все номинации были включены во время шестнадцатой сессии
          Межправительственного комитета по охране нематериального культурного
          наследия, которая проходила полностью в онлайн режиме с 13 по 18
          декабря 2021 года.
          <br />
          <br />
          <a href="news-page-1">Узнать больше...</a>
        </p>
      </div>
      <div class="latest-news-section">
        <img
          src="img/news-line-images/news2.png"
          alt=""
          class="latest-news-photo"
        />

        <p>
          <b class="date">19 ноября 2021</b>
          <br />
          <br />
          <b
            >ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
            повышения квалификации сотрудников, занимающихся культурным
            наследием.</b
          >
          Изменение климата, пандемия COVID-19 и другие кризисные ситуации
          создали абсолютно новые проблемы для объектов культурного наследия и
          связанных с ними объединений.
          <br />
          <br />
          <a href="news-page-2">Узнать больше...</a>
        </p>
      </div>
      <div class="latest-news-section" hidden>
        <img
          src="img/news-line-images/news3.png"
          alt=""
          class="latest-news-photo"
        />

        <p>
          <b class="date">25 ноября 2021</b>
          <br />
          <br />
          <b
            >41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием
            ключевых соглашений, свидетельствующих о возобновлении
            многостороннего сотрудничества в области восстановления образования,
            открытой науки и этических аспектов искусственного интеллекта.
            Организация отметила свою 75-ю годовщину в ходе этой сессии.</b
          >
          9 ноября 2021 года 193 государства-члена Организации подавляющим большинством
          проголосовали в поддержку кандидатуры г-жи Одрэ Азуле на второй
          четырехлетний срок в качестве Генерального директора ЮНЕСКО.
          <br />
          <br />
          <a href="news-page-3">Узнать больше...</a>
        </p>
      </div>
      <div class="latest-news-section" hidden>
        <img
          src="img/news-archive-images/flags.jpg"
          alt=""
          class="latest-news-photo"
          style="width: 266px"
        />

        <p>
          <b class="date">2 ноября 2021</b>

          <br />
          <br />
          <b
            >41-я сессия Генеральной Конференции ЮНЕСКО открылась в
            Штаб-квартире Организации в Париже 9 ноября 2021 года и продолжится
            до 24 ноября.
          </b>

          <br />
          <br />
          <a href="news-page-4">Узнать больше...</a>
        </p>
      </div>
      <div class="show-more-button-container">
        <button class="show-more-button" id="showMoreNewsButton">
          Посмотреть все новости
        </button>
      </div>
      <div class="show-more-button-container">
        <a href="news-archive">
          <button class="show-more-button">Перейти в архив новостей</button>
        </a>
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
  <script>
    const showMoreNewsButton = document.querySelector("#showMoreNewsButton");
    const getAllHiddenNewsSections = () => {
      return Array.from(
        document.querySelectorAll(".latest-news-section")
      ).filter((section) => section.hidden);
    };
    showMoreNewsButton.addEventListener("click", () => {
      getAllHiddenNewsSections().forEach((section) => (section.hidden = false));
    });
  </script>
</html>
