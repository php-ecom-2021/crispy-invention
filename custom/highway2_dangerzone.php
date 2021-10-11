<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>highway2_dangerzone</title>
    <style>
        .theThing {
            padding: 5em;
            font-family: sans-serif;
            height: 500px;
            width: 500px;
        }
    </style>
</head>

<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/siwpn14IE7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '$_SERVER <br>';
    var_dump($_SERVER);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '$_GET<br>';
    var_dump($_GET);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '$_POST<br>';
    var_dump($_POST);
    ?>

    <div class="theThing" style="background-color: <?php echo ($_POST["color"]) ?>;">
        <p><?php echo ($_POST["name"]) ?></p>
        <p><?php echo ($_POST["email"]) ?></p>
        <div>
            <p><?php echo ($_POST["description"]) ?></p>
        </div>
    </div>

    <form action="highway2_dangerzone.php" method="post">
        <fieldset>
            Name: <input type="text" name="name">
            E-mail: <input type="text" name="email">
            Color: <input type="color" name="color">
        </fieldset>
        <fieldset>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </fieldset>
        <input type="submit">
    </form>
</body>

</html>