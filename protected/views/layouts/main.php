<?php

    Yii::import('application.modules.store.components.SCompareProducts');
    Yii::import('application.modules.store.models.wishlist.StoreWishlist');

    $assetsManager = Yii::app()->clientScript;
    $assetsManager->registerCoreScript('jquery');
    $assetsManager->registerCoreScript('jquery.ui');

    // jGrowl notifications
    Yii::import('ext.jgrowl.Jgrowl');
    Jgrowl::register();

    // Disable jquery-ui default theme
    $assetsManager->scriptMap=array(
        'jquery-ui.css'=>false,
    );
?>

        <?php
            /*Yii::import('application.modules.store.models.StoreCategory');
            $items = StoreCategory::model()->findByPk(1)->asCMenuArray();
            if(isset($items['items']))
            {
                $this->widget('application.extensions.mbmenu.MbMenu',array(
                    'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/menu.css',
                    'htmlOptions'=>array('class'=>'dropdown', 'id'=>'nav'),
                    'items'=>$items['items'])
                );
            }*/
        ?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/style_main.css">
        <!--<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />-->
        <!--<script src="js/jquery-1.10.2.min.js"></script>    -->
        <!--<script src="js/jquery-ui-1.10.4.js"></script>-->  
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.simplePagination.js"></script>  
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/easypaginate.js"></script>  
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.bxslider.js"></script>  
    </head>
    <body>
        <header>
            <div class="content-liner clearfix">
                <div class="call">
                    <button>Перезвоните мне</button>
                </div>
                <div class="logo">
                    <h1>ООО &laquo;РиэлтСтрой&raquo;</h1>
                    <small>Официальный партнер фирмы Архетон</small>
                </div><!-- logo -->
                <div class="contact">
                    <span class="phone-number">
                        7 495 <span>605-63-05</span>
                    </span>
                    <span class="note">
                        С&nbsp;понедельника по&nbsp;пятницу, с&nbsp;9:00 до&nbsp;18:00
                    </span>
                </div><!-- contact -->
            </div><!-- content-liner -->
        </header>
        <h2>
            <strong><a href="#">Готовые</a> и <a href="#">индивидуальные</a> проекты</strong>
            <small>загородных домов</small>
        </h2>
        <section class="request">
            <div class="content-liner">
                <div class="request-box">
                    <div>
                        <h4>
                            <strong>Отправьте заявку</strong>
                            <i>
                                И&nbsp;наш консультант<br>
                                перезвонит вам и&nbsp;ответит<br>
                                на&nbsp;ваши вопросы
                            </i>
                        </h4>
                        <form action="#">
                            <fieldset>
                                <div class="form-line">
                                    <span class="input">
                                        <input class="default name" type="text" id="request-box-1" tabindex="1" value="Ваше имя">
                                        <label for="request-box-1"></label>
                                    </span>
                                </div><!-- form-line -->
                                <div class="form-line">
                                    <span class="input">
                                        <input class="default phone" type="tel" id="request-box-2" tabindex="1" value="Ваш телефон">
                                        <label for="request-box-2"></label>
                                    </span>
                                </div><!-- form-line -->
                                <div class="form-line">
                                    <button type="button">Отправить</button>
                                </div><!-- form-line -->
                            </fieldset>
                        </form>
                    </div>
                </div><!-- request-box -->
            </div><!-- content-liner -->
        </section><!-- request -->
        <section class="carousel-wrap">
            <div class="content-liner">
                <h2>
                    <strong>
                        Лидеры продаж
                    </strong>
                </h2>
                <div class="carousel">
                    <span class="fw"></span>
                    <span class="bw"></span>
                    <div class="carousel-content" id="carousel">
                        <ul>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/slider/slide-1.png" alt="Дом-1">
                                <span class="price">
                                    <strong>
                                        12 200
                                        <small>рублей</small>
                                    </strong>
                                </span>
                                <div class="information">
                                    <h3>
                                        <strong>
                                            Проект дома &laquo;Севилия&raquo;
                                        </strong>
                                    </h3>
                                    <p>
                                        Красивый и&nbsp;очень функциональный, двухэтажный дом с&nbsp;эксплуатационным чердаком,с&nbsp;частично выстроенным подвалом и&nbsp;гаражем на&nbsp;два автомобиля.
                                    </p>
                                    <button>Купить этот проект</button>
                                </div><!-- information -->
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div><!-- content-liner -->
        </section><!-- carousel-wrap -->

<?php echo $content; ?>

        <section class="order">
            <div class="content-liner">
                <h2>
                    <strong>Не&nbsp;нашли подходящий проект?</strong>
                    <span><strong>Закажите индивидуальный*</strong></span>
                    <small>* C&nbsp;нуля или на&nbsp;основе готового проекта из&nbsp;нашего каталога</small>
                </h2>
                <div>
                    <h2>
                        <small>Оставьте заявку И&nbsp;получите</small>
                        бесплатный образец проекта
                    </h2>
                    <form action="#">
                        <fieldset>
                            <div class="form-box">
                                <span class="input zoom">
                                    <input class="default name" type="text" id="request-form-5" tabindex="1" value="Ваше имя">
                                    <label for="request-form-5"></label>
                                </span>
                            </div><!-- form-box -->
                            <div class="form-box">
                                <span class="input zoom">
                                    <input class="default phone" type="tel" id="request-form-6" tabindex="2" value="Ваш телефон">
                                    <label for="request-form-6"></label>
                                </span>
                            </div><!-- form-box -->
                            <div class="form-box">
                                <div class="form-line">
                                    <button tabindex="3" type="button">Отправить заявку</button>
                                </div>
                            </div><!-- form-box -->
                        </fieldset>
                    </form>
                </div>
            </div><!-- content-liner -->
        </section><!-- order -->
        <section class="individual">
            <div class="content-liner">
                <h2>
                    <strong>Более 3 000 индивидуальных проектов</strong>
                    <small>за 22 года</small>
                </h2>
                <div class="notes clearfix">
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-1.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                Делаем до<br>
                                победного конца
                            </strong>
                        </h4>
                        <p>Мы&nbsp;делаем варианты, пока вы&nbsp;не&nbsp;скажете &laquo;да&raquo;, проектируем до&nbsp;победного!</p>
                    </div>
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-2.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                Опытные<br>
                                проектировщики
                            </strong>
                        </h4>
                        <p>Над вашим проектом будет работать команда архитекторов, инженеров и&nbsp;проектировщиков с&nbsp;опытом работы более 10&nbsp;лет.</p>
                    </div>
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-3.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                Гарантия<br>
                                качества
                            </strong>
                        </h4>
                        <p>Полный набор чертежей и&nbsp;документов.</p>
                    </div>
                </div><!-- notes -->
            </div><!-- content-liner -->
        </section><!-- individual -->
        <section class="examples-wrap">
            <div class="content-liner clearfix">
                <h2>
                    <strong>
                        Примеры наших домов
                    </strong>
                </h2>
                <div class="examples clearfix">
                    <div class="example">
                        <div class="image">
                            <a href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-1b.jpg" class="fancybox">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-1.jpg" alt="Example">
                            </a>
                        </div>
                        <h4>
                            <strong>
                                Дом на ул. Каменщиков
                            </strong>
                        </h4>
                        <p>Дом со&nbsp;стенами из&nbsp;деревянного каркаса 200&nbsp;мм &laquo;Премьер-2&raquo; К&nbsp;8&times;10&nbsp;м разработан в&nbsp;соответствии с&nbsp;требованиями СНиП и&nbsp;стандартами, применяемым к&nbsp;строениям.</p>
                    </div><!-- example -->
                    <div class="example">
                        <div class="image">
                            <a href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-2b.jpg" class="fancybox">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-2.jpg" alt="Example">
                            </a>
                        </div>
                        <h4>
                            <strong>
                                Дом на ул. Ленина
                            </strong>
                        </h4>
                        <p>Дом со&nbsp;стенами из&nbsp;деревянного каркаса 200&nbsp;мм &laquo;Премьер-2&raquo; К&nbsp;8&times;10&nbsp;м разработан в&nbsp;соответствии с&nbsp;требованиями СНиП и&nbsp;стандартами, применяемым к&nbsp;строениям.</p>
                    </div><!-- example -->
                    <div class="example">
                        <div class="image">
                            <a href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-3b.jpg" class="fancybox">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/examples/example-3.jpg" alt="Example">
                            </a>
                        </div>
                        <h4>
                            <strong>
                                Дом на ул. Плющева
                            </strong>
                        </h4>
                        <p>Дом со&nbsp;стенами из&nbsp;деревянного каркаса 200&nbsp;мм &laquo;Премьер-2&raquo; К&nbsp;8&times;10&nbsp;м разработан в&nbsp;соответствии с&nbsp;требованиями СНиП и&nbsp;стандартами, применяемым к&nbsp;строениям.</p>
                    </div><!-- example -->
                </div><!-- examples -->
            </div><!-- content-liner -->
        </section><!-- examples -->
        <section class="place-an-order">
            <div class="content-liner clearfix">
                <div class="order-head">
                    <h2>
                        <strong>
                            Как заказать
                            индивидуальный
                            проект?
                        </strong>
                    </h2>
                </div><!-- order-head -->
                <ul class="steps clearfix">
                    <li>
                        <span class="step"><span class="line"></span><span class="number">1</span></span>
                        <h5>
                            <strong>Lorem ipsum dolor sit amet</strong>
                        </h5>
                        <p>
                            Nam ac metus est. Nunc cursus massa at turpis malesuada.
                        </p>
                    </li>
                    <li>
                        <span class="step"><span class="line"></span><span class="number">2</span></span>
                        <h5>
                            <strong>Donec egestas faucibus dui</strong>
                        </h5>
                        <p>
                            Nam ac metus est. Nunc cursus massa at turpis malesuada.
                        </p>
                    </li>
                    <li>
                        <span class="step"><span class="number">3</span></span>
                        <h5>
                            <strong>Praesent eget dui hendrerit</strong>
                        </h5>
                        <p>
                            Nam ac metus est. Nunc cursus massa at turpis malesuada.
                        </p>
                    </li>
                </ul><!-- steps -->
                <div class="spacer"></div>
                <div class="order-request-wrap">
                    <h2>
                        <strong>
                            Хотите знать,<br>
                            сколько будет стоить ВАШ будущий дом?
                        </strong>
                    </h2>
                    <h4>
                        <strong>
                            Оставьте заявку и&nbsp;получите<br>
                            бесплатный расчет стоимости строительства
                        </strong>
                    </h4>
                    <div>
                        <form action="#">
                            <fieldset>
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default name" type="text" id="consult-form-1" tabindex="1" value="Ваше имя">
                                        <label for="consult-form-1"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default phone" type="tel" id="consult-form-2" tabindex="2" value="Ваш телефон">
                                        <label for="consult-form-2"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <div class="form-line">
                                        <button tabindex="3" type="button">Получить консультацию</button>
                                    </div>
                                </div><!-- form-box -->
                            </fieldset>
                        </form>
                    </div>
                </div><!-- order-request-wrap -->
            </div><!-- content-liner -->
        </section><!-- place-an-order -->
        <section class="about">
            <div class="content-liner">
                <h2>
                    <strong>
                        О компании   
                    </strong>
                    <small>почему нам доверяют?</small>
                </h2>
                <div class="notes clearfix">
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-3.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                15 лет опыта
                            </strong>
                        </h4>
                        <p>В&nbsp;нашей базе собрано более 7&nbsp;000 готовых проектов загородных домов</p>
                    </div>
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-2.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                20 профессиональных<br>
                                архитекторов
                            </strong>
                        </h4>
                        <p>Наши проектировщики создадут проект с&nbsp;нуля с&nbsp;учетом всех ваших предпочтений</p>
                    </div>
                    <div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/icon-1.png" alt="Image">
                        </div>
                        <h4>
                            <strong>
                                60 000 рекализованных<br>
                                проектов
                            </strong>
                        </h4>
                        <p>Мы&nbsp;подготовим полный пакет документов и&nbsp;рекомендаций для вашего проекта</p>
                    </div>
                </div><!-- notes -->
                <p>Мы&nbsp;работаем на&nbsp;рынке проектных услуг с&nbsp;1991&nbsp;года. Мы&nbsp;занимаемся разработкой новых проектов и&nbsp;продажей уже готовых односемейных домов. Мы&nbsp;стараемся найти подход к&nbsp;каждому клиенту, оправдывая ожидания инвесторов из&nbsp;самых разных стран. Среди наших партнеров представители России, Украины, Белоруссии, Молдовы, Польши, Литвы, Латвии, Эстонии, Казахстана, Венгрии и&nbsp;Румынии. Мы&nbsp;стараемся находиться в&nbsp;курсе новейших разработок в&nbsp;области строительных услуг, поэтому предлагаем самые современные проекты. Уже возведено свыше сорока тысяч домов. Мы&nbsp;стремимся воплотить в&nbsp;жизнь все пожелания наших клиентов. Главное в&nbsp;работе компании&nbsp;&mdash; угодить клиенту и&nbsp;построить дом его мечты: функциональный и&nbsp;безопасный. Кроме того, нужно иметь в&nbsp;виду и&nbsp;финансовую составляющую. Ведь дом мечты вовсе не&nbsp;должен стоить больших денег.</p>
                <p>В&nbsp;нашей базе более семи тысяч готовых проектов домов для одной семьи. Можем смело назвать это авторское предложение самым разнообразным на&nbsp;рынке СНГ.</p>
            </div><!-- content-liner -->
        </section><!-- about -->
        <section class="feedbacks">
            <div class="content-liner">
                <div class="two-columns clearfix">
                    <div class="column">
                        <div class="feedback">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/feedback-1.jpg" alt="Отзыв">
                                </div><!-- img -->
                                <h5>
                                    <strong>Евгения Александровна</strong>
                                    32 года, Москва
                                </h5>
                            </div><!-- info -->
                            <div class="text">
                                <div>
                                    <p>
                                        <i>Управление брендом без оглядки на&nbsp;авторитеты традиционно отражает медиамикс, учитывая результат предыдущих медиа-кампаний.</i>
                                    </p>
                                </div>
                            </div><!-- text -->
                        </div><!-- feedback -->
                        <div class="feedback">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/feedback-2.jpg" alt="Отзыв">
                                </div><!-- img -->
                                <h5>
                                    <strong>Ольга Ставицкая</strong>
                                    32 года, Москва
                                </h5>
                            </div><!-- info -->
                            <div class="text">
                                <div>
                                    <p>
                                        <i>Продукции, отвоевывая свою долю рынка. Построение бренда, согласно Ф.Котлеру, настроено позитивно. Реклама порождает опрос, полагаясь на&nbsp;инсайдерскую информацию.</i>
                                    </p>
                                    <p>
                                        <i>Узнавание бренда охватывает социометрический рекламный бриф, осознав маркетинг как часть производства. 
                                            Каждая сфера рынка, согласно Ф.Котлеру, обуславливает потребительский рынок, повышая конкуренцию. Представляется логичным, что таргетирование не&nbsp;критично. 
                                            Практика однозначно показывает, что департамент маркетинга и&nbsp;продаж ускоряет медиаплан, оптимизируя бюджеты.</i>
                                    </p>
                                </div>
                            </div><!-- text -->
                        </div><!-- feedback -->
                    </div><!-- column -->
                    <div class="column">
                        <div class="feedback">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/feedback-3.jpg" alt="Отзыв">
                                </div><!-- img -->
                                <h5>
                                    <strong>Константин Ерёмин</strong>
                                    32 года, Москва
                                </h5>
                            </div><!-- info -->
                            <div class="text">
                                <div>
                                    <p>
                                        <i>К&nbsp;тому&nbsp;же стимулирование коммьюнити притягивает контент, не&nbsp;считаясь с&nbsp;затратами. Управление брендом неверно усиливает эксклюзивный жизненный цикл.</i>
                                    </p>
                                </div>
                            </div><!-- text -->
                        </div><!-- feedback -->
                        <div class="feedback">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/feedback-4.jpg" alt="Отзыв">
                                </div><!-- img -->
                                <h5>
                                    <strong>Борис Кравец</strong>
                                    32 года, Москва
                                </h5>
                            </div><!-- info -->
                            <div class="text">
                                <div>
                                    <p>
                                        <i>Фактор коммуникации искажает мониторинг активности, учитывая современные тенденции. Стимулирование сбыта реально экономит выставочный стенд, осознав маркетинг как часть
                                            производства. Стимулирование сбыта традиционно масштабирует product placement, учитывая современные тенденции. Имидж предприятия правомочен. 
                                            Стратегическое планирование синхронизирует связанный потребительский рынок, учитывая современные тенденции. Потребительский рынок, на&nbsp;первый взгляд, 
                                            транслирует конструктивный мониторинг активности, отвоевывая свою долю рынка.</i>
                                    </p>
                                </div>
                            </div><!-- text -->
                        </div><!-- feedback -->
                    </div><!-- column -->
                </div><!-- two-columns -->
            </div><!-- content-liner -->
        </section><!-- feedbacks -->
        <section class="else-questions">
            <div class="content-liner">
                <h3><strong>Остались вопросы?<br> Получите бесплатную консультацию</strong>
                </h3>
                <form action="#">
                    <fieldset>
                        <div class="form-line">
                            <span class="input">
                                <input class="default name" type="text" id="consult-box-4" tabindex="1" value="Ваше имя">
                                <label for="consult-box-4"></label>
                            </span>
                        </div><!-- form-line -->
                        <div class="form-line">
                            <span class="input">
                                <input class="default phone" type="tel" id="consult-box-5" tabindex="2" value="Ваш телефон">
                                <label for="consult-box-5"></label>
                            </span>
                        </div><!-- form-line -->
                        <div class="form-line">
                            <button type="button">Получить колнсультацию</button>
                        </div><!-- form-line -->
                    </fieldset>
                </form>
            </div><!-- content-liner -->
        </section><!-- else-questions -->
        <footer>
            <div class="content-liner">
                <a href="#">
                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/bdl.png" alt="BDL">
                </a>
                <div class="contact">
                    <span class="phone">
                        7 495 <span>605-63-05</span>
                    </span>
                    <span class="note">
                        С&nbsp;понедельника по&nbsp;пятницу, с&nbsp;9:00 до&nbsp;18:00
                    </span>
                </div><!-- contact -->
            </div><!-- content-liner -->
        </footer>
        <div class="popup-wrap">
            <div class="popup-bg">
            </div><!-- popup-bg -->
            <div class="popup-detailed">
                <span class="close"></span>
                <div class="content">
                    <h3>
                        <strong>
                            Проект дома &laquo;Севилия&raquo;
                        </strong>
                    </h3>
                    <p>
                        Одноэтажный дом, с&nbsp;эксплуатационным чердаком, с&nbsp;частично выстроенным подвалом, с&nbsp;гаражом в&nbsp;подвале
                    </p>
                    <div class="popup-slider">
                        <div class="slider-thumbs" id="bx-pager-1">
                            <a data-slide-index="0" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="1" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="2" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="3" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="4" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="5" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3_thumb.jpg" alt="Slide"></a>
                        </div>
                        <ul class="popup-slider-wrap" id="detailed-slider">
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3.jpg" alt="img">
                            </li>
                        </ul>
                    </div><!-- popup-slider --> 
                    <table>
                        <colgroup>
                            <col width="65%">
                            <col width="35%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <td>
                                    Oбщая площадь: 
                                </td>
                                <td>
                                    76,8 м2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  площадь застройки:  
                                </td>
                                <td>
                                    61,5 м2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    площадь крыши:
                                </td>
                                <td>
                                    100,4 м2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    кубатура древесины стропильной конструкции крыши:
                                </td>
                                <td>
                                    4,8 м3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    площадь наружных стен :
                                </td>
                                <td>
                                    85,0 м2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    площадь внутренних стен:
                                </td>
                                <td>
                                    30,0 м2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    коэффициент теплопроводности для стен (U):
                                </td>
                                <td>
                                    0,12 W/м2K
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    коэффициент теплопроводности для утепленной кровли:
                                </td>
                                <td>
                                    0,16 W/м2K
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    технология и конструкция:
                                </td>
                                <td>
                                    <span>газобетон</span>
                                    <span>Наружные стены: Газобетон</span>
                                    <span>Внутренние стены: Кирпич</span>
                                    <span>Перекрытие: Дерево</span>
                                    <span>Конструкция крыши: Дерево</span>
                                    <span>Лестница: Металл</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    тип обогрева:
                                </td>
                                <td>
                                    котел или газ
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Отделка:
                                </td>
                                <td>
                                    <span>Кровля: Черепица</span>
                                    <span>Фасад: Шпатлевка</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="include">
                        <h5><strong>В&nbsp;состав готового проекта входит:</strong>
                        </h5>
                        <ul>
                            <li><span class="include-img"></span><strong>Рисунок</strong></li>
                            <li><span class="include-img"></span><strong>План</strong></li>
                            <li><span class="include-img"></span><strong>Бревна</strong></li>
                            <li><span class="include-img"></span><strong>Инструкция</strong></li>
                        </ul>
                    </div><!-- include -->
                    <div class="popup-form">
                        <h3>
                            <strong>
                                Появились вопросы?
                            </strong>
                            <small>
                                Если у&nbsp;вас есть вопросы или желание изменить проект по&nbsp;вашему вкусу, то&nbsp;оставьте заявку, и&nbsp;мы&nbsp;перезвоним вам.
                            </small>
                        </h3>
                        <form action="#">
                            <fieldset>
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default name" type="text" id="popup-form-1" tabindex="1" value="Ваше имя">
                                        <label for="popup-form-1"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default phone" type="tel" id="popup-form-2" tabindex="2" value="Ваш телефон">
                                        <label for="popup-form-2"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <div class="form-line">
                                        <button tabindex="3" type="button">Получить консультацию</button>
                                    </div>
                                </div><!-- form-box -->
                            </fieldset>
                        </form>
                    </div><!-- popup-form -->
                    <div class="scheme-wrap">
                        <h4>
                            <strong>
                                Проекции
                            </strong>
                        </h4>
                        <div class="clearfix">
                            <div class="scheme">
                                <div class="instruments clearfix">
                                    <div>
                                        <span class="zoom-in"></span>
                                        <span class="zoom-out"></span>
                                        <span class="fit"></span>
                                    </div>
                                    <div>
                                        <span class="move"></span>
                                        <span class="line"></span>
                                        <span class="grid"></span>
                                    </div>
                                </div><!-- instruments -->
                                <div class="scheme-image">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/scheme/scheme-1.jpg" alt="Scheme">
                                </div><!-- scheme-image -->
                            </div><!-- scheme -->
                            <div class="scheme-info">
                                <table>
                                    <colgroup></colgroup>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Первый этаж
                                            </td>
                                            <td>
                                                81.4 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                дневная комната
                                            </td>
                                            <td>
                                                25.1 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                гараж   
                                            </td>
                                            <td>
                                                17 м2   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                столовая
                                            </td>
                                            <td>
                                                9 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                холл
                                            </td>
                                            <td>
                                                8 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               кухня 
                                            </td>
                                            <td>
                                                6.5 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               кладовая 
                                            </td>
                                            <td>
                                                4 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                лестничная клетка
                                            </td>
                                            <td>
                                                3.3 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               ванная 
                                            </td>
                                            <td>
                                                2.8 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                сени
                                            </td>
                                            <td>
                                                2.2 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               коридор 
                                            </td>
                                            <td>
                                                2 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                кладовая
                                            </td>
                                            <td>
                                                1.5 м2
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- scheme-info -->
                        </div>
                        <div class="clearfix">
                            <div class="scheme">
                                <div class="instruments clearfix">
                                    <div>
                                        <span class="zoom-in"></span>
                                        <span class="zoom-out"></span>
                                        <span class="fit"></span>
                                    </div>
                                    <div>
                                        <span class="move"></span>
                                        <span class="line"></span>
                                        <span class="grid"></span>
                                    </div>
                                </div><!-- instruments -->
                                <div class="scheme-image">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/scheme/scheme-1.jpg" alt="Scheme">
                                </div><!-- scheme-image -->
                            </div><!-- scheme -->
                            <div class="scheme-info">
                                <table>
                                    <colgroup></colgroup>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Первый этаж
                                            </td>
                                            <td>
                                                81.4 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                дневная комната
                                            </td>
                                            <td>
                                                25.1 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                гараж   
                                            </td>
                                            <td>
                                                17 м2   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                столовая
                                            </td>
                                            <td>
                                                9 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                холл
                                            </td>
                                            <td>
                                                8 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               кухня 
                                            </td>
                                            <td>
                                                6.5 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               кладовая 
                                            </td>
                                            <td>
                                                4 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                лестничная клетка
                                            </td>
                                            <td>
                                                3.3 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               ванная 
                                            </td>
                                            <td>
                                                2.8 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                сени
                                            </td>
                                            <td>
                                                2.2 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               коридор 
                                            </td>
                                            <td>
                                                2 м2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                кладовая
                                            </td>
                                            <td>
                                                1.5 м2
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- scheme-info -->
                        </div>
                    </div><!-- scheme-wrap -->
                    <div class="scheme-wrap wide">
                        <h4>
                            <strong>
                                Разрез
                            </strong>
                        </h4>
                        <div class="scheme">
                            <div class="instruments clearfix">
                                <div>
                                    <span class="zoom-in"></span>
                                    <span class="zoom-out"></span>
                                    <span class="fit"></span>
                                </div>
                                <div>
                                    <span class="move"></span>
                                    <span class="line"></span>
                                    <span class="grid"></span>
                                </div>
                            </div><!-- instruments -->
                            <div class="scheme-image">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/scheme/scheme-2.jpg" alt="Scheme">
                            </div><!-- scheme-image -->
                        </div><!-- scheme -->
                    </div><!-- scheme-wrap -->
                    <div class="popup-form">
                        <h3>
                            <strong>
                                Появились вопросы?
                            </strong>
                            <small>
                                Если у&nbsp;вас есть вопросы или желание изменить проект по&nbsp;вашему вкусу, то&nbsp;оставьте заявку, и&nbsp;мы&nbsp;перезвоним вам.
                            </small>
                        </h3>
                        <form action="#">
                            <fieldset>
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default name" type="text" id="popup-form-4" tabindex="1" value="Ваше имя">
                                        <label for="popup-form-4"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <span class="input zoom">
                                        <input class="default phone" type="tel" id="popup-form-5" tabindex="2" value="Ваш телефон">
                                        <label for="popup-form-5"></label>
                                    </span>
                                </div><!-- form-box -->
                                <div class="form-box">
                                    <div class="form-line">
                                        <button tabindex="3" type="button">Получить консультацию</button>
                                    </div>
                                </div><!-- form-box -->
                            </fieldset>
                        </form>
                    </div><!-- popup-form -->
                </div><!-- content -->
            </div><!-- popup-detailed -->
            <div class="buy-it">
                <div class="content-liner clearfix">
                    <button>Купить этот проект</button>
                    <div class="project-info">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/results/project.jpg" alt="Project">
                        <h4>
                            <strong>Проект дома &laquo;Севилия&raquo;</strong>
                            <span>12 000 <small>руб.</small></span>
                        </h4>
                    </div><!-- project-info -->
                </div><!-- content-liner -->
            </div><!-- buy-it -->
            <div class="popup-feedback">
                <span class="close"></span>
                <div class="content">
                    <h3>
                        <strong>
                            Проект дома &laquo;Севилия&raquo;
                        </strong>
                    </h3>
                    <p>
                        Одноэтажный дом, с&nbsp;эксплуатационным чердаком, с&nbsp;частично выстроенным подвалом, с&nbsp;гаражом в&nbsp;подвале
                    </p>
                    <div class="popup-slider">
                        <div class="slider-thumbs" id="bx-pager-2">
                            <a data-slide-index="0" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="1" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="2" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="3" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="4" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2_thumb.jpg" alt="Slide"></a>
                            <a data-slide-index="5" href=""><img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3_thumb.jpg" alt="Slide"></a>
                        </div>
                        <ul class="popup-slider-wrap" id="feedback-slider">
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-1.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-2.jpg" alt="img">
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/detals/slide-3.jpg" alt="img">
                            </li>
                        </ul>
                    </div><!-- popup-slider -->
                    <div class="columns clearfix">
                        <div class="column">
                            <h4>
                                <strong>
                                    Задача
                                </strong>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis repellat accusamus nulla perferendis tempora reprehenderit odio veritatis voluptate voluptates aut. Pariatur fugiat incidunt officiis adipisci cumque quas illum harum provident.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, a, quaerat, ducimus eius cupiditate vero itaque sit maxime illo earum quae velit explicabo aut provident sapiente nemo quibusdam sint ex!
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, facere, quos fuga corrupti tempore distinctio ipsam quo amet officia voluptates nihil suscipit animi! Assumenda, nihil doloremque nisi vitae sint maiores.
                            </p>
                        </div><!-- column -->
                        <div class="column">
                            <h4>
                                <strong>
                                    Решение
                                </strong>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis repellat accusamus nulla perferendis tempora reprehenderit odio veritatis voluptate voluptates aut. Pariatur fugiat incidunt officiis adipisci cumque quas illum harum provident.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, a, quaerat, ducimus eius cupiditate vero itaque sit maxime illo earum quae velit explicabo aut provident sapiente nemo quibusdam sint ex!
                            </p>
                        </div><!-- column -->
                        <div class="column">
                            <h4>
                                <strong>
                                    Отзыв клиента
                                </strong>
                            </h4>
                            <div class="feedback">
                            <div class="info">
                                <div class="img">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/img/popup-feedback-1.jpg" alt="Отзыв">
                                </div><!-- img -->
                                <h5>
                                    <strong>Елена Сапунова</strong>
                                </h5>
                            </div><!-- info -->
                            <div class="text">
                                <div>
                                    <p>
                                        <i>Управление брендом без оглядки на&nbsp;авторитеты традиционно отражает медиамикс, учитывая результат предыдущих медиа-кампаний.</i>
                                    </p>
                                </div>
                            </div><!-- text -->
                        </div><!-- feedback -->
                        </div><!-- column -->
                    </div><!-- columns -->
                </div><!-- content -->
            </div><!-- popup-feedback -->
        </div><!-- popup-wrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/main.js"></script>     
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/fancybox/jquery.fancybox.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
        </script>
    </body>
</html>