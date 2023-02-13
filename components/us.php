<link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/contact-form-16/css/style.css">
<link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/contact-form-16/fonts/icomoon/style.css">
<div class="content">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="row justify-content-center">
<div class="col-md-6">
<h3 class="heading mb-4">Let's talk about everything!</h3>
<small>Get in touch with us today and let's start a conversation about how we can help you achieve your goals. Our team is dedicated to providing excellent customer service and support, and we would love to hear from you. Whether you have a question, a concern, or simply want to learn more about our services, we are here to help. Fill out the form on our contact page, give us a call, or send us an email. We look forward to hearing from you!</small>
<p><img src="https://preview.colorlib.com/theme/bootstrap/contact-form-16/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>
</div>
<div class="col-md-6">
<form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate" action="../studio/mia.php">
    <p id="response"></p>
<div class="row">
<div class="col-md-12 form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Your name">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<input type="text" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
</div>
</div>
<div class="row">
<div class="col-12">
<input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
<span class="submitting"></span>
</div>
</div>
</form>
<div id="form-message-warning mt-4"></div>
<div id="form-message-success">
Your message was sent, thank you!
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/jquery.form.min.js"></script>
<script src="../js/jquery.maxlength.js"></script>

<script>

    


$("#contactForm").on('submit',function(e){
    
    e.preventDefault();
    
    $(this).ajaxSubmit({
    
        success: function(data){
            if (data == 2) {
                $("#response").html("<p style='color:green;'>Thanks for contact us we will response to you as quick as posible</p>");

            }
            else{
                $("#response").html("<p style='color:pink;'>"+data+"</p>");

            }
    } 
    
    });
    });

</script>