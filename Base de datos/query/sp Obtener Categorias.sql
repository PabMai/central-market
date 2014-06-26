DELIMITER $$

DROP
	PROCEDURE IF EXISTS `central-market`.`spObtenerCategrias` $$

CREATE
    PROCEDURE spObtenerCategrias ()

BEGIN

	select nombre from `central-market`.Categoria;

END 

$$