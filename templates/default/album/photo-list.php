<?php foreach ($rows as $key => $value): ?>
<div class="photo_thumbnail">
    <a href="javascript:void(0)" class="photo_link">
        <img src="<?php echo thumb($value['path'],500,500,2);?>" width="<?=$value['width']?>" height="<?=$value['height']?>" />
    </a>
    <div class="top-button">
        <a href="javascript:void(0)" class="privtype <?php if($value['priv_type']==1){echo 'lock';}else{echo 'open';} ?>"></a>
    </div>
    <div class="info">
        <a href="javascript:void(0)" class="addto"></a>
        <span class="photo-title"><?php echo $value['name'];?></span>
    </div>
</div>
<?php endforeach ?>