<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitfollow</title>
</head>
<body>
    <h2>Select Routine</h2>
    <form action="add_workout.php" method="get">
        <label for="routines">Select a routine:</label>
        <?php
        $db = mysqli_connect("localhost", "id19970975_root", "Phpintermedio2023!", "id19970975_fitfollow");
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