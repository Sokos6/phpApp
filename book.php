<?php

class Book {
	public $isbn;
	public $title;
	public $author;
	public $available;
}

$book = new Book();
$book->title = "1984";
$book->author = "George Orwell";
$book->available = true;
var_dump($book);