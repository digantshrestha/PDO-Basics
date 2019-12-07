<?php
    include("config.php");
    # -------------------------------- 1. PDO QUERY --------------------------------------
    # stmt -> statement
    $stmt = $pdo->query('SELECT * FROM posts');
    # setting query using pdo method query()

    # fetching data in associative array stmt using fetch(PDO::FETCH_ASSOC) method
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['title'].' form associative<br>';
    }

    echo '<br>';
    $stmt = $pdo->query('SELECT * FROM posts');
    # to use the again, we have to set it again

    # fetching data as array of object using fetch(PDO::FETCH_OBJ) method
    # we don't have to write it again as we have set the attribute in config.php
    while($row = $stmt->fetch()){
        echo $row->title .' from object<br>';
    }

?>