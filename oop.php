<?php
//Enabled error reporting
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow a book (decrease available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false; // No copies left to borrow
        }
    }

    // Return a book (increase available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Get the name of the member
    public function getName() {
        return $this->name;
    }

    // Borrow a book (decrease available copies)
    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed '" . $book->getTitle() . "'<br>";
        } else {
            echo "Sorry, no copies of '" . $book->getTitle() . "' are available for borrowing.<br>";
        }
    }

    // Return a book (increase available copies)
    public function returnBook(Book $book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'<br>";
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1); // John Doe borrows The Great Gatsby
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird

// Print Available Copies with their names
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "<br>";

?>