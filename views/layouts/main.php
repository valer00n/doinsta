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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <div class="overlay" style="background-image: ">
        
    </div>

    <?php $this->beginBody() ?>

    <header>
        <div class="container header__wrapper">
            <a class="logo" href="/"><img alt="Logo" src="/img/logo_auth.png"></a>
            <div>
                <div class="select-lang">

                </div><!--end select-lang-->
            </div>
            <div class="login-option select">
                <div class="my-sel">
                    <div class="sel-cont">
                    </div>
                </div>

            </div>
        </div>
    </header>
    <section>
        
    </section>
    <section>
        
    </section>
    <?= $content ?>

    <footer class="footer footer--authorized">
        <div class="container footer__wrapper">
            <nav class="appMenu appMenu__bottom">
                <ul>
                    <li class="appMenu__entry"><a href="/servis-dlya-prodvijenia/">About</a></li>
                    <li class="appMenu__entry"><a href="/price/">Plans</a></li>
                    <li class="appMenu__entry"><a href="/guide/">Guide</a></li>
                    <li class="appMenu__entry"><a href="/blog/">Blog</a></li>
                    <li class="appMenu__entry"><a href="/contacts/">Contacts</a></li>
                    <li class="appMenu__entry"><a href="/faq/">FAQ</a></li>
                </ul>
            </nav>
            <div class="footer__copyright">
                © 2015 – 2016        </div>


                <a class="footer__logo" href="/"><img alt="Logo" src="/img/logo-doinsta-small.png"></a>        

                <a class="footer__email" href="mailto:support@doinsta.com">support@doinsta.com</a>
                <a class="footer__feedback" rel="nofollow" href="javascript:void(0);">Feedback</a>

                <a style="font-size: 14px; float: right; display: block; margin: 17px 26px 0 0;" href="/service-agreement/" target="_blank">Service agreement</a><br>

            </div><!--end all-->
        </footer>

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
