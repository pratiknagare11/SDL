const video = document.getElementById("videoPlayer");

function playPause() {
  if (video.paused || video.ended) {
    video.play();
  } else {
    video.pause();
  }
}

function stopVideo() {
  video.pause();
  video.currentTime = 0;
}

function muteUnmute() {
  video.muted = !video.muted;
}

function volumeUp() {
  if (video.volume < 1) {
    video.volume += 0.1;
  }
}

function volumeDown() {
  if (video.volume > 0) {
    video.volume -= 0.1;
  }
}

function toggleFullScreen() {
  if (video.requestFullscreen) {
    video.requestFullscreen();
  } else if (video.mozRequestFullScreen) {
    /* Firefox */
    video.mozRequestFullScreen();
  } else if (video.webkitRequestFullscreen) {
    /* Chrome, Safari & Opera */
    video.webkitRequestFullscreen();
  } else if (video.msRequestFullscreen) {
    /* IE/Edge */
    video.msRequestFullscreen();
  }
}
