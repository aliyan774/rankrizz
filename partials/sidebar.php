<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "partials/head.php";?>
</head>
<body>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold mt-1" id="offcanvasRightLabel"> Unleash the Extraordinary with Our Exclusive Offer!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="margin-top: -20px;">
            <p class="fw-bold text-dark-emphasis fs-5">Price starting from $99 OFFER?</p>
            <?php
                if(isset($_POST["submit3"])) {
                    $recipient = "info@rankrizzdigitalmarketing.com";
                    $sender = $_POST["sender3"];
                    $subject = "New Message From " . $sender;
                    $senderEmail = $_POST["senderEmail3"];
                    $senderNumber = $_POST["senderNumber3"];
                    $message = $_POST["message3"];
                
                    $mailBody = "Name: $sender\nEmail: $senderEmail\nNumber: $senderNumber\n\n$message";
                
                    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>"); ?>
        
                <script type="text/javascript">
                window.location = "https://rankrizzdigitalmarketing.com/seo.php";
                </script>       
            <?php } ?>
            <form action="" method="post" class="mt-5">
                <input type="text" name="sender3" class="form-control p-3 mt-3" placeholder="Full Name">
                <input type="email" name="senderEmail3" class="form-control p-3 mt-3" placeholder="Email Address">
                <input type="tel" name="senderNumber3" class="form-control p-3 mt-3" placeholder="Contact Number">
                <textarea name="message3" id="" rows="4" class="form-control mt-3" placeholder="Message"></textarea>
                <input type="submit" name="submit3" value="submit" class="btn bg-gradient-danger rounded-5 border-0 shadow text-white w-100 p-3 mt-4"> 
            </form>
        </div>
    </div>
</body>
</html>