<?php

class Article
{
    public $title;
    public $text;
    public function new()
    {
        echo $this->title;
    }

}

$a = new Article;
$a->title = 'First title';
$a->new();