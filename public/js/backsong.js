var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
const backSongIsReady = () => {
    player = new YT.Player('player', {
        playerVars: {
            'playsinline': 1
        },
        // events: {
            // 'onReady': onPlayerReady,
            // 'onStateChange': onPlayerStateChange
        // }
    });
}

const playMusic = () => {
    player.playVideo();
}

const stopMusic = () => {
    player.stopVideo();
}

const pauseMusic = () => {
    player.pauseVideo();
}

var done = false;
const onPlayerStateChange = event => {
    // if (event.data == YT.PlayerState.PLAYING && !done) {
    //     setTimeout(stopMusic, 6000);
    //     done = true;
    // }
}

// $(document).ready(function() {
//     backSongIsReady();
// });

var isPaused = false;
const toggleBackSong = () => {
    // backSongIsReady();

    playMusic();
    document.getElementById('__iconMusicPaused').classList.add('hidden');

    if (!isPaused) {
        pauseMusic();
        document.getElementById('__iconMusicPaused').classList.remove('hidden');
    }

    isPaused = !isPaused;
}