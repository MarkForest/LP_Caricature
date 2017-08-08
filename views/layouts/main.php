<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".header">
<?php $this->beginBody() ?>

<header>
    <div id="header" class="header">
        <div class="container">
            <h1 class="logo"><a href="#"><span>C</span>artoons</a></h1>
            <h2 class="tagline"><span>Шарж по фото сюжетные цветные</span></h2>
        </div>
        <a href="#about" class="sr-only">Skip to main content</a>
        <nav id="main-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#about-2">Про шарж</a></li>
                            <li><a href="#services">Сервисы</a></li>
                            <li><a href="#portfolio">Работы</a></li>
<!--                            <li><a href="#skills">Skills</a></li>-->
                            <li><a href="#education">Для заказа</a></li>
                            <li><a href="#contact">Контакт</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <svg class="decor" height="100" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 100 L100 0 L0 0" stroke-width="0"></path>
    </svg>
</header>

<div class="wrap">
    <?= $content ?>
</div>
<!-- Parallax Google Maps -->
<section id="parallax-9" class="container-fluid parallax fixed">
    <div id="map-canvas"></div>
    <p class="parallax-text">Made with Bootstrap 3</p>
</section>
<!-- Contact -->
<section id="contact" class="section-page">
    <div class="container">
        <h3 class="text-center">Контакты</h3>
        <div>

            <!-- Social Links -->
            <div class="col-xs-12">
                <ul id="social-links">
                    <li><a class="tool" data-placement="top" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Github"><i class="fa fa-github-alt"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="Twitter"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="RSS"><i class="fa fa-rss"></i></a></li>
                    <li><a class="tool" data-placement="top" href="#" title="E-Mail"><i class="fa fa-envelope-o"></i></a></li>
                </ul>
            </div>

            <!-- Brand & Copyright -->
            <div id="brand-and-copy" class="col-xs-12">
                <p id="brand" class="logo"><span>С</span>artoons</p>
                <p>© 2017 Caricatures. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact-footer">
    <div class="container">
        <div>
            <div class="col-xs-12">
                <ul class="col-sm-3">
                    <li><i class="fa fa-map-marker"></i> Кривой Рог.<br>
                        Google Map
                    </li>
                    <li><i class="fa fa-clock-o"></i> Пон-Вос: 9:00 &rarr; 21:00</li>
                </ul>
                <ul class="col-sm-4">
                    <li><i class="fa fa-phone"></i> (067) -795-40-61</li>
                    <li><i class="fa fa-phone"></i> (067) -562-34-17</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:#">selena.n1980@gmail.com</a></li>
                    <li><i class="fa fa-skype"></i> Cartoons</li>
                </ul>
                <ul class="col-sm-5 hidden-xs">
                    <li><i class="fa fa-info-circle"></i><i> Шарж (фр. charge) — разновидность карикатуры; сатирическое или добродушно-юмористическое изображение (обычно портрет), в котором при соблюдении внешнего сходства изменены и выделены наиболее характерные черты модели.
                        </i></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top -->
<p class="back-to-top"><i class="fa fa-chevron-up"></i></p>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
