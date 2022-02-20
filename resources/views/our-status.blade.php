<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Наш статус</title>
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
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .more-button {
        width: 31vw;
        border: none;
      }

      .about-photo-container > img {
        border-radius: 50%;
      }

      .about-contacts {
        background-color: #d5d5d5;
      }
    </style>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="our-status-header">
      <div class="our-status-header-text">
        <b>Наш статус</b>
        <br />
        <br />
        <p>
          Национальная комиссия Республики Казахстан по делам ЮНЕСКО и ИСЕСКО
          является консультативно-совещательным органом при Правительстве
          Республики Казахстан. Комиссия координирует участие государственных
          органов, учреждений и общественных организаций, действующих в сфере
          образования, науки, культуры и коммуникаций, в международных и
          региональных программах ЮНЕСКО, поддерживает связь с органами ЮНЕСКО.
        </p>
      </div>
      <div class="our-status-header-button-row">
        <button class="more-button">Положение о Национальной Комиссии</button>
        <button class="more-button">Структура Национальной Комиссии</button>
        <button class="more-button">История нашей деятельности</button>
      </div>
    </div>
    <div class="our-status-main-block">
      <div class="our-status-main-block-column-1">
        <div class="grey-card">
          <b>Состав и функции: </b>
          <br />
          <br />
          <p>
            Руководство Национальной комиссией осуществляет <b>председатель</b>,
            в его отсутствие – <b>заместитель</b>.
            <b>Генеральный секретарь</b> руководит оперативной деятельностью,
            обеспечивает выполнение решений и представляет Национальную Комиссию
            в органах ЮНЕСКО и ИСЕСКО.
            <b>Члены Национальной Комиссии</b> формируются из числа
            представителей государственных органов и ведомств, учреждений и
            общественных организаций в сфере компетенции ЮНЕСКО.
          </p>
        </div>
        <button
          class="more-button dark-blue-bkg"
          style="color: white; margin-bottom: 17vw; margin-top: 3vmin"
        >
          <b>Состав комиссии</b>
        </button>
        <div>
          Текущую деятельность Национальной Комиссии обеспечивает
          <b>Секретариат</b> при Министерстве иностранных дел Республики
          Казахстан.
        </div>
        <button class="more-button dark-blue-bkg" style="color: white">
          <b>Органиграмма Национальной Комиссии</b>
        </button>
      </div>
      <div class="our-status-main-block-column-2">
        <div class="about-section">
          <div class="about-photo-section">
            <div class="about-photo-container">
              <img src="assets/avatar-svgrepo-com.svg" />
            </div>
            <b>Председатель</b>
            <p>Lorem ipsum</p>
          </div>
          <div class="about-photo-section">
            <div class="about-photo-container">
              <img src="assets/avatar-svgrepo-com.svg" />
            </div>
            <b>Заместитель председателя</b>
            <p>Lorem ipsum</p>
          </div>
          <div class="about-photo-section">
            <div class="about-photo-container">
              <img src="assets/avatar-svgrepo-com.svg" />
            </div>
            <b>Генеральный секретарь</b>
            <p>Lorem ipsum</p>
          </div>
          <div class="about-photo-section">
            <div class="about-photo-container">
              <img src="assets/avatar-svgrepo-com.svg" />
            </div>
            <b>Постоянный представитель при ЮНЕСКО</b>
            <p>Lorem ipsum</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-title-block">
      <p>Контакты:</p>
      <p></p>
    </div>

    <div class="about-contacts">
      <div class="about-contacts-row">
        <div class="about-contacts-section">
          <div class="about-contacts-img-container">
            <img src="img/about/unesco-logo-about-1.png" />
          </div>
          <div class="about-contacts-paragraph">
            <b class="about-contacts-title"
              >Национальная Комиссия Республики Казахстан по делам ЮНЕСКО и
              ИСЕСКО:
            </b>
            <br />
            <br />
            Ул. Кунаева, 31 010000 Нур-Султан Казахстан
            <br />
            <br />
            Тел: +7(7172) 72.03.47 (SG)<br />
            +7(7172) 72.03.27/72.03.20/72.01.40
          </div>
        </div>
        <div class="about-contacts-section">
          <div class="about-contacts-img-container">
            <img src="img/about/unesco-logo-about-2.png" />
          </div>
          <div class="about-contacts-paragraph">
            <b class="about-contacts-title">Штаб-Квартира ЮНЕСКО</b>
            <br />
            <br />
            Пл. Фонтенуа, 7 75007 Париж
            <br />
            <br />
            Web сайт: https://en.unesco.org/
          </div>
        </div>
      </div>
      <div class="about-contacts-row">
        <div class="about-contacts-section">
          <div class="about-contacts-paragraph">
            <b class="about-contacts-title"
              >Постоянное Представительство Республики Казахстан при ЮНЕСКО:
            </b>
            <br />
            <br />
            Ул. Пьер Шаррон, 59 75008 Париж
            <br />
            <br />
            Тел: (+33) 01.45.61.52.00
            <br />
            Факс: (+33) 01.42.25.11.11
            <br />
            <br />
            E-mail: dl.kazakhstan@unesco-delegations.org
          </div>
        </div>
        <div class="about-contacts-section">
          <div class="about-contacts-paragraph">
            <b class="about-contacts-title"
              >Кластерное Бюро ЮНЕСКО в Алматы по Казахстану, Кыргызстану,
              Таджикистану и Узбекистану</b
            >
            <br />
            <br />
            Алматы, ул. Байзакова 303 050040 Казахстан
            <br />
            Тел:+7(7272) 58.26.43
            <br />
            E-mail: almaty@unesco.org
            <br />
            <br />
            Web сайт: http://ru.unesco.kz/about-unesco-almaty-cluster-office
          </div>
        </div>
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
