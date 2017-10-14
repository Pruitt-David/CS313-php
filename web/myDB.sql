CREATE TABLE character
(
    id SERIAL PRIMARY KEY NOT NULL, 
    Name VARCHAR(80) NOT NULL, 
    Class VARCHAR(80) NOT NULL, 
    Level INT NOT NULL, 
    Race VARCHAR(80) NOT NULL, 
    Alignment VARCHAR(80) NOT NULL
);

CREATE TABLE Ability
(
    CharacterID int references character(id), 
    STR int NOT NULL,
    DEX int NOT NULL,
    CON int NOT NULL,
    INTE int NOT NULL,
    WIS int NOT NULL,
    CHA int NOT NULL
);

CREATE TABLE Skill
(
    id SERIAL PRIMARY KEY NOT NULL, 
    Arcrobatics INT,
    Animal_Handling INT,
    Arcana INT,
    Athletics INT,
    Deception INT,
    History INT,
    Insight INT,
    Intimidation INT,
    Investigation INT,
    Medicine INT,
    Nature INT,
    Perception INT,
    Performance INT,
    Persuasion INT,
    Religion INT,
    Sleight_of_Hand INT,
    Stealth INT,
    Survival INT
);


CREATE TABLE Stats
(
    id SERIAL PRIMARY KEY NOT NULL,    
    Hitdie int NOT NULL,
    speed int NOT NULL
);

CREATE TABLE Equipment
(
    id SERIAL PRIMARY KEY NOT NULL,    
    Weapon_Name VARCHAR(80),
    Weapon_Damage int,
    Weapon_Damage_Type VARCHAR(80),
    ARMOR_Name  VARCHAR(80),
    armor_class int,
    money int
);

CREATE TABLE Saves(
    id SERIAL PRIMARY KEY NOT NULL,
    STR BOOL,
    DEX BOOL,
    CON BOOL
    INTE BOOL,
    WIS BOOL,
    CHA BOOL    
);

CREATE TABLE Proficiencies
(
    id SERIAL PRIMARY KEY NOT NULL,
    Profiency_Bonus int,
    Arcrobatics BOOL,
    Animal_Handling BOOL,
    Arcana BOOL,
    Athletics BOOL,
    Deception BOOL,
    History BOOL,
    Insight BOOL,
    Intimidation BOOL,
    Investigation BOOL,
    Medicine BOOL,
    Nature BOOL,
    Perception BOOL,
    Performance BOOL,
    Persuasion BOOL,
    Religion BOOL,
    Sleight_of_Hand BOOL,
    Stealth BOOL,
    Survival BOOL
);