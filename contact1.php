<?php include 'header.php' ?>

 <!-- contact section -->
 <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <a href="tel:+91 6351289888"><p class="section-subtitle">Mobile : +91 6351289888</p></a>
            <!-- contact form -->
            <form onsubmit="sendEmail()" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" id="message" class="form-control"  placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <button type="submit" value="Send Message" class="btn btn-outline-primary rounded">Send Message</button>
                    </div>
                </div>
            </form>
            <!-- end of contact form -->
            <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
    Email.send({
    SecureToken : "72dc82ea-82dc-4a23-895a-5378b7527218",
    To : 'aakashrathva241@gmail.com',
    From : document.getElementById('email').value,
    Subject : document.getElementById('subject').value,
    Body : "Message :" + document.getElementById('message').value + "___email :" +  document.getElementById('email').value + "___Name :" +  document.getElementById('name').value 
    }).then(
   message => alert(message)
   );
}
    </script>
        </div>
        <!-- end of container -->
    </section>
   
    <!-- end of contact section -->

    <!-- section -->
     
<?php include 'footer.php' ?>