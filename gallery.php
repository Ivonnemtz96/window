<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Galería';
$galeria = 'current';
include('includes/head.php');
?>

<body>

    <div class="boxed_wrapper ltr">
        <?php
            include('includes/header.php');
            include('modules/gallery.php');
            include('includes/redes.php');
            include('includes/footer.php');
        ?>
    </div>

    <?
     include('includes/scripts.php');   
    ?>

</body>

</html>