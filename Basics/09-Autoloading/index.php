

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test formulaire</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>
        <?php

        require 'class/Autoloader.php';
        Autoloader::register();

        $form = new BootstrapForm($_POST);

        ?>

        <form action="#" method="post">
            <?php

            echo $form->input('username');
            echo $form->input('password');
            echo $form->submit();
            ?>

        </form>

    </body>
</html>


