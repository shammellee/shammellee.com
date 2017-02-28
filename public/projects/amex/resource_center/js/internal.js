$((function(_this) {
  return function() {
    var $agreement, $agreementConfirm, $dateList, $favoriteList, $overlay, $sortDate, $sortFavorite, $videoPlayer, $youtube, KEY, MEDIA_URL_PREFIX, agreementCookie, cookieEq, firstScript, getCookie, gotoDownload, hideModals, hideOverlay, isBadBrowser, mediaId, modals, msInDay, omnitureTrack, originProtocol, setVideoSource, showAgreement, showOverlay, showVideoPlayer, ua, unsetVideoSource, videoID, yearsFromNow, ytScript;
    originProtocol = location.protocol;
    ytScript = document.createElement('script');
    ytScript.src = "http://youtube.com/iframe_api";
    firstScript = document.getElementsByTagName('script')[0];
    $overlay = $('.overlay');
    $agreement = $('#agreementShell');
    $agreementConfirm = $agreement.find('.agreementConfirm');
    $videoPlayer = $('#youtubeVideoPlayerShell');
    $youtube = $('#youtubeVideoPlayer');
    $sortFavorite = $('#resourceListShell').find('.icon_sort_favorite');
    $sortDate = $('#resourceListShell').find('.icon_sort_date');
    $favoriteList = $('#sortByFavorite');
    $dateList = $('#sortByDate');
    mediaId = '';
    modals = [$agreement, $videoPlayer];
    _this.player = null;
    videoID = 'foo';
    MEDIA_URL_PREFIX = '/mediahandler/?mediaid=';
    KEY = {
      ESCAPE: 27
    };
    msInDay = 86400002;
    agreementCookie = 'agreementConfirmed';
    ua = navigator.userAgent;
    isBadBrowser = (/msie/gi.test(ua)) || (/safari/gi.test(ua) && !/chrome/gi.test(ua)) || (/firefox/gi.test(ua));
    if (isBadBrowser) {
      $('li.video').find('a').click(function(e) {
        e.preventDefault();
        setVideoSource($(this).attr('href'));
        return showVideoPlayer();
      });
    } else {
      $youtube.attr('src', "http://www.youtube.com/embed/?enablejsapi=1&origin=" + location.origin + "&rel=0");
      firstScript.parentNode.insertBefore(ytScript, firstScript);
      _this.onYouTubeIframeAPIReady = function() {
        return _this.player = new YT.Player('youtubeVideoPlayer', {
          events: {
            'onReady': onPlayerReady
          }
        });
      };
      _this.onPlayerReady = function() {
        var player;
        player = this.player;
        return $('li.video').find('a').click(function(e) {
          var vID;
          e.preventDefault();
          if (videoID === (vID = $(this).attr('href'))) {
            if (player.getPlayerState() === YT.PlayerState.ENDED) {
              player.seekTo(0);
            } else {
              player.playVideo();
            }
          } else {
            player.loadVideoById(vID);
            videoID = vID;
          }
          return showVideoPlayer();
        });
      };
    }
    $('.module').find('a.downloadLink').click(function(e) {
      e.preventDefault();
      mediaId = $(this).attr('id');
      if (cookieEq(agreementCookie, 'true')) {
        return gotoDownload();
      } else {
        return showAgreement();
      }
    });
    $agreementConfirm.click(function(e) {
      e.preventDefault();
      document.cookie = agreementCookie + "=true;expires=" + ((new Date(yearsFromNow(1))).toUTCString());
      omnitureTrack('rmaction', 'Accept_T&C');
      hideModals();
      hideOverlay();
      return gotoDownload();
    });
    $('.overlay,.closeVideo').click(function() {
      if (isBadBrowser) {
        unsetVideoSource();
      } else {
        if (typeof player.pauseVideo === "function") {
          player.pauseVideo();
        }
      }
      hideModals();
      return hideOverlay();
    });
    $sortFavorite.click(function() {
      $sortFavorite.removeClass('icon_sort_favorite_inactive').addClass('icon_sort_favorite_active');
      $sortDate.removeClass('icon_sort_date_active').addClass('icon_sort_date_inactive');
      $favoriteList.show();
      return $dateList.hide();
    });
    $sortDate.click(function() {
      $sortFavorite.removeClass('icon_sort_favorite_active').addClass('icon_sort_favorite_inactive');
      $sortDate.removeClass('icon_sort_date_inactive').addClass('icon_sort_date_active');
      $favoriteList.hide();
      return $dateList.show();
    });
    $('body').keyup(function(e) {
      if (e.which === KEY.ESCAPE && ($agreement.is(':visible' || $videoPlayer.is(':visible')))) {
        hideModals();
        return hideOverlay();
      }
    });
    $('.icon_modal_close').click(function() {
      hideModals();
      return hideOverlay();
    });
    setVideoSource = function(id) {
      return $youtube.attr('src', "http://www.youtube.com/embed/" + id + "?origin=" + location.origin + "&rel=0");
    };
    unsetVideoSource = function() {
      return setVideoSource('');
    };
    showVideoPlayer = function() {
      hideModals();
      showOverlay();
      omnitureTrack('layertrack', 'VideoLayer');
      return $videoPlayer.show();
    };
    showAgreement = function() {
      hideModals();
      omnitureTrack('layertrack', 'Show_T&C');
      showOverlay();
      return $agreement.show().find('.agreementBody').scrollTop(0);
    };
    showOverlay = function() {
      return $overlay.show();
    };
    hideOverlay = function() {
      return $overlay.hide();
    };
    hideModals = function() {
      var el, i, len, results;
      results = [];
      for (i = 0, len = modals.length; i < len; i++) {
        el = modals[i];
        results.push(el.hide());
      }
      return results;
    };
    yearsFromNow = function(years) {
      years = parseInt(years, 10);
      return ((typeof Date.now === "function" ? Date.now() : void 0) || new Date().getTime()) + msInDay * 365 * years;
    };
    getCookie = function(key) {
      return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(key).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1"));
    };
    cookieEq = function(key, value) {
      return (getCookie(key)) === value;
    };
    gotoDownload = function() {
      omnitureTrack('rmaction', 'Download_PlayBook');
      return location.href = "mediaHandler/?mediaId=" + mediaId;
    };
    return omnitureTrack = function(param1, param2) {
      if (typeof window.$iTagTracker === 'function') {
        return window.$iTagTracker(param1, param2);
      } else {
        return null;
      }
    };
  };
})(this));
