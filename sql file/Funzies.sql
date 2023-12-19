-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funzies`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Surname` varchar(200) NOT NULL,
  `Street` longtext NOT NULL,
  `City` varchar(200) NOT NULL,
  `ZipCode` varchar(200) NOT NULL,
  `Region` varchar(45) NOT NULL,
  `User` int(11) NOT NULL,
  `Def` tinyint(4) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Details` varchar(2000) NOT NULL,
  `Image` varchar(2000) DEFAULT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`ID`, `Name`, `Details`, `Image`, `Deleted`) VALUES
(1, 'LEGO', 'LEGO is a brand of plastic construction toys known for its interlocking bricks.', 'img/brands/6D97F0E5-F664-49CF-BE6D-02470CD70015.png', 0),
(2, 'Maisto', 'Maisto is a company that produces detailed die-cast models of cars, motorcycles, and airplanes.', 'img/brands/E2891B02-358F-4742-BB8A-EBCC6150E7FB.jpg', 0),
(3, 'Burago', 'Burago is a brand known for making detailed die-cast model cars, particularly in 1:18 and 1:24 scales, focusing on classic, luxury, and sports cars.', 'img/brands/A914AD1E-D16A-4AA4-BF5F-BE73BFA1F0EE.png', 0),
(4, 'Playmobil', 'Playmobil is a brand of toys characterized by its plastic figurines and themed playsets.', 'img/brands/985312D5-1AAF-4C9D-A6E5-50FC0731D3F9.jpg', 0),
(5, 'Funko Pop', 'Funko Pop is a line of stylized vinyl figurines and bobbleheads, known for their oversized heads and distinctive pop culture-themed designs.', 'img/brands/C5BE65CE-F747-4858-B8F7-DD5AE19669AE.png', 0),
(6, 'LOL Surprise', 'LOL Surprise is a brand of collectible dolls that come in a ball with layers of surprises, including accessories and outfits.', 'img/brands/B445A4C2-5AE3-4BF3-A72A-3655FD368927.png', 1),
(7, 'Mattel', 'Mattel is a leading global toy company known for brands like Barbie, Hot Wheels, and Fisher-Price.', 'img/brands/8B5415D7-70BD-41C0-955A-8FC16395205E.png', 1),
(8, 'Tamagotchi', 'Tamagotchi is a handheld digital pet simulation game where players care for and nurture a virtual pet.', 'img/brands/A6E74631-66D0-4BB9-A510-C6BE2260C07A.jpg', 1),
(9, 'Littlest Pet Shop', 'Littlest Pet Shop is a toy franchise featuring small plastic pets with oversized heads and distinctive eyes, often coming with accessories and playsets.', 'img/brands/43CB8808-E38D-4350-8D9F-A14AE522EA5D.png', 1),
(10, 'Minecraft', 'Minecraft is a popular sandbox video game that allows players to build and explore virtual worlds made of blocks, offering both creative and survival modes.', 'img/brands/17AB88F7-431B-4218-9F67-88D378C83128.png', 0),
(11, 'Pokémon', 'Pokémon is a media franchise centered around fictional creatures called &quot;Pokémon&quot;, which humans catch and train to battle each other for sport.', 'img/brands/0A385449-B6F2-4F06-AA3D-DA6F4D95BB8E.png', 0),
(12, 'Nintendo', 'Nintendo is a Japanese multinational video game company known for creating some of the most popular and influential video games and consoles in the industry.', 'img/brands/048DD5D8-4344-4578-B27D-BA85355BAA5A.png', 1),
(13, 'Anime', 'Anime refers to a style of animation originating from Japan, characterized by colorful artwork, fantastical themes, and vibrant characters.', 'img/brands/C1E3716B-B3CF-4F8B-946D-3C7114F5279C.jpg', 0),
(14, 'N/A', 'No Brand Applicable ', 'img/brands/520E97A2-5FA0-4AA5-A518-903A43A2969F.png', 1),
(15, 'Banpresto', 'Banpresto is a Japanese company known for producing toys and prize items for amusement arcades, including detailed figurines and collectibles from popular anime and manga series.', 'img/brands/EC0A6F4E-683E-4A35-ADDE-FF12E6EB057B.png', 0),
(16, 'BANDAI', 'Bandai is a Japanese company known for producing toys, video games, and a wide range of entertainment products, notably famous for action figures and model kits related to popular anime and TV series.', 'img/brands/FCB03118-8E62-4670-A79E-1F2CBF00F8A9.png', 0),
(17, 'Ravensburger', 'Ravensburger is a German company renowned for producing high-quality puzzles, board games, and educational toys for children and adults.', 'img/brands/BEB29127-39D4-4D5F-BC6D-5CF5CCA933D0.png', 0),
(18, 'Mattel', 'Mattel is a leading global toy company known for brands like Barbie, Hot Wheels, and Fisher-Price.', 'img/brands/DA147705-0D8B-439E-AE10-BF90A57BFE21.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Details` varchar(2000) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`, `Details`, `Deleted`) VALUES
(1, 'Board Games', 'Board games are tabletop games involving strategy, skill, or chance, played with pieces or cards on a pre-marked surface.', 0),
(2, 'Playing Cards', 'Playing cards are a set of rectangular pieces of card stock or plastic, typically used for playing a variety of games ranging from traditional card games to complex strategic activities.', 0),
(3, 'Models', 'Model consist of scaled-down replicas of various objects, like vehicles, buildings, or figures, often meticulously detailed and assembled by hobbyists.', 0),
(4, 'Figurines', 'Figurines are small, decorative objects, often representing characters or themes from popular culture, movies, or history, prized by collectors for their detail and rarity.', 0),
(5, 'Merchandise ', 'Merchandise refers to products branded with themes or characters from popular media, including clothing, accessories, toys, and collectibles, often marketed to fans.', 1),
(6, 'Gifts', 'Gifts are items given to someone without the expectation of payment, often as a gesture of appreciation, love, or celebration on various occasions.', 1),
(7, 'Miscellaneous', 'Miscellaneous refers to a category of items that don&#039;t fit neatly into any specific type or classification, often encompassing a diverse range of objects with varied purposes.', 1),
(8, 'Plushies ', 'Plushies are soft, stuffed toys, often resembling animals or characters, made from plush fabric and filling, popular among children and collectors.', 0),
(9, 'Puzzles', 'Puzzles are games or activities that require problem-solving, often involving assembling pieces or solving challenging questions or riddles.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `ID` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`ID`, `Status`, `Deleted`) VALUES
(1, 'Order Received', 0),
(2, 'Awaiting Payment', 0),
(3, 'Cancelled', 0),
(4, 'Processing', 0),
(5, 'Payment Received', 0),
(6, 'Awaiting Customer Response', 0),
(7, 'Shipped', 0),
(8, 'Delivered', 0),
(9, 'Received Customer Response', 0),
(10, 'Received Customer Response', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Description` longtext DEFAULT NULL,
  `Category` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `Brand` int(11) DEFAULT NULL,
  `Image` varchar(2000) DEFAULT NULL,
  `Deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Description`, `Category`, `Price`, `Stock`, `Brand`, `Image`, `Deleted`) VALUES
(1, 'Astra ', 'A game of Astra consists of continuous player turns until a certain number of Constellation cards are taken, when, after an endgame scoring, the player with the most Fame points wins. On your player turn, you may choose to either Observe or Rest.', 1, 39.9, 5, 14, 'img/brands/20DCC7FB-C6B8-43D4-BEFC-A9DCC89F9BA1.jpg', 0),
(2, 'Noli', 'Noli is a beautifully illustrated, family-friendly board game based on the fascinating history of the eponymous town. The game will find you bidding for the services of carpenters, masons, oarsmen and noble courtiers in order to win the Regata dei Rioni, sell fish and build the tallest tower.', 1, 50, 3, 14, 'img/brands/AD11F076-29D0-4290-8833-5EF6E6008911.jpg', 0),
(3, 'Petrichor: Cows', 'Petrichor: Cows is the final expansion for Petrichor. Cow meeples are now strolling among the crops, releasing Manure and Methane gas! The expansion adds cute cows to the mix, bringing with it a new Graze Action that allows players to affect the world’s climate, a Climate Board and a whole new set of Climate Sensitive Trees. The Cows Expansion is compatible with both the Honeybee and Flowers expansions and supports both 5 player mode and the Southern Winds solo mode.', 1, 25, 2, 14, 'img/products/CFA6AB4A-FE81-448B-8712-D9BFEC4E5ECB.jpg', 0),
(4, 'Hamlet The Village Building ', 'Lots of buildings, all with different shapes, all fitting together in interesting ways.  One central Hamlet that the players contribute to, with its own self-forming demand and supply economy.  Villagers walking through the Hamlet, delivering food to households and building resources to construction sites.  And one day, the Church will finally be built, and the once-little Hamlet has become a fledgling town.  Who will be the biggest benefactor when that happens?  1-4 Players  60+ Minutes Play Time', 1, 50, 2, 14, 'img/products/AA2776C3-B216-4C18-B4C1-FC9CF9F14332.jpg', 0),
(5, 'Monuments Deluxe Edition', 'In Monuments, 1 to 4 players lead their Mayan, Incan, Greek or Egyptian Civilization. Over the course of the game, you will build your mighty Monument, layer by layer. Impressive as this is, it is also important to grow your population, produce resources, expand your territories over land and sea, build buildings and keep your opponents at bay.  This Deluxe Edition comes with up to 15 cm / 6 inch high plastic miniature Monuments, wooden resources and player pieces, and a deluxe insert with removable game trays for player pieces and resources.', 1, 95, 1, 14, 'img/products/5C8ACDA1-AF63-4E3B-BB8E-CAFB8C017BEF.jpg', 0),
(6, 'Ticket To Ride Poland', 'From the sea to the Tatras, as wide as Poland is long, there are beautiful areas just waiting to be discovered. Do you want to observe the bison in the shadow of the Bialowieza Forest? Or maybe you prefer to take a walk through the charming streets of Wroclaw?  Ticket to Ride Map Collection: Volume 6½ – Poland, which debuted solely on the Polish market in 2019 as Wsiąść do Pociągu: Polska, challenges players to create connections between Poland’s neighboring countries, such as Germany, Ukraine, and the Czech Republic. In addition to connecting cities and completing tickets in the usual way of other Ticket to Ride games, your routes can reach border crossings and thus connect neighboring countries. If you manage to create such a connection on your turn, say, building a track so that you have a connected line from Ukraine to Germany, you draw the top point card from the stack for each of these two countries. Their point value is arranged in descending order, which means that the players who are the first to draw cards receive more points. If you later connect this network to the Czech Republic, then you’d draw the top card from each of the three countries’ card stacks — assuming that a country’s cards haven’t all been claimed, of course.', 1, 36, 8, 14, 'img/products/BD7BCF1F-142E-49CA-93A8-7C2E7175D748.jpg', 0),
(7, ' Tuscany Essential Edition', 'Tuscany Essential Edition is an expansion for Viticulture which features the three most popular expansion modules from the original Tuscany expansion:  Extended Board: New game board featuring four full seasons for worker placement. Structure Cards: New cards that players can build to supplement their existing structure figures. Special Workers: New workers with their own special abilities, which players can train. All other expansions from the original Tuscany expansion will go out of print.', 1, 34, 2, 14, 'img/products/49AF9034-A701-48DE-9E38-A2BBF7BD02D3.jpg', 0),
(8, 'Posthuman Saga', 'Posthuman Saga is a competitive, tactical survival adventure set in the post-apocalyptic world of Posthuman. The game can be played in 3 modes: Solo, 2 to 4 players Competitive or Team Versus; where 2 teams of 2 players, each sharing a map, compete for the favour of the Fortress. You play as one of the last human survivors. Just over a year ago all you wanted was to find the Fortress, the last human bastion in a region overrun by mutants. Today, you’re being sent out beyond the safety of its walls on a journey into the uncharted Wilds.', 1, 79.99, 1, 14, 'img/products/D962836E-5413-425A-AF29-E7EF5646A758.jpg', 0),
(9, 'Days of Ire: Budapest 1956', 'Days of Ire can be played solo, cooperatively, or one-version-many. It’s 1956 and waves of protests in Poland are once again showing the cracks in the Eastern European communist bloc. Emboldened by these signs, students and intellectuals in Budapest, the Hungarian capital, organise a protest of previously unseen magnitudes. As the communist leadership sweeps in to kill the movement in its tracks, a violent response is provoked, thus sparking the Revolution of the 23rd of October.', 1, 45, 2, 14, 'img/products/B9A14DF8-BF00-4DB7-9117-D40F099CF5DD.jpg', 0),
(10, ' Excavation Earth', 'In Excavation Earth, you lead a race of alien explorers on their quest to excavate human artefacts, curate the ultimate art collection, and most importantly, cash in big! A century from now, all that remains of humanity are the piles of garbage and detritus we left behind on a ruined Earth. Still – someone’s junk is someone else’s treasure! The alien factions of the Union of Free Races, a pan-galactic federation, have a penchant for the remains of extinct civilisations, viewing such objects as the highest form of art. When they discover the Earth, a gold rush ensues, as each race scrambles to claim the greatest artistic treasures for themselves.', 1, 55, 3, 14, 'img/products/65827979-2C6B-4165-8DCC-8EE3D445CA20.jpg', 0),
(11, 'Excavation Earth: It Belongs in a Museum', 'Excavation Earth: It Belongs in a Museum* is the second expansion for Excavation Earth. It introduces two new alien races, mysterious artefacts, a deck of technology cards and a whole new museum board. It adds new ways of scoring that create new paths to playing and winning the game!  * Requires Excavation Earth base game to play.', 1, 35, 2, 14, 'img/products/6AE274F1-8600-4CDE-B9CD-4E369FC0F4C0.jpg', 0),
(12, 'The Wolves', 'The Wolves is a pack-building strategy game for 2-5 players. It’s survival of the fittest as you compete to build the largest, most dominant pack by claiming territory, recruiting lone wolves, and hunting prey. But be careful not to expand too recklessly into terrain where your rivals thrive – they may lure members of your pack away.  A clever action-selection mechanism drives your choices. Each action requires you to flip terrain tiles matching the terrain where you wish to take your action. These double-sided tiles mean the actions you take this round will set up which terrain types you can act on in the next round. As you take actions to expand your pack’s control of each region, you will also upgrade your pack’s attributes, allowing you to take more aggressive actions as the game goes on.', 1, 57.99, 1, 14, 'img/products/314DBA53-00C3-4B66-ADBA-706920D7300A.jpg', 0),
(13, 'Monopoly Money Heist Edition', 'Join the resistance in this Monopoly: Netflix La Casa de Papel/Money Heist Edition board game inspired by the Netflix Series, La Casa de Papel/Money Heist. In this version of the Monopoly game, players join the heist! Choose a character and use their unique heist skill. Next secure key locations at the Mint and the Bank as one of the robbers on the Professor’s team.  Can you elude the Police and make off with the most cash to win? The Monopoly: Netflix La Casa de Papel/Money Heist Edition game is an exciting board game for adults and teens to play with friends. The game is for 2 to 6 players.', 1, 59.99, 1, 14, 'img/products/4A58F798-2986-4754-ACA1-8F3CDD2179EB.jpg', 0),
(14, 'Scythe: Expeditions Ironclad Edition', 'The Ironclad Edition of Expeditions features 5 large metal mechs (instead of plastic miniatures) and silicon base snaps (instead of plastic), as well as an individually numbered box with foil lettering. All other components and the gameplay elements are exactly the same as the standard version of Expeditions.  Neither version of Expeditions includes metal coins, but they are compatible with Scythe metal coins (and updated metal coins are available for preorder).', 1, 149.99, 3, 14, 'img/products/1C435A78-EFF1-4C4E-AD4D-56CFF92BDCB7.jpg', 0),
(15, 'Scythe: Expeditions', 'The sequel to Scythe sends players on a new adventure into Siberia, where a massive meteorite crashed near the Tunguska River, awakening ancient corruption. An expedition led by Dr. Tarkovsky ventures into the taiga to learn about the meteorite and its impact on the land. Itching for adventure, heroes from the war privately fund their own expeditions to Siberia, hoping to find artifacts, overcome challenges, and ultimately achieve glory. Expeditions has completely different mechanisms than Scythe, though the goal was to capture some of the same feelings that Scythe evokes, with a slightly darker, more supernatural theme.  Expeditions is a competitive, card-driven, engine-building game of exploration. Play cards to gain power, guile, and unique worker abilities; move your mech to mysterious locations and gain cards found among the tiles; use workers, items, meteorites, and quests to enhance your mech; and use power and guile to vanquish corruption.', 1, 94.99, 2, 14, 'img/products/724BD390-4044-479B-AB27-FE47143BBF57.jpg', 0),
(16, ' Pandemic: Legacy – Season Zero ', '1962 — The Cold War continues as a new threat looms on the horizon, a deadly new Soviet bioweapon, something called “Project MEDUSA”. You and your fellow medical graduates have been recruited by the CIA for the critical mission of investigating and preventing its development. Travel the world using carefully constructed aliases to move swiftly between Allied, Neutral, and Soviet cities. Your missions will require you to neutralize enemy agents, acquire specific targets, and set up other CIA agents on location to execute your operations without a hitch. As you complete objectives over the course of twelve months, each success or failure will bring you closer to the truth.  Combatting this dangerous new pathogen is of utmost importance, but it’s not the only threat you’ll encounter in the field. Enemy agents are taking root in all parts of the world, and it’s critical to your mission that you keep them contained before they can escalate international tensions. Luckily for you, you won’t be without backup. Coordinate with other covert operatives for assistance and make strategic use of these teams at different locations to clean up the board and keep your eye on your main objectives.  Designed as a prequel, Pandemic Legacy: Season 0 does not require you to have completed Season 1 and Season 2 before diving into this Cold War spy thriller. As in the first two Pandemic Legacy games, each time you play brings new cards, rules, and conditions that affect future games. Each alias you create will gain contacts and other assets to execute your plans more smoothly. And, of course, the CIA will be watching and evaluating your performance in the field. Work together with your fellow agents to prevent this new bio-threat — the fate of the world depends on it. Can you save humanity once again?', 1, 100, 1, 14, 'img/products/236530DC-F5F2-4F4E-B650-A4AC730180A7.jpg', 0),
(17, ' Pandemic: Legacy – Season Zero ', '1962 — The Cold War continues as a new threat looms on the horizon, a deadly new Soviet bioweapon, something called “Project MEDUSA”. You and your fellow medical graduates have been recruited by the CIA for the critical mission of investigating and preventing its development. Travel the world using carefully constructed aliases to move swiftly between Allied, Neutral, and Soviet cities. Your missions will require you to neutralize enemy agents, acquire specific targets, and set up other CIA agents on location to execute your operations without a hitch. As you complete objectives over the course of twelve months, each success or failure will bring you closer to the truth.  Combatting this dangerous new pathogen is of utmost importance, but it’s not the only threat you’ll encounter in the field. Enemy agents are taking root in all parts of the world, and it’s critical to your mission that you keep them contained before they can escalate international tensions. Luckily for you, you won’t be without backup. Coordinate with other covert operatives for assistance and make strategic use of these teams at different locations to clean up the board and keep your eye on your main objectives.  Designed as a prequel, Pandemic Legacy: Season 0 does not require you to have completed Season 1 and Season 2 before diving into this Cold War spy thriller. As in the first two Pandemic Legacy games, each time you play brings new cards, rules, and conditions that affect future games. Each alias you create will gain contacts and other assets to execute your plans more smoothly. And, of course, the CIA will be watching and evaluating your performance in the field. Work together with your fellow agents to prevent this new bio-threat — the fate of the world depends on it. Can you save humanity once again?', 1, 100, 1, 14, 'img/products/17134148-68D2-489B-AB1C-5C6375F1B1ED.jpg', 0),
(18, 'Petrichor: Flowers Board', 'Petrichor: Flowers is the first expansion to the Petrichor base game. It introduces a number of new gameplay elements including 3 new crop types, player powers and the Forecast mini-expansion. It also allows to play the Petrichor base game with up to 5 players.  * Requires Petrichor base game to play.', 1, 25, 5, 14, 'img/products/B236823F-2FE9-4075-B670-DDB24A9EA881.jpg', 0),
(19, 'Funko Games Nightmare Before Christmas ', '500 Pieces', 9, 17.99, 10, 5, 'img/products/6F82FEB3-247D-4DBD-9BAD-A66390A7AC76.jpg', 0),
(20, 'Minecraft Heroes Of The Village', 'Adventure and fun await in this cooperative Minecraft game! Can you protect the Village from raiding Illagers? Explore the world, collect Blocks, fight Mobs, and build defensive buildings before marauding Illagers invade. Your helpful animal companions will stand faithfully by your side!', 1, 34.99, 5, 10, 'img/products/939426D8-C476-4EC1-A4C2-B6EDED6EE009.jpg', 0),
(21, 'Minecraft Heroes Of The Village', 'Adventure and fun await in this cooperative Minecraft game! Can you protect the Village from raiding Illagers? Explore the world, collect Blocks, fight Mobs, and build defensive buildings before marauding Illagers invade. Your helpful animal companions will stand faithfully by your side!', 1, 34.99, 5, 10, 'img/products/FDF61DC7-ADF7-4E70-B83F-83172887E364.jpg', 0),
(22, 'Minecraft Heroes Of The Village', 'Adventure and fun await in this cooperative Minecraft game! Can you protect the Village from raiding Illagers? Explore the world, collect Blocks, fight Mobs, and build defensive buildings before marauding Illagers invade. Your helpful animal companions will stand faithfully by your side!', 1, 34.99, 5, 10, 'img/products/3CC414C1-3ABF-4DDB-B7A2-97A2E5801FDC.jpg', 0),
(23, 'Chainsaw Man Power Vibration Stars', '', 4, 35.99, 1, 15, 'img/brands/78496858-BD20-46EA-9EAB-357C512E4758.jpg', 0),
(24, 'Naruto Shippuden Haruno Sakura Panel Spectacle', '', 4, 39.99, 1, 15, 'img/brands/ACD36F4A-17BD-4762-BAE4-7CEF90AC7E74.jpg', 0),
(25, 'Pokemon Battle Figure Multi-Pack', '', 4, 49.99, 2, 11, 'img/products/99C535A7-2066-4717-922D-86D4E32BB3DD.jpg', 0),
(26, 'Death Note Misa SFC', '', 4, 42.99, 5, 13, 'img/products/FD3AC9A6-C0A0-45EE-9DB2-B3827C2F7CBA.jpg', 0),
(27, 'Demon Slayer Kanroji Mitsuri Noodle Stopper Furyu', '', 4, 35.99, 2, 13, 'img/products/60E1BFF3-49C1-4867-8E56-BD1630D7772D.jpg', 0),
(28, ' One Piece Portgas SCultures Colosseum', '', 4, 39.99, 3, 15, 'img/brands/BF1C7BAA-0B35-4A3B-829B-002BFA63A41D.jpg', 0),
(29, 'One Piece Luffy SCultures Colosseum', '', 4, 39.99, 1, 15, 'img/products/3A4D0D75-8222-449E-84F7-B9B0837214F0.jpg', 0),
(30, 'Jujutsu Kaisen Aoi Todo Combination Battle', '', 4, 38.99, 3, 15, 'img/products/49118B61-4D80-4778-8261-81F93EEF9C20.jpg', 0),
(31, 'Sailor Moon Cosmos Movie Sailor Chibi Moon Glitter &amp; Glamours', '', 4, 37.99, 3, 15, 'img/products/E74BEF86-66B7-42D3-BF49-FE0CE437C1B9.jpg', 0),
(32, 'Chainsaw Man Makima Chain Spirits', '', 4, 39.99, 1, 15, 'img/products/75237B43-3016-405A-B35B-2BB1D5FC9FF7.jpg', 0),
(33, 'Sailor Moon Cosmos Movie Sailor Moon Glitter &amp; Glamours', '', 4, 37.99, 1, 15, 'img/products/D930FD08-9A94-4056-AC8A-F35C0492BA09.jpg', 0),
(34, 'Naruto Shippuden Uchiha Sasuke 20th Anniversary Costume', '', 4, 37.99, 6, 15, 'img/products/7A35ED99-4856-4526-BDB4-ED31A1BA317F.jpg', 0),
(35, 'Bleach Rukia Kuchiki Solid And Souls', '', 4, 37.99, 1, 15, 'img/products/732CF689-AA23-41AA-B7DF-6D7A256A4B85.jpg', 0),
(36, 'One Piece WCF Wanokuni Onigashima 6 – 1', '', 4, 14.99, 10, 15, 'img/products/68F18EBC-BB48-4FBE-A865-BF5D41A40F14.jpg', 0),
(37, 'Naruto Shippuden Uzumaki Naruto Vibration Stars ', '', 4, 39.99, 4, 15, 'img/products/EB02F887-0F15-4A68-923D-F895B1A5153B.jpg', 0),
(38, 'One Piece Film Red Tony Tony Chopper More Beat Ichibansho', '', 4, 92.99, 5, 16, 'img/products/011AD997-5BA0-49BD-AC37-DEBC7843E8A9.jpg', 0),
(39, 'Sailor Moon Cosmos The Movie Eternal Sailor Jupiter Q Posket', '', 4, 33.99, 2, 15, 'img/products/AB878B4E-3B38-40D6-B0BC-5E8742E11FAC.jpg', 0),
(40, 'Sailor Moon Cosmos The Movie Eternal Sailor Mercury Q Posket', '', 4, 33.99, 2, 15, 'img/products/73DE3825-EA07-490A-98F7-30E8E33DDA68.jpg', 0),
(41, ' Sailor Moon Cosmos The Movie Luna Sofvimates', '', 4, 33.99, 2, 15, 'img/products/76BD4EB5-B607-4C21-A7D4-513726BA10F0.jpg', 0),
(42, 'Pretty Guardian Sailor Moon Eternal Sailor Chibi Moon Q Posket ', '', 4, 33.99, 2, 15, 'img/products/6CE277F8-26E8-45E7-8F4F-B5E653CD0820.jpg', 0),
(43, 'Naruto Shippuden Gaara Q Posket', '', 4, 33.99, 5, 15, 'img/products/E1B98593-7201-4FA5-A521-4C2E8A5E32BB.jpg', 0),
(44, 'My Hero Academia Pinky Age Of Heroes', '', 4, 37.99, 5, 15, 'img/products/C1EF6B7C-0ED8-4996-90B3-3C9B27DC34D9.jpg', 0),
(45, 'My Hero Academia Nejire Hado The Amazing Heroes ', '', 4, 37.99, 1, 15, 'img/products/C698B521-0808-494D-AF36-4688573AD0BE.jpg', 0),
(46, 'My Hero Academia Dabi Q Posket', '', 4, 33.99, 4, 15, 'img/products/55C11FC3-337D-450D-8C9E-091779BA0E5A.jpg', 0),
(47, 'Pokemon Select Battle Figure Squirtle Metallic', '', 4, 18.99, 1, 11, 'img/products/E901B30B-D416-419C-974D-4A645D57D361.jpg', 0),
(48, 'Pokemon Pichu, Pikachu, Raichu Evolution Multi-Pack', '', 4, 29.99, 3, 11, 'img/products/B415FA54-79F7-4AC4-B1EF-A806F6E02081.jpg', 0),
(49, 'My Hero Academia Izuku Midoriya The Amazing Heroes', '', 4, 35.99, 4, 15, 'img/products/3C7710F0-0A1E-41BE-BB2C-3200C4955FA3.jpg', 0),
(50, 'One Piece Film Red Usopp Ichibansho', '', 4, 99.99, 2, 16, 'img/products/6DF66FCF-4C62-4BE9-8B18-0C63BDBDE1E1.jpg', 0),
(51, 'One Piece Film Red Monkey D. Luffy Ichibansho', '', 4, 149.99, 3, 16, 'img/products/11BA570E-4B3E-4B61-88DF-9068693DDC9B.jpg', 0),
(52, 'Sailor Moon &amp; Chibi Moon Ichibansho', '', 4, 109.99, 1, 16, 'img/products/D94034ED-A8D8-45CC-A493-A02662482910.jpg', 0),
(53, 'Minecraft Plush Figure Steve', '23 cm', 8, 19, 5, 10, 'img/products/1DDDE75C-9CB4-42A4-BE85-0324C9203507.png', 0),
(54, 'Pokémon Plush Figure Sleeping Pichu', '45cm', 8, 59, 2, 11, 'img/products/2E4A118A-F344-4581-B421-9F70E9D14FE7.png', 0),
(55, 'Pokemon Pikachu', '23cm', 8, 25, 3, 11, 'img/products/D1A101CC-66F0-4D0E-AB53-D6AC1179D55A.png', 0),
(56, 'Naruto Shippuden Uzumaki Nine Tails', '29cm', 8, 29, 0, 13, 'img/products/9476F9B8-FD26-4F8A-B679-3E9D9E428E4C.png', 0),
(57, 'Demon Slayer Tanjiro', '27cm', 8, 22.99, 1, 13, 'img/products/BD2CF3F4-F61D-4B41-A827-8FFCFEBB318D.png', 0),
(58, 'Demon Slayer Zenitsu', '27cm', 8, 22.99, 1, 13, 'img/products/7FDC3C3C-B3AC-4BB6-A0C4-2DD646C70D9E.png', 0),
(59, 'Minecraft Mega Squishme Chicken', '', 8, 17.99, 0, 10, 'img/products/FED6AD8E-89AB-4B39-88EF-502D714B89B7.png', 0),
(60, 'Dragon Ball Shenron ', '', 8, 22.99, 3, 14, 'img/products/66A47E99-AF7F-42F7-A620-7202E65B206C.jpg', 0),
(61, 'Pokemon Pikachu With Heart Pokeball', '8inch', 8, 24.99, 3, 11, 'img/products/40F6CAA9-3E9D-406B-A78E-5B8E19F61988.jpg', 0),
(62, ' Squritle ', '8inch', 8, 27, 2, 11, 'img/products/1365EBAE-7A71-4F66-81A5-572EBC83EFA4.jpg', 0),
(63, 'Pokemon Jigglypuff ', '20cm', 8, 26.99, 5, 11, 'img/products/16FCD7C9-FDCB-4737-9362-57309369FAA8.jpg', 0),
(64, 'Pokemon Scorbunny', '', 8, 26.99, 2, 11, 'img/products/3391158F-0F04-45EB-A3B1-E87D95F444E0.jpg', 0),
(65, 'Pokemon Pancham', '8inch', 8, 27, 3, 11, 'img/products/25948580-DAEA-4637-BD6C-2C91E0D22021.jpg', 0),
(66, 'Funko: Stranger Things Hunter Robin', '', 8, 17.99, 3, 5, 'img/products/AD0103F0-8CF5-440F-9556-97742B4B95BC.jpg', 0),
(67, 'Funko: Stranger Things Hunter Steve', '', 8, 17.99, 5, 5, 'img/products/AF0018EA-A06D-4C5E-8A09-35C128F71469.jpg', 0),
(68, 'My Hero Academia ', '18cm', 8, 19.99, 2, 13, 'img/products/BC016282-D5B3-4B44-8ECE-1095E8340345.jpg', 0),
(69, 'Funko: Harry Potter Hagrid', '4inch', 8, 15.99, 3, 5, 'img/products/36AC1047-64A4-46F8-A874-F9F75D0A1A6A.jpg', 0),
(70, 'Pokemon Charmander, Bulbasaur and Squirtle 3 Puzzles', '49 Pieces', 9, 14.99, 5, 17, 'img/products/6E3A4F3D-2EA9-439C-89FE-084FB7D6BB93.jpg', 0),
(71, 'Pokemon Puzzle XXL', '200 Pieces', 9, 16.99, 3, 17, 'img/products/1FC9C360-3BD9-4BA3-98F6-2AB84A6FA20A.jpg', 0),
(72, 'Naruto Shippuden Back to Konoha', '1000pieces', 9, 22.99, 3, 13, 'img/products/7AD8938A-646F-4AB1-BB8C-B9BA88A8D1E0.jpg', 0),
(73, 'Naruto Shippuden Puzzle', '1000 Piece', 9, 21.99, 3, 13, 'img/products/CD24228E-60FD-41D1-A240-A414C2702F27.jpg', 0),
(74, 'Scooby-Doo Treasure Hunt XXL', '200 Pieces', 9, 16.99, 10, 17, 'img/products/50DD127B-C547-45A1-A1E1-309BBF23B10E.jpg', 0),
(75, 'Star Wars The Mandalorian The Confrontation XXL ', '200 Pieces', 9, 16.99, 7, 17, 'img/products/E6D1894C-7E90-4BE7-8921-850502DDC3A5.jpg', 0),
(76, 'Dragon Ball Super Goku &amp; Vegeta Cube', '500 Pieces', 9, 18.99, 3, 13, 'img/products/13386489-A77E-4CFD-ADEB-EC8D7E0546C4.jpg', 0),
(77, 'Dragon Ball Supercolor', '180 Pieces', 9, 7.99, 8, 13, 'img/products/7B67C81A-22CA-41C1-BB6F-AF0199DC39B9.jpg', 0),
(78, 'Hearthstone Heroes of Warcraft', 'Puzzle 1000 Piece', 9, 29.99, 1, 14, 'img/products/E058E7E5-BB5F-40CA-99EB-8DE2BC5124E8.jpg', 0),
(79, 'Looney Tunes Bugs Bunny ', '500 Pieces', 9, 14.99, 10, 14, 'img/products/CDE0013B-6336-407C-B032-A8CC7139DA4B.jpg', 0),
(80, 'Naruto Shippuden Naruto’s Adventures XXL', '300 Pieces', 9, 15.99, 5, 17, 'img/products/DC644123-85E3-48F4-A086-CFD0D0AFFA5B.jpg', 0),
(81, 'What’s Your Number', '', 2, 32, 2, 14, 'img/products/3265CD1F-1615-4EBF-A901-8853DF8744D8.png', 0),
(82, 'IT Shuffle Card Game', '', 1, 15.99, 2, 14, 'img/products/86F247AE-DC55-4C24-9DB1-946BEB213CD4.png', 0),
(83, 'Pitchstorm Party Game', '', 1, 35, 2, 14, 'img/products/4312C43F-FDBA-43BF-9B9B-416947150FAD.png', 0),
(84, 'Dot Dot Dot: Dating App Edition', '', 2, 25, 1, 14, 'img/products/627E811E-2DDD-4564-887A-F10AF6B2660F.png', 0),
(85, 'Cards Against Humanity Blue Box', '', 2, 35, 1, 14, 'img/products/00DECDBB-0A14-4317-83DF-C4A7B9F2B57F.png', 0),
(86, 'Poker Set 500 Tokens + Suitcase', '500 Tokens + Suitcase', 2, 89, 4, 14, 'img/products/18B32057-2136-4AD4-B265-10A77B3F1DE2.png', 0),
(87, 'What do you Meme ?', '', 2, 20, 1, 14, 'img/products/6C27B37D-B642-4104-B885-53555FE9942E.png', 0),
(88, 'Uno Flip', '', 2, 11.99, 5, 18, 'img/products/B2EE052A-240C-4523-8C3D-77D5B5B811D8.jpg', 0),
(89, 'Uno', '', 2, 10.99, 3, 18, 'img/products/657FF74D-19AD-42D4-9A61-C552ABF6C45C.jpg', 0),
(90, 'Playing Cards ', '', 2, 3.99, 5, 14, 'img/products/F2F4C77F-45D6-4CEA-9EA5-F184629A2E22.jpg', 0),
(91, 'Vi Jew Va', '', 2, 14.99, 3, 14, 'img/products/3477F3FB-8743-4A3A-86F3-29839F07ADFF.jpg', 0),
(92, 'Mattel Phase 10 Cards', '', 2, 11.99, 1, 18, 'img/products/3FFD1BD1-F0B4-4BCF-9B16-B10CBE3E6010.jpg', 0),
(93, 'Monopoly Bid Game', '', 2, 11.99, 2, 14, 'img/products/889D6E33-E0E1-4B81-B4B3-5D193760574B.jpg', 0),
(94, 'The Voting Game', '', 2, 39.99, 4, 14, 'img/products/345D0AD8-0EE9-4372-983E-B89041B9BC40.jpg', 0),
(95, 'Pick Your Poison Card Game', '', 2, 39.99, 3, 14, 'img/products/50854455-664F-42A7-B6AA-D58F1E7F4DCF.jpg', 0),
(96, 'Cards Against Humanity Green Box', '', 2, 35, 6, 14, 'img/products/B734EEEF-C656-42AA-82A1-E4B1F3D9909B.png', 0),
(97, 'Cards Against Humanity – UK Edition', '', 2, 45, 3, 14, 'img/products/BC71585C-5BA8-447E-8299-1B96416DCBE2.jpg', 0),
(98, 'Burago Ferrari LaFerrari 1/24 Diecast Model', '', 3, 31.99, 2, 3, 'img/products/F7EA795A-4194-4DFF-BBC0-A7722F84E77E.jpg', 0),
(99, 'Maisto 1969 Dodge Charger R/T Blue 1/24 Diecast Model', '', 3, 28, 5, 2, 'img/products/41BDAA75-4024-4D8E-826A-5A0565AACF82.jpg', 0),
(100, 'Maisto Porsche 911 GT2 RS Yellow with Carbon Hood 1/24 Diecast Model', '', 3, 27.99, 8, 2, 'img/products/40E7CEF5-22BA-45FD-AD63-760A3BFF3793.jpg', 0),
(101, 'Burago Audi A1 Red 1/24 Diecast Model', '', 3, 24.99, 6, 2, 'img/products/82A4A9B0-7302-4301-B9FF-C0A01B110CAC.jpg', 0),
(102, 'Maisto 2008 Dodge Challenger SRT8 Diecast Model', '', 3, 27.99, 4, 2, 'img/products/086BD6BD-DEA3-4DAE-814B-BE0D580B0F27.jpg', 0),
(103, 'Burago 1955 Volkswagen Kafer Beetle Beige 1/18 Diecast Model', '', 3, 64.99, 2, 3, 'img/products/45A0FD3D-604B-45AE-942B-57CE35E8B6DA.jpg', 0),
(104, 'Maisto 2017 Chevy Corvette Grand Sport 1/24 Diecast Model', '', 1, 27.99, 5, 2, 'img/products/300D6127-6F22-407F-A150-345B3496DC8B.jpg', 0),
(105, 'Maisto Lamborghini Aventador LP 700-4 1/24 Diecast Model', '', 3, 27.99, 4, 2, 'img/products/0A41616B-4655-4CE4-B23A-A3922DA89D73.jpg', 0),
(106, 'Burago Fiat 500 1/24 Diecast Model', '', 3, 24.99, 3, 3, 'img/products/6D648777-C024-4632-B640-E290D0E6D539.jpg', 0),
(107, 'Burago Land Rover Red 1/24 Diecast Model', '', 3, 24.99, 4, 3, 'img/products/E4C30A5F-F1E1-4B9B-8B9E-4319253EE0F9.jpg', 0),
(108, 'Maisto 2014 Ford Mustang Street Racer 1/24 Diecast Model', '', 3, 27.99, 3, 2, 'img/products/F7446F76-6446-454B-B7B2-FD828F4937CB.jpg', 0),
(109, 'Maisto Mini Cooper 1/24 Diecast Model', '', 3, 27.99, 6, 2, 'img/products/B3C250F7-799D-49DA-BB89-E8A18415B9B9.jpg', 0),
(110, 'Burago Ford Capri 1982 1/24 Diecast Model', '', 3, 29.99, 6, 3, 'img/products/508C0D00-EA54-4E4C-9AD1-5C867F0BD689.jpg', 0),
(111, 'Funko Pop! Dead pool', '400', 4, 15, 5, 5, 'img/products/AACC1E53-C0B9-4912-A3CF-5E53EC9F9255.png', 0),
(112, 'Funko Pop! Disney Pixar Lightyear : Zurg 1214', '', 4, 15, 3, 5, 'img/products/CECF9784-D872-47F7-B641-6A5E8D9039C4.png', 0),
(113, 'Funko Pop! Attack on Titan : Sasha Braus 1448', '', 4, 15, 1, 5, 'img/products/F3FA0E60-481F-4265-830A-A4134ECD5DF9.png', 0),
(114, 'Funko Pop! WWE: Chyna 85', '', 4, 15, 2, 5, 'img/products/A6B0B44E-DEA4-4EEE-8174-F20C98A14292.png', 0),
(115, 'Funko Pop! Godzilla Singular Point: Mei Kamino with Pelops 1470', '', 4, 15, 0, 5, 'img/products/D8260747-7006-4850-A5C7-747408C28A8E.png', 0),
(116, 'Funko Pop! Godzilla Singular Point : Godzilla with Heat Ray 1469', '', 4, 15, 2, 5, 'img/products/66537E84-6ABB-4F0B-B553-0664A559CA40.png', 0),
(117, 'Funko Pop! Naruto Shippuden : Shikamaru Nara 933', '', 4, 15, 3, 5, 'img/products/B2054D51-A573-4C9E-A9C2-7AAD51AD4A51.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `Content` longtext NOT NULL,
  `User` int(11) NOT NULL,
  `Product` int(11) NOT NULL,
  `Rating` float NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewstatus`
--

CREATE TABLE `reviewstatus` (
  `ID` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reviewstatus`
--

INSERT INTO `reviewstatus` (`ID`, `Status`, `Deleted`) VALUES
(1, 'Approved', 0),
(2, 'Disapproved', 0),
(3, 'Awaiting Approval', 0),
(4, 'Awaiting Customer Response', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `Name`, `Details`, `Deleted`) VALUES
(1, 'Administrator', 'Has access to all the information related to the store. ', 0),
(2, 'Customer', 'Has access to the main website only.', 0),
(3, 'Employee', 'Has limited access to the information related to the store. (Products, Categories, Brands)', 0),
(5, 'Test', 'Test object', 1),
(6, 'Test', 'Test object', 1),
(7, 'Test', 'Test object', 1),
(8, 'Test', 'Test object', 1),
(9, 'Test', 'Test object', 1),
(10, 'Test', 'Test object', 1),
(11, 'Test', 'Test object', 1),
(12, 'efwf', 'fe', 1),
(13, 'fedwf', 'few', 1),
(14, 'gregre', 'gtr', 1),
(15, 'fewfw', 'fewfw', 1),
(16, 'fewfew', 'fgwe', 1),
(17, 'fwe', 'few', 1),
(18, 'fe', 'few', 1),
(19, 'Test', 'Test object', 1),
(20, 'Test', 'Test object', 1),
(21, 'Test', 'Test object', 1),
(22, 'Test', 'Test object', 1),
(23, 'Test', 'Test object', 1),
(24, 'Test', 'Test object', 1),
(25, 'Test', 'Test object', 1),
(26, 'Updated Role', 'This is an updated test case', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Surname` varchar(200) NOT NULL,
  `Joined` datetime NOT NULL,
  `Verified` tinyint(4) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `Role` int(11) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Name`, `Surname`, `Joined`, `Verified`, `Password`, `ContactNumber`, `Role`, `Deleted`) VALUES
(2, 'n4dinevid4l@hotmail.com', 'Nadine', 'Vidal', '2023-12-16 10:13:50', 1, '6367C48DD193D56EA7B0BAAD25B19455E529F5EE', '79316986', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `address_user_idx` (`User`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `order_status_idx` (`status`),
  ADD KEY `order_user_idx` (`user`),
  ADD KEY `order_address_idx` (`address`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order`,`product`),
  ADD KEY `orderprod_product_idx` (`product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_brand_idx` (`Brand`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `review_user_idx` (`User`),
  ADD KEY `review_product_idx` (`Product`),
  ADD KEY `review_status_idx` (`Status`);

--
-- Indexes for table `reviewstatus`
--
ALTER TABLE `reviewstatus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD KEY `user_role_idx` (`Role`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `wishlist_user_idx` (`user`),
  ADD KEY `wishlist_product_idx` (`product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewstatus`
--
ALTER TABLE `reviewstatus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_user` FOREIGN KEY (`User`) REFERENCES `user` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_address` FOREIGN KEY (`address`) REFERENCES `address` (`ID`),
  ADD CONSTRAINT `order_status` FOREIGN KEY (`status`) REFERENCES `orderstatus` (`ID`),
  ADD CONSTRAINT `order_user` FOREIGN KEY (`user`) REFERENCES `user` (`ID`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `orderprod_order` FOREIGN KEY (`order`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `orderprod_product` FOREIGN KEY (`product`) REFERENCES `product` (`ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand` FOREIGN KEY (`Brand`) REFERENCES `brand` (`ID`),
  ADD CONSTRAINT `product_category` FOREIGN KEY (`Category`) REFERENCES `category` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_product` FOREIGN KEY (`Product`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `review_status` FOREIGN KEY (`Status`) REFERENCES `reviewstatus` (`ID`),
  ADD CONSTRAINT `review_user` FOREIGN KEY (`User`) REFERENCES `user` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`Role`) REFERENCES `role` (`ID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product` FOREIGN KEY (`product`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `wishlist_user` FOREIGN KEY (`user`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
