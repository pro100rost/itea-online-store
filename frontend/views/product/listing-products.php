<?php

use common\models\ProductSearch;
use yii\widgets\ListView;

/**
 * @var $dataProvider ProductSearch
 */
?>

<section class="section-listing-products">
    <div class="container">
        <div class="listing">
            <h2 class="listing-title">All products:</h2>
            <?php echo ListView::widget([
                'options' => ['class' => 'listing-products'],
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'product-item'],
                'itemView' => 'listing-product',
                'layout' => "{items}\n</div><div class=\"container\">{pager}</div>",
                'pager' => [
                    'maxButtonCount' => Yii::$app->params['maxButtonPaginationCount'],
                    'options' => [
                        'tag' => 'ul',
                        'class' => 'store-pagination',
                    ],
                    'activePageCssClass' => 'active',
                    'prevPageLabel' =>  '<li class="nav-links"><i class="fas fa-arrow-left"></i></li>',
                    'nextPageLabel' =>  '<li class="nav-links"><i class="fas fa-arrow-right"></i></li>',
                    'nextPageCssClass' => 'hide',
                    'prevPageCssClass' => 'hide',
                ],
            ]) ?>
        </div>
    </div>
</section>
