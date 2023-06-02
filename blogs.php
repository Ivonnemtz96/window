<!DOCTYPE html>
<html lang="en">
<?php
$blog = 'Proyectos';
$inicio = 'current';
include('includes/head.php');
?>
<body>
    <div class="boxed_wrapper ltr">
        <?php
            include('includes/header.php');
            include('modules/blog.php');
            include('includes/footer.php');
        ?>
    </div>
    <?
     include('includes/scripts.php');   
    ?>
    
</body>
</html>