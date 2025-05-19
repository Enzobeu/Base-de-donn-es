INSERT INTO
	dinobase.periode (nom_periode)
VALUES
	('Trias'),
	('Jurassique'),
	('Crétacé'),
	('Permien');
	
INSERT INTO
	dinobase.regime_alimentaire (type_regime)
VALUES
	('Carnivore'),
	('Herbivore'),
	('Omnivore');

INSERT INTO dinobase.espece (nom_espece,type_espece,poids_moyen,longueur_moyenne,description_espece,img_espece,id_periode,id_regime) VALUES
	 ('Stegosaurus','Dinosaure',2500,9,'Un dinosaure herbivore avec des plaques dorsales','https://www.dino-zoo.com/templates/yootheme/cache/Stegosaurus-20aefa5a.webp',2,2),
	 ('Ankylosaurus','Dinosaure',4000,6,'Un dinosaure herbivore avec une armure osseuse','https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/202007_Ankylosaurus_magniventris.svg/640px-202007_Ankylosaurus_magniventris.svg.png',3,2),
	 ('Dimetrodon','Reptile mammalien',200,3,'Un Reptile mammalien à voile du Permien','https://www.dododex.com/media/creature/dimetrodon.png',4,3),
	 ('Spinosaurus','Dinosaure',7000,15,'Un grand dinosaure carnivore à voile','https://cdn.paleo.gg/games/jwe/images/dino/spinosaurus.png',3,1),
	 ('Edmontosaurus','Dinosaure',4000,12,'Un dinosaure herbivore à bec de canard','https://image-service.zaonce.net/eyJidWNrZXQiOiJmcm9udGllci1jbXMiLCJrZXkiOiIyMDIxLTExL2VkbW9udG9zYXVydXNfMjQ1MjA0LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDAwfX19',3,2),
	 ('Brontosaurus','Dinosaure',20000,22,'Un immense dinosaure herbivore à long cou','https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Brontosaurus.png/640px-Brontosaurus.png',2,2),
	 ('Triceratops','Dinosaure',8000,9,'Un dinosaure herbivore avec trois cornes','https://cdn.pixabay.com/photo/2023/02/19/21/46/triceratops-7801109_1280.png',3,2),
	 ('Velociraptor','Dinosaure',15,2,'Un petit dinosaure carnivore à griffes en forme de faucille','https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Velociraptor_recon.png/640px-Velociraptor_recon.png',3,1),
	 ('Deinonychus','Dinosaure',70,3,'Un dinosaure carnivore intelligent et agile','https://image-service.zaonce.net/eyJidWNrZXQiOiJmcm9udGllci1jbXMiLCJrZXkiOiIyMDIxLTExL2RlaW5vbnljaHVzXzI0OTc1OC5wbmciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjQwMH19fQ==',3,1),
	 ('Compsognathus','Dinosaure',3,1,'Un petit dinosaure carnivore','https://cdn.paleo.gg/games/jwe/images/dino/compsognathus.png',2,1);
INSERT INTO dinobase.espece (nom_espece,type_espece,poids_moyen,longueur_moyenne,description_espece,img_espece,id_periode,id_regime) VALUES
	 ('Tyrannosaurus rex','Dinosaure',7000,12,'Un grand dinosaure carnivore','https://www.dino-zoo.com/templates/yootheme/cache/Tyrannosaurus-rex-e62d5ff5.webp',3,1),
	 ('Utahraptor','Dinosaure',500,7,'Un grand dinosaure carnivore à griffes en forme de faucille','https://image-service.zaonce.net/eyJidWNrZXQiOiJmcm9udGllci1jbXMiLCJrZXkiOiIyMDIzLTExL2RsYzhfZGlub3NhdXJfbGFyZ2VkaW5vc2F1cnNfbGFyZ2VfdXRhaHJhcHRvci5wbmciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjQwMH19fQ==',3,1),
	 ('Baryonyx','Dinosaure',1750,10,'Un dinosaure carnivore à griffes en forme de crochet','https://static.wikia.nocookie.net/jurassicpark/images/8/8a/1440x651_0012_baryonyx.png',3,1),
	 ('Apatosaurus','Dinosaure',30000,22,'Un immense dinosaure herbivore à long cou','https://cdn.paleo.gg/games/jwe/images/dino/apatosaurus.png',2,2),
	 ('Brachiosaurus','Dinosaure',70000,25,'Un des plus grands dinosaures herbivores','https://cdn.paleo.gg/games/jwe/images/dino/brachiosaurus.png',2,2),
	 ('Diplodocus','Dinosaure',15000,33,'Un dinosaure herbivore à long cou et à longue queue','https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/202005_Diplodocus_carnegii.png/640px-202005_Diplodocus_carnegii.png',2,2),
	 ('Parasaurolophus','Dinosaure',2500,10,'Un dinosaure herbivore à crête creuse','https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Parasaurolophus_UDL.png/640px-Parasaurolophus_UDL.png',3,2),
	 ('Pachycephalosaurus','Dinosaure',450,2,'Un dinosaure herbivore avec un crâne épais','https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Pachycephalosaurus_UDL.png/640px-Pachycephalosaurus_UDL.png',3,2),
	 ('Plesiosaurus','Reptile marin',15000,15,'Un grand reptile marin carnivore','https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/202006_Plesiosaurus_dolichodeirus.png/640px-202006_Plesiosaurus_dolichodeirus.png',2,1),
	 ('Mosasaurus','Reptile marin',15000,17,'Un grand reptile marin carnivore','https://static.wikia.nocookie.net/jurassicpark/images/8/8d/Mosasaurus_%282%29.png',3,1);
INSERT INTO dinobase.espece (nom_espece,type_espece,poids_moyen,longueur_moyenne,description_espece,img_espece,id_periode,id_regime) VALUES
	 ('Liopleurodon','Reptile marin',250,6,'Un très gransd reptile marin carnivore','https://image-service.zaonce.net/eyJidWNrZXQiOiJmcm9udGllci1jbXMiLCJrZXkiOiIyMDIxLTExL2xpb3BsZXVyb2Rvbl8yNzk5NTAucG5nIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0MDB9fX0=',2,1),
	 ('Shonisaurus','Reptile marin',20000,15,'Un grand reptile marin herbivore','https://nixillustration.com/wp-content/uploads/2019/12/shonisaurus.png',1,2),
	 ('Pteranodon','Reptile volant',20,3,'Un reptile volant insectivore','https://www.dino-zoo.com/templates/yootheme/cache/Pteranodon-b6afc1da.webp',3,3),
	 ('Quetzalcoatlus','Reptile volant',250,11,'Un des plus grands reptiles volants','https://cdn.paleo.gg/games/jwe2/images/dino/quetzalcoatlus.png',3,3),
	 ('Dimorphodon','Reptile volant',1,1,'Un petit reptile volant insectivore','https://cdn.paleo.gg/games/jwe2/images/dino/dimorphodon.png',1,3),
	 ('Rhamphorhynchus','Reptile volant',2,2,'Un reptile volant piscivore','https://static.wikia.nocookie.net/dino/images/a/a1/5925555_orig.png',2,3),
	 ('Edaphosaurus','Reptile mammalien',300,3,'Un Reptile mammalien herbivore à voile du Permien','https://64.media.tumblr.com/6c1a1cf7b426927a8a2429aa9940867e/4057330533e944bb-c9/s1280x1920/48480d98e1b0a104b1a722f4ba870d552c8c225a.pnj',4,2),
	 ('Lystrosaurus','Reptile mammalien',20,1,'Un petit Reptile mammalien herbivore à large crâne du Permien','https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/202012_Lystrosaurus.svg/640px-202012_Lystrosaurus.svg.png',4,2),
	 ('Sphenacodon','Reptile mammalien',100,2,'Un Reptile mammalien carnivore du Permien','https://static.wikia.nocookie.net/zt2downloadlibrary/images/4/4f/Sphenacodon_%28Bunyupy%29.png',4,1),
	 ('Varanops','Reptile mammalien',20,1,'Un petit Reptile mammalien carnivore du Permien','https://pofoto.club/uploads/posts/2023-11/1699309062_pofoto-club-p-varanops-68.png',4,1);
INSERT INTO dinobase.espece (nom_espece,type_espece,poids_moyen,longueur_moyenne,description_espece,img_espece,id_periode,id_regime) VALUES
	 ('Ophiacodon','Reptile mammalien',50,2,'Un Reptile mammalien carnivore du Permien','https://static.wikia.nocookie.net/jurassic-world-alive/images/e/ef/JWA_PressKit_Ophiacodon.png',4,1),
	 ('Elasmosaurus','Reptile marin',450,12,'Un reptile marin dont le cou pouvait mesurer jusqu''à 7,5 mètres.','https://cdn.paleo.gg/games/jwe2/images/dino/elasmosaurus.png',3,1);

INSERT INTO
	dinobase.fossile (
		id_espece,
		date_decouverte,
		lieu_decouverte,
		description_fossile
	)
VALUES
	(
		1,
		'1877-01-01',
		'Colorado, USA',
		'Squelette complet avec des plaques dorsales bien conservées'
	),
	(
		1,
		'1922-05-15',
		'Wyoming, USA',
		'Crâne et plaques dorsales fragmentaires'
	),
	(
		2,
		'1908-10-24',
		'Alberta, Canada',
		'Squelette complet avec une armure osseuse bien conservée'
	),
	(
		2,
		'1947-07-08',
		'Montana, USA',
		'Crâne et armure osseuse fragmentaires'
	),
	(
		7,
		'1889-07-20',
		'Wyoming, USA',
		'Crâne complet avec trois cornes bien conservées'
	),
	(
		7,
		'1993-04-12',
		'Montana, USA',
		'Squelette partiel avec des cornes fragmentaires'
	),
	(
		11,
		'1902-05-14',
		'Montana, USA',
		'Squelette partiel avec un crâne bien conservé'
	),
	(
		11,
		'1991-08-21',
		'Dakota du Sud, USA',
		'Dents et fragments de mâchoire'
	),
	(
		8,
		'1924-06-03',
		'Mongolie',
		'Squelette complet avec des griffes en forme de faucille bien conservées'
	),
	(
		8,
		'1993-10-11',
		'Chine',
		'Crâne et membres fragmentaires'
	),
	(
		9,
		'1964-08-15',
		'Montana, USA',
		'Squelette partiel avec des griffes en forme de faucille bien conservées'
	),
	(
		9,
		'1974-02-25',
		'Wyoming, USA',
		'Crâne et membres fragmentaires'
	),
	(
		19,
		'1824-09-01',
		'Angleterre',
		'Squelette complet bien conservé'
	),
	(
		19,
		'1998-03-07',
		'France',
		'Crâne et membres fragmentaires'
	),
	(
		20,
		'1822-10-12',
		'Pays-Bas',
		'Squelette partiel avec un crâne bien conservé'
	),
	(
		20,
		'1987-11-23',
		'Belgique',
		'Dents et fragments de mâchoire'
	);