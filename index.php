<?php

    //check if user coming from a request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Assign Variables
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['cellPhone'], FILTER_SANITIZE_NUMBER_INT);
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

        $formerros = array();

        if(strlen($user) < 3){
            $formerros[] = 'Username Must be Larger Than <strong>3</strong> Characters';
        }

        if(strlen($message) < 10){
            $formerros[] = 'message Can not be Less Than <strong>10</strong> Characters';
        }

        // If No Erros Send The Email [mail(To, Sybject, Message, Headers, Parameters) ] 

        $myemail = 'abdlrahmansaber111@gmail.com';
        $subject = 'Contact Form';
        $Headers = 'From: ' . $email . '<br>';

        if (empty($formerros)) {

            mail($myemail, $subject, $message, $Headers);
            $user = '';
            $email = '';
            $phone = '';
            $message = '';
            $success = '<div class = "alert alert-success">We Have Received Your Message</div>';
        }
    }
    
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="css/contact4.css">
    </head>

    <body>

        <!-- Start Form -->
        <div class="container">
        <div class="row">
        <div class="col-sm-6 formm text">
            <h1 class="text-center">Contact Me</h1>

            <form class="contact_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <?php if (! empty($formerros)) { ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                    <?php
                    foreach ($formerros as $errors) {
                        echo $errors . '<br/>';
                     }  
                ?>
                </div>
                <?php  } ?>
                <?php if(isset($success)) { echo $success; }?>
                <div class="form-group">
                    <input type="text" name="username" class="username form-control" placeholder="Your Username" value="<?php if(isset($formerros)) { echo $user;} ?>">
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisk"><i class="fa fa-star"></i></span>
                    <div class="alert alert-danger alert1">
                        Username Must be Larger Than <strong>3</strong> Characters
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="email form-control" placeholder="Please Enter a Valid Email" value="<?php if(isset($formerros)) { echo $email;} ?>">
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class="asterisk"><i class="fa fa-star"></i></span>
                    <div class="alert alert-danger alert2">
                        Email Can't Be <strong> Empty</strong> 
                    </div>
                </div>

                <input type="text" name="cellPhone" class="form-control" placeholder="Enter Your Cell Phone" value="<?php if(isset($formerros)) { echo $phone;} ?>">
                <i class="fa fa-phone fa-fw"></i>

                <textarea class="message form-control" name="message" placeholder="Your Message!"><?php if(isset($formerros)) { echo $message;} ?></textarea>
                <div class="alert alert-danger alert3">
                        message Can not be Less Than <strong>10</strong> Characters
                </div>

                <input type="submit" class="btn  btn-danger" value="Send Message">
                <i class="fa fa-send fa-fw send-icon"></i>

            </form>
        </div>
        <div class="col-sm-6 fonts">
            <div class="font">
            <i class="fa fa-map-marker"></i>
            <p>29 A El-achid Street</p>
            </div>
            <div class="font">
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
            </div>
            <div class="font">
                <i class="fa fa-phone"></i>
                <p>1 5589 55488 55s</p>
            </div>
        </div>

   </div>
</div>

        <!-- js File -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>

    </html>