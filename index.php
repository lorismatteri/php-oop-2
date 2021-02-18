<!-- Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati. -->
<?php
    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/Articolo.php';
    include __DIR__ . '/classes/Profilo.php';

    /* $utenti = [
        new User('Pippo', 'pippo@gmail.com', 'ciao123'),
        new User('Pluto', 'pluto@gmail.com', 'ciao123'),
        new User('Paperino', 'paperino@gmail.com', 'ciao123'),
    ]; */

    $artcoli = [
        new Articolo(1, 'Tesla', 'auto', 'Ildebrando'),
        new Articolo(2, 'Il cane', 'animali', 'Ildebrando'),
        new Articolo(3, 'FIFA 21', 'videogames', 'Ildebrando'),
        new Articolo(4, 'Milan', 'calcio', 'Ildebrando'),
    ];

    $profili = [
        new Profilo('Pippo', 'pippo@gmail.com', 'ciao123', 'Ayeye', 'Brazorf', '19-07-1988', 'M', 'Napoli'),
        new Profilo('Pluto', 'pluto@gmail.com', 'ciao123', 'Brambilla', 'Fumagalli', '01-03-1975', 'M', 'Milano'),
        new Profilo('Paperino', 'paperino@gmail.com', 'ciao123', 'Guido', 'La Vespa', '25-10-1963', 'M', 'Roma'),
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php | OOP 2</title>
        <style>
            th, td {
                padding: 1rem;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <h2>Utenti</h2>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Nome</th>
                    <th>cognome</th>
                    <th>Data di nascita</th>
                    <th>Genere</th>
                    <th>Città</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($profili as $profilo) { ?>
                    <tr>
                        <td><?php echo $profilo->username; ?></td>
                        <td><?php echo $profilo->email; ?></td>
                        <td><?php echo $profilo->password; ?></td>
                        <td><?php echo $profilo->nome; ?></td>
                        <td><?php echo $profilo->cognome; ?></td>
                        <td><?php echo $profilo->data_di_nascita; ?></td>
                        <td><?php echo $profilo->genere; ?></td>
                        <td><?php echo $profilo->città; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <h2>Articoli</h2>
        <?php foreach($artcoli as $articolo) { ?>
            <ul>
                <li><?php echo $articolo->id . ', ' . $articolo->title . ' by ' . $articolo->author ; ?></li>
            </ul>
        <?php } ?>


        
    </body>
</html>