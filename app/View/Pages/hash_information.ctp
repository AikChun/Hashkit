<div class="wrapper">
    
    <div class="box">

        <div class="row row-offcanvas row-offcanvas-left">
                      
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
                <ul class="nav">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-inverse hidden-xs" id="lg-menu" style="margin-left: 5px">
                    <li class="active"><a data-scroll href="#sec0"><i class="glyphicon glyphicon-list-alt"></i> Introduction</a>
                    </li>
                    <li><a data-scroll href="#sec1"><i class="glyphicon glyphicon-list"></i> Types of Hash functions</a>
                    </li>
                    <li><a data-scroll href="#sec2"><i class="glyphicon glyphicon-paperclip"></i> List of Hash functions</a>
                    </li>

                    <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-refresh"></i>Uses for Hash functions<b class="caret"></b></a>
                          <ul class="dropdown-menu" style="background-color: #242222;">
                            <li><a href="#verifyfileintegrity">Verify file integrity</a></li>
                            <li><a href="#hashingpasswords">Hashing passwords</a></li>
                            <li><a href="#encryptionalgorithm">Encryption algorithm</a></li>
                            <li><a href="#softwareprotection">Software protection</a></li>
                            <li><a href="#digitalsignature">Digital signature</a></li>
                          </ul>
                    </li> <!--end of dropdown -->

                    <li><a data-scroll href="#sec4"><i class="glyphicon glyphicon-wrench"></i> Hash functions' properties</a>
                    </li>
                     <li><a data-scroll href="#sec5"><i class="glyphicon glyphicon-globe"></i> Attacks on Hash functions</a>
                    </li>

                </ul>
              
                <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#sec0" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a>
                    </li>
                    <li><a href="#sec1" class="text-center"><i class="glyphicon glyphicon-list"></i></a>
                    </li>
                    <li><a href="#sec2" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a>
                    </li>
                    <li><a href="#sec3" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a>
                    </li>
                    <li><a href="#sec4" class="text-center"><i class="glyphicon glyphicon-wrench"></i></a>
                    </li>
                    <li><a href="#sec5" class="text-center"><i class="glyphicon glyphicon-globe"></i></a>
                    </li>

                </ul>
              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
               
               <div class=" col-sm-10 col-xs-11">

                      <h2 id="sec0"class="text-center v-center">Introduction</h2>
                      <br>
                      <br>
                      <h3 >What is a Hash function ?</h3>
                      <p>A hash function takes in any length of data such as a string of characters or numbers and maps them to a fixed length of arbitrary hash value.</p> 
                      <hr >
                        <h3 >What about Crytographic Hash function ?</h3>
                        <p>Despite of having the same functionality as a hash function, it has additional properties such one-way which provides better security. It is usually associated with generating a <a href="#messagedigest">message digest</a> (sometimes called a checksum) which is normally shorter than the original data. For a message digest function to be cryptographically secure, it must be computationally infeasible to get back the original message by using the message digest and impossible to find two different messages with the same message digest. It is designed to be easily computable and has to achieve certain security properties, e.g: <a href="#preimageresist">pre-image resistance</a>, <a href="#secpreimageresist">second pre-image resistance</a> and <a href="#collisionresistance">collision resistance</a>.</p>
                        <br>
                        <b><i>In our bag of tools, do come and try out our hash generator by this <a href="/HashTests/basic_hashing">link</a>. It can help you to hash with algorithms such as MD5, SHA1 or even Whirlpool.</i></b>
                        <br>
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
                                      <h3  >Encryption</h3>
                                      <img src="/img/EncryptDecrypt.jpg">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h3  >Hash Function</h3>
                                      <img src="/img/sha1.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <br>
                      <hr >
                      <h3  id="messagedigest">What is a message digest ?</h3>
                      <br>
                      <p>
                      It is a representation of text in a form of a single string of alphanumeric values, which is usually created by a <a href="#onewayhash">one-way hash function</a>.    
                      </p>
                      <hr>

                      <h2 id="sec1" class="text-center v-center" >Type of Hash functions</h2>
                      <br>
                      <br>
                        <CENTER><img src="/img/typeofhashfunctions.jpg"></CENTER>
                      <br>
                      <h4 id="MAC"><b>Keyed Hash Functions</b></h4>
                      <br>
                      <p>Keyed hash functions such as MAC(message authentication code) are defined by having their hash function HK indexed by a secret key K with additional property called the computation-resistance – given any set of pairs (message (Mi), hash (message)H(Mi)), it is computationally infeasible to find a valid message-MAC-pair(M,H(M)) such that M is not equal to Mi. A MAC is a short piece of information and its purpose is to provide authenticity to affirm the message's origin and integrity check to detect accidental or intentional changes to the message, so that only parties have the same secret key to verify if the message has been modified and if the MAC was generated with the correct secret key.
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
                      <h4><b>Unkeyed Hash Function</b></h4>
                      <br>
                      <p>For Modification Detection Codes (unkeyed hash function), In contrast to the <a href="#MAC">MAC</a> which requires the input message and key, it only needs the message input with the purpose of generating a unique hash value for any message for data integrity checks. It is still possible to produce a <a href="#MAC">MAC</a> from an unkeyed hash function by constructing a Hash-based message authentication code which incorporates the secret key K in the calculation to produce the unique hash value.
                      </p>
                      <br>    
                      <p>Then, the Modification Detection Codes was further divided to two subclasses:</p>
                      <br>
                      <h4 id="onewayhash"><b>One way Hash Functions (OWHF)</b></h4>
                      <p>
                      For a function to be categorised as a one way hash functions, it has to fulfil the two security properties: <a href="#preimageresist">pre-image resistance</a> and <a href="#secpreimageresist">second pre-image resistance</a>
                      </p>
                      <br>
                      <h4><b>Collision Resistant Hash Functions (CRHF)</b></h4>
                      <p>
                      For a function to be categorised as Collision Resistant hash functions, it has to fulfil the two security properties: <a href="#preimageresist">pre-image resistance</a> and <a href="#collisionresistance">collision resistance</a>
                      </p>
                      <hr >

                      <h2 id="sec2"class="text-center v-center">List of Hash functions</h2>
                      <br><br>
                      <p>In this section, it talks about the commonly used families of hash functions and their attributes.</p>
                      <br>
                      <h4><b>MD2/MD4/MD5/MD6 algorithm family</b></h4>
                      <br>
                      During the 1980, <a href="http://en.wikipedia.org/wiki/Ronald_Rivest">Ronald Rivest</a> has created <a href="http://tools.ietf.org/html/rfc1319">MD2</a> (less secure crytograhic hash function for now) which is optimized for 8-bit computers then years later, it was broken due to preimage attack with the time complexity of 2^104 applications of the compression function by Muller in 2004,soon another improvement on the attack by 2^73 and next, a much faster attack with only 2^63 which is slightly faster than <a href="#birthdayattack">birthday attack</a>.
                      <br><br>
                      Later in the 1990, he developed the MD2's successor, which is called as "MD4" algorithm. With a well defined structure, This algorithm has set as an standard to follow for other algorithms such MD5, SHA1 and RIPEMD. However in 1995, the security of the MD4 was compromised when a article of a full <a href="#collisionattack">collision attack</a> was published and since then, waves of attacks and theoretical preimage attack started to surface. But, it is still used in the market for computing <a href="http://davenport.sourceforge.net/ntlm.html">NTLM</a> password-derived key digests on Microsoft Windows NT, XP, Vista and 7.
                      <br><br>
                      Soon after in 1991, he replaced MD4 with the current most widely used algorithm <a href="http://tools.ietf.org/html/rfc1321">MD5</a>. After years have went pass, a series of attack has successfully found weaknesses and flaws in this algorithm. some will be listed below:
                      <br>
                      -in 2004, an article online states that MD5 is not collision resistant, hence it should be used in applications such as SSL. Also in the same year, researchers are able to create two different files with same MD5 checksum
                      <br><br>
                      -in 2006, an article on improvement and analysis on MD5 attack has created a more serious problem for the application using the algorithm. 
                      <br><br>
                      -in 2007, an article which uses chosen-prefix collisions to attack MD5 can be faster than the previous attacks.
                      <br><br>
                      -in 2008, researchers are able to use a techinque to fake SSL certificate validity and malware uses this flaw to fake a Microsoft digital signature. Since then, applications has switch over to a secure algorithm such SHA2 and etc. Later, a group of algorithm designer included Ronald Rivest came out with <a href="http://groups.csail.mit.edu/cis/md6/"> MD6 </a> which uses Merkle tree-like structure and can prove to be resistant against differential attacks. 

                      <br><br>
                      <h4><b>SHA0/SHA1/SHA2/SHA3 family</b></h4>
                      When it first came out in the public duriing 1993, SHA0 algorithm was designed by National Security Agency and was made a standard for applications.
                      <br>
                      In 1998, collisions can be found at the complexity of 2^61 which is fewer than 2^80 (the ideal hash function complexity) by two french researchers.
                      Here are their article: (<a href="http://fchabaud.free.fr/English/Publications/sha.pdf">link</a>)
                      <br>
                      In 2004, Near collisions are found
                      <br>
                      <h4><b>HAVAL family</b></h4>
                      <br>
                      <hr >

                      <h2 id="sec3"class="text-center v-center">Uses for Hash functions</h2>
                      <p>Today with the accessibility of lots of resources, nearly every application are integrating hash functions in their products due to their security reasons like to protect against alteration and unwanted attacks.</p> 
                      <br>
                      <h4  id="verifyfileintegrity" ><b>Verifying file integrity</b></h4>
                      <p class="edit_area">This is often used to check the intergity of the data by comparing the both checksums of two identical files generated by same hash function to be similar to one another.</p>
                      Example :
                      <br>
                      <CENTER><img src="/img/fileintegrity.jpg"></CENTER>
                      <br>
                      <h4 id="hashingpasswords"><b>Hashing passwords</b></h4>
                      <p class="edit_area">In a computer system, it is not a good idea to store passwords in cleartext (readable to user) due to the fact that if the system has been compromised, the bad guy can somehow obtain the stored passwords and use to their advantage. Hence, a more secure way is to store the hash of the password, rather than the password itself since the hashes are not reversible. This reduces the consequence of damage done by the bad guy.</p> 
                      Example : 
                      <br>
                      <CENTER><img src="/img/passwordhash.jpg"></CENTER>
                      <br>
                      <h4 id="encryptionalgorithm"><b>Encryption algorithm</b></h4>
                      <p class="edit_area">Hash functions can be used as building block of ciphers like it has been used in the F-function in Feistel network designs and/or can be used to generate a key for the secret password to encrypt.</p> 
                      <h4 id="softwareprotection"><b>Software protection</b></h4>
                      In the websites which the softwares are allowed to distribute, they are tied to a hash digest. So when users downloaded the program, the user can hash it with the same algorithm and check the match of the hashes. However, this does not protect from forging another hash digest for modified software but,it can be done by using digital signature for the hash value of the software. 
                      </br>
                      <h4 id="digitalsignature"><b>Digital Signature</b></h4>
                      A form of electronic signature that usually attached with the document or digital message so to facilitate in proving the authenticity of a digital message or document.
                      <br>
                      Example of how document will be signed with digital signature :
                      <br>
                      <CENTER><img src="/img/signing.jpg"></CENTER>
                      <br>
                      </br>
                      <hr >

                      <h2 id="sec4" class="text-center v-center">Hash functions' properties</h2>
                      <br><br>  
                      <p >A cyptographic hash functions must be able to defend against all known type of cryptanalytic attack. It should be able to apply to any input size and output a fixed size. It must have the following properties:
                          <br><br>
                          <h4 id="collisionresistance"><b>Collision resistance</b></h4>
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
                          <h4 id="preimageresist"><b>Pre-image resistance</b></h4>
                          A measure to show the difficulty for anyone to create an input which hashes to a particular value that is similar to the hash of unknown message.
                          If given hash value (H) of some unknown message, it is computationally difficult to find such a message M whose hash value is equal to H, i.e. hash(M) = H.
                          <br>
                          <CENTER><img src="/img/preimage.jpg"></CENTER>
                          <br>
                          The problem with weak preimage resistance hash functions is that the attacker can generate random message with same hash as the hashed passwords in the system which means that the penetrator can access the entire system even thought he/she does not need to know the hashed passwords. 

                          <h4 id="secpreimageresist"><b>Second pre-image resistance</b></h4>
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
                      <h4><b>Avalanche effect</b><h4>

                      <hr >
                      
                        <h2 id="sec5" class="text-center v-center">Attacks on Hash functions</h2>
                        <br><br>
                        <h3><b>Generic analysis</b></h3>
                        <p>
                        Ihis approach does not depend on the analysis of internal componment or structure of the subject but rather treats the subject as a black-box with input and output interface during the analysis. The perpetrator might only pass input data, which can be altered depending on the observed results of the black-box calculations. Here are few strategies of generic attacks on hash functions:
                        </p> 
                        <br>
                        <h4><b>Brute-force attack</b></h4>
                        <p>An attack that is used when it is not possible to take
                          advantage of weakness in hash function structure and alogrithm.
                          It involves hashing all possible combinations from a random word generator or dictionary until the correct pair of collision is found. In theory, given enough time, a brute-force attack will eventually be successful but it is not practical as some hash function has larger output bits which requires too much time and resouces to perform. An easy measure against brute force attack will be limiting the number of attempts on important functions such as login.</p>
                        <br>
                        In our tools, we have added a <a href="/HashTests/reverse_look_up">reverse look-up</a> for users to see if there are hashes found in our database which might have collision or even identical hashes.
                        <br>
                        <h4 id="birthdayattack"><b>Birthday attack</b></h4>
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
                          <p> By using the above mathematical expression, we can help you to do the math for the probability of getting a collision and the required amount of hashes before getting a 99% probability.In our tools, there is a probability calculator which allows users to calculate the proability based on their inputs. 
                          </p>
                          <b><i>We have provided a tool to calcuate for you the probability from this <a href="/HashTests/calculate_probability_of_collision">link</a></b></i>
                          

                        <br>
                        <h4 id="collisionattack"><b>Collision attack</b></h4>
                        <p>An attack that finds two different messages m1 and m2, such that hash(m1) = hash(m2). In a classical collision attack, the attacker  has no control over the content of either message, but are arbitrarily chosen by the algorithm. A collision found from two random message does not really affect the security of hash function. For the attack to be useful, the attack must be in control of the input to the hash function</p>
                        <br>
                        <br>
                        <h4><b>Chosen-prefix collision attack</b></h4>
                        <p>An extension of collision attack where the attacker can choose two arbitrarily different message, and then append different calculated values that result in the whole message having an equal hash value. This attack is much more powerful than a classical collision attack</p>
                        <br>
                        <h4><b>Pre-image attack</b></h4>
                        <p>An attack where the adversary only has access to message digest and is trying to generate a plaintext that hash to the same value. This attack usually occur when the database of hashed password is leaked or hacked.
                        </p>
                        <br>
                        <h4><b>2nd pre-image attack</b></h4>
                        <p>An attack where the adversary only has access to the input plaintext and is trying to find another plaintext that hash to the same value. It is important for hash function to be resistant to 2nd pre-image attacks because of digital signature schemes where its H(message) and message is made public. An attacker can come up with another H(message) using different plaintext and publish the message as though he is the orignal signer.</p>
                        <br>
                        <br>
                        <h3><b>Algorithm specific analysis</b></h3>
                        <br>
                        <h4><b>differential attack</b></h4>
                        <br>
                        <h4><b>rebound attack</b></h4>
                        <br>
                        <h4><b>linear attack</b></h4>
                        <br>
                        <h4><b>random graph theory attack</b></h4>
                        <br>
                        <h4><b>distinguishing attack</b></h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                  </div>
                </div>
               
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>

<script type="text/javascript">

    /* off-canvas sidebar toggle */
    $('[data-toggle=offcanvas]').click(function() {
        $(this).toggleClass('visible-xs text-center');
        $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
        $('.row-offcanvas').toggleClass('active');
        $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
        $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
        $('#btnShow').toggle();
    });

</script>
