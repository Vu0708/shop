<?php
require_once ("DvdItem.php");
?>
<?php
function createDvdItems():array {
    $BookItems = array(
        new DvdItem("The Net",500,114),
        new DvdItem("Star Wars: Force Awakens",2800,150),
        new DvdItem("Outbreak",900,129)
    );
    return createBookItems();
}
?>
