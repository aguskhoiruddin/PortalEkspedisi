<?php
echo $detailCompany['logo'] . '<br><br>';
echo $detailCompany['title'] . '<br>';
echo $detailCompany['address'] . '<br>';
echo $detailCompany['phone'] . '<br>';
echo $detailCompany['fax'] . '<br>';
echo $detailCompany['description'] . '<br>';
echo $detailCompany['id'] . '<br><br>';
?>
<br/><br/>

<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
        "Images($detailCompany[image])" => array('content' => $this->renderPartial('detail/_image',array('model'=>  $model->getDetailCompany($_GET['id'],'image')),true), 'id' => 'tab1'),
        "Videos($detailCompany[video])" => array('content' => $this->renderPartial('detail/_video',array('model'=>  $model->getDetailCompany($_GET['id'],'video')),true), 'id' => 'tab2'),
        "Promos($detailCompany[promo])" => array('content' => $this->renderPartial('detail/_promo',array('model'=>  $model->getDetailCompany($_GET['id'],'promo')),true), 'id' => 'tab3'),
        "Events($detailCompany[event])" => array('content' => $this->renderPartial('detail/_event',array('model'=>  $model->getDetailCompany($_GET['id'],'event')),true), 'id' => 'tab4'),
        "Product($detailCompany[product])" => array('content' => $this->renderPartial('detail/_product',array('model'=>  $model->getDetailCompany($_GET['id'],'product')),true), 'id' => 'tab5'),
        "Documents($detailCompany[document])" => array('content' => $this->renderPartial('detail/_document',array('model'=>  $model->getDetailCompany($_GET['id'],'document')),true), 'id' => 'tab6'),
        "News($detailCompany[new])" => array('content' => $this->renderPartial('detail/_news',array('model'=>  $model->getDetailCompany($_GET['id'],'new')),true), 'id' => 'tab7'),
        "Article($detailCompany[article])" => array('content' => $this->renderPartial('detail/_article',array('model'=>  $model->getDetailCompany($_GET['id'],'article')),true), 'id' => 'tab8'),
    // panel 3 contains the content rendered by a partial view
//        'AjaxTab' => array('ajax' => $ajaxUrl),
    ),
    // additional javascript options for the tabs plugin
    'options' => array(
        'collapsible' => true,
    ),
));
?>
<br/><br/>

// add your comment here
<div class="form">
    <?php
    if(!Yii::app()->user->isGuest){
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'comment-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array(
//                    'class' => "mws-form"
        )
    ));
    ?>
    
    <div class="row">
        <?php echo $form->labelEx($comment, 'comment'); ?>
        <?php echo $form->textArea($comment, 'comment', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($comment, 'comment'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
    
    <?php $this->endWidget(); } ?>
</div>
Please login <?php echo CHtml::link('here',array('login')) ?> before adding a comment.
<br/><br/>
//Last Comment
<br/>
<?php
foreach (LepResource::model()->commentCompany($_GET['id']) as $comment) {
    echo '<div style="border:1px solid #ccc;margin:10px 0 0 0;padding:10px;">'.$comment['comment'].'</div>';
}
?>