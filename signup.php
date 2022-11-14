<?php include('partials/menu.php') ?>
<?php include('partials/config.php') ;?>

    </div>
    <div class="form-container">
        <div class="container">
            <img src="images/logo2.svg" alt="kodedchat" width="150px">
                <h2>SIGN UP HERE!</h2>
                <span id="error-txt"></span>
                <form method="POST" action="#" id="form" enctype="multipart/form-data" class="form">
                    <label for="full_name">Full name</label><br>
                    <input type="text" id="fullname" placeholder="What is your full name?" name="fullname"><br>

                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Pick a username"><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Your email"><br>

                    <label for="phone_number">Phone Number</label><br>
                    <input type="tel" id="phone_number" name="phone_number" value="+234"><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" ><br>
                
                    <label>Set Profile Picture</label>
                    <input type="file" accept="image/*" name="profile_pics"><br>

                    <button class="btn btn-primary" id="submit" type="submit" name="submit">SIGN UP</button>

                </form>
                <a href="signin.php"><button class="btn btn-default">or sign in here</button></a>
        </div>
    </div>
    <script src="javascript/signup.js"></script>
</body>
</html>

