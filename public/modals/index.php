<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname ="hizal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
{

    $str = str_replace('_', '', ucwords($string, '_'));

    if (!$capitalizeFirstCharacter) {
        $str = lcfirst($str);
    }

    return $str;
}


$sql = "SELECT table_name FROM information_schema.tables
WHERE table_schema = '$dbname';";
$result = $conn->query($sql);
?>

<?php
$tables = [];
while($row = $result->fetch_assoc()) {
    $tables[] = $row["table_name"];
}
header('Content-Type:text/plain; charset=UTF-8');
foreach ($tables as $table){
    $model_name = dashesToCamelCase($table, true)."Model";
    $template = file_get_contents("sample.txt");

    $primary_key = "";
    $fields = [];
    $sql = "SELECT COLUMN_NAME, COLUMN_KEY FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$dbname' AND `TABLE_NAME`='$table';";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        if($row["COLUMN_KEY"] === "PRI"){
            $primary_key = $row["COLUMN_NAME"];
        } else {
            $fields[] = $row["COLUMN_NAME"];
        }
    }
    $fields = '"'.implode('","', $fields).'"';
    $template = str_replace("{{primary_key}}", $primary_key, $template);
    $template = str_replace("{{table_name}}", $table, $template);
    $template = str_replace("{{fields}}", $fields, $template);
    $template = str_replace("{{model_name}}", $model_name, $template);

    file_put_contents("out/$model_name".".php", $template);

}
?>

