<!DOCTYPE html>

<html>

<head lang="en">

    <meta charset="UTF-8">

    <title>WOBS, bitcoin notifier for on the go.</title>

    <script src="script/jquery.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="header">

    <div class="container text-center">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <h1 class="title">WO<i class="fa fa-btc"></i>S</h1>



                <h1>A smart bitcoin notifier.</h1>

                <small>Know when to sell your bitcoins.</small>

            </div>

        </div>

    </div>

</div>

<div class="row default-padding">

    <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">

        <h1 class="text-center">Welcome</h1>



        <p class="impress">You can

            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registerModal">Sign

                Up

            </button>

            if you are new to this website. Or you can

            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Login

            </button>

            with an already existing account.

        </p>

    </div>

</div>

<div class="information default-padding contrast">

    <h1 class="text-center">More information</h1>

    <div class="container">

        <h2 class="text-center">
			What is WOBS?
		</h2>
		<h4 class="text-center">
			<br>
			WOBS is a smart bitcoin notifier! We are aiming to give bitcoin users(YOU) a fast sell and buy service
			when you think the price is right!<br> Fast response and updates direct on your mobile phone without any
			internet connection required!
			<a class="contrast" data-toggle="modal" data-target="#registerModal"><b> Register NOW! </b>

            </a>
            <br>
        </h4>
		<h2 class="text-center">
			Bitcoin stats?
		</h2>
		<h4>
			<div align="center">
				<iframe width="1000" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://myip.ms/crypto.php?m=7777&c5=ff8000&w=1000">
				</iframe>
				<a href="http://myip.ms/"></a>
			</div>
		</h4>

    </div>

</div>

<div class="footer">

    <!--<div class="col-md-3"-->

    <div class="footer-top">

        <h4>Fusehack 2015 project</h4>

    </div>

    <div class="footer-bottom">

        <h4>Made by Job, Thomas, Koen and Egor</h4>

    </div>

</div>



<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="Sign Up">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                        aria-hidden="true">&times;</span></button>

                <h2 class="modal-title" id="registerModalLabel">Sign Up</h2>

            </div>

            <div class="modal-body">

                <span class="error">Please check if everything is correct. Please try again.</span>

                <div class="group">

                    <input type="text" id="username_register" name="username" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Username</label>

                </div>



                <div class="group">

                    <input type="password" id="password_register" name="password" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Password</label>

                </div>



                <div class="group">

                    <input type="email" id="email_register" name="email" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Email</label>

                </div>



                <div class="group">

                    <input type="tel" id="phone_register" name="phone" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Phone</label>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="button" class="btn btn-primary" id="signup_btn">Sign up</button>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                        aria-hidden="true">&times;</span></button>

                <h2 class="modal-title" id="loginModalLabel">Login</h2>

            </div>

            <div class="modal-body">

                <span class="error">Password or Username is wrong. Please try again.</span>

                <div class="group">

                    <input type="text" id="username_login" name="username" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Username</label>

                </div>



                <div class="group">

                    <input type="password" id="password_login" name="password" required>

                    <span class="highlight"></span>

                    <span class="bar"></span>

                    <label>Password</label>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="button" class="btn btn-primary" id="login_btn">Login</button>

            </div>

        </div>

    </div>

</div>



<script src="script/ajax.js"></script>

</body>

</html>