<?php 
/**
 * View to edit a link category.
 * 
 * @uses $link the link object.
 * @uses $isCreated true if the link is first created, false if an existing link is edited
 * 
 * @author Sebastian Stumpf
 * 
 */
?>


<div class="panel panel-default">
    <div class="panel-body">
    	<?php if($isCreated) { ?>
    	<p><?php echo Yii::t('LinklistModule.base', 'Create new Link'); ?></p>
    	<?php } else { ?>
    	<p><?php echo Yii::t('LinklistModule.base', 'Edit Link'); ?></p>	
		<?php }
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'link-edit-form',
            'enableAjaxValidation' => false,
        ));
		//echo $form->errorSummary($link); ?>

	    <div class="form-group">
	        <?php echo $form->labelEx($link, 'title'); ?>
	        <?php echo $form->textField($link, 'title', array('class' => 'form-control')); ?>
	        <?php echo $form->error($link, 'title'); ?>
	    </div>
	    
	    <div class="form-group">
	        <?php echo $form->labelEx($link, 'description'); ?>
	        <?php echo $form->textArea($link, 'description', array('class' => 'form-control', 'rows' => '2')); ?>
	        <?php echo $form->error($link, 'description'); ?>
	    </div>
	    
    	<div class="form-group">
	        <?php echo $form->labelEx($link, 'href'); ?>
	        <?php echo $form->textField($link, 'href', array('class' => 'form-control')); ?>
	        <?php echo $form->error($link, 'href'); ?>
	    </div>
	    
		<div class="form-group">
	        <?php echo $form->labelEx($link, 'sort_order'); ?>
	        <?php echo $form->numberField($link, 'sort_order', array('class' => 'form-control')); ?>
	        <?php echo $form->error($link, 'sort_order'); ?>
	    </div>
	    
        <?php echo CHtml::submitButton( Yii::t('LinklistModule.base', 'Save') , array('class' => 'btn btn-primary')); ?>

        <?php $this->endWidget(); ?>
    </div>
</div>
