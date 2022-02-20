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
    <link rel="stylesheet" href="css/contacts.css" />
    <title>Контакты</title>
  </head>
  <body>
    @include('subviews.navbar')
    <div class="home_main">
      <div class="container-fluid mt-5 about">
        <div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-3 col-sm-3">
            <b>КОНТАКТЫ</b>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-8 col-sm-8">
            <hr />
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-2 col-sm-2">
            <img
              src="img/about/unesco-logo-about-1.png"
              ;
              alt="UNESCO Kazakhstan"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 col-sm-6">
            <b
              >Национальная Комиссия Республики Казахстан по делам ЮНЕСКО и
              ИСЕСКО</b
            ><br /><br />
            Ул. Кунаева, 31 010000 Нур-Султан Казахстан<br />
            Тел: +7(7172) 72.03.47 (SG)<br />
            +7(7172) 72.03.27/72.03.20/72.01.40<br />Факс: Email:
            a.baisabayev@mfa.gov.kz
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4 col-sm-4"></div>
          <div class="col-md-6 col-sm-6">
            <b>Постоянное Представительство Республики Казахстан при ЮНЕСКО</b
            ><br /><br />
            Ул. Пьер Шаррон, 59 75008 Париж<br />
            Тел: (+33) 01.45.61.52.00 <br />Факс: (+33) 01.42.25.11.11<br />
            E-mail: dl.kazakhstan@unesco-delegations.org
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-2 col-sm-2">
            <img
              src="img/about/unesco-logo-about-2.png"
              alt="Another UNESKO logo"
              class="img-fluid"
            />
          </div>

          <div class="col-md-6 col-sm-6">
            <b>Штаб-Квартира ЮНЕСКО</b>
            <br />
            <br />

            Пл. Фонтенуа, 7 75007 Париж <br />
            Web сайт: https://en.unesco.org/
          </div>
        </div>
        <div class="row mt-3 mb-4">
          <div class="col-md-4 col-sm-4"></div>
          <div class="col-md-6 col-sm-6">
            <b
              >Кластерное Бюро ЮНЕСКО в Алматы по Казахстану, Кыргызстану,
              Таджикистану и Узбекистану</b
            >
            <br />
            <br />Алматы, ул. Байзакова 303 050040 Казахстан <br />Тел:+7(7272)
            58.26.43<br />
            E-mail: almaty@unesco.org<br />
            Web сайт:
            <a href="http://ru.unesco.kz/about-unesco-almaty-cluster-office"
              >http://ru.unesco.kz/about-unesco-almaty-cluster-office</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
