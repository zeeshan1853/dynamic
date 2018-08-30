<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (count($settings) < 1) { ?>
        <p>
            <?= Html::a('Create Setting', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } else { ?>
        <?=
        $this->render('_form', [
            'model' => $settings,
        ])
        ?>
    <?php } ?>

</div>
