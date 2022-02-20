<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org" lang="ru">
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
    <link rel="stylesheet" href="css/another-style.css" />
    <title>
      41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием ключевых
      соглашений, свидетельствующих о возобновлении многостороннего
      сотрудничества в области восстановления образования, открытой науки и
      этических аспектов искусственного интеллекта. Организация отметила свою
      75-ю годовщину в ходе этой сессии.
    </title>
  </head>
  <body>
    @include('subviews.navbar')

    <div class="news-page-main-container">
      <img
        class="news-page-header-image"
        src="img/news-line-images/news3.png"
      />
      <div class="news-page-title">
        41-я сессия Генеральной конференции ЮНЕСКО завершилась принятием
        ключевых соглашений, свидетельствующих о возобновлении многостороннего
        сотрудничества в области восстановления образования, открытой науки и
        этических аспектов искусственного интеллекта. Организация отметила свою
        75-ю годовщину в ходе этой сессии.
      </div>
      <div class="news-page-paragraph">
        <b> 25 ноября 2021 </b>
        <br />
        <br />
        9 ноября 193 государства-члена Организации подавляющим большинством
        проголосовали в поддержку кандидатуры г-жи Одрэ Азуле на второй
        четырехлетний срок в качестве Генерального директора ЮНЕСКО.
        Государства-члены одобрили Парижскую декларацию: глобальный призыв к
        инвестированию в будущее образования на совещании, в котором 10 ноября
        приняли участие главы государств и правительств и министры образования
        из 40 стран. Цель этого совещания заключалась в том, чтобы расширить
        поддержку в области образования после пандемии COVID-19. Ключевой частью
        этого мероприятия стала презентация доклада «Совместное переосмысление
        наших перспектив: новый общественный договор в области образования»,
        проведенная Генеральным директором ЮНЕСКО и президентом Эфиопии
        Сахле-Ворк Зевде. Государства-члены ЮНЕСКО приняли первую в истории
        глобальную Рекомендацию по этическим аспектам искусственного интеллекта.
        Еще одним знаменательным событием стала Рекомендация ЮНЕСКО по открытой
        науке, которая была также принята в ходе Генеральной конференции. Это
        соглашение, имеющее особое значение для глобального научного
        сотрудничества в связи с пандемией COVID-19, способствует равенству
        между учеными, с тем чтобы население и лица, ответственные за разработку
        политики, имели возможность пожинать плоды достижений науки.
      </div>
      <div class="news-page-photo-paragraph-row">
        <img class="news-page-photo" src="img/news-line-images/news3-1.jpg" />
        <div class="news-page-paragraph">
          Кроме того, ЮНЕСКО прошла важную веху, отпраздновав свою 75-ю
          годовщину специальной церемонией, в которой приняли участие 28 глав
          государств и правительств. На церемонии выступали многие ведущие
          международные музыканты и артисты. В ходе этой сессии Организация
          также отметила годовщину своей Программы «Человек и биосфера», которая
          на протяжении последних пятидесяти лет является средством достижения
          прогресса в области устойчивого развития и обмена идеями и примерами
          наилучшей практики в мире. Наконец, Аландские острова, являющиеся
          частью Финляндии с автономным статусом, стали 12-м ассоциированным
          членом ЮНЕСКО.
        </div>
      </div>

      <div style="display: flex; max-width: 100%; justify-content: flex-end">
        <a
          href="https://ru.unesco.org/news/v-hode-generalnoy-konferencii-yunesko-byli-zaklyucheny-globalnye-soglasheniya-v-oblasti"
          >Узнать больше</a
        >
      </div>
    </div>
    <div class="panel"></div>
    <div class="footer"></div>
  </body>
</html>
