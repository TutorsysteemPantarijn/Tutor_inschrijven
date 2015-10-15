<!doctype html>
<html>
    <head>
        <script src="jquery.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
        <link href="style.css" rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="header">
            <h1>Tutoren Pantarijn</h1>
        </div>
        <div id="content">
            <h1>Inschrijven voor tutor</h1>
            <input id="naam" placeholder="Je naam">
            <input id="klas" placeholder="Je klas">
            <input id="mentor" placeholder="Je mentor">
            <input id="vak" placeholder="Vak">
            <button id="btn">Inschrijven</button>
        </div>
        <script>
        btn.click(function() {
            var data = {
                naam: naam.value,
                klas: klas.value,
                mentor: mentor.value,
                vak: vak.value
            }
            $.ajax({
                type: "POST",
                url: "inschrijven.php",
                data: data,
                success: function() {
                    // Ingeschreven
                },
                error: function(response) {
                    // inschrijven.php geeft een error, dus de gegevens zijn incompleet/onjuist of de verbinding is instabiel
                    // Foutmelding laten zien in console:
                    console.log(response.responseText);
                }
            });
        });
        </script>
    </body>
</html>