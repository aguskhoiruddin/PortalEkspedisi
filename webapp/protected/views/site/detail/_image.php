<?php 
foreach ($model as $image){
    echo CHtml::image(Yii::app()->baseUrl.'/images/'.$image['filename']);
}
?>