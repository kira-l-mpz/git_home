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
    
    <?php
        $m = new MongoClient();
        $db = $m -> selectDB('kira');

        $userData = $db -> userData;
        $post = array ('user_name' => $_POST['usr1'],
                    'pin_key' => $_POST['ky1'],       
                    'saved_at' => date("Y-m-d")
                  );
        $userData -> insert($post);
    ?>
    </div>
    <script language="javascript">
        alert('Registered Successfully, Redirecting to login page.......');
        window.location.href = "homePage.php";
    </script>
    
</body>
    
</html>