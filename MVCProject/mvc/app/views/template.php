<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="shortcut icon" href="#">
        <?php include __DIR__ . '/partials/head.php'; ?>
    </head>
    <body>
        <?php include __DIR__ . '/partials/menu.php'; ?>
        
        <div class="container">
        <?php 
        //this loads the view defined by the controller
        include $viewpath;
        ?>
        </div>

        <?php include __DIR__ . '/partials/footer.php'; ?>
    </body>
</html>
<?php 
/**
 * The template defines the general overview of views, and contains a single line
 * for loading the specific view, so that each view is only concerned with its own content
 */