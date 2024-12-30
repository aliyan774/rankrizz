<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
    (function(){
        emailjs.init("g2l5ADlxX_T6V5d5t");
    })();
    
    function sendMail(event) {
        event.preventDefault();

        var params = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            contact: document.getElementById('contact').value,
            message: document.getElementById('message').value
        };

        const serviceId = 'service_2zyrfdg';
        const templateId = 'template_tegb8x4';

        emailjs.send(serviceId, templateId, params).then((res) => {
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('contact').value = '';
            document.getElementById('message').value = '';
            console.log(res);
            alert("Message sent successfully");
        }).catch((err) => {
            console.log(err);
        });
    }
    </script>
</head>
<body>
    <div class="container container-sm justify-content-center align-content-center align-items-center mt-5">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 class="fw-bold text-info">Contact Now</h3>
                <h2 class="fw-bold">Get in Touch Today!</h2>
                <p class="mt-3 text-dark-emphasis">Ready to take the first step towards digital triumph? Contact us using the form below, and let's start the conversation. Whether you're looking to enhance your online presence, drive more traffic, or boost conversions, RankRizz is your dedicated partner for success.</p>   
            </div>
        </div>
        <div class="row gy-5">
            <div class="col-lg-6 col-md-6 col-sm-12">         
                <form class="mt-5" onsubmit="sendMail(event)">
                    <div class="row gy-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="sender3" class="form-control p-3" placeholder="Full Name" required="" id="name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="email" name="senderEmail3" class="form-control p-3" placeholder="Email Address" required="" id="email">
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input type="tel" name="senderNumber3" class="form-control p-3 mt-3" placeholder="Contact Number" required="" id="contact">
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea name="message3" rows="4" class="form-control mt-3" placeholder="Message" required="" id="message"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="submit3" value="Submit" class="btn bg-gradient-danger rounded-5 border-0 shadow text-white w-50 p-3 mt-4">
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/contact-form.svg" alt="" class="w-100 d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none" style="margin-top: -100px;">
            </div>
        </div>
    </div>
</body>
</html>
