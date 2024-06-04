<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Event */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <p><strong>Дата:</strong> <?= $model->date ?></p>
    <p><strong>Описание:</strong> <?= $model->description ?></p>

    <h2>Организаторы:</h2>
    <ul>
        <?php foreach ($model->organizers as $organizer): ?>
            <li><?= Html::encode($organizer->full_name) ?></li>
        <?php endforeach; ?>
    </ul>

</div>
