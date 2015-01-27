<!DOCTYPE html>
<html>

<head>
    <title>Parvez Money Management Machine</title>
    <script type="text/javascript" src="myJs.js">
    </script>
    <link rel="stylesheet" href="myStyle.css" />
</head>
    
<body>
    <p class="line">A meticulate way to manage money</p>
    
    <div id="layout">
        <h1>New User? Sign Up</h1>
        <form name='frm1' method="post" action="signUpProcessor.php" onsubmit="return validate()">
            <table>
                <tr>
                    <td>Username </td><td><input type="text" name='usr1' /></td>
                </tr>
                <tr>
                    <td>Key Pin </td><td><input type="password" id="ky1" name="ky1" /></td>
                </tr>
            </table>
            <input type="submit" value="SignUp" />
        </form> <br />
    </div>
    
</body>
    
</html>