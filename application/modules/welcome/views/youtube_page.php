<style type="text/css">
  body {margin:2rem;}

.modal-dialog {
      max-width: 1000px;
      height: 600px;
      margin: 30px auto;
  }
.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
</style>

<div class="container">
    <h1>Play YouTube or Vimeo Videos in Bootstrap 4 Modal</h1>
 
 <a class="video-btn" data-src="https://www.youtube.com/embed/-g4heKUeJqw"><img src="<?php echo base_url('assets/dist/img/photo4.jpg')?>"  height="200px" width="300px" style="cursor:pointer"  data-target="#myModal" data-toggle="modal" /></a>

<button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myModal">
  Play Vimeo Video
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay" allowfullscreen=""></iframe>
</div> 
      </div>
    </div>
  </div>
</div> 
</div>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

var $videoSrc;  
$('.video-btn').click(function() {

    $videoSrc = $(this).data( "src" );
    alert(videoSrc);
});
console.log($videoSrc);
  
$('#myModal').on('shown.bs.modal', function (e) {
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0;allowfullscreen=true" ); 
})
$('#myModal').on('hide.bs.modal', function (e) {
    $("#video").attr('src',$videoSrc); 
})  
});
</script>

