<html>
    <head>
        <!-- MDL -->
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.cyan-amber.min.css" />
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <form action="#" method="post">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="usr" name="usr" required/>
                <label class="mdl-textfield__label" for="usr">Leerlingnummer...</label>
            </div><br />
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="pass" name="pass" required/>
                <label class="mdl-textfield__label" for="pass">Wachtwoord...</label>
            </div><br />
            <div>
                <input class="mdl-button mdl-js-button mdl-button--primary" type="submit" value="login"/>
            </div>
        </form>
    </body>
</html>
