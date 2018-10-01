<?php

    require __DIR__ . '/../vendor/autoload.php';
    use Controller\ItemController;
    use Model\ItemManager;

    $items = new ItemController();
    $items->index();

?>
