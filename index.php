<!-- Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati. -->
<?php
    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/Articolo.php';

    $utenti = [
        new User(1, 'Aldo'),
        new User(2, 'Giovanni'),
        new User(3, 'Giacomo'),
        new User(4, 'Zlatan'),
    ];

    $artcoli = [
        new Articolo(1, 'Tesla', 'auto', 'Ildebrando'),
        new Articolo(1, 'Il cane', 'animali', 'Ildebrando'),
        new Articolo(1, 'FIFA 21', 'videogames', 'Ildebrando'),
        new Articolo(1, 'Milan', 'calcio', 'Ildebrando'),
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php | OOP 2</title>
    </head>
    <body>

        <h2>Utenti</h2>
        <?php foreach($utenti as $utente) { ?>
            <p><?php echo $utente->id . ' ' . $utente->username; ?></p>
        <?php } ?>
        
        <h2>Articoli</h2>
        <?php foreach($artcoli as $articolo) { ?>
            <ul>
                <li><?php echo $articolo->id . ', ' . $articolo->title . ' by ' . $articolo->author ; ?></li>
            </ul>
        <?php } ?>


        
    </body>
</html>