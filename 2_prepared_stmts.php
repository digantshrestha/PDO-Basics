<?php
    include("config.php");
    # ---------------------- 2. PREPARED STATEMENTS --------------------------------    
    
    # There are two main methods -> prepare() and execute()
    
    # imagine all the data is are user inputs that are comming from a form
    $author = 'Itachi';
    $is_published = false;
    $id = 1;

    # UNSAFE WAY
    $sql = "SELECT * FROM posts WHERE author = '$author'";//setting variable directly

    # SAFE WAY

    # Fething multiple posts

    # Using positional params
    $sql = "SELECT * FROM posts WHERE author = ? && is_published = ?";
    $stmt = $pdo->prepare($sql);#setting variable in a safe way in the query
    $stmt->execute([$author, $is_published]);#executing query to the database 
    # data should be order in execute()
    $posts = $stmt->fetchAll();#fetching datas in OOP way

    foreach($posts as $post){
        echo $post->title.' from positional params<br>';
    }

    # Using named params
    $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['author'=>$author, 'is_published'=>$is_published]);
    # data should be order in execute()
    $posts = $stmt->fetchAll();

    echo '<br>';

    foreach($posts as $post){
        echo $post->title.' from named params<br>';
    }

    # Fetching Single Post
    $sql = "SELECT * FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    $post = $stmt->fetch();

    echo '<br>';
    echo $post->title.' from fetching single post<br>';
    
    # Get Row Count
    $sql = 'SELECT * FROM posts WHERE author = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author]);
    $postCount = $stmt->rowCount();

    echo '<br>';
    echo 'Row Count = '. $postCount;

?>