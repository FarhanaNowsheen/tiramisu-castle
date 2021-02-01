
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>tiramisu castle</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head> <section id="contact">
        <div class="container">
        <h1>GET IN TOUCH!
            <h4>Swing by for a cup of coffee, or leave us a message!</h4>
        </h1>
        <div class="row">
        <div class="col-md-6">
            <form class="contact-form" action="index.html" method="post" onsubmit="return validation()">
                <div class="form-group">
                    <input type="text"  id="user" required class="form-control" placeholder="Your Name">
                    <span id="username" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <input type="text"  required class="form-control" placeholder="Your Country">
                </div>
                <div class="form-group">
                    <input type="text" id="mobileNumber" required  class="form-control" placeholder="Phone Number">
                    <span id="mobileno" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="emails" required placeholder="Your Email Address">
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <textarea class="form-control" row="5"  required placeholder="Write your message here!"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> SEND </button>
            </form>
        </div>
        <div class="col-md-6 contact-info">
            <div class="follow"><b>ADDRESS::</b><i class="fa fa-map-marker"></i>  Mirpur DOHS,Mirpur,Dhaka</div>
            <div class="follow"><b>Phone Number::</b> <i class="fa fa-phone"></i>   +8801797184668</div>
            <div class="follow"><b>Email::</b> <i class="fa fa-envelope-o"></i>  kk@gmail.com</div>
            <div class="follow"><label><b>Social Sites::</b></label><a href="https://www.facebook.com/delish/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/delish/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/DelishDotCom?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/delish" target="_blank"><i class="fa fa-linkedin"></i></a></div>
        </div>

        </div>
        </div>

        </div>

    </div>
</section>
</html>