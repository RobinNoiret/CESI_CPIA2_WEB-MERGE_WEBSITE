INSERT INTO Cities (cityName, postalCode)
VALUES
    ('Aix-en-Provence', '13100'),('Angoulême', '16000'),('Arras', '62000'),
    ('Bordeaux', '33000'),('Brest', '29200'),('Caen', '14000'),
    ('Dijon', '21000'),('Grenoble', '38000'),('La Rochelle', '17000'),
    ('Le Mans', '72000'),('Lille', '59000'),('Lyon', '69000'),
    ('Montpellier', '34000'),('Nancy', '54000'),('Nantes', '44000'),
    ('Nice', '06000'),('Orléans', '45000'),('Paris - La Défense', '92000'),
    ('Paris - Nanterre', '92000'),('Pau', '64000'),('Reims', '51100'),
    ('Rouen', '76000'),('Saint-Nazaire', '44600'),('Strasbourg', '67000'),
    ('Toulouse', '31000');
    

-- Campus Aix-en-Provence
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupont', 'Sophie', 'Pilote', 'sophie.dupont', 'Pilot@123', 1),
    ('Martin', 'Alexandre', 'Pilote', 'alex.martin', 'Learn123!', 1),
    ('Leroy', 'Camille', 'Pilote', 'camille.leroy', 'TeachMe456', 1),
    ('Dubois', 'Lucas', 'Pilote', 'lucas.dubois', 'EduPass789', 1),
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.rousseau', 'Tutoring2024', 1);
-- Campus Angoulême
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Marie', 'Pilote', 'marie.dupuis', 'CodeHelp2024', 2),
    ('Lambert', 'Théo', 'Pilote', 'theo.lambert', 'TutorTech21', 2),
    ('Bernard', 'Emma', 'Pilote', 'emma.bernard', 'LearnTogether', 2);
-- Campus Arras
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Lefebvre', 'Antoine', 'Pilote', 'antoine.lefebvre', 'EduConnect2024', 3),
    ('Martin', 'Sophie', 'Pilote', 'sophie.martin', 'TutorPass123', 3);
-- Campus Bordeaux
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dubois', 'Pierre', 'Pilote', 'pierre.dubois', 'BordeauxTutor', 4),
    ('Moreau', 'Léa', 'Pilote', 'lea.moreau', 'LearnBordeaux', 4);
-- Campus Brest
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 5),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 5);
-- Campus Caen
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'CaenTutoring', 6),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnCaen21', 6);
-- Campus Dijon
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Lucie', 'Pilote', 'lucie.martin', 'DijonEduPass', 7),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.dubois', 'TutorDijon123', 7);
-- Campus Grenoble
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Marie', 'Pilote', 'marie.grenoble', 'CodeHelp2024', 8),
    ('Lambert', 'Théo', 'Pilote', 'theo.grenoble', 'TutorTech21', 8);
-- Campus La Rochelle
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Leclerc', 'Louis', 'Pilote', 'louis.larochelle', 'BrestEdu2024', 9),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.larochelle', 'TutorWave', 9);
-- Campus Lille
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Lucie', 'Pilote', 'lucie.lille', 'DijonEduPass', 10),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.lille', 'TutorDijon123', 10);
-- Campus Le Mans
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Sophie', 'Pilote', 'sophie.lemans', 'TutorPass123', 11),
    ('Leroy', 'Camille', 'Pilote', 'camille.lemans', 'SeaSkills456', 11);
-- Campus Lyon
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.lyon', 'PilotWave2024', 12),
    ('Dupont', 'Alexandre', 'Pilote', 'alex.lyon', 'LearnStras21', 12);
-- Campus Montpellier
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Lefebvre', 'Antoine', 'Pilote', 'antoine.lefebvre', 'EduConnect2024', 13),
    ('Martin', 'Sophie', 'Pilote', 'sophie.martin', 'TutorPass123', 13);
-- Campus Nancy
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dubois', 'Pierre', 'Pilote', 'pierre.dubois', 'BordeauxTutor', 14),
    ('Moreau', 'Léa', 'Pilote', 'lea.moreau', 'LearnBordeaux', 14);
-- Campus Nantes
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 15),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 15);
-- Campus Nice
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'NiceTutoring', 16),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnNice21', 16);
-- Campus Orléans
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Lucie', 'Pilote', 'lucie.martin', 'DijonEduPass', 17),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.dubois', 'TutorDijon123', 17);
-- Campus Paris - La Défense
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Sophie', 'Pilote', 'sophie.paris', 'TutorPass123', 18),
    ('Leroy', 'Camille', 'Pilote', 'camille.paris', 'SeaSkills456', 18);
-- Campus Paris - Nanterre
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.paris', 'PilotWave2024', 19),
    ('Dupont', 'Alexandre', 'Pilote', 'alex.paris', 'LearnStras21', 19);
-- Campus Pau
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Marie', 'Pilote', 'marie.pau', 'CodeHelp2024', 20),
    ('Lambert', 'Théo', 'Pilote', 'theo.pau', 'TutorTech21', 20);
-- Campus de Reims
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 21),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 21);
-- Campus de Rouen
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'CaenTutoring', 22),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnCaen21', 22);
-- Campus de Saint-Nazaire
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Leclerc', 'Louis', 'Pilote', 'louis.saintnazaire', 'BrestEdu2024', 23),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.saintnazaire', 'TutorWave', 23);
-- Campus de Strasbourg
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Lucie', 'Pilote', 'lucie.strasbourg', 'DijonEduPass', 24),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.strasbourg', 'TutorDijon123', 24);
-- Campus de Toulouse
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID)
VALUES
    ('Martin', 'Sophie', 'Pilote', 'sophie.toulouse', 'TutorPass123', 25),
    ('Leroy', 'Camille', 'Pilote', 'camille.toulouse', 'SeaSkills456', 25);

-- Class
INSERT INTO Classes (className) VALUES
	('CPI-A1'),('CPI-A2_Generaliste'),('CPI-A2_Informatique'),('CPI-A2_BTP'),('CPI-A2_SystemesEmbarques'),
    ('FISE-A3_Generaliste'), ('FISE-A3_Informatique'), ('FISE-A3_BTP'), ('FISE-A3_SystemesEmbarques'),
	('FISE-A4_Generaliste'), ('FISE-A4_Informatique'), ('FISE-A4_BTP'), ('FISE-A4_SystemesEmbarques'),
	('FISE-A5_Generaliste'), ('FISE-A5_Informatique'), ('FISE-A5_BTP'), ('FISE-A5_SystemesEmbarques');
    
-- Skills
INSERT INTO Skills (skill) VALUES 
	('Esprit d''analyse'), ('Rigueur'), ('Sens de l''organisation'),
	('Prise d''initiative et leadership'), ('Communication et qualités relationnelles'), ('Autonomie et esprit d''équipe'),
	('Expertise'), ('Gestion du stress'), ('Programmation (Java, Python, C++)'),
	('Conception de bases de données'), ('Gestion de projets'), ('Analyse des systèmes'),
	('Maîtrise des outils de développement (IDE, Git)'), ('Connaissances en réseaux et sécurité'), ('Compétences en génie civil (pour le BTP)'),
	('Automatisation et robotique'), ('Maîtrise des langages web (HTML, CSS, JavaScript)'), ('Connaissances en systèmes embarqués');
    
-- Compagnies
insert into Companies (companyName, activityArea, visibility) values ('D''Amore and Sons', 'Termite Control', false);
insert into Companies (companyName, activityArea, visibility) values ('Goyette-Schumm', 'Electrical', false);
insert into Companies (companyName, activityArea, visibility) values ('Howell Group', 'Drywall & Acoustical (MOB)', true);
insert into Companies (companyName, activityArea, visibility) values ('Jacobson Inc', 'Rebar & Wire Mesh Install', true);
insert into Companies (companyName, activityArea, visibility) values ('Nicolas, Bailey and Blick', 'Exterior Signage', true);
insert into Companies (companyName, activityArea, visibility) values ('Miller, Bradtke and Greenfelder', 'Electrical and Fire Alarm', true);
insert into Companies (companyName, activityArea, visibility) values ('Dare, D''Amore and Krajcik', 'Waterproofing & Caulking', false);
insert into Companies (companyName, activityArea, visibility) values ('McLaughlin-Champlin', 'Framing (Steel)', false);
insert into Companies (companyName, activityArea, visibility) values ('Blick LLC', 'Doors, Frames & Hardware', true);
insert into Companies (companyName, activityArea, visibility) values ('Volkman Group', 'Epoxy Flooring', true);
insert into Companies (companyName, activityArea, visibility) values ('Simonis, Crist and MacGyver', 'Termite Control', true);
insert into Companies (companyName, activityArea, visibility) values ('Bosco-Ullrich', 'Hard Tile & Stone', false);
insert into Companies (companyName, activityArea, visibility) values ('Altenwerth-Lubowitz', 'Plumbing & Medical Gas', true);
insert into Companies (companyName, activityArea, visibility) values ('Smitham Inc', 'Soft Flooring and Base', false);
insert into Companies (companyName, activityArea, visibility) values ('Blick LLC', 'Casework', false);
insert into Companies (companyName, activityArea, visibility) values ('Runte LLC', 'HVAC', false);
insert into Companies (companyName, activityArea, visibility) values ('Kessler, Rau and Beier', 'Painting & Vinyl Wall Covering', false);
insert into Companies (companyName, activityArea, visibility) values ('McLaughlin, Lowe and Fay', 'Rebar & Wire Mesh Install', false);
insert into Companies (companyName, activityArea, visibility) values ('Cummerata-Farrell', 'Temp Fencing, Decorative Fencing and Gates', true);
insert into Companies (companyName, activityArea, visibility) values ('Rolfson, Quigley and Hauck', 'Framing (Steel)', true);
insert into Companies (companyName, activityArea, visibility) values ('Mayert LLC', 'Drywall & Acoustical (FED)', true);
insert into Companies (companyName, activityArea, visibility) values ('Collins Group', 'Fire Sprinkler System', true);
insert into Companies (companyName, activityArea, visibility) values ('Sporer-Kessler', 'Electrical and Fire Alarm', false);
insert into Companies (companyName, activityArea, visibility) values ('Rohan Inc', 'Drywall & Acoustical (FED)', true);
insert into Companies (companyName, activityArea, visibility) values ('Wehner, Heller and Stokes', 'Framing (Wood)', true);
insert into Companies (companyName, activityArea, visibility) values ('Schimmel-Hermiston', 'Curb & Gutter', true);
insert into Companies (companyName, activityArea, visibility) values ('Schuster, Gibson and O''Hara', 'Termite Control', true);
insert into Companies (companyName, activityArea, visibility) values ('Rogahn-Daniel', 'Structural & Misc Steel Erection', false);
insert into Companies (companyName, activityArea, visibility) values ('Aufderhar-Reilly', 'Masonry & Precast', false);
insert into Companies (companyName, activityArea, visibility) values ('Klein, Prosacco and Wiegand', 'Rebar & Wire Mesh Install', true);
insert into Companies (companyName, activityArea, visibility) values ('Wolf-Mann', 'HVAC', true);
insert into Companies (companyName, activityArea, visibility) values ('Haley-O''Hara', 'Elevator', true);
insert into Companies (companyName, activityArea, visibility) values ('O''Conner, Lynch and Roob', 'Drilled Shafts', false);
insert into Companies (companyName, activityArea, visibility) values ('Metz-Sipes', 'Structural & Misc Steel Erection', false);
insert into Companies (companyName, activityArea, visibility) values ('Rolfson, Hagenes and D''Amore', 'Wall Protection', true);
insert into Companies (companyName, activityArea, visibility) values ('Stehr, Kessler and Wilkinson', 'Prefabricated Aluminum Metal Canopies', false);
insert into Companies (companyName, activityArea, visibility) values ('Marquardt Group', 'Termite Control', true);
insert into Companies (companyName, activityArea, visibility) values ('Carter LLC', 'Overhead Doors', true);
insert into Companies (companyName, activityArea, visibility) values ('Olson-Daugherty', 'Soft Flooring and Base', false);
insert into Companies (companyName, activityArea, visibility) values ('Cruickshank LLC', 'Fire Sprinkler System', false);
insert into Companies (companyName, activityArea, visibility) values ('Lubowitz, Emmerich and Skiles', 'Rebar & Wire Mesh Install', true);
insert into Companies (companyName, activityArea, visibility) values ('Emmerich and Sons', 'Plumbing & Medical Gas', false);
insert into Companies (companyName, activityArea, visibility) values ('Nolan-Kuvalis', 'Granite Surfaces', true);
insert into Companies (companyName, activityArea, visibility) values ('Nienow and Sons', 'Framing (Wood)', true);
insert into Companies (companyName, activityArea, visibility) values ('Witting and Sons', 'Elevator', false);
insert into Companies (companyName, activityArea, visibility) values ('Moen-Turner', 'Electrical and Fire Alarm', false);
insert into Companies (companyName, activityArea, visibility) values ('Johnson, Maggio and Reichel', 'Prefabricated Aluminum Metal Canopies', true);
insert into Companies (companyName, activityArea, visibility) values ('Heidenreich-Quitzon', 'Masonry', false);
insert into Companies (companyName, activityArea, visibility) values ('Watsica-Torp', 'Soft Flooring and Base', true);
insert into Companies (companyName, activityArea, visibility) values ('Lehner, Mills and Mosciski', 'Rebar & Wire Mesh Install', true);
insert into Companies (companyName, activityArea, visibility) values ('Berge-Crona', 'Prefabricated Aluminum Metal Canopies', true);
insert into Companies (companyName, activityArea, visibility) values ('Schamberger, Cruickshank and Johns', 'Roofing (Asphalt)', false);
insert into Companies (companyName, activityArea, visibility) values ('Kuhlman Group', 'Elevator', true);
insert into Companies (companyName, activityArea, visibility) values ('Weissnat, Ondricka and Kreiger', 'Drilled Shafts', true);
insert into Companies (companyName, activityArea, visibility) values ('Goyette, Bernier and Langosh', 'Temp Fencing, Decorative Fencing and Gates', false);
insert into Companies (companyName, activityArea, visibility) values ('Lindgren, White and Schamberger', 'Drilled Shafts', false);
insert into Companies (companyName, activityArea, visibility) values ('Corkery LLC', 'Asphalt Paving', false);
insert into Companies (companyName, activityArea, visibility) values ('Toy-Hand', 'Painting & Vinyl Wall Covering', false);
insert into Companies (companyName, activityArea, visibility) values ('Marvin-Larson', 'EIFS', false);

-- Addresses
INSERT INTO `Addresses` VALUES (1,'Way 2nd',0,36,5),(2,'Parkway Drewry',11032,52,11),(3,'Road Texas',93,20,24),(4,'Plaza Hanson',7,23,22),(5,'Center Magdeline',9454,49,11),(6,'Trail Kedzie',5586,2,20),(7,'Street Surrey',179,44,9),(8,'Plaza Shasta',970,13,21),(9,'Street Jackson',8,30,25),(10,'Avenue Raven',26,46,24),(11,'Drive Thierer',7560,3,25),(12,'Trail Cordelia',40,39,19),(13,'Terrace Dapin',1,37,13),(14,'Center Towne',6,13,3),(15,'Place 1st',0,22,25),(16,'Circle Northland',8285,8,12),(17,'Center Lakewood',7,11,9),(18,'Place Briar Crest',67,17,24),(19,'Terrace Bluejay',77,55,25),(20,'Drive Kingsford',19355,33,14),(21,'Lane Pleasure',69,15,4),(22,'Place Hoffman',73,50,2),(23,'Place Columbus',187,10,25),(24,'Crossing Claremont',1,51,1),(25,'Plaza Clarendon',351,51,4),(26,'Crossing Sauthoff',56,17,7),(27,'Terrace Dwight',5,10,7),(28,'Lane Karstens',163,3,23),(29,'Place Starling',1,25,2),(30,'Parkway John Wall',5,34,1),(31,'Plaza Jackson',7065,41,2),(32,'Court Laurel',2264,57,21),(33,'Street Montana',497,14,13),(34,'Center Mandrake',9492,3,24),(35,'Terrace Havey',64,44,3),(36,'Trail Laurel',6,37,18),(37,'Street Messerschmidt',7578,33,25),(38,'Court Leroy',130,35,25),(39,'Court Thierer',5586,36,12),(40,'Place Marquette',6615,37,1),(41,'Parkway Paget',28,57,2),(42,'Center Nevada',204,21,15),(43,'Avenue Butterfield',55,38,23),(44,'Drive Oxford',13716,50,22),(45,'Center Utah',4,27,9),(46,'Plaza Kingsford',8986,27,24),(47,'Road Nobel',77,12,23),(48,'Hill Toban',2912,30,11),(49,'Avenue Dryden',5,55,23),(50,'Parkway Bashford',48,19,25),(51,'Circle Lukken',21,9,22),(52,'Alley Thackeray',28,28,21),(53,'Junction Erie',4,28,22),(54,'Junction Namekagon',23253,59,22),(55,'Center Brentwood',7,17,18),(56,'Court Green',3202,45,19),(57,'Way Bultman',33,13,9),(58,'Circle Alpine',449,30,5),(59,'Parkway Transport',66,1,6),(60,'Point Barnett',33,57,16),(61,'Parkway Veith',99,23,14),(62,'Parkway Clove',10770,59,20),(63,'Center Donald',1099,27,10),(64,'Trail Mosinee',94,35,9),(65,'Circle Melody',655,20,10),(66,'Trail Bluestem',11,32,1),(67,'Terrace Kings',76,15,25),(68,'Road Shopko',3,37,19),(69,'Junction Lakewood Gardens',29019,13,19),(70,'Park Crest Line',72,26,25),(71,'Plaza Sundown',715,58,7),(72,'Road Acker',81,42,21),(73,'Alley Summerview',817,10,23),(74,'Circle 3rd',505,9,18),(75,'Terrace Northland',38,12,9),(76,'Trail Dovetail',1,38,9),(77,'Place David',402,22,11),(78,'Alley Emmet',540,56,13),(79,'Street Superior',6930,34,13),(80,'Center Gale',4693,54,11),(81,'Street Gerald',729,46,3),(82,'Circle Laurel',8,40,25),(83,'Way Farmco',6977,14,7),(84,'Point Union',846,20,21),(85,'Terrace Main',18723,39,18),(86,'Pass Chive',9,48,8),(87,'Center Kinsman',9,11,15);

-- Offers
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (1, '2018/12/04', 9, 1570, 45);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (2, '2023/07/22', 9, null, 17);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (3, '2021/09/22', 2, 1310, 72);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (4, '2024/01/12', 3, 1170, 84);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (5, '2024/02/26', 3, null, 76);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (6, '2019/05/01', 8, null, 62);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (7, '2021/02/27', 7, null, 35);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (8, '2022/08/09', 9, null, 102);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (9, '2022/05/20', 4, 1640, 35);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (10, '2019/08/31', 10, 1290, 57);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (11, '2018/08/11', 2, null, 103);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (12, '2021/11/06', 8, 1150, 53);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (13, '2022/12/12', 3, null, 106);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (14, '2024/02/08', 2, null, 52);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (15, '2024/02/20', 2, 1300, 101);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (16, '2021/12/10', 2, null, 65);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (17, '2023/10/20', 2, 1220, 60);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (18, '2021/05/19', 7, null, 94);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (19, '2018/12/30', 6, null, 11);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (20, '2019/06/19', 3, null, 106);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (21, '2023/01/06', 4, null, 54);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (22, '2020/12/06', 9, 1030, 16);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (23, '2017/10/16', 10, 850, 4);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (24, '2018/05/25', 3, null, 25);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (25, '2019/08/27', 5, null, 57);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (26, '2018/08/01', 2, null, 66);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (27, '2022/10/10', 8, null, 21);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (28, '2022/06/23', 3, null, 21);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (29, '2021/10/20', 8, 1100, 91);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (30, '2021/11/05', 4, 1560, 99);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (31, '2018/05/04', 2, 1260, 100);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (32, '2019/03/22', 4, 1250, 19);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (33, '2017/11/29', 8, null, 74);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (34, '2018/07/24', 9, 660, 49);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (35, '2022/03/21', 3, null, 84);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (36, '2018/04/10', 4, 950, 100);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (37, '2020/08/18', 3, 1190, 90);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (38, '2021/07/26', 5, null, 11);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (39, '2024/01/10', 5, null, 99);
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values (40, '2020/04/19', 2, null, 11);

-- 
