            <?php 
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$provider,
                    'template'=>'{pager}{items}{pager}',
                    'itemsTagName'=>'ul',
                    'itemsCssClass'=>'results',
                    'itemView'=>'_build',
                    'pager' => array(
                        'class'=>'CLinkPager',
                        'maxButtonCount' => 8,
                        'nextPageLabel'  => '>',
                        'prevPageLabel'  => '<',
                        'lastPageLabel'  => '',
                        'firstPageLabel' => '',
                        'header'         => '',
                        'selectedPageCssClass' => 'active',
                        //'previousPageCssClass' => '',
                        'htmlOptions' => array(
                            'class' => 'result-nav',
                            //'style' => 'margin:0;'
                        )
                    ),
                    'pagerCssClass' => 'result-nav',
                    'sortableAttributes'=>array(
                        'name', 'price'
                    ),
                    'htmlOptions'=>array(
                        'id'=>'results',
                        'class'=>'results-wrap'
                    ),
                ));
            ?>
