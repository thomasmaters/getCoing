<?php
    include "connect_db.php"; 
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>getCoing, bitcoin notifier for on the go.</title>
    <script src="script/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="Front-end/js.js"></script>
</head>
<body>
<div class="header">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h3>getCoing</h3>

                <h1>a smart bitcoin notifier.</h1>
                <small>Know when you want to sell your bitcoins.</small>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="container main-content">
        <h2>Sign up</h2>

        <div class="formu">
            <form method="post">
                <div class="group">
                    <input type="text" id="username" name="username" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>

                <div class="group">
                    <input type="text" id="password" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>

                <div class="group">
                    <input type="text" id="email" name="email" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>

                <div class="group">
                    <input type="text" id="phone" name="phone" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Phone</label>
                </div>
            </form>
        </div>

    </div>
    <h2>Sign in</h2>

    <div class="formu">
        <form method="post">
            <div class="group">
                <input type="text" id="username_login" name="username" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Username</label>
            </div>

            <div class="group">
                <input type="text" id="password_login" name="password" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Password</label>
            </div>
        </form>
    </div>
</div>
<div class="information">
    <h3>More information</h3>

    <div class="container">
        <h2>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis viverra metus, eu ornare ex sodales et.
            Suspendisse aliquam sapien ut risus elementum, quis dictum metus iaculis. Quisque sit amet urna leo.
            Curabitur
            nisi lorem, semper sit amet ipsum finibus, posuere maximus lacus. Proin sit amet nibh semper, porttitor leo
            id,
            elementum est. Etiam gravida placerat metus et vestibulum. Sed tincidunt laoreet ante, nec pulvinar est
            dictum
            a. Nam vehicula dictum suscipit. Suspendisse convallis dui eu risus ullamcorper, eu finibus diam semper.<br>
            <br>

            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris non ante
            ante. Integer posuere lectus quis venenatis pellentesque. Donec semper ex justo, et dapibus neque varius
            hendrerit. Quisque ornare mi nulla, ac pulvinar diam mollis in. Donec at imperdiet felis. Nulla elementum
            leo
            nec nulla aliquet lobortis. Nam sagittis metus eget dignissim imperdiet. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Quisque sit amet ligula tincidunt, luctus nulla
            consectetur, hendrerit dui. Donec suscipit ipsum ac orci pellentesque ultrices. Etiam rutrum, lacus non
            volutpat
            maximus, turpis orci dapibus lorem, in rhoncus est nulla ac lectus.
        </h2>
    </div>
    <?php
        $info = getConnectionInfo();
                $conn = new PDO($info[0],$info[1],$info[2]);
                if($conn != false)
            $stmt = $conn->prepare("SELECT price FROM bitcoin");
            $stmt->execute();
            while ($row = $stmt->fetch()){
                print_r ($row);
            }
    ?>
</div>
<div class="footer">
    <!--<div class="col-md-3"-->
    <div class="footer-top">
        <h4>Fusehack 2015 project</h4>
    </div>
    <div class="footer-bottom">
        <h4>Made by Job, Thomas, Koen an Egor</h4>
    </div>
</div>

</body>
</html>