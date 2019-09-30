<?php

//Define the namespace
namespace Drupal\petstorefriends_controller\Controller;

class ArticleController {  

//Rendering the page of controller
    public function page() {

        //Creating the 'items' array for article items
        $items = array(
            array('name' => 'Article one'),
            array('name' => 'Article two'),
            array('name' => 'Article three'),
            array('name' => 'Article four')
        );  

        return array(
            '$theme' => 'artilce_list',
            //an array of article items
            '$items' => $items,
            '$title' => 'Pet Store Friends Blog'
        );
    }
}