<!-- carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="item active" >
     <!--  <img src="/img/wallpaper6.jpg" class="img-responsive"> -->
      <!-- <img src="/img/wallpaper1color.png" class="img-responsive"> -->
      <!-- <img src="/img/wallpaper1gradient.png" class="img-responsive"> -->
      <!-- <img src="/img/wallpapertest1.jpg" class="img-responsive"> -->
      <img src="/img/test3.png" class="img-responsive">
      <div class="container">
        <div class="carousel-caption" style="left:-44%; top: 60%;position:absolute;">
          <!-- <h1>HashKit</h1> -->
          <!-- <img src="/img/hash_logo.png"> -->
          <!-- <img src="/img/testlogo.png"> -->
          <?php if($authUser):?>
          <!-- <h3 id ="textforcarsousel">You are a click away to learn about hash functions and to start, press the any button below:</h3> -->

          <a class="btn btn-lg btn-primary" href="/Pages/hash_information">Information</a>
          <a class="btn btn-lg btn-warning" href="/Questionnaires/questionnaire">Quiz</a>

          <?php endif;?>
          
          <?php if(!$authUser):?>
          <!-- <h3 id ="textforcarsousel">Want to learn more about hash functions? Now, You can by just clicking the buttons below:</h3> -->
          <div class="buttonposition">
          <a class="btn btn-lg btn-primary" href="/Users/register">Register</a>
          <a class="btn btn-lg btn-warning" href="/Users/login">Login</a>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper3.jpg" class="img-responsive">
      <!-- <img src="/img/wallpaper3gradient.png" class="img-responsive"> -->
      <div class="container">
        <div class="carousel-caption" id="blackfrontforcarousel">
          <h1 id="textforcarsouselhead">Facts about Hash functions</h1>
          
          <?php if($authUser):?>
          <h3 id ="textforcarsousel">Find out more about Hash functions by clicking the button below:</h3>
          <button type="button" class="btn btn-lg btn-warning" href="/Pages/hash_information">start</button>
          <?php endif;?>

          <?php if(!$authUser):?>
          <h3 id ="textforcarsousel">want to learn more ? Login and You can read up on information about Hash functions</h3>
          <a class="btn btn-lg btn-warning" href="/Users/login">Login</a>
          <?php endif;?>

        </div>
      </div>
    </div>
    <div class="item">
      <img src="/img/wallpaper4.jpg" class="img-responsive">
      <!-- <img src="/img/wallpaper4gradient.png" class="img-responsive"> -->
      <div class="container">
        <div class="carousel-caption">
          <h1 id="textforcarsouselhead">Hash Tools</h1>
          
          <?php if(!$authUser):?>
          <p id ="textforcarsousel">Come and try out our tools by logging in..</p>
          <a class="btn btn-lg btn-warning" href="/Users/login">Login</a>
          <?php endif;?>

          <?php if($authUser):?>
          <p id ="textforcarsousel">Come and try out our tools by clicking any button below:</p>
          <button type="button" class="btn btn-lg btn-warning" href="/HashTests/basic_hashing">Hash generator</button>
          <button type="button" class="btn btn-lg btn-warning" href="/HashTests/compute_and_compare">Hash algo recommendation</button>
          <button type="button" class="btn btn-lg btn-warning" href="/HashTests/hash_analyser">Hash analyser</button>
          <p id ="textforcarsousel">Or try other tools by clicking the Hash Functions on top</p>
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
  
  <h1 class="text-center v-center" id="headingalt">SAY HELLO TO THE TEAM</h1>
  <h3 class="text-center v-center" id="textforcontentpagealt">We are a group of university students from UOW (University of Wollongong), who are dedicated to impart information to users on the topic of hash functions by giving users a new holistic web environment for better understanding.
  </h3>
  <br>
    <div class="row" id="textforcontentpagealt"> 
      <div class="col-sm-4"><h3 class="text-center v-center"><b>Our School (Singapore)</b></h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center"><b>Our Team</b></h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center"><b>Our School (Australia)</b></h3></div>
    </div>
    <div class="row"> 
      <div class="col-sm-4"><img id="menuImg" src="/img/schoolbuildingdark.jpg" class="img-responsive" onmouseover="onHover();" onmouseout="offHover();" ></div>
      <div class="col-sm-4"><img id="menuImg1" src="/img/groupdark.jpg" class="img-responsive" onmouseover="onHover1();" onmouseout="offHover1();" ></div>
      <div class="col-sm-4"><img id="menuImg2" src="/img/uowdark.jpg" class="img-responsive" onmouseover="onHover2();" onmouseout="offHover2();"></div>
    </div>
    <div class="row"> 
      <div class="col-sm-4"><h3 class="text-center v-center"></h3></div>
      <div class="col-sm-4"><h3 class="text-center v-center" id="textforcontentpagealt">
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
      <br>
      <a class="btn btn-lg btn-success" href="/#myCarousel"><i class ="glyphicon glyphicon-chevron-up"></i>Top</a>
      </h3></div>
      <br>

    </div>
      <br>
      <br>  

  </section>

<section class="container-fluid" id="section2">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center">
        <br><br><br><br>
        <h1 id="headingalt">Frequently Asked Questions</h1>
        <br>
        <p class="lead" id="textforcontentpagealt">This is a short list of our most freqently asked question.For more information about HashKit, or if you need support, please click on this site or even contact us by this link.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>What is HashKit ?</b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">HashKit is a simple and illustrative tool to learn/understand about hash functions and more. At the same time, users are able to use the useful tools to increase productivity and other means.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>Any cost for using this online website?</b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">It is absolutely free.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>I have a technical problem or support issue I need resolved, who do I email?</b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">The best way to get in touch with us is to using our link or read up in our support center.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>Where does the name come from?<b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">We are assigned to do this final year project on hash functions in this january and with the objectives from the project, we called it "HashKit" since no one has used or called it yet.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>How to use this website? </b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">You can register and login as a user to use any tool or read up on any information.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>Is it available or suitable on another platform such as mobile ?</b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">Yes with the help of the jquery, bootstrap and cakephp.</p>
        <br>
        <h3 id="textforcontentpagealtred"><b>Any futher updates?</b></h3>
        <br>
        <p class="lead" id="textforcontentpagealt">Yes. Please wait for new updates..</p>
        <br><br><br>
        <a class="btn btn-lg btn-success" href="/#myCarousel"><i class ="glyphicon glyphicon-chevron-up">Top</i></a>
        <br><br><br>

    </div>
  </div>
</section>

<section class="container-fluid" id="section3">
  <br>
  <br>
  <br>
  <br>
  <h1 class="text-center" id="headingforaboutus">Support</h1>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <p class="text-center lead" id="textforcontentpage">If you do have any issue, you may find your answer here:</p>
        <h3 id="textforcontentpagealtred"><b>Login help</b></h3>
        <br>
        <h3 id="textforcontentpagealtred">What are the requirements for passwords on Hash Kit account?</h3>
        <br>
        <p class="lead" id="textforcontentpage">Here are the requirements of password:
        <br>  
        - The use of both uppercase and lowercase letters (case sensitivity)
        <br>
        - Inclusion of one or more numerical digits
        <br>
        - Inclusion of special characters, e.g. @, #, &, $ etc.
        <br>
        - At least 8 characters
        </p>

        <h3 id="textforcontentpagealtred">How do I change my password?</h3>

        <p class="lead" id="textforcontentpage">You can find a “change password button” in your profile and this will change your password with immediate effects and an email will be sent to your email upon confirmation.I can’t remember my password, what should I do?Click on the forget password link at the login page, an email will be sent to you to assist on resetting your password.</p>

        <h3 id="textforcontentpagealtred">Can I access the web application without logging in?</h3>

        <p class="lead" id="textforcontentpage">A Hash Kit account is mandatory for the usage of this application.</p>

        <h3 id="textforcontentpagealtred">I haven't received the reset email in my mailbox, what should I do next? </h3>

        <p class="lead" id="textforcontentpage">Please wait for few minutes for the server to process the email and check your spam mail. If the email still did not arrive, you can contact the administrator (hashkitproject@gmail.com) for further assistance or use our contact us button on top.</p>

       <h3 id="textforcontentpagealtred">Process help</h3> 

        <h3 id="textforcontentpagealtred">What happens if I unexpectedly/accidently close the browser?</h3>

        <p class="lead" id="textforcontentpage">You will have to restart the browser and try to run the application again.</p>

        <h3 id="textforcontentpagealtred">If my browser hangs when the processing is still been carried out, what should I do next?</h3>

        <p class="lead" id="textforcontentpage">You will have to restart the browser and try to run the application again.After the process is done, I cannot see the result screen and what should I do next?Check your internet connection. You can refresh the page by pressing the refresh button on the web browser and wait for it to load. If it still does not work, please contact the administrator (hashkitproject@gmail.com) for further assistance.</p>


        <h3 id="textforcontentpagealtred">Other topics help</h3>

        <h3 id="textforcontentpagealtred">I can’t see anything on the website, what should i do?</h3>

        <p class="lead" id="textforcontentpage">Check your internet connection. You can refresh the page by pressing the refresh button on the web browser and wait for it to load. If it still does not work, please contact the administrator(hashkitproject@gmail.com) for further assistance.</p>

        <h3 id="textforcontentpagealtred">If I received any 404 error page in anytime during the visit of the website, what should I do next?</h3>

        <p class="lead" id="textforcontentpage">Check your internet connection. You can refresh the page by pressing the refresh button on the web browser and wait for it to load. If it still does not work, please contact the administrator (hashkitproject@gmail.com) for further assistance.</p>
        <br><br>
      <a class="btn btn-lg btn-success" href="/#myCarousel"><i class ="glyphicon glyphicon-chevron-up">Top</i></a>
      </div>
   </div>
</section>

<script type="text/javascript">

  $(document).on("click", "#btlogin", function(event){
  	window.open("/Users/login");
  });

  $('#myCarousel').carousel({ interval: 4000 })

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
