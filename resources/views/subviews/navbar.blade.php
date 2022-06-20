<div class="navbar-unesco">
    <div class="logo">
      <a href="/"
        ><img src="{{ asset('img/icons/logo_new.jpg') }}" id="logo-image"
      /></a>
    </div>
    <img src="{{ asset('img/icons/menu.svg') }}" class="menu-icon" alt="menu" />

    <div class="navbar-links">
      <div class="dropdown show">
        <a
          class="btn dropdown-toggle"
          href="news"
          role="button"
          id="dropdownMenuLink"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Новости
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/news">Последние новости</a>
          <a class="dropdown-item" href="/news-archive"
            >Архив новостей
          </a>
        </div>
      </div>
      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show dropdown"
          href="/our-status"
          role="button"
          id="about"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          О нас
        </a>

        <div class="dropdown-menu" aria-labelledby="about">
          <a class="dropdown-item" href="/our-status">Наш статус</a>
          <a class="dropdown-item" href="/contacts">Наши контакты</a>
          <a class="dropdown-item" href="#">История деятельности</a>
        </div>
      </div>
      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show"
          href="/our-activity"
          id="activity"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Что мы делаем
        </a>

        <div class="dropdown-menu" aria-labelledby="activity">
          <a href="/education" class="dropdown-item">Образование</a>
          <a href="/social-sciences" class="dropdown-item"
            >Социальные науки</a
          >
          <a href="/hard-sciences" class="dropdown-item"
            >Естественные науки</a
          >
          <a href="/culture" class="dropdown-item">Культура</a>
          <a href="/cultural-heritage" class="dropdown-item"
            >Культурное наследие</a
          >
          <a href="/communication" class="dropdown-item">Коммуникации</a>
        </div>
      </div>

      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show"
          href="/how-we-work"
          role="button"
          id="work"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Как мы работаем
        </a>

        <ul class="dropdown-menu" aria-labelledby="work">
          <li>
            <a href="#" id="workOrganization" class="dropdown-item"
              >Организация работы
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <a href="#" class="dropdown-item">Полезные ссылки</a>
            </ul>
          </li>

          <a href="#" class="dropdown-item"
            >Секретариат Национальной Комиссии</a
          >
          <li>
            <a href="#" class="dropdown-item">Национальные комитеты ЮНЕСКО</a>
            <ul class="dropdown-menu dropdown-submenu">
              <a href="/nkn-index" class="dropdown-item">Национальный Комитет НКН</a>
              <a href="#" class="dropdown-item">Национальный Комитет МАБ</a>
              <a href="#" class="dropdown-item"
                >Национальный Комитет "Память мира"</a
              >
              <a href="#" class="dropdown-item">Национальный комитет...</a>
            </ul>
          </li>
          <a href="/faculties" class="dropdown-item">Кафедры ЮНЕСКО</a>
          <a href="#" class="dropdown-item">Ассоциированные школы ЮНЕСКО</a>
          <a href="#" class="dropdown-item">Клубы ЮНЕСКО</a>
        </ul>
      </div>
      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show"
          href="#"
          role="button"
          id="unescoProjects"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Проекты ЮНЕСКО в Казахстане
        </a>

        <!-- <div class="dropdown-menu" aria-labelledby="unescoProjects">

                     </div>-->
      </div>

      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show"
          href="/partners"
          role="button"
          id="organizations"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Наши партнеры
        </a>

        <div class="dropdown-menu" aria-labelledby="work">
          <a href="#" class="dropdown-item">ЮНЕСКО Париж</a>
          <a href="#" class="dropdown-item">ЮНЕСКО Алматы</a>
          <a href="#" class="dropdown-item"
            >Национальные Комиссии стран Центральной Азии</a
          >
          <a href="#" class="dropdown-item">Сотрудничающие Центры ЮНЕСКО</a>
          <a href="/partners" class="dropdown-item">ИСЕСКО</a>
          <a href="#" class="dropdown-item">ТЮРКСКОЙ</a>
        </div>
      </div>
    </div>
    <div class="navbar-right">
      <div class="dropdown show">
        <a
          class="btn dropdown-toggle show"
          href="#"
          role="button"
          id="lang-dropdown"
          data-hover="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          РУ
        </a>

        <div class="dropdown-menu" aria-labelledby="lang">
          <a href="#" class="dropdown-item">КАЗ</a>
          <a href="#" class="dropdown-item">ENG</a>
        </div>
      </div>
      <div class="search">
        <img src="{{ asset('img/search-icon.png') }}" />
      </div>
    </div>
  </div>
