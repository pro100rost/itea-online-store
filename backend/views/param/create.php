<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Param */

$this->title = 'Create Param';
$this->params['breadcrumbs'][] = ['label' => 'Params', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="param-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
