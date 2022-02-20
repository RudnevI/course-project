<!DOCTYPE html>
<html lang="en">
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

    <title>Что мы делаем</title>
    <style>
      .carousel-control-prev,
      .carousel-control-next {
        top: 94%;
      }
    </style>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="container-fluid how-we-work-new-version-header"></div>
    <div
      class="container-fluid how-we-work-new-version-header-quote d-flex align-items-center"
    >
      <div class="d-flex flex-column">
        <div style="text-align: center">
          Мысли о войне возникают в умах людей, поэтому в сознании людей следует
          укоренять идею защиты мира
        </div>
        <div style="align-self: flex-end">
          <i>Устав ЮНЕСКО</i>
        </div>
      </div>
    </div>
    <div class="container-fluid d-flex flex-column our-activity-main-section">
      <div
        class="d-flex flex-sm-column flex-md-row justify-content-center"
        style="column-gap: 10vw"
      >
        <div class="our-activity-card" style="flex: 1">
          <b>Что мы делаем?</b>
          <br />
          <br />

          Политических и экономических соглашений между правительствами
          недостаточно для обеспечения прочной и искренней поддержки стремлений
          народов.
          <br />
          <br />

          Прочный мир должен строиться на основе диалога и взаимопонимания, а
          также на интеллектуальной и нравственной солидарности человечества.
        </div>
        <div class="our-activity-logo" style="flex: 1">
          <img
            class="img-fluid"
            src="img/our-activity-logo.png"
            style="width: 27vw; height: auto"
          />
        </div>
      </div>
      <div class="d-flex flex-column" style="row-gap: 3vmin">
        <b
          >Поэтому ЮНЕСКО разрабатывает образовательные инструменты для
          формирования граждан будущего, свободных от ненависти и нетерпимости.
        </b>
        <div>
          - ЮНЕСКО предпринимает усилия, чтобы каждый ребенок и гражданин имели
          доступ к качественному образованию.
        </div>

        <div>
          - Содействуя сохранению культурного наследия и защищая равное
          достоинство всех культур, ЮНЕСКО укрепляет связи между ними.
        </div>

        <div>
          - ЮНЕСКО помогает разрабатывать научно-исследовательскую политику в
          качестве движущей силы развития и сотрудничества.
        </div>

        <div>
          - ЮНЕСКО защищает свободу выражения мнений как фундаментальное право и
          необходимое условие демократии и развития.
        </div>

        <div>
          - ЮНЕСКО выступает в качестве лаборатории идей, устанавливает
          международные стандарты и осуществляет программы сотрудничества,
          способствующие свободному обмену идеями и знаниями.
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="education.html">
              <img
                class="our-activity-slider-image"
                src="img/subsections/education.png"
                alt="First slide"
              />
            </a>
            <div class="carousel-panel-black p-2">Образование</div>
          </div>
          <div class="carousel-item">
            <a href="communication.html">
            <img
              class="our-activity-slider-image"
              src="img/subsections/communication.png"
              alt="Second slide"
            />
          </a>
          </a>
            <div class="carousel-panel-black p-2">Коммуникации</div>
          </div>
          <div class="carousel-item">
            <a href="cultural-heritage.html">
            <img
              class="our-activity-slider-image"
              src="img/subsections/cultural_heritage.png"
              alt="Third slide"
            />
          </a>
            <div class="carousel-panel-black p-2">Культурное наследие</div>
          </div>
          <div class="carousel-item">
            <a href="culture.html">
            <img
              class="our-activity-slider-image"
              src="img/subsections/culture.png"
              alt="Third slide"
            />
          </a>
            <div class="carousel-panel-black p-2">Культура</div>
          </div>
          <div class="carousel-item">
            <a href="hard-sciences.html">
              <img
                class="our-activity-slider-image"
                src="img/subsections/hard_sciences.png"
                alt="Third slide"
              />
            </a>
            <div class="carousel-panel-black p-2">Естественные науки</div>
          </div>
          <div class="carousel-item">
            <a href="social-sciences.html">
              <img
                class="our-activity-slider-image"
                src="img/subsections/social_sciences.png"
                alt="Third slide"
              />
            </a>
            <div class="carousel-panel-black p-2">Социальные науки</div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div style="height: 28vmin"></div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
