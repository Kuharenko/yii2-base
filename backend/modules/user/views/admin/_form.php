<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\modules\user\Module $module
 * @var backend\modules\user\models\User $user
 * @var backend\modules\user\models\Profile $profile
 * @var backend\modules\user\models\Role $role
 * @var yii\widgets\ActiveForm $form
 */

$module = $this->context->module;
$role = $module->model("Role");
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($user, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($user, 'newPassword')->passwordInput() ?>

    <?= $form->field($profile, 'full_name'); ?>

    <?= $form->field($user, 'role_id')->dropDownList($role::dropdown()); ?>

    <?= $form->field($user, 'status')->dropDownList($user::statusDropdown()); ?>



    <?php // use checkbox for banned_at ?>
    <?php // convert `banned_at` to int so that the checkbox gets set properly ?>
    <?php $user->banned_at = $user->banned_at ? 1 : 0 ?>
    <?= Html::activeLabel($user, 'banned_at', ['label' => Yii::t('user', 'Banned')]); ?>
    <?= Html::activeCheckbox($user, 'banned_at'); ?>
    <?= Html::error($user, 'banned_at'); ?>

    <?= $form->field($user, 'banned_reason'); ?>


    <?= $form->field($user, 'account_on_exchange')->textInput(['maxlength' => 255]); ?>

    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
