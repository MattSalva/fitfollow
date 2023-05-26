<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitfollow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 style="text-align: center">Fitfollow</h1>
    </header>

    <main>
        <section>
            <h2 style="text-align: center">Workout history</h2>
                    <?php
                    $workouts = array_diff(scandir("./workouts/files"), array('..', '.'));
                    foreach ($workouts as $file){
                        echo "<div>";
                        $f = "./workouts/files/". $file;
                        $work = fopen($f, "r");
                        $content = fread($work, filesize($f));
                        echo "<br>";
                        echo "<h4>$file</h4>";
                        echo "<p>$content</p>";
                        echo "</div>";
                        echo "<br>";
                    }
                    ?>
        </section>
        <section style="text-align: center">
            <a href="add.php"><button>Add new workout</button></a>
            <a href="add_exercise.php"><button>Add new exercise</button></a>
            <a href="add_routine.php"><button>Add new routine</button></a>
            <a href="delete_routine.php"><button>Delete routine</button></a>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>