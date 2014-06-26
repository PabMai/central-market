CREATE DATABASE  IF NOT EXISTS `central-market`;
USE `central-market`;

--
-- Table structure for table `Categorias`
--

DROP TABLE IF EXISTS `Categoria`;

CREATE TABLE `Categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `Categoria` 
VALUES 
(1,'Electrodomesticos'),
(2,'Ferreteria'),
(3,'Almacen'),
(4,'Carniceria'),
(5,'Panaderia');

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;

CREATE TABLE `Producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `fkCategoria` int(11) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `fk_Producto_Categoria_idx` (`fkCategoria`),
  CONSTRAINT `fk_Producto_Categoria` FOREIGN KEY (`fkCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO `Producto` 
VALUES 
(1,'Aire acondicionado split frio / calor Philco PHS25H13X',1,5199.00),
(2,'Aire acondicionado split frio / calor Electrolux EA09H',1,6499.00),
(3,'Lavarropas Drean Excellent Blue 7.09 G',1,4999.00),
(4,'Lavarropas carga superior Philco WM-PH708',1,4299.00),
(5,'Heladera bajo mesada Mabe HMA122',1,3999.00),
(6,'Hheladera 2 frios Neba A318',1,4699.00),
(7,'Adhesivo la gotita 2 ml',2,7.90),
(8,'Manija Doble Balancin',2,89.95),
(9,'Candado De Bronce de 30 Mm',2,149.00),
(10,'Bisagra 26 Mm',2,18.20),
(11,'Caja De Herramientas 20 pulgadas',2,522.00),
(12,'Cereal Nestle Trix frutas de 230gr',3,29.70),
(13,'Azucar molida ledesma 1 kg',3,7.50),
(14,'Edulcorante liquido equalsweet 250 cc',3,20.00),
(15,'Aceite de maiz cocinero plus de 1 lt',3,31.90),
(16,'Cereal azucarado zucaritas keloggs 300gr',3,25.00),
(17,'Bife de chorizo great value x kg',4,115.90),
(18,'Matambre great value al vacio x kg',4,99.90),
(19,'Milanesa peceto great value al vacio x kg',4,112.90),
(20,'Vacio great value al vacio x kg',4,99.90),
(21,'Asado de tira novillo x kg',4,69.90),
(22,'Pan frances x kg',5,19.90),
(23,'Pan de campo 400gr',5,14.90),
(24,'Budin de chocolate',5,50.00),
(25,'Tarta manzana x kg',5,49.90);
