<?php
    include('config.php');
    # ------------------------------ 5. DELETE DATA ------------------------------------

    $id = 3;

    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    echo "Post Deleted";

?>