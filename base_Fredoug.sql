create database Fredoug;
use Fredoug;

create table Empresa(
id_Empresa int primary key identity,
direccion varchar(50),
nombre varchar(50) not null,
telefono int not null
);

create table Bodega(
id_Bodega int primary key identity,
ubicacion varchar(50),
id_Empresa int not null,
foreign key(id_Empresa) references Empresa(id_Empresa)
);

create table Producto(
id_Producto int primary key identity,
nombre varchar(50),
descripcion varchar(50),
existencias int,
stock int
);

create table Contiene(
id_Producto int not null,
id_Bodega int not null,
foreign key(id_Producto) references Producto(id_Producto),
foreign key(id_Bodega) references Bodega(id_Bodega),
primary key(id_Producto, id_Bodega)
);

create table Zona(
id_Zona int primary key identity,
nombre varchar(50),
distrito varchar(50),
canton varchar(50),
provincia varchar(50),
);


create table Finca(
id_Finca int primary key identity,
nombre varchar(50),
direccion varchar(50),
id_Zona int not null,
id_Empresa int not null,
foreign key(id_Zona) references Zona(id_Zona)
)

create table Se_Encuentra(
id_Finca int not null,
id_Producto int not null,
foreign key(id_Finca) references Finca(id_Finca),
foreign key(id_Producto) references Producto(id_Producto),
primary key(id_Finca, id_Producto)
);

'************Tabla Supervisor***************'

create table Supervisor(
cedula varchar(50) primary key,
nombre varchar(50),
apellido1 varchar(50),
apellido2 varchar(50),
telefono varchar(50),
correo varchar(50),
cuenta varchar(50),
superCedula varchar(50),
foreign key(superCedula) references Supervisor(cedula)
);

insert into Supervisor (cedula,nombre,apellido1,apellido2,telefono,correo,cuenta,superCedula) 
values('" &cedula&"','" &nombre&"','" &apellido1&"','" &apellido2&"','" &telefono&"','" &correo&"','"&cuenta&"','"&superCedula&"')

Select * From dbo.Supervisor

'************Tabla Supervisor***************'




create table Detalle_Informe(
id_Detalle int primary key identity,
id_Finca int not null,
porcentaje_Avance int 
foreign key(id_Finca) references Finca(id_Finca),
);

create table Informe(
id_Informe int primary key identity,
id_Supervisor varchar(50) not null,
id_Detalle_Informe int not null,
tipo_Informe varchar(20),
foreign key(id_Supervisor) references Supervisor(cedula),
foreign key(id_Detalle_Informe) references Detalle_Informe(id_Detalle)
);