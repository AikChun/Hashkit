<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="/img/wallpaper6.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>HashKit</h1>
          <h3>A project by a group of University of Wollongong Students</h3>
          <h3>Hash function online toolkit - a tool which helps to gives information about hash functions and usefuls tools to interested parties.</h3>
          <?php if(!$authUser):?>
          <h4>To start using by</h4>
          <div class="btn-group">
          	<button type="button" id ="btnreg" class="btn btn-lg btn-primary " href="/Users/register">Register</button>
          	<button type="button" id="btlogin" class="btn btn-lg btn-warning" href="/Users/login">Login</button>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper4.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Information about Hash functions</h1>
          <p>want to learn more ? Login and You can read up on information about Hash functions</p>
          <?php if(!$authUser):?>
          <button type="button" id="btlogin" class="btn btn-lg btn-warning" href="/Users/login">Login</button>
           <?php endif;?>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper2.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Reverse look-up.. Comparison between hash functions</h1>
          <p>And many more.. Come and try out our tools by logging in..</p>
          <?php if(!$authUser):?>
          <button type="button" id="btlogin" class="btn btn-lg btn-warning" href="/Users/login">Login</button>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a> -->  
</div>
<!-- /.carousel -->

<script type="text/javascript">
	$(document).on("click", "#btnreg", function(event){
    	window.open("/Users/register");		
	});

    $(document).on("click", "#btlogin", function(event){
    	window.open("/Users/login");
    });
</script>
