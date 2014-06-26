use `shopping-center`;

INSERT INTO Producto (nombre,descripcion,fkCategoria,precio) 
VALUES ('AIRE ACONDICIONADO SPLIT FRIO / CALOR PHILCO PHS25H13X',
		'Con display LCD y control remoto multifunción, programarlo es súper fácil. Capacidad 2500 Watts . Control remoto multifunción. Función Sleep. Barrido de aire automático. Función eliminación de humedad. Súper silencioso.',
		 1,
		 5199),
		('AIRE ACONDICIONADO SPLIT FRIO / CALOR ELECTROLUX EA09H',
		 'Niveles de ruido en funcionamiento excepcionalmente bajos. Capacidad 2300 Watts. Filtro de aire lavable. Ahorro de energía. Función Sleep. Barrido de aire automático. Función Auto-Swing. Función eliminación de humedad. Control remoto multifunción.',
		 1,
		 6499);

SELECT * FROM `shopping-center`.Producto;