<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" lang="ru">
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
    <!--    <link rel="stylesheet" href="../css/another-style.css"/>-->
    <title>О нас</title>
    <style>
      .more-button {
        width: 31vw;
      }
    </style>
  </head>
  <body>
   @include('subviews.navbar')

    <!--<div class="about-header">
    <div class="about-orange-layer">
        <div class="about-title">О нас:</div>
        <div class="about-header-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad necessitatibus quos repellendus. At aut
            doloremque
            expedita illum molestiae nesciunt tempora. Expedita nihil numquam quasi repellat vitae. Architecto autem
            cumque
            dolores eaque esse iste itaque labore magnam, non, nostrum nulla optio provident quae quam quos ratione
            recusandae repudiandae, sint sunt temporibus unde voluptates voluptatibus? Aperiam eos harum quidem quis
            repellendus voluptas?
        </div>
    </div>

</div>-->
    <!--<div class="about-contacts-section">
    <div class="about-contacts-section-title">Контакты:</div>

    <div id="carouselExampleControls" class="carousel slide about-contacts-slider" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="about-contacts-slider-row">
                    <img class="" src="../assets/img_placeholder.jpg" alt="Second slide">
                    <div class="contacts-info">
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div class="contacts-info-bottom">(адреса и контакты)</div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="about-contacts-slider-row">
                    <img class="" src="../assets/img_placeholder.jpg" alt="Second slide">
                    <div class="contacts-info">
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div class="contacts-info-bottom">(адреса и контакты)</div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="about-contacts-slider-row">
                    <img class="" src="../assets/img_placeholder.jpg" alt="Second slide">
                    <div class="contacts-info">
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div class="contacts-info-bottom">(адреса и контакты)</div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<div class="history-header">
    <div><b>История:</b></div>
</div>
<div class="history-section">
    <div class="history-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eum exercitationem iste obcaecati ut. Animi
        aperiam architecto aspernatur blanditiis, commodi consectetur cupiditate deleniti dignissimos dolorum ea, enim
        eum hic illo ipsam iste laudantium libero molestias nam natus nobis perspiciatis possimus provident quis
        quisquam quod ratione reprehenderit sequi sunt temporibus tenetur ut veritatis vero voluptatibus! Accusamus
        aliquam atque consectetur culpa cupiditate deserunt doloribus eius esse ex fuga fugiat illum iste itaque iusto
        magni maiores modi molestiae neque numquam optio porro provident quam quidem sed suscipit ut veritatis,
        voluptate? Aliquam atque cumque distinctio earum eum hic inventore iste minus perferendis quasi quo vel
        voluptas, voluptate. Eveniet fugit mollitia nostrum repudiandae saepe sit! Alias asperiores commodi eos error et
        fuga hic laudantium nemo obcaecati, perspiciatis quisquam reiciendis repellendus voluptatibus? Aspernatur in
        magni natus omnis, vel voluptate? Asperiores autem corporis dolore, dolorum eaque exercitationem, illum impedit
        ipsum laboriosam, laborum natus neque obcaecati recusandae similique suscipit tempore temporibus. A aspernatur
        commodi cum eaque esse facilis incidunt iusto molestiae nam nisi officiis pariatur quae quasi rem saepe sed sit,
        sunt unde vitae voluptatum! Architecto libero natus nemo officiis quae quibusdam quos tempore vero! Ea ex quia
        temporibus voluptas. Assumenda aut consectetur consequatur culpa delectus eligendi eos, eum fugiat fugit in
        libero minima nostrum numquam quidem reiciendis suscipit vero. Amet animi aspernatur atque aut dolore doloribus,
        ea esse facilis natus perspiciatis placeat quasi, quia quos soluta vero. Consectetur cupiditate distinctio ea
        necessitatibus nemo neque nisi veritatis vero? A adipisci autem cumque delectus dignissimos dolor dolorem
        doloremque doloribus eos error eveniet ex exercitationem fugit id, iure libero molestiae natus nisi, nulla

    </div>
    <img class="img-fluid" src="../assets/img_placeholder.jpg">
</div>-->

    <div class="about-title-block">
      <p>О нас:</p>
      <p></p>
    </div>

    <div class="about-sections">
      <div class="about-section">
        <b>Наш статус:</b>

        <p class="about-paragraph">
          Национальная комиссия Республики Казахстан по делам ЮНЕСКО и ИСЕСКО
          является консультативно-совещательным органом при Правительстве
          Республики Казахстан. Комиссия координирует участие государственных
          органов, учреждений и общественных организаций, действующих в сфере
          образования, науки, культуры и коммуникаций, в международных и
          региональных программах ЮНЕСКО, поддерживает связь с органами ЮНЕСКО.
        </p>
        <a href="#">Положение о комиссии...</a>
        <a href="#">История нашей деятельности (факты и лица)...</a>
      </div>
      <div class="about-section">
        <b>Состав и функции:</b>

        <p class="about-paragraph">
          Руководство Национальной комиссией осуществляет председатель, в его
          отсутствие – заместитель. Генеральный секретарь руководит оперативной
          деятельностью, обеспечивает выполнение решений и представляет
          Национальную Комиссию в органах ЮНЕСКО и ИСЕСКО.
        </p>
        <a href="#">Состав Комиссии… </a>
        <p class="about-paragraph">
          <b>Секретариат: </b>Текущую деятельность Национальной Комиссии
          обеспечивает Секретариат при Министерстве иностранных дел Республики
          Казахстан.
          <br />
          <b>Члены Национальной Комиссии</b> формируются из числа представителей
          государственных органов и ведомств, учреждений и общественных
          организаций в сфере компетенции ЮНЕСКО.
        </p>
        <a href="#">Состав Комиссии… </a>
      </div>
      <div class="about-section">
        <div class="about-photo-section">
          <div class="about-photo-container">
            <img src="img/subsections/author_placeholder.png" />
          </div>
          <b>Председатель</b>
          <p>Lorem ipsum</p>
        </div>
        <div class="about-photo-section">
          <div class="about-photo-container">
            <img src="img/subsections/author_placeholder.png" />
          </div>
          <b>Заместитель председателя</b>
          <p>Lorem ipsum</p>
        </div>
        <div class="about-photo-section">
          <div class="about-photo-container">
            <img src="img/subsections/author_placeholder.png" />
          </div>
          <b>Генеральный секретарь</b>
          <p>Lorem ipsum</p>
        </div>
        <div class="about-photo-section">
          <div class="about-photo-container">
            <img src="img/subsections/author_placeholder.png" />
          </div>
          <b>Постоянный представитель при ЮНЕСКО</b>
          <p>Lorem ipsum</p>
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
            <a href="/contacts"
              ><img src="img/about/unesco-logo-about-1.png"
            /></a>
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
            <a href="/contacts"
              ><img src="img/about/unesco-logo-about-2.png"
            /></a>
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
