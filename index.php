<?php

include 'Person.php';
include_once 'Author.php';

$newAuthor = new Author("Martin", "Lazarevski", 1994);

echo $newAuthor->getCompleteName();

?>