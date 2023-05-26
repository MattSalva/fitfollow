<?php
$db = mysqli_connect("localhost", "id19970975_root", "Phpintermedio2023!", "id19970975_fitfollow");
if (isset($_GET['routines'])){
    $id = $_GET['routines'];
    $q = "DELETE FROM exercises_routines WHERE routine_id = $id";
    $res = mysqli_query($db, $q);
    $q = "DELETE FROM routines WHERE id = $id";
    $res = mysqli_query($db, $q);
    echo "<h3>Routine deleted successfully</h3>";
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
<a href="https://mathiassalva.000webhostapp.com"><button>Go Back</button></a>


</body>
</html>