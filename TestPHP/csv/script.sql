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
(1, 'Burger', 'burger_cat.jpg', '1'),
(2, 'Pizza', 'pizza_cat.jpg', '1'),
(3, 'Wrap', 'wrap_cat.jpg', '1'),
(4, 'Pasta', 'pasta_cat', '1'),
(5, 'Asian', 'asian_food_cat.jpg', '1'),
(6, 'Salade', 'salade_cat.jpg', '1'),
(7, 'Platduterroir', 'Platduterroir_cat.jpg', '1'),
(8, 'Sandwich', 'sandwich_cat.jpg', '1'),
(9, 'Snack', 'Snack_cat.jpg', '1'),
(10, 'Veggie', 'veggie_cat.jpg', '1'),
(11, 'Dessert', 'Dessert_cat.jpg', '1'),
(12, 'Fromage', 'Fromage_cat.jpg', '1');

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
(1, 'Bo Bun Poulet', 'Un voyage culinaire au pays du soleil levant', '8.00', 'bo-bun-poulet.png', '5', '1'),
(2, 'Boeuf LocLac', 'Un voyage culinaire au pays du soleil levant', '10.00', 'boeuf-loc-lac.png', '5', '1'),
(3, 'Boeuf Oignons', 'Un voyage culinaire au pays du soleil levant', '8.50', 'boeuf-oignons.png', '5', '1'),
(4, 'Chirachi Mixte', 'Un voyage culinaire au pays du soleil levant', '8.80', 'chirachi-mixte.png', '5', '1'),
(5, 'Burger 1', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '12.00', 'burger1.png', '1', '1'),
(6, 'Burger 2', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '11.00', 'burger2.png', '1', '1'),
(7, 'Burger 3', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '11.50', 'burger3.png', '1', '1'),
(8, 'Burger 4', 'Un hymne au burger : Une symphonie de saveurs dans un pain moelleux', '12.50', 'burger4.png', '1', '1'),
(9, 'Créme brulée', 'Une touche sucrée pour conclure votre repas en beauté', '6.00', 'CrémeBrulée.jpg', '11', '1'),
(10, 'Mousse au chocolat', 'Une touche sucrée pour conclure votre repas en beauté', '6.50', 'MousseChocolat.jpg', '11', '1'),
(11, 'Tartelette au citron', 'Une touche sucrée pour conclure votre repas en beauté', '7.50', 'TarteletteCitron.jpg', '11', '1'),
(12, 'Tiramisu', 'Une touche sucrée pour conclure votre repas en beauté', '7.00', 'Tiramisu.jpg', '11', '1'),
(13, 'Camenbert', 'Un voyage gustatif au cœur de la France', '2.50', 'Camenbert.jpg', '12', '1'),
(14, 'Fromage de chévre', 'Un voyage gustatif au cœur de la France', '2.00', 'Chévre.jgp', '12', '1'),
(15, 'MAroille', 'Un voyage gustatif au cœur de la France', '2.20', 'Maroille.jpg', '12', '1'),
(16, 'Mimolette', 'Un voyage gustatif au cœur de la France', '2.10', 'Mimolette.jpg', '12', '1'),
(17, 'Coquilette', 'Une symphonie italienne dans votre assiette', '4.50', 'Coquilette.jpg', '4', '1'),
(18, 'Macaroni au fromage', 'Une symphonie italienne dans votre assiette', '4.20', 'MacaroniFromage.jpg', '4', '1'),
(19, 'Spaghetti bolognaise', 'Une symphonie italienne dans votre assiette', '4.80', 'SpaghettiBolo.jpg', '4', '1'),
(20, 'Tagliatelle au saumon', 'Une symphonie italienne dans votre assiette', '5.00', 'TagliatelleSaumon.jpg', '4', '1'),
(21, 'Calzone', 'Une symphonie de saveurs sur une pâte dorée', '12.00', 'Calzone.jpg', '2', '1'),
(22, 'Pizza raclette', 'Une symphonie de saveurs sur une pâte dorée', '14.40', 'raclette.jpg', '2', '1'),
(23, 'Pizza regina', 'Une symphonie de saveurs sur une pâte dorée', '13.80', 'regina.jpg', '2', '1'),
(24, 'Pizza savoyarde', 'Une symphonie de saveurs sur une pâte dorée', '16.80', 'savoyarde.jpg', '2', '1'),
(25, 'Boeuf bourguignon', 'Un voyage gustatif au cœur de la tradition', '22.20', 'BoeufBourguignon.jpg', '7', '1'),
(26, 'Blanquette', 'Un voyage gustatif au cœur de la tradition', '22.40', 'Blanquette.jpg', '7', '1'),
(27, 'Choucroute', 'Un voyage gustatif au cœur de la tradition', '24.80', 'Choucroute.jpg', '7', '1'),
(28, 'Bouillabaisse', 'Un voyage gustatif au cœur de la tradition', '24.20', 'Bouillabaisse.jpg', '7', '1'),
(29, 'Salade césar',  'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.60', 'SaladeCesar.jpg', '6', '1'),
(30, 'Salade au crevette', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '6.80', 'SaladeCrevette.jpg', '6', '1'),
(31, 'Salade de riz', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.80', 'SaladeRiz.jpg', '6', '1'),
(32, 'Salade grec', 'Une explosion de fraîcheur et de saveurs dans votre assiette', '5.40', 'SaladeGrec.jpg', '6', '1'),
(33, 'Croque madame', 'Un plaisir gourmand à portée de main', '6.00', 'CroqueMadame.jpg', '9', '1'),
(34, 'Burrito', 'Un plaisir gourmand à portée de main', '6.20', 'Burrito.jpg', '9', '1'),
(35, 'Tartine au chévre', 'Un plaisir gourmand à portée de main', '6.80', 'TartineChévre.jpg', '9', '1'),
(36, 'Kebab', 'Un plaisir gourmand à portée de main', '5.40', 'Kebab.jpg', '9', '1'),
(37, 'Falafelle', 'Une symphonie de saveurs végétales dans votre assiette', '6.40', 'Falafelle.jpg', '10', '1'),
(38, 'Couscous veggie', 'Une symphonie de saveurs végétales dans votre assiette', '8.80', 'CouscousVeggie.jpg', '10', '1'),
(39, 'Gratin de légume', 'Une symphonie de saveurs végétales dans votre assiette', '8.60', 'Gratin.jpg', '10', '1'),
(40, 'Risotto au champignon', 'Une symphonie de saveurs végétales dans votre assiette', '8.40', 'RisottoChampignon.jpg' '10', '1'),
(41, 'Wrap buffalo chiken', 'Un voyage gustatif autour du monde dans votre main', '4.80', 'WrapBuffaloChiken.jpg', '3', '1'),
(42, 'Wrap poulet crudité', 'Un voyage gustatif autour du monde dans votre main', '5.20', 'WrapPouletCrudite.jpg', '3', '1'),
(43, 'Wrap aux légumes', 'Un voyage gustatif autour du monde dans votre main', '5.10', 'WrapLegume.jpg', '3', '1'),
(44, 'Wrap aux poissons', 'Un voyage gustatif autour du monde dans votre main', '5.60', 'WrapPoisson.jpg', '3', '1'),
(45, 'Pain à la banane', 'Notre selection de pain frais pour accompagner vos repas', '2.20', 'PainBanane.jpg', '8', '1'),
(46, 'Pain aux céréales', 'Notre selection de pain frais pour accompagner vos repas', '2.40', 'PainCereale.jpg', '8', '1'),
(47, 'Pain à la citrouille', 'Notre selection de pain frais pour accompagner vos repas', '2.60', 'PainCitrouille.jpg', '8', '1'),
(48, 'Pain au fromage', 'Notre selection de pain frais pour accompagner vos repas', '2.80', 'PainFromage.jpg', '8', '1');


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

