<!DOCTYPE html>
<html lang="ru">
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
    <style>
      .indicatorc {
        display: none;
      }

      #carouselExampleIndicators {
        flex: 1;
      }

      .article-block-new {
        background-color: #199cff;
      }

      .ornament-article-block {
        max-height: 80%;
        align-self: center;
      }

      .ornament {
        max-height: 100%;
        width: auto;
        object-fit: contain;
      }

      .navbar-unesco {
        position: relative;
        z-index: 2;
      }

      .more-button {
        background-color: #0069b3;
        color: white;
        border: none;
        margin-top: 3vw;
        margin-bottom: 3vw;
      }

      .ornament-1,
      .ornament-2 {
        height: 100%;
      }

      .alternate-main-info-block-2 {
        color: white;
      }

      .ornament-1 > img,
      .ornament-2 > img {
        height: 100%;
      }

      .logo > * {
        display: none;
      }

      .more-button:hover {
        color: white
      }
    </style>
    <title>Главная страница</title>
  </head>
  <body>
    <div class="national-commission-title-block">
      <div class="national-commission-title-block-logo-container">
        <img src="img/logo-transparent.png" />
      </div>
      <div class="national-commission-title-block-title-section">
        Национальная Комиссия Республики Казахстан<br />
        по делам ЮНЕСКО и ИСЕСКО
      </div>
    </div>
    <div class="alternate-quote-block">
      <div class="alternate-quote-block-img-container">
        <img
          class="alternate-quote-block-img"
          src="img/main-images/quote-globe.png"
        />
      </div>
      <div class="alternate-quote-block-quote-text">
        <div>
          <b
            >Благородные идеалы ЮНЕСКО, ее активная позиция в процессе<br />
            социально-экономических преобразований снискали заслуженное
            уважение<br />
            во всем мире и находят живой отклик и горячую поддержку в
            Казахстане<br
          /></b>
          <br />
          <br />
          <div class="alternate-quote-block-author">
            <div>
              <div style="flex: 1"></div>
              <div style="flex: 1">
                <i>Нурсултан Назарбаев</i>
              </div>
            </div>
            <div>
              <div style="flex: 1"></div>
              <i style="flex: 2">Первый президент Республики Казахстан</i>
            </div>
          </div>
        </div>

        <!-- <i style="float: right">Нурсултан Назарбаев</i>
         <br>
         <i style="margin-left: 40%">Первый президент Республики Казахстан</i>-->
      </div>
    </div>
    @include('subviews.navbar')
    <!--<div class="quote-block" style="font-size: 19px">

    <div class="ornament-1">
        <img src="img/ornament.png" alt="">
    </div>
    <div class="quote">
        <div class="quote-text">
            Благородные идеалы ЮНЕСКО, ее активная позиция в процессе
            социально-экономических преобразований снискали заслуженное уважение
            во всем мире и находят живой отклик и горячую поддержку в Казахстане
        </div>
        <div class="quote-author">
            Нурсултан Назарбаев, Первый Президент Республики Казахстан
        </div>
    </div>

    <div class="ornament-2">
        <img src="img/ornament.png" alt=""/>
    </div>

</div>-->
    <div class="alternate-header-unesco">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            class="indicatorc active"
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
          ></li>
          <li
            class="indicatorc"
            data-target="#carouselExampleIndicators"
            data-slide-to="1"
          ></li>
          <li
            class="indicatorc"
            data-target="#carouselExampleIndicators"
            data-slide-to="2"
          ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-1.jpg"
                alt="First slide"
            /></a>
          </div>
          <div class="carousel-item">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-2.jpg"
                alt="Second slide"
              />
            </a>
          </div>
          <div class="carousel-item">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-3.jpg"
                alt="Third slide"
              />
            </a>
          </div>
          <div class="carousel-item">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-4.jpg"
                alt="Third slide"
              />
            </a>
          </div>
          <div class="carousel-item">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-5.jpg"
                alt="Third slide"
              />
            </a>
          </div>
          <div class="carousel-item">
            <a href="#" tabindex="0">
              <img
                class="alternate-slider-image"
                src="img/main-images/index-slider-6.jpg"
                alt="Third slide"
              />
            </a>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
        </a>
      </div>
      <!--<div class="header-unesco-paragraph">
        Казахстан является членом Организации Объединенных Наций по вопросам образования, науки и культуры (ЮНЕСКО) с 22
        мая
        1992 года. В 1994 году в Алматы открыло свою работу Кластерное Бюро ЮНЕСКО, охватывающее территории Казахстана,
        Кыргызстана, Таджикистана и Узбекистана. Национальная Комиссия Республики Казахстан служит связующим звеном
        между
        ЮНЕСКО и казахстанскими организациями, общинами и институтами в сферах образования, науки, культуры и
        коммуникации.
        В стране успешно функционируют 6 кафедр ЮНЕСКО, свыше 30 ассоциированных школ ЮНЕСКО и более 50 клубов ЮНЕСКО.
        <a style="float: right" href="/about">Узнать больше...</a>
    </div>-->
    </div>

    <!--<div class="news-block">
    <div class="news-section">
        <img class="news-photo" src="img/news-line-images/news1.png">


        <div class="news-article">
            <div class="news-text">
                Четыре номинации из Центральной Азии включены в Репрезентативный список нематериального культурного
                наследия человечества
            </div>
            <a href="https://ru.unesco.kz/four-nominations-from-central-asia-inscribed-in-the-representative-list-of-the-intangible">Узнать
                больше...</a>

        </div>


    </div>

    <div class="news-section">
        <img class="news-photo" src="img/news-line-images/news2.png" alt=""/>

        <div class="news-article">
            <div class="news-text">
                ЮНЕСКО подготовлен и представлен новый стандарт переподготовки и повышения квалификации сотрудников,
                занимающихся культурным наследием.
            </div>
            <a href="#">Узнать больше...</a>
        </div>


    </div>

    <div class="news-section">
        <img class="news-photo" src="img/news-line-images/news3.png" alt=""/>

        <div class="news-article">
            <div class="news-text">
                41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием ключевых соглашений, свидетельствующих
                о возобновлении многостороннего сотрудничества в области восстановления образования, открытой науки и
                этических аспектов искусственного интеллекта.
            </div>


            <a href="#">Узнать больше...</a>

        </div>


    </div>
</div>-->
    <!--<div class="article-block">

    <div class="article-column" style="margin-left: 20px">
        Казахстан является членом Организации Объединенных Наций по вопросам
        образования, науки и культуры (ЮНЕСКО) с 22 мая 1992 года. В 1994 году в
        Алматы открыло свою работу Кластерное Бюро ЮНЕСКО, охватывающее
        территории Казахстана, Кыргызстана, Таджикистана и Узбекистана.
    </div>
    <div class="image-column">
        <img src="@{img/about/collab-logo-1.png}">
        <img src="@{img/about/collab-logo-2.png}">

    </div>
    <div class="image-column">
        <img src="@{img/about/collab-logo-3.png}">
        <img src="@{img/about/collab-logo-4.png}">
    </div>
    <div class="article-column">
        Национальная Комиссия Республики Казахстан служит связующим звеном между
        ЮНЕСКО и казахстанскими организациями, общинами и институтами в сферах
        образования, науки, культуры и коммуникации. В стране успешно
        функционируют 6 кафедр ЮНЕСКО, свыше 30 ассоциированных школ ЮНЕСКО и
        более 50 клубов ЮНЕСКО.
    </div>

</div>-->
    <!--<div class="article-block-new">
    <div class="ornament-article-block">
        <img src="img/ornament.png" alt="" class="ornament">
    </div>
    <div class="article-block-content">
        <p>Секретариат Национальной Комиссии Республики Казахстан по делам ЮНЕСКО и ИСЕСКО</p>

        <p>Ул. Кунаева, 31 010000 Нур-Султан Казахстан</p>

        <p>Тел: +7(7172) 72.03.27/72.03.20/72.01.40 +7(7172) 72.03.47 (SG)</p>
    </div>
    <div class="ornament-article-block">
        <img src="img/ornament.png" alt="" class="ornament">
    </div>
</div>-->

    <div class="alternate-main-info-block-1">
      <p>
        Казахстан является членом Организации Объединенных Наций по вопросам
        образования, науки и культуры (ЮНЕСКО) с 22 мая 1992 года.
        <br />
        <br />

        В 1994 году в Алматы открыло свою работу Кластерное Бюро ЮНЕСКО,
        охватывающее территории Казахстана, Кыргызстана, Таджикистана и
        Узбекистана. Национальная Комиссия Республики Казахстан служит связующим
        звеном между ЮНЕСКО и казахстанскими организациями, общинами и
        институтами в сферах образования, науки, культуры и коммуникации.
        <br />
        <br />
        В стране успешно функционируют 6 кафедр ЮНЕСКО, свыше 30 ассоциированных
        школ ЮНЕСКО и более 50 клубов ЮНЕСКО.
      </p>

     <a class="more-button" style="text-align: center; text-decoration: none;" href="/about">Узнать больше</a></button>
    </div>

    <div class="alternate-main-info-block-2">
      <div class="ornament-1">
        <img src="img/ornament.png" alt="" />
      </div>

      <div class="info-block-2-text">
        <p>
          Секретариат Национальной Комиссии Республики Казахстан по делам ЮНЕСКО
          и ИСЕСКО
        </p>

        <p>Ул. Кунаева, 31 010000 Нур-Султан Казахстан</p>

        <p>Тел: +7(7172) 72.03.27/72.03.20/72.01.40 +7(7172) 72.03.47 (SG)</p>
      </div>

      <div class="ornament-2">
        <img src="img/ornament.png" alt="" />
      </div>
    </div>
    <div style="width: 100%">
      <img src="img/main-images/map-image.png" style="max-width: 100%" />
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>

  <!--<script>


    var width = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;
    if (width > 800) {
        let oldValue = 0
        let newValue = 0
        const newsBlock = document.querySelector(".news-block")
        window.onscroll = () => {


            newValue = window.pageYOffset;
            let initialPosition = 0;

            if (newsBlock.getBoundingClientRect().bottom <= 800 && oldValue < newValue) {

                initialPosition = window.pageYOffset
                newsBlock.classList.add("fixed-under-navbar");

            }

            if (oldValue > newValue && window.pageYOffset <= initialPosition) {
                newsBlock.classList.remove("fixed-under-navbar");
            }

            oldValue = newValue;

        }
    }

</script>-->
  <script>
    var elementPosition = $(".navbar-unesco").offset();

    $(window).scroll(function () {
      if ($(window).scrollTop() > elementPosition.top) {
        $(".navbar-unesco").css("position", "fixed").css("top", "0");
        $(".quote-block").css("margin-top", "18vmin");
      } else {
        $(".navbar-unesco").css("position", "relative");
        $(".quote-block").css("margin-top", "0");
      }
    });
  </script>
</html>
