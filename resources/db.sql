-- Database creation
DROP DATABASE IF EXISTS mvc_basics;
CREATE DATABASE IF NOT EXISTS mvc_basics;
USE mvc_basics;

-- Creation of the tables
CREATE TABLE Authors (
    Id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(70) NOT NULL,
    Country VARCHAR(100) NOT NULL,
    PRIMARY KEY(Id)
);

CREATE TABLE Books (
    Id INT NOT NULL AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    PRIMARY KEY(Id)
);

CREATE TABLE BooksAuthors (
    AuthorId INT NOT NULL,
    BookId  INT NOT NULL,
    Genres VARCHAR(50) NOT NULL,
    FOREIGN KEY (AuthorId) REFERENCES Authors(Id),
    FOREIGN KEY (BookId) REFERENCES Books(Id)
);

-- Insert of data
INSERT INTO Authors
    (Name, Country)
VALUES
    ('J.D. Salinger', 'USA'),
    ('F. Scott. Fitzgerald', 'USA'),
    ('Jane Austen', 'UK'),
    ('Scott Hanselman', 'USA'),
    ('Jason N. Gaylord', 'USA'),
    ('Pranav Rastogi', 'India'),
    ('Todd Miranda', 'USA'),
    ('Christian Wenz', 'USA')
;

INSERT INTO Books
    (Id, Title)
VALUES
    (1, 'The Catcher in the Rye'),
    (2, 'Nine Stories'),
    (3, 'Franny and Zooey'),
    (4, 'The Great Gatsby'),
    (5, 'Tender id the Night'),
    (6, 'Pride and Prejudice'),
    (7, 'Professional ASP.NET 4.5 in C# and VB')
;

INSERT INTO BooksAuthors
    (BookId, AuthorId, Genres)
VALUES
    (1, 1, 'Novel, Bildungsroman, Young adult fiction, Coming-of-age story, Literary realism, First-person narrative'),
    (2, 1, 'Short stories'),
    (3, 1, 'Short stories'),
    (4, 2, 'Historical Fiction'),
    (5, 2, 'Tragedy'),
    (6, 3, 'Romance novel, Fiction, Satire, Novel of manners'),
    (7, 4, 'Computer science, Programming'),
    (7, 5, 'Computer science, Programming'),
    (7, 6, 'Computer science, Programming'),
    (7, 7, 'Computer science, Programming'),
    (7, 8, 'Computer science, Programming')
;