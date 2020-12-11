<?php $frontpage_background_video = get_field('frontpage_background_video'); ?>
<div id="yt-wrap" class="video">

<video autoplay muted loop preload="none" playsinline id="myVideo">
      <source src="<?php echo $frontpage_background_video['url'] ?>" type="video/mp4">
</video>

</div>
