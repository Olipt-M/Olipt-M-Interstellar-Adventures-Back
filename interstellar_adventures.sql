USE interstellar_adventures;

/* Table climates : */

INSERT INTO climates (name)
VALUES 
('polaire'), ('désertique'), ('océanique'), ('montagneux'), ('subtropical'), ('tropical'),
('volcanique'), ('continental'), ('équatorial'), ('arctique'), ('tempéré'), ('tempêtueux'), ('artificiel');


/* Table planets : */

INSERT INTO planets (climate_id, name, picture, system, distance_from_earth, capital, date_colonization, nb_inhabitants)
VALUES 
(2,'Andromeda', 'andromeda.jpg', 'Nébuleuse de la Tête de cheval', '1,2 années-lumières', 'Eos', 2004, 2300000),
(3, 'Atlantia', 'atlantia.jpg', 'Epsilon Eridani', '1800 années-lumières', 'Thessia', 1998, 20000000),
(12, 'Vénus', 'venus.jpg', 'Système solaire', '41,40 millions de km', 'Gilette', NULL, NULL),
(7, 'Nova Prime', 'nova-prime.jpg', 'Nébuleuse du Phoenix', '0,74 année-lumière', NULL, NULL, NULL),
(11, 'Verdantix', 'verdantix.jpg', 'Gliese 581', '20.3 années-lumières', NULL, NULL, NULL),
(8, 'Mars', 'mars.png', 'Système solaire', '78,34 millions de km', 'Nozomi', 1984, 1690000000),
(4, 'Zenithar', 'zenithar.jpg', 'Nébuleuse du Griffon', '726 années-lumières', 'Nirvana', 1999, 1600000),
(5, 'Lyra', 'lyra.jpg', 'Constellation de la Lyre', '61 années-lumières', 'Lyrakil', 2019, 23600),
(1, 'Aria', 'aria.jpg', 'Étoile d''Éridan', '1600 années-lumières', NULL, NULL, NULL),
(13, 'Illium', 'illium.jpg', 'Planète Errante', '15,8 années-lumières', 'Novus', 2007, 240000000),
(10, 'Ombria', 'ombria.jpeg', 'Nébuleuse de l''Éclipse', '20 années-lumières', 'Umbra', 2001, 2400000),
(13, 'Centaurus Prime', 'centaurus-prime.jpg', 'Constellation du Centaure', '1,8 années-lumières', NULL, 2007, 3500000),
(3, 'Eolys', 'eolys.jpg', 'Voie des Arcanes', '17 années-lumières', NULL, NULL, NULL),
(9, 'Astrum', 'astrum.jpg', 'Constellation de la Balance', '1900 années-lumières', NULL, NULL, 10),
(11, 'Aetherium', 'aetherium.jpg', 'Nébuleuse de la Licorne', '15 années-lumières', 'Etherea', 2012, 2100000),
(3, 'Hydros', 'hydros.jpg', 'Eta Cassiopeiae', '150 années-lumières', 'Aquatica', 2020, 11480),
(11, 'Terravale', 'terravale.jpg', 'Beta Hydri', '106 années-lumières', 'Valence', 2011, 2000000),
(3, 'Luminara', 'luminara.jpg', 'Étoile d''Aurora', '180 années-lumières', NULL, NULL, NULL),
(2, 'Rannoch', 'rannoch.jpeg', 'Nébuleuse du Léviathan', '1200 années-lumières', NULL, NULL, NULL),
(5, 'Moshae', 'moshae.jpg', 'Lalande 21185', '8 années-lumières', 'Hôi An', 2009, 223000),
(12, 'Pyrrha', 'pyrrha.jpg', 'Alpha Centauri', '4 années-lumières', NULL, NULL, NULL),
(3, 'Serenica', 'serenica.jpg', 'Epsilon Eridani', '10 années-lumières', 'Serenity', 2019, 46300),
(1, 'Novéria', 'noveria.jpeg', 'Wolf 1061', '14 années-lumières', 'Station de recherche', 2015, 9851);


/* Table journey_types : */

INSERT INTO journey_types (name, base_price) 
VALUES 
('Vol commercial', 2000),
('Croisière', 2000),    
('Colonisation', 25000);

/* Table planets_journey_types : */

INSERT INTO planets_journey_types (planet_id, journey_type_id)
VALUES 
(1,1),(1,3),(2,1),(2,2),(2,3),(3,2),(4,2),(5,2),(5,3),(6,1),(7,3),
(8,2),(8,3),(9,3),(10,1),(11,1),(11,2),(11,3),(12,1),(13,2),(14,3),(15,1),(15,2),
(16,1),(16,2),(16,3),(17,3),(18,2),(19,3),(20,1),(20,2),(20,3),
(21,2),(22,3),(23,1);


/* Table ships : */

INSERT INTO ships (journey_type_id, name, picture, coeff_price) 
VALUES 
(1, 'Voyager Infini', 'ship-commercial-eco.webp', 1),
(1, 'Horizon Astral', 'ship-commercial-standard.jpg', 2),
(1, 'Nébuleuse Argentée', 'ship-commercial-premium.jpg', 4),
(2, 'Galion Galactique', 'ship-croisiere-eco.jpg', 1),
(2, 'Astrolabe Stellaire', 'ship-croisiere-standard.jpg', 1.5),
(2, 'Nova Luminosa', 'ship-croisiere-premium.jpg', 2),
(3, 'Phoenix Céleste', 'ship-colonization-eco.webp', 1),
(3, 'Sérénité Galactique', 'ship-colonization-standard.jpg', 1.5),
(3, 'Vélocité Céleste', 'ship-colonization-premium.jpg', 2);