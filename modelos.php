
<!DOCTYPE html>
<html>
<head>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'Ford') {
?>
<h1>Modelos disponibles marca: Ford</h1>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Ka</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Fiesta</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Focus</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Kuga</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Mondeo</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>C-Max</figcaption>
</figure>
<figure>
    <img src="images/ford.jpg" alt="logo Ford" />
    <figcaption>Galaxy</figcaption>
</figure>
    <?php
}
?>

<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'Seat') {
    ?>
    <h1>Modelos disponibles marca: Seat</h1>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>Altea</figcaption>
    </figure>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>Arosa</figcaption>
    </figure>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>Córdoba</figcaption>
    </figure>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>Exeo</figcaption>
    </figure>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>Ibiza</figcaption>
    </figure>
    <figure>
        <img src="images/seat.jpg" alt="logo Seat" />
        <figcaption>León</figcaption>
    </figure>
    <?php
}
?>

<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'Nissan') {
    ?>
    <h1>Modelos disponibles marca: Nissan</h1>
    <figure>
        <img src="images/nissan.jpg" alt="logo Nissan" />
        <figcaption>Micra</figcaption>
    </figure>
    <figure>
        <img src="images/nissan.jpg" alt="logo Nissan" />
        <figcaption>Note</figcaption>
    </figure>
    <figure>
        <img src="images/nissan.jpg" alt="logo Nissan" />
        <figcaption>Pathfinder</figcaption>
    </figure>
    <figure>
        <img src="images/nissan.jpg" alt="logo Nissan" />
        <figcaption>Almera</figcaption>
    </figure>
    <figure>
        <img src="images/nissan.jpg" alt="logo Nissan" />
        <figcaption>Qashqai</figcaption>
    </figure>
    <?php
}
?>

<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'Audi') {
    ?>
    <h1>Modelos disponibles marca: Audi</h1>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A1</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A2</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A3</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A4</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A5</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A6</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A7</figcaption>
    </figure>
    <figure>
        <img src="images/audi.jpg" alt="logo Audi" />
        <figcaption>A8</figcaption>
    </figure>
    <?php
}
?>

<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'BMW') {
    ?>
    <h1>Modelos disponibles marca: BMW</h1>
    <figure>
        <img src="images/bmw.jpg" alt="logo BMW" />
        <figcaption>Serie 1</figcaption>
    </figure>
    <figure>
        <img src="images/bmw.jpg" alt="logo BMW" />
        <figcaption>Serie 3</figcaption>
    </figure>
    <figure>
        <img src="images/bmw.jpg" alt="logo BMW" />
        <figcaption>Serie 5</figcaption>
    </figure>
    <figure>
        <img src="images/bmw.jpg" alt="logo BMW" />
        <figcaption>Serie 6</figcaption>
    </figure>
    <figure>
        <img src="images/bmw.jpg" alt="logo BMW" />
        <figcaption>Serie 7</figcaption>
    </figure>
    <?php
}
?>

<?php
if (isset($_GET['marca']) && $_GET['marca'] == 'Citroen') {
    ?>
    <h1>Modelos disponibles marca: Citroen</h1>
    <figure>
        <img src="images/citroen.jpg" alt="logo Citroen" />
        <figcaption>C2</figcaption>
    </figure>
    <figure>
        <img src="images/citroen.jpg" alt="logo Citroen" />
        <figcaption>C3</figcaption>
    </figure>
    <figure>
        <img src="images/citroen.jpg" alt="logo Citroen" />
        <figcaption>C4</figcaption>
    </figure>
    <figure>
        <img src="images/citroen.jpg" alt="logo Citroen" />
        <figcaption>Xsara</figcaption>
    </figure>
    <figure>
        <img src="images/citroen.jpg" alt="logo Citroen" />
        <figcaption>Xsara Picasso</figcaption>
    </figure>
    <?php
}
?>
</body>
</html>

