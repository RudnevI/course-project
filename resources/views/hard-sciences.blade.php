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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/another-style.css" />
    <style>
      a,
      a:hover,
      a:active {
        color: white;
        text-decoration: none;
      }
    </style>
    <title>Естественные науки</title>
  </head>
  <body>
    @include('subviews.navbar')
    <div>
      <div>
        <div
          class="header-subsection"
          style="background-image: url(img/subsections/hard_sciences.png)"
        ></div>
        <div
          class="container-fluid d-flex p-2 justify-content-center"
          style="background-color: black; color: white; font-size: 2vw"
        >
          <div>Естественные науки</div>
        </div>
      </div>
    </div>
    <div class="subsection-main-container">
      <div
        style="
          padding-bottom: 10vmin;
          padding-top: 4vmin;
          width: 70%;
          margin: auto;
          min-height: 90vh;
        "
      >
        <div>
          <p>
            Научные знания и понимание окружающего мира позволяют человечеству
            найти решения для актуальных проблем экономического, социального и
            экологического характера и обеспечить устойчивое развитие в
            сочетании с заботой об окружающей среде. Ни одна страна не может
            достигнуть устойчивого развития в одиночку. Международное
            сотрудничество в области наук имеет большое значение не только для
            расширения научных знаний, но и для достижения мира.
          </p>

          <p>
            ЮНЕСКО помогает странам осуществлять инвестиции в науку, технологии
            и инновации, разрабатывать национальную политику в сфере наук,
            проводить реформирование научных систем и развивать потенциал в
            области мониторинга и оценки эффективности с учетом специфики
            отдельных стран.
          </p>

          <p>
            Однако одной научной политики недостаточно. Чтобы страны были
            способны сами находить решения к касающимся их проблемам и занять
            надлежащее место на международной научно-технической арене, им
            необходимо развивать научно-исследовательский потенциал и укреплять
            систему естественнонаучного и инженерного образования на всех
            уровнях.
          </p>
          <p>
            Установление связи между наукой и нуждами общества, понимание
            общественностью роли науки и участие граждан в научной жизни
            общества создают основу для общества, члены которого обладают
            знаниями, необходимыми для того, чтобы принимать осознанные решения
            в профессиональном, личном и политическом плане и участвовать в
            увлекательном мире открытий. Системы знаний коренных народов,
            сложившиеся в результате долгого и тесного взаимодействия с
            природой, дополняют системы знаний, основанные на современной науке.
          </p>

          <p>
            Наука и технологии расширяют возможности общества и его членов, но
            одновременно с этим поднимают некоторые вопросы этического
            характера. ЮНЕСКО сотрудничает со своими государствами-членами в
            стремлении создать благоприятные условия для принятия обоснованных
            решений относительно использования наук и технологий, в частности в
            области биоэтики.
          </p>

          <p>
            Кроме того, научные знания об истории Земли, минеральных ресурсах,
            экосистемах, биоразнообразии и взаимодействии человека и экосистем
            позволяют нам найти более эффективные способы управления ресурсами
            планеты в интересах мирного и устойчивого будущего.
          </p>
        </div>
      </div>
    </div>
    <div
      class="container-fluid d-flex flex-column"
      style="
        padding-top: 5vmin;
        padding-bottom: 4vmin;
        background-color: #0069b3;
        color: white;
        font-size: 1.3vw;
        row-gap: 6vmin;
      "
    >
      <div
        class="d-flex flex-row justify-content-center"
        style="column-gap: 6vw"
      >
        <div>
          <div>
            <a href="#" class="d-flex flex-column" style="row-gap: 3vmin">
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/science-1.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и науки в Казахстане
              </div>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a
              href="http://ru.unesco.kz/sector/natural-sciences"
              class="d-flex flex-column"
              style="row-gap: 3vmin"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/science-2.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и науки в Центральной Азии
              </div>
            </a>
          </div>
        </div>
      </div>
      <div
        class="d-flex flex-row justify-content-center"
        style="column-gap: 6vw"
      >
        <div>
          <div>
            <a
              href="https://ru.unesco.org/themes/science-sustainable-future"
              class="d-flex flex-column"
              style="row-gap: 3vmin"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/science-3.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и науки в мире
              </div>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a
              href="https://bangkok.unesco.org/theme/natural-sciences"
              class="d-flex flex-column"
              style="row-gap: 3vmin"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/science-4.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и науки в Азиатско-Тихоокеанском регионе
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer"></div>
  </body>
</html>
