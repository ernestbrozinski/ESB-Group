<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?><?php echo get_template_directory_uri() ?>/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/css.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/css-640.css">
  <title>ESB Group</title>
</head>
<body>

  <div class="modal" id="client-modal">
    <a href="#" class="close"></a>
    <a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""></a>
    <form method="POST">
      <label>
        <span>Имя</span>
        <div class="label-content">
          <input type="text" placeholder="Гурам Беридзе">
        </div>
      </label>
      <label>
        <span>Телефон</span>
        <div class="label-content">
          <input id="tel" type="text" placeholder="(+995) 123 45-67-89">
        </div>
      </label>
      <a href="#" class="btn">
        <span>Отправить</span>
      </a>
    </form>
  </div>

  <header class="desktop">
    <div class="container">
      <div class="left-side">
        <a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""></a>
        <nav>
          <a href="#services">Услуги</a>
          <a href="#projects">Проекты</a>
          <a href="#about-co">О компании</a>
          <a href="#partners">Партнеры</a>
          <a href="#contacts">Контакты</a>
        </nav>
      </div>
      <div class="right-side">
        <a href="#client-modal" class="btn modal-btn">
          <img src="<?php echo get_template_directory_uri() ?>/images/user.svg" alt="">
          <span>Стать клиентом</span>
        </a>
        <div class="lang-dropdown-wrap">
          <span id="lang-dropdown-btn"><img src="<?php echo get_template_directory_uri() ?>/images/flag-rus.svg" alt="">RUS</span>
          <div class="lang-dropdown">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/flag-en.svg" alt="">ENG</a>
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/flag-ge.svg" alt="">GE</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <header class="mobile">
    <div class="container">
      <a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""></a>
      <a href="#" id="btn-menu"><img src="<?php echo get_template_directory_uri() ?>/images/menu.svg" alt=""></a>
    </div>

    <div id="mobile-menu">
      <a href="#" class="" id="mob-menu-close"><img src="<?php echo get_template_directory_uri() ?>/images/menu-close.svg" alt=""></a>
      <a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""></a>
      <nav>
        <a href="#services">Услуги</a>
        <a href="#projects">Проекты</a>
        <a href="#about-co">О компании</a>
        <a href="#partners">Партнеры</a>
        <a href="#contacts">Контакты</a>
      </nav>
      <a href="#client-modal" class="btn modal-btn">
        <img src="<?php echo get_template_directory_uri() ?>/images/user.svg" alt="">
        <span>Стать клиентом</span>
      </a>
      <div class="lang-dropdown-wrap">
        <span id="lang-dropdown-btn-mob"><img src="<?php echo get_template_directory_uri() ?>/images/flag-rus.svg" alt="">RUS</span>
        <div class="lang-dropdown">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/flag-en.svg" alt="">ENG</a>
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/flag-ge.svg" alt="">GE</a>
        </div>
      </div>
    </div>
  </header>

  <div class="main-video video-preview">
    <video  preload="auto" no-controls autoplay loop playsinline muted>
      <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
    </video>
  </div>

  <div class="about-block">
    <div class="container">
      <h1 class="about-block-capt">Компания <b>“ESB GROUP”</b><br/> <span class="gradient-text">Высший уровень сервиса</span><br/> с упором на главное.</h1>
      <span class="about-block-desc">Лидеры в сфере  отопления, вентиляции и кондиционирования.<br/> Мы здесь, чтобы помочь вам!</span>
      <img src="<?php echo get_template_directory_uri() ?>/images/white-logo.svg" alt="" class="logo">
    </div>
  </div>

  <div class="services-block" id="services">
    <div class="container">
      <h4 class="block-caption gradient-text">Услуги</h4>
      <div class="tabs-wrap">
        <div class="tabs">
          <span class="tab">Кондиционирование</span>
          <span class="tab">Вентиляция</span>
          <span class="tab">Электронные системы безопасности</span>
          <span class="tab">Отопление</span>
          <span class="tab">BMS. Система управления домом</span>
          <span class="tab">Электронные системы безопасности</span>
        </div>

        <div class="tabs-content">
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/video-preview.png" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">2 Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/projects/project2.jpeg" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">3 Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">4 Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/projects/project4.jpeg" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">5 Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
          <div class="tab-content">
            <div class="video-wrap">
              <div class="video-preview">
                <img src="<?php echo get_template_directory_uri() ?>/images/projects/project5.jpeg" alt="">
              </div>
              <video preload="auto" controls>
                <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/mp4">
              </video>
            </div>
            <span class="tab-info">6 Электронная система безопасности (ЭСБ) - совокупность технических устройств, включающая радиотехнические, электронно-оптические, электронно-вычислительные и другие устройства, а также оператора, и выполняющая определенные функции по обеспечению безопасности объекта, процесса его работы и персонала, территорий</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects-block" id="projects">
    <div class="container">
      <h4 class="block-caption gradient-text">Проекты</h4>

      <div class="swiper swiper-projects-main">
        
        <div class="swiper-wrapper">
          
          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project2.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project4.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 2</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 3</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project2.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project4.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 2</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 3</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project2.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project4.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 2</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-item-wrap">

              <div class="swiper swiper-projects-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="project-item-content">
                <span class="project-item-title">Установка пожарной системы в БЦ Олимп 3</span>
                <span class="project-item-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                <ul class="project-info-list">
                  <li><span>Площадь объекта:</span><span>3450 m<sup>2</sup></span></li>
                  <li><span>Срок выполнения:</span><span>12 дней</span></li>
                </ul>
                <a href="#" class="btn-recomend" download><span>Рекомендательное письмо <img src="<?php echo get_template_directory_uri() ?>/images/circle-arrow-right.svg" alt=""></span></a>
                <a href="#" class="btn"><span>Оставить заявку</span></a>
              </div>

            </div>
          </div>

        </div>
        <div class="swiper-pagination-main"></div>
      </div>

      <div class="swiper swiper-projects-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-1.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-2.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project5.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-3.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-1.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-2.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project5.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-3.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project1.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-1.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project3.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-2.svg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project5.jpeg" />
            <img src="<?php echo get_template_directory_uri() ?>/images/projects/project-icon-3.svg" alt="">
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>

    </div>
  </div>

  <div class="about-company-block" id="about-co">
    <div class="container">
      <div class="left-side">
        <div class="text-wrap">
          <span class="capt"><b>8</b> лет <br/>на рынке</span>
          <span class="desc">Многолетний опыт и безупречная репутация </span>
          <span class="capt"><b>B2B</b></span>
          <span class="desc">Выстраиваем надежные партнерские отношения с коммерческими обьектами.</span>
        </div>
      </div>
      <div class="right-side">
        <div class="text-wrap">
          <h1 class="capt">Компания ESB Group</h1>
          <span class="desc">Компания была основана в 2014 году профессионалами с богатым опытом работы в области "BSM", пожарной системы и "HVAC".<br/> Наша команда это квалифицированные монтажные бригады и качественно подготовленный обслуживающий персонал. Современное высококачественное оборудование позволяет нам  реализовать  ваши идеи в проектах любой сложности. Наша экспертность и высокие стандарты позволили нам создать надежные партнерские отношения с крупнейшими коммерческими объектами по всей Грузии. "ESB Group" это честный, гибкий, инновационный и надежный партнер который выполнит самые сложные и нестандартные задачи.</span>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri() ?>/images/white-logo.svg" alt="" class="logo">
    </div>
  </div>

  <div class="benefits-block">
    <div class="container">
      <h4 class="block-caption gradient-text">Преимущества</h4>

      <div class="benefits-wrap">
        <div class="benefits-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/benefit-1.svg" alt="">
          <span class="capt">Гарантия</span>
          <span class="desc">Безукоризненно выполняем взятые на себя обязательства, гарантируя внимательное отношение к потребностям клиента.</span>
        </div>
        <div class="benefits-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/benefit-2.svg" alt="">
          <span class="capt">Экспертность</span>
          <span class="desc">Мы гордимся тем, что возносим инфраструктуру заказчика на более высокий уровень эффективности, благодаря внедрению наших решений.</span>
        </div>
        <div class="benefits-item">
          <img src="<?php echo get_template_directory_uri() ?>/images/benefit-3.svg" alt="">
          <span class="capt">Поддержка</span>
          <span class="desc">Сопровождаем наших клиентов на всех этапах сотрудничества,  бесплатный выезд инженера и проведение аудита,строгое соблюдение сроков.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="partners-block" id="partners">
    <div class="container">
      <div class="block-caption gradient-text">Партнеры</div>

      <div class="partners-wrap">
        <div class="partners-content">
          <p>ESB Group зарекомендовала себя как тщательно организованная компания, с полной информационной открытостью и комплексным подходом к поставленным задачам, нацеленное на взаимное долгосрочное сотрудничество.</p>
          <p>Мы ценим каждого нашего клиента и благодарим наших партнеров за доверие.</p>
        </div>
        <div class="partners-slider">
          <div class="swiper swiper-partners">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partners-slider-wrap">
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-1.png" alt="">
                  </div>
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-2.png" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partners-slider-wrap">
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-2.png" alt="">
                  </div>
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-1.png" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partners-slider-wrap">
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-1.png" alt="">
                  </div>
                  <div class="partners-slider-item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev-partners"></div>
          <div class="swiper-button-next-partners"></div>
        </div>
      </div>
    </div>
  </div>

  <footer id="contacts">
    <div class="contacts-side">
      <div class="contats-side-content">
        <h4 class="block-caption">Контакты</h4>

        <div class="contacts-info">
          <div>
            <span>Служба поддержки:</span>
            <a class="contacts-tel" href="tel:8 800 333-45-45">8 800 333-45-45 <span><img src="<?php echo get_template_directory_uri() ?>/images/viber.svg" alt=""></span> <span><img src="<?php echo get_template_directory_uri() ?>/images/whatsapp.svg" alt=""></span></a>
            <a href="mailto:info@esbgroup.ge">info@esbgroup.ge</a>
          </div>
          <div>
            <a href="#">Юридический адрес<br/> 6 Ioane Petritsi St, Tbilisi<br/> №495859900408940</a>
          </div>
        </div>
      </div>
   
    </div>
    <a href="#" class="map-side"></a>
  </div>
    <div class="bot-line">
      <div class="container">
        <span>ESB GROUP<br/> International Company. © Все права защищены. </span>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/inputmask.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function(){

      const body = document.querySelector('body');

      var element = document.querySelector('#tel');
      var maskOptions = {
        mask: '{(+995)} 000 00-00-00'
      };
      var mask = IMask(element, maskOptions);

      // MODAL CUSTOM
      const modal = document.querySelector('.modal'),
            modalBtn = document.querySelectorAll('.modal-btn'),
            modalClose = document.querySelector('.modal .close');

      modalBtn.forEach(btn => btn.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(`#${btn.href.split('#')[1]}`).classList.add('active');
        body.classList.add('off');
      }))

      modalClose.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('active');
        body.classList.remove('off');
      })


      // SMOOTH SCROLL
      function scrollTo(element) {
        window.scroll({
          behavior: 'smooth',
          left: 0,
          top: element.offsetTop - currentHeaderHeight
        });
      }

      document.querySelectorAll('nav a').forEach(el => el.addEventListener('click', function(e) {
        e.preventDefault();
        scrollTo(document.getElementById(`${el.href.split('#')[1]}`));
        MobileMenu.classList.remove('active');
        body.classList.remove('off');
      }))


      // MOBILE MENU
      const MobMenuOpenBtn = document.querySelector('#btn-menu'),
            MobMenuCloseBtn = document.querySelector('#mob-menu-close'),
            MobileMenu = document.querySelector('#mobile-menu');

      MobMenuOpenBtn.addEventListener('click', function(e) {
        e.preventDefault();
        MobileMenu.classList.add('active');
        body.classList.add('off');
      });

      MobMenuCloseBtn.addEventListener('click', function(e) {
        e.preventDefault();
        MobileMenu.classList.remove('active');
        body.classList.remove('off');
      });

      const langDropDownDes = document.querySelector('header.desktop .lang-dropdown'),
            langDropDownMob = document.querySelector('#mobile-menu .lang-dropdown');


      // CLICK OUTSIDE
      window.addEventListener('click', function(e){  
       
        if (document.querySelector('#lang-dropdown-btn').contains(e.target)) {
          langDropDownDes.classList.add('active');
        } else{
          langDropDownDes.classList.remove('active');
        }

        if (document.querySelector('#lang-dropdown-btn-mob').contains(e.target)) {
          langDropDownMob.classList.add('active');
        } else{
          langDropDownMob.classList.remove('active');
        }

      });

      const options = {
        root: null,
        rootMargin: "1150px",
        threshold: 1,
      };
  
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          } else {
            entry.target.classList.remove("visible");
          }
        });
      }, options);
      observer.observe(document.querySelector(".about-company-block .left-side"));
      observer.observe(document.querySelector(".about-company-block .right-side"));


      //TABS
      const tabs = document.querySelectorAll('.tabs .tab'),
            tabsContent = document.querySelectorAll('.tabs-content .tab-content');

      tabs.forEach((el, i) => {
        el.addEventListener('click', function() {
          tabs.forEach(el => el.classList.remove('active'))
          tabsContent.forEach(el => el.classList.remove('active'))
          this.classList.add('active');
          tabsContent[i].classList.add('active');
          document.querySelectorAll('.tab-content .video-wrap').forEach(el => el.classList.remove('off'));
          document.querySelectorAll('.tab-content .video-wrap video').forEach(el => el.pause());
        })
      })
      tabs[0].click();


      //TABS ADDITIONAL STYLE
      function checkTabHeight() {
        const tabsHeight = document.querySelector('.tabs').offsetHeight,
        tabVideoWrap = document.querySelectorAll('.tabs-content .video-wrap');

        tabVideoWrap.forEach(el => {
          el.style.height = `${tabsHeight}px`;
        })
      }
      checkTabHeight();

      window.addEventListener("resize", function() {
        checkTabHeight();
        dynamicHeaderPadding()
      });


      // MAIN VIDEO SCRIPTS
      const videoMain = document.querySelector('.main-video');
      let currentHeaderHeight = 0;

      function dynamicHeaderPadding() {
        let headerHeightDes = document.querySelector('header.desktop').offsetHeight;
        let headerHeightMob = document.querySelector('header.mobile').offsetHeight;
        window.innerWidth <= 640 ? currentHeaderHeight = headerHeightMob : currentHeaderHeight = headerHeightDes;
        videoMain.style.paddingTop = `${currentHeaderHeight}px`;
      }
      dynamicHeaderPadding();
          

      // TAB VIDEO SCRIPTS
      const videoWrap = document.querySelectorAll('.tab-content .video-wrap'),
            videos    = document.querySelectorAll('.tab-content .video-wrap video');

      videoWrap.forEach((el, i) => {
        el.addEventListener('click', function(e) {
          e.preventDefault();
          this.classList.add('off');
          videos[i].play();
        })
      })


      // SLIDERS
      var swiperProjectsThumbs = new Swiper(".swiper-projects-thumbs", {
        spaceBetween: 0,
        loop: false,
        slidesPerView: "auto",
        touchRatio: 0.2,
        slideToClickedSlide: true,
        navigation: false,
        scrollbar: {
          el: '.swiper-scrollbar',
          draggable: true,
          mousewheel: true
        },
      });
      var swiperProjectsMain = new Swiper(".swiper-projects-main", {
        spaceBetween: 50,
        loop: false,
        slidesPerView: 1,
        navigation: false,
        thumbs: {
          swiper: swiperProjectsThumbs,
        },
      });

      document.querySelectorAll('.project-item-wrap').forEach(el => {
        const swiperProjectsInner = new Swiper(el.querySelector('.swiper-projects-inner'), {
          loop: true,
          effect: 'cube',
          cubeEffect: {
            slideShadows: false,
            shadow: false,
          },
          navigation: {
            nextEl: el.querySelector('.swiper-button-next'),
            prevEl: el.querySelector('.swiper-button-prev'),
          },
        });
      })

      const swiperPartners = new Swiper('.swiper-partners', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 0,
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
          nextEl: '.swiper-button-next-partners',
          prevEl: '.swiper-button-prev-partners',
        },
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });

  });
  </script>
  
</body>
</html>