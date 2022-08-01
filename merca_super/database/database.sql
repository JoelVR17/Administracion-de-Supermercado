CREATE DATABASE super_merca;
USE super_merca;

# De segundo se ejecuta/crea la tabla productos y se agregan sus datos
CREATE TABLE IF NOT EXISTS productos
( id INT(7) NOT NULL AUTO_INCREMENT,
  id_categoria INT(7) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  descripcion VARCHAR(1500) NULL,
  precio INT(250) NOT NULL,
  cantidad INT(250) NOT NULL,
  CONSTRAINT pk_producto PRIMARY KEY (id),
  CONSTRAINT fk_categoria FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

# drop table productos;

# Insertamos algunos datos
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (1,'Naranja Fanta',1470,'Refresco Naranja Fanta 2500ml',35);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (1,'Coca Cola Original ',1952,'Refresco Carbonatado COCA COLA Original 3L',54);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (1,'Jugo Naranja ',3360,'Jugo Dos Pinos Naranja Natural 1800ml',60);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (2,'Papaya',920,'Papaya por kg',46);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (2,'Banano',590,'Banano Selección Especial Kilo',45);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (2,'Piña',790,'Piña Dorada Sin Corona Unidad',35);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (3,'Tomate',2450,'Tomate Kilo',150);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (3,'Cebolla',1900,'Cebolla Kilo 5 Unidades Por Kg',200);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (3,'Papa',1850,'Papa Granel 4 A 7 Unidades Por Kg',300);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (3,'Culantro',570,'Culantro En Rollo Grande',350);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (3,'Zanahoria',650,'Zanahoria 6 A 8 Unidades Por Kg',400);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (4,'Cloro',1750,'Clorox Cloro Original 3785ml',32);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (4,'Desinfectante',800,'Desinfectante multiusos',50);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (5,'Tocineta',4440,'Tocineta Ahumada Cinta Azul 300Gr',43);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (5,'Jamón',2360,'Jamón Pechuga Cinta Azul Pavo 250Gr',120);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (5,'Salchicha',2040,'Salchicha Cinta Azul Pavo 480Gr',53);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (6,'Pasta',690,'Pasta Roma Larga Espaguetti 250gr',60);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (6,'Gallera Oreo',1900,'Galleta Oreo Regular 432gr',50);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (6,'Arroz',1750,'Arroz Tio Pelon 1800Gr',70);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (7,'Leche',1100,'Leche Dos Pinos Extra Calcio 1000ml',41);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (7,'Huevo',3370,'Huevo Don Cristobal 30 unidades',80);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (7,'Natilla',1560,'Natilla Dos Pinos Delactomy 400Gr',60);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (8,'Pasta dental',1840,'Pasta Dental Colgate 150ml',140);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (8,'Jabón Líquido',470,'Jabón Líquido Antibacterial 240ml',100);
INSERT INTO productos(id_categoria,nombre,precio,descripcion,cantidad) VALUES (8,'Shampoo',4320,'Shampoo Hidra 370ml',60);

# Primero se ejecuta/crea la tabla categoria y se agregan sus datos
CREATE TABLE categoria(
id_categoria INT NOT NULL AUTO_INCREMENT,
nombre_categoria VARCHAR(150),
CONSTRAINT pk_categoria PRIMARY KEY (id_categoria));

# drop table categoria;

INSERT INTO categoria(nombre_categoria) VALUES ('Bebidas');
INSERT INTO categoria(nombre_categoria) VALUES ('Frutas');
INSERT INTO categoria(nombre_categoria) VALUES ('Verduras');
INSERT INTO categoria(nombre_categoria) VALUES ('Limpieza');
INSERT INTO categoria(nombre_categoria) VALUES ('Embutidos');
INSERT INTO categoria(nombre_categoria) VALUES ('Abarrotes');
INSERT INTO categoria(nombre_categoria) VALUES ('Lácteos');
INSERT INTO categoria(nombre_categoria) VALUES ('Higiene');

# Tabla de roles
CREATE TABLE IF NOT EXISTS roles
( id_rol INT(7) NOT NULL AUTO_INCREMENT,
  rol VARCHAR(50) NOT NULL,
  CONSTRAINT roles_pk PRIMARY KEY (id_rol)
);
# DROP TABLE roles;

# Insertamos los dos roles: admin y usuario
INSERT HIGH_PRIORITY INTO roles(rol) VALUES ('administrador');
INSERT HIGH_PRIORITY INTO roles(rol) VALUES ('usuario');

# Tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios
( id_usuario INT(7) NOT NULL AUTO_INCREMENT,
  nombre_usuario VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  cedula INT(10) NOT NULL,
  usuario VARCHAR(50) NOT NULL,
  passwd TEXT(50) NOT NULL,
  ultima_sesion DATETIME NULL DEFAULT '0000-00-00 00:00:00',
  rol_id INT(7) NOT NULL,
  CONSTRAINT roles_pk PRIMARY KEY (id_usuario),
  CONSTRAINT usuario_fk FOREIGN KEY (rol_id) REFERENCES roles(id_rol)
);
# DROP TABLE usuarios;

# Insertamos el rol de administrador
INSERT HIGH_PRIORITY INTO usuarios (nombre_usuario,apellido,cedula,usuario,passwd,rol_id) VALUES ('Joel','Vargas','305382341','Joel25',SHA1('12345'),'1');
INSERT HIGH_PRIORITY INTO usuarios (nombre_usuario,apellido,cedula,usuario,passwd,rol_id) VALUES ('Marco','Araya','305380112','Marcox23',SHA1('123'),'2');

/* Tabla de consultas, Telefono puede ser una tabla individual asociada con consultas, por simplicidad lo omitimos pero debería hacerse */
CREATE TABLE IF NOT EXISTS consultas
( id_consulta INT(7) NOT NULL AUTO_INCREMENT,
  id_usuario_consulta INT(7) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  tipo_consulta VARCHAR(100) NOT NULL,
  telefono INT(11) NOT NULL,
  mensaje INT(7) NOT NULL,
  CONSTRAINT consulta_pk PRIMARY KEY (id_consulta),
  CONSTRAINT usuario_consulta_fk FOREIGN KEY (id_usuario_consulta) REFERENCES usuarios(id_usuario));

# drop table consultas;

# Tabla de ordenes/compras
CREATE TABLE IF NOT EXISTS ordenes
( id_orden INT(7) NOT NULL AUTO_INCREMENT,
  id_producto INT(7) NOT NULL,
  usuario_id INT(7) NOT NULL,
  precio INT(12) NOT NULL,
  cantidad INT(10) NOT NULL,
  fecha_orden DATETIME NULL DEFAULT '0000-00-00 00:00:00',
  CONSTRAINT orden_pk PRIMARY KEY (id_orden),
  CONSTRAINT producto_orden_fk FOREIGN KEY (id_producto) REFERENCES productos(id),
  CONSTRAINT usuario_orden_fk FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);   

# drop table ordenes;

# Procedimientos almacenados utilizados en php para las operaciones con el crud
DELIMITER //
CREATE PROCEDURE agregarProducto(in id int(10),in nombre varchar(50),in precio int,in cantidad int)
BEGIN
 INSERT INTO productos (id_categoria,nombre,precio,cantidad) VALUES (id,nombre,precio,cantidad);
 END//
DELIMITER ;

# drop procedure agregarProducto;

DELIMITER //
CREATE PROCEDURE actualizarProducto(in id_producto int(10),in precio_producto int,in cantidad_producto int)
BEGIN
 UPDATE productos SET precio=precio_producto, cantidad=cantidad_producto WHERE id=id_producto;
 END//
DELIMITER ;

# drop procedure actualizarProducto;

DELIMITER //
CREATE PROCEDURE borrarProducto(in id_producto int(10))
BEGIN
 DELETE FROM productos WHERE id=id_producto;
 END//
DELIMITER ;

# drop procedure borrarProducto;

DELIMITER //
CREATE PROCEDURE mostrarProductos()
BEGIN
 SELECT id, productos.nombre, categoria.nombre_categoria, precio, cantidad FROM productos INNER JOIN categoria ON categoria.id_categoria=productos.id_categoria;
 END//
DELIMITER ;

# drop procedure mostrarProductos;

/* Procedimientos almacenados para registrar usuarios y validarlos en el login */
DELIMITER //
-- El nombre de los parametros debe ser diferente al de los datos de la tabla sino no sirve el procedimiento, error obtenido en el proceso
CREATE PROCEDURE registrarUsuario(in nombre varchar(100),in apellido_usuario varchar(100), in cedula_usuario int(15),in username varchar(100),in pass text(50),in rol int(10))
BEGIN
 INSERT INTO usuarios (nombre_usuario,apellido,cedula,usuario,passwd,rol_id) values (nombre,apellido_usuario,cedula_usuario,username,pass,rol);
 END//
DELIMITER ;

# drop procedure registrarUsuario;

DELIMITER //
CREATE PROCEDURE validarLogin(in username varchar(100),in pass text(50))
BEGIN
 SELECT * FROM usuarios WHERE usuario = username AND passwd = pass;
 END//
DELIMITER ;

# drop procedure validarLogin;

DELIMITER //
CREATE FUNCTION buscarRepetido(username varchar(100), pass text(50)) RETURNS INTEGER
BEGIN
 DECLARE dato INT;
 SET dato = 0;
 SELECT COUNT(*) INTO dato FROM usuarios WHERE usuario = username AND passwd = pass;
 RETURN dato;
 END//
DELIMITER ;

# drop function buscarRepetido;

/* Esta función identifica el id de la categoria buscando por nombre*/
DELIMITER //
CREATE FUNCTION identificarCategoria(categoria varchar(100)) RETURNS INTEGER
BEGIN
 DECLARE id INT;
 SET id = 0;
 select id_categoria as "id_categoria" into id from categoria where nombre_categoria = categoria;
 RETURN id;
 END//
DELIMITER ;

# drop function identificarCategoria;

# Consultas elaboradas para las operaciones con el crud
SELECT id, productos.nombre, categoria.nombre, precio, cantidad FROM productos INNER JOIN categoria ON categoria.id_categoria=productos.id_categoria;
SELECT id, productos.nombre, categoria.nombre_categoria, precio, cantidad FROM productos INNER JOIN categoria ON categoria.id_categoria=productos.id_categoria ORDER BY id DESC LIMIT 1;

