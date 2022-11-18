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
        <section class="form signup">
                <form action="#" enctype="multipart/form-data" id="form" name="form">
                    <div class="name-details">
                        <div class="field input">
                            <label >First Name</label>
                            <input type="text" name="first_name">
                        </div>
                        <div class="field input">

                            <label>Last Name</label>
                            <input type="text" name="last_name">
                        </div>
                    </div>
                    <div class="field input">
                        <label for="">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div> 
                    <div class="field image">
                        <label>Set Profile Picture</label>
                        <input type="file" accept="image/*" name="profile_pics" required>
                    </div>
                    <div class="field button">
                        <input type="submit" id="submit" name="submit" value="SIGN UP">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="signin.php">sign in instead</a></div>
        </section>

    </main>
<script src="javascript/signup.js"></script>
</body>
</html>