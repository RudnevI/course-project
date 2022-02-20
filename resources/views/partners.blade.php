<!DOCTYPE html>
<html
  xmlns:th="http://thymeleaf.org"
  xmlns="http://www.w3.org/1999/html"
  lang="ru"
>
  <head>
    <meta charset="UTF-8" />
    <title>Наши партнеры</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/another-style.css" />
    <style>
      .history-header {
        margin-top: 10vh;
        align-items: flex-start;
        font-style: italic;
        padding-left: 3vw;
        flex-direction: column;
        background-image: url("img/partners/flags.png");
      }

      .history-header > * {
        width: 40%;
      }

      .partners-inner-paragraph {
        font-size: 1vw;
        font-style: normal;
      }

      .division-text {
        top: 50%;
        left: 20%;
      }
    </style>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="history-header">
      <div><b>Наши партнеры:</b></div>
      <div class="partners-inner-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis
        commodi consectetur dolor eos eum illum, laborum placeat velit
        voluptatibus? Accusantium dolores eum eveniet hic illum incidunt nisi,
        perferendis. Suscipit.
      </div>
    </div>

    <div class="partners-grid">
      <div class="partners-row">
        <div class="partners-item">
          <div class="partners-caption">ЮНЕСКО Париж</div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
        <div class="partners-item">
          <div class="partners-caption">ЮНЕСКО Алматы</div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
      </div>
      <div class="partners-row">
        <div class="partners-item">
          <div class="partners-caption">
            Национальные комисии<br />
            стран Центральной Азии
          </div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
        <div class="partners-item">
          <div class="partners-caption">
            Сотрудничающие центры<br />
            ЮНЕСКО
          </div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
      </div>
      <div class="partners-row">
        <div class="partners-item">
          <div class="partners-caption">ИСЕСКО</div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
        <div class="partners-item">
          <div class="partners-caption">ТЮРСКОЙ</div>
          <div style="flex: 1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
            aliquid deleniti dicta dolores dolorum esse facilis fugiat illo
            ipsum iure labore libero magnam, odit pariatur quam soluta,
            voluptas. Delectus dolor est incidunt magni minus modi nisi officia
            provident repellendus voluptatem.
          </div>
        </div>
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
