
insert into pais(pais, codigoPostal) value('El Salvador', '00106-800');

INSERT INTO  `a5255800_empleoo`.`PAIS` (
`idPais` ,
`pais` ,
`codigoPostal`
)
VALUES (
NULL ,  'El Salvador',  '00106-800'
);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(100, 'Ahuachapan', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(200, 'Cabanas', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(300, 'Chalatenango', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(400, 'Cuscatlan', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(500, 'La Libertad', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(600, 'La paz', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(700, 'La Union', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(800, 'Morazan', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(900, 'San Miguel', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(1000, 'San Salvador', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(1100, 'San Vicente', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(1200, 'Santa Ana', 1);

insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(1300, 'Sonsonate', 1);
insert into `a5255800_empleoo`.`DEPARTAMENTO`(idDdepartamento, departamento, PAIS_idPais) value(1400, 'Usulutan', 1);


insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('-');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Acompanado/a');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Casado/a');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Divorciado/a');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Separado/a');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Soltero/a');
insert into `a5255800_empleoo`.`ESTADO_CIVIL`(estadoCivil) values('Viudo/a');

INSERT INTO `a5255800_empleoo`.`GENERO`(genero) VALUES ('-');
INSERT INTO `a5255800_empleoo`.`GENERO`(genero) VALUES ('Femenino');
INSERT INTO `a5255800_empleoo`.`GENERO`(genero) VALUES ('Masculino');
INSERT INTO `a5255800_empleoo`.`GENERO`(genero) VALUES ('Otro');


INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(100,'Agricultura/Pesca/Ganaderia');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(200, 'Construccion/Obras');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(300, 'Educacion');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(400, 'Energia');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(500, 'Entretenimiento/Deportes');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(600, 'Fabricacion');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(700, 'Finanzas/Banca');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(800, 'Gobierno/No Lucro');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(900, 'Hosteleria/Turismo');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1000, 'Informatica/Hardware');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1100, 'Informatica/Software');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1200, 'Internet');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1300, 'Legal/Asesoria');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1400, 'Materias Primas');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1500, 'Medios de Comunicacion');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1600, 'Publicidad/RRPP');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1700, 'RRHH/Personal');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1800, 'Salud/Medicina');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(1900, 'Servicios Profesionales');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(2000, 'Telecomunicaciones');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(2100, 'Transporte');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(2200, 'Venta al consumidor');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(2300, 'Venta al por mayor');
INSERT INTO `a5255800_empleoo`.`AREA`(idArea, area) VALUES(2400, 'Otros');


INSERT INTO `a5255800_empleoo`.`TIPO_TRABAJO`(idTipoTrabajo, tipoTrabajo) VALUES(100, 'Por hora');
INSERT INTO `a5255800_empleoo`.`TIPO_TRABAJO`(idTipoTrabajo, tipoTrabajo) VALUES(200, 'Precio fijo');


INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(100, 'Administracion/Oficina');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(200, 'Arte/Diseno/Medios');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(300, 'Cientifico/Investigacion');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(400, 'Direccion/Gerencia');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(500, 'Economia/Contabilidad');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(600, 'Educacion/Universidad');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(700, 'Hosteleria/Turismo');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(800, 'Informatica/Telecomunicaciones');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(900, 'Ingenieria/Tecnico');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(1000, 'Legal/Asesoria');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(1100, 'Marketing/Ventas');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(1200, 'Medicina/Salud');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(1300, 'Recursos Humanos');
INSERT INTO `a5255800_empleoo`.`CATEGORIA`(idCategoria, categoria) VALUES(1400, 'Otros');

INSERT INTO `a5255800_empleoo`.`HORAS_SEMANA`(idHorasSemana, horasSemana) 
VALUES(100, 'Medio tiempo' ); 
INSERT INTO `a5255800_empleoo`.`HORAS_SEMANA`(idHorasSemana, horasSemana) 
VALUES(200, 'Segun sea necesario' ); 
INSERT INTO `a5255800_empleoo`.`HORAS_SEMANA`(idHorasSemana, horasSemana) 
VALUES(300, 'Tiempo Completo' ); 