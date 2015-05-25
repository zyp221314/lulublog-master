<?php

use yii\helpers\Html;
use source\models\MenuCategory;

/* @var $this yii\web\View */
/* @var $model source\models\Menu */

$category = $model->category_id;
$categoryModel = MenuCategory::findOne(['id'=>$category]);

$this->title = '修改: ' . ' ' . $model->name;
$this->addBreadcrumbs([
		['菜单管理',['/menu']],
		[$categoryModel['name'],['/menu/default/index','category'=>$category]],
		$this->title,
		]);

?>
<div class="menu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
