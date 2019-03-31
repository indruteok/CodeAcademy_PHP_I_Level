<?php include 'head.php'; ?>
<div style='background-color:red'>
    <?php echo $sk1; ?> 
    <?php
    if ($operation == 1) {
        echo "+";
    } else if ($operation == 2) {
        echo "-";
    } else if
    ($operation == 3) {
        echo "*";
    } else if ($operation == 4) {
        echo "/";
    }
    ?>

    <?php echo $sk2; ?> = <?php echo $rezultatas; ?> 
</div>
    <?php include 'form.php'; ?>
<?php include 'bottom.php'; ?>