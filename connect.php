<?php
    // db credentials
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'kabaret');

    // Connect with the database.
    function connect()
    {
    $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

    if (mysqli_connect_errno($connect)) {
        die("Failed to connect:" . mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect;
    }

    $con = connect();

    $servername = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    
    try {
        $conPDO = new PDO("mysql:host=$servername;dbname=kabaret", $username, $password);
        // set the PDO error mode to exception
        $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
