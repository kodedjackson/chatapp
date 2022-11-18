<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome\css\fontawesome.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>PlayMate</title>
</head>
<body>
    <main class="wrapper">
        <header>
            <nav class="nav">
                <h1>PLAYMATE</h1>    
            </nav>
        </header>
        <div class="error-txt"></div>
        <section class="form login">
                <form action="#"  id="form">
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div> 
                    <div class="field button">
                        <input type="submit" accept="images/" id="submit" name="submit" value="SIGN IN">
                    </div>
                </form>
                <div class="link">Don't have an account? <a href="signup.php">sign up instead</a></div>
        </section>

    </main>
    <script src="javascript/signin.js"></script>
    
</body>
</html>