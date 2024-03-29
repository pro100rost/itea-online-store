<?php

/* @var yii\web\View $this */
/* @var ActiveForm $form */

/* @var LoginForm $model */

use backend\models\LoginForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login | Admin Store | ITEA';
?>
<div class="login-box">
    <div class="login-logo">
        <a href="index.php"><b>Online</b>Store</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php $form = ActiveForm::begin(); ?>
        <div class="form-group has-feedback">
            <?php echo $form
                ->field($model, 'username', [
                    'options' => [
                        'tag' => false,
                    ],
                    'inputOptions' => ['class' => 'form-control'],
                ])
                ->textInput(['autofocus' => true]) ?>
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo $form
                ->field($model, 'password', [
                    'options' => [
                        'tag' => false
                    ],
                    'inputOptions' => ['class' => 'form-control'],
                ])
                ->passwordInput() ?>
            <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <?php echo $form->field($model, 'rememberMe', [
                            'options' => [
                                'tag' => false
                            ],
                            'inputOptions' => ['class' => 'form-control'],
                        ])->checkbox() ?>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?php echo Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?php ActiveForm::end(); ?>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in
                using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
