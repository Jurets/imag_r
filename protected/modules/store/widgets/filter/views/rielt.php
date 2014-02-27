<?php
    $cm=Yii::app()->currency;
    $subcategories = $this->model->descendants()->findAll();
?>
<div class="filter-wrap">
    <div class="filter">
        <div class="folded-wrap">
            <span class="knob active">Площадь</span>
            <div class="folded opened">
                <div class="slider-wrap floor-space">
                    <?php $min = (int)floor($this->controller->minAttribute('usablefloorarea'));
                          $max = (int)floor($this->controller->maxAttribute('usablefloorarea')); ?>
                    <p>Жилая площадь от&nbsp;<span class="dynamic" id="floorSpaceMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="floorSpaceMax"><?php echo $max ?></span> <span>м</span>.</p>
                    <!--<div class="slider"></div>-->
                        <?php
                            echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                                'options'=>array(
                                    'range'=>true,
                                    //'min'=>(int)floor($cm->convert($this->controller->getMinPrice())),
                                    //'max'=>(int)ceil($cm->convert($this->controller->getMaxPrice())),
                                    'min'=>$min,
                                    'max'=>$max,
                                    //'disabled'=>(int)$this->controller->getMinPrice()===(int)$this->controller->getMaxPrice(),
                                    'disabled'=>false,
                                    //'values'=>array($this->currentMinPrice, $this->currentMaxPrice),
                                    'values'=>array($min, $max),
                                    //'slide'=>'js: function( event, ui ) {
                                    'change'=>'js: function( event, ui ) {
                                        $("#floorSpaceMin").text(ui.values[0]);
                                        $("#floorSpaceMax").text(ui.values[1]);
                                    }',
                                ),
                                'htmlOptions'=>array(
                                    'class'=>'slider',
                                    'style'=>'margin:5px',
                                ),
                            ), true);
                        ?>                    
                </div><!-- slider-wrap -->
                <div class="slider-wrap area">
                    <?php $min = (int)floor($this->controller->minAttribute('totalarea'));
                          $max = (int)floor($this->controller->maxAttribute('totalarea')); ?>
                    <p>Общая площадь от&nbsp;<span class="dynamic" id="totalSpaceMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="totalSpaceMax"><?php echo $max ?></span> <span>м</span>.</p>
                    <?php
                        echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                            'options'=>array('range'=>true, 'min'=>$min, 'max'=>$max, 'disabled'=>false, 'values'=>array($min, $max),
                                'change'=>'js: function( event, ui ) {
                                    $("#totalSpaceMin").text(ui.values[0]);
                                    $("#totalSpaceMax").text(ui.values[1]);
                                }',
                            ),
                            'htmlOptions'=>array(
                                'class'=>'slider',
                                'style'=>'margin:5px',
                            ),
                        ), true);
                    ?>                    
                    
                </div><!-- slider-wrap -->
                <div class="slider-wrap building-up">
                    <?php $min = (int)floor($this->controller->minAttribute('builtuparea'));
                          $max = (int)floor($this->controller->maxAttribute('builtuparea')); ?>
                    <p>Застройка от&nbsp;<span class="dynamic" id="builtUpMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="builtUpMax"><?php echo $max ?></span> <span>м</span>.</p>
                    <?php
                        echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                            'options'=>array('range'=>true, 'min'=>$min, 'max'=>$max, 'disabled'=>false, 'values'=>array($min, $max),
                                'change'=>'js: function( event, ui ) {
                                    $("#builtUpMin").text(ui.values[0]);
                                    $("#builtUpMax").text(ui.values[1]);
                                }',
                            ),
                            'htmlOptions'=>array(
                                'class'=>'slider',
                                'style'=>'margin:5px',
                            ),
                        ), true);
                    ?>                    
                </div><!-- slider-wrap -->

                <div class="slider-wrap roof">
                    <?php $min = (int)floor($this->controller->minAttribute('roofarea'));
                          $max = (int)floor($this->controller->maxAttribute('roofarea')); ?>
                    <p>Крыша от&nbsp;<span class="dynamic" id="roofAreaMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="roofAreaMax"><?php echo $max ?></span> <span>м</span>.</p>
                    <?php
                        echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                            'options'=>array('range'=>true, 'min'=>$min, 'max'=>$max, 'disabled'=>false, 'values'=>array($min, $max),
                                'change'=>'js: function( event, ui ) {
                                    $("#roofAreaMin").text(ui.values[0]);
                                    $("#roofAreaMax").text(ui.values[1]);
                                }',
                            ),
                            'htmlOptions'=>array(
                                'class'=>'slider',
                                'style'=>'margin:5px',
                            ),
                        ), true);
                    ?>                    
                </div><!-- slider-wrap -->
                
            </div><!-- folded -->
        </div><!-- folded-wrap -->
    </div><!-- filter -->
    
    <div class="filter">
        <div class="folded-wrap">
            <span class="knob">Кол-во комнат</span>
            <div class="folded opened">
                <div class="slider-wrap roof">
                    <?php $min = (int)floor($this->controller->minAttribute('numberofbedrooms'));
                          $max = (int)floor($this->controller->maxAttribute('numberofbedrooms')); ?>
                    <p>Кол-во комнат от&nbsp;<span class="dynamic" id="roomCountMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="roomCountMax"><?php echo $max ?></span>.</p>
                    <?php
                        echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                            'options'=>array('range'=>true, 'min'=>$min, 'max'=>$max, 'disabled'=>false, 'values'=>array($min, $max),
                                'change'=>'js: function( event, ui ) {
                                    $("#roomCountMin").text(ui.values[0]);
                                    $("#roomCountMax").text(ui.values[1]);
                                }',
                            ),
                            'htmlOptions'=>array(
                                'class'=>'slider',
                                'style'=>'margin:5px',
                            ),
                        ), true);
                    ?>                    
                </div><!-- slider-wrap -->
            </div><!-- folded -->
        </div><!-- folded-wrap -->
    </div><!-- filter -->
    
    <div class="filter">
        <div class="folded-wrap">
            <span class="knob active">Тип здания</span>
            <div class="folded opened">
                <ul class="checkbox" id="subcategories">
                    <?php foreach ($subcategories as $item) { ?>
                        <li class="checked" data="<?php echo $item->id ?>"><?php echo $item->name ?></li>
                    <?php } ?>
                </ul>
            </div><!-- folded -->
        </div><!-- folded-wrap -->
    </div><!-- filter -->
    
    <div class="filter">
        <div class="folded-wrap">
            <span class="knob">Кол-во этажей</span>
            <div class="folded opened">
                <div class="slider-wrap roof">
                    <?php $min = (int)floor($this->controller->minAttribute('floorcount'));
                          $max = (int)floor($this->controller->maxAttribute('floorcount')); ?>
                    <p>Кол-во этажей от&nbsp;<span class="dynamic" id="floorCountMin"><?php echo $min ?></span> до&nbsp;<span class="dynamic" id="floorCountMax"><?php echo $max ?></span>.</p>
                    <?php
                        echo $this->widget('zii.widgets.jui.CJuiSlider', array(
                            'options'=>array('range'=>true, 'min'=>$min, 'max'=>$max, 'disabled'=>false, 'values'=>array($min, $max),
                                'change'=>'js: function( event, ui ) {
                                    $("#floorCountMin").text(ui.values[0]);
                                    $("#floorCountMax").text(ui.values[1]);
                                }',
                            ),
                            'htmlOptions'=>array(
                                'class'=>'slider',
                                'style'=>'margin:5px',
                            ),
                        ), true);
                    ?> 
                </div><!-- slider-wrap -->                   
            </div><!-- folded -->
        </div><!-- folded-wrap -->
    </div><!-- filter -->
    
    <div class="filter">
        <div class="folded-wrap">
            <span class="knob">Паркинг</span>
            <div class="folded">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil, voluptas, tempora et soluta obcaecati quod nemo aperiam animi asperiores voluptatibus ex repellendus praesentium ducimus unde nesciunt mollitia ea possimus?
                </p>
            </div><!-- folded -->
        </div><!-- folded-wrap -->
    </div><!-- filter -->
    <div class="question">
        <h5>
            <strong>Задайте вопрос</strong>
        </h5>
        <p>
            Получите консультацию от&nbsp;наших специалистов прямо сейчас!
        </p>
        <div class="question-box">
            <form action="#">
                <fieldset>
                    <div class="form-line">
                        <textarea name="question-area" id="question-box-1" tabindex="1" cols="30" rows="10">Ваш вопрос...</textarea>
                    </div>
                    <div class="form-line">
                        <span class="input">
                            <input class="default name" type="text" id="question-box-2" tabindex="2" value="Ваше имя">
                            <label for="request-box-1"></label>
                        </span>
                    </div><!-- form-line -->
                    <div class="form-line">
                        <span class="input">
                            <input class="default phone" type="tel" id="question-box-3" tabindex="3" value="Ваш телефон">
                            <label for="request-box-2"></label>
                        </span>
                    </div><!-- form-line -->
                    <div class="form-line">
                        <button type="button">Отправить</button>
                    </div><!-- form-line -->
                </fieldset>
            </form>
        </div><!-- question-box -->
    </div><!-- question -->
</div><!-- filter-wrap -->
