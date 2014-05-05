<!-- <script src="/js/jquery.jeditable.js" type="text/javascript"></script>
<style type="text/css">  

    #content {
      width: 770px;
    }

    .editable input[type=submit] {
      color: #F00;
      font-weight: bold;
    }
    .editable input[type=button] {
      color: #0F0;
      font-weight: bold;
    }
</style>
<script type="text/javascript"> 
    $(function() {

      $(".edit_area").editable("Pages/hash_function", { 
          type   : 'textarea',
          select : true,
          submit : 'Ok',
          cancel : 'Cancel'
      });
    });
</script>
 -->


<article class="container">
        <div class="row">
            <div class="col-md-3" id="leftCol">
                <ul class="nav nav-stacked " id="sidebar">
                  <li><a href="#sec0" class="active">Introduction</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec1" class="">Types of Hash functions</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec2" class="">List of Hash functions</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec3" class="">Uses for Hash functions</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec4" class="">Hash functions' properties</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec5" class="">Attacks on Hash functions</a></li>
                  <li class="divider"></li>
                  <li><a href="#sec6" class="">Summary</a></li>
              </ul>
          </div>
          
          <div class="col-md-9">
              <h2 id="sec0" contenteditable="false">Introduction</h2>
              <h3 class="">What is a Hash function ?</h3>
              <p class="edit_area">A hash function takes in any length of data such as characters and maps them to a fixed length of arbitrary hash value.</p> 
              <hr class="">
                <h3 class="">What about Crytographic Hash function ?</h3>
                <p class="edit_area">Despite of having the same functionality as a hash function, it has additional properties such one-way which provides better security. It is usually associated with generating a message digest (sometimes called a checksum) which is normally shorter than the original data. For a message digest function to be crypotgraphically secure, it must be computationally infeasible to get back the original message by using the message digest and impossible to find two different messages with the same message digest. It is designed to be easily computable and has to achieve certain security properties, e.g: preimage resistance, second preimage resistance and collision resistance.<p>
                <br>
                Example of a MD5 function to perform on a message :
                <br>
                <center><img src="/img/example.jpg"></center>
                <br>
                <h3>Is there any encryption in hash or digest ?</h3>
                  <p class="edit_area">The answer is No. There is always a confusion because all these words are in the category of "cryptography", but it is important to understand the difference. Encryption provide a 1:1 mapping between an arbitrary length and output and can be always reversible with a key which makes it a two-way operation. Unlike encryption, the hash should be only one-way which means that from a hash, it cannot not be used to get the original message. Below are the steps taken for each process that shows the difference between encryption and hash : 
                  </p> 
                <br>
                <div class="row">
                  <div class="col-md-6">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="" contenteditable="false">Encryption</h3>
                              <img src="/img/EncryptDecrypt.jpg">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="" contenteditable="false">Hash Function</h3>
                              <img src="/img/sha1.jpg">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <hr class="">
              <h2 id="sec1">Type of Hash functions</h2>
              <br>
                <CENTER><img src="/img/typeofhashfunctions.jpg"></CENTER>
              <br>
              <p>Keyed hash functions such as MAC(message authentication code) are defined by having their hash function HK indexed by a secret key K with additional property called the computation-resistance – given any set of pairs (message (Mi), hash (message)H(Mi)), it is computationally infeasible to find a valid message-MAC-pair(M,H(M)) such that M is not equal to Mi. The purpose is to provide authenticity and integrity check. So that only parties have the same secret key to verify if the message has been modified and if the MAC was generated with the correct secret key. (For more information about MAC, refer to this link)
              </p>
              <br>
              Example of the MAC process :
              <br>
              <CENTER><img src="/img/MAC.jpg"></CENTER>
              <br>
              Another Example of one would to use MAC in real life :
              <br>
              <CENTER><img src="/img/MACprocess.jpg"></CENTER>
              <br>
              <p>For Modification Detection Codes (unkeyed hash function), In contrast to the MAC which requires the input message and key, it only needs the message input with the purpose of generating a unique hash value for any message for data integrity checks. It is still possible to produce a MAC from an unkeyed hash function by constructing a Hash-based message authentication code which incorporates the secret key K in the calculation to produce the unique hash value.
              </p>
              <br>    
              <p>Then, the Modification Detection Codes was further divided to two subclasses:</p>
              <br>
              <h3>One way Hash Functions (OWHF)</h3>
              <p>
              For a function to be categorised as a one way hash functions, it has to fulfil the two security properties: preimage and second preimage resistance. (Click on this link to learn more about these properties)
              </p>
              <br>
              <h3>Collision Resistant Hash Functions (CRHF)</h3>
              <p>
              For a function to be categorised as Collision Resistant hash functions, it has to fulfil the two security properties: preimage and second preimage resistance. (Click on this link to learn more about these properties)
              </p>
              <hr class="">
              <h2 id="sec2">List of Hash functions</h2>
              <hr class="">
              <h2 id="sec3">Uses for Hash functions</h2>
              <h4>Verifying file integrity</h4>
              <p class="edit_area">This is often used to check the intergity of the data by comparing the both checksums of two identical files generated by same hash function to be similar to one another.</p>
              Example :
              <br>
              <CENTER><img src="/img/fileintegrity.jpg"></CENTER>
              <br>
              <h4>Hashing passwords</h4>
              <p class="edit_area">In a computer system, it is not a good idea to store passwords in cleartext (readable to user) due to the fact that if the system has been compromised, the bad guy can somehow obtain the stored passwords and use to their advantage. Hence, a more secure way is to store the hash of the password, rather than the password itself since the hashes are not reversible. This reduces the consequence of damage done by the bad guy.</p> 
              Example : 
              <br>
              <CENTER><img src="/img/passwordhash.jpg"></CENTER>
              <br>
              <h4>Encryption algorithm</h4>
              <p class="edit_area">Hash functions can be used as building block of ciphers like it has been used in the F-function in Feistel network designs and/or can be used to generate a key for the secret password to encrypt.</p> 
              <h4>Software protection</h4>
              In the websites which the softwares are allowed to distribute, they are tied to a hash digest. So when users downloaded the program, the user can hash it with the same algorithm and check the match of the hashes. However, this does not protect from forging another hash digest for modified software but,it can be done by using digital signature for the hash value of the software. 
              </br>
              <hr class="">
                <h2 id="sec4" class="">Hash functions' properties</h2>

              <p class="">A cyptographic hash functions must be able to defend against all known type of cryptanalytic attack. It should be able to apply to any input size and output a fixed size. It must have the following properties:
                  <li><b>Collision resistance</b>

                  <li><b>Pre-image resistance</b>
                  <br>
                  For any given input Y, it should be difficult to find another input X such that hash(Y) = hash(X) and Y not equals to X. Function that does not have this property are prone to preimage attacks.
                  <br><br>
                  <li><b>Second pre-image resistance</b>
              </p>
              <hr class="">
                <h2 id="sec5" class="">Attacks on Hash functions</h2>
                <br>
                <b>Brute-force attack</b>
                <p>An attack that is used when it is not possible to take
                  advantage of weakness in hash function structure and alogrithm.
                  It involves hashing all possible combinations from a random word generator or dictionary until the correct pair of collision is found. In theory, given enough time, a brute-force attack will eventually be successful but it is not practical as some hash function has larger output bits which requires too much time and resouces to perform. An easy measure against brute force attack will be limiting the number of attempts on important functions such as login.</p>
                <br>
                <b>Birthday attack</b>
                <p>A type of cryptographic attack that is based on the birthday 
                  problem in probability theory that is used to estimate the likelihood of collision in hash functions. It states that in order for there to be a 50% chance that someone in a given room shares your birthday, you need 253 people in the room. However, if you are looking for a greater than 50% chance that any two people in the room have the same birthday, you only need 23 people.This applies to finding collisions in hashing algorithms because it is harder to find collision with a given hash than it is to find any two random plaintext that hash to the same value. It illustrates the tremendous difference between the effort required for a pre-image attack and a collision attack.</p>
                <br>
                <b>Collision attack</b>
                <p>An attack that finds two different messages m1 and m2, such that hash(m1) = hash(m2). In a classical collision attack, the attacker  has no control over the content of either message, but are arbitrarily chosen by the algorithm. A collision found from two random message does not really affect the security of hash function. For the attack to be useful, the attack must be in control of the input to the hash function</p>
                <br>
                <b>Chosen-prefix collision attack</b>
                <p>An extension of collision attack where the attacker can choose two arbitrarily different message, and then append different calculated values that result in the whole message having an equal hash value. This attack is much more powerful than a classical collision attack</p>
                <br>
                <b>Pre-image attack</b>
                <p>An attack where the adversary only has access to message digest and is trying to generate a plaintext that hash to the same value. This attack usually occur when the database of hashed password is leaked or hacked.
                </p>
                <br>
                <b>2nd pre-image attack</b>
                <p>An attack where the adversary only has access to the input plaintext and is trying to find another plaintext that hash to the same value. It is important for hash function to be resistant to 2nd pre-image attacks because of digital signature schemes where its H(message) and message is made public. An attacker can come up with another H(message) using different plaintext and publish the message as though he is the orignal signer.</p>
  
                <h2 id="sec6" class="">Section 4</h2>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
              veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
              ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
              cor magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
              quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
              velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
              magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
              exercitationem ullam corporis suscipit laboriosam, nisi ut
              <hr class="">
               <h4 class=""></h4>

              <hr class="">
          </div>
      </div>
  </article>

<script type="text/javascript">
    $('#sidebar').affix({
        offset: {
          top: 235
        }
    });
    var $body   = $(document.body);
    var navHeight = $('.navbar').outerHeight(true) + 10;

    $body.scrollspy({
      target: '#leftCol',
      offset: navHeight
    });

    /* smooth scrolling sections */
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 50
            }, 1000);
            return false;
          }
        }
    });
</script>