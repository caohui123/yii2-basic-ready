<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\Menu $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
                <?= $model->name ?>        </h2>
    </div>

    <div class="panel-body">

        <div class="menu-form">

            <?php $form = ActiveForm::begin([
            'id' => 'Menu',
            'layout' => 'horizontal',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
            );
            ?>

            <div class="">
                <?php $this->beginBlock('main'); ?>

                <p>
                    
			<?= $form->field($model, 'id')->textInput() ?>
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'controller')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'order')->textInput() ?>
			<?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
$form->field($model, 'parent_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Menu::find()->all(), 'id', 'name'),
    ['prompt' => 'Select']
); ?>
                </p>
                <?php $this->endBlock(); ?>
                
                <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => 'Menu',
    'content' => $this->blocks['main'],
    'active'  => true,
], ]
                 ]
    );
    ?>
                <hr/>
                <?php echo $form->errorSummary($model); ?>
                <?= Html::submitButton(
                '<span class="glyphicon glyphicon-check"></span> ' .
                ($model->isNewRecord ? 'Create' : 'Save'),
                [
                    'id' => 'save-' . $model->formName(),
                    'class' => 'btn btn-success'
                ]
                );
                ?>

                <?php ActiveForm::end(); ?>

            </div>

        </div>

    </div>

</div>
