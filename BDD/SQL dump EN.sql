create database mergeDatabase;

use mergeDatabase;

CREATE TABLE Companies(
   companyID INT,
   companyName VARCHAR(25),
   activityArea VARCHAR(30),
   visibility boolean,
   PRIMARY KEY(companyID)
);

CREATE TABLE Classes(
   classID INT,
   className VARCHAR(50),
   PRIMARY KEY(classID)
);

CREATE TABLE Skills(
   skillID INT,
   skill VARCHAR(20),
   PRIMARY KEY(skillID)
);

CREATE TABLE Cities(
   cityID INT,
   cityName VARCHAR(50),
   postalCode SMALLINT,
   PRIMARY KEY(cityID)
);

CREATE TABLE Addresses(
   addressID INT,
   streetName VARCHAR(40),
   streetNum SMALLINT,
   companyID INT,
   cityID INT NOT NULL,
   PRIMARY KEY(addressID),
   FOREIGN KEY(companyID) REFERENCES Companies(companyID),
   FOREIGN KEY(cityID) REFERENCES Cities(cityID)
);

CREATE TABLE Offers(
   offerID INT,
   internDuration SMALLINT,
   publicationDate DATE,
   placesNumber SMALLINT,
   remunerationBasis DECIMAL(10,2) NOT NULL,
   addressID INT NOT NULL,
   PRIMARY KEY(offerID),
   FOREIGN KEY(addressID) REFERENCES Addresses(addressID)
);

CREATE TABLE Users(
   userID INT,
   userLastName VARCHAR(25),
   userFirstName VARCHAR(25),
   userStatus enum('Piolte', 'Etudiant', 'Admin'),
   userLogin VARCHAR(20) unique,
   userPassword VARCHAR(25),
   cityID INT,
   PRIMARY KEY(userID),
   FOREIGN KEY(cityID) REFERENCES Cities(cityID)
);

CREATE TABLE Candidatures(
   offerID INT,
   userID INT,
   coverLetter TEXT,
   CV blob,
   accepted boolean,
   PRIMARY KEY(offerID, userID),
   FOREIGN KEY(offerID) REFERENCES Offers(offerID),
   FOREIGN KEY(userID) REFERENCES Users(userID)
);

CREATE TABLE UserClass(
   userID INT,
   classID INT,
   PRIMARY KEY(userID, classID),
   FOREIGN KEY(userID) REFERENCES Users(userID),
   FOREIGN KEY(classID) REFERENCES Classes(classID)
);

CREATE TABLE WishList(
   offerID INT,
   userID INT,
   PRIMARY KEY(offerID, userID),
   FOREIGN KEY(offerID) REFERENCES Offers(offerID),
   FOREIGN KEY(userID) REFERENCES Users(userID)
);

CREATE TABLE Evaluations(
   companyID INT,
   userID INT,
   grade DECIMAL(3,2),
   PRIMARY KEY(companyID, userID),
   FOREIGN KEY(companyID) REFERENCES Companies(companyID),
   FOREIGN KEY(userID) REFERENCES Users(userID)
);

CREATE TABLE skillOffer(
   offerID INT,
   skillID INT,
   PRIMARY KEY(offerID, skillID),
   FOREIGN KEY(offerID) REFERENCES Offers(offerID),
   FOREIGN KEY(skillID) REFERENCES Skills(skillID)
);
