<?php

class Review{
    private $fullName;
    private $bookTitle;
    private $reviewText;
    private $rating;

    function __construct($name, $surname, $title, $review, $rating){
        $this->fullName = $name . " " . $surname;
        $this->bookTitle = $title;
        $this->reviewText = $review;
        $this->rating = $rating;
    }

    function getFullName(){
        return $this->fullName;
    }
    function getBookTitle(){
        return $this->bookTitle;
    }
    function getReviewText(){
        return $this->reviewText;
    }
    function getRating(){
        return $this->rating;
    }
}