-- Permet d'incrémenter les ID city à partir de 1 car il arrive qu'il y ai un problème et que ces ID commencent à 0 !

SET @counter = 0;
UPDATE cities
SET cityID = (@counter := @counter + 1);