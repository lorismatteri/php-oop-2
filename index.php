<!-- Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati. -->
<?php
    include __DIR__ . '/classes/User.php';

    $utenti = [
        new User(1, 'Aldo'),
        new User(2, 'Giovanni'),
        new User(3, 'Giacomo'),
        new User(4, 'Zlatan'),
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

        <?php foreach($utenti as $utente) { ?>
            <p><?php echo $utente->id . ' ' . $utente->username; ?></p>
        <?php } ?>
        
    </body>
</html>