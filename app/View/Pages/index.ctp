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
          <!-- <h1>HashKit</h1> -->
          <img src="/img/hash_logo.png">
          <?php if($authUser):?>
          <h3>You are a click away to learn about hash functions and to start, press the any button below:</h3>

          <div class="btn-group">
          <a class="btn btn-lg btn-primary" href="/Pages/hash_information">Information</a>
          <a class="btn btn-lg btn-warning" href="/Questionnaires/questionnaire">Quiz</a>
          </div>
          <?php endif;?>
          
          <?php if(!$authUser):?>
          <h3>Want to learn more about hash functions? Now, You can by just clicking the buttons below:</h3>
          <div class="btn-group">
          <a class="btn btn-lg btn-primary" href="/Users/register">Register</a>
          <a class="btn btn-lg btn-warning" href="/Users/login">Login</a>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper3.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption" id="blackfrontforcarousel">
          <h1>Facts about Hash functions</h1>
          
          <?php if($authUser):?>
          <h3>Find out more about Hash functions by clicking the button below:</h3>
          <button type="button" id="btlogin" class="btn btn-lg btn-warning" href="/Pages/hash_information">start</button>
          <?php endif;?>

          <?php if(!$authUser):?>
          <h3>want to learn more ? Login and You can read up on information about Hash functions</h3>
          <button type="button" id="btlogin" class="btn btn-lg btn-warning" href="/Users/login">Login</button>
          <?php endif;?>

        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper4.jpg" class="img-responsive">
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

<section class="container-fluid" id="section1">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <h1 class="text-center v-center" id="headingforaboutus">SAY HELLO TO THE TEAM</h1>
  <h3 class="text-center v-center" id="textforcontentpage">We are a group of university students from UOW (University of Wollongong), who are dedicated to impart information to users on the topic of hash functions by giving users a new holistic web environment for better understanding.
  </h3>
  <br>
    <div class="row" id="textforcontentpage"> 
      <div class="col-sm-4"><h3 class="text-center v-center">Our School (Singapore)</h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center">Our Team</h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center">Our School (Australia)</h3></div>
    </div>
    <div class="row"> 
      <div class="col-sm-4"><img id="menuImg" src="/img/schoolbuildingdark.jpg" class="img-responsive" onmouseover="onHover();" onmouseout="offHover();" ></div>
      <div class="col-sm-4"><img id="menuImg1" src="/img/groupdark.jpg" class="img-responsive" onmouseover="onHover1();" onmouseout="offHover1();" ></div>
      <div class="col-sm-4"><img id="menuImg2" src="/img/uowdark.jpg" class="img-responsive" onmouseover="onHover2();" onmouseout="offHover2();"></div>
    </div>
    <div class="row"> 
      <div class="col-sm-4"><h3 class="text-center v-center"></h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center" id="textforcontentpage">
      <p>
      Sim Aik Chun (leader)
      <br>
      Ng Yuetyong
      <br> 
      Ian Chua Zhi Ying
      <br>
      Weng Xian
      <br>
      Ong Wei Liang Eugene  
      </p>
      </h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center"></h3></div>
    </div>
    
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</section>

<section class="container-fluid" id="section2">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center">
        <br><br><br><br>
        <h1 id="headingforaboutus">Frequently Asked Questions</h1>
        <br>
        <p class="lead" id="textforcontentpage">This is a short list of our most freqently asked question.For more information about HashKit, or if you need support, please click on this site or even contact us by this link.</p>
        <br>
        <h3 id="textforcontentpage"><b>What is HashKit ?</b></h3>
        <br>
        <p class="lead" id="textforcontentpage">HashKit is a simple and illustrative tool to learn/understand about hash functions and more. At the same time, users are able to use the useful tools to increase productivity and other means.</p>
        <br>
        <h3 id="textforcontentpage"><b>Any cost for using this online website?</b></h3>
        <br>
        <p class="lead" id="textforcontentpage">It is absolutely free.</p>
        <br>
        <h3 id="textforcontentpage"><b>I have a technical problem or support issue I need resolved, who do I email?</b></h3>
        <br>
        <p class="lead" id="textforcontentpage">The best way to get in touch with us is to using our link or read up in our support center.</p>
        <br>
        <h3 id="textforcontentpage"><b>Where does the name come from?<b></h3>
        <br>
        <p class="lead" id="textforcontentpage">We are assigned to do this final year project on hash functions in this january and with the objectives from the project, we called it "HashKit" since no one has used or called it yet.</p>
        <br>
        <h3 id="textforcontentpage"><b>How to use this website? </b></h3>
        <br>
        <p class="lead" id="textforcontentpage">You can register and login as a user to use any tool or read up on any information.</p>
        <br>
        <h3 id="textforcontentpage"><b>Is it available or suitable on another platform such as mobile ?</b></h3>
        <br>
        <p class="lead" id="textforcontentpage">Yes with the help of the jquery, bootstrap and cakephp.</p>
        <br>
        <h3 id="textforcontentpage"><b>Any futher updates?</b></h3>
        <br>
        <p class="lead" id="textforcontentpage">Yes. There will be updates. Please wait for new updates..</p>
        <br><br><br><br><br><br>

    </div>
  </div>
</section>

<section class="container-fluid" id="section3">
  <h1 class="text-center">Bootstrap is Responsive</h1>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <p class="text-center lead">Vertical scrolling has become a popular and lasting trend in Web design. The question becomes, is it here to stay?</p>
        <div class="row">
          <div class="col-xs-6">Some brand-tacular designs even have home page content that is taller that 12,000 pixels. That's a lotta content.</div>
          <div class="col-xs-6 text-right">Anyhoo, this is just some random blurb of text, and Bootply.com is a playground and code editor for Bootstrap.</div>
        </div>
        <p class="text-center">
        </p>
      </div>
   </div>
</section>

<section class="container-fluid" id="section4">
  <h2 class="text-center">Change this Content. Change the world.</h2>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <p class="text-center">Images will scale down proportionately as browser width narrows.</p>
      </div>
    </div>
</section>

<section class="container-fluid" id="section5">
  <h2 class="text-center">Do you see what I mean?</h2>
    <p class="text-center lead">Add some compelling information here</p>
</section>

<script type="text/javascript">
	$(document).on("click", "#btnreg", function(event){
    	window.open("/Users/register");		
	});

  $(document).on("click", "#btlogin", function(event){
  	window.open("/Users/login");
  });

  $('#myCarousel').carousel({ interval: 3000 })

  function onHover()
  {
      $("#menuImg").attr('src', '/img/schoolbuilding.jpg');
  }

  function offHover()
  {
      $("#menuImg").attr('src', '/img/schoolbuildingdark.jpg');
  }  

  function onHover1()
  {
      $("#menuImg1").attr('src', '/img/group.jpg');
  }

  function offHover1()
  {
      $("#menuImg1").attr('src', '/img/groupdark.jpg');
  }

  function onHover2()
  {
      $("#menuImg2").attr('src', '/img/uow.jpg');
  }

  function offHover2()
  {
      $("#menuImg2").attr('src', '/img/uowdark.jpg');
  }
</script>
