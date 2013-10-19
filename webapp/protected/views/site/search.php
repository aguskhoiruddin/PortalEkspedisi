<?php
        $this->widget('zii.widgets.CListView', array(
            'id' => 'agenda-list',
            'dataProvider' => $model->searchCompany($_GET['search']),
            'pagerCssClass' => 'pager-gallery',
            //'pager' => array('header' => '', 'prevPageLabel' => 'Prev < ', 'nextPageLabel' => ' > Next'),
            'itemView' => '_search', // refers to the partial view named '_post',
//            'template' => '<div class="loading-agenda"></div><ul class="directory">{items}</ul><div style="float:right;text-align:right;width:950px;">{pager}</div>'
//        'sortableAttributes' => array(
//            'title',
//            'create_time' => 'Post Time',
//        ),
        ));
        ?>