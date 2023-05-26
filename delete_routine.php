<?php
$db = mysqli_connect("localhost", "root", "", "fitfollow", 3307);
if (isset($_GET['routines'])){
    $q = "DELETE FROM routines WHERE id = " . $_GET['routines'];
    $res = mysqli_query($db, $q);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitfollow</title>
</head>
<body>
<h4>Select Routine to delete</h4>
<form action="delete_routine.php" method="get">
    <label for="routines">Routine:</label>
    <?php
    $query = "SELECT * FROM routines";
    $con = mysqli_query($db, $query);
    $routines = mysqli_fetch_all($con);
    echo "<select name='routines' id='routines'>";
    foreach ($routines as $routine){
        $id = $routine[0];
        $name = $routine[1];
        echo "<option value='$id'>$name</option>";
    }
    echo "</select>";
    ?>
    <button type="submit">Submit</button>
</form>

<br>
<a href="http://localhost:8080/fitfollow"><button>Go Back</button></a>


</body>
</html>