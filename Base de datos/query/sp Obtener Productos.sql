DELIMITER $$

DROP
	PROCEDURE IF EXISTS `central-market`.`spObtenerProductos` $$

CREATE
    PROCEDURE spObtenerProductos (

	IN varCategoria varchar(30)
)

BEGIN

	select nombre,precio from `central-market`.Producto 
		where fkCategoria = (select idCategoria from `central-market`.Categoria 
			where nombre = varCategoria);

END $$