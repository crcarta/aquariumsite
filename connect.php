<?php
    require __DIR__ . '/index.php';

    pHanalyze($_POST["pH"]);
    echo "</br>";
    ammoniaanalyze($_POST["ammonia"]);
    echo "</br>";
    nitriteanalyze($_POST["nitrite"]);
    echo "</br>";
    nitrateanalyze($_POST["nitrate"]);
    echo "</br>";
    hardnessanalyze($_POST["hardness"]);
    echo "</br>";
    alkalinityanalyze($_POST["alkalinity"]);
    echo "</br>";

$user = "root";
$pass = "";
$db = "aquariumdb";

$conn = mysqli_connect("localhost", "$user", "$pass", "$db") or die("Unable to Connect");

if(isset($_POST["submit"]))
{
    $user = $_POST['user'];
    $pH = $_POST['pH'];
    $ammonia = $_POST['ammonia'];
    $nitrite = $_POST['nitrite'];
    $nitrate = $_POST['nitrate'];
    $hardness = $_POST['hardness'];
    $alkalinity = $_POST['alkalinity'];
}

$query = "INSERT INTO parameter_table VALUES('$user','$pH','$ammonia','$nitrite','$nitrate','$hardness', '$alkalinity')";

mysqli_query($conn, $query) or die("error");
echo
"<script> alert('success'); </script>"

?>
