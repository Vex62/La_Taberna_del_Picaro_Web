<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>La Taberna del Pícaro</title>
    <meta name="author" content="Valk [Victor] and Laura"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="(no)index, (no)follow"/>
    <meta name="viewpoint" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="functions.js"> </script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rosarivo&display=swap" rel="stylesheet">

</head>
<body>
    <header style="background-image: ;">
        <section id="navbar">
            <?php require __DIR__ . "/controller/cHeader.php"; ?>
        </section>
        <div class = "cover">
            <h1> La Taberna del Pícaro </h1>
            <h2> Donde las leyendas nacen </h2>
        </div>
    </header>
    <section id="sections">
        <?php require __DIR__ . "/controller/cSections.php"; ?>
    </section>
    <section id="carousel">
        <?php require __DIR__ . "/controller/cCarousel.php"; ?>
    </section>
</body>
</html>
