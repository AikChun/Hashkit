
<!-- <div class="">
    <nav>  
      <ul class="">
        <li><a href="#sec0">Introduction</a></li>
        <li><a href="#sec1">Types of Hash functions</a></li>
        <li><a href="#sec2">List of Hash functions</a></li>
        <li class="dropdown"><i class="glyphicon glyphicon-refresh"></i>
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Uses for Hash functions<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#verifyfileintegrity">Verify file integrity</a></li>
                <li><a href="#hashingpasswords">Hashing passwords</a></li>
                <li><a href="#encryptionalgorithm">Encryption algorithm</a></li>
                <li><a href="#softwareprotection">Software protection</a></li>
                <li><a href="#digitalsignature">Digital signature</a></li>
              </ul>
        </li>
        <li><a href="#sec4">Hash functions' properties</a></li>
        <li><a href="#sec5">Attacks on Hash functions</a></li>
    </ul>
    </nav>
</div> -->

<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                <ul class="nav navbar-inverse">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-inverse hidden-xs" id="lg-menu">
                    <li class="active"><a href="#sec0" class=""><i class="glyphicon glyphicon-list-alt"></i> Introduction</a>
                    </li>
                    <li><a href="#sec1" class=""><i class="glyphicon glyphicon-list"></i> Types of Hash functions</a>
                    </li>
                    <li><a href="#sec2" class=""><i class="glyphicon glyphicon-paperclip"></i> List of Hash functions</a>
                    </li>
                    <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-refresh"></i>Uses for Hash functions<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#verifyfileintegrity">Verify file integrity</a></li>
                            <li><a href="#hashingpasswords">Hashing passwords</a></li>
                            <li><a href="#encryptionalgorithm">Encryption algorithm</a></li>
                            <li><a href="#softwareprotection">Software protection</a></li>
                            <li><a href="#digitalsignature">Digital signature</a></li>
                          </ul>
                    </li> <!--end of dropdown -->
                    <li><a href="#sec4" class=""><i class="glyphicon glyphicon-wrench"></i> Hash functions' properties</a>
                    </li>
                     <li><a href="#sec5" class=""><i class="glyphicon glyphicon-globe"></i> Attacks on Hash functions</a>
                    </li>

                </ul>
                <!-- tiny only nav-->
                <ul class="nav navbar-inverse visible-xs" id="xs-menu">
                    <li><a href="#sec0" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a>
                    </li>
                    <li><a href="#sec1" class="text-center"><i class="glyphicon glyphicon-list"></i></a>
                    </li>
                    <li><a href="#sec2" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a>
                    </li>
                    <li><a href="#sec3" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /sidebar -->
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11 " id="main">
                    <div class=" col-sm-10 col-xs-11">
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
                      <h4>Keyed Hash Functions</h4>
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
                      <h4>Unkeyed Hash Function</h4>
                      <br>
                      <p>For Modification Detection Codes (unkeyed hash function), In contrast to the MAC which requires the input message and key, it only needs the message input with the purpose of generating a unique hash value for any message for data integrity checks. It is still possible to produce a MAC from an unkeyed hash function by constructing a Hash-based message authentication code which incorporates the secret key K in the calculation to produce the unique hash value.
                      </p>
                      <br>    
                      <p>Then, the Modification Detection Codes was further divided to two subclasses:</p>
                      <br>
                      <h4>One way Hash Functions (OWHF)</h4>
                      <p>
                      For a function to be categorised as a one way hash functions, it has to fulfil the two security properties: preimage and second preimage resistance. (Click on this link to learn more about these properties)
                      </p>
                      <br>
                      <h4>Collision Resistant Hash Functions (CRHF)</h4>
                      <p>
                      For a function to be categorised as Collision Resistant hash functions, it has to fulfil the two security properties: preimage and second preimage resistance. (Click on this link to learn more about these properties)
                      </p>
                      <hr class="">
                      <h2 id="sec2">List of Hash functions</h2>
                      <hr class="">
                      <h2 id="sec3">Uses for Hash functions</h2>
                      <p>Today with the accessibility of lots of resources, nearly every application are integrating hash functions in their products due to their security reasons like to protect against alteration and unwanted attacks.</p> 
                      <br>
                      <h4>Verifying file integrity</h4>
                      <p id="verifyfileintegrity" class="edit_area">This is often used to check the intergity of the data by comparing the both checksums of two identical files generated by same hash function to be similar to one another.</p>
                      Example :
                      <br>
                      <CENTER><img src="/img/fileintegrity.jpg"></CENTER>
                      <br>
                      <h4 id="hashingpasswords">Hashing passwords</h4>
                      <p class="edit_area">In a computer system, it is not a good idea to store passwords in cleartext (readable to user) due to the fact that if the system has been compromised, the bad guy can somehow obtain the stored passwords and use to their advantage. Hence, a more secure way is to store the hash of the password, rather than the password itself since the hashes are not reversible. This reduces the consequence of damage done by the bad guy.</p> 
                      Example : 
                      <br>
                      <CENTER><img src="/img/passwordhash.jpg"></CENTER>
                      <br>
                      <h4 id="encryptionalgorithm">Encryption algorithm</h4>
                      <p class="edit_area">Hash functions can be used as building block of ciphers like it has been used in the F-function in Feistel network designs and/or can be used to generate a key for the secret password to encrypt.</p> 
                      <h4 id="softwareprotection">Software protection</h4>
                      In the websites which the softwares are allowed to distribute, they are tied to a hash digest. So when users downloaded the program, the user can hash it with the same algorithm and check the match of the hashes. However, this does not protect from forging another hash digest for modified software but,it can be done by using digital signature for the hash value of the software. 
                      </br>
                      <h4 id="digitalsignature">Digital Signature</h4>
                      A form of electronic signature that usually attached with the document or digital message so to facilitate in proving the authenticity of a digital message or document.
                      <br>
                      Example of how document will be signed with digital signature :
                      <br>
                      <CENTER><img src="/img/signing.jpg"></CENTER>
                      <br>
                      </br>
                      <hr class="">

                      <h2 id="sec4" class="">Hash functions' properties</h2>
                        
                      <p class="">A cyptographic hash functions must be able to defend against all known type of cryptanalytic attack. It should be able to apply to any input size and output a fixed size. It must have the following properties:
                          <br><br>
                          <h4>Collision resistance</h4>
                          A measure to show the difficulty for anyone to pick two inputs that generate the same hash value.If it is difficult to find different messages M1 and M2
                          (M1 is not equal to M2) such that hash values of both are equal, i.e. hash(M1) = hash(M2).
                          <br>
                          <CENTER><img src="/img/collisionresistance.jpg"></CENTER>
                          <br>
                          And, if the hash function does have weak collision resistance, it can be a problem when it comes to digital signature as the agreement document signed with digital signature that uses hash can be altered with another digital signature that has the same hash. This leads to unnecessary issues in the agreement between both parties.
                          <br> 
                          Example :
                          <br>
                          <CENTER><img src="/img/weakcollision.jpg"></CENTER>
                          <br>
                          <h4>Pre-image resistance</h4>
                          A measure to show the difficulty for anyone to create an input which hashes to a particular value that is similar to the hash of unknown message.
                          If given hash value (H) of some unknown message, it is computationally difficult to find such a message M whose hash value is equal to H, i.e. hash(M) = H.
                          <br>
                          <CENTER><img src="/img/preimage.jpg"></CENTER>
                          <br>
                          The problem with weak preimage resistance hash functions is that the attacker can generate random message with same hash as the hashed passwords in the system which means that the penetrator can access the entire system even thought he/she does not need to know the hashed passwords. 

                          <h4>Second pre-image resistance</h4>
                          A measure to show the difficulty for anyone to create an input which hashes to the same value that some other given input hashes to.
                          For any given input Y, it should be difficult to find another input X such that hash(Y) = hash(X) and Y not equals to X. Function that does not have this property are prone to preimage attacks.
                          <br>
                          <CENTER><img src="/img/secondpreimage.jpg"></CENTER>
                          <br>
                          Any hash function with weak second pre-image resistance will help the penetrator to fool people into installing/downloading malicious software which are supposed to be genuine as he/she might alter the source code of the software and produce the same hash as the genuine software.
                          
                      </p>
                      <br>
                      <h4><b>Optional properties</b></h4>
                      <br>
                      <h4>Avalanche effect<h4>

                      <hr class="">
                        <h2 id="sec5" class="">Attacks on Hash functions</h2>
                        <br>
                        <h3>Generic analysis</h3>
                        <p>
                        Ihis approach does not depend on the analysis of internal componment or structure of the subject but rather treats the subject as a black-box with input and output interface during the analysis. The perpetrator might only pass input data, which can be altered depending on the observed results of the black-box calculations. Here are few strategies of generic attacks on hash functions:
                        </p> 
                        <br>
                        <h4>Brute-force attack</h4>
                        <p>An attack that is used when it is not possible to take
                          advantage of weakness in hash function structure and alogrithm.
                          It involves hashing all possible combinations from a random word generator or dictionary until the correct pair of collision is found. In theory, given enough time, a brute-force attack will eventually be successful but it is not practical as some hash function has larger output bits which requires too much time and resouces to perform. An easy measure against brute force attack will be limiting the number of attempts on important functions such as login.</p>
                        <br>
                        <h4>Birthday attack</h4>
                        <p>A type of cryptographic attack that is based on the birthday 
                          problem in probability theory that is used to estimate the likelihood of collision in hash functions. It states that in order for there to be a 50% chance that someone in a given room shares your birthday, you need 253 people in the room. However, if you are looking for a greater than 50% chance that any two people in the room have the same birthday, you only need 23 people.This applies to finding collisions in hashing algorithms because it is harder to find collision with a given hash than it is to find any two random plaintext that hash to the same value. It illustrates the tremendous difference between the effort required for a pre-image attack and a collision attack.</p>
                          <br>
                          <p>Based on the birthday paradox which in theory can calculate the probability that, in a set of n randomly chosen people, some pair of them will have the same birthday, this method uses a probabilistic model to reduce the complexity of cracking a hash function.  
                          </p>
                          <br>
                          <img src="/img/part1.jpg" />
                          <br>
                          <img src="/img/part2 .jpg" />
                          <br>
                          <p> By using the above mathematical expression, we can help you to do the math for the probability of getting a collision and the required amount of hashes before getting a 99% probability.In our tools, there is a probability calculator which allows users to calculate the proability based on their inputs.(link: <b><a href="/HashTests/calculate_probability_of_collision">Collision probability calculator</a></b>)
                          </p>

                        <br>
                        <h4>Collision attack</h4>
                        <p>An attack that finds two different messages m1 and m2, such that hash(m1) = hash(m2). In a classical collision attack, the attacker  has no control over the content of either message, but are arbitrarily chosen by the algorithm. A collision found from two random message does not really affect the security of hash function. For the attack to be useful, the attack must be in control of the input to the hash function</p>
                        <br>
                        <h4>Chosen-prefix collision attack</h4>
                        <p>An extension of collision attack where the attacker can choose two arbitrarily different message, and then append different calculated values that result in the whole message having an equal hash value. This attack is much more powerful than a classical collision attack</p>
                        <br>
                        <h4>Pre-image attack</h4>
                        <p>An attack where the adversary only has access to message digest and is trying to generate a plaintext that hash to the same value. This attack usually occur when the database of hashed password is leaked or hacked.
                        </p>
                        <br>
                        <h4>2nd pre-image attack</h4>
                        <p>An attack where the adversary only has access to the input plaintext and is trying to find another plaintext that hash to the same value. It is important for hash function to be resistant to 2nd pre-image attacks because of digital signature schemes where its H(message) and message is made public. An attacker can come up with another H(message) using different plaintext and publish the message as though he is the orignal signer.</p>
                        <br>
                        <br>
                        <h3>Algorithm specific analysis</h3>
                        <br>
                        <b>differential attack</b>
                        <br>
                        <b>rebound attack</b>
                        <br>
                        <b>linear attack</h3>
                        <br>
                        <b>random graph theory attack</b>
                        <br>
                        <b>distinguishing attack</b>
                        <br>
                  </div>
                </div>
            </div>
            <!-- /main -->
        </div>
    </div>
</div>
<script type="text/javascript">
    $('[data-toggle=offcanvas]').click(function() {
      $(this).toggleClass('visible-xs text-center');
      $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
      $('.row-offcanvas').toggleClass('active');
      $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
      $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
      $('#btnShow').toggle();
  });
</script>