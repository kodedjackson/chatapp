<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
    <div class="header">
        <nav>
            <!-- <a href="index.html"><img src="images/logo2.svg" width="150px" height="100px"></a>  -->
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">CHAT</a></li>
                    <li><a href="#">PROFILE</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="form-container">
        <div class="container">
            <img src="images/logo2.svg" alt="kodedchat" width="150px">
                <h2>SIGN UP HERE</h2>
                <form method="POST" accept="add_user.php">
                    <label for="full_name">Full name</label><br>
                    <input type="text" id="fullname" placeholder="What is your full name?" name="fullname"><br>

                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Pick a username"><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Your email"><br>

                    <label for="phone_number">Phone Number</label><br>
                    <input type="text" id="phone_number" name="phone_number" value="+234"><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" ><br>

                    <button type="submit" name="submit" id="submit">SIGN UP</button>

                </form>
        </div>
    </div>
</body>
</html>

