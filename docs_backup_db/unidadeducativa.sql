-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2015 a las 09:07:26
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cdcol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Base de datos: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'unidadeducativa', 'dosificacion', 'fecha', '', '', '_', ''),
(2, 'unidadeducativa', 'dosificacion', 'fechalimiteemicion', '', '', '_', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

--
-- Volcado de datos para la tabla `pma_designer_coords`
--

INSERT INTO `pma_designer_coords` (`db_name`, `table_name`, `x`, `y`, `v`, `h`) VALUES
('unidadeducativa', 'cursos', 1007, 796, 1, 1),
('unidadeducativa', 'datosfactura', 569, 64, 1, 1),
('unidadeducativa', 'dosificacion', 1023, 93, 1, 1),
('unidadeducativa', 'estudiantes', 15, 575, 1, 1),
('unidadeducativa', 'gestion', 388, 754, 1, 1),
('unidadeducativa', 'inscripciones', 503, 498, 1, 1),
('unidadeducativa', 'pensiones', 104, 63, 1, 1),
('unidadeducativa', 'pruebacodigocontrol', 1632, 643, 1, 1),
('unidadeducativa', 'usuarios', 1021, 414, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"unidadeducativa","table":"pensiones"},{"db":"unidadeducativa","table":"datosfactura"},{"db":"unidadeducativa","table":"dosificacion"},{"db":"unidadeducativa","table":"inscripciones"},{"db":"unidadeducativa","table":"estudiantes"},{"db":"unidadeducativa","table":"cursos"},{"db":"unidadeducativa","table":"usuarios"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-03-19 15:51:31', '{"lang":"es","collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Base de datos: `test`
--
--
-- Base de datos: `unidadeducativa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
`numcurso` int(11) NOT NULL,
  `aniogestion` int(11) NOT NULL,
  `niveleducativo` text NOT NULL,
  `nombrecurso` text NOT NULL,
  `paralelocurso` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`numcurso`, `aniogestion`, `niveleducativo`, `nombrecurso`, `paralelocurso`) VALUES
(13, 2014, 'SECUNDARIA', 'SEXTO', 'A'),
(14, 2014, 'SECUNDARIA', 'SEXTO', 'B'),
(15, 2015, 'SECUNDARIA', 'SEXTO', 'A'),
(16, 2015, 'SECUNDARIA', 'SEXTO', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosfactura`
--

CREATE TABLE IF NOT EXISTS `datosfactura` (
`codfactura` int(11) NOT NULL,
  `numfactura` bigint(20) NOT NULL,
  `numdosificacion` int(11) NOT NULL,
  `ciusuario` int(11) NOT NULL,
  `numinscripcion` int(11) NOT NULL,
  `nitcliente` int(11) NOT NULL,
  `apellidocliente` text NOT NULL,
  `cantidadtotal` int(11) NOT NULL,
  `fecha` text NOT NULL,
  `fechalimiteemicion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosfactura`
--

INSERT INTO `datosfactura` (`codfactura`, `numfactura`, `numdosificacion`, `ciusuario`, `numinscripcion`, `nitcliente`, `apellidocliente`, `cantidadtotal`, `fecha`, `fechalimiteemicion`) VALUES
(21, 2288, 5, 5928003, 79, 10533156, 'castillo', 1835, '10/03/2015', '10/09/2015'),
(22, 2289, 5, 5928003, 79, 10533156, 'castillo', 1835, '10/03/2015', '10/09/2015'),
(23, 2290, 5, 5928003, 78, 10295280, 'Brabo', 1101, '10/03/2015', '10/09/2015'),
(24, 2291, 5, 5928003, 71, 10532844, 'Camacho', 2569, '10/03/2015', '10/09/2015'),
(25, 2292, 5, 5928003, 74, 5928025, 'severich', 2936, '10/03/2015', '10/09/2015'),
(26, 2293, 5, 5928003, 73, 4928777, 'Herbas', 3670, '10/03/2015', '10/09/2015'),
(27, 2294, 5, 5928003, 75, 3592777, 'Meneces', 771, '10/03/2015', '10/09/2015'),
(28, 2295, 5, 5928003, 82, 3751868, 'Diaz', 4000, '10/03/2015', '10/09/2015'),
(29, 2296, 5, 5928003, 74, 5928025, 'severich', 734, '24/03/2015', '2015/07/26'),
(30, 2297, 5, 5928003, 71, 10532844, 'Camacho', 734, '24/03/2015', '2015/07/26'),
(32, 2299, 5, 5928003, 83, 3751868, 'Diaz', 2000, '13/04/2015', '2015/07/26'),
(33, 2300, 5, 5928003, 84, 5928025, 'Severich', 1000, '13/04/2015', '2015/07/26'),
(34, 2301, 5, 5928003, 84, 5928025, 'Severich', 2000, '13/04/2015', '2015/07/26'),
(35, 2302, 5, 5928003, 84, 5928025, 'Severich', 2000, '13/04/2015', '2015/07/26'),
(36, 2303, 5, 5928003, 84, 5928025, 'Severich', 2000, '14/04/2015', '2015/07/26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificacion`
--

CREATE TABLE IF NOT EXISTS `dosificacion` (
`numdosificacion` int(20) NOT NULL,
  `nitcolegio` bigint(20) NOT NULL,
  `numautorizacion` bigint(20) NOT NULL,
  `numeroinicio` int(20) NOT NULL,
  `fechalimiteemicion` text NOT NULL,
  `llavedosificacion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dosificacion`
--

INSERT INTO `dosificacion` (`numdosificacion`, `nitcolegio`, `numautorizacion`, `numeroinicio`, `fechalimiteemicion`, `llavedosificacion`) VALUES
(5, 1665979, 7904006306693, 2288, '2015/07/26', 'zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `ciestudiante` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fechanacimiento` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` text NOT NULL,
  `ciapoderado` int(11) NOT NULL,
  `nombreapoderado` text NOT NULL,
  `apellidoapoderado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`ciestudiante`, `nombres`, `apellidos`, `fechanacimiento`, `direccion`, `telefono`, `email`, `ciapoderado`, `nombreapoderado`, `apellidoapoderado`) VALUES
(5928026, 'Guerry', 'Agredo Tobar', '1998-09-09', 'Av. America 55', 4885955, 'Guerry@gmail.com', 7632345, 'Lucia', 'Guerry'),
(5928027, 'Emanuelle ', 'Rojas', '1990-02-26', 'av landival', 4269855, 'richard_severich@gmail.com', 5928027, 'eugeniarson', 'chachawama'),
(5928087, 'Lukas', 'Soso', '1999-12-12', 'Av. Blanco Galindo km 10', 76479666, 'richard_severich@gmail.com', 1000000, 'Richard', 'Severich'),
(5928088, 'Mario', 'Severich', '1999-12-18', 'Av. Blanco Galindo', 76479666, 'richard_severich@hotmail.com', 5928025, 'Richard', 'Severich'),
(5928089, 'Martin', 'Severich', '1999-12-11', 'Av. Blanco Galindo', 76479666, 'richard_severich@gmail.com', 5928025, 'Richard', 'Severich'),
(5928090, 'Erick', 'cosmos', '1998-09-11', 'calle zzz', 4269855, 'richard_severich@hotmail.com', 5928025, 'Richard', 'Severich'),
(5928091, 'Erikson', 'Severich', '1999-07-15', 'Av Blanco', 4269855, 'richard_severich@hotmail.com', 5928025, 'Richard', 'Severich'),
(5928092, 'Erika', 'Severich', '1999-09-16', 'Av Blanco', 4269855, 'richard_severich@hotmail.com', 5928025, 'Richard', 'Severich'),
(5928094, 'Toribio', 'Severich', '1999-04-13', 'Av blanco', 4375773, 'richard_severich@hotmail.com', 5928025, 'Richard', 'Severich'),
(6428307, 'Hisely ', 'Suarez Rendon ', '1989-01-20', 'Av Blanco ', 65703970, 'shadinsky_hideki@hotmail.com', 6428306, 'Ignacio ', 'Suarez Rojas '),
(7541254, 'ana teofila', 'choque huanca', '1998-12-31', 'quillacollo', 74562215, 'rodrigo?@algo.com', 5928025, 'rodrigo', 'cespedes'),
(7630733, 'Abella', 'Herrera', '1998-02-05', 'Av. Heroinas 145', 4554587, 'Abella@hotmail.com', 1054780, 'Fausto', 'Herrera'),
(8052938, 'Isabel', 'Alvarez Carballo', '1991-11-28', 'Temporal', 7976083, 'isabela_chavelita15@hotmail.com', 5928025, 'Samuel', 'Poma Castellon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE IF NOT EXISTS `gestion` (
  `aniogestion` int(11) NOT NULL,
  `montopreescolar` double NOT NULL,
  `montoprimaria` double NOT NULL,
  `montosecundaria` double NOT NULL,
  `descuentosegundohermano` double NOT NULL,
  `descuentotercerhermano` double NOT NULL,
  `descuentocuartohermano` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`aniogestion`, `montopreescolar`, `montoprimaria`, `montosecundaria`, `descuentosegundohermano`, `descuentotercerhermano`, `descuentocuartohermano`) VALUES
(2014, 260, 335, 367, 0, 30, 100),
(2015, 100, 100, 1000, 10, 50, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
`numinscripcion` int(11) NOT NULL,
  `ciestudiante` int(11) NOT NULL,
  `numcurso` int(11) NOT NULL,
  `aniogestion` text NOT NULL,
  `numhermano` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`numinscripcion`, `ciestudiante`, `numcurso`, `aniogestion`, `numhermano`) VALUES
(71, 8052938, 13, '2014', 1),
(72, 7630733, 13, '2014', 1),
(73, 7541254, 13, '2014', 2),
(74, 6428307, 13, '2014', 1),
(75, 5928094, 13, '2014', 3),
(76, 5928089, 13, '2014', 4),
(77, 5928087, 13, '2014', 1),
(78, 5928027, 13, '2014', 1),
(79, 5928026, 13, '2014', 1),
(82, 5928026, 15, '2015', 1),
(83, 5928027, 15, '2015', 1),
(84, 5928087, 15, '2015', 1),
(85, 5928094, 16, '2015', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensiones`
--

CREATE TABLE IF NOT EXISTS `pensiones` (
  `numinscripcion` int(11) NOT NULL,
  `pension1` text NOT NULL,
  `pension2` text NOT NULL,
  `pension3` text NOT NULL,
  `pension4` text NOT NULL,
  `pension5` text NOT NULL,
  `pension6` text NOT NULL,
  `pension7` text NOT NULL,
  `pension8` text NOT NULL,
  `pension9` text NOT NULL,
  `pension10` text NOT NULL,
  `saldodeudor` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `montopension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pensiones`
--

INSERT INTO `pensiones` (`numinscripcion`, `pension1`, `pension2`, `pension3`, `pension4`, `pension5`, `pension6`, `pension7`, `pension8`, `pension9`, `pension10`, `saldodeudor`, `descuento`, `montopension`) VALUES
(71, 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'debe', 367, 0, 367),
(72, 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 3670, 0, 367),
(73, 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 0, 0, 367),
(74, 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 0, 0, 367),
(75, 'pagado', 'pagado', 'pagado', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 1798, 30, 257),
(76, 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 0, 100, 0),
(77, 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 3670, 0, 367),
(78, 'pagado', 'pagado', 'pagado', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 2569, 0, 367),
(79, 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 0, 0, 367),
(82, 'pagado', 'pagado', 'pagado', 'pagado', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 6000, 0, 1000),
(83, 'pagado', 'pagado', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 8000, 0, 1000),
(84, 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'pagado', 'debe', 'debe', 'debe', 3000, 0, 1000),
(85, 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 'debe', 10000, 0, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebacodigocontrol`
--

CREATE TABLE IF NOT EXISTS `pruebacodigocontrol` (
  `numautorizacion` bigint(20) NOT NULL,
  `numfactura` bigint(20) NOT NULL,
  `nitci` bigint(20) NOT NULL,
  `fecha` text NOT NULL,
  `monto` int(11) NOT NULL,
  `llave` text NOT NULL,
  `codigocontrol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pruebacodigocontrol`
--

INSERT INTO `pruebacodigocontrol` (`numautorizacion`, `numfactura`, `nitci`, `fecha`, `monto`, `llave`, `codigocontrol`) VALUES
(7904006306693, 876814, 1665979, '20080519', 35959, 'zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS', '7B-F3-48-A8'),
(8004005263848, 673173, 1666188, '20080810', 51330, 'PNRU4cgz7if)[tr#J69j=yCS57i=uVZ$n@nv6wxaRFP+AUf*L7Adiq3TT[Hw-@wt', '2C-98-0E-96'),
(7904006098968, 165657, 1666615, '20080630', 96459, 'm3dcSc)Dg#SN}prtK=9xn[m+pgAxL%N67G}QfwNZM+)IzCnvP$T*qjEKhmJnaDHm', 'AB-DD-0E-9B'),
(7904004313753, 826384, 1666982, '20080622', 61103, 'Ebs[$c2d2NCg5FYj@6nU5y##a5d]eDVz%]xW6bzcd}Kd)\\w\\=c+)dZHneF#bqVL@', '04-FF-52-67-CD'),
(1904008691195, 978256, 0, '20080201', 26006, 'pPgiFS%)v}@N4W3aQqqXCEHVS2[aDw_n%3)pFyU%bEB9)YXt%xNBub4@PZ4S9)ct', '62-12-AF-1B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ciusuario` int(11) NOT NULL,
  `contrasena` text NOT NULL,
  `tipo` text NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fechanacimiento` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ciusuario`, `contrasena`, `tipo`, `nombres`, `apellidos`, `fechanacimiento`, `direccion`, `telefono`, `email`) VALUES
(5928001, '5928001', 'Administrador', 'Alvaro', 'Laruta', '1980-05-26', 'Av. Blanco Galindo km-9', 4375773, 'Alvaro_Laruta@gmail.com'),
(5928002, '5928002', 'Secretaria', 'Miguel', 'Soria', '1985-05-26', 'Av. Capitan Ustaris km-5', 4375582, 'Miguel_Soria@gmail.com'),
(5928003, '5928003', 'Cajero', 'Ernesto', 'Avila', '1991-01-10', 'Av. Avila 457', 4375779, 'Ernesto_Avila@gmail.com'),
(5928025, '5928025', 'Administrador', 'Richard Lorenzo', 'Severich Paredes', '1990-05-26', 'Av Blanco Galindo km-9', 76479666, 'richard_severich@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
 ADD PRIMARY KEY (`numcurso`), ADD KEY `aniogestion` (`aniogestion`);

--
-- Indices de la tabla `datosfactura`
--
ALTER TABLE `datosfactura`
 ADD PRIMARY KEY (`codfactura`), ADD KEY `ciusuario` (`ciusuario`,`numinscripcion`), ADD KEY `nitcolegio` (`numdosificacion`), ADD KEY `numinscripcion` (`numinscripcion`);

--
-- Indices de la tabla `dosificacion`
--
ALTER TABLE `dosificacion`
 ADD PRIMARY KEY (`numdosificacion`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
 ADD PRIMARY KEY (`ciestudiante`);

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
 ADD PRIMARY KEY (`aniogestion`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
 ADD PRIMARY KEY (`numinscripcion`), ADD KEY `ciestudiante` (`ciestudiante`,`numcurso`), ADD KEY `numcurso` (`numcurso`);

--
-- Indices de la tabla `pensiones`
--
ALTER TABLE `pensiones`
 ADD KEY `numinscripcion` (`numinscripcion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`ciusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
MODIFY `numcurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `datosfactura`
--
ALTER TABLE `datosfactura`
MODIFY `codfactura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `dosificacion`
--
ALTER TABLE `dosificacion`
MODIFY `numdosificacion` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
MODIFY `numinscripcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`aniogestion`) REFERENCES `gestion` (`aniogestion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datosfactura`
--
ALTER TABLE `datosfactura`
ADD CONSTRAINT `datosfactura_ibfk_4` FOREIGN KEY (`ciusuario`) REFERENCES `usuarios` (`ciusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `datosfactura_ibfk_5` FOREIGN KEY (`numinscripcion`) REFERENCES `pensiones` (`numinscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `datosfactura_ibfk_6` FOREIGN KEY (`numdosificacion`) REFERENCES `dosificacion` (`numdosificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`ciestudiante`) REFERENCES `estudiantes` (`ciestudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`numcurso`) REFERENCES `cursos` (`numcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pensiones`
--
ALTER TABLE `pensiones`
ADD CONSTRAINT `pensiones_ibfk_1` FOREIGN KEY (`numinscripcion`) REFERENCES `inscripciones` (`numinscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Base de datos: `webauth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
