<?php

include "viewer_header.php";

$components = scandir("components");
foreach ($components as $component) {
    if (pathinfo($component)['extension'] == "php") :
?>
        <h1><?= pathinfo($component)['filename'] ?></h1>
        <?php include("components/{$component}"); ?>
        <hr>
<?php
    endif;
}

include "viewer_footer.php";

?>

<style>
    body {
        padding: 20px;
    }

    h1 {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    hr{
        margin: 50px 0;
    }
</style>