<?php
$db = mysqli_connect("localhost", "id19970975_root", "Phpintermedio2023!", "id19970975_fitfollow");
$datestring = date("Ymd",strtotime($_POST['exercisedate']));
$file = fopen("workouts/files/workout". $datestring . ".txt", "w+");

foreach ($_POST as $key => $val){
    if ($key == "exercisedate"){
        fwrite($file, "Fecha: ".$_POST['exercisedate']. "\n");
    } elseif ($key == "routine"){
        fwrite($file, "Rutina: ".$_POST['routine']. "\n");
    } elseif ($key == "difficulty"){
        fwrite($file, "Dificultad: ".$_POST['difficulty']. "\n");
    }




    else {
        $query = "SELECT * FROM exercises WHERE id = " . $key;
        $exercise = mysqli_query($db, $query);
        $exercise = mysqli_fetch_array($exercise);
        fwrite($file,"| |**$val**| Sets: $exercise[2] | Reps: $exercise[3] | Muscle Group: $exercise[4] | \n" ) ;
    }
}
echo "Workout saved in file: " . "workout". $datestring . ".txt";

fclose($file);
?>
<br>
<a href="https://mathiassalva.000webhostapp.com"><button>Go Back</button></a>
