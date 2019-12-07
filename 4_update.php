<?php
    include('config.php');
    # ----------------------------- 4. UPDATE DATA --------------------------------------

    $id = 2;
    $body = "This is Updated Post";

    $sql = "UPDATE posts SET body = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$body, $id]);
    echo "Post Updated";

?>