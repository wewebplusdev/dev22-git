var slideWrapper = $(".main-slider"),
  iframes = slideWrapper.find(".embed-player"),
  lazyImages = slideWrapper.find(".slide-image"),
  lazyCounter = 0;

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// When the slide is changing
function playPauseVideo(slick, control) {
  var currentSlide, slideType, startTime, player, video;

  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

  if (slideType === "youtube") {
    switch (control) {
      case "play":
        postMessageToPlayer(player, {
          event: "command"
          // func: "mute"
        });
        postMessageToPlayer(player, {
          event: "command",
          func: "playVideo"
        });
        break;
      case "pause":
        postMessageToPlayer(player, {
          event: "command",
          func: "pauseVideo"
        });
        break;
    }
  }
}

// DOM Ready
$(function() {
  // Initialize
  slideWrapper.on("init", function(slick) {
    slick = $(slick.currentTarget);
    setTimeout(function() {
      playPauseVideo(slick, "play");
    }, 1000);
    // resizePlayer(iframes, 16 / 9);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick, "pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick, "play");
  });
  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
    lazyCounter++;
    if (lazyCounter === lazyImages.length) {
      lazyImages.addClass("show");
      // slideWrapper.slick("slickPlay");
    }
  });

  //start the slider
  slideWrapper.slick({
    // fade:true,
    autoplaySpeed: 4000,
    lazyLoad: "progressive",
    speed: 600,
    arrows: false,
    dots: true,
    cssEase: "cubic-bezier(0.87, 0.03, 0.41, 0.9)"
  });
});

var tag = document.createElement("script");
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var startSeconds = 35;
var endSeconds = 55;
var player;

function onYouTubePlayerAPIReady() {
  player = new YT.Player("ytplayer", {
    videoId: "u9Mv98Gr5pY",
    fitToBackground: true,
    pauseOnScroll: false,
    playerVars: {
      autoplay: 1, // Auto-play the video on load
      controls: 0, // Show pause/play buttons in player
      showinfo: 0, // Hide the video title
      modestbranding: 1, // Hide the Youtube Logo
      fs: 0, // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3, // Hide the Video Annotations
      start: startSeconds, // Set loop start time
      end: endSeconds, // Set loop end time
      autohide: 0, // Hide video controls when playing
      disablekb: 1,
      rel: 0, // Hide video recommendations
      playsinline: 1,
      mute: 1
    },
    events: {
      onStateChange: function(e) {
        if (e.data === YT.PlayerState.ENDED) {
          player.seekTo(startSeconds);
          player.playVideo();
          player.mute();
        }
      },
      onReady: function(e) {
        player.mute();
        player.seekTo(startSeconds);
        player.playVideo();
      }
    }
  });
}