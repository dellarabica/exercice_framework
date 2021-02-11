<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
        
    <body>
        <div id="Header">
            <h1 class="text-center" id="headtitle">&#60;Insérer le nom du blog ici&#62;</h1>
        </div>
        <div class="col-md-12" id="Body">
            <?= $content ?>
        </div>
    </body>
</html>