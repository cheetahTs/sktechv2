Create database bd_ShopeChoto;
USE BD_SHOPECHOTO;
DROP TABLE USUARIOS;

create table Usuarios (
id_persona int PRIMARY KEY auto_increment,
nombre varchar(20),
correo varchar(20),
contra varchar(20),
direccion varchar(20),
tipo varchar(20)
);
select *from usuarios;

insert into usuarios(nombre, correo,contra,direccion,tipo) 
values ("BrayanAd","admin123","123","CDMX", "Administrador" );

