-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish_ci */;
USE `laravel`;

-- Volcando estructura para tabla laravel.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.categorias: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(0, 'Sin genero', 'Esta cateroria no tiene genero especificado', '2020-12-17 06:18:33', '2020-12-17 06:18:34'),
	(1, 'Documental', 'El documental es la expresión de un aspecto de la realidad, mostrada en forma audiovisua', '2020-12-14 17:11:32', '2020-12-14 17:11:33'),
	(2, 'Biográfico', 'La biografía es una historia de la vida de una persona narrada por otra persona', '2020-12-14 17:16:12', '2020-12-14 17:16:13'),
	(3, 'Histórico', 'La historia es la ciencia que tiene como objetivo el estudio de sucesos del pasado', '2020-12-14 17:12:55', '2020-12-14 17:12:56'),
	(4, 'Musical', 'Un musical es una forma de arte escénico en el que la acción se desenvuelve con secciones cantadas y generalmente, bailadas', '2020-12-14 17:14:07', '2020-12-14 17:14:09'),
	(5, 'Comedia', 'La comedia ​ es el género dramático opuesto a la tragedia​ y, por lo tanto, relacionado casi siempre con historias con final feliz.', '2020-12-14 17:16:09', '2020-12-14 17:16:10'),
	(6, 'Infantil', 'De la infancia o de los niños, o que tiene relación con ellos.', '2020-12-14 17:17:48', '2020-12-14 17:17:49'),
	(7, 'Western', 'El wéstern​ o películas del Oeste​ es un género cinematográfico típico del cine estadounidense que se ambienta en el viejo Oeste estadounidense.', '2020-12-14 17:18:14', '2020-12-14 17:18:15'),
	(9, 'Bélico', 'El género bélico es el género artístico al que pertenecen algunas películas y series de televisión cuyo argumento se centra en una guerra.', '2020-12-14 17:19:31', '2020-12-14 17:19:33'),
	(10, 'Ciencia ficción', 'Ciencia ficción es la denominación de uno de los géneros derivados de la literatura de ficción, junto con la literatura fantástica y la narrativa de terror. Algunos autores estiman que el término es una mala traducción del inglés science fiction y que la correcta es ficción científica', '2020-12-14 17:19:55', '2020-12-14 17:19:56'),
	(11, 'Drama', 'Género literario caracterizado por la representación de acciones y situaciones humanas conflictivas, que ha sido concebido para su escenificación, bien sea teatral, bien televisiva o cinematográfica. En este sentido, drama también puede hacer referencia a la obra dramática en sí.', '2020-12-14 17:20:32', '2020-12-14 17:20:33'),
	(12, 'Suspenso', 'El suspense o suspenso es un recurso narrativo utilizado en literatura, cine, series, cómics y videojuegos, cuyo objetivo principal es mantener al lector o espectador a la expectativa de lo que pueda ocurrirle a los personajes y, por lo tanto, atento al desarrollo de la narración.', '2020-12-14 17:21:43', '2020-12-14 17:21:43'),
	(13, 'Terror o Horror', 'El horror o terror es un género literario que se define por la sensación que causa: miedo. Nöel Carroll en su libro The Philosophy of Horror explica que la característica más importante del género horror es el efecto del que se causa en la audiencia, el horror necesariamente debe provocar miedo en el espectador.', '2020-12-14 17:22:41', '2020-12-14 17:22:42'),
	(14, 'Accion y Aventura', 'El llamado cine de acción es un género cinematográfico donde prima la espectacularidad de las imágenes por medio de efectos especiales de estilo "clásico". La denominación es más un convencionalismo popular, que un género cinematográfico puro acuñado por críticos, estudiosos o cineastas.', '2020-12-14 17:17:48', '2020-12-14 17:17:49');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2014_10_12_000000_create_users_table', 1),
	(8, '2014_10_12_100000_create_password_resets_table', 1),
	(9, '2019_08_19_000000_create_failed_jobs_table', 1),
	(10, '2020_12_14_155151_create_peliculas_table', 1),
	(11, '2020_12_14_155353_create_categorias_table', 1),
	(12, '2020_12_14_155605_create_etiquetas_table', 2),
	(13, '2020_12_14_155737_create_etiqueta_pelicula_table', 2),
	(14, '2020_12_14_160617_create_categorias_table', 3),
	(15, '2020_12_14_160720_create_peliculas_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria_id` int(10) unsigned NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` blob NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion` tinyint(1) NOT NULL,
  `año` date NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `peliculas_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `peliculas_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.peliculas: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`id`, `categoria_id`, `director`, `titulo`, `portada`, `descripcion`, `valoracion`, `año`, `trailer`, `created_at`, `updated_at`) VALUES
	(11, 2, 'Steven Spielberg', 'La lista de Schindler', _binary 0x4C61206C69737461206465207368696E646C65722E6A7067, 'Oskar Schindler, un hombre de enorme astucia y talento para las relaciones públicas, diseña un ambicioso plan para ganarse la simpatía de los nazis más poderosos. Alemania acaba de invadir Polonia y, gracias a sus influencias, consigue la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación laboral le ayuda a prosperar rápidamente. Su gerente, también judío, es el verdadero director en la sombra, pues Schindler no tiene el menor conocimiento industrial.', 10, '1993-05-14', 'https://www.youtube.com/embed/5btATkiDrI4', '2020-12-15 14:05:13', '2020-12-15 14:05:13'),
	(12, 6, 'Pete Docter · Bob Peterson', 'Up', _binary 0x55702E6A7067, 'Historia de amor de dos jóvenes que viven una situación poco peculiar algo emotiva y sentimental', 10, '2000-07-04', 'https://www.youtube.com/watch?v=qoZo9MiICo0', '2020-12-15 14:07:56', '2020-12-15 14:58:33'),
	(13, 6, 'Lee Unkrich', 'Toy Story 3', _binary 0x546F792053746F727920332E6A7067, 'Mientras Andy se prepara para ir a la universidad, los juguetes son llevados por error a una guardería en vez de al ático. Ahora dependerá de Woody convencer a los demás juguetes de que no fueron abandonados por Andy y de que regresen con él a casa.', 8, '2010-06-18', 'https://www.youtube.com/embed/JcpWXaA2qeg', '2020-12-15 14:25:17', '2020-12-15 14:37:15'),
	(19, 14, 'Chad Stahelski', 'John Wick: Chapter 2', _binary 0x4A6F686E205769636B2E6A7067, 'El legendario sicario John Wick abandona su retiro cuando, debido a un pacto de sangre que le vincula a un colega, se ve obligado a viajar a Roma para enfrentarse a los asesinos más peligrosos del mundo y aniquilar a una organización secreta.', 8, '2017-05-15', 'https://www.youtube.com/embed/XGk2EfbD_Ps', '2020-12-15 14:48:31', '2020-12-15 15:27:22'),
	(20, 14, 'Chad Stahelski', 'John Wick: Chapter 3 - Parabellum', _binary 0x4A6F686E205769636B20332E6A7067, 'John Wick regresa de nuevo pero con una recompensa sobre su cabeza que persigue unos mercenarios. Tras asesinar a uno de los miembros de su gremio, Wick es expulsado y se convierte en el foco de atención de todos los sicarios de la organización.', 8, '2019-05-09', 'https://www.youtube.com/embed/pU8-7BX9uxs', '2020-12-15 14:49:55', '2020-12-15 14:49:55'),
	(21, 14, 'Joss Whedon', 'The Avengers', _binary 0x546865204176656E676572732E6A7067, 'El director de la Agencia SHIELD decide reclutar a un equipo para salvar al mundo de un desastre casi seguro cuando un enemigo inesperado surge como una gran amenaza para la seguridad mundial.', 9, '2012-05-27', 'https://www.youtube.com/embed/eOrNdBpGMv8', '2020-12-15 14:51:33', '2020-12-15 14:51:33'),
	(25, 2, 'Morten Tyldum', 'The Imitation Game', _binary 0x54686520496D69746174696F6E2047616D652E6A7067, 'Durante la Segunda Guerra Mundial, el genio inglés Alan Turing intenta descifrar el código alemán enigma con la ayuda de otros matemáticos.', 8, '0015-12-07', 'https://www.youtube.com/embed/OuCwCNWmUhY', '2020-12-17 10:11:48', '2020-12-17 10:11:48'),
	(26, 2, 'Denzel Washington', 'Antwone Fisher: el triunfo del espíritu', _binary 0x456C2054726975666F2064656C2065737069726974752E6A7067, 'Un psiquiatra naval ayuda a un marino atormentado a conciliarse con su pasado. Basada en una historia verdadera.', 8, '2003-12-10', 'https://www.youtube.com/embed/SkU1rbJTL3M', '2020-12-17 10:14:01', '2020-12-17 10:14:01'),
	(27, 2, 'James Marsh', 'La teoría del todo', _binary 0x4C612054656F7269612064656C20746F646F2E6A7067, 'Durante los años sesenta, el estudiante de la Universidad de Cambridge y futuro físico Stephen Hawking se enamora de su compañera Jane Wilde. A pesar de que le diagnostican una enfermedad devastadora, él y Jane abren nuevos caminos científicos.', 10, '2014-11-07', 'https://www.youtube.com/embed/pOsMMutM8C0', '2020-12-17 10:16:02', '2020-12-17 10:16:02'),
	(28, 2, 'Steven Spielberg', 'Lincoln', _binary 0x4C696E636F6E2E6A7067, 'En sus meses finales, el presidente Abraham Lincoln, al darse cuenta de que la Proclamación de Emancipación podría fracasar al final de la Guerra Civil, toma acciones para eliminar para siempre la esclavitud.', 9, '2012-10-08', 'https://www.youtube.com/embed/dmSZQDTeFTM', '2020-12-17 10:19:01', '2020-12-17 10:19:01'),
	(29, 9, 'Rod Lurie', 'The Outpost', _binary 0x546865204F7574706F73742E6A7067, 'Un pequeño grupo de soldados estadounidenses luchan contra cientos de talibanes en Afganistán.', 7, '2020-08-24', 'https://www.youtube.com/embed/Kp9JghhGPao', '2020-12-17 10:21:28', '2020-12-17 10:21:28'),
	(30, 9, 'Mel Gibson', 'Hasta el Último Hombre', _binary 0x486173746120656C20C3BA6C74696D6F20686F6D6272652E6A7067, 'Hacksaw Ridge es una película dramática y bélica estadounidense de 2016, dirigida por Mel Gibson y escrita por Andrew Knight y Robert Schenkkan. La película está protagonizada por Andrew Garfield, Vince Vaughn, Sam Worthington, Luke Bracey, Hugo Weaving, Ryan Corr, Teresa Palmer, Richard Pyros y Rachel Griffiths.', 8, '2016-10-23', 'https://www.youtube.com/embed/HpW6qzO4LHI', '2020-12-17 10:23:25', '2020-12-17 10:23:25'),
	(31, 10, 'William Eubank', 'Underwater', _binary 0x556E64657277617465722E6A7067, 'Cuando un terremoto acaba con su laboratorio subterráneo, unos investigadores deberán volver a la superficie si quieren salvar sus vidas.', 7, '0020-12-08', 'https://www.youtube.com/embed/70BReScP2gM', '2020-12-17 10:26:32', '2020-12-17 10:26:32'),
	(32, 5, 'Jon Lucas, Scott Moore', 'Jexi', _binary 0x4A6578692E6A7067, 'Phil, un hombre inteligente y amable, aunque sin amigos ni pareja, es adicto al teléfono celular. Su nuevo teléfono incorpora una inteligencia artificial, llamada Jexi, que se convierte en su asistente virtual y confesora. No obstante, Jexi empieza a comportarse, poco a poco, cada vez de manera más perturbadora.', 8, '2019-08-17', 'https://www.youtube.com/embed/txSOaY-je-o', '2020-12-17 11:42:51', '2020-12-17 11:42:51'),
	(33, 5, 'Jay Roach', 'El Escándalo', _binary 0x456C20457363C3A16E64616C6F2E6A7067, 'Cuando Gretchen Carlson golpea al fundador de Fox News, Roger Ailes, con una demanda alegando acoso sexual, nadie podía predecir lo que sucedería después. Su decisión lleva a la corresponsal de Fox News, Megyn Kelly, a presentar su propia historia, así como a muchas otras mujeres, incitando a un movimiento que reverbera en todo el mundo.', 8, '2019-12-19', 'https://www.youtube.com/embed/4Qq2Za9ebdo', '2020-12-17 11:46:13', '2020-12-17 11:46:13'),
	(34, 1, 'William Eubank', 'El mundo desde el aire', _binary 0x456C206D756E646F20646573646520656C20616972652E6A7067, 'Nuestro vuelo por tierra inglesas comienza en Liverpool, puerta hacia el mundo de mercancías y pasajeros. Del río Mersey surge el canal de Manchester hasta la ciudad de Manchester que a su este tiene al parque nacional Peak District. Después visitaremos el sitio histórico de Arbor Low para terminar nuestro viaje en Kedleston Hall, una obra maestra del neoclasicismo donde el arquitecto se inspiró en los edificios de la antigua Roma.', 8, '2000-08-08', 'https://www.youtube.com/embed/KeOff6-WrkY', '2020-12-17 11:54:43', '2020-12-17 11:57:34'),
	(35, 11, 'William Eubank', 'Rebecca', _binary 0x526562626563612E6A7067, 'Una mujer se ve forzada a competir con la memoria de la primera esposa de su marido en esta historia ganadora del Oscar.', 8, '1942-12-10', 'https://www.youtube.com/embed/LFVhB54UqvQ', '2020-12-17 12:06:07', '2020-12-17 12:06:07'),
	(36, 3, 'David Mackenzie', 'Outlaw King', _binary 0x4F75746C6177204B696E672E6A7067, 'Después de ser coronado rey de Escocia, el legendario guerrero Robert Bruce se ve obligado a exiliarse y dirige a una banda de forajidos para ayudarlo a reclamar el trono.', 9, '2018-12-06', 'https://www.youtube.com/embed/Q-G1BME8FKw', '2020-12-17 12:08:24', '2020-12-17 12:08:24'),
	(37, 13, 'Adam Robitel', 'Escape Room', _binary 0x536361706520526F6F6D2E6A7067, 'Seis personas quedan atrapadas en un escape room cuyo creador ha diseñado una trampa mortal en cada habitación. No saben por qué les está haciendo esto, pero sí saben que un solo error les costará la vida.', 8, '0019-12-11', 'https://www.youtube.com/embed/9C1V8XPBlkw', '2020-12-17 12:10:44', '2020-12-17 12:10:44');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ferran', 'gestioF@gestiomovies.com', NULL, '$2y$10$A6hZ74EZPW47UJfQcjgSreqCayxBLjs2BDBSBUaybn3kr78dqIbOW', NULL, '2020-12-14 16:24:50', '2020-12-14 16:24:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
