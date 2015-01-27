<?php
    $m = new MongoClient();
    //echo "Connection to database successfully<br />";
    // select a database
    $db = $m -> selectDB('kira');
    //echo "Database mydb selected<br />";

    $posts = $db -> posts;
    $title = $_REQUEST['q'];
    $result = $posts -> findOne(array('title' => $title));
    
    $flag = 0;
    if ($result == null) {
        echo 'No matching RESULTS';
        return;
    }
    
    $name = array("Name -> ", "Cost -> ", "Date -> ");
    $i = 0;
    foreach ($result as $item) {
        if ($flag > 0) {
            echo $name[$i++];
            echo $item." "."<br />";
        } else {
            $flag = 1;
        }
    }
?>