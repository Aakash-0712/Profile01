<?php include 'header.php' ?>

</div>
        <div class="col-12 col-lg-12 card" data-form-type="formoid">
   
                <!-- <form  onsubmit="sendEmail()" >
                    <div class="dragArea row">
                        <div class="col-12">
                            <h1 class="mbr-section-title mbr-fonts-style display-2">
                               Contact Us
                            </h1>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"></span>
                            <input type="text" name="name" placeholder="Name" data-form-field="Name" class="form-control display-7" value="" id="name-form1-i">
                        </div>
                        <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                            <input type="email" name="email" placeholder="Email" data-form-field="Email" class="form-control display-7" value="" id="email-form1-i">
                        </div>
                        <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <span class="mbr-iconfont mobi-mbri-mobile mobi-mbri"></span>
                            <input type="tel" name="phone" placeholder="Phone No." data-form-field="tel" class="form-control display-7" value="" id="mobile-form1-i">
                        </div>
                        <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <span class="mbr-iconfont mobi-mbri-bookmark mobi-mbri"></span>
                            <input type="text" name="subject" placeholder="Subject" data-form-field="Subject" class="form-control display-7" value="" id="subject-form1-i">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="textarea">
                            <span class="mbr-iconfont mobi-mbri-contact-form mobi-mbri"></span>
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control display-7" id="textarea-form1-i"></textarea>
                        </div>
                       <button type="submit" class="btn btn-primary display-4"> Send </button>
                    
                    </div>
                </form> -->
               
                    <div class="col-lg-10 offset-lg-0">  
                        <div class="pt-5 md-pt-45px contact-form-style-01" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-12">
                            <h1 class="mbr-section-title mbr-fonts-style display-2">
                               Contact Me
                            </h1>
                        </div>    
                        <h4 class="d-inline-block alt-font fw-600 text-dark-gray ls-minus-1px mb-30px">Feel free to reach via contact form.</h4>
                            <!-- start contact form -->
                            <form onsubmit="sendEmail(); reset(); return false;">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input type="text" autocomplete="off" name="name" id="name" class="form-control required" placeholder="Your name*">
                                </div> 
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" autocomplete="off" name="email" id="email" class="form-control required" placeholder="Your email address*">
                                </div> 
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-phone"></i></span>
                                    <input type="tel" autocomplete="off" name="phone" id="phone" class="form-control required" placeholder="Your Phone*">
                                </div> 
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-bookmark"></i></span>
                                    <input type="text" autocomplete="off" name="subject" id="subject" class="form-control required" placeholder="Your Subject*">
                                </div> 
                                <div class="position-relative form-group form-textarea">
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                    <textarea placeholder="Your message" name="message" id="message" class="form-control" rows="3"></textarea>
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn btn-primary display-4 mt-2" type="submit">Send message</button>
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>
                            <!-- end contact form -->               
                            <script src="https://smtpjs.com/v3/smtp.js"></script>
                            <script>
                                function sendEmail(){
                                        Email.send({
                                        SecureToken : "72dc82ea-82dc-4a23-895a-5378b7527218",
                                        To : 'aakashrathva241@gmail.com',
                                        From : document.getElementById('email').value,
                                        Subject : document.getElementById('subject').value,
                                        Body : "Message :" + document.getElementById('message').value + "___Phone :" +  document.getElementById('phone').value + "___Name :" +  document.getElementById('name').value 
                                    }).then(
                                        message => alert(message)
                                    );
                                }
                            </script>
                        </div>
                    </div>  
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>