<?php
    include('config.php');
    #-------------------------------- 3. INSERT DATA -----------------------------------

    # Inserting data
    $title = 'Post Eight';
    $body = 'This is Post Eight';
    $author = 'Hidan';

    $sql = "INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);
    echo "Post Added";
?>