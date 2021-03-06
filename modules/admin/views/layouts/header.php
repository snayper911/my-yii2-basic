<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\admin\widgets\TopAlertWidget;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', '/admin', ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <?=TopAlertWidget::widget();?>
                
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=\Yii::getAlias('@img')?>/avatar99.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Taras</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?=\Yii::getAlias('@img')?>/avatar99.jpg" class="img-circle" alt="User Image"/>

                            <p>
                                <?=Html::encode(\Yii::$app->user->identity->username);?> - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?=Url::to(['/admin/auth/user/view', 'id' =>\Yii::$app->user->id])?>" class="btn btn-default btn-flat">Профіль</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Вийти',
                                    ['/admin/main/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="<?=Url::home();?>" target="_" title="На сайт" ><i class="fa fa-arrow-circle-right"></i></a> <!--data-toggle="control-sidebar"-->
                </li>
            </ul>
        </div>
    </nav>
</header>
