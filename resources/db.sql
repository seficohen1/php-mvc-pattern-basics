-- Database creation
DROP DATABASE IF EXISTS mvc_basics;
CREATE DATABASE IF NOT EXISTS mvc_basics;
USE mvc_basics;

-- Creation of the tables
CREATE TABLE Authors (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(70) NOT NULL,
    Country VARCHAR(100) NOT NULL

);

CREATE TABLE Books (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL

);

CREATE TABLE BooksAuthors (
    AuthorId INT NOT NULL,
    BookId  INT NOT NULL,
    Genres VARCHAR(50) NOT NULL,
    FOREIGN KEY (AuthorId) REFERENCES Authors(Id),
    FOREIGN KEY (BookId) REFERENCES Books(Id)
);


CREATE TABLE genders(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL
);

CREATE TABLE employees(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
last_name VARCHAR(50),
email VARCHAR(50) UNIQUE,
gender_id INT NOT NULL,
avatar VARCHAR(200),
age INT(2) NULL,
phone_number INT(9) NOT NULL,
city VARCHAR(50),
street_address VARCHAR (100),
state VARCHAR(50),
postal_code INT(5),
FOREIGN KEY (gender_id) REFERENCES genders(id) 
);

CREATE TABLE hobbies(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
type ENUM("Indoor", "Outdoor")
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

INSERT INTO genders (name) 
VALUES 
("Male"),("Female"),("Other");

INSERT INTO employees (name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code)
VALUES 
("Rack", "Lei", "jackon@network.com", 1, "https://pbs.twimg.com/profile_images/587511475440332800/_Y3Wl3PL.jpg", 24, 738362767, "San Jone", "126", "CA", "39221"),
("John", "Doe", "jhondoe@foo.com", 1, "https://pbs.twimg.com/profile_images/1094979667143069696/QrD0ovrh.jpg", 34, 638362767, "New York", "126", "CA", "39221"),
("Leila", "Mills", "mills@leila.com", 2, "https://m.media-amazon.com/images/M/MV5BMzI5NDIzNTQ1Nl5BMl5BanBnXkFtZTgwMjQ0Mzc1MTE@._V1_UY256_CR4,0,172,256_AL_.jpg", 26, 638362767, "San Diego", "126", "CA", "39671"),
("Richard", "Desmond", "dismond@foo.com", 1, NULL, 30, 638362767, "New York", "126", "CA", "85716"),
("Susan", "Smith", "susanmith@baz.com", 2, NULL, 28, 638362767, "New York", "126", "CA", "09563"),
("Brad", "Simpson", "brad@foo.com", 1, NULL, 40, 638362767, "Atlanta", "126", "GEO", "01928"),
("Neil", "Walker", "walkerneil@baz.com", 1, NULL, 38, 638362767, "New York", "126", "CA", "17345"),
("Rack", "Jackon", "rack@network.com", 1, NULL, 22, 638362767, "New York", "126", "CA", "68573"),
("Homer", "Eustasio", "homer@gmail.com", 1, NULL, 34, 638362767, "New York", "126", "CA", "09857"),
("Sandra", "Foo", "sandra@foo.com", 2, NULL, 34, 638362767, "New York", "126", "CA", "09274");

INSERT INTO hobbies (name, type)
VALUES
("3D Printing", "Indoor"),
("Astrology", "Indoor"),
("Karaoke", "Indoor"),
("Airsoft", "Outdoor"),
("Archery", "Outdoor"),
("Tourism", "Outdoor");