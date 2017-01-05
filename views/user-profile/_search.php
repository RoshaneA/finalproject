<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'date_of_birth') ?>

    <?= $form->field($model, 'years_of_experience') ?>

    <?php // echo $form->field($model, 'Industry') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'about_me') ?>

    <?php // echo $form->field($model, 'profile_picture') ?>

    <?php // echo $form->field($model, 'professional_title') ?>

    <?php // echo $form->field($model, 'career_level') ?>

    <?php // echo $form->field($model, 'commuication_level') ?>

    <?php // echo $form->field($model, 'organizational_level') ?>

    <?php // echo $form->field($model, 'job_related_level') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
