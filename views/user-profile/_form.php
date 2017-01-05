<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-form">
    
<br>
    <br>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <h3>Basic Info</h3>
<hr>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?php 
    if ($model->profile_picture){
        echo '<div class="im" style="padding-left:12em;">';
        echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo Html::a('Delete Profile Picture', ['remove', 'id'=>$model->id], ['class'=>'btn btn-danger']).'</br>';
        echo '</div>';
    }
    ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->inline()->radioList(['Male'=>'Male','Female'=>'Female']) ?>
    
    <?= $form->field($model, 'date_of_birth')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd','options'=>['class'=>'form-control'],
    ]) ?>

     <?= $form->field($model, 'years_of_experience')->inline()->radioList(['1-3 years'=>'1-3 years','4-6 years'=>'4-6 years','7-9 years'=>'7-9 years','over 10 years'=>'over 10 years']) ?>
    
    <?= $form->field($model, 'Industry')->dropDownList([' '=>' ','Medicine'=>'Medicine','Information Technology'=>'Information Technology','Hospitality'=>'Hospitality','Sales'=>'Sales/Marketing','Law'=>'Law']) ?>

   <?= $form->field($model, 'location')->dropDownList([' '=>' ','Kingston'=>'Kingston','St.Andrew'=>'St.Andrew','Portland'=>'Portland','Montego Bay'=>'Montego Bay','St.Ann'=>'St.Ann']) ?>


    <?= $form->field($model, 'about_me')->textarea(['maxlength' => true]) ?>
    
     
    <br>
<br>
<h3>Skills</h3>
<hr>

    <?= $form->field($model, 'professional_title')->inline()->radioList(['Miss'=>'Miss','Mrs.'=>'Mrs.','Dr.'=>'Dr.','Rev.'=>'Rev.']) ?>

     <?= $form->field($model, 'career_level')->dropDownList([' '=>' ','1-10%'=>'1-10%','20-40%'=>'20-40%','50-70%'=>'50-70%','80-100%'=>'80-100%']) ?>

    <?= $form->field($model, 'commuication_level')->dropDownList([' '=>' ','1-10%'=>'1-10%','20-40%'=>'20-40%','50-70%'=>'50-70%','80-100%'=>'80-100%']) ?>
    
    <?= $form->field($model, 'organizational_level')->dropDownList([' '=>' ','1-10%'=>'1-10%','20-40%'=>'20-40%','50-70%'=>'50-70%','80-100%'=>'80-100%']) ?>

    <?= $form->field($model, 'job_related_level')->dropDownList([' '=>' ','1-10%'=>'1-10%','20-40%'=>'20-40%','50-70%'=>'50-70%','80-100%'=>'80-100%']) ?>
    
    <br>
<br>
<h3>Contact</h3>
<hr>
    
    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'telephone') ?>
    
     <?= $form->field($model, 'website', [
        'inputTemplate' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>', ]); ?>

     <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
