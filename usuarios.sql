/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL auto_increment,
  `login` varchar(40) character set latin1 collate latin1_bin NOT NULL,
  `senha` varchar(40) character set latin1 collate latin1_bin NOT NULL,
  `situacao` varchar(5) NOT NULL COMMENT 'Ativo padr’o NAO. Serÿ SIM ap½s confirmar pagamento da taxa',
  `idperfil` int(11) NOT NULL,
  `dtreg` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idusuarios`),
  KEY `idperfil` (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
INSERT INTO `usuarios` VALUES (106,'sysduque','sysduque','SIM',1,'2013-10-06 22:37:39');

ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`);


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
