<?php

require 'vendor/autoload.php';

use User\User;
use Book\Book;
use Library\Library;

$library = new Library();

// Топ 10 книг мира :|
$book1 = new Book("The Pilgrim's Progress to the Celestial Country", "John Bunyan");
$book2 = new Book("Robinson Crusoe", "Daniel Defoe");
$book3 = new Book("Gulliver's Travels", "Jonathan Swift");
$book4 = new Book("Clarissa", "Samuel Richardson");
$book5 = new Book("The Story of Tom Jones, a Foundling", "Henry Fielding");
$book6 = new Book("The Life and Opinions of Tristram Shandy, Gentleman", "Laurence Sterne");
$book7 = new Book("Emma", "Jane Austen");
$book8 = new Book("Frankenstein, or the Modern Prometheus", "Mary Shelley");
$book9 = new Book("Nightmare Abbey", "The Tale of the Adventures of Arthur Gordon Pym");
$book10 = new Book("Sybil", "Benjamin Disraeli");
$book11 = new Book("Jane Eyre", "Charlotte Bronte");


$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$user1 = new User("Kesha", 1);
$user2 = new User("Haris", 2);

$library->registerUser($user1);
$library->registerUser($user2);


$user1->borrowBook($book1);
$user2->borrowBook($book1);
$user1->returnBook($book1);
$user2->borrowBook($book1);
$user2->returnBook($book1);


$user1->borrowBook($book1);
$user1->borrowBook($book2);
$user1->borrowBook($book3);
$user1->borrowBook($book4);
$user1->borrowBook($book5);
$user1->borrowBook($book6);
$user1->borrowBook($book7);
$user1->borrowBook($book8);
$user1->borrowBook($book9);
$user1->borrowBook($book10);
$user1->borrowBook($book11);


print_r($library->findBookByTitle("1884"));
print_r($library->findUserById(1));
