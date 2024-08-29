<?php

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $username = $_GET["username"];

    try {
        //embedding database connecton file i.e. includeing another file
    require_once "dbh.inc.php"; //link dbh file which contains the database connection file. this is basically indule this dbh file in this another file inorder to exclude writing same code repeatdealy.
    //include -> in include this any error occurs like the connection is already made and th user is again trying to made connection then it generates an error but the script will continue to execute.
    //include_once
    //require, require_once -> if any error occurs then the scripts will stop.

    $query = "SELECT * FROM comments WHERE username = :username;";

    $stm = $pdo->prepare($query);

    //using naming parameters
    $stm->bindParam(":username", $username);

    $stm->execute();

    //fetch the data
    $result = $stm->fetchAll(PDO::FETCH_ASSOC); //associative array
    //another way without using naming paramaters
    /* 
        $query = "INSERT INTO users(username, pwd, email) VALUES (?, ?, ?);";
        $stm = $pdo->prepare($query);

        $stm->execute([$username, $pwd, $email]); // here the order should be same as the column parameters passed in $query.

    */

    //closing the resources
    $pdo = null;
    $stmt = null;

    //returning it to the home(register) page after successfull execution
    
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
    
}else{
    header("Location: ../dbconn.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        section {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .result {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .result:last-child {
            border-bottom: none;
        }
        .username {
            font-weight: bold;
        }
        .comment_text {
            margin-top: 5px;
            color: #555;
        }
        .created_at {
            margin-top: 5px;
            font-size: 0.9em;
            color: #999;
        }
        .no-results {
            text-align: center;
            font-size: 1.2em;
            color: #888;
        }
    </style>
</head>
<body>

    <section>
        <h2>Search results: </h2>
        
        <?php
            if(empty($result)) {
                echo "<div class='no-results'><p>There were no results</p></div>";
            } else {
                foreach($result as $res) {
                    echo "<div class='result'>";
                    echo "<div class='username'>Username: " . htmlspecialchars($res["username"]) . "</div>";
                    echo "<div class='comment_text'>Comment: " . htmlspecialchars($res["comment_text"]) . "</div>";
                    echo "<div class='created_at'>Created at: " . htmlspecialchars($res["created_at"]) . "</div>";
                    echo "</div>";
                }
            }
        ?>
    </section>
    
</body>
</html>