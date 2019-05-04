
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `libro` (
  `id` int(11) NOT NULL,
  `codigo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(45)  CHARACTER SET latin1 DEFAULT NULL,
  `tipo` varchar(15)  CHARACTER SET latin1 DEFAULT NULL,
  `fechaIngreso` DATE DEFAULT NULL,
  `precio` DECIMAL(18,3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='Tabla Libros';


ALTER TABLE `articulo`
 ADD PRIMARY KEY (`id`);

 ALTER TABLE `articulo` ADD UNIQUE(`codigo`)

ALTER TABLE `articulo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

