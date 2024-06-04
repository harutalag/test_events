<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizer */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Организаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizer-view">

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

    <p><strong>Электронная почта:</strong> <?= Html::encode($model->email) ?></p>
    <p><strong>Телефон:</strong> <?= Html::encode($model->phone) ?></p>

    <h2>Мероприятия:</h2>
    <ul>
        <?php foreach ($model->events as $event): ?>
            <li><?= Html::encode($event->name) ?></li>
        <?php endforeach; ?>
    </ul>

</div>
