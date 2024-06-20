show databases;
create schema pruebita1;
use pruebita1;

show tables;
create table tb_usuarios(
documento int not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
correo varchar(50) not null,
contraseña varchar(50) not null,
fecha date not null,
primary key(documento)
);

create table tb_productos(
id_producto int not null,
producto varchar(150) not null,
precio float not null,
cantidad int not null,
detalles varchar(150) not null,
id_categoría int  not null,
primary key(id_producto)
);

create table tb_categoría(
id_categoría int not null,
categoria varchar(50) not null,
primary key(id_categoría)
);

create table tb_compras(
factura varchar(100) not null,
método_pago varchar(50) not null,
devoluciones varchar(50) not null,
documento int not null,
id_producto int not null,
primary key(id_factura)
);

create table tb_carrito(
documento int not null,
nombre_producto varchar (40) not null,
cantidad int not null,
precio float not null,
primary key (documento)
);

create table tb_autenticar(
nombre varchar(50) not null,
contraseña varchar(20) not null,
primary key(contraseña)
);

create table tb_lista_deseos(
documento int not null,
id_producto int not null,
nombre_producto varchar (150) not null,
detalles varchar (150) not null,
primary key(id_productos)
);

create table tb_favoritos(
documento int not null,
producto varchar(50) not null,
detalles varchar(100) not null,
precio float not null,
id_producto int not null,
id_categoria int not null,
categoroia varchar(50) not null,
img BLOB,
primary key(documento)
);

drop table tb_usuarios;
select * from tb_favoritos;
select * from tb_carrito;
select * from tb_compras;
select * from tb_categoría;
select * from tb_productos;
select * from tb_usuarios;
select * from tb_autenticar;