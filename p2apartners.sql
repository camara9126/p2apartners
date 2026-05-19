-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2026 à 16:04
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `p2apartners`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Fiscalité', '2026-05-13 12:53:56', '2026-05-13 12:53:56'),
(2, 'Audit', '2026-05-13 12:55:12', '2026-05-13 12:55:12');

-- --------------------------------------------------------

--
-- Structure de la table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `nom`, `email`, `sujet`, `message`, `created_at`, `updated_at`, `statut`) VALUES
(1, 'Ndiaye', 'ndiaye1903oumar@gmail.com', 'demande de demostration', 'BCM GROUPE (Business Creation Manager) est une entreprise sénégalaise spécialisée dans l’accompagnement numérique, l’informatique, la formation professionnelle et l’insertion socioprofessionnelle des jeunes. Basée entre Saint-Louis et Dakar, elle place \r\nla transformation digitale et l’employabilité au cœur de sa mission.', '2026-05-18 08:33:50', '2026-05-18 11:15:26', 0),
(3, 'Amadou camara', 'ahmadcamara01@gmail.com', 'support tecnique', 'bonjour le suis a la recherche d\'un expert en doit de l\'entreprise pour mon startup.', '2026-05-19 07:14:14', '2026-05-19 07:14:14', 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_13_122806_create_categories_table', 2),
(5, '2026_05_13_122807_create_posts_table', 3),
(6, '2026_05_13_142441_add_statut_to_posts_table', 3),
(7, '2026_05_18_091119_create_contact_forms_table', 4),
(8, '2026_05_18_115525_add_statut_to_contact_forms_table', 5),
(9, '2026_05_18_134502_add_editeur_to_posts_table', 6),
(10, '2026_05_18_140937_add_slug_to_posts_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `categorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT 1,
  `editeur` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `titre`, `type`, `categorie_id`, `contenu`, `image`, `date`, `created_at`, `updated_at`, `statut`, `editeur`, `slug`) VALUES
(3, 'La fiscalité. Comment ca marche ?', 'Blog', 1, 'II. Vision, Mission et Objectifs \r\n• Vision: Devenir un acteur majeur de la transformation digitale au Sénégal en créant des solutions adaptées aux réalités locales.\r\nI. Présentation Générale de BCM GROUPE \r\nBCM GROUPE (Business Creation Manager) est une entreprise sénégalaise spécialisée dans l’accompagnement numérique, l’informatique, la formation professionnelle et l’insertion socioprofessionnelle des jeunes. Basée entre Saint-Louis et Dakar, elle place \r\nla transformation digitale et l’employabilité au cœur de sa mission.\r\nBCM GROUPE intervient auprès des entreprises, institutions et organisations pour renforcer leur visibilité, améliorer leur gestion et faciliter leur accès à des services numériques innovants.\r\n• Mission: Participer à l’employabilité de masse: former, insérer et accompagner les jeunes, les entreprises et les porteurs de projets vers la réussite numérique et économique.\r\n• Objectifs majeurs:\r\n– Accroître l’employabilité des jeunes par des formations qualifiantes.\r\n– Offrir des solutions numériques professionnelles aux entreprises.\r\nÀtravers ses programmes phares — Saint-Louis Clic et O’FOOD — l’entreprise développe une vision territoriale centrée sur la modernisation des services et la création d’opportunités économiques pour les jeunes.\r\nDOSSIER INSTITUTIONNEL DE BCM GROUPE\r\n– Moderniser les services publics et privés locaux grâce à nos plateformes.\r\n– Réduire les barrières d’accès à la technologie dans les zones urbaines et\r\npériurbaines.', 'imgPost/17791114949.png', '2026-05-18', '2026-05-18 12:38:14', '2026-05-19 11:52:04', 1, 'Amadou Camara', 'la-fiscalite'),
(4, 'Comment créer une entreprise au Sénégal ?', 'Blog', 2, '1. Introduction\r\nCe cahier des charges a pour objectif de définir de manière exhaustive les spécifications techniques et fonctionnelles requises pour la conception, le développement et le déploiement du site internet de P2A Partners, un cabinet d\'expertise comptable. Le projet vise à établir une présence digitale forte et professionnelle, servant de vitrine pour les services du cabinet et de plateforme d\'interaction avec ses clients et prospects.\r\n2. Présentation de P2A Partners et Objectifs du Projet\r\n2.1. Présentation de P2A Partners\r\nP2A Partners est un cabinet d’expertise comptable, d’audit et de conseils engagé aux côtés des chefs d’entreprise, PME/PMI, organisations à but non lucratif et associations pour les accompagner dans leur développement, leur gestion et leur conformité financière.\r\nFort de son expertise pluridisciplinaire, le cabinet propose un accompagnement sur-mesure dans les domaines de la comptabilité, de l’audit, de la fiscalité, de la gestion sociale, du conseil stratégique et de la gestion financière.\r\nNotre mission ? Fournir bien plus que des services financiers. Chez P2A Partners, nous nous positionnons comme de véritables partenaires de croissance, en apportant à nos clients des solutions claires, adaptées à leur activité et à leurs enjeux.\r\n\r\nPrésentation des associés\r\nAbdoul Aziz:\r\nAbdoul est un Expert-comptable et commissaire aux comptes, certifié en normes internationales d’information financière. Ayant travaillé pendant plusieurs années dans les cabinets du big four, il accompagne les entreprises à chaque étape de leur développement : de la structuration comptable à la conformité fiscale, en passant par le reporting financier et l’audit.\r\nAvec une expérience avérée sur les marchés africains notamment ceux de l’UEMOA, il intervient auprès d’une clientèle variée : PME, groupes internationaux, Start-ups opérant partout en Afrique.\r\nBilingue français / anglais, Abdoul fournit un accompagnement rigoureux, accessible et adapté aux réalités locales comme aux exigences internationales.\r\nPierre Sertorio G. Faye:\r\nPierre est Expert-Comptable et Commissaire aux Comptes, inscrit à l’Ordre National des Experts-Comptables et Comptables agréés du Sénégal. Il comptabilise près de 11 années d\'expérience professionnelle dans l’organisation comptable des sociétés privées, le conseil fiscal et social, l’audit légal et contractuel y compris les missions connexes de l’Expert-Comptable.\r\nEn termes de formation, il anime des sessions de formation sur le contrôle interne, l’audit financier, la fiscalité des entreprises, les états financiers SYSCOHDA, les IFRS, le contrôle de gestion, la paie et des sessions adaptées aux besoins des administrateurs de société privées dans le monde du chiffre.\r\nExpertise spécifique : \r\nAudit financier\r\nAudit contractuel\r\nReporting d’entreprises\r\nAssurance et conversion de comptes SYSCOHADA/IFRS\r\nConseil fiscal\r\nServices et formations\r\n2.2. Objectifs du Site Internet\r\n\r\nCiter vos objectifs et donner des explications précises \r\n\r\n\r\nExemple: \r\n\r\nVisibilité et Notoriété : Accroître la présence en ligne de P2A Partners et renforcer sa notoriété auprès d\'une clientèle cible de TPE, PME/PMI, ETI, associations et Organisations à but non lucratif.\r\nPrésentation des Services : Détailler l\'ensemble des services proposés par le cabinet de manière claire, structurée et facilement accessible.\r\nAcquisition de Prospects (Lead Generation) : Générer de nouvelles opportunités commerciales via des formulaires de contact, des demandes de devis et des appels à l\'action pertinents.\r\nInformation et Veille : Fournir des informations pertinentes sur l\'actualité comptable, fiscale et sociale (blog, actualités, ressources).\r\nCrédibilité et Confiance : Véhiculer une image de professionnalisme, d\'expertise et de fiabilité, essentielle dans le domaine de l\'expertise comptable.\r\nSupport Client : Offrir un point d\'accès facile pour les clients existants (par exemple, accès à un portail client si existant, FAQ).\r\n\r\n\r\n\r\n\r\n\r\n\r\n3. Spécifications Fonctionnelles\r\nLes fonctionnalités attendues du site sont les suivantes :\r\n3.1. Structure Générale du Site\r\nLe site sera structuré autour des sections principales suivantes :\r\nAjouter ou supprimer des pages \r\nAccueil :\r\nP2A Partners est spécialisé dans la fourniture d’une gamme complète de services répondant aux besoins professionnels et personnels. Que vous ayez besoin d’accompagnement comptable, de conseils fiscaux, de services de conseil stratégique en affaires, d’audit ou d’autres prestations, l’équipe de professionnels expérimentés de P2A Partners est là pour vous accompagner.\r\nÀ Propos / Qui Sommes-nous ? : Histoire du cabinet, valeurs, présentation de l\'équipe, approche.\r\nP2A Partners est un cabinet d’expertise comptable, d’audit et de conseils engagé aux côtés des chefs d’entreprise, PME/PMI, organisations à but non lucratif et associations pour les accompagner dans leur développement, leur gestion et leur conformité financière.\r\nFort de son expertise pluridisciplinaire, le cabinet propose un accompagnement sur-mesure dans les domaines de la comptabilité, de l’audit, de la fiscalité, de la gestion sociale, du conseil stratégique et de la gestion financière.\r\nNotre mission ? Fournir bien plus que des services financiers. Chez P2A Partners, nous nous positionnons comme de véritables partenaires de croissance, en apportant à nos clients des solutions claires, adaptées à leur activité et à leurs enjeux.\r\nNos Services : \r\nLes prestations de P2A PArtners couvrent un large éventail de services spécialisés, assurés par nos principaux professionnels dans divers secteurs d’activité.\r\nAudit et Assurance\r\nNous proposons des services d’audit et d’assurance visant à garantir la fiabilité et la conformité de vos états financiers. Notre mission est de fournir une opinion indépendante sur la qualité de l’information financière, tout en identifiant les risques et en apportant des recommandations utiles à la prise de décision. Nos interventions sont réalisées selon les normes professionnelles en vigueur, avec rigueur, intégrité et confidentialité.\r\nAudit légal (commissariat aux comptes)\r\nAudit contractuel \r\nAudit interne\r\nAudit de conformité \r\nAudit des coûts \r\nAudit des projets et passations de marchés\r\nForensic audit\r\nComptabilité\r\nNos experts vous proposent un service d’accompagnement comptable visant à garantir la régularité, la traçabilité et la qualité de l’information financière en normes locales en en normes internationales (IFRS). Cet accompagnement comprend notamment la saisie comptable, le classement et l’organisation des pièces justificatives, le rapprochement bancaire ainsi que le suivi des opérations courantes. Cette prestation contribue à la bonne tenue des comptes et à la fiabilité des données comptables, en cohérence avec les exigences réglementaires et les bonnes pratiques professionnelles.\r\nImplémentation d’un système de comptabilité\r\nTenue de la comptabilité \r\nRévision et rattrapage de la comptabilité \r\nPréparation des états financiers en normes locales (Syscohada)\r\nPréparation des états financiers en normes internationales (IFRS)\r\nConsolidation des comptes\r\nFiscalité:\r\nNous proposons un accompagnement en matière fiscale visant à assurer la conformité de votre organisation avec les obligations légales en vigueur. Nos prestations couvrent la préparation, la vérification et le dépôt des déclarations fiscales, le suivi des échéances, ainsi que l’assistance en cas de contrôle. Nous intervenons également en conseil fiscal afin d’optimiser la gestion de vos obligations et de sécuriser vos opérations, dans le respect du cadre réglementaire applicable.\r\nPréparation des déclarations fiscales mensuelles et annuelles pour les entreprises et les particuliers \r\nAudit fiscal et revues\r\nFiscalité internationale et prix de transfert \r\nPlanification fiscale et optimisation \r\nFiscalité des expatriés\r\nFiscalité successorale et des plus-values\r\nReprésentation lors des contrôles fiscaux\r\nAssistance Juridique:\r\nNous accompagnons les porteurs de projets et les entreprises dans la gestion de leurs formalités juridiques, de la création jusqu’au suivi régulier de la vie sociale. Nos services incluent l’immatriculation auprès des autorités compétentes, l’obtention d’agrément ainsi que le secrétariat juridique courant : tenue des assemblées, mise à jour des statuts, formalités liées aux modifications statutaires. Notre intervention vise à garantir la conformité juridique de votre structure tout en simplifiant vos démarches administratives.\r\nCréation d’entreprise \r\nSecrétariat juridique \r\nRevue des contrats\r\nRédaction de pactes d’actionnaires \r\nStructuration de groupes \r\nAssistance pour l’obtention d’agrément\r\nConseil financier:\r\nNous proposons un accompagnement personnalisé en conseil financier afin de soutenir la prise de décision stratégique et la gestion optimale de vos ressources. Nos services couvrent l’analyse de la performance financière, l’élaboration de budgets prévisionnels, le suivi des indicateurs clés, ainsi que l’assistance dans la recherche de financements ou la structuration de projets d’investissement. Notre objectif est de fournir une vision claire et fiable de votre situation financière, dans une perspective de maîtrise des risques et de développement durable.\r\nÉvaluation d’entreprise; \r\nElaboration de plan de financement; \r\nAccompagnement à la levée de fonds;\r\nFusions-Acquisitions;\r\nAnalyse financière\r\nConseil en gestion d’entreprise:\r\nNous proposons un accompagnement global en gestion d’entreprise visant à optimiser l’organisation, les processus opérationnels et la performance globale. Nos prestations couvrent l’analyse stratégique, le pilotage financier, la gestion des ressources humaines, ainsi que l’optimisation des flux et des opérations. Grâce à une approche intégrée et personnalisée, nous aidons les dirigeants à améliorer la prise de décision, à renforcer la compétitivité et à assurer un développement durable de leur activité.\r\nImplémentation et évaluation du dispositif de contrôle interne;\r\nCartographie des risques;\r\nElaboration de business plan et étude de marché;\r\nAnalyse et optimisation des coûts;\r\nBudgétisation et prévisions financières ;\r\nRevue de la performance financière (KPIs)\r\nPaie et RH:\r\nNous offrons un service complet de gestion de la paie et des ressources humaines, garantissant la conformité avec la réglementation sociale en vigueur. Nos prestations incluent l’établissement des bulletins de paie, la gestion des déclarations sociales, le suivi des obligations légales, ainsi que l’accompagnement dans la gestion administrative du personnel. Nous veillons à fournir un appui fiable et sécurisé pour optimiser la gestion des ressources humaines et faciliter le pilotage social de votre organisation.\r\n\r\n\r\nElaboration mensuelle des bulletins de paie\r\nDéclarations sociales (IPRES, CSS)\r\nElaboration et revue des contrats de travail \r\nImplémentation d’un système de gestion de la paie\r\nAutres:\r\nNous proposons des formations spécialisées destinées à renforcer les compétences de vos équipes en gestion financière, comptabilité et pilotage d’entreprise. Parallèlement, nous mettons à votre disposition un Directeur Administratif et Financier (DAF) externalisé, capable d’assurer la supervision stratégique de vos fonctions financières, le contrôle de gestion, la gestion des risques et l’optimisation des ressources. Ce service flexible et adapté permet aux organisations de bénéficier d’un appui expert sans les contraintes liées à un recrutement interne.\r\nFormation\r\nDAF à temps partiel\r\n\r\n\r\nActualités / Blog : Section dédiée à la publication d\'articles, d\'actualités législatives, de guides pratiques.\r\nContact : Formulaire de contact, coordonnées complètes (téléphone, adresse), carte interactive (Google Maps).\r\n3.2. Fonctionnalités Clés\r\nFormulaires de Contact Dynamiques : Implémentation de formulaires paramétrables pour les demandes générales, les demandes de devis spécifiques à un service, ou les candidatures spontanées. Ces formulaires devront inclure une validation côté client (JavaScript) et côté serveur (PHP) pour garantir l\'intégrité des données et prévenir les spams.\r\nIntégration d\'un Blog / Système de Gestion de Contenu (CMS) : Permettant à P2A Partners de publier et de gérer facilement du contenu (articles, actualités) sans nécessiter de connaissances techniques approfondies. Un CMS tel que WordPress (avec Gutenberg ou un Page Builder comme Elementor/Beaver Builder) ou Drupal est fortement recommandé pour sa flexibilité et sa facilité d\'utilisation.\r\nGalerie d\'Images / Carrousel : Pour l\'accueil ou la page \"À Propos\" (ex: photos de l\'équipe, des bureaux).\r\nTémoignages Clients : Section dédiée affichant des avis clients, potentiellement avec un système de notation.\r\nAppels à l\'Action (CTAs) : Boutons et bannières incitant l\'utilisateur à effectuer une action (ex: \"Demander un devis\", \"Prendre rendez-vous\", \"Télécharger notre guide\").\r\nFonctionnalité de recherche : Une barre de recherche interne pour faciliter la navigation sur le site, notamment dans la section \"Actualités / Blog\".\r\nIntégration Réseaux Sociaux : Liens vers les profils sociaux de P2A Partners (LinkedIn, Facebook, Whatsapp etc.) et potentiellement des boutons de partage social pour les articles de blog.\r\nNewsletter (optionnel) : Intégration avec un outil de marketing automation (Mailchimp, Sendinblue) pour permettre aux visiteurs de s\'inscrire à une newsletter.\r\nMultilingue : Si P2A Partners envisage de s\'adresser à une clientèle internationale, une gestion multilingue du contenu (ex: français/anglais) devra être prévue dès la conception.\r\n4. Spécifications Techniques\r\nCes spécifications garantissent la performance, la sécurité et la maintenabilité du site.\r\n4.1. Architecture et Technologies\r\nLangages de Programmation :\r\nFrontend (partie visible par l\'utilisateur) : HTML5, CSS3 (avec préprocesseur comme SASS/LESS pour la maintenabilité), JavaScript (avec un framework/bibliothèque comme React, Vue.js ou jQuery pour des interactions dynamiques si nécessaire).\r\nBackend (partie serveur pour la gestion des données) : PHP (version 8.x recommandée), Python (avec frameworks comme Django/Flask), Node.js (avec Express). Le choix sera fait en fonction des expertises de BCM et de la complexité du projet.\r\nSystème de Gestion de Contenu (CMS) : Nous recommandons l\'utilisation de WordPress pour sa facilité d\'utilisation, sa robustesse et son écosystème étendu de plugins et thèmes. D\'autres CMS comme Drupal ou Joomla! peuvent être considérés selon les besoins spécifiques de P2APARTNERS.\r\nBase de Données : MySQL ou PostgreSQL, pour une gestion structurée et efficace des données (articles de blog, formulaires, utilisateurs).\r\n4.2. Design et Expérience Utilisateur (UX/UI)\r\nResponsive Design : Le site doit être entièrement \"responsive\", c\'est-à-dire qu\'il doit s\'adapter et s\'afficher correctement sur tous types d\'appareils (ordinateurs de bureau, tablettes, smartphones) et toutes tailles d\'écran. Cette approche est cruciale pour l\'expérience utilisateur et le référencement.\r\nCharte Graphique : Le design du site devra respecter la charte graphique existante de P2APARTNERS (logo, couleurs, typographies). Si aucune charte n\'existe, BCM proposera des maquettes (wireframes puis mockups) en adéquation avec l\'image souhaitée du cabinet (professionnalisme, confiance, modernité).\r\nErgonomie et Intuitivité : La navigation devra être simple, logique et intuitive. Les informations devront être facilement accessibles en un minimum de clics.\r\n4.4. Hébergement et Nom de Domaine\r\nHébergement Web : BCM pourra proposer des solutions d\'hébergement performantes et sécurisées (ex: VPS, hébergement mutualisé optimisé) adaptées aux besoins de P2APARTNERS.\r\nNom de Domaine : P2APARTNERS devra fournir le nom de domaine souhaité. Si le nom de domaine n\'est pas encore enregistré, BCM pourra accompagner P2APARTNERS dans cette démarche.\r\n4.4. liste des mails pro \r\nabdoulba@p2apartners.com\r\npierrefaye@p2apartners.com\r\n5. Référencement Naturel (SEO)\r\nUne stratégie SEO \"On-Site\" et \"Technique\" sera intégrée dès la conception :\r\nStructure SEO-Friendly : URLs conviviales (ex: p2apartners.com/nos-services/creation-entreprise), balises sémantiques HTML5 (header, nav, main, article, footer).\r\nOptimisation des Balises Meta : Optimisation des balises pour chaque page, avec intégration des mots-clés pertinents pour l\'expertise comptable.\r\nOptimisation des Images : Balises alt descriptives pour les images.\r\nPerformances Techniques : La vitesse de chargement et le responsive design sont des facteurs SEO majeurs.\r\nIntégration de Google Analytics / Google Search Console : Mise en place de ces outils pour le suivi du trafic, le comportement des utilisateurs et la performance du site dans les résultats de recherche.\r\n\r\n6. Phase de Projet et Calendrier Prévisionnel\r\nPhase 1 : Cadrage et Conception (UX/UI)\r\nPhase 2 : Développement Frontend & Backend\r\nPhase 3 : Intégration de Contenu et Optimisation SEO\r\nPhase 4 : Tests et Recette\r\nPhase 5 : Déploiement et Mise en Production\r\nPhase 6 : Suivi et Maintenance (Post-Déploiement)', 'imgPost/17791122976.png', '2026-05-18', '2026-05-18 12:51:37', '2026-05-18 13:13:38', 1, 'Oumar Ndiaye', 'comment-creer-une-entreprise-au-senegal');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BUiURJImumUCNLDiVhaLInL9OCYvagYyiayDgWNg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ014dG9zWURQMlhKOGtxZFNRblNFYWY4dG5mNmlqbzNnaWFteUxtYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7czo1OiJyb3V0ZSI7Tjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1779198721);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oumar Ndiaye', 'contact@p2apartners.com', NULL, '$2y$12$iQwxp9zvMU9via4fM0f0c.35zgaLBbJNT2ShWAp4kbhtvptFHIzWS', NULL, '2026-05-13 09:09:43', '2026-05-13 09:09:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
