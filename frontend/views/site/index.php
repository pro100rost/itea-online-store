<?php

use common\models\ProductSearch;
use common\repositories\CategoryRepository;
use common\repositories\ProductRepository;

/**
 * @var $this yii\web\View
 * @var $allCategories array
 * @var $categoriesFind CategoryRepository
 * @var $productsFind ProductRepository
 * @var $popularProducts[] Product
 * @var $popularCategories array
 * @var $dataProvider ProductSearch
 */

$this->title = 'Online Store | ITEA';
?>

<?php echo $this->render('categories-menu', [
    'allCategories' => $allCategories,
]) ?>

<?php echo $this->render('/product/listing-products', [
    'dataProvider' => $dataProvider,
]) ?>

<section class="shop-category">
    <div class="container">

        <?php echo $this->render('popular-products', [
            'popularProducts' => $popularProducts,
        ]) ?>

        <?php echo $this->render('popular-categories', [
            'popularCategories' => $popularCategories,
            'categoriesFind' => $categoriesFind,
        ]) ?>

    </div>
</section>
