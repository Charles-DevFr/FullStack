DROP DATABASE IF EXISTS TheDistrict;

CREATE DATABASE TheDistrict;

USE TheDistrict;

CREATE TABLE categorie (
id INT AUTO_INCREMENT PRIMARY KEY,
libelle VARCHAR(100) NOT NULL,
image VARCHAR(250) NOT NULL,
active VARCHAR(20) NOT NULl
);

INSERT INTO categorie (`id`, `libelle`, `image`, `active`) VALUES
(1, 'Burger', 'burger_cat.jpg', 'Yes'),
(2, 'Pizza', 'pizza_cat.jpg', 'Yes'),
(3, 'Wrap', 'wrap_cat.jpg', 'Yes'),
(4, 'Pasta', 'pasta_cat.jpg', 'Yes'),
(5, 'Asian', 'asian_food_cat.jpg', 'Yes'),
(6, 'Salade', 'salade_cat.jpg', 'Yes'),
(7, 'Platduterroir', 'Platduterroir_cat.jpg', 'Yes'),
(8, 'Boulangerie', 'sandwich_cat.jpg', 'Yes'),
(9, 'Snack', 'Snack_cat.jpg', 'Yes'),
(10, 'Veggie', 'veggie_cat.jpg', 'Yes'),
(11, 'Dessert', 'Dessert_cat.jpg', 'Yes'),
(12, 'Fromage', 'Fromage_cat.jpg', 'Yes');

CREATE TABLE plat (
id INT AUTO_INCREMENT PRIMARY KEY,
libelle VARCHAR(100) NOT NULL,
description TEXT NOT NULL,
prix DECIMAL(10,2) NOT NULL,
image VARCHAR (500) NOT NULL,
id_categorie INT NOT NULL REFERENCES categorie (id),
active VARCHAR(10) NOT NULL
);

INSERT INTO plat (`id`, `libelle`, `description`, `prix`, `image`, `id_categorie`, `active`) VALUES
(1, 'Bo Bun Poulet', 'Un voyage culinaire au pays du soleil levant', '8.00', 'bo-bun-poulet.png', '5', 'Yes'),
(2, 'Boeuf LocLac', 'Un voyage culinaire au pays du soleil levant', '10.00', 'boeuf-loc-lac.png', '5', 'Yes'),
(3, 'Boeuf Oignons', 'Un voyage culinaire au pays du soleil levant', '8.50', 'boeuf-oignons.png', '5', 'Yes'),
(4, 'Chirachi Mixte', 'Un voyage culinaire au pays du soleil levant', '8.80', 'chirachi-mixte.png', '5', 'Yes'),
(5, 'Crevette sel poivre', 'Un voyage culinaire au pays du soleil levant', '8.40', 'crevettes-sel-poivre.png', '5', 'Yes'),
(6, 'Poulet aigre douce', 'Un voyage culinaire au pays du soleil levant', '8.80', 'poulet-aigre-douce.png', '5', 'Yes'),
(7, 'Poulet sauce piquante', 'Un voyage culinaire au pays du soleil levant', '8.20', 'poulet-sauce-piquante.png', '5', 'Yes'),
(8, 'Poulet sel poivre', 'Un voyage culinaire au pays du soleil levant', '8.40', 'poulet-sel-poivre.png', '5', 'Yes'),
(9, 'Burger 1', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '12.00', 'burger1.png', '1', 'Yes'),
(10, 'Burger 2', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '11.00', 'burger2.png', '1', 'Yes'),
(11, 'Burger 3', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '11.50', 'burger3.png', '1', 'Yes'),
(12, 'Burger 4', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '12.50', 'burger4.png', '1', 'Yes'),
(13, 'Burger 5', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '14.80', 'burger5.png', '1', 'Yes'),
(14, 'Burger 6', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '13.40', 'burger6.png', '1', 'Yes'),
(15, 'Burger 7', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '11.80', 'burger7.png', '1', 'Yes'),
(16, 'Burger 8', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '12.40', 'burger8.png', '1', 'Yes'),
(17, 'Créme brulée', 'Une touche sucrée pour conclure votre repas en beauté', '6.00', 'CrémeBrulée.jpg', '11', 'Yes'),
(18, 'Mousse au chocolat', 'Une touche sucrée pour conclure votre repas en beauté', '6.50', 'MousseChocolat.jpg', '11', 'Yes'),
(19, 'Tartelette au citron', 'Une touche sucrée pour conclure votre repas en beauté', '7.50', 'TarteletteCitron.jpg', '11', 'Yes'),
(20, 'Tiramisu', 'Une touche sucrée pour conclure votre repas en beauté', '7.00', 'Tiramisu.jpg', '11', 'Yes'),
(21, 'Profiteroles','Une touche sucrée pour conclure votre repas en beauté', '6.80','Profiteroles.jpg', '11', 'Yes'),
(22, 'Religieuse au chocolat', 'Une touche sucrée pour conclure votre repas en beauté', '5.80', 'ReligieuseChocolat.jpg', '11', 'Yes'),
(23, 'Tartelette à la fraise', 'Une touche sucrée pour conclure votre repas en beauté', '7.40', 'TarteletteFraise.jpg', '11', 'Yes'),
(24, 'Tartelette à la pomme', 'Une touche sucrée pour conclure votre repas en beauté', '7.20', 'TartelettePomme.jpg', '11', 'Yes'),
(25, 'Camenbert', 'Un voyage gustatif au cœur de la France', '2.50', 'Camenbert.jpg', '12', 'Yes'),
(26, 'Fromage de chévre', 'Un voyage gustatif au cœur de la France', '2.00', 'Chevre.jpg', '12', 'Yes'),
(27, 'Maroille', 'Un voyage gustatif au cœur de la France', '2.20', 'Maroille.jpg', '12', 'Yes'),
(28, 'Mimolette', 'Un voyage gustatif au cœur de la France', '2.10', 'Mimolette.jpg', '12', 'Yes'),
(29, 'Bleu', 'Un voyage gustatif au cœur de la France', '2.40', 'Bleu.jpg', '12', 'Yes'),
(30, 'Cantal', 'Un voyage gustatif au cœur de la France', '2.20', 'Cantal.jpg', '12', 'Yes'),
(31, 'Mozza', 'Un voyage gustatif au cœur de la France', '2.30', 'Mozza.jpg', '12', 'Yes'),
(32, 'Roquefort', 'Un voyage gustatif au cœur de la France', '2.60', 'Roquefort.jpg', '12', 'Yes'),
(33, 'Coquilette', 'Une symphonie italienne dans votre assiette', '4.00', 'Coquillette.jpg', '4', 'Yes'),
(34, 'Macaroni au fromage', 'Une symphonie italienne dans votre assiette', '4.20', 'MacaroniFromage.jpg', '4', 'Yes'),
(35, 'Spaghetti bolognaise', 'Une symphonie italienne dans votre assiette', '4.80', 'SpaghettiBolo.jpg', '4', 'Yes'),
(36, 'Tagliatelle au saumon', 'Une symphonie italienne dans votre assiette', '5.00', 'TagliatelleSaumon.jpg', '4', 'Yes'),
(37, 'Cannelloni', 'Une symphonie italienne dans votre assiette', '4.40', 'Cannelloni.jpg', '4', 'Yes'),
(38, 'Penne chorizo', 'Une symphonie italienne dans votre assiette', '4.40', 'PenneChorizo.jpg', '4', 'Yes'),
(39, 'Penne pesto', 'Une symphonie italienne dans votre assiette', '4.50', 'PennePesto.jpg', '4', 'Yes'),
(40, 'Spaghetti carbonara', 'Une symphonie italienne dans votre assiette', '4.60', 'SpaghettiCarbo.jpg', '4', 'Yes'),
(41, 'Calzone', 'Une symphonie de saveurs sur une pâte dorée', '12.00', 'calzone.jpg', '2', 'Yes'),
(42, 'Pizza raclette', 'Une symphonie de saveurs sur une pâte dorée', '14.40', 'raclette.jpg', '2', 'Yes'),
(43, 'Pizza regina', 'Une symphonie de saveurs sur une pâte dorée', '13.80', 'regina.jpg', '2', 'Yes'),
(44, 'Pizza savoyarde', 'Une symphonie de saveurs sur une pâte dorée', '16.80', 'savoyarde.jpg', '2', 'Yes'),
(45, 'Pizza duo de saumon', 'Une symphonie de saveurs sur une pâte dorée', '18.40', 'duo-saumon.jpg', '2', 'Yes'),
(46, 'Pizza foie gras', 'Une symphonie de saveurs sur une pâte dorée', '20.20', 'foie-gras.jpg', '2', 'Yes'),
(47, 'Pizza magret cépes', 'Une symphonie de saveurs sur une pâte dorée', '20.40', 'magret-cepes', '2', 'Yes'),
(48, 'Pizza miss veggie', 'Une symphonie de saveurs sur une pâte dorée', '18.80', 'miss-veggie.jpg', '2', 'Yes'),
(49, 'Boeuf bourguignon', 'Un voyage gustatif au cœur de la tradition', '22.20', 'BoeufBourguignon.jpg', '7', 'Yes'),
(50, 'Blanquette', 'Un voyage gustatif au cœur de la tradition', '22.40', 'Blanquette.jpg', '7', 'Yes'),
(51, 'Choucroute', 'Un voyage gustatif au cœur de la tradition', '24.80', 'Choucroute.jpg', '7', 'Yes'),
(52, 'Bouillabaisse', 'Un voyage gustatif au cœur de la tradition', '24.20', 'Bouillabaisse.jpg', '7', 'Yes'),
(53, 'Couscous', 'Un voyage gustatif au cœur de la tradition', '20.40', 'Couscous.jpg', '7', 'Yes'),
(54, 'Poutine', 'Un voyage gustatif au cœur de la tradition', '28.00', 'Poutine.jpg', '7', 'Yes'),
(55, 'Tortilla', 'Un voyage gustatif au cœur de la tradition', '20.80', 'Tortilla.jpg', '7', 'Yes'),
(56, 'Welsh', 'Un voyage gustatif au cœur de la tradition', '26.20', 'Welsh.jpg', '7', 'Yes'),
(57, 'Salade césar',  'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.60', 'SaladeCesar.jpg', '6', 'Yes'),
(58, 'Salade au crevette', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.80', 'SaladeCrevette.jpg', '6', 'Yes'),
(59, 'Salade de riz', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.80', 'SaladeRiz.jpg', '6', 'Yes'),
(60, 'Salade grec', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.40', 'SaladeGrec.jpg', '6', 'Yes'),
(61, 'Salade avocat betterave', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.20', 'SaladeAvocatBetterave.jpg', '6', 'Yes'),
(62, 'Salade de pomme de terre', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.20', 'SaladePDT.jpg', '6', 'Yes'),
(63, 'Salade de pâtes au pesto', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.40', 'SaladePestoPasta.jpg', '6', 'Yes'),
(64, 'Taboulet', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.80', 'Taboulet.jpg', '6', 'Yes'),
(65, 'Croque madame', 'Un plaisir gourmand à portée de main', '6.00', 'CroqueMadame.jpg', '9', 'Yes'),
(66, 'Burrito', 'Un plaisir gourmand à portée de main', '6.20', 'Burrito.jpg', '9', 'Yes'),
(67, 'Tartine au chévre', 'Un plaisir gourmand à portée de main', '6.80', 'TartineChévre.jpg', '9', 'Yes'),
(68, 'Kebab', 'Un plaisir gourmand à portée de main', '5.40', 'Kebab.jpg', '9', 'Yes'),
(69, 'Croque monsieur', 'Un plaisir gourmand à portée de main', '4.80', 'CroqueMonsieur.jpg', '9', 'Yes'),
(70, 'Nuggets', 'Un plaisir gourmand à portée de main', '4.20', 'Nuggets.jpg', '9', 'Yes'),
(71, 'Tacos', 'Un plaisir gourmand à portée de main', '6.60', 'Tacos.jpg', '9', 'Yes'),
(72, 'Tartine au saumon', 'Un plaisir gourmand à portée de main', '6.40', 'TartineSaumon.jpg', '9', 'Yes'),
(73, 'Falafelle', 'Une symphonie de saveurs végétales dans votre assiette', '6.40', 'Falafelle.jpg', '10', 'Yes'),
(74, 'Couscous veggie', 'Une symphonie de saveurs végétales dans votre assiette', '8.80', 'CouscousVeggie.jpg', '10', 'Yes'),
(75, 'Gratin de légume', 'Une symphonie de saveurs végétales dans votre assiette', '8.60', 'Gratin.jpg', '10', 'Yes'),
(76, 'Risotto au champignon', 'Une symphonie de saveurs végétales dans votre assiette', '8.40', 'RisottoChampignon.jpg', '10', 'Yes'),
(77, 'Croque veggie', 'Une symphonie de saveurs végétales dans votre assiette', '6.80', 'CroqueVeggie.jpg', '10', 'Yes'),
(78, 'Epinard à l indienne', 'Une symphonie de saveurs végétales dans votre assiette', '7.40', 'EpinardIndienne.jpg', '10', 'Yes'),
(79, 'Legume mijoté', 'Une symphonie de saveurs végétales dans votre assiette', '7.20', 'LegumeMijote.jpg', '10', 'Yes'),
(80, 'Pois chiche et carotte roti', 'Une symphonie de saveurs végétales dans votre assiette', '6.20', 'PoisChicheCarotteRoti.jpg', '10', 'Yes'),
(81, 'Wrap buffalo chiken', 'Un voyage gustatif autour du monde dans votre main', '4.80', 'WrapBuffaloChiken.jpg', '3', 'Yes'),
(82, 'Wrap poulet crudité', 'Un voyage gustatif autour du monde dans votre main', '5.20', 'WrapPouletCrudite.jpg', '3', 'Yes'),
(83, 'Wrap aux légumes', 'Un voyage gustatif autour du monde dans votre main', '5.10', 'WrapLegume.jpg', '3', 'Yes'),
(84, 'Wrap aux poissons', 'Un voyage gustatif autour du monde dans votre main', '5.60', 'WrapPoisson.jpg', '3', 'Yes'),
(85, 'Wrap au bacon et avocat', 'Un voyage gustatif autour du monde dans votre main', '6.20', 'WrapBaconAvocat.jpg', '3', 'Yes'),
(86, 'Wrap au boeuf', 'Un voyage gustatif autour du monde dans votre main', '5.40', 'WrapBoeuf.jpg', '3', 'Yes'),
(87, 'Wrap au poulet et avocat', 'Un voyage gustatif autour du monde dans votre main', '6.00', 'WrapPouletAvocat.jpg', '3', 'Yes'),
(88, 'Wrap au saumon et concombre', 'Un voyage gustatif autour du monde dans votre main', '6.40', 'WrapSaumonConcombre.jpg', '3', 'Yes'),
(89, 'Pain à la banane', 'Notre selection de pain frais pour accompagner vos repas', '2.20', 'PainBanane.jpg', '8', 'Yes'),
(90, 'Pain aux céréales', 'Notre selection de pain frais pour accompagner vos repas', '2.40', 'PainCereale.jpg', '8', 'Yes'),
(91, 'Pain à la citrouille', 'Notre selection de pain frais pour accompagner vos repas', '2.60', 'PainCitrouille.jpg', '8', 'Yes'),
(92, 'Pain au fromage', 'Notre selection de pain frais pour accompagner vos repas', '2.80', 'PainFromage.jpg', '8', 'Yes'),
(93, 'Pain à la courgette', 'Notre selection de pain frais pour accompagner vos repas', '4.20', 'PainCourgette.jpg', '8', 'Yes'),
(94, 'Pain d épices', 'Notre selection de pain frais pour accompagner vos repas', '3.40', 'PainDepice.jpg', '8', 'Yes'),
(95, 'Pain aux noix', 'Notre selection de pain frais pour accompagner vos repas', '3.20', 'PainNoix.jpg', '8', 'Yes'),
(96, 'Pain aux olives', 'Notre selection de pain frais pour accompagner vos repas', '4.20', 'PainOlive.jpg', '8', 'Yes');


CREATE TABLE commande (
id INT AUTO_INCREMENT PRIMARY KEY,
id_plat INT NOT NULL REFERENCES plat(id),
quantite INT NOT NULL,
total DECIMAL(10,2) NOT NULL,
date_commande DATETIME NOT NULL,
etat VARCHAR(50) NOT NULL,
nom_client VARCHAR(150) NOT NULL,
telephone_client VARCHAR(20) NOT NULL,
email_client VARCHAR(150) NOT NULL,
adresse_client VARCHAR(255) NOT NULL
);

CREATE TABLE utilisateur (
id INT AUTO_INCREMENT PRIMARY KEY,
nom_prenom VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(255) NOT NULL
);



