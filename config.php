<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'database1234';
    $dbname = 'pdoposts';

    # Set DSN -> Data Source Name
    $dsn = "mysql:host=$host;dbname=$dbname";

    # Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    # if we dont want to write PDO::FETCH_OBJ or ASSOC we can set it using setAttribute()
    # overriding is possible

?>