<?php 
/**
 * View to edit a link category.
 * 
 * @uses $category the category object.
 * @uses $isCreated true if the category is first created, false if an existing category is edited.
 * 
 * @author Sebastian Stumpf
 * 
 */
?>


<div class="panel panel-default">
    <div class="panel-heading"><b><?php echo Yii::t('LinklistModule.base', 'Create new Category'); ?></b></div>
    <div class="panel-body">
    	<?php if($isCreated) { ?>
    	<?php } else { ?>
    	<p><b><?php echo Yii::t('LinklistModule.base', 'Edit Category'); ?></b></p>	
		<?php }
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'category-edit-form',
            'enableAjaxValidation' => false,
        ));
		//echo $form->errorSummary($category); ?>

	    <div class="form-group">
	        <?php //echo $form->labelEx($category, 'title'); ?>
	        <?php echo $form->textField($category, 'title', array('class' => 'form-control', 'placeholder' => Yii::t('LinklistModule.base', 'Title') )     ); ?>

	        <?php echo $form->error($category, 'title'); ?>
	    </div>
	    
	    <div class="form-group">
	        <?php //echo $form->labelEx($category, 'description'); ?>
	        <?php echo $form->textArea($category, 'description', array('class' => 'form-control', 'rows' => 3, 'placeholder' => Yii::t('LinklistModule.base', 'Description') )     ); ?>

	        <?php echo $form->error($category, 'description'); ?>
	    </div>
	    
		<div class="form-group">
	        <?php //echo $form->labelEx($category, 'sort_order'); ?>
	        <?php echo $form->numberField($category, 'sort_order', array('class' => 'form-control', 'placeholder' => Yii::t('LinklistModule.base', 'Sort Order') )     ); ?>

	        <?php echo $form->error($category, 'sort_order'); ?>
	    </div>
	    
        <?php echo CHtml::submitButton( Yii::t('LinklistModule.base', 'Save') , array('class' => 'btn btn-primary')); ?>
        
        <?php $this->endWidget(); ?>
    </div>
</div>
