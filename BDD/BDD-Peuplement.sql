Use mergeDatabase;

-- Peuplement de la table Cities
INSERT INTO Cities (cityName, postalCode) VALUES
    ('Aix-en-Provence', '13100'),
    ('Angoulême', '16000'),
    ('Arras', '62000'),
    ('Bordeaux', '33000'),
    ('Brest', '29200'),
    ('Caen', '14000'),
    ('Dijon', '21000'),
    ('Grenoble', '38000'),
    ('La Rochelle', '17000'),
    ('Le Mans', '72000'),
    ('Lille', '59000'),
    ('Lyon', '69000'),
    ('Montpellier', '34000'),
    ('Nancy', '54000'),
    ('Nantes', '44000'),
    ('Nice', '06000'),
    ('Orléans', '45000'),
    ('Paris - La Défense', '92000'),
    ('Paris - Nanterre', '92000'),
    ('Pau', '64000'),
    ('Reims', '51100'),
    ('Rouen', '76000'),
    ('Saint-Nazaire', '44600'),
    ('Strasbourg', '67000'),
    ('Toulouse', '31000');


-- Peuplement de la table Users
    -- Campus Aix-en-Provence
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupont', 'Sophie', 'Pilote', 'sophie.dupont', 'Pilot@123', 1),
    ('Martin', 'Alexandre', 'Pilote', 'alex.martin', 'Learn123!', 1),
-- Etudiants
    ('Smith', 'Emma', 'étudiant', 'emma.smith', 'password123', '1'),
    ('Johnson', 'Noah', 'étudiant', 'noah.johnson', 'abcdef123', '1'),
    ('Williams', 'Liam', 'étudiant', 'liam.williams', 'qwertyuiop', '1'),
    ('Brown', 'Olivia', 'étudiant', 'olivia.brown', '1234567890', '1'),
    ('Jones', 'Ava', 'étudiant', 'ava.jones', 'letmein123', '1');

    -- Campus Angoulème
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupuis', 'Marie', 'Pilote', 'marie.dupuis', 'CodeHelp2024', 2),
    ('Lambert', 'Théo', 'Pilote', 'theo.lambert', 'TutorTech21', 2),
-- Etudiants
    ('Davis', 'Mia', 'étudiant', 'mia.davis', 'password1234', '2'),
    ('Miller', 'Elijah', 'étudiant', 'elijah.miller', 'abcdef1234', '2'),
    ('Wilson', 'Sophia', 'étudiant', 'sophia.wilson', 'qwertyuiop1', '2'),
    ('Moore', 'Lucas', 'étudiant', 'lucas.moore', '12345678901', '2'),
    ('Taylor', 'Isabella', 'étudiant', 'isabella.taylor', 'letmein1234', '2');

    -- Campus Arras
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dubois', 'Lucas', 'Pilote', 'lucas.dubois', 'EduPass789', 3),
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.rousseau', 'Tutoring2024', 3),
-- Etudiants
    ('Jackson', 'Harper', 'étudiant', 'harper.jackson', 'password12345', '3'),
    ('Clark', 'Charlotte', 'étudiant', 'charlotte.clark', 'abcdef12345', '3'),
    ('Anderson', 'Aiden', 'étudiant', 'aiden.anderson', 'qwertyuiop12', '3'),
    ('Thomas', 'Amelia', 'étudiant', 'amelia.thomas', '123456789012', '3'),
    ('White', 'Mason', 'étudiant', 'mason.white', 'letmein12345', '3');

    -- Campus Bordeaux
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES  
-- Pilotes
    ('Dubois', 'Pierre', 'Pilote', 'pierre.dubois', 'BordeauxTutor', 4),
    ('Moreau', 'Léa', 'Pilote', 'lea.moreau', 'LearnBordeaux', 4),
-- Etudiants
    ('Harris', 'Evelyn', 'étudiant', 'evelyn.harris', 'password123456', '4'),
    ('Allen', 'Ethan', 'étudiant', 'ethan.allen', 'abcdef123456', '4'),
    ('Young', 'Luna', 'étudiant', 'luna.young', 'qwertyuiop123', '4'),
    ('Martin', 'Benjamin', 'étudiant', 'benjamin.martin', '1234567890123', '4'),
    ('Scott', 'Ella', 'étudiant', 'ella.scott', 'letmein123456', '4');
    
    -- Campus Brest
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES   
-- Pilotes
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 5),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 5),
-- Etudiants
    ('Hall', 'Liam', 'étudiant', 'liam.hall', 'password1234567', '5'),
    ('King', 'Mia', 'étudiant', 'mia.king', 'abcdef1234567', '5'),
    ('Wright', 'James', 'étudiant', 'james.wright', 'qwertyuiop1234', '5'),
    ('Lopez', 'Emily', 'étudiant', 'emily.lopez', '12345678901234', '5'),
    ('Baker', 'Harper', 'étudiant', 'harper.baker', 'letmein1234567', '5');

    -- Campus Caen
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES   
-- Pilotes
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'CaenTutoring', 6),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnCaen21', 6),
-- Etudiants
    ('Nelson', 'Noah', 'étudiant', 'noah.nelson', 'password12345678', '6'),
    ('Carter', 'Avery', 'étudiant', 'avery.carter', 'abcdef12345678', '6'),
    ('Mitchell', 'Liam', 'étudiant', 'liam.mitchell', 'qwertyuiop12345', '6'),
    ('Perez', 'Ella', 'étudiant', 'ella.perez', '123456789012345', '6'),
    ('Roberts', 'Olivia', 'étudiant', 'olivia.roberts', 'letmein12345678', '6');

    -- Campus Dijon
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES  
-- Pilotes
    ('Martin', 'Lucie', 'Pilote', 'lucie.martin', 'DijonEduPass', 7),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.dubois', 'TutorDijon123', 7),
-- Etudiants
    ('Turner', 'Oliver', 'étudiant', 'oliver.turner', 'password123456789', '7'),
    ('Phillips', 'Sophia', 'étudiant', 'sophia.phillips', 'abcdef123456789', '7'),
    ('Coleman', 'Ethan', 'étudiant', 'ethan.coleman', 'qwertyuiop123456', '7'),
    ('Hayes', 'Aria', 'étudiant', 'aria.hayes', '1234567890123456', '7'),
    ('Rivera', 'Emma', 'étudiant', 'emma.rivera', 'letmein123456789', '7');

    -- Campus Grenoble
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupuis', 'Marie', 'Pilote', 'marie.grenoble', 'CodeHelp2024', 8),
    ('Lambert', 'Théo', 'Pilote', 'theo.grenoble', 'TutorTech21', 8),
-- Etudiants
    ('Reed', 'Logan', 'étudiant', 'logan.reed', 'password1234567890', '8'),
    ('Washington', 'Mia', 'étudiant', 'mia.washington', 'abcdef1234567890', '8'),
    ('Gonzalez', 'Liam', 'étudiant', 'liam.gonzalez', 'qwertyuiop1234567', '8'),
    ('Bennett', 'Avery', 'étudiant', 'avery.bennett', '12345678901234567', '8'),
    ('Gray', 'Harper', 'étudiant', 'harper.gray', 'letmein1234567890', '8');

    -- Campus La Rochelle
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Leclerc', 'Louis', 'Pilote', 'louis.larochelle', 'BrestEdu2024', 9),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.larochelle', 'TutorWave', 9),
-- Etudiants
    ('Foster', 'Noah', 'étudiant', 'noah.foster', 'password12345678901', '9'),
('Sullivan', 'Sophia', 'étudiant', 'sophia.sullivan', 'abcdef12345678901', '9'),
('Bryant', 'Ethan', 'étudiant', 'ethan.bryant', 'qwertyuiop12345678', '9'),
('Reyes', 'Isabella', 'étudiant', 'isabella.reyes', '123456789012345678', '9'),
('Russell', 'Olivia', 'étudiant', 'olivia.russell', 'letmein12345678901', '9');

    -- Campus Lille
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Lucie', 'Pilote', 'lucie.lille', 'DijonEduPass', 10),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.lille', 'TutorDijon123', 10),
-- Etudiants
    ('Griffin', 'Logan', 'étudiant', 'logan.griffin', 'password123456789012', '10'),
    ('Shaw', 'Mia', 'étudiant', 'mia.shaw', 'abcdef123456789012', '10'),
    ('Gordon', 'Liam', 'étudiant', 'liam.gordon', 'qwertyuiop123456789', '10'),
    ('Holmes', 'Avery', 'étudiant', 'avery.holmes', '1234567890123456789', '10'),
    ('Tucker', 'Harper', 'étudiant', 'harper.tucker', 'letmein123456789012', '10');

    --Campus Le Mans
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Sophie', 'Pilote', 'sophie.lemans', 'TutorPass123', 11),
    ('Leroy', 'Camille', 'Pilote', 'camille.lemans', 'SeaSkills456', 11),
-- Etudiants
    ('Sims', 'Noah', 'étudiant', 'noah.sims', 'password1234567890123', '11'),
    ('Matthews', 'Sophia', 'étudiant', 'sophia.matthews', 'abcdef1234567890123', '11'),
    ('Owens', 'Ethan', 'étudiant', 'ethan.owens', 'qwertyuiop1234567890', '11'),
    ('Cunningham', 'Isabella', 'étudiant', 'isabella.cunningham', '12345678901234567890', '11'),
    ('Salazar', 'Olivia', 'étudiant', 'olivia.salazar', 'letmein1234567890123', '11');

    -- Campus Lyon
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.lyon', 'PilotWave2024', 12),
    ('Dupont', 'Alexandre', 'Pilote', 'alex.lyon', 'LearnStras21', 12),
-- Etudiants
    ('Dixon', 'Logan', 'étudiant', 'logan.dixon', 'password12345678901234', '12'),
    ('Schmidt', 'Mia', 'étudiant', 'mia.schmidt', 'abcdef12345678901234', '12'),
    ('Vasquez', 'Liam', 'étudiant', 'liam.vasquez', 'qwertyuiop12345678901', '12'),
    ('Walters', 'Avery', 'étudiant', 'avery.walters', '123456789012345678901', '12'),
    ('Hubbard', 'Harper', 'étudiant', 'harper.hubbard', 'letmein12345678901234', '12');

    -- Campus Montpellier
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Lefebvre', 'Antoine', 'Pilote', 'antoine.lefebvre', 'EduConnect2024', 13),
    ('Martin', 'Sophie', 'Pilote', 'sophie.martin', 'TutorPass123', 13),
-- Etudiants
    ('Ortega', 'Noah', 'étudiant', 'noah.ortega', 'password123456789012345', '13'),
    ('Conner', 'Sophia', 'étudiant', 'sophia.conner', 'abcdef123456789012345', '13'),
    ('Gardner', 'Ethan', 'étudiant', 'ethan.gardner', 'qwertyuiop123456789012', '13'),
    ('Stephens', 'Isabella', 'étudiant', 'isabella.stephens', '1234567890123456789012', '13'),
    ('Mendoza', 'Olivia', 'étudiant', 'olivia.mendoza', 'letmein123456789012345', '13');

    -- Campus Nancy
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dubois', 'Pierre', 'Pilote', 'pierre.dubois', 'BordeauxTutor', 14),
    ('Moreau', 'Léa', 'Pilote', 'lea.moreau', 'LearnBordeaux', 14),
-- Etudiants
    ('Waters', 'Logan', 'étudiant', 'logan.waters', 'password1234567890123456', '14'),
    ('Brewer', 'Mia', 'étudiant', 'mia.brewer', 'abcdef1234567890123456', '14'),
    ('Wilkerson', 'Liam', 'étudiant', 'liam.wilkerson', 'qwertyuiop1234567890123', '14'),
    ('Nicholson', 'Avery', 'étudiant', 'avery.nicholson', '12345678901234567890123', '14'),
    ('Underwood', 'Harper', 'étudiant', 'harper.underwood', 'letmein1234567890123456', '14');

    -- Campus Nantes
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 15),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 15),
-- Etudiants
    ('Short', 'Noah', 'étudiant', 'noah.short', 'password12345678901234567', '15'),
    ('Carson', 'Sophia', 'étudiant', 'sophia.carson', 'abcdef12345678901234567', '15'),
    ('Hoover', 'Ethan', 'étudiant', 'ethan.hoover', 'qwertyuiop12345678901234', '15'),
    ('Mccoy', 'Isabella', 'étudiant', 'isabella.mccoy', '123456789012345678901234', '15'),
    ('Hess', 'Olivia', 'étudiant', 'olivia.hess', 'letmein12345678901234567', '15');

    -- Campus Nice
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'NiceTutoring', 16),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnNice21', 16),
-- Etudiants
    ('Bentley', 'Logan', 'étudiant', 'logan.bentley', 'password123456789012345678', '16'),
    ('Hardy', 'Mia', 'étudiant', 'mia.hardy', 'abcdef123456789012345678', '16'),
    ('Landry', 'Liam', 'étudiant', 'liam.landry', 'qwertyuiop123456789012345', '16'),
    ('Brennan', 'Avery', 'étudiant', 'avery.brennan', '1234567890123456789012345', '16'),
    ('Watkins', 'Harper', 'étudiant', 'harper.watkins', 'letmein123456789012345678', '16'),:

    -- Campus Orléans
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Lucie', 'Pilote', 'lucie.martin', 'DijonEduPass', 17),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.dubois', 'TutorDijon123', 17),
-- Etudiants
    ('Mcintosh', 'Noah', 'étudiant', 'noah.mcintosh', 'password1234567890123456789', '17'),
('Ho', 'Sophia', 'étudiant', 'sophia.ho', 'abcdef1234567890123456789', '17'),
('Guzman', 'Ethan', 'étudiant', 'ethan.guzman', 'qwertyuiop123456789012345', '17'),
('Faulkner', 'Isabella', 'étudiant', 'isabella.faulkner', '12345678901234567890123456', '17'),
('Patton', 'Olivia', 'étudiant', 'olivia.patton', 'letmein1234567890123456789', '17');

    -- Campus Paris La Défense
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Sophie', 'Pilote', 'sophie.paris', 'TutorPass123', 18),
    ('Leroy', 'Camille', 'Pilote', 'camille.paris', 'SeaSkills456', 18),
-- Etudiants
    ('Brown', 'Logan', 'étudiant', 'logan.brown', 'password12345678901234567890', '18'),
    ('Lloyd', 'Mia', 'étudiant', 'mia.lloyd', 'abcdef12345678901234567890', '18'),
    ('Marsh', 'Liam', 'étudiant', 'liam.marsh', 'qwertyuiop1234567890123456', '18'),
    ('Maynard', 'Avery', 'étudiant', 'avery.maynard', '123456789012345678901234567', '18'),
    ('Kemp', 'Harper', 'étudiant', 'harper.kemp', 'letmein12345678901234567890', '18');

    -- Campus Paris Nanterre
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Rousseau', 'Éléonore', 'Pilote', 'eleonore.paris', 'PilotWave2024', 19),
    ('Dupont', 'Alexandre', 'Pilote', 'alex.paris', 'LearnStras21', 19),
-- Etudiants
    ('Curtis', 'Noah', 'étudiant', 'noah.curtis', 'password123456789012345678901', '19'),
    ('Gross', 'Sophia', 'étudiant', 'sophia.gross', 'abcdef123456789012345678901', '19'),
    ('Navarro', 'Ethan', 'étudiant', 'ethan.navarro', 'qwertyuiop12345678901234567', '19'),
    ('Caldwell', 'Isabella', 'étudiant', 'isabella.caldwell', '1234567890123456789012345678', '19'),
    ('Noble', 'Olivia', 'étudiant', 'olivia.noble', 'letmein123456789012345678901', '19');

    -- Campus Pau
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupuis', 'Marie', 'Pilote', 'marie.pau', 'CodeHelp2024', 20),
    ('Lambert', 'Théo', 'Pilote', 'theo.pau', 'TutorTech21', 20),
-- Etudiants
    ('Holland', 'Logan', 'étudiant', 'logan.holland', 'password1234567890123456789012', '20'),
    ('Hardin', 'Mia', 'étudiant', 'mia.hardin', 'abcdef1234567890123456789012', '20'),
    ('Wiley', 'Liam', 'étudiant', 'liam.wiley', 'qwertyuiop123456789012345678', '20'),
    ('Britt', 'Avery', 'étudiant', 'avery.britt', '12345678901234567890123456789', '20'),
    ('Armstrong', 'Harper', 'étudiant', 'harper.armstrong', 'letmein1234567890123456789012', '20');

    -- Campus Reins
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Leclerc', 'Louis', 'Pilote', 'louis.leclerc', 'BrestEdu2024', 21),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.roussel', 'TutorWave', 21),
-- Etudiants
    ('Sawyer', 'Noah', 'étudiant', 'noah.sawyer', 'password12345678901234567890123', '21'),
    ('Whitley', 'Sophia', 'étudiant', 'sophia.whitley', 'abcdef12345678901234567890123', '21'),
    ('Hanna', 'Ethan', 'étudiant', 'ethan.hanna', 'qwertyuiop1234567890123456789', '21'),
    ('Mcclain', 'Isabella', 'étudiant', 'isabella.mcclain', '123456789012345678901234567890', '21'),
    ('Higgins', 'Olivia', 'étudiant', 'olivia.higgins', 'letmein12345678901234567890123', '21');

    -- Campus Rouen
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Dupuis', 'Hugo', 'Pilote', 'hugo.dupuis', 'CaenTutoring', 22),
    ('Lambert', 'Manon', 'Pilote', 'manon.lambert', 'LearnCaen21', 22),
-- Etudiants
    ('Floyd', 'Logan', 'étudiant', 'logan.floyd', 'password123456789012345678901234', '22'),
    ('Hood', 'Mia', 'étudiant', 'mia.hood', 'abcdef123456789012345678901234', '22'),
    ('Diaz', 'Liam', 'étudiant', 'liam.diaz', 'qwertyuiop1234567890123456789', '22'),
    ('Preston', 'Avery', 'étudiant', 'avery.preston', '123456789012345678901234567890', '22'),
    ('Blanchard', 'Harper', 'étudiant', 'harper.blanchard', 'letmein123456789012345678901234', '22');

    -- Campus Saint-Nazaire
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Leclerc', 'Louis', 'Pilote', 'louis.saintnazaire', 'BrestEdu2024', 23),
    ('Roussel', 'Juliette', 'Pilote', 'juliette.saintnazaire', 'TutorWave', 23),
-- Etudiants
    ('Haley', 'Noah', 'étudiant', 'noah.haley', 'password1234567890123456789012345', '23'),
    ('Daugherty', 'Sophia', 'étudiant', 'sophia.daugherty', 'abcdef1234567890123456789012345', '23'),
    ('Odom', 'Ethan', 'étudiant', 'ethan.odom', 'qwertyuiop12345678901234567890', '23'),
    ('Pittman', 'Isabella', 'étudiant', 'isabella.pittman', '1234567890123456789012345678901', '23'),
    ('Wall', 'Olivia', 'étudiant', 'olivia.wall', 'letmein1234567890123456789012345', '23');

    -- Campus Strasbourg
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Lucie', 'Pilote', 'lucie.strasbourg', 'DijonEduPass', 24),
    ('Dubois', 'Thomas', 'Pilote', 'thomas.strasbourg', 'TutorDijon123', 24),
-- Etudiants
    ('Dickerson', 'Logan', 'étudiant', 'logan.dickerson', 'password12345678901234567890123456', '24'),
    ('Leach', 'Mia', 'étudiant', 'mia.leach', 'abcdef12345678901234567890123456', '24'),
    ('Skinner', 'Liam', 'étudiant', 'liam.skinner', 'qwertyuiop123456789012345678901', '24'),
    ('Hendricks', 'Avery', 'étudiant', 'avery.hendricks', '12345678901234567890123456789012', '24'),
    ('Hooper', 'Harper', 'étudiant', 'harper.hooper', 'letmein12345678901234567890123456', '24');

    -- Campus Toulouse
INSERT INTO Users (userLastName, userFirstName, userStatus, userLogin, userPassword, cityID) VALUES
-- Pilotes
    ('Martin', 'Sophie', 'Pilote', 'sophie.toulouse', 'TutorPass123', 25),
    ('Leroy', 'Camille', 'Pilote', 'camille.toulouse', 'SeaSkills456', 25),
-- Etudiants
    ('Gill', 'Noah', 'étudiant', 'noah.gill', 'password123456789012345678901234567', '25'),
    ('Combs', 'Sophia', 'étudiant', 'sophia.combs', 'abcdef123456789012345678901234567', '25'),
    ('Valencia', 'Ethan', 'étudiant', 'ethan.valencia', 'qwertyuiop1234567890123456789012', '25'),
    ('House', 'Isabella', 'étudiant', 'isabella.house', '123456789012345678901234567890123', '25'),
    ('Burnett', 'Olivia', 'étudiant', 'olivia.burnett', 'letmein123456789012345678901234567', '25');

-- Peuplement de la table Classes
INSERT INTO Classes (className) VALUES
	('CPI-A1'),
    ('CPI-A2_Generaliste'),
    ('CPI-A2_Informatique'),
    ('CPI-A2_BTP'),
    ('CPI-A2_SystemesEmbarques'),
    ('FISE-A3_Generaliste'),
    ('FISE-A3_Informatique'),
    ('FISE-A3_BTP'),
    ('FISE-A3_SystemesEmbarques'),
	('FISE-A4_Generaliste'),
    ('FISE-A4_Informatique'),
    ('FISE-A4_BTP'),
    ('FISE-A4_SystemesEmbarques'),
	('FISE-A5_Generaliste'),
    ('FISE-A5_Informatique'),
    ('FISE-A5_BTP'),
    ('FISE-A5_SystemesEmbarques');


-- Peuplement de la table Skills
INSERT INTO Skills (skill) VALUES 
	('Esprit d''analyse'),
    ('Rigueur'),
    ('Sens de l''organisation'),
	('Prise d''initiative et leadership'),
    ('Communication et qualités relationnelles'),
    ('Autonomie et esprit d''équipe'),
	('Expertise'), ('Gestion du stress'),
    ('Programmation (Java, Python, C++)'),
	('Conception de bases de données'),
    ('Gestion de projets'),
    ('Analyse des systèmes'),
	('Maîtrise des outils de développement (IDE, Git)'),
    ('Connaissances en réseaux et sécurité'),
    ('Compétences en génie civil (pour le BTP)'),
	('Automatisation et robotique'),
    ('Maîtrise des langages web (HTML, CSS, JavaScript)'),
    ('Connaissances en systèmes embarqués');


-- Peuplement de la table Companies
insert into Companies (companyName, activityArea, visibility) values
('D''Amore and Sons', 'Termite Control', false),
('Goyette-Schumm', 'Electrical', false),
('Howell Group', 'Drywall & Acoustical (MOB)', true),
('Jacobson Inc', 'Rebar & Wire Mesh Install', true),
('Nicolas, Bailey and Blick', 'Exterior Signage', true),
('Miller, Bradtke and Greenfelder', 'Electrical and Fire Alarm', true),
('Dare, D''Amore and Krajcik', 'Waterproofing & Caulking', false),
('McLaughlin-Champlin', 'Framing (Steel)', false),
('Blick LLC', 'Doors, Frames & Hardware', true),
('Volkman Group', 'Epoxy Flooring', true),
('Simonis, Crist and MacGyver', 'Termite Control', true),
('Bosco-Ullrich', 'Hard Tile & Stone', false),
('Altenwerth-Lubowitz', 'Plumbing & Medical Gas', true),
('Smitham Inc', 'Soft Flooring and Base', false),
('Blick LLC', 'Casework', false),
('Runte LLC', 'HVAC', false),
('Kessler, Rau and Beier', 'Painting & Vinyl Wall Covering', false),
('McLaughlin, Lowe and Fay', 'Rebar & Wire Mesh Install', false),
('Cummerata-Farrell', 'Temp Fencing, Decorative Fencing and Gates', true),
('Rolfson, Quigley and Hauck', 'Framing (Steel)', true),
('Mayert LLC', 'Drywall & Acoustical (FED)', true),
('Collins Group', 'Fire Sprinkler System', true),
('Sporer-Kessler', 'Electrical and Fire Alarm', false),
('Rohan Inc', 'Drywall & Acoustical (FED)', true),
('Wehner, Heller and Stokes', 'Framing (Wood)', true),
('Schimmel-Hermiston', 'Curb & Gutter', true),
('Schuster, Gibson and O''Hara', 'Termite Control', true),
('Rogahn-Daniel', 'Structural & Misc Steel Erection', false),
('Aufderhar-Reilly', 'Masonry & Precast', false),
('Klein, Prosacco and Wiegand', 'Rebar & Wire Mesh Install', true),
('Wolf-Mann', 'HVAC', true),
('Haley-O''Hara', 'Elevator', true),
('O''Conner, Lynch and Roob', 'Drilled Shafts', false),
('Metz-Sipes', 'Structural & Misc Steel Erection', false),
('Rolfson, Hagenes and D''Amore', 'Wall Protection', true),
('Stehr, Kessler and Wilkinson', 'Prefabricated Aluminum Metal Canopies', false),
('Marquardt Group', 'Termite Control', true),
('Carter LLC', 'Overhead Doors', true),
('Olson-Daugherty', 'Soft Flooring and Base', false),
('Cruickshank LLC', 'Fire Sprinkler System', false),
('Lubowitz, Emmerich and Skiles', 'Rebar & Wire Mesh Install', true),
('Emmerich and Sons', 'Plumbing & Medical Gas', false),
('Nolan-Kuvalis', 'Granite Surfaces', true),
('Nienow and Sons', 'Framing (Wood)', true),
('Witting and Sons', 'Elevator', false),
('Moen-Turner', 'Electrical and Fire Alarm', false),
('Johnson, Maggio and Reichel', 'Prefabricated Aluminum Metal Canopies', true),
('Heidenreich-Quitzon', 'Masonry', false),
('Watsica-Torp', 'Soft Flooring and Base', true),
('Lehner, Mills and Mosciski', 'Rebar & Wire Mesh Install', true),
('Berge-Crona', 'Prefabricated Aluminum Metal Canopies', true),
('Schamberger, Cruickshank and Johns', 'Roofing (Asphalt)', false),
('Kuhlman Group', 'Elevator', true),
('Weissnat, Ondricka and Kreiger', 'Drilled Shafts', true),
('Goyette, Bernier and Langosh', 'Temp Fencing, Decorative Fencing and Gates', false),
('Lindgren, White and Schamberger', 'Drilled Shafts', false),
('Corkery LLC', 'Asphalt Paving', false),
('Toy-Hand', 'Painting & Vinyl Wall Covering', false),
('Marvin-Larson', 'EIFS', false);


-- Peuplement de la table Addresses
INSERT INTO `Addresses` VALUES
(1,'Way 2nd',0,36,5),
(2,'Parkway Drewry',11032,52,11),
(3,'Road Texas',93,20,24),
(4,'Plaza Hanson',7,23,22),
(5,'Center Magdeline',9454,49,11),
(6,'Trail Kedzie',5586,2,20),
(7,'Street Surrey',179,44,9),
(8,'Plaza Shasta',970,13,21),
(9,'Street Jackson',8,30,25),
(10,'Avenue Raven',26,46,24),
(11,'Drive Thierer',7560,3,25),
(12,'Trail Cordelia',40,39,19),
(13,'Terrace Dapin',1,37,13),
(14,'Center Towne',6,13,3),
(15,'Place 1st',0,22,25),
(16,'Circle Northland',8285,8,12),
(17,'Center Lakewood',7,11,9),
(18,'Place Briar Crest',67,17,24),
(19,'Terrace Bluejay',77,55,25),
(20,'Drive Kingsford',19355,33,14),
(21,'Lane Pleasure',69,15,4),
(22,'Place Hoffman',73,50,2),
(23,'Place Columbus',187,10,25),
(24,'Crossing Claremont',1,51,1),
(25,'Plaza Clarendon',351,51,4),
(26,'Crossing Sauthoff',56,17,7),
(27,'Terrace Dwight',5,10,7),
(28,'Lane Karstens',163,3,23),
(29,'Place Starling',1,25,2),
(30,'Parkway John Wall',5,34,1),
(31,'Plaza Jackson',7065,41,2),
(32,'Court Laurel',2264,57,21),
(33,'Street Montana',497,14,13),
(34,'Center Mandrake',9492,3,24),
(35,'Terrace Havey',64,44,3),
(36,'Trail Laurel',6,37,18),
(37,'Street Messerschmidt',7578,33,25),
(38,'Court Leroy',130,35,25),
(39,'Court Thierer',5586,36,12),
(40,'Place Marquette',6615,37,1),
(41,'Parkway Paget',28,57,2),
(42,'Center Nevada',204,21,15),
(43,'Avenue Butterfield',55,38,23),
(44,'Drive Oxford',13716,50,22),
(45,'Center Utah',4,27,9),
(46,'Plaza Kingsford',8986,27,24),
(47,'Road Nobel',77,12,23),
(48,'Hill Toban',2912,30,11),
(49,'Avenue Dryden',5,55,23),
(50,'Parkway Bashford',48,19,25),
(51,'Circle Lukken',21,9,22),
(52,'Alley Thackeray',28,28,21),
(53,'Junction Erie',4,28,22),
(54,'Junction Namekagon',23253,59,22),
(55,'Center Brentwood',7,17,18),
(56,'Court Green',3202,45,19),
(57,'Way Bultman',33,13,9),
(58,'Circle Alpine',449,30,5),
(59,'Parkway Transport',66,1,6),
(60,'Point Barnett',33,57,16),
(61,'Parkway Veith',99,23,14),
(62,'Parkway Clove',10770,59,20),
(63,'Center Donald',1099,27,10),
(64,'Trail Mosinee',94,35,9),
(65,'Circle Melody',655,20,10),
(66,'Trail Bluestem',11,32,1),
(67,'Terrace Kings',76,15,25),
(68,'Road Shopko',3,37,19),
(69,'Junction Lakewood Gardens',29019,13,19),
(70,'Park Crest Line',72,26,25),
(71,'Plaza Sundown',715,58,7),
(72,'Road Acker',81,42,21),
(73,'Alley Summerview',817,10,23),
(74,'Circle 3rd',505,9,18),
(75,'Terrace Northland',38,12,9),
(76,'Trail Dovetail',1,38,9),
(77,'Place David',402,22,11),
(78,'Alley Emmet',540,56,13),
(79,'Street Superior',6930,34,13),
(80,'Center Gale',4693,54,11),
(81,'Street Gerald',729,46,3),
(82,'Circle Laurel',8,40,25),
(83,'Way Farmco',6977,14,7),
(84,'Point Union',846,20,21),
(85,'Terrace Main',18723,39,18),
(86,'Pass Chive',9,48,8),
(87,'Center Kinsman',9,11,15);


-- Peuplement de la table Offers
insert into Offers (internDuration, publicationDate, placesNumber, remunerationBasis, addressID) values
(1, '2018/12/04', 9, 1570, 45),
(2, '2023/07/22', 9, null, 17),
(3, '2021/09/22', 2, 1310, 72),
(4, '2024/01/12', 3, 1170, 84),
(5, '2024/02/26', 3, null, 76),
(6, '2019/05/01', 8, null, 62),
(7, '2021/02/27', 7, null, 35),
(8, '2022/08/09', 9, null, 102),
(9, '2022/05/20', 4, 1640, 35),
(10, '2019/08/31', 10, 1290, 57),
(11, '2018/08/11', 2, null, 103),
(12, '2021/11/06', 8, 1150, 53),
(13, '2022/12/12', 3, null, 106),
(14, '2024/02/08', 2, null, 52),
(15, '2024/02/20', 2, 1300, 101),
(16, '2021/12/10', 2, null, 65),
(17, '2023/10/20', 2, 1220, 60),
(18, '2021/05/19', 7, null, 94),
(19, '2018/12/30', 6, null, 11),
(20, '2019/06/19', 3, null, 106),
(21, '2023/01/06', 4, null, 54),
(22, '2020/12/06', 9, 1030, 16),
(23, '2017/10/16', 10, 850, 4),
(24, '2018/05/25', 3, null, 25),
(25, '2019/08/27', 5, null, 57),
(26, '2018/08/01', 2, null, 66),
(27, '2022/10/10', 8, null, 21),
(28, '2022/06/23', 3, null, 21),
(29, '2021/10/20', 8, 1100, 91),
(30, '2021/11/05', 4, 1560, 99),
(31, '2018/05/04', 2, 1260, 100),
(32, '2019/03/22', 4, 1250, 19),
(33, '2017/11/29', 8, null, 74),
(34, '2018/07/24', 9, 660, 49),
(35, '2022/03/21', 3, null, 84),
(36, '2018/04/10', 4, 950, 100),
(37, '2020/08/18', 3, 1190, 90),
(38, '2021/07/26', 5, null, 11),
(39, '2024/01/10', 5, null, 99),
(40, '2020/04/19', 2, null, 11);