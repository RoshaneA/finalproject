<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="users-form">

        <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>


            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                    <?php
    $a= ['Male' => 'Male','Female' => 'Female', 'Other.' => 'Other'];
    echo $form->field($model, 'prefix',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-1',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
    ?>

                        <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

                            <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'parish',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
    ?>

                                <?= $form->field($model, 'phone_number', [
        'inputOptions' => [
            'placeholder' => '876-922-5826',
        ],'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ]); ?>

                                   
                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                                            <div class="form-group">
                                                <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
                                            </div>

                                            <?php ActiveForm::end(); ?>

    </div>
