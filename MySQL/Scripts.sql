DROP DATABASE practice;

CREATE DATABASE practice;

USE practice;

CREATE TABLE Customers(
    CustomerID INT AUTO_INCREMENT,
    CustomerName VARCHAR(50),
    ContactName VARCHAR(50),
    Address VARCHAR(50),
    City VARCHAR(50),
    PostalCode VARCHAR(50),
    Country VARCHAR(50),
    PRIMARY KEY(CustomerID)
);

SHOW COLUMNS FROM Customers;

INSERT INTO Customers(CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES("Alfreds Futterkiste", "Maria Anders", "Obere Str. 57", "Berlin", "12209", "Germany"),
    ("Hungry Coyote Store", "Yoshi Latimer", "City Center Plaza 516 Main", "Elgin", "97827", "USA"),
    ("Antonio Moreno Taquería", "Antonio Moreno", "2312",	"México D.F", "05023", "Mexico"),
    ("Hungry Coyote Store", "Yoshi Latimer", "City Center Plaza 516 Main", "Elgin", "97827", "USA"),
    ("Bólido Comidas preparadas", "Martín Sommer", "C/ Araquil, 67", "Madrid", "28023", "Spain"),
    ("Centro comercial Moctezuma", "Francisco Chang", "9993", "México D.F", "05022", "Mexico"),
    ("Galería del gastrónomo", "Eduardo Saavedra", "Rambla de Cataluña", "Barcelona", "08022", "Spain"),
    ("Godos Cocina Típica", "José Pedro Freyre", "C/ Romero, 33", "Sevilla", "41101", "Spain"),
    ("Great Lakes Food Market", "Howard Snyder", "2732 Baker Blvd", "Eugene", "97403", "USA"),
    ("Hungry Coyote Import Store", "Yoshi Latimer", "City Center Plaza 516 Main", "Elgin", "97827", "USA"),
    ("Lazy K Kountry Store", "John Steel", "12 Orchestra Terrace", "Walla Walla", "99362", "USA"),
    ("Tortuga Restaurante", "Miguel Angel", "Avda. Azteca 123", "México D.F", "05033", "Mexico"),
    ("Reggiani Caseifici", "Maurizio Moroni", "Strada Provinciale 124", "Reggio Emilia", "42100", "Italy"),
    ("Que Delícia", "Bernardo Batista", "Rua da Panificadora, 12", "Rio de Janeiro", "02389-673", "Brazil"),
    ("Piccolo und mehr", "Georg Pipps", "Geislweg 14", "Salzburg", "5020", "Austria");

SELECT * FROM Customers;

SELECT DISTINCT Country FROM Customers;
