<?php

namespace Controller;

// src/Controller/ItemController.php
use Model\ItemManager;

class ItemController{

    public function index()
    {
    
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();

        require __DIR__ . '/../View/item.php';
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->SelectOneItem($id);

        require __DIR__ . '/../View/showItem.php';
    }

}
   
?>
