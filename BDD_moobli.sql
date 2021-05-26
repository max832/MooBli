-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 29 mars 2021 à 00:09
-- Version du serveur :  10.3.28-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moobli`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandevalid`
--

CREATE TABLE `commandevalid` (
  `id` int(100) NOT NULL,
  `client` int(200) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `montant` int(100) NOT NULL,
  `nbcom` int(100) NOT NULL,
  `nomlivr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` int(100) NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addresselivraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressefactur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numcarte` int(100) NOT NULL,
  `datexp` date NOT NULL,
  `crypto` int(100) NOT NULL,
  `date_achat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commandevalid`
--

INSERT INTO `commandevalid` (`id`, `client`, `nom`, `montant`, `nbcom`, `nomlivr`, `quantite`, `prenom`, `addresselivraison`, `addressefactur`, `moyen`, `numcarte`, `datexp`, `crypto`, `date_achat`) VALUES
(1, 1, 'Max', 3, 184154, 'Ruy Blas', 1, 'Pierre', '14 avenue de l\'europe Montevrain 77144', '14 avenue de l\'europe Montevrain 77144', 'carte', 526398698, '2022-01-02', 589, '2021-12-12'),
(2, 1, 'Flavie', 19, 515656, 'A short history of Nearly Everything', 1, 'Thonon', '14 avenue de l\'europe Montevrain 77144', '14 avenue de l\'europe Montevrain 77144', 'chèque', 0, '2020-12-20', 0, '2020-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE `Livre` (
  `isbn` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `date_parution` date NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `langue` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Livre`
--

INSERT INTO `Livre` (`isbn`, `titre`, `annee`, `nbpages`, `prix`, `date_parution`, `description`, `editeur`, `genre`, `langue`, `auteur`) VALUES
('096573840X', 'A short history of Nearly Everything', 2003, 645, 19, '2003-00-00', 'Une histoire de tout, ou presque est un livre de Bill Bryson expliquant le développement de plusieurs domaines de la science tels que la chimie, la paléontologie, l\'astronomie et la physique des particules.', 'Guardian', 'Essaie', 'Anglais', 'Bill Bryson'),
('203585573X', 'Ruy Blas', 1838, 270, 3, '1838-00-00', 'Ruy Blas est une pièce de théâtre de Victor Hugo, construite en 5 actes et publiée en 1838. Dans ce drame romantique, le héros éponyme dénonce ceux qui prennent les biens de l’Etat.', 'Flammarion', 'Théatre', 'Francais', 'Victor Hugo'),
('2035867916', 'L\'illusion comique', 1639, NULL, 12, '1639-00-00', 'Corneille écrit cette pièce, il a 29 ans et a déjà écrit sept autres pièces de théâtre dont des tragédies et des comédies.', 'Le livre de poche', 'Théâtre', 'Francais', 'Pierre Corneille'),
('2070373096', 'Les Paravents', 1961, NULL, 3, '1661-00-00', 'Les Paravents est une pièce de théâtre de Jean Genet écrite en 1961 et représentée pour la première fois le 16 avril 1966 au Théâtre de l\'Odéon par la Compagnie Renaud-Barrault.', 'Folio ThÃ©Ã¢tre', 'Théâtre', 'Francais', 'Jean Genet'),
('2081219972', 'Le Comédien désincarné', 2009, 390, 9, '2009-00-00', 'Voilà longtemps déjà que je pratique mon métier, que je le ressens, le surveille comme on surveille une habitude...', 'Flammarion', 'Théâtre', 'Francais', 'Louis Jouvet'),
('208127857X', 'Un fil à la patte', 1894, 208, 8, '1894-00-00', 'La veille de son mariage avec la jolie Viviane, Fernand de Bois d\'Enghien tente sans succès de rompre avec sa maîtresse, la chanteuse de music-hall Lucette Gautier.', 'Folio théâtre', 'Théâtre', 'Francais', 'Georges Feydeau'),
('2253037923', 'Le misanthrope', 1666, NULL, 2, '1666-00-00', 'Le misanthrope, est le plus loyal et le plus droit des hommes ; malheureusement il lui manque une vertu, l\'indulgence pour la conduite des autres.', 'Le livre de poche', 'Théâtre', 'Francais', 'Molière'),
('2253038741', 'Les femmes savantes', 1672, NULL, 8, '1672-00-00', 'Les Femmes savantes est une comédie de caractère de Molière, en cinq actes et en vers, créée le 11 mars 1672 par la Troupe du Roy au Palais-Royal.', 'Le livre de poche', 'Théâtre', 'Francais', 'Molière'),
('2253040156', 'Poètes Français des XIXe et XXe siècles', 2009, NULL, 17, '2009-00-00', 'Poètes français des XIXe et XXe siècles. Résumé : Romantiques, symbolistes, puis surréalistes, modernes, écrivant en alexandrins ou en vers libres : tous poètes.', 'Le livre de poche', 'Poésie', 'Francais', 'Auteurs multiples'),
('2253041475', 'Hernani', 1830, NULL, 7, '1830-00-00', 'Hernani est une pièce de théâtre de Victor Hugo, représentée pour la première fois à la Comédie-Française le 25 février 1830, et publiée la même année.', 'Belfond', 'Roman', 'Francais', 'Victor Hugo'),
('2253160466', 'Les précieuses ridicules', 1660, NULL, 11, '1660-00-00', 'Les Précieuses ridicules. Résumé : Magdelon et Cathos, deux jeunes provinciales, débarquent à Paris en quête d\'amour et de jeux d\'esprit.', 'Flammarion', 'Comédie', 'Français', 'Molière'),
('2253163503', 'Le Dindon', 1989, 107, 8, '1989-00-00', 'Le Dindon est avant tout une comédie appartenant au genre du vaudeville. Il serait trop réducteur de résumer un Feydeau au schéma classique du triangle amoureux : mari-femme-amant.', 'Le Livre de Poche', 'Théatre', 'Français', 'Georges Feydeau'),
('2264056002', 'La ballade de l\'impossible', 2002, 456, 14, '2002-00-00', 'La Ballade de l\'impossible est le cinquième roman de l\'écrivain japonais Haruki Murakami, paru en 1987 au Japon. Le roman aborde les thèmes de la perte d\'êtres proches et de la sexualité naissante.', 'Le livre de Poche', 'Roman', 'Francais', 'Haruki Murakami'),
('2264056169', 'Kafka sur le rivage', 2002, 648, 6, '2002-00-00', 'Un garçon de quinze ans, Kafka Tamura, s\'enfuit de sa maison de Tokyo pour échapper à une terrible prophétie prononcée par son père.', 'Babelio', 'Roman', 'Français', 'Haruki Murakami'),
('2264069112', 'L\'Etrange Bibliothèque', 2015, 80, 7, '2015-00-00', 'Un jeune garçon se rend à la bibliothèque municipale pour déposer un ouvrage, emprunter de vieux livres sur le système fiscal, les révoltes fiscales dans l\'empire ottoman et leur répression', 'Belfond', 'Roman', 'Francais', 'Haruki Murakami'),
('2266152181', 'Le cid', 1637, 208, 7, '1637-00-00', 'Don Diègue et le comte de Gormas ont décidé d’unir leurs enfants qui s’aiment. Mais le comte, jaloux de se voir préférer le vieux don Diègue pour le poste de précepteur du prince, donne un soufflet à son rival.', 'Flammarion', 'Théâtre ', 'Francais', 'Pierre Corneille'),
('2266152182', 'L\'art de la guerre', 1963, NULL, 8, '1963-00-00', 'L’Art de la guerre de Sunzi est le premier traité de stratégie connu au monde. Stratège militaire du début de l’époque des Royaumes combattants (475-221 av. J.-C.), l’auteur favorise la stratégie indirecte.', 'Flammarion', 'Roman', 'Chinois', 'Sun Tzu'),
('2266203533', 'Les Contemplations', 1856, 672, 7, '1856-00-00', 'Les Contemplations se présente comme un recueil de souvenirs de l\'auteur, des souvenirs d\'amour, de joie, mais aussi de mort, de deuil, ainsi que de son rapport à une sorte de puissance suprême personnelle quelque peu mystique.', 'Le Livre de Poche', 'Théâtre', 'Francais', 'Victor Hugo'),
('2809710562', 'La tombe des lucioles', 1967, 143, 4, '1967-00-00', 'L\'histoire se passe en 1945, le Japon est sous les bombardements de l\'aviation américaine. Seita, 14 ans et sa petite soeur Setsuko de 4 ans vivent a Kobe avec leur mere jusqu\'au jour où celle-ci décède lors d\'un bombardement.', 'Babelio', 'Nouvelle', 'Japonais', 'Akiyuki Nosaka');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `email`) VALUES
(1, 'admin', 'admin1', 'admin@moobli.fr'),
(8, 'max', 'max', 'max@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`message`, `pseudo`, `ID`) VALUES
('Bonjour, vous avez besoin de plus d\'informations concernant votre achat ou la confidentialité de vos données ? C\'est Ici !', 'Administrateur ', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Murakami', 'Haruki'),
(2, 'Corneille', 'Pierre'),
(3, 'Menschik', 'Kat'),
(4, 'Morita', 'Helene'),
(5, 'Feydeau', 'Georges'),
(6, 'Hugo', 'Victor'),
(7, 'Chedeville', 'Elise'),
(8, 'Molière', NULL),
(9, 'Genet', 'Jean'),
(10, 'Jouvet', 'Louis'),
(11, 'Tzu', 'Sun'),
(12, 'Amiot', 'Joseph-Marie'),
(13, 'Nosaka', 'Akiyuki'),
(14, 'De Vos', 'Patrick'),
(15, 'Gossot', 'Anne'),
(16, 'Chamarat-Malandain', 'Gabrielle'),
(17, 'Bryson', 'Bill');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandevalid`
--
ALTER TABLE `commandevalid`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`isbn`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandevalid`
--
ALTER TABLE `commandevalid`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
