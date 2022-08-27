<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Login Form</title>
<link href="style.css" rel="stylesheet"/>
<meta name="google-site-verification" content="n_46kVxxRr3KVYgWX_fLeZiF-dm4uLo1RjTv4kkyfnQ" />
</head>
    <body class="main">
            <div class="logo"> <img  style="width:210px;height:75px;" src="logo.png" alt="image"></div>

            <div class="lmain">
        <h2 class="heading"><b>LOGIN</b></h2>
        
            <form class="form" name="contact-form" method="POST" action="function.php">
            <h4><label class="lable"> USERNAME: </label></h4><br>
                <input class="for" type="text" name="username" autocomplete="username" required/><br>
                <h4><label class="lable"> PASSWORD:</label></h4> <br>
                <input class="for" type="password" name="password" autocomplete="current-password"required  />
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            
                <button type="submit" onClick='show()' name="login" class="butnn" >Login</button>

                
        </form>
        

</div>

    </body>

</html>

