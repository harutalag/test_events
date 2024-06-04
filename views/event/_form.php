<?php
use app\models\Organizer;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\models\Event */
/* @var $form yii\widgets\ActiveForm */

$organizers = ArrayHelper::map(Organizer::find()->all(), 'id', 'name');
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->input('date') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'organizerIds')->widget(Select2::classname(), [
        'data' => $organizers,
        'options' => ['placeholder' => 'Выберите организаторов ...', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->label('Организаторы'); ?>

    <div class="form-group">
        <?= \yii\helpers\Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
