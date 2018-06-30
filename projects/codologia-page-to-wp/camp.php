<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

    <title></title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/camp.css">

    <script type="text/javascript" src="./assets/js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="./assets/js/mobile-menu.js"></script>
    <script type="text/javascript" src="./assets/js/modalWindowHandler.js"></script>
</head>
<body>

    <button id="back" type="button" class="btn btn-primary btn-lg"><a href="https://kyrylo0605.github.io">Go Back</a></button>

<header class="main-header -camp">
    <div id="fakeLoader"></div>

    <div class="main-header-content -camp">
        <div class="nav-bg">
            <nav class="container nav justify-content-center nav-panel -header">
                <ul class="col-10 col-md-12 col-sm-12 nav-menu -header">
                    <li class="logo">
                        <a href="#">
                            <img src="./assets/imgs/logo.png" alt="" class="logo-mg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">О Кодологии</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Программы</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Городской лагерь </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Франшиза</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link btn -rose">Выбрать город</a>
                    </li>
                </ul>
            </nav>


            <nav class="container nav nav-panel -mobile -header">
                <div class="logo">
                    <a href="#">
                        <img src="./assets/imgs/logo.png" alt="" class="logo-mg">
                    </a>
                </div>

                <button class="navbar-toggler pull-xs-right toggle-btn" type="button" data-toggle="collapse"
                        data-target="#navbar-collapse" onclick="addToggle()">☰
                </button>

                <ul class="col-10 col-md-12 col-sm-12 nav-menu -header">
                    <li class="nav-item">
                        <a href="#" class="nav-link">О Кодологии</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Программы</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Городской лагерь </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Франшиза</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Выбрать город</a>
                    </li>
                </ul>

            </nav>
        </div>

        <article class="decorations-container">
            <div class="decoration -yellow-dots"></div>
            <div class="decoration -lines -fly"></div>
        </article>

        <div class="container">
            <div class="row justify-content-md-around justify-content-sm-center justify-content-xs-center flex-wrap header-info">
                <div class="col-md-6 col-sm-12  header-caption -camp">

                    <h1>
                      Изучаем то,
                      что пригодится
                      в реальной
                      жизни #itлето
                    </h1>
                    <h5>
                      Исследуем мир вокруг себя с помощью
                      современных технологий, создаем собственное
                      it-портфолио
                    </h5>

                </div>


                <div class="col-md-6 col-sm-12 form -header -camp">

                    <form class="order-form col-md-9 col-lg-9 col-8">
                        <h3>Хотите, чтобы Ваш ребенок
                          за лето создал свое it-портфолио?
                        </h3>
                        <p>Заполните эту форму</p>

                        <input type="text" name="name" class="form-inp -name" placeholder="Имя" required>

                        <input type="text" name="city" class="form-inp -city"
                               placeholder="Город"
                               required>

                        <input type="tel" name="phone" class="form-inp -phone" placeholder="Телефон" required>

                        <input type="submit" class="send-btn -pulse" value="Забронировать место в лагере">
                        <p class="tip">
                          Нажимая кнопку "Отправить", я принимаю условия
                          Пользовательского соглашения и даю своё согласие на
                          обработку моих персональных данных, в соответствии
                          с Федеральным законом от 27.07.2006 года №152-ФЗ
                          «О персональных данных», на условиях и для целей,
                          определенных Политикой конфиденциальности.
                        </p>
                    </form>

                </div>

            </div>
        </div>
    </div>

</header>




<main class="main-content -camp">

    <section class="details -subscribe">
        <article class="decorations-container">
            <div class="decoration -triangles -swaying"></div>
        </article>

        <div class="container">

            <h2 class="title -black">
                Лето с Кодологией – это время для получения новых
                эмоций, заряда энергии и реализации творческих идей!
            </h2>

            <p class="subtitle">
                Каждый участник лагеря получит возможность реализовать свой проект под руководством экспертов — создать
                свое
                собственное мобильные приложения, web-сервисы, игру, вебсайт или графическую работу. В программе
                представлены
                различные
                мастер-классы, профориентационные игры, а также цифровое творчество!
            </p>

            <a href="#" class="btn-link btn -rose">Записаться на смену</a>
        </div>
    </section>

    <div class="wavy-line"></div>

    <section class="shifts">
        <article class="decorations-container">
            <div class="decoration -curly-brace"></div>
            <div class="decoration -circles"></div>
            <div class="decoration -plus -green-color">+</div>
            <div class="decoration -dots-rose"></div>
        </article>
        <div class="container">

            <h2 class="title -black">
                Смены лагеря
            </h2>
            <p class="subtitle">
                Проводим занятия все лето
            </p>

            <div class="row shifts-list">

                <article class="col-6">
                    <div class="shifts-item">

                        <div class="label -yellow">
                            <p>28 мая</p>
                            <p>8 июня</p>
                        </div>
                        <div class="info">
                            <h5><b>Спортивная смена</b></h5>
                            <p>Создаем спортивные IT-проекты</p>

                        </div>
                    </div>

                    <div class="shifts-item">

                        <div class="label -blue">
                            <p>
                                11 - 22
                            </p>
                            <p>
                                июня
                            </p>
                        </div>
                        <div class="info">
                            <h5><b>Биологическая смена</b></h5>
                            <p>Изучаем биологию с помощью
                                программирования</p>
                        </div>
                    </div>

                    <div class="shifts-item">

                        <div class="label -rose">
                            <p>
                                25 июня
                            </p>
                            <p>
                                6 июля
                            </p>
                        </div>
                        <div class="info">
                            <h5><b>Географическая смена</b></h5>
                            <p>Разрабатываем IT-проекты
                                о разных континентах и странах</p>
                        </div>
                    </div>

                </article>

                <article class="col-6">
                    <div class="shifts-item">

                        <div class="label -red">
                            <p>
                                9 - 20
                            </p>
                            <p>
                                июля
                            </p>
                        </div>
                        <div class="info">
                            <h5><b>Историческая смена</b></h5>
                            <p>Погружаемся в исторические факты
                                и события через кодинг</p>
                        </div>
                    </div>

                    <div class="shifts-item">

                        <div class="label -violet">
                            <p>
                                23 июля
                            </p>
                            <p>
                                3 августа
                            </p>
                        </div>
                        <div class="info">
                            <h5><b>Смена искусства</b></h5>
                            <p>Знакомимся с искусством
                                с помощью цифровых технологий</p>
                        </div>
                    </div>

                    <div class="shifts-item">

                        <div class="label -green">
                            <p>
                                6 - 17
                            </p>
                            <p>
                                августа
                            </p>
                        </div>
                        <div class="info">
                            <h5><b>Смена физических явлений</b></h5>
                            <p>Познаем явления вокруг нас, воплощая
                                их в IT-решения</p>
                        </div>
                    </div>

                </article>

                <a href="#" class="btn-link btn -white">Узнать о сменах подробнее</a>
            </div>

        </div>
    </section>

    <div class="wavy-line"></div>

    <section class="packages-details -formats">
        <article class="decorations-container">
            <div class="decoration -triangle-orange"></div>
            <div class="decoration -wavy-lines-black -swaying"></div>
            <div class="decoration -wavy-lines-short-rose"></div>
            <div class="decoration -w"></div>
            <div class="decoration -plus -rose-color -infinite-rotating">+</div>
        </article>

        <div class="container">
            <h2 class="title" id="job">
                Форматы занятий в летней IT-школе
            </h2>
            <p class="subtitle">
                Участники лагеря погружаются в различные области знаний — информатику, математику,
                экономику и другие предметы школьной программы, которые получают на наших занятиях практическое
                применение
            </p>

            <div class="row">
                <article class="col-6 packages-item -work">
                    <div class="heading">
                        <h5>
                            1 - 4 класс
                        </h5>
                        <p>
                            9:00 - 14:00
                        </p>
                    </div>
                    <div class="info">
                        <p>
                            Никаких тягостей учебного процесса, вместо этого –
                            полноценный отдых, насыщенный интересными занятиями
                            и развлечениями. Программа дает возможность детям
                            7 - 11 лет попробовать разнообразные направления,
                            чтобы ребенок выбрал для себя новое любимое хобби
                        </p>
                        <a href="#" class="btn-link btn -white">Записаться на смену</a>
                    </div>
                </article>

                <article class="col-6 packages-item -intensive">
                    <div class="heading -violet">
                        <h5>
                            5 - 8 класс
                        </h5>
                        <p>
                            15:00 - 18:00
                        </p>
                    </div>
                    <div class="info">
                        <p>
                            Летние интенсивы для детей 12 - 15 лет – это современные
                            знания и открытие в себе новых талантов. Интенсивные занятия
                            проходят в игровой форме в виде практики, деловых
                            и интеллектуальных игр, воркшопов и постоянного
                            общения в команде
                        </p>
                        <a href="#" class="btn-link btn -white">Записаться на смену</a>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <div class="wavy-line"></div>

    <section class="advantages">
        <article class="decorations-container">
            <div class="decoration -triangle-small"></div>
            <div class="decoration -dots-orange"></div>
        </article>

        <div class="container">
            <h2 class="title -black" id="reviews">
                Почему нужно участвовать в it-лагере?
            </h2>
            <p class="subtitle">
                Развиваем гибкие навыки - soft skills, которые помогают в будущем
                действовать в условиях неопределенности
            </p>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic1.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Системное мышление
                        </b>
                    </h5>
                    <p>
                        Мыслим нестандартно, творчески
                        подходим к решению различных it-задач
                    </p>
                </div>
            </div>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic2.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Коммуникация
                        </b>
                    </h5>
                    <p>
                        Активно работаем в команде, презентуем
                        проекты и защищаем их перед сверстниками
                    </p>
                </div>
            </div>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic3.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Самомотивация
                        </b>
                    </h5>
                    <p>
                        Вдохновляем ребят на изучение
                        необходимых в жизни технологий
                    </p>
                </div>
            </div>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic4.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Достижение целей
                        </b>
                    </h5>
                    <p>
                        Каждый ребенок поймет "куда" и "как"
                        именно идти к поставленной цели
                    </p>
                </div>
            </div>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic5.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Эмоциональный интеллект
                        </b>
                    </h5>
                    <p>
                        Учимся управлять эмоциями, замечаем,
                        выражаем и правильно используем их
                    </p>
                </div>
            </div>

            <div class="advantages-item">
                <div class="advantages-img">
                    <img src="assets/imgs/it-camp-ic6.png" alt="">
                </div>
                <div class="col-md-12 col-6 advantages-content">
                    <h5>
                        <b>
                            Анализ информации
                        </b>
                    </h5>
                    <p>
                        Собираем, анализируем и структурируем
                        большой объем информации
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="wavy-line"></div>

    <section class="call-form -inline">
        <article class="decorations-container">
            <div class="decoration -half-squire-border2"></div>
            <div class="decoration -dots-blue"></div>
        </article>

        <div class="container">
            <form class="order-form col-md-12 form -green">
                <h2 class="title">
                    Раннее бронирование мест
                </h2>
                <p class="tip">
                    Успейте записать Вашего ребенка в IT-лагерь Кодологии по специальному предложению!
                </p>

                <input type="text" name="name" class="form-inp -name" placeholder="Имя" required>

                <input type="text" name="city" class="form-inp -city"
                       placeholder="Город"
                       required>

                <input type="tel" name="phone" class="form-inp -phone" placeholder="Телефон" required>

                <input type="submit" class="send-btn -pulse -violet" value="Забронировать">
            </form>

        </div>
    </section>

</main>

<footer class="main-footer">

  <article class="contacts">
    <div class="container">
      <div class="row contacts-content">
        <div class="col-md-3 logo -footer">
          <img src="./assets/imgs/logo.png" alt="">
        </div>

        <div class="col-md-6 copyright">
          © 2018 CODOLOGIA школа цифровых наук. Все права защищены
        </div>

        <div class="col-md-3 social-btns">
          <a href="#" target="_blank" class="footer-icon -vk">
            <img src="./assets/imgs/vk.png" alt="">
          </a>
          <a href="#" target="_blank" class="footer-icon -facebook">
            <img src="./assets/imgs/facebook.png" alt="">
          </a>
          <a href="#" target="_blank" class="footer-icon -instagram">
            <img src="./assets/imgs/instagram.png" alt="">
          </a>
          <a href="#" target="_blank" class="footer-icon -youtube">
            <img src="./assets/imgs/youtube.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </article>
</footer>

</body>
</html>