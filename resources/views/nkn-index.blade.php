<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="imported-scripts/fit-text/jquery.fittext.js"></script>

    <link href="index-main.css" rel="stylesheet" />
    <title>Главная страница</title>
  </head>
  <body>
    @include('subviews.nkn-navbar')

    <div id="main-globe-block">
      <div id="main-title">
        <h2>
          Рұхани мәдени мұраны қорғау жөніндегі <br />
          Қазақстан ұлттық комитеті
        </h2>
        <p>
          Kazakhstan National Committee for the Safeguarding of<br />
          the Intangible Cultural Heritage
        </p>
      </div>
    </div>
    <div id="main-site-sections-block">
      <div class="main-link-card">
        <div class="main-link-card-inner">
          <img src="assets/flower-placeholder.png" />
          <p>
            <em><a href="#">Новости</a></em>
          </p>
        </div>
      </div>
      <div class="main-link-card">
        <div class="main-link-card-inner">
          <img src="assets/flower-placeholder.png" />
          <p>
            <em><a href="#">Живое наследие</a></em>
          </p>
        </div>
      </div>
      <div class="main-link-card">
        <div class="main-link-card-inner">
          <img src="assets/flower-placeholder.png" />
          <p>
            <em><a href="#">Казахстан во всемирном наследии</a></em>
          </p>
        </div>
      </div>
      <div class="main-link-card">
        <div class="main-link-card-inner">
          <img src="assets/flower-placeholder.png" />
          <p>
            <em><a href="#">Наши проекты</a></em>
          </p>
        </div>
      </div>
    </div>

    <div id="main-quote-block">
      <div id="quote-section">
        <div style="flex: 3">
          …Должны мы наконец-то вырабатывать самое священное отношение к
          памятникам культуры, ибо они призваны воспитывать в юном гражданине
          сознание того, что есть ценности поважнее даже личной выгоды и
          благополучия, ценности, формирующие в подрастающем поколении чувство
          собственного достоинства, чувство совести и ответственности перед
          ушедшими и будущими поколениями.
          <br />
          <br />
          <br />
          <br />
          Должны быть искусство и культура национальные, опять-таки не по
          названию, не только по форме, а по сути, которые опирались бы на
          глубинные истоки, на единый монолит культуры Запада и Востока.
          <br />
          <br />
          И, наконец, должно быть самое что ни на есть прежнее отношение к этой
          земле и немеркнущая память о том, что эта земля прославленных наших
          предков.
          <br />
          <br />
          <h5 style="float: right">
            <em><b>Абдижамил Нурпеисов</b></em>
          </h5>
        </div>
        <p style="flex: 2"></p>
      </div>
    </div>
    <div id="black-footer" style="background-color: #121212"></div>
  </body>
  <!-- <p>
          …Должны мы наконец-то вырабатывать самое священное отношение к
          памятникам культуры, ибо они призваны воспитывать в юном гражданине
          сознание того, что есть ценности поважнее даже личной выгоды и
          благополучия, ценности, формирующие в подрастающем поколении чувство
          собственного достоинства, чувство совести и ответственности перед
          ушедшими и будущими поколениями.
          <br />
          <br />
          Должны быть искусство и культура национальные, опять-таки не по
          названию, не только по форме, а по сути, которые опирались бы на
          глубинные истоки, на единый монолит культуры Запада и Востока.
          <br />
          <br />
          И,наконец, должно быть самое что ни на есть прежнее отношение к этой
          земле и немеркнущая память о том, что эта земля прославленных наших
          предков.
        </p> -->
  <script>
    elementsToFitText = [".main-site-section", "#quote-section"];

    // jQuery("#quote-section").fitText(5);
    jQuery("#main-title").fitText(3.3);
    jQuery(".main-link-card").fitText(1.2);
  </script>
</html>
