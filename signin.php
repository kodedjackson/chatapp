<?php include('partials/menu.php') ?>
<?php include('partials/config.php') ;?>
<div class="form-container">
    <div class="container">
        <img src="images/logo2.svg" alt="kodedchat" width="150px">
            <h2>SIGN IN</h2>
            <div>
                <?php 
                if(isset($_SESSION['login']))
                {
                   echo $_SESSION['login'];
                   unset($_SESSION['login']);
                }
                if(isset($_SESSION['no-login-found'])){
                    echo $_SESSION['no-login-found'];
                    unset($_SESSION['no-user-found']);
                }
                if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
                ?>
                <style> 
                .error{
                    color: red;
                }
                .sucess{
                    color: green;
                }
            </style>
            </div>
            <span id="error-txt"></span>
            <form method="POST" action="#" id="form">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Your email"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" ><br>
                <button class="btn btn-primary" type="submit" name="submit" id="submit">SIGN IN</button>
            </form>
            <a href="signup.php"><button class="btn btn-default">or sign up here</button></a>
    </div>
</div>
<script src="javascript/signin.js"></script>