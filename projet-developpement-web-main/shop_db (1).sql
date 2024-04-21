-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 juin 2023 à 18:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(2, 1, 5, 'Corne de Gazelle', 150, 1, 'corne de gazelle.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 2, 'imane', 'i@gmail.com', '0736254', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 2, 'imane', '057484', 'imane@gmail.com', 'cash on delivery', 'flat no. 21, ija, oujda - 60000', 'Cigares Chebakia (120 x 1) - ', 120, '2023-06-12 17:54:21', 'pending');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'briwate', 'briwat au miel et amandes', 130, 'briwat ag.jpeg', 'briwate.jpeg', 'briwat ag.jpeg'),
(2, 'Cigares Chebakia', 'Cigares Chebakia FourÃ©e Au Chocolat', 125, 'cigare ag.jpeg', 'cigare.jpeg', 'cigare ag.jpeg'),
(3, 'Gateau Marocain Aux Amandes', 'DÃ©licieux gÃ¢teaux marocain aux amandes ', 160, 'gateau aux ammandes.jpeg', 'gateau aux ammandes ag.jpeg', 'gateau aux ammandes.jpeg'),
(4, 'Chebakia Aux Amandes', ' une pÃ¢tisserie marocaine en forme de fleur frite, enrobÃ©e de miel et saupoudrÃ©e de graines de sÃ©same, offrant une saveur sucrÃ©e et croquante.', 170, 'chebakia aux ammandes.jpeg', 'chebakia aux amandes ag.jpeg', 'chebakia aux ammandes.jpeg'),
(5, 'Corne de Gazelle', 'La corne de gazelle est une dÃ©licieuse pÃ¢tisserie marocaine en forme de croissant, farcie d&#39;une douce et parfumÃ©e pÃ¢te d&#39;amandes.', 150, 'corne de gazelle.jpeg', 'corne de gazelle ag.jpeg', 'corne de gazelle.jpeg'),
(6, 'Fekkas aux amandes', 'Les fekkas aux amandes sont de dÃ©licieux biscuits marocains croquants, prÃ©parÃ©s avec des amandes, du beurre, du sucre et des Ã©pices.', 130, 'fekkas.jpeg', 'fekkas ag.jpeg', 'fekkas.jpeg'),
(7, 'Glace Barbe A Papa', 'La glace Ã  la barbe Ã  papa est une douceur glacÃ©e au parfum de barbe Ã  papa.', 65, 'glace-barbe-a-papa.jpg', 'glace-barbe-a-papa ag.jpg', 'glace-barbe-a-papa.jpg'),
(8, 'Glace CrÃ¨me De L&#39;ArdÃ¨che', 'La glace CrÃ¨me de l&#39;ArdÃ¨che est une dÃ©licieuse crÃ¨me glacÃ©e artisanale aux arÃ´mes de lait et de crÃ¨me.', 65, 'glace-creme-de-marron-de-lardeche.jpg', 'glace-creme-de-marron-de-lardeche ag.jpg', 'glace-creme-de-marron-de-lardeche(1).jpg'),
(9, 'Glace Noisette', 'La glace Ã  la noisette est une crÃ¨me glacÃ©e dÃ©licieusement onctueuse et parfumÃ©e', 75, 'glace-nuty.jpg', 'glace-nutyag.jpg', 'glace-nuty.jpg'),
(10, 'Glace Miel De Provence', 'La glace au miel de Provence est une dÃ©licieuse crÃ¨me glacÃ©e artisanale, parfumÃ©e au miel provenÃ§al.', 60, 'glace-miel-de-provence-igp(1).jpg', 'glace-miel-de-provence-ag.jpg', 'glace-miel-de-provence-igp(1).jpg'),
(11, 'Sorbet Abricot Du Rhone', 'Le sorbet abricot du RhÃ´ne est une rafraÃ®chissante glace fruitÃ©e, prÃ©parÃ©e avec des abricots juteux du RhÃ´ne.', 70, 'sorbet-abricot-de-la-vallee-du-rhone.jpg', 'sorbet-abricot-de-la-vallee-du-rhone ag.jpg', 'sorbet-abricot-de-la-vallee-du-rhone.jpg'),
(12, 'Glace Vanille Macadamia', 'La glace vanille macadamia est une crÃ¨me glacÃ©e Ã  la vanille enrichie de dÃ©licieuses noix de macadamia croquantes.', 85, 'glace-vanille-macadamia.jpg', 'glace-miel-de-provence-ag.jpg', 'glace-miel-de-provence-igp(1).jpg'),
(13, 'cheesecake', 'Un succulent cheesecake aux baies, harmonisant Ã  la perfection la texture crÃ©meuse du fromage, l&#39;aciditÃ© des baies fraÃ®ches et une croÃ»te croustillante', 20, 'cheesecake.jpg', 'cheesecake ag.jpeg', 'cheesecake.jpg'),
(14, 'tartelette aux framboises', 'Une tartelette croustillante Ã  la framboise, avec sa dÃ©licate croÃ»te, son mÃ©lange de framboises juteuses et son fini subtil de sucre croquant', 18, 'tartelette framboise.jpg', 'tartelette framboise ag.jpg', 'tartelette framboise.jpg'),
(16, 'tartelette au fraise', 'Une tartelette au fraise allÃ©chante, avec sa croÃ»te croustillante, son gÃ©nÃ©reux remplissage de fraises juteuses et sa touche finale de crÃ¨me fouettÃ©e onctueuse.', 15, 'cake2 (1).jpg', 'cake2 ag.jpg', 'cake2 (1).jpg'),
(17, 'tiramisu', 'Un dÃ©licieux tiramisu, avec ses couches moelleuses de biscuits imbibÃ©s de cafÃ©, son crÃ©meux mascarpone et sa poudre de cacao saupoudrÃ©e par-dessus pour une touche de gourmandise.', 18, 'tiramisu.jpeg', 'tiramisu ag.jpeg', 'tiramisu.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'nm', 'i@gmail.com', 'c22b5f9178342609428d6f51b2c5af4c0bde6a42'),
(2, 'imane', 'imane@gmail.com', '5dde598c305146405b4a0cf520465d83a8302e61');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
