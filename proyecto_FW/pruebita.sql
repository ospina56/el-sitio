 create database bd_ddm;
 use  bd_ddm;
 
create table productos(
id int auto_increment primary key,
nombre varchar(100),
descripcion text,
precio decimal(10,2),
imagen varchar(255)
);

create table usuarios(
id int auto_increment primary key,
nombre varchar(100),
correo varchar(100),
contraseña varchar(100)
);

create table carrito(
id int auto_increment primary key,
id_usuario int,
id_producto int,
cantidad int,
foreign key (id_usuario) references usuarios(id),
foreign key (id_producto) references productos(id)
);

select * from usuarios;
select * from productos;
select * from carrito;