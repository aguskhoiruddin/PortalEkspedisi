
// fungsi list banner<br/>
<?php
foreach (LepBanner::model()->indexBanner() as $m) {
    echo CHtml::link($m['image'],array('detail')).'<br/>';
}
?>
<br/>
// fungsi list company<br/>
<?php
foreach (LepResource::model()->indexCompany() as $m) {
    echo CHtml::link($m['title'],array('detail','id'=>$m['res_id'])).'<br/>';
}
?>
<br/>
// fungsi list category<br/>
<?php
foreach (LepCategory::model()->indexCategory() as $m) {
    echo CHtml::link(Yii::t('strings',$m['title'].'['.$m['count'].']'),array('listcompany','id'=>$m['category_id'])).'<br/>';
}
?>
// fungsi list city<br/>
<?php
foreach (LepResource::model()->cityCompany() as $m) {
    echo CHtml::link(Yii::t('strings',$m['city']),array('city','city'=>$m['city'])).'<br/>';
}
?>