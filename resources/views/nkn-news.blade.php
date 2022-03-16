<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <link href="index.css" rel="stylesheet" />
    <title>Новости</title>
    <style>
      .carousel-inner {
        width: 66vmin;
        height: 57vmin;
      }
    </style>
  </head>
  <body>
    @include('subviews.nkn-navbar')

    <div id="news-header-container">
      <div class="news-header-item" id="first-item">
        <h1>ГЛАВНЫЕ НОВОСТИ:</h1>
        <div id="news-header-slider">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators news-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active news-indicator"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                class="news-indicator"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                class="news-indicator"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="3"
                class="news-indicator"
                aria-label="Slide 4"
              ></button>
            </div>
            <div class="carousel-inner" id="news-carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-item-inner">
                  <img src="assets/news/news1.png" class="news-slider-image" />
                  <div class="slider-text">
                    Четыре номинации из Центральной Азии включены в
                    Репрезентативный список нематериального культурного наследия
                    человечества в ходе шестнадцатой сессии
                    Межправительственного комитета по охране нематериального
                    культурного наследия, которая проходила полностью в онлайн
                    режиме с 13 по 18 декабря 2021 года.
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="carousel-item-inner">
                  <img src="assets/news/news2.png" class="news-slider-image" />
                  <div class="slider-text">
                    ЮНЕСКО подготовлен и представлен новый стандарт
                    переподготовки и повышения квалификации сотрудников,
                    занимающихся культурным наследием.
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="carousel-item-inner">
                  <img src="assets/news/news3.png" class="news-slider-image" />
                  <div class="slider-text">
                    41-я сессия Генеральной конференции ЮНЕСКО завершилась
                    принятием ключевых соглашений, свидетельствующих о
                    возобновлении многостороннего сотрудничества в области
                    восстановления образования, открытой науки и этических
                    аспектов искусственного интеллекта. Организация отметила
                    свою 75-ю годовщину в ходе этой сессии.
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="carousel-item-inner">
                  <img src="assets/news/news4.png" class="news-slider-image" />
                  <div class="slider-text">
                    В Сеуле состоялась официальная инаугурации Сети живого
                    наследия Шелкового пути, нового проекта Центра ЮНЕСКО-ICHCAP
                    и Международного института центральноазиатских исследований
                    МИЦАИ-IICAS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="news-header-item">
        <h1 style="margin-left: 2vw">СВЕЖИЕ НОВОСТИ:</h1>
        <div class="news-header-list">
          <div class="news-header-list-item">
            <img class="list-item-image" src="assets/news/news6.png" />
            <div>
              Десятая Центральноазиатская субрегиональная встреча по сохранению
              нематериального культурного наследия состоялась в Алматы 13-15
              октября 2021 года.
            </div>
          </div>
          <div class="news-header-list-item">
            <img class="list-item-image" src="assets/news/news5.png" />
            <div>
              В Сеуле состоялась официальная инаугурации Сети живого наследия
              Шелкового пути, нового проекта Центра ЮНЕСКО-ICHCAP и
              Международного института центральноазиатских исследований
              МИЦАИ-IICAS.
            </div>
          </div>
          <div class="news-header-list-item">
            <img class="list-item-image" src="assets/news/news6.png" />
            <div>
              ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
              повышения квалификации сотрудников, занимающихся культурным
              наследием.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="news-middle">
      <div id="top-news">
        <img src="assets/news/exclamation-mark.png" />
        <img class="list-item-image" src="assets/news/news2.png" />
        <div>
          ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
          повышения квалификации сотрудников, занимающихся культурным наследием.
        </div>
      </div>
      <div class="diagonal"></div>
    </div>
    <div id="news-grid-block">
      <h1>ВСЕ НОВОСТИ:</h1>
      <div id="news-grid">
        <div class="news-grid-row">
          <div class="news-grid-item">
            <img class="news-grid-image" src="assets/news/news1.png" />
            <div>
              <b class="news-date">20 декабря 2021</b>
              <br />
              Четыре номинации из Центральной Азии включены в Репрезентативный
              список нематериального культурного наследия человечества в ходе
              шестнадцатой сессии Межправительственного комитета по охране
              нематериального культурного наследия, которая проходила полностью
              в онлайн режиме с 13 по 18 декабря 2021 года.
            </div>
          </div>
          <div class="news-grid-item">
            <img class="news-grid-image" src="assets/news/news2.png" />
            <div>
              <b class="news-date">19 ноября 2021</b>
              <br />
              ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и
              повышения квалификации сотрудников, занимающихся культурным
              наследием.
            </div>
          </div>
        </div>
        <div class="news-grid-row">
          <div class="news-grid-item">
            <img class="news-grid-image" src="assets/news/news3.png" />
            <div>
              <b class="news-date">25 ноября 2021</b>
              <br />
              41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием
              ключевых соглашений, свидетельствующих о возобновлении
              многостороннего сотрудничества в области восстановления
              образования, открытой науки и этических аспектов искусственного
              интеллекта. Организация отметила свою 75-ю годовщину в ходе этой
              сессии.
            </div>
          </div>
          <div class="news-grid-item">
            <img class="news-grid-image" src="assets/news/news4.png" />
            <div>
              <b class="news-date">29 октября 2021</b>
              <br />
              В Сеуле состоялась официальная инаугурации Сети живого наследия
              Шелкового пути, нового проекта Центра ЮНЕСКО-ICHCAP и
              Международного института центральноазиатских исследований
              МИЦАИ-IICAS.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="black-footer"></div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>
