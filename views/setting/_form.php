<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$path = Url::toRoute('setting/create');
if (!$model->isNewRecord) {
    $path = Url::toRoute(['setting/update', 'id' => $model->id]);
}
?>
<div class="setting-form">

    <?php $form = ActiveForm::begin(['action' => $path]); ?>

    <?= $form->field($model, 'ms_sheet')->textInput() ?>

    <?= $form->field($model, 'ss_sheet')->textInput() ?>

    <?= $form->field($model, 'powder_coating')->textInput() ?>

    <?= $form->field($model, 'glass')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
