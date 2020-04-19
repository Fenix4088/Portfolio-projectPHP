<?php
    // SENDING EMAIL TO SERVER 
    if(!empty($_POST) && trim($_POST['email']) != '' && trim($_POST['theme']) != '' && trim($_POST['message']) != '' ) {
        $message = "You have a message from Portfolio: <br><br>\n" . 
                    "<strong>Email:</strong>" . $_POST['email'] . "<br>\n" . 
                    "<strong>Theme: </strong>" . $_POST['theme'] . "<br>\n" . 
                    "<strong>Message:</strong> " . $_POST['message'];

        $subject = "=?utf-8?B?".base64_encode("Portfolio message!")."?=";

        $email_from = "fenix4088@gmail.com";

        $headers = "MIME-Version: 1.0" . PHP_EOL . 
                    "Content-Type: text/html; charset=utf-8" . 
                    "From: " . "=?utf-8?B?".base64_encode("Privat website Portfolio")."?=" . "<" . $email_from . ">" . PHP_EOL . 
                    "Reply-To: " . $email_from;



        mail ( 'fenix4088@cs15388.tmweb.ru' , $subject, $message, $headers);

        header('location: ./pages/thanksRU.html');
    }


    // VALIDATION CHEKING
    function checkValue($item, $message) {

        if (isset($item) && trim($item) == '') {

            echo '<div class="error">' . $message . '</div>';
            
        }
    }


    function printPostValue($item) {
            if(isset($item) && strlen(trim($item)) > 0) {
                echo $item;
        } 
    }


    function checkEmail($email) {
        
        if (isset($email) && trim($email) == '') {

            echo '<div class="error">Введите EMAIL!</div>';
            
        } else if(isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo '<div class="error">Введите коректный EMAIL!</div>';

        }
    }

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap&subset=latin-ext" rel="stylesheet">
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!-- STYLES -->
        <link rel="stylesheet" href="./css/main.css">
        <!-- FAVICON  -->
        <link rel="shortcut icon" href="./img/backgrounds/favicon.png" type="image/x-icon">
        <!-- ANIMATE CSS  -->
        <link rel="stylesheet" href="./libs/animateCSS/animate.min.css">

        <title>Portfolio project | Main page RU</title>
    </head>
    <body>

        <!-- DESKTOP PAGE NAVIGATION  -->
        <ul id="page-nav">
            <li class="active">
                <a href="#header"></a>
            </li>
            <li>
                <a href="#portfolio"></a>
            </li>
            <li>
                <a href="#how-it-work"></a>
            </li>
            <li>
                <a href="#contacts"></a>
            </li>
        </ul>
        <!-- /DESKTOP PAGE NAVIGATION  -->

        <!-- OVERLAY WHEN MOBILE MENUE IS ACTIVE  -->
        <div class="overlay"></div>
        <!-- /OVERLAY WHEN MOBILE MENUE IS ACTIVE  -->

        <header class="header" id="header">

            <div class="fixed-wrapper">
                <nav class="header__navigation">
                    <div class="header__navigation-logo">
                        <span class="title-line">
                            <a href="./indexRU.php">YP</a>
                        </span>
                        
                    </div>
                    <!-- MOBILE MENUE  -->
                        <div class="header__burger-wrap">
                            <label class="header__burger-label">
                                <input type="checkbox" class="header__burger-checkbox">
                                <span class="header__burger"></span>
                            </label>
                        </div>
                    <!-- //MOBILE MENUE  -->
    
                    <div class="header__navigation-block">
                        <ul class="header__navigation-list">
                            <li class="header__navigation-list-item">
                                <a href="./indexRU.php" class="active-page">Главная</a>
                            </li>
                            <li class="header__navigation-list-item">
                                <a href="./pages/projects-pageRU.html">Работы</a>
                            </li>
                            <li class="header__navigation-list-item">
                                <a href="./pages/contacts-pageRU.html">Контакты</a>
                            </li>
                        </ul>
    
                        <div class="intouch-block intouch-block--mobile">
                            <a href="https://github.com/Fenix4088?tab=repositories" target="_blank">
                                <i class="fab fa-github fa-3x"></i>
                            </a>
    
                            <a href="#">
                                <i class="fab fa-telegram fa-3x"></i>
                            </a>
    
                            <a href="https://vk.com/id13266823" target="_blank">
                                <i class="fab fa-vk fa-vk--modify"></i>
                            </a>
    
                            <a href="https://www.facebook.com/profile.php?id=100013553615468" target="_blank">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a>
                        </div>

                        <div class="header__navigation-language header__navigation-language--mobile">
                        <a href="./indexRU.php">
                            <img src="./img/header/ru.png" alt="Russian flag">
                        </a>
                        <a href="./index.php">
                            <img src="./img/header/uk.png" alt="England flag">
                        </a>
                    </div>
    
                        <div class="header__naviation-email mobile-email">
                            <a href="mailto:fenix4088@gmail.com">fenix4088@gmail.com</a>
                        </div>
    
                    </div>

                    <div class="header__navigation-language">
                        <a href="./indexRU.php">
                            <img src="./img/header/ru.png" alt="Russian flag">
                        </a>
                        <a href="./index.php">
                            <img src="./img/header/uk.png" alt="England flag">
                        </a>
                    </div>
    
    
                    <div class="header__navigation-icons">
                        <div class="header__navigation-icon linkedin-icon">
                            <a href="https://www.linkedin.com/in/yehor-pliasov-5776981a2/" target="_blank">
                                <i class="fab fa-linkedin-in fa-2x"></i>
                            </a>
                        </div>
                        <div class="header__navigation-icon git-icon">
                            <a href="https://github.com/Fenix4088?tab=repositories" target="_blank">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </div>
                        <div class="header__navigation-icon facebook-icon">
                            <a href="https://www.facebook.com/profile.php?id=100013553615468&ref=bookmarks" target="_blank">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </div>
                    </div>
    
                </nav>
            </div>

            <div class="container">
                <div class="header__content-wrapper">
                    <div class="header__content-description">
                        <h1 class="header__title">
                            <span class="title-line-big">Егор</span><br>
                            <span class="title-line-big">Плясов</span>
                        </h1>
                        <p>Веб - разработчик разработчик.<br>Оперативная верстка. Работаю с соблюдением сроков и выполнением ТЗ.</p>
                        <div class="header__btn-container">
                            <a href="#aboutMe" class="color-btn header__btn">Познакомиться</a>
                            <a href="./pages/contacts-pageRU.html" class="colorless-btn header__btn">Контакты</a>
                        </div>
                    </div>

                    <div class="header__content-photo">
                        <img src="./img/header/avatar.jpg" alt="Yehor Pliasov">
                    </div>

                    <div class="header__content-photo-back"></div>

                </div>
            </div>

            <div class="header__image">
                <img src="./img/backgrounds/header-bg.png" alt="Computer imag">
            </div>

            <div class="container">
                <section class="header__my-skils-wrapper" id="aboutMe">
                    <div class="header__my-skils">
                        <h3 class="header__my-skils-title">Что я умею:</h3>
                        <ul class="header__my-skils-lists">
                            <li class="header__my-skils-list">
                                pixel perfect, полное соответствие макету.
                            </li>
                            <li class="header__my-skils-list">
                                адаптивная верстка под мобильные устройства.
                            </li>
                            <li class="header__my-skils-list">
                                оптимизация под retina экраны
                            </li>
                            <li class="header__my-skils-list">
                                с Bootstrap и без него. 
                            </li>
                            <li class="header__my-skils-list">
                                верстаю с сеткой или без.
                            </li>
                        </ul>
                        <a href="./pages/projects-pageRU.html" class="header__my-skils-btn">Смотреть работы</a>
                    </div>
    
                    <div class="header__intouch">
                        <h3 class="header__intouch-title">На связи:</h3>
                        <div class="header__intouch-links intouch-block">
                            <a href="https://github.com/Fenix4088?tab=repositories" target="_blank">
                                <i class="fab fa-github fa-3x"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-telegram fa-3x"></i>
                            </a>

                            <a href="https://vk.com/id13266823" target="_blank">
                                <i class="fab fa-vk fa-vk--modify"></i>
                            </a>

                            <a href="https://www.facebook.com/profile.php?id=100013553615468" target="_blank">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a>
                        </div>
                        <a href="mailto:fenix4088@gmail.com" class="header__intouch-email">
                            fenix4088@gmail.com
                        </a>
                    </div>
                </section>
            </div>

        </header>

        <main>
            <section class="portfolio" id="portfolio">

                <div class="container">
                    <h2 class="portfolio__title">
                        <span class="title-line-middle">Портфолио</span>
                    </h2>
    
                    <div class="portfolio__toggles">
                        <div class="portfolio__toggle portfolio__toggle--active filter" data-filter="all">Все работы</div>
                        <!-- <div class="portfolio__toggle filter" data-filter=".boot">Bootstrap</div> -->
                        <!-- <div class="portfolio__toggle filter" data-filter=".wp">WordPress</div> -->
                        <!-- <div class="portfolio__toggle filter" data-filter=".front">Frontend</div> -->
                    </div>
    
                    <div class="portfolio__projects-wrapper" id="portfolio-project-filter">
                        <!-- <div class="portfolio__card portfolio__card--big mix front boot">
                            <div class="portfolio__project-img">
                                <img src="./img/portfolio/forest-travel-wallpaper.jpg" alt="forest travel photo">
                                <a href="#" class="portfolio__project-btn portfolio__project-btn--big">View</a>
                            </div>
                            <div class="portfolio__project-desk">
                                <div class="portfolio__project-title-wrapper">
                                    <a href="#" class="portfolio__project-title">Project "Forest travel"</a>
                                    <div class="portfolio__project-description">Multi-page project</div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__card portfolio__card--big mix front boot">
                            <div class="portfolio__project-img">
                                <img src="./img/portfolio/dream-wallpaper.jpg" alt="dream psd photo">
                                <a href="#" class="portfolio__project-btn portfolio__project-btn--big">View</a>
                            </div>
                            <div class="portfolio__project-desk">
                                <div class="portfolio__project-title-wrapper">
                                    <a href="#" class="portfolio__project-title">Project "Dream"</a>
                                    <div class="portfolio__project-description">Multi-page project</div>
                                </div>
                            </div>
                        </div> -->
                        <div class="portfolio__card mix boot">
                            <div class="portfolio__project-img">
                                <img src="./img/projects-screenshots/unit-project-small.jpg" alt="Unit">
                                <a href="./pages/unit-projectRU.html" class="portfolio__project-btn">Смотреть</a>
                            </div>
                            <div class="portfolio__project-desk">
                                <div class="portfolio__project-title-wrapper">
                                    <a href="./pages/unit-projectRU.html" class="portfolio__project-title portfolio__project-title--small">Проект "Unit"</a>
                                    <div class="portfolio__project-description portfolio__project-description--small">Landing-page project</div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__card mix wp">
                            <div class="portfolio__project-img">
                                <img src="./img/projects-screenshots/StayAndSki-progect-small.jpg" alt="Stay and Ski">
                                <a href="./pages/stay-and-ski-projectRU.html" class="portfolio__project-btn">Смотреть</a>
                            </div>
                            <div class="portfolio__project-desk">
                                <div class="portfolio__project-title-wrapper">
                                    <a href="./pages/stay-and-ski-projectRU.html" class="portfolio__project-title portfolio__project-title--small">проект "Stay and Ski"</a>
                                    <div class="portfolio__project-description portfolio__project-description--small">Landing-page project</div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="portfolio__card mix front">
                            <div class="portfolio__project-img">
                                <img src="./img/portfolio/wallpaper-3.jpg" alt="">
                                <a href="#" class="portfolio__project-btn">View</a>
                            </div>
                            <div class="portfolio__project-desk">
                                <div class="portfolio__project-title-wrapper">
                                    <a href="#" class="portfolio__project-title portfolio__project-title--small">Project "World of cars"</a>
                                    <div class="portfolio__project-description portfolio__project-description--small">Landing-page project</div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="portfolio__toggles-link">
                        <a href="./pages/projects-pageRU.html">Смотреть все работы</a>
                    </div>
                </div>

            </section>

            <section class="how-it-works" id="how-it-work">
                <div class="container">
                    <div class="sub-container">
                        <h2 class="how-it-works__title">
                            <span class="title-line-middle">Как я работаю</span>
                        </h2>
                        <div class="how-it-works__timeline">
                            <div class="how-it-works__timeline-stage">
                                <div class="timeline-stage-wrapper wow animated fadeInUp">
                                   <div class="how-it-works__timeline-title">
                                       <span class="title-line">Оцениваю макет</span>
                                    </div>
                                   <div class="how-it-works__timeline-description">Оцениваю обьем работы, сложность, нюансы. Задаю вопросы.</div>
                                   <div class="how-it-works__timeline-timing">Время 2 - 4 часа</div>
                                </div>
                                <div class="how-it-works__timeline-img">
                                    <img src="./img/how_it_works/icon-analise.png" alt="icon">
                                </div>
                            </div>
                            <div class="how-it-works__timeline-stage">
                                <div class="timeline-stage-wrapper wow animated fadeInUp">
                                    <div class="how-it-works__timeline-title">
                                            <span class="title-line">ТЗ, смета и график работ</span>
                                    </div>
                                    <div class="how-it-works__timeline-description">Согласовываем техническое задание и график работ по проекту. Осмечиваю стоимость по этапам работы.</div>
                                    <div class="how-it-works__timeline-timing">Время 2 - 4 часа</div>
                                </div>
                                <div class="how-it-works__timeline-img">
                                    <img src="./img/how_it_works/icon-timeline.png" alt="icon">
                                </div>
                            </div>

                            <div class="how-it-works__timeline-stage">
                                <div class="timeline-stage-wrapper wow animated fadeInUp">
                                    <div class="how-it-works__timeline-title">
                                        <span class="title-line">Вы держите руку на пульсе</span>
                                    </div>
                                    <div class="how-it-works__timeline-description">Выдаю клиенту доступ к GitHub репозиторию. В влюбое время можете видеть актуальное состояние проекта и задач.</div>
                                    <div class="how-it-works__timeline-timing">Время 2 часа</div>
                                </div>
                                <div class="how-it-works__timeline-img">
                                    <img src="./img/how_it_works/icon-24-hours.png" alt="icon">
                                </div>
                            </div>

                            <div class="how-it-works__timeline-stage">
                                <div class="timeline-stage-wrapper wow animated fadeInUp">
                                    <div class="how-it-works__timeline-title">
                                        <span class="title-line">Выполняю каждый этап</span>
                                    </div> 
                                    <div class="how-it-works__timeline-description">
                                        Поочередно выполняю каждый этап работы. Передаю результаты. Заказчик производит поэтапную оплату.
                                    </div>
                                    <div class="how-it-works__timeline-timing">Время 2 - 4 часа.</div>
                                </div>
                                <div class="how-it-works__timeline-img">
                                    <img src="./img/how_it_works/icon-result.png" alt="icon">
                                </div>
                            </div>

                            <div class="how-it-works__timeline-stage">
                                <div class="timeline-stage-wrapper wow animated fadeInUp">
                                    <div class="how-it-works__timeline-title">
                                        <span class="title-line">Финальное ревью проекта</span>
                                    </div>
                                    <div class="how-it-works__timeline-description">                         Проект готов. Финальное ревью и полировка до идеального состояния. Передаю файлы проекта, заливаю сайт на хостинг.
                                        
                                    </div>
                                    <div class="how-it-works__timeline-timing">Время 2 - 4 часа</div>
                                </div>
                                <div class="how-it-works__timeline-img">
                                    <img src="./img/how_it_works/icon-final.png" alt="icon">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contacts" id="contacts">
                <div class="container">
                    <h2 class="contacts__title">
                        <span class="title-line-middle ">Контакты</span>
                    </h2>
                    <div class="contacts__wrapper">

                        <div class="contacts__contact-details">
                            <p>
                                Если вы ищите специалиста по верстке сайтов, front-end разработчика в команду или для работы над проектом - напишите мне.
                            </p>
                            <div class="contacts__contact-wrapper">
                                <ul class="contacts__contact-list">
                                    <li>
                                        <span class="contacts__contact-type">Email</span> 
                                        <span class="contacts__contact-data">
                                            <a href="mailto:fenix4088@gmail.com">fenix4088@gmail.com</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="contacts__contact-type">Skype</span> 
                                        <span class="contacts__contact-data">
                                            <a href="skype:egor1991_zp?add">egor1991_zp</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="contacts__contact-type">Телефон</span> 
                                        <span class="contacts__contact-data">
                                            <a href="tel:+480729233897" class="phone">+4 (80) 729-233-897</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="contacts__contact-type">Адрес</span>
                                        <span class="contacts__contact-data">Польша, Вроцлав</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="intouch-block">
                                <a href="https://github.com/Fenix4088?tab=repositories" target="_blank">
                                    <i class="fab fa-github fa-3x"></i>
                                </a>
    
                                <a href="#">
                                    <i class="fab fa-telegram fa-3x"></i>
                                </a>
    
                                <a href="https://vk.com/id13266823" target="_blank">
                                    <i class="fab fa-vk fa-vk--modify"></i>
                                </a>
    
                                <a href="https://www.facebook.com/profile.php?id=100013553615468" target="_blank">
                                    <i class="fab fa-facebook fa-3x"></i>
                                </a>
                            </div>
                            <img src="./img/contacts/dots.png" alt="Dots" class="contacts__contact-details-img">
                        </div>

                        <form class="contacts__form" action="indexRU.php" method="POST" id="contact-form">

                                <div class="contacts__form-inputs-wrapper">

                                    <div class="contacts__form-item">

                                        <input 
                                            type="email" 
                                            name="email" 
                                            class="contacts__form-input"
                                            value="<?php printPostValue($_POST['email']); ?>"

                                        >

                                        <span class="contacts__form-placeholder">Ваш email</span>
                                        <?php checkEmail($_POST['email']); ?>
                                    </div>  

                                    <div class="contacts__form-item">

                                        <input 
                                            type="text" 
                                            name="theme" 
                                            class="contacts__form-input"
                                            value="<?php printPostValue($_POST['theme']); ?>"
                                        >

                                        <span class="contacts__form-placeholder">Тема сообщения</span>
                                            <?php checkValue($_POST['theme'], 'Введите ТЕМУ сообщения!');?>
                                    </div>

                                    <div class="contacts__form-item">

                                        <textarea name="message" class="contacts__form-input contacts__form-input--textarea" name="message">
                                            <?php printPostValue($_POST['message']); 
                                            ?></textarea>

                                        <span class="contacts__form-placeholder">Сообщение</span>
                                            <?php checkValue($_POST['message'], 'Оставте ваше СООБЩЕНИЕ!');?>
                                    </div>

                                </div>

                            <button type="submit" class="contacts__form-btn">Отправить</button>
                        </form>
                        <!-- FORM ANSWER AFTER SUCCESS -->
                        <div id="answer"></div>
                        <!-- /FORM ANSWER AFTER SUCCESS -->
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__devName">&copy;&nbsp;2020 - Yehor Pliasov</div>
                <p>Web developer from Zaporozhzhia, creating websites - my passion.</p>
            </div>
        </footer>


        <!-- public script  -->
        <script src="./libs/JQuery/jquery-3.4.1.min.js"></script>
        <script src="./libs/mixitup2/jquery.mixitup.min.js"></script>
        <script src="./libs/nav.js/nav.js"></script>
        <script src="./libs/WOW/wow.min.js"></script>

        <!-- user scripts  --> 
        <script src="./js/main.js"></script>
    </body>
</html>
