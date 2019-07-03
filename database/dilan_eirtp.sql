-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 10:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilan_eirtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `category` varchar(191) NOT NULL,
  `venue` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `start_time`, `end_time`, `category`, `venue`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Penyuluhan Keamanan Pangan PIRT Bulan Juli 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan', 'Dinas Kesehatan Yogyakarta', '2019-07-23', '2019-07-02 08:37:56', '2019-07-02 08:37:56'),
(2, 'Penyuluhan Keamanan Pangan PIRT Bulan Agustus 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan', 'Dinas Kesehatan Yogyakarta', '2019-08-20', '2019-07-02 08:39:14', '2019-07-02 08:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Slide-1', 'header5d19a9cfeb10a.jpg', '2019-07-01 06:35:59', '2019-07-01 06:35:59'),
(2, 'Slide-2', 'header5d19a9df68cfe.jpg', '2019-07-01 06:36:15', '2019-07-01 06:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'asd@mail.com', 1562123244);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `content`, `banner`, `created_at`, `updated_at`) VALUES
(7, NULL, 'This is title 1', '<p>Test Edit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales porta condimentum. Curabitur dignissim mollis quam, eu mattis risus lobortis vel. Nam congue euismod lacus, sed convallis massa imperdiet posuere. Praesent viverra rhoncus lorem vel laoreet. Nulla lectus dolor, placerat non volutpat vel, laoreet non metus. In dignissim, tortor et elementum imperdiet, urna enim facilisis orci, non rutrum felis turpis nec libero. Pellentesque nec pellentesque quam. Aenean eu metus a massa fringilla vestibulum ut et enim. Curabitur sit amet eros nulla. Donec vel quam viverra leo ultricies euismod. Mauris eget lacinia massa, ultrices aliquet tellus. Cras suscipit bibendum odio sit amet finibus. Praesent fermentum odio vitae pellentesque placerat. Sed a diam viverra, pellentesque eros vel, tempus dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas neque vel ligula convallis, gravida eleifend velit finibus. In magna elit, tempor at ex quis, vulputate sodales massa. Duis accumsan lorem ac tortor ullamcorper, ac volutpat metus volutpat. Phasellus dui massa, malesuada in pellentesque in, faucibus at dui. Sed vulputate rhoncus tempor. Curabitur efficitur nulla gravida ex dapibus egestas. Sed laoreet metus non urna pulvinar, nec lacinia nisl volutpat. Nullam iaculis elit vel lacus commodo, quis malesuada mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare arcu ac velit suscipit, eget posuere felis congue. Nulla in cursus est.</p><p>Fusce in eleifend nisi, ac aliquet felis. Duis sed dignissim orci. Phasellus suscipit odio quis dictum pretium. Donec non ex massa. Cras lacinia tortor sit amet risus finibus lacinia. Donec molestie massa orci, id laoreet mauris bibendum fringilla. Proin ac sem dolor. Morbi ut erat mi. Sed mollis tincidunt ex, non sollicitudin purus dignissim in. Integer in ante tellus. Phasellus nunc nulla, commodo eu congue id, convallis non justo. Sed tempus metus vehicula, volutpat ligula sit amet, vestibulum tortor.</p><p>Nunc molestie congue interdum. Suspendisse potenti. Ut fringilla dapibus felis, et auctor elit semper eget. Nam scelerisque metus quis lobortis convallis. Etiam aliquet, tortor ac accumsan euismod, turpis enim dictum lacus, in posuere dui turpis non magna. Sed convallis ornare lorem, sed tincidunt leo. Vivamus interdum sollicitudin nibh, quis euismod lacus consequat et. Proin eu est at metus congue vestibulum. Maecenas ultricies ornare lacinia. Sed aliquam magna a congue cursus. Phasellus sagittis quam posuere, tempus massa ut, tristique nunc. Curabitur blandit nunc nec odio euismod congue. Maecenas consectetur massa vel elit lacinia, at luctus nisi pulvinar. Sed volutpat porta ipsum, aliquam lobortis lorem accumsan nec. Pellentesque lacinia dolor mauris, eu efficitur orci sollicitudin sed.</p><p>Maecenas metus eros, molestie non ipsum et, sollicitudin molestie mi. Phasellus a fermentum felis, eu ultrices risus. Donec a interdum ante. Morbi at feugiat leo, rutrum hendrerit magna. Nullam auctor dui eget ipsum lobortis, nec congue purus facilisis. Nulla euismod et nibh id interdum. In ultrices lorem id lacus mattis, vel hendrerit velit gravida. Aliquam suscipit libero vitae justo finibus, aliquet malesuada odio aliquet. In sit amet laoreet ex, sit amet placerat mauris. Integer ullamcorper pulvinar ipsum, vitae pellentesque ligula dictum ac. Pellentesque pulvinar sapien sed consectetur aliquam.</p><p>Nunc pretium condimentum hendrerit. Nulla eget arcu ante. Pellentesque vel tristique est. Quisque et nunc nec turpis aliquam aliquet vitae a odio. Nullam blandit feugiat elit iaculis placerat. Nullam rutrum nibh nec augue congue, ac faucibus ipsum interdum. Mauris efficitur nibh eu tortor pharetra, in mollis tortor convallis.</p>', 'posts5d197e42d94bc.jpg', NULL, '2019-07-03 07:21:45'),
(8, NULL, 'This is title 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales porta condimentum. Curabitur dignissim mollis quam, eu mattis risus lobortis vel. Nam congue euismod lacus, sed convallis massa imperdiet posuere. Praesent viverra rhoncus lorem vel laoreet. Nulla lectus dolor, placerat non volutpat vel, laoreet non metus. In dignissim, tortor et elementum imperdiet, urna enim facilisis orci, non rutrum felis turpis nec libero. Pellentesque nec pellentesque quam. Aenean eu metus a massa fringilla vestibulum ut et enim. Curabitur sit amet eros nulla. Donec vel quam viverra leo ultricies euismod. Mauris eget lacinia massa, ultrices aliquet tellus. Cras suscipit bibendum odio sit amet finibus. Praesent fermentum odio vitae pellentesque placerat. Sed a diam viverra, pellentesque eros vel, tempus dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas neque vel ligula convallis, gravida eleifend velit finibus. In magna elit, tempor at ex quis, vulputate sodales massa. Duis accumsan lorem ac tortor ullamcorper, ac volutpat metus volutpat. Phasellus dui massa, malesuada in pellentesque in, faucibus at dui. Sed vulputate rhoncus tempor. Curabitur efficitur nulla gravida ex dapibus egestas. Sed laoreet metus non urna pulvinar, nec lacinia nisl volutpat. Nullam iaculis elit vel lacus commodo, quis malesuada mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare arcu ac velit suscipit, eget posuere felis congue. Nulla in cursus est.</p><p>Fusce in eleifend nisi, ac aliquet felis. Duis sed dignissim orci. Phasellus suscipit odio quis dictum pretium. Donec non ex massa. Cras lacinia tortor sit amet risus finibus lacinia. Donec molestie massa orci, id laoreet mauris bibendum fringilla. Proin ac sem dolor. Morbi ut erat mi. Sed mollis tincidunt ex, non sollicitudin purus dignissim in. Integer in ante tellus. Phasellus nunc nulla, commodo eu congue id, convallis non justo. Sed tempus metus vehicula, volutpat ligula sit amet, vestibulum tortor.</p><p>Nunc molestie congue interdum. Suspendisse potenti. Ut fringilla dapibus felis, et auctor elit semper eget. Nam scelerisque metus quis lobortis convallis. Etiam aliquet, tortor ac accumsan euismod, turpis enim dictum lacus, in posuere dui turpis non magna. Sed convallis ornare lorem, sed tincidunt leo. Vivamus interdum sollicitudin nibh, quis euismod lacus consequat et. Proin eu est at metus congue vestibulum. Maecenas ultricies ornare lacinia. Sed aliquam magna a congue cursus. Phasellus sagittis quam posuere, tempus massa ut, tristique nunc. Curabitur blandit nunc nec odio euismod congue. Maecenas consectetur massa vel elit lacinia, at luctus nisi pulvinar. Sed volutpat porta ipsum, aliquam lobortis lorem accumsan nec. Pellentesque lacinia dolor mauris, eu efficitur orci sollicitudin sed.</p><p>Maecenas metus eros, molestie non ipsum et, sollicitudin molestie mi. Phasellus a fermentum felis, eu ultrices risus. Donec a interdum ante. Morbi at feugiat leo, rutrum hendrerit magna. Nullam auctor dui eget ipsum lobortis, nec congue purus facilisis. Nulla euismod et nibh id interdum. In ultrices lorem id lacus mattis, vel hendrerit velit gravida. Aliquam suscipit libero vitae justo finibus, aliquet malesuada odio aliquet. In sit amet laoreet ex, sit amet placerat mauris. Integer ullamcorper pulvinar ipsum, vitae pellentesque ligula dictum ac. Pellentesque pulvinar sapien sed consectetur aliquam.</p><p>Nunc pretium condimentum hendrerit. Nulla eget arcu ante. Pellentesque vel tristique est. Quisque et nunc nec turpis aliquam aliquet vitae a odio. Nullam blandit feugiat elit iaculis placerat. Nullam rutrum nibh nec augue congue, ac faucibus ipsum interdum. Mauris efficitur nibh eu tortor pharetra, in mollis tortor convallis.</p>', 'posts5d197e894fdd1.jpg', '2019-07-01 03:31:21', NULL),
(9, NULL, 'This is title 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales porta condimentum. Curabitur dignissim mollis quam, eu mattis risus lobortis vel. Nam congue euismod lacus, sed convallis massa imperdiet posuere. Praesent viverra rhoncus lorem vel laoreet. Nulla lectus dolor, placerat non volutpat vel, laoreet non metus. In dignissim, tortor et elementum imperdiet, urna enim facilisis orci, non rutrum felis turpis nec libero. Pellentesque nec pellentesque quam. Aenean eu metus a massa fringilla vestibulum ut et enim. Curabitur sit amet eros nulla. Donec vel quam viverra leo ultricies euismod. Mauris eget lacinia massa, ultrices aliquet tellus. Cras suscipit bibendum odio sit amet finibus. Praesent fermentum odio vitae pellentesque placerat. Sed a diam viverra, pellentesque eros vel, tempus dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas neque vel ligula convallis, gravida eleifend velit finibus. In magna elit, tempor at ex quis, vulputate sodales massa. Duis accumsan lorem ac tortor ullamcorper, ac volutpat metus volutpat. Phasellus dui massa, malesuada in pellentesque in, faucibus at dui. Sed vulputate rhoncus tempor. Curabitur efficitur nulla gravida ex dapibus egestas. Sed laoreet metus non urna pulvinar, nec lacinia nisl volutpat. Nullam iaculis elit vel lacus commodo, quis malesuada mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare arcu ac velit suscipit, eget posuere felis congue. Nulla in cursus est.</p><p>Fusce in eleifend nisi, ac aliquet felis. Duis sed dignissim orci. Phasellus suscipit odio quis dictum pretium. Donec non ex massa. Cras lacinia tortor sit amet risus finibus lacinia. Donec molestie massa orci, id laoreet mauris bibendum fringilla. Proin ac sem dolor. Morbi ut erat mi. Sed mollis tincidunt ex, non sollicitudin purus dignissim in. Integer in ante tellus. Phasellus nunc nulla, commodo eu congue id, convallis non justo. Sed tempus metus vehicula, volutpat ligula sit amet, vestibulum tortor.</p><p>Nunc molestie congue interdum. Suspendisse potenti. Ut fringilla dapibus felis, et auctor elit semper eget. Nam scelerisque metus quis lobortis convallis. Etiam aliquet, tortor ac accumsan euismod, turpis enim dictum lacus, in posuere dui turpis non magna. Sed convallis ornare lorem, sed tincidunt leo. Vivamus interdum sollicitudin nibh, quis euismod lacus consequat et. Proin eu est at metus congue vestibulum. Maecenas ultricies ornare lacinia. Sed aliquam magna a congue cursus. Phasellus sagittis quam posuere, tempus massa ut, tristique nunc. Curabitur blandit nunc nec odio euismod congue. Maecenas consectetur massa vel elit lacinia, at luctus nisi pulvinar. Sed volutpat porta ipsum, aliquam lobortis lorem accumsan nec. Pellentesque lacinia dolor mauris, eu efficitur orci sollicitudin sed.</p><p>Maecenas metus eros, molestie non ipsum et, sollicitudin molestie mi. Phasellus a fermentum felis, eu ultrices risus. Donec a interdum ante. Morbi at feugiat leo, rutrum hendrerit magna. Nullam auctor dui eget ipsum lobortis, nec congue purus facilisis. Nulla euismod et nibh id interdum. In ultrices lorem id lacus mattis, vel hendrerit velit gravida. Aliquam suscipit libero vitae justo finibus, aliquet malesuada odio aliquet. In sit amet laoreet ex, sit amet placerat mauris. Integer ullamcorper pulvinar ipsum, vitae pellentesque ligula dictum ac. Pellentesque pulvinar sapien sed consectetur aliquam.</p><p>Nunc pretium condimentum hendrerit. Nulla eget arcu ante. Pellentesque vel tristique est. Quisque et nunc nec turpis aliquam aliquet vitae a odio. Nullam blandit feugiat elit iaculis placerat. Nullam rutrum nibh nec augue congue, ac faucibus ipsum interdum. Mauris efficitur nibh eu tortor pharetra, in mollis tortor convallis.</p>', 'posts5d197eb344ba2.jpg', '2019-07-01 03:32:03', NULL),
(10, NULL, 'This is title 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales porta condimentum. Curabitur dignissim mollis quam, eu mattis risus lobortis vel. Nam congue euismod lacus, sed convallis massa imperdiet posuere. Praesent viverra rhoncus lorem vel laoreet. Nulla lectus dolor, placerat non volutpat vel, laoreet non metus. In dignissim, tortor et elementum imperdiet, urna enim facilisis orci, non rutrum felis turpis nec libero. Pellentesque nec pellentesque quam. Aenean eu metus a massa fringilla vestibulum ut et enim. Curabitur sit amet eros nulla. Donec vel quam viverra leo ultricies euismod. Mauris eget lacinia massa, ultrices aliquet tellus. Cras suscipit bibendum odio sit amet finibus. Praesent fermentum odio vitae pellentesque placerat. Sed a diam viverra, pellentesque eros vel, tempus dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas neque vel ligula convallis, gravida eleifend velit finibus. In magna elit, tempor at ex quis, vulputate sodales massa. Duis accumsan lorem ac tortor ullamcorper, ac volutpat metus volutpat. Phasellus dui massa, malesuada in pellentesque in, faucibus at dui. Sed vulputate rhoncus tempor. Curabitur efficitur nulla gravida ex dapibus egestas. Sed laoreet metus non urna pulvinar, nec lacinia nisl volutpat. Nullam iaculis elit vel lacus commodo, quis malesuada mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare arcu ac velit suscipit, eget posuere felis congue. Nulla in cursus est.</p><p>Fusce in eleifend nisi, ac aliquet felis. Duis sed dignissim orci. Phasellus suscipit odio quis dictum pretium. Donec non ex massa. Cras lacinia tortor sit amet risus finibus lacinia. Donec molestie massa orci, id laoreet mauris bibendum fringilla. Proin ac sem dolor. Morbi ut erat mi. Sed mollis tincidunt ex, non sollicitudin purus dignissim in. Integer in ante tellus. Phasellus nunc nulla, commodo eu congue id, convallis non justo. Sed tempus metus vehicula, volutpat ligula sit amet, vestibulum tortor.</p><p>Nunc molestie congue interdum. Suspendisse potenti. Ut fringilla dapibus felis, et auctor elit semper eget. Nam scelerisque metus quis lobortis convallis. Etiam aliquet, tortor ac accumsan euismod, turpis enim dictum lacus, in posuere dui turpis non magna. Sed convallis ornare lorem, sed tincidunt leo. Vivamus interdum sollicitudin nibh, quis euismod lacus consequat et. Proin eu est at metus congue vestibulum. Maecenas ultricies ornare lacinia. Sed aliquam magna a congue cursus. Phasellus sagittis quam posuere, tempus massa ut, tristique nunc. Curabitur blandit nunc nec odio euismod congue. Maecenas consectetur massa vel elit lacinia, at luctus nisi pulvinar. Sed volutpat porta ipsum, aliquam lobortis lorem accumsan nec. Pellentesque lacinia dolor mauris, eu efficitur orci sollicitudin sed.</p><p>Maecenas metus eros, molestie non ipsum et, sollicitudin molestie mi. Phasellus a fermentum felis, eu ultrices risus. Donec a interdum ante. Morbi at feugiat leo, rutrum hendrerit magna. Nullam auctor dui eget ipsum lobortis, nec congue purus facilisis. Nulla euismod et nibh id interdum. In ultrices lorem id lacus mattis, vel hendrerit velit gravida. Aliquam suscipit libero vitae justo finibus, aliquet malesuada odio aliquet. In sit amet laoreet ex, sit amet placerat mauris. Integer ullamcorper pulvinar ipsum, vitae pellentesque ligula dictum ac. Pellentesque pulvinar sapien sed consectetur aliquam.</p><p>Nunc pretium condimentum hendrerit. Nulla eget arcu ante. Pellentesque vel tristique est. Quisque et nunc nec turpis aliquam aliquet vitae a odio. Nullam blandit feugiat elit iaculis placerat. Nullam rutrum nibh nec augue congue, ac faucibus ipsum interdum. Mauris efficitur nibh eu tortor pharetra, in mollis tortor convallis.</p>', 'posts5d197ed63e110.jpg', '2019-07-01 03:32:38', NULL),
(11, NULL, 'This is title 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales porta condimentum. Curabitur dignissim mollis quam, eu mattis risus lobortis vel. Nam congue euismod lacus, sed convallis massa imperdiet posuere. Praesent viverra rhoncus lorem vel laoreet. Nulla lectus dolor, placerat non volutpat vel, laoreet non metus. In dignissim, tortor et elementum imperdiet, urna enim facilisis orci, non rutrum felis turpis nec libero. Pellentesque nec pellentesque quam. Aenean eu metus a massa fringilla vestibulum ut et enim. Curabitur sit amet eros nulla. Donec vel quam viverra leo ultricies euismod. Mauris eget lacinia massa, ultrices aliquet tellus. Cras suscipit bibendum odio sit amet finibus. Praesent fermentum odio vitae pellentesque placerat. Sed a diam viverra, pellentesque eros vel, tempus dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas neque vel ligula convallis, gravida eleifend velit finibus. In magna elit, tempor at ex quis, vulputate sodales massa. Duis accumsan lorem ac tortor ullamcorper, ac volutpat metus volutpat. Phasellus dui massa, malesuada in pellentesque in, faucibus at dui. Sed vulputate rhoncus tempor. Curabitur efficitur nulla gravida ex dapibus egestas. Sed laoreet metus non urna pulvinar, nec lacinia nisl volutpat. Nullam iaculis elit vel lacus commodo, quis malesuada mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare arcu ac velit suscipit, eget posuere felis congue. Nulla in cursus est.</p><p>Fusce in eleifend nisi, ac aliquet felis. Duis sed dignissim orci. Phasellus suscipit odio quis dictum pretium. Donec non ex massa. Cras lacinia tortor sit amet risus finibus lacinia. Donec molestie massa orci, id laoreet mauris bibendum fringilla. Proin ac sem dolor. Morbi ut erat mi. Sed mollis tincidunt ex, non sollicitudin purus dignissim in. Integer in ante tellus. Phasellus nunc nulla, commodo eu congue id, convallis non justo. Sed tempus metus vehicula, volutpat ligula sit amet, vestibulum tortor.</p><p>Nunc molestie congue interdum. Suspendisse potenti. Ut fringilla dapibus felis, et auctor elit semper eget. Nam scelerisque metus quis lobortis convallis. Etiam aliquet, tortor ac accumsan euismod, turpis enim dictum lacus, in posuere dui turpis non magna. Sed convallis ornare lorem, sed tincidunt leo. Vivamus interdum sollicitudin nibh, quis euismod lacus consequat et. Proin eu est at metus congue vestibulum. Maecenas ultricies ornare lacinia. Sed aliquam magna a congue cursus. Phasellus sagittis quam posuere, tempus massa ut, tristique nunc. Curabitur blandit nunc nec odio euismod congue. Maecenas consectetur massa vel elit lacinia, at luctus nisi pulvinar. Sed volutpat porta ipsum, aliquam lobortis lorem accumsan nec. Pellentesque lacinia dolor mauris, eu efficitur orci sollicitudin sed.</p><p>Maecenas metus eros, molestie non ipsum et, sollicitudin molestie mi. Phasellus a fermentum felis, eu ultrices risus. Donec a interdum ante. Morbi at feugiat leo, rutrum hendrerit magna. Nullam auctor dui eget ipsum lobortis, nec congue purus facilisis. Nulla euismod et nibh id interdum. In ultrices lorem id lacus mattis, vel hendrerit velit gravida. Aliquam suscipit libero vitae justo finibus, aliquet malesuada odio aliquet. In sit amet laoreet ex, sit amet placerat mauris. Integer ullamcorper pulvinar ipsum, vitae pellentesque ligula dictum ac. Pellentesque pulvinar sapien sed consectetur aliquam.</p><p>Nunc pretium condimentum hendrerit. Nulla eget arcu ante. Pellentesque vel tristique est. Quisque et nunc nec turpis aliquam aliquet vitae a odio. Nullam blandit feugiat elit iaculis placerat. Nullam rutrum nibh nec augue congue, ac faucibus ipsum interdum. Mauris efficitur nibh eu tortor pharetra, in mollis tortor convallis.</p>', 'posts5d197f10db4c5.png', '2019-07-01 03:33:36', NULL),
(12, NULL, 'Test', '<p>test</p>', 'posts5d19a99b476cf.jpg', '2019-07-01 06:35:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$qlVbkCI3Sib6euNB.pv51OJJ1IU0oV2OAnGRpzM8X2QzUMlnJSWLq', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1562138322, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
