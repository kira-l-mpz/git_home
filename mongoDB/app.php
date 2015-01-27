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
        <?php
            echo "<h1>";

            $m = new MongoClient();
            $db = $m -> selectDB('kira');
            $userData = $db -> userData;

            if ($userData -> count() > 0) {
                $name = $_POST['usr1'];
                $ky = $_POST['ky1'];
                
                $result = $userData -> findOne(array('user_name' => $name));
                $flag = 0;
                $printed = 0;
                
                if ($result == null) {
                    echo "Guest";
                    $printed = 1;
                } else {
                    foreach ($result as $item) {
                        if ($flag > 1) {
                            if (strcmp($ky, $item) == 0) {
                                $flag = 3;
                            }
                            break;
                        } else {
                            $flag = $flag + 1;
                        }
                    }
                }
                if ($flag == 3) {
                    echo $name;
                } else {
                    if ($printed == 0) {
                        echo "Guest";
                    }
                }
            } else {
                echo "Guest";
            }
        ?>
         : Money Management Machine</h1> <hr /><hr /><br />
        
        <form method="post" action="">
            <table>
                <tr>
                    <td>Name:</td><td> <input type="text" id="inp1a" /></td>
                </tr>
                <tr>
                    <td>Amount: </td><td><input type="text" id="inp1b" /></td>
                </tr>
                <tr>
                    <td>Date: </td><td><input type="text" id="inp1c" /></td>
                </tr>
            </table>
            
            <button onclick="return getOutputAddMe()"> Add </button>
        </form> <hr /><br />
        
        <form method="post" action="">
            <table>
                <tr>
                    <td> Search?: </td><td><input type="text" id="inp2a" /></td>
                </tr>
            </table>
            
            <button onclick="return getOutput()">Search</button>
        </form> <hr /><br />
        
        <div id="status">STATUS</div><br />
        
        <div id="output">waiting for action</div>
    </div>
    
</body>
    
</html>