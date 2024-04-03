/*_________________________________________________________________________________________*/
/*						Création d'un utilisateur pour la base de données				   */
/*_________________________________________________________________________________________*/


GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, FILE, INDEX, ALTER, CREATE TEMPORARY TABLES, 
EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER 
 ON *.* TO `merge_connect`@`%` IDENTIFIED BY PASSWORD '*3EEB5F56929DA1871AF6FDAB1ED87504E3BA65E3';
 
GRANT ALL PRIVILEGES ON `mergedatabase`.* TO `merge_connect`@`%`;