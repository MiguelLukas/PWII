create database if not exists usuarios;

use usuarios;

create table if not exists usuario(
    id int not null auto_increment,
    usuario varchar(60) not null,
    senha varchar(50) not null,
    primary key (id)
);

insert into usuario(usuario, senha)
values('Carlos', md5('carlin02')), ('Miranda', md5('miranda654')),
('Valdomiro', md5('valdo665')), ('SilviaS', md5('silviass'));
