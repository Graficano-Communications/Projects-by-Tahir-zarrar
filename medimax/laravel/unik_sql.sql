-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unik`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `status`, `title`, `image`, `sequence`, `created_at`, `updated_at`) VALUES
(8, 'public', '<p>Your One stop solution for<br />\r\nChina purchasing</p>', 'banners/FUW1pzu8jcQQaTESwq10az9ZqNH2CY1bE6fs2WYF.png', 2, '2024-04-03 03:47:44', '2024-04-24 03:00:22'),
(9, 'private', '<p>Your One stop solution for<br />\r\nChina purchasing</p>', 'banners/C0YPmf18QnkjlWUmZyCScUxVaMMlPEJvMpRMi5GY.png', 3, '2024-04-08 04:33:26', '2024-04-24 03:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `blog_name` varchar(255) NOT NULL,
  `front_image` varchar(255) NOT NULL,
  `detail_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `status`, `blog_name`, `front_image`, `detail_image`, `description`, `feature`, `created_at`, `updated_at`, `sequence`) VALUES
(2, 'public', 'Exporting Excellence Strategies for Selling Overseas Markets', 'blogs/INj6QL8PuYc8Bq8VnZRW9b9IuDAE2tnQ2qn6EcXZ.jpg', 'blogs/9hmQpPJRhGWRA8JAqCEbWffztFAiDHfKhTMRBFAP.jpg', '<p>In today&rsquo;s global economy, the international market has become more competitive with each passing day. Businesses are continuously seeking avenues for the growth and expansion. Countless promising opportunities lie in the overseas market. However, achieving success in international trade requires more than just a willingness to export goods or services. It demands a strategic approach that encompasses careful planning, market research, and a deep understanding of the techniques of doing business abroad.</p>\r\n\r\n<p><strong>Understanding of the Exporting Excellence </strong></p>\r\n\r\n<p>Achieving excellence in exporting refers to the ability of the company to effectively navigate the complexities of international trade to promote its products and services in the foreign market. It involves not only the logistical aspects of exporting but also the implementation of strategic initiatives to maximize market penetration, increase competitiveness, and build sustainable relationships with overseas customers.</p>\r\n\r\n<p><strong>Developing a Strategic Approach</strong></p>\r\n\r\n<p>The key element to exporting is to develop and maintain a strategic approach to address and work on the ongoing trends, challenges, and opportunities that the overseas market has offered.</p>\r\n\r\n<p><strong>Market Research</strong></p>\r\n\r\n<p>Before getting onto the voyage of marketing, it is necessary to understand the marketing strategies and requirements and conduct a thorough research process to identify the potential opportunities and assess the demand for your products or services.<br />\r\n<strong>Adaptation and Localization: </strong></p>\r\n\r\n<p>Successful exporting requires more than just selling a product that is already available on the domestic level. It often involves the adaptation to meet the specifications and preferences of the overseas audience. This may include modifications to product features, packaging, pricing, and marketing strategies.</p>\r\n\r\n<p><strong>Compliance and Regulations</strong></p>\r\n\r\n<p>Getting along with the regulatory environment and navigation could be a complex task in the overseas market. Exporters must ensure compliance with import/export regulations, customs requirements, and any other relevant laws governing international trade. This may require obtaining permits, licenses, or certifications to facilitate smooth entry into foreign markets.</p>\r\n\r\n<p><strong>Logistic and Supply Chain Management </strong></p>\r\n\r\n<p>Supply chain management and efficient logistics are important for conducting the on-time delivery of the products to your overseas customers. This is marked as an important factor when someone trusts your company with the quality and timely delivery in the overseas market. This includes selecting reliable shipping methods, optimizing inventory levels, and minimizing transportation costs to maximize profitability.</p>\r\n\r\n<p><strong>Risk Management </strong></p>\r\n\r\n<p>Risk management in exporting could involve inherent risks, including currency fluctuations, political instability, and cultural differences. Implementing risk management strategies, such as currency risk, diversifying into multiple markets, and building contingency plans, can help mitigate these risks and safeguard the business against potential disruptions.</p>\r\n\r\n<p><strong>Leveraging Technology and Innovation </strong></p>\r\n\r\n<p>In today&rsquo;s technology technology has played an essential role in facilitating international trade. The latest techniques and tools to streamline are used to export operations, reach new customers, and enhance their competitiveness in overseas markets.</p>\r\n\r\n<p><strong>E-commerce Platforms </strong></p>\r\n\r\n<p>Online marketplaces provide a convenient and cost-effective way to sell products to customers worldwide. By leveraging e-commerce platforms, businesses can expand their reach and access new markets without the need for a physical presence in each country.</p>\r\n\r\n<p><strong>Data Analytics</strong></p>\r\n\r\n<p>Big data and analytics tools enable businesses to gain valuable insights into customer behavior, market trends, and competitive dynamics. By analyzing data from multiple sources, exporters can make informed decisions and optimize their export strategies for maximum effectiveness.</p>\r\n\r\n<p><strong>Supply Chain Technologies</strong></p>\r\n\r\n<p>Advanced supply chain technologies, such as blockchain, RFID, and IoT (Internet of Things), offer greater visibility and transparency across the supply chain. This enables exporters to track the movement of goods in real time, improve inventory management, and enhance overall supply chain efficiency.</p>\r\n\r\n<p>Export is not only about selling products and services in overseas markets, it is about adopting and implementing a strategic mindset and effective strategies to succeed in international markets. By understanding the complexities of international trade, conducting thorough market research, leveraging technology and innovation, and developing a comprehensive export strategy, businesses can unveil new opportunities for growth and expansion in the global marketplace. With the right approach and commitment to excellence, exporting can become a cornerstone of success for businesses looking to thrive in today&#39;s interconnected world.</p>', 1, '2023-11-18 06:10:55', '2024-04-24 07:20:03', 1),
(4, 'public', 'Sustainable Sourcing Ethical Practices in Global Supply Chains', 'blogs/OWKmZDVr1bCt7GDeM56sg0RPAoe7ANe5K6cIca4R.jpg', 'blogs/G8jM4HTyEpFTa97Smijd4C61BDDlzNToOJ6Mwl9b.jpg', '<p>In today&rsquo;s interconnected world, following ethical practices by businesses in the global chain supply is increasing. Nowadays as the consumer becomes more conscious and considerable regarding the social and environmental impact of purchasing decisions, companies are also increasingly recognizing the importance of ensuring that their chain supply adheres to the ethical practices of global chain supply.<br />\r\nSustainable sourcing encompasses various range of principles including environmental conservation labor rights and social responsibility, aimed at minimizing the negative impact and risks for both people and planets.</p>\r\n\r\n<p><strong>Environmental Sustainability </strong></p>\r\n\r\n<p>One of the key aspects of sustainable sourcing revolves around environmental sustainability. This works on sourcing the raw materials and the process of manufacturing to minimize the risk and the damage to the ecosystem conserve natural resources, and reduce carbon emissions. Companies are increasingly seeking alternatives to traditional production methods, such as utilizing renewable energy sources, adopting eco-friendly technologies, and implementing waste reduction strategies. By prioritizing environmental sustainability in their supply chains, businesses can mitigate their ecological footprint and contribute to the preservation of biodiversity and natural habitats.</p>\r\n\r\n<p><strong>Fair Labor Practices</strong></p>\r\n\r\n<p>Ethical Practices uphold fair labor practices throughout the supply chain. This covers ensuring safe working conditions, providing fair wages, and respecting the rights of workers, particularly in industries prone to exploitation, such as agriculture, textiles, and electronics manufacturing. Companies are under growing pressure to address issues like child labor, forced labor, and discrimination, as consumers and advocacy groups demand greater transparency and accountability. By partnering with suppliers that adhere to ethical labor standards and supporting initiatives to empower workers, businesses can foster inclusive growth and enhance social welfare.</p>\r\n\r\n<p><strong>Community Engagement </strong></p>\r\n\r\n<p>Furthermore, ethical practices also encompass consideration of social responsibility and community engagement. This involves supporting local economies, promoting cultural diversity, and investing in initiatives that benefit marginalized communities. Companies are increasingly recognizing the importance of building mutually beneficial relationships with stakeholders, including employees, suppliers, customers, and residents. By prioritizing social responsibility in their supply chains, businesses can strengthen their reputation, build trust, and create shared value for society as a whole.</p>\r\n\r\n<p><strong>Challenges and Opportunities </strong></p>\r\n\r\n<p>Implementing sustainable sourcing presents both challenges and opportunities while operating in the global chain supply.&nbsp; Companies that embrace sustainable sourcing practices not only mitigate the&nbsp; reputational risks and regulatory compliance but also gain a competitive edge in the market. Increasingly, consumers are prioritizing sustainability when making purchasing decisions, driving demand for ethically sourced products and prompting companies to differentiate themselves through their commitment to environmental and social responsibility.</p>\r\n\r\n<p><strong>Regulatory Frameworks </strong></p>\r\n\r\n<p>Along with consumer preferences, the industry standards and their regulatory framework also play an essential role in minimizing the risks of shaping socially sustainable product sourcing practices. By aligning with these standards and collaborating with stakeholders, businesses can enhance their credibility and demonstrate their commitment to ethical sourcing principles.</p>\r\n\r\n<p>In conclusion, sustainable sourcing is an essential aspect of ethical business practices, encompassing environmental sustainability, fair labor practices, and social responsibility. By prioritizing sustainability in their supply chains, companies can minimize negative impacts, enhance positive outcomes, and create shared value for stakeholders. While implementing sustainable sourcing practices may present challenges the benefits&mdash;including improved reputation, competitive advantage, and market opportunities&mdash;far outweigh the costs. As the world continues to contend with pressing environmental and social issues, sustainable sourcing remains a crucial pathway toward building a more equitable, resilient, and sustainable future for all.</p>\r\n\r\n<p>&nbsp;</p>', 1, '2024-04-03 04:15:28', '2024-04-24 07:19:54', 0),
(5, 'private', 'N/A', 'blogs/abNqYjgnz89CJtmgXQsvXB8T4G5yjphklS6NQXFf.jpg', 'blogs/lrKZLflcxpJh67WW6UWu6Xe5tuNVGaFWKzpe8EZW.jpg', '<p>N/A</p>', 1, '2024-04-03 04:35:41', '2024-05-07 01:47:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `sequence` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `pdf_file` varchar(255) NOT NULL,
  `front_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `status`, `sequence`, `name`, `pdf_file`, `front_image`, `password`, `created_at`, `updated_at`) VALUES
(4, 'public', 1, 'UNIK-Admin', 'pdf_files/e8c52e17-d22b-43a0-90f4-07bd7ef9c0ae.pdf', 'front_images/zgBQNNvMF0H4V0OzfPugEwkDhzxt4EsUaGesKbgS.png', '123456789', '2023-11-18 06:53:46', '2024-04-03 04:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sequence` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `name`, `image`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 'public', 'Shoes', 'categories/uRT1nmSpvvu8L1oYwwNylGpfkmiw8D8da0MZYlCs.jpg', 1, '2023-11-16 00:50:12', '2024-04-09 20:14:42'),
(4, 'public', 'Bags', 'categories/WOAn17Qoifa7AFx3KmBh7z6DWBbZpGPds1z3iY3S.jpg', 3, '2024-03-05 06:59:48', '2024-04-08 19:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `sequence` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquires`
--

CREATE TABLE `inquires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sequence` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('pending','dispatch','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquires`
--

INSERT INTO `inquires` (`id`, `product_name`, `name`, `sequence`, `quantity`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test-1', 'ali butt', '2', '3', 'developer.alibutt@gmail.com', '03314113737', 'testing', 'pending', '2024-04-08 04:02:14', '2024-05-07 02:09:33'),
(2, 'Shoes', 'ali butt', '8', '3', 'developer.alibutt@gmail.com', '03314113737', 'test', 'pending', '2024-05-06 03:56:50', '2024-05-06 03:56:50'),
(20, 'Best shoes unik', 'ali butt', '9', '3', 'developer.alibutt@gmail.com', '03314113737', 'dfhdygfu', 'pending', '2024-05-07 02:28:08', '2024-05-07 02:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_13_053230_create_banners_table', 1),
(6, '2023_11_13_112658_create_blogs_table', 1),
(7, '2023_11_14_051132_create_news_table', 1),
(8, '2023_11_14_051253_create_images_table', 1),
(9, '2023_11_14_080959_create_catalogs_table', 1),
(10, '2023_11_14_123859_create_departments_table', 1),
(11, '2023_11_15_073116_create_sub_departments_table', 2),
(12, '2023_11_16_054130_create_categories_table', 3),
(13, '2023_11_16_065650_create_subcategories_table', 4),
(18, '2023_11_17_050904_create_products_table', 5),
(19, '2023_11_17_051026_create_product_images_table', 6),
(20, '2023_11_17_051058_create_product_extras_table', 6),
(21, '2023_11_20_074815_update_sub_departments_table', 7),
(22, '2023_11_20_075727_update_sub_departments_table', 8),
(23, '2024_03_13_063240_create_user_logins_table', 9),
(24, '2024_04_01_075010_create_testimonials_table', 10),
(25, '2024_04_02_085427_create_teams_table', 11),
(26, '2024_04_08_052806_create_inquires_table', 12),
(27, '2024_04_08_054636_create_inquires_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `sizes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL DEFAULT 0,
  `color` varchar(300) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `max_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `status`, `category_id`, `sub_category_id`, `name`, `description`, `featured`, `sizes`, `pcode`, `meta_title`, `meta_description`, `meta_tags`, `created_at`, `updated_at`, `sequence`, `color`, `rating`, `min_price`, `max_price`) VALUES
(9, 'public', 1, 3, 'Shoes', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Dummy 1</th>\r\n			<th scope=\"col\">Dummy 2</th>\r\n			<th scope=\"col\">Dummy 3</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Type: Super AMOLED</td>\r\n			<td>Wireless Charging (15W)</td>\r\n			<td>front 16 mpixel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size: 6.5 inches</td>\r\n			<td>4,500mAh</td>\r\n			<td>Back 16 mpixel</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, '[\"lg\",\"md\"]', '#12345', 'N/A', 'N/A', 'NA', '2023-11-17 07:28:43', '2024-04-23 07:40:12', 1, '[\"#6b7280\"]', '2', '2.7', '3.7'),
(10, 'public', 1, 3, 'Best shoes unik', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1000px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Dummy 1</th>\r\n			<th scope=\"col\">Dummy 2</th>\r\n			<th scope=\"col\">Dummy 3</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Type: Super AMOLED</td>\r\n			<td>Wireless Charging (15W)</td>\r\n			<td>front 16 mpixel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size: 6.5 inches</td>\r\n			<td>4,500mAh</td>\r\n			<td>Back 16 mpixel</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, '[\"small\",\"LG\",\"XL\"]', '#1234', 'N/A', 'N/A', 'NA', '2023-11-19 07:48:58', '2024-05-07 01:44:32', 0, '[\"#fff\"]', '3', '2.7', '3.7'),
(17, 'public', 1, 3, 'Shoes', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Dummy 1</th>\r\n			<th scope=\"col\">Dummy 2</th>\r\n			<th scope=\"col\">Dummy 3</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Type: Super AMOLED</td>\r\n			<td>Wireless Charging (15W)</td>\r\n			<td>front 16 mpixel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size: 6.5 inches</td>\r\n			<td>4,500mAh</td>\r\n			<td>Back 16 mpixel</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, '[\"lg\",\"md\",\"sm\"]', '#1234', 'N/A', 'N/A', 'NA', '2024-04-05 03:17:15', '2024-04-23 07:09:04', 1, '[\"#e8f0fe\"]', '1', '2.7', '3.7'),
(18, 'public', 1, 3, 'Shoes', '<p>gfdhdgf</p>', 1, '[\"lg\",\"md\",\"sm\"]', '#1234', 'N/A', 'N/A', 'NA', '2024-04-05 03:18:02', '2024-04-23 07:09:19', 1, '[\"#6b7280\"]', '1', '2.7', '3.7');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`, `sequence`) VALUES
(71, 10, 'product_images/KQliMe6uhCXP73w7R9AdHJhOSt1kK3PFxkbdQ6kQ.png', '2024-04-05 02:42:08', '2024-04-05 02:42:08', 0),
(72, 9, 'product_images/6xacokYiBqJj7wqTD72Xbb75kGym5OlIPu4KOuUV.png', '2024-04-05 02:42:21', '2024-04-05 02:42:21', 0),
(74, 17, 'product_images/bTt5Cqj5rkvTMAVBrbYzDkHygNHpzAfsDF131KDH.png', '2024-04-05 03:17:15', '2024-04-05 03:17:15', 0),
(75, 18, 'product_images/XTWnZopEhVDhQFbVc5BelnmSy9P6xSUbHwgYWupx.png', '2024-04-05 03:18:02', '2024-04-05 03:18:02', 0),
(76, 18, 'product_images/XZrvDaDE3kaqU9vgcGPkfjsYvbXEuPJCDsyoY2bV.png', '2024-04-05 03:18:02', '2024-04-05 03:18:02', 0),
(77, 18, 'product_images/TN9Pr8fwZSppejvsU3LTPCWbvWb9P38n7cUefTkc.png', '2024-04-05 03:18:02', '2024-04-05 03:18:02', 0),
(81, 10, 'product_images/O9nb2ZYWZZbZMhuxDArTuKvISDjdEILPviCuB6N8.png', '2024-04-09 03:22:21', '2024-04-09 03:22:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sequence` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `status`, `category_id`, `name`, `sequence`, `created_at`, `updated_at`, `image`) VALUES
(3, 'public', 1, 'casual shoes', 1, '2023-11-16 02:18:18', '2024-04-09 20:15:25', 'subcategories/EU3K4adEBsW2bgKPf3fwC6nZIWJyXlzMlGk5VsKT.png'),
(13, 'private', 1, 'N/A', 2, '2024-04-08 19:30:59', '2024-04-09 20:17:17', 'subcategories/Wn28h2GqQrx8PJW79bokmEEM9gp4iIfbUctmh8f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` enum('private','public') NOT NULL DEFAULT 'private',
  `sequence` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image_path`, `status`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 'N/A', 'Teams/ziOq4EgL1gwstMuuZSx2686Ev4UlQG1HTNwlk9dP.jpg', 'public', 0, '2024-04-02 04:32:07', '2024-04-16 08:06:10'),
(2, 'N/A', 'Teams/cyDHLU5GY8K4WUxzWmXQJXn2KuOwvVOndrDgvL2f.jpg', 'public', 1, '2024-04-05 00:35:11', '2024-04-08 23:45:40'),
(3, 'N/A', 'Teams/3t49e11I0T3R96joRR63Q8Lbbi7O5N2Jeakonh4U.jpg', 'public', 2, '2024-04-05 00:35:27', '2024-04-08 23:45:40'),
(4, 'N/A', 'Teams/DxFY8mHmzUV1tckdTIph6wqIWf6geMc8GiyAkR6I.jpg', 'public', 3, '2024-04-05 00:35:40', '2024-04-08 23:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('private','public') NOT NULL DEFAULT 'private',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `company_name`, `rating`, `image_path`, `message`, `status`, `created_at`, `updated_at`, `sequence`) VALUES
(1, 'Sarah Johnson', 'developer.alibutt@gmail.com', 'Unik Tech', '2', 'testimonials/3GkBlrwGKyxff6HCEjRipl8bxUvHWYHs5zCILcpM.jpg', '<p>&nbsp;<strong>UNIK Technology</strong> has truly revolutionized our sourcing process. Their full outsourced sourcing services have streamlined our operations and boosted our efficiency. It&#39;s no surprise they&#39;re among the top 10 sourcing agents in Shenzhen&nbsp;</p>', 'public', '2024-04-01 05:05:27', '2024-04-23 07:18:12', 1),
(2, 'Michael Chen', 'developer.alibutt@gmail.com', 'Unik Tech', '4', 'testimonials/SOFuo1qZV7oQrhKy5mG9JoyjYnpnsMgoubvD3eD5.jpg', '<p>We&#39;ve been partnering with<strong> UNIK</strong> for years now, and their expertise never fails to impress. Their commitment to excellence and their global presence ensures that our procurement needs are always met with precision and reliability&nbsp;</p>', 'public', '2024-04-02 00:59:35', '2024-04-23 07:17:40', 2),
(4, 'Keanu Reeves', 'developer.alibutt@gmail.com', 'Unik Tech', '4', 'testimonials/jWNVF9he6kHmNNKZ6yGkaXlVqxMAU3UG0uTDmzjr.jpg', '<p><strong>UNIK Technology</strong> has been pivotal in optimizing our sourcing strategies. Their comprehensive outsourcing services have elevated our operational efficiency significantly, cementing their position among Shenzhen&#39;s top 10 sourcing agents.</p>', 'public', '2024-04-02 01:58:34', '2024-04-23 07:17:54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Unik', 'unik-tech@mail.com', NULL, '$2y$10$BQSL.GMahZ.0fX80x3JTt./DrgzLPCSkmhnE2DTxQaA2tc4.zn5AG', 'xRQ6Df4OCjJeOvxWrEXFZ2CWGjAkrlW29hFIvXdsccawfVIFPR1LK9pdG3dn', NULL, '2024-04-08 05:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_login_ip` varchar(45) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `last_login_ip`, `user_agent`, `device`, `browser`, `platform`, `created_at`, `updated_at`, `last_login_at`) VALUES
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 / ', 'WebKit', 'Chrome', 'Windows version 10.0', '2024-04-02 05:11:31', '2024-04-09 03:30:10', 'April 9, 2024 at 8:30 AM'),
(3, '72.255.32.12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 / ', 'WebKit', 'Chrome', 'Windows version 10.0', '2024-04-09 20:11:57', '2024-04-12 12:11:55', 'April 12, 2024 at 12:11 PM'),
(4, '182.176.121.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 / ', 'WebKit', 'Chrome', 'Windows version 10.0', '2024-04-16 07:16:04', '2024-04-17 04:51:27', 'April 17, 2024 at 4:51 AM'),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 / ', 'WebKit', 'Chrome', 'Windows version 10.0', '2024-04-23 05:02:46', '2024-05-07 01:30:57', 'May 7, 2024 at 6:30 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_news_id_foreign` (`news_id`);

--
-- Indexes for table `inquires`
--
ALTER TABLE `inquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inquires`
--
ALTER TABLE `inquires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
