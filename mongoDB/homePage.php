<!DOCTYPE html>
<html>

<head>
    <title>Parvez Money Management Machine</title>
    <script type="text/javascript" src="myJs.js">
    </script>
    <link rel="stylesheet" href="myStyle.css" />
</head>
    
<body onload="tgglView()">
    <p class="line">A meticulate way to manage money</p>
    
    <div id="layout">
        <h1> Guest : Money Management Machine</h1> <hr /><hr /><br />
        <form name='frm1' method="post" action="app.php" onsubmit="return validate();">
            <table>
                <tr>
                    <td>Username </td><td><input type="text" name='usr1' /></td>
                </tr>
                <tr>
                    <td>Key Pin </td><td><input type="password" id="ky1" name="ky1" /></td>
                </tr>
            </table>
            <input type="submit" value="Login" />
        </form> <br />
        New User? <a href="signUp.php">Sign Up </a><br />
        <a href=""> Forgot Password</a>
    </div>
    
    <div id="dv1">
        <p onclick="tgglView()">
            C<br />O<br />N<br />T<br />A<br />C<br />T<br /><br />U<br />S<br />
        </p>
    </div>
    
    <div id="dv2">
        <p>
            <a href="">FAQ</a><hr /><br />
            <a href="">Founder</a><hr /><br />
            <a href="">About Us</a><hr /><br />
            <a href="">Contact Us</a><hr /><br />
        </p>
    </div>
    
    <div id="dv3">
        <button onclick="tgglView()">Hide</button>
    </div>
    
</body>
    
</html>