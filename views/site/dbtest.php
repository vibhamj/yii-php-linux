<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'DB Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-db">
    <h1><?= Html::encode($this->title) ?></h1>
    <ul>
    <?php foreach ($countries as $country): ?>
     <li>
         <?= Html::encode($country->name) ?>
     </li>
    <?php endforeach; ?>
 </ul>
</div>