
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `usuario` (
  `id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `admin` boolean NOT NULL,
  `contraseña` varchar(45)  CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(50)  CHARACTER SET latin1 DEFAULT NULL
) DEFAULT CHARSET=utf8 COMMENT='Tabla Usuario';


ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);
