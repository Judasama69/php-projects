<?php

class Books {
    private string $author;
    private string $title;
    private bool $isAvailable;

    public function __construct($author, $title, $isAvailable) {
        $this->author=$author;
        $this->title=$title;
        $this->isAvailable=$isAvailable;
    }

    public function borrowBook() : string {
        if ($this->isAvailable){
            return "The Book is Available. You can now borrow it.";
        }
        $this->isAvailable = false;
        return "The Book is Unavailable.";
    }

    public function returnBook() : string {
        if ($this->isAvailable){
            return "Sorry. The Book is already out.";
        }
        $this->isAvailable = false;
        return "You Borrowed the book $this->title.";
    }

    public function getDetails() : string {
        $Status = $this->isAvailable ? "Available" : "Unavailable";
        return "Status for the book {$this->title} : {$this->author} : {$Status}";
    }
}