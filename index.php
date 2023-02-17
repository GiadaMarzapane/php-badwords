<?php
    $testoLaFine = 'Chiedo scusa a chi ho tradito, e affanculo ogni nemico
    Che io vinca o che io perda è sempre la stessa merda
    E non importa quanta gente ho visto, quanta ne ho conosciuta
    Questa vita ha conquistato me e io l\'ho conquistata
    "Questa vita" ha detto mia madre "figlio mio va vissuta,
    Questa vita non guarda in faccia e in faccia al massimo sputa"
    Io mi pulisco e basta con la manica della mia giacca
    E quando qualcuno ti schiaccia devi essere il primo che attacca.
    Non ce l\'ho mai fatta, ho sempre incassato,
    E sempre incazzato, fino a perdere il fiato
    Arriverà la fine, ma non sarà la fine';

    $testoLength =strlen($testoLaFine);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>

    <p>
        <?php echo $testoLaFine ?>
    </p>
    <hr>
    <p>Il paragrafo è lungo: 
        <strong><?php echo $testoLength ?></strong>
         parole
    </p>
</body>

</html>