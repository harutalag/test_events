<?php
use app\models\Event;use kartik\select2\Select2;use yii\helpers\ArrayHelper;use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\models\Organizer */
/* @var $form yii\widgets\ActiveForm */

$events = ArrayHelper::map(Event::find()->all(), 'id', 'name');
?>

<div class="organizer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eventIds')->widget(Select2::classname(), [
        'data' => $events,
        'options' => ['placeholder' => 'Выберите мероприятия ...', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->label('Мероприятия'); ?>

    <div class="form-group">
        <?= \yii\helpers\Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
