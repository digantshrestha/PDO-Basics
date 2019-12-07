<?php
    include('config.php');
    # ------------------------------ 6. SEARCH DATA ------------------------------------

    $search = '%f%';
    # syntax for data to search -> %data_to_be_searched%

    $sql = "SELECT * FROM posts WHERE title LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);
    $posts = $stmt->fetchAll();

    foreach($posts as $post){
        echo $post->title .'<br>';
    }

?>