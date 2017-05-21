<?php
/**
 * Created by PhpStorm.
 * User: rexxar
 * Date: 21.05.17
 * Time: 12:57
 */

use yii\helpers\Html;
?>

<p>Вы ввели инфу</p>

<ul>
    <li><label for="">Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label for="">Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
