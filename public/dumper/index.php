<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "hizal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SHOW TABLES";
$result = $conn->query($sql);
header("Content-Type: text/plain");
while($row =  $result->fetch_assoc()){
    $table_name = array_values($row)[0];
    $model_name  = str_replace('_', '', ucwords($table_name, "_"))."Model";

    $sql2  = "SELECT C.COLUMN_NAME,UK.CONSTRAINT_NAME FROM INFORMATION_SCHEMA.COLUMNS C
    LEFT JOIN INFORMATION_SCHEMA.key_column_usage UK
    ON C.TABLE_SCHEMA = UK.table_schema AND C.TABLE_NAME= UK.TABLE_NAME AND C.COLUMN_NAME=UK.COLUMN_NAME
WHERE C.TABLE_SCHEMA = '$dbname' AND C.TABLE_NAME='$table_name';";
    $primary_key = "";
    $fields = [];
    $result2 = $conn->query($sql2);
    while($row2 =  $result2->fetch_assoc()){
        if($row2["CONSTRAINT_NAME"] === "PRIMARY")
            $primary_key = $row2["COLUMN_NAME"];
        else
            $fields[] = $row2["COLUMN_NAME"];
    }

    $fields = '"'.implode('","', $fields).'"';

    $content = file_get_contents("template.txt");
    $content = str_replace("{{model_name}}", $model_name, $content);
    $content = str_replace("{{table_name}}", $table_name, $content);
    $content = str_replace("{{primary_key}}", $primary_key, $content);
    $content = str_replace("{{fields}}", $fields, $content);

    file_put_contents("out/$model_name.php", $content);
}
?>
