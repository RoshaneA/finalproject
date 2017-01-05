<?php


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<center>
<div class="user-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php 
        echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'"
        class="img-circle" alt="Cinque Terre" width="200" height="150">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    ?>

    <p>
         <h2>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            &nbsp;&nbsp;&nbsp;&nbsp;
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
            </h2></center>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'gender',
            'date_of_birth',
            'years_of_experience',
            'Industry',
            'location',
            'about_me',
            //'profile_picture',
            'professional_title',
            'career_level',
            'commuication_level',
            'organizational_level',
            'job_related_level',
            'address',
            'telephone',
            'website',
            'email:email',
        ],
    ]) ?>

</div>
