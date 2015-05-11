<?php

require_once __DIR__ . '/printer.php';

class RequireSample extends IndexPrinter{

    public function print_index(){
        echo 'Now with lasers<br>';
        parent::print_index();
    }

}

$entity = new RequireSample();

$entity->print_index();
