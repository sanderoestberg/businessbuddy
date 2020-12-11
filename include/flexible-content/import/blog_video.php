<?php
$text = get_sub_field('text');
$video = get_sub_field('video');
$position = get_sub_field('video_pos');
// if ($position == "left") {
//     $flex_class == "left"
// } elseif ($position == "center"): {
//     $flex_class == "center"
// }

?>
<section class="video-blog-element">
    <div class="pad-container">
        <div class="small-grid-container">
            <?php echo $text ?>
            <div class="video-container <?php echo $position ?>">
            <?php echo $video ?>
            </div>
        </div>
    </div>
</section>
