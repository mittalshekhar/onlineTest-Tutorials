<!DOCTYPE html>
  <html>
  <body>
    <div id="vide_div">
      <img src="<?php echo base_url('assets/dist/img/photo4.jpg')?>" height="400px" width="500px" style="cursor:pointer" /></div>
      <div style="display:none">
      <div id="player"></div>
    </div>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
      var player;
      var video_id = '5oRQfO6MQ_w';
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '640',
          width: '700',
          videoId: video_id,
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
      }

      var done = false;
      function onPlayerStateChange(event) {
        switch (event.data) {
          case YT.PlayerState.ENDED:
          $('#vide_div').next().css('display','none');
          $('#vide_div').css('display','block');
          break;
        }
      }

      $(document).ready(function(){
       $('#vide_div').on('click',function(){
        $(this).next().css('display','block');
        $(this).css('display','none');

        player.playVideo();
      })
     });
    </script>
    </body>
    </html>