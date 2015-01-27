 <?php
    $m = new MongoClient();
    //echo "Connection to database successfully<br />";
    // select a database
    $db = $m -> selectDB('kira');
    //echo "Database mydb selected<br />";

    $posts = $db -> posts;
    $post = array ('title' => $_REQUEST['q'],
                    'content' => $_REQUEST['r'],       
                    'saved_at' => $_REQUEST['s']
                  );
    $posts -> insert($post);
    echo 'Added Successfully';
?>