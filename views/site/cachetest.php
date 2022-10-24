<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Cached Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        The cached data is: <?= nl2br(Html::encode($cached_value))?>
    </p>
</div>