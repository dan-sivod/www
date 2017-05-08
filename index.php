<?php

class Article
{
    public $title;
    public $text;
    public function __construct( $title, $text )
    {
        $this->title = $title;
        $this->text = $text;
    }
    public function new()
    {
        echo $this->title;
        echo '<br/>';
        echo $this->text;
    }

}

$a = new Article('First title','first text');
$a->new();