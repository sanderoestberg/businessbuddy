
<div id="yt-wrap">
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
<div id="ytplayer"></div>

</div>


<script>
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
// after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
player = new YT.Player('ytplayer', {
width: '100%',
height: '100%',
videoId: <?php
$link = get_field('frontpage_background_oembed');
preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches);
echo '"' . $matches[0] . '"';
 ?>,
playerVars: {
'autoplay': 1,
'showinfo': 0,
'autohide': 1,
'loop': 1,
'controls': 0,
'modestbranding': 1,
'vq': 'hd1080'
},
events: {
'onReady': onPlayerReady,
'onStateChange': onPlayerStateChange
}
});
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
event.target.playVideo();
player.mute(); // comment out if you don't want the auto played video muted
}

// 5. The API calls this function when the player's state changes.
// The function indicates that when playing a video (state=1),
// the player should play for six seconds and then stop.
function onPlayerStateChange(event) {
if (event.data == YT.PlayerState.ENDED) {
player.seekTo(0);
player.playVideo();
}
}
function stopVideo() {
player.stopVideo();
}
</script>
