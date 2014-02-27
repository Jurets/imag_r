<?php

/**
 * @var StoreProduct $data
 */

    if($data->mainImage)
        $imgSource = $data->mainImage->getUrl('190x150');
    else
        $imgSource = 'http://placehold.it/190x150';
    //echo CHtml::link(CHtml::image($imgSource, $data->mainImageTitle), array('frontProduct/view', 'url'=>$data->url), array('class'=>'thumbnail'));
?>

<li class="line">
    <div>
        <img src="<?php echo $imgSource ?>" alt="<?php echo $data->mainImageTitle ?>">
        <span><?php echo $data->priceRange(); ?></span>
        <p>
            <strong><?php echo CHtml::encode($data->name); ?></strong>
        </p>
    </div>
</li>