Use mergeDatabase;

Drop table if exists Skills;
Drop table if exists Classes;
Drop table if exists Cities;
Drop table if exists Companies;

Drop table if exists Users; -- need before delete : Cities

Drop table if exists Addresses; -- need before delete : Companies, Cities

Drop table if exists Offers; -- need before delete : Addresses 
													-- (extend delete : Companies, Cities)
Drop table if exists Evaluations; -- need before delete : Companies, Users 
													-- (extend delete : Cities)
Drop table if exists UserClass; -- need before delete : Users, Classes 
													-- (extend delete : Cities)
Drop table if exists SkillOffer; -- need before delete : Skills, Offers 
													-- (extend delete : Addresses, Companies, Cities)
Drop table if exists WishList; -- need before delete : Users, Offers 
													-- (extend delete : Cities, Companies, Cities)
Drop table if exists Candidatures; -- need before delete : Users, Offers 
													-- (extend delete : Cities, Companies, Cities)