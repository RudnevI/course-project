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
    <title>Культурное и природное наследие</title>
  </head>
  <body>
    @include('subviews.navbar')
    <div>
      <div>
        <div
          class="header-subsection"
          style="background-image: url(img/subsections/cultural_heritage.png)"
        ></div>
        <div
          class="container-fluid d-flex p-2 justify-content-center"
          style="background-color: black; color: white; font-size: 2vw"
        >
          <div>Культурное и природное наследие</div>
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
            В условиях современного мира, где всё взаимосвязано, становится
            очевидна способность культуры преобразовывать общество. Различные
            проявления культуры, будь то ценные исторические памятники, музеи,
            обычаи или современные виды искусства, обогащают нашу повседневную
            жизнь самыми различными способами. Наследие представляет собой
            неистощимый источник самобытности и содействует сплоченности общин,
            разрозненных в результате ошеломляющих перемен и экономической
            нестабильности. Творчество, в свою очередь, способствует построению
            открытых, инклюзивных и плюралистических обществ. Совместно наследие
            и творчество закладывают основы для динамичных, инновационных и
            процветающих обществ знаний.
          </p>

          <p>
            Как в сфере охраны культурного наследия, так и в области культурных
            и творческих индустрией, культура является одновременно необходимым
            условием и движущей силой экономического, социального и
            экологического аспекта устойчивого развития.
          </p>

          <p>
            Широко известные конвенции ЮНЕСКО в сфере культуры обеспечивают
            единую для всего мира основу для международного сотрудничества и
            составляют комплексную систему управления культурой, основанную на
            правах человека и общечеловеческих ценностях. Эти международные
            соглашения призваны защитить и сохранить всемирное культурное и
            природное наследие, в том числе древние археологические объекты,
            нематериальное и подводное наследие, музейные коллекции, устные
            традиции и другие виды наследия. Кроме того, они ставят своей целью
            поощрение творчества, инноваций и формирование динамичных сфер
            культуры.
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
                src="img/subsections/grids/heritage-1.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и всемирное наследие в Казахстане
              </div>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a
              href="http://ru.unesco.kz/four-nominations-from-central-asia-inscribed-in-the-representative-list-of-the-intangible"
              class="d-flex flex-column"
              style="row-gap: 3vmin"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/heritage-2.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и всемирное наследие в Центральной Азии
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
          <div class="d-flex flex-column" style="row-gap: 3vmin">
            <a
              href="https://ru.unesco.org/themes/ohrana-naslediya-i-razvitie-tvorcheskogo-potenciala"
              style="row-gap: 3vmin"
              class="d-flex flex-column"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/heritage-3.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и всемирное наследие в мире
              </div>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a
              href="https://bangkok.unesco.org/theme/culture"
              class="d-flex flex-column"
              style="row-gap: 3vmin"
            >
              <img
                style="height: 30vmin; width: 58vmin"
                src="img/subsections/grids/heritage-4.png"
              />
              <div style="text-align: center; width: 58vmin">
                ЮНЕСКО и всемирное наследие в Азиатско-Тихоокеанском регионе
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer"></div>
  </body>
</html>
