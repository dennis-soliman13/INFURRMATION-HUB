-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 09:15 PM
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
-- Database: `pethubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `title`, `content`, `date_added`, `category`) VALUES
(1, 'Grooming', 'Content about grooming...', '2024-11-25 15:02:27', ''),
(2, '', '', '2024-11-25 15:03:48', ''),
(3, '', 'ds', '2024-11-25 15:10:43', ''),
(4, '', '', '2024-11-25 15:24:23', 'Unknown'),
(5, '', '', '2024-11-25 15:24:36', 'Unknown'),
(6, '', '', '2024-11-25 15:28:25', 'Cats'),
(7, '', '', '2024-11-25 15:28:32', 'Cats'),
(8, '', '', '2024-11-25 15:28:41', 'Cats'),
(9, 'Grooming', 'Content about grooming...', '2024-11-25 15:28:57', 'Cats'),
(10, 'Nutrition', 'Content about nutrition...', '2024-11-25 15:33:19', 'Cats'),
(11, 'Dos and Don’ts (Teaching)', 'Content about teaching...', '2024-11-25 15:33:29', 'Cats'),
(12, 'Recommended Products', 'Content about recommended products...', '2024-11-25 15:33:35', 'Cats'),
(13, '', '', '2024-11-25 15:33:37', 'Cats'),
(14, 'Grooming', 'Content about grooming...', '2024-11-25 15:33:39', 'Cats'),
(15, '', '', '2024-11-25 15:33:49', 'Cats'),
(16, 'Nutrition', 'Content about nutrition...', '2024-11-25 15:34:26', 'Cats'),
(17, 'Dos and Don’ts (Teaching)', 'Content about teaching...', '2024-11-25 15:34:32', 'Cats'),
(18, 'Recommended Products', 'Content about recommended products...', '2024-11-25 15:34:37', 'Cats'),
(19, '', '', '2024-11-25 15:35:05', 'Cats'),
(20, 'Proper Environment/Caging', 'Content about environment...', '2024-11-25 15:36:41', 'Cats'),
(21, 'Proper Environment/Caging', 'Content about environment...', '2024-11-25 15:39:20', 'Cats'),
(22, 'Recommended Products', 'Content about recommended products...', '2024-11-25 15:39:34', 'Cats'),
(23, 'Grooming', 'Content about grooming...', '2024-11-25 15:42:45', 'Cats'),
(24, 'Recommended Products', 'Content about recommended products...', '2024-11-25 15:43:30', 'Cats'),
(25, 'Nutrition', 'Content about nutrition...', '2024-11-25 15:43:59', 'Cats'),
(26, 'Grooming', 'Content about grooming...', '2024-11-25 15:59:24', 'Cats'),
(27, 'Proper Environment/Caging', 'Content about environment...', '2024-11-25 15:59:55', 'Cats'),
(28, 'Grooming', 'Content about grooming...', '2024-11-25 16:00:08', 'Cats'),
(29, 'Recommended Products', 'Content about recommended products...', '2024-11-25 16:00:26', 'Cats'),
(30, 'Recommended Products', 'Content about recommended products...', '2024-11-25 16:01:02', 'Dogs'),
(31, 'Dos and Don’ts (Teaching)', 'Content about teaching...', '2024-11-25 16:01:25', 'Dogs'),
(32, 'Grooming', 'Content about grooming...', '2024-11-25 16:04:03', 'Dogs'),
(33, 'Grooming', 'Content about grooming...', '2024-11-25 16:04:15', 'Cats'),
(34, 'Recommended Products', 'Content about recommended products...', '2024-11-25 16:06:06', 'Cats'),
(35, 'Recommended Products', 'Content about recommended products...', '2024-11-25 16:06:23', 'Dogs'),
(36, 'Dos and Don’ts (Teaching)', 'Content about teaching...', '2024-11-25 16:06:34', 'Dogs'),
(37, 'Proper Environment/Caging', 'Content about environment...', '2024-11-25 16:08:27', 'Rodent'),
(38, 'Recommended Products', 'Content about recommended products...', '2024-11-25 16:08:40', 'Rodent'),
(39, 'Nutrition', 'Content about nutrition...', '2024-11-25 16:08:53', 'Birds'),
(40, 'Recommended Products', 'Content about recommended products...', '2024-11-26 10:48:11', 'Dogs');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarksnew`
--

CREATE TABLE `bookmarksnew` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmarksnew`
--

INSERT INTO `bookmarksnew` (`id`, `title`, `url`, `created_at`) VALUES
(10, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 17:32:09'),
(11, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 17:32:10'),
(12, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 17:32:12'),
(17, 'DOS AND DONT\'S OF DOGS', 'http://localhost/dogs-teaching.php#teaching', '2024-12-16 17:34:18'),
(18, 'DOS AND DONT\'S OF DOGS', 'http://localhost/dogs-teaching.php#teaching', '2024-12-16 17:34:20'),
(22, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 17:34:29'),
(26, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 18:11:12'),
(27, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 18:50:15'),
(28, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 19:38:00'),
(29, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:03:26'),
(31, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:06:03'),
(32, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:06:07'),
(33, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:06:10'),
(34, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:06:18'),
(35, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:08:31'),
(36, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:11:01'),
(37, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:11:03'),
(38, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:11:05'),
(39, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:11:50'),
(40, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:11:52'),
(41, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:12:07'),
(42, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:13:06'),
(43, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:16:28'),
(44, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:16:29'),
(45, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:16:49'),
(46, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:18:39'),
(47, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:18:45'),
(48, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:19:01'),
(49, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:19:07'),
(50, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:19:22'),
(51, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:19:41'),
(52, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:19:55'),
(53, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:20:02'),
(54, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:20:19'),
(55, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:42:49'),
(56, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-16 23:44:42'),
(57, 'GROOMING FOR DOGS', 'http://localhost/dogs.php', '2024-12-16 23:53:30'),
(58, 'GROOMING FOR DOGS', 'http://localhost/dogs.php', '2024-12-17 00:27:19'),
(59, 'GROOMING FOR DOGS', 'http://localhost/dogs.php', '2024-12-17 00:28:33'),
(60, 'GROOMING FOR DOGS', 'http://localhost/dogs.php', '2024-12-17 01:27:24'),
(61, 'GROOMING FOR DOGS', 'http://localhost/dogs.php', '2024-12-17 02:05:33'),
(62, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#domestic', '2024-12-17 03:48:45'),
(63, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#exotic', '2024-12-17 03:51:40'),
(64, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 06:33:49'),
(65, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 06:35:54'),
(66, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 06:36:04'),
(67, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 06:41:41'),
(68, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 06:44:16'),
(69, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 15:03:59'),
(70, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 15:27:08'),
(71, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 15:42:22'),
(72, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 21:55:11'),
(73, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 21:55:16'),
(74, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-17 22:16:21'),
(75, 'GROOMING FOR CATS', 'http://localhost/cats-grooming.php#grooming', '2024-12-17 23:05:57'),
(76, 'CARING FOR FISHES', 'http://localhost/fishes-grooming.php#grooming', '2024-12-17 23:06:09'),
(77, 'GROOMING FOR DOMESTIC PIGS', 'http://localhost/domesticpig-grooming.php#grooming', '2024-12-17 23:34:21'),
(78, 'CARING FOR FISHES', 'http://localhost/fishes-grooming.php#grooming', '2024-12-17 23:35:06'),
(79, 'CARING FOR FISHES', 'http://localhost/fishes-grooming.php#grooming', '2024-12-17 23:35:30'),
(80, 'GROOMING FOR TARANTULAS', 'http://localhost/tarantulas-grooming.php#grooming', '2024-12-17 23:35:56'),
(81, 'CARING FOR FISHES', 'http://localhost/fishes-grooming.php#grooming', '2024-12-17 23:37:09'),
(82, 'CARING FOR FISHES', 'http://localhost/fishes-grooming.php#grooming', '2024-12-17 23:37:26'),
(83, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-18 02:58:48'),
(84, 'GROOMING FOR CATS', 'http://localhost/cats-grooming.php#grooming', '2024-12-18 02:58:53'),
(85, 'GROOMING FOR TURTLES', 'http://localhost/turtle-grooming.php#grooming', '2024-12-18 03:24:17'),
(87, 'GROOMING FOR CATS', 'http://localhost/dogs.php#grooming', '2024-12-19 12:52:21'),
(88, 'GROOMING FOR DOGS', 'http://localhost/dogs.php#grooming', '2024-12-19 12:57:54'),
(89, 'GROOMING FOR BALL PYTHONS', 'http://localhost/ballpython-grooming.php#grooming', '2025-06-19 18:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `section`, `content`) VALUES
(1, 'header', 'Welcome to My Site!'),
(2, 'about', 'This is the about section of the site.'),
(3, 'footer', 'Contact us at email@example.com.'),
(4, 'HOW OFTEN SHOULD I GROOM MY DOG?', '<h3>BRUSHING</h3>\n        <p>Different types of brushes are suited for different coat types, so choose the right brush for your dog. Dogs with long hair may need to be brushed every day, but short-haired types can be brushed once a week.\n        </p>\n        <h3>BATHING</h3>\n        <p>Bathing your dog on a regular basis helps to keep them clean and fresh-smelling. However, bathing too regularly can deplete the skin\'s natural oils, resulting in dry skin and other skin irritations. Most dogs require only one bath every three months. Lather with a dog-specific shampoo and warm water, then rinse completely.</p>\n        <h3>NAIL TRIMMING</h3>\n        <p>Long nails can be quite painful for your dog. Regularly inspecting your dog\'s nails (including dewclaws) and clipping as needed will help prevent nail-related issues. If your dog walks regularly on harsh surfaces, such as pavement, their nails may naturally wear down. A decent test to see whether they are too long is to try to slide a bankcard between their nail and the floor while standing; if you can\'t, they could use a little trimming. Use a nail clipper made for dogs and be careful not to cut the quick, which is a blood vessel that goes into the nail. Nail trimming is best done after a bath because the water softens them.\n        </p>\n        <h3>EAR CLEANING</h3>\n        <p>Cleaning your dog\'s ears helps to prevent infections and pain, but too much cleaning might make them unpleasant. Only clean your dog\'s ears if there is a noticeable accumulation of wax. Use a dog-specific ear cleaner to gently clean your dog\'s ears. Be careful not to put anything too deeply into the ear canal, as this might cause injury. If you notice any odor, irritation, or discharge in your ear, contact your veterinarian. \n        </p>\n        <h3>TEETH CLEANING</h3>\n        <p>Just like humans, dogs require regular dental care. Plaque and tartar buildup can cause gum disease and tooth loss. Brush your dog\'s teeth with a toothbrush and toothpaste designed for dogs, and introduce it cautiously. Once your dog is used to having its teeth washed, try brushing them a few times per week. If your dog dislikes having its teeth washed, chews and dental toys might help keep his teeth clean by manually scraping plaque off the tooth surface.\n        </p>\n        \n        <a href=\"https://www.petmd.com/dog/general-health/flea-and-tick-prevention-and-treatment-dogs\" target=\"_blank\">\n        <h2>PROBLEM WITH TICKS AND FLEAS?</h2></a>\n        <p>There are a variety of products to help keep your dog free of parasites. These products can be in the form of pesticides, repellents, or growth inhibitors. Each tackles pests at different life stages to prevent infestations.\n        Some products are only effective against one parasite (typically fleas).</p>\n        <p>Combination flea and tick preventatives for dogs contain multiple ingredients to battle different types of pests. These prevention options may also provide additional protection against heartworms, skin and ear mites, and intestinal parasites.</p>\n        <p>Flea and tick preventatives commonly come in two forms:</p>\n        <ol><li><strong>Oral:</strong> chewable tablet that your dog ingests</li>\n        <li><strong>Topical:</strong> liquid that’s applied between the should blades or down the back of your dog</li></ol>\n        <p>Before deciding on a flea and tick medication, always check with your veterinarian and make sure it’s a good fit for your dog. </p>\n        <a href=\"https://bondvet.com/b/dog-rash\" target=\"_blank\"><h2>SKIN RASHES, ITCHY SPOTS, AND/OR BALD SPOT?</h2></a>\n        <p>There are many possible causes of skin problems, all of which can cause similar symptoms. Here are some common symptoms:</p>\n\n        <ul>\n        <li><strong>Fleas and flea allergy dermatitis</strong> (an allergic response to flea bites that causes extreme itchiness and commonly leads to skin infections).</li>\n\n        <li><strong>Allergies</strong>. Most commonly, this includes environmental/seasonal allergies, also known as atopy. Food allergies or contact allergies (from plastic food bowls, for example) can also occur but are less common.</li>\n\n        <li><strong>Contact irritation</strong> (shampoo, home cleaning products, a collar that chafes the skin, etc.).</li>\n\n        <li><strong>Skin parasites</strong> such as mites/mange, ticks, or lice.</li>\n\n        <li><strong>Medical conditions</strong> such as hormonal imbalances, autoimmune diseases, or other underlying issues.</li>\n\n        <li><strong>Obsessive chewing or licking behavior</strong> due to stress or boredom.</li>\n\n        <li>Anything else that can affect the skin, such as <strong>skin growths, matted fur, sunburn, poison ivy, poor nutrition, insect bites, dry skin, etc.</strong></li>\n\n        <li><strong>Bacterial infections</strong>. Primary infections are possible, but more commonly, bacteria that normally live on the skin become opportunistic and overgrow due to disruption in the skin’s protective barrier secondary to rashes or wounds.</li>\n\n        <li><strong>Fungal infections</strong>. These are usually opportunistic yeast infections that occur due to disruption of the protective skin barrier. However, less commonly, other fungi (including ringworm infection that is much more common in cats than in dogs) can occur.</li>\n        </ul>\n\n        <p>Check with your veterinarian before giving any medication or supplement at home, to be sure it’s safe for your pup. Some substances can be toxic or harmful, including “dog-safe” medications and supplements if they are given at the wrong dosage.</p>\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `pet_data`
--

CREATE TABLE `pet_data` (
  `pet_id` int(11) NOT NULL,
  `pet_type` varchar(255) NOT NULL,
  `pet_housing` text NOT NULL,
  `grooming` text NOT NULL,
  `teaching` text NOT NULL,
  `nutrition` text NOT NULL,
  `recommendation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_data`
--

INSERT INTO `pet_data` (`pet_id`, `pet_type`, `pet_housing`, `grooming`, `teaching`, `nutrition`, `recommendation`) VALUES
(6, 'cats', 'cat_pet housing', 'cat_Grooming', 'cat_teaching', 'cat_nutrition', 'cat_recommendation'),
(7, 'Birds', 'birds_pet housing', 'birds_grooming', 'birds_teaching', 'birds_nutrition', 'birds_recommendation'),
(8, 'dogs', 'dogs_housing', 'dogs_grooming', 'dogs_teaching', 'dogs_nutrition', 'dogs_recommendation');

-- --------------------------------------------------------

--
-- Table structure for table `pet_type`
--

CREATE TABLE `pet_type` (
  `id` int(11) NOT NULL,
  `pet_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarksnew`
--
ALTER TABLE `bookmarksnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_data`
--
ALTER TABLE `pet_data`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `pet_type`
--
ALTER TABLE `pet_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `bookmarksnew`
--
ALTER TABLE `bookmarksnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pet_data`
--
ALTER TABLE `pet_data`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pet_type`
--
ALTER TABLE `pet_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
