-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema a5255800_empleoo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema a5255800_empleoo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `a5255800_empleoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `a5255800_empleoo` ;

-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`ESTADO_CIVIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`ESTADO_CIVIL` (
  `idEstadoCivil` INT NOT NULL AUTO_INCREMENT,
  `estadoCivil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEstadoCivil`),
  UNIQUE INDEX `estadoCivil_UNIQUE` (`estadoCivil` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`GENERO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`GENERO` (
  `idGenero` INT NOT NULL AUTO_INCREMENT,
  `genero` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idGenero`),
  UNIQUE INDEX `genero_UNIQUE` (`genero` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`ASPIRANTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`ASPIRANTE` (
  `idAspirante` INT NOT NULL AUTO_INCREMENT,
  `primerNombre` VARCHAR(45) NOT NULL,
  `segundoNombre` VARCHAR(45) NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `nacimiento` VARCHAR(45) NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  `ESTADO_CIVIL_idEstadoCivil` INT NULL,
  `GENERO_idGenero` INT NULL,
  PRIMARY KEY (`idAspirante`),
  INDEX `fk_ASPIRANTE_ESTADO_CIVIL1_idx` (`ESTADO_CIVIL_idEstadoCivil` ASC),
  INDEX `fk_ASPIRANTE_GENERO1_idx` (`GENERO_idGenero` ASC),
  CONSTRAINT `fk_ASPIRANTE_ESTADO_CIVIL1`
    FOREIGN KEY (`ESTADO_CIVIL_idEstadoCivil`)
    REFERENCES `a5255800_empleoo`.`ESTADO_CIVIL` (`idEstadoCivil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ASPIRANTE_GENERO1`
    FOREIGN KEY (`GENERO_idGenero`)
    REFERENCES `a5255800_empleoo`.`GENERO` (`idGenero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`ADMINISTRADOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`ADMINISTRADOR` (
  `idAdministrador` INT NOT NULL AUTO_INCREMENT,
  `nombreAdministrador` VARCHAR(45) NOT NULL,
  `apellidoAdministrador` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contra` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`AREA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`AREA` (
  `idArea` INT NOT NULL,
  `area` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idArea`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`EMPRESA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`EMPRESA` (
  `idEmpresa` INT NOT NULL AUTO_INCREMENT,
  `nombreEmpresa` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `documento` VARCHAR(45) NULL,
  `AREA_idArea` INT NULL,
  PRIMARY KEY (`idEmpresa`),
  INDEX `fk_EMPRESA_AREA1_idx` (`AREA_idArea` ASC),
  CONSTRAINT `fk_EMPRESA_AREA1`
    FOREIGN KEY (`AREA_idArea`)
    REFERENCES `a5255800_empleoo`.`AREA` (`idArea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`PERSONA_CONTACTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`PERSONA_CONTACTO` (
  `idContacto` INT NOT NULL AUTO_INCREMENT,
  `nombreContacto` VARCHAR(45) NOT NULL,
  `apellidoContacto` VARCHAR(45) NOT NULL,
  `EMPRESA_idEmpresa` INT NOT NULL,
  PRIMARY KEY (`idContacto`),
  INDEX `fk_CONTACTO_EMPRESA1_idx` (`EMPRESA_idEmpresa` ASC),
  CONSTRAINT `fk_CONTACTO_EMPRESA1`
    FOREIGN KEY (`EMPRESA_idEmpresa`)
    REFERENCES `a5255800_empleoo`.`EMPRESA` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`CONTACTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`CONTACTO` (
  `idContacto` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `paginaWeb` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `fax` VARCHAR(45) NULL,
  `ASPIRANTE_idAspirante` INT NULL,
  `ADMINISTRADOR_idAdministrador` INT NULL,
  `PERSONA_CONTACTO_idContacto` INT NULL,
  PRIMARY KEY (`idContacto`),
  INDEX `fk_CONTACTO_ASPIRANTE1_idx` (`ASPIRANTE_idAspirante` ASC),
  INDEX `fk_CONTACTO_ADMINISTRADOR1_idx` (`ADMINISTRADOR_idAdministrador` ASC),
  INDEX `fk_CONTACTO_PERSONA_CONTACTO1_idx` (`PERSONA_CONTACTO_idContacto` ASC),
  CONSTRAINT `fk_CONTACTO_ASPIRANTE1`
    FOREIGN KEY (`ASPIRANTE_idAspirante`)
    REFERENCES `a5255800_empleoo`.`ASPIRANTE` (`idAspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CONTACTO_ADMINISTRADOR1`
    FOREIGN KEY (`ADMINISTRADOR_idAdministrador`)
    REFERENCES `a5255800_empleoo`.`ADMINISTRADOR` (`idAdministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CONTACTO_PERSONA_CONTACTO1`
    FOREIGN KEY (`PERSONA_CONTACTO_idContacto`)
    REFERENCES `a5255800_empleoo`.`PERSONA_CONTACTO` (`idContacto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`PAIS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`PAIS` (
  `idPais` INT NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(45) NOT NULL,
  `codigoPostal` VARCHAR(45) NULL,
  PRIMARY KEY (`idPais`),
  UNIQUE INDEX `idPais_UNIQUE` (`idPais` ASC),
  UNIQUE INDEX `pais_UNIQUE` (`pais` ASC),
  UNIQUE INDEX `codigoPostal_UNIQUE` (`codigoPostal` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`DEPARTAMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`DEPARTAMENTO` (
  `idDdepartamento` INT NOT NULL AUTO_INCREMENT,
  `departamento` VARCHAR(45) NOT NULL,
  `PAIS_idPais` INT NOT NULL,
  PRIMARY KEY (`idDdepartamento`),
  INDEX `fk_DEPARTAMENTO_PAIS1_idx` (`PAIS_idPais` ASC),
  CONSTRAINT `fk_DEPARTAMENTO_PAIS1`
    FOREIGN KEY (`PAIS_idPais`)
    REFERENCES `a5255800_empleoo`.`PAIS` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`DIRECCION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`DIRECCION` (
  `idDireccion` INT NOT NULL AUTO_INCREMENT,
  `direccion1` VARCHAR(45) NULL,
  `direccion2` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NOT NULL,
  `DEPARTAMENTO_idDdepartamento` INT NOT NULL,
  `ASPIRANTE_idAspirante` INT NULL,
  `EMPRESA_idEmpresa` INT NULL,
  PRIMARY KEY (`idDireccion`),
  INDEX `fk_DIRECCION_ASPIRANTE1_idx` (`ASPIRANTE_idAspirante` ASC),
  INDEX `fk_DIRECCION_DEPARTAMENTO1_idx` (`DEPARTAMENTO_idDdepartamento` ASC),
  INDEX `fk_DIRECCION_EMPRESA1_idx` (`EMPRESA_idEmpresa` ASC),
  CONSTRAINT `fk_DIRECCION_ASPIRANTE1`
    FOREIGN KEY (`ASPIRANTE_idAspirante`)
    REFERENCES `a5255800_empleoo`.`ASPIRANTE` (`idAspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DIRECCION_DEPARTAMENTO1`
    FOREIGN KEY (`DEPARTAMENTO_idDdepartamento`)
    REFERENCES `a5255800_empleoo`.`DEPARTAMENTO` (`idDdepartamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DIRECCION_EMPRESA1`
    FOREIGN KEY (`EMPRESA_idEmpresa`)
    REFERENCES `a5255800_empleoo`.`EMPRESA` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`INSTITUCION_EDUCATIVA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`INSTITUCION_EDUCATIVA` (
  `idInstitucion` INT NOT NULL AUTO_INCREMENT,
  `institucion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idInstitucion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`TITULO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`TITULO` (
  `idTitulo` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `INSTITUCION_EDUCATIVA_idInstitucion` INT NOT NULL,
  PRIMARY KEY (`idTitulo`),
  INDEX `fk_TITULO_INSTITUCION_EDUCATIVA1_idx` (`INSTITUCION_EDUCATIVA_idInstitucion` ASC),
  CONSTRAINT `fk_TITULO_INSTITUCION_EDUCATIVA1`
    FOREIGN KEY (`INSTITUCION_EDUCATIVA_idInstitucion`)
    REFERENCES `a5255800_empleoo`.`INSTITUCION_EDUCATIVA` (`idInstitucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`NIVEL_IDIOMA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`NIVEL_IDIOMA` (
  `idNivelIdioma` INT NOT NULL AUTO_INCREMENT,
  `nivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNivelIdioma`),
  UNIQUE INDEX `nivel_UNIQUE` (`nivel` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`IDIOMA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`IDIOMA` (
  `idIdioma` INT NOT NULL AUTO_INCREMENT,
  `idioma` VARCHAR(45) NOT NULL,
  `abreviatura` VARCHAR(45) NOT NULL,
  `NIVEL_IDIOMA_idNivelIdioma` INT NOT NULL,
  PRIMARY KEY (`idIdioma`),
  UNIQUE INDEX `idioma_UNIQUE` (`idioma` ASC),
  UNIQUE INDEX `abreviatura_UNIQUE` (`abreviatura` ASC),
  INDEX `fk_IDIOMA_NIVEL_IDIOMA2_idx` (`NIVEL_IDIOMA_idNivelIdioma` ASC),
  CONSTRAINT `fk_IDIOMA_NIVEL_IDIOMA2`
    FOREIGN KEY (`NIVEL_IDIOMA_idNivelIdioma`)
    REFERENCES `a5255800_empleoo`.`NIVEL_IDIOMA` (`idNivelIdioma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`ESTUDIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`ESTUDIO` (
  `idEstudio` INT NOT NULL AUTO_INCREMENT,
  `ASPIRANTE_idAspirante` INT NOT NULL,
  `TITULO_idTitulo` INT NOT NULL,
  `anioFin` VARCHAR(4) NOT NULL,
  `IDIOMA_idIdioma` INT NOT NULL,
  PRIMARY KEY (`idEstudio`),
  INDEX `fk_ESTUDIO_ASPIRANTE1_idx` (`ASPIRANTE_idAspirante` ASC),
  INDEX `fk_ESTUDIO_TITULO1_idx` (`TITULO_idTitulo` ASC),
  INDEX `fk_ESTUDIO_IDIOMA1_idx` (`IDIOMA_idIdioma` ASC),
  CONSTRAINT `fk_ESTUDIO_ASPIRANTE1`
    FOREIGN KEY (`ASPIRANTE_idAspirante`)
    REFERENCES `a5255800_empleoo`.`ASPIRANTE` (`idAspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ESTUDIO_TITULO1`
    FOREIGN KEY (`TITULO_idTitulo`)
    REFERENCES `a5255800_empleoo`.`TITULO` (`idTitulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ESTUDIO_IDIOMA1`
    FOREIGN KEY (`IDIOMA_idIdioma`)
    REFERENCES `a5255800_empleoo`.`IDIOMA` (`idIdioma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`CARRERA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`CARRERA` (
  `idCarrera` INT NOT NULL AUTO_INCREMENT,
  `carrera` VARCHAR(45) NOT NULL,
  `TITULO_idTitulo` INT NOT NULL,
  PRIMARY KEY (`idCarrera`),
  INDEX `fk_CARRERA_TITULO1_idx` (`TITULO_idTitulo` ASC),
  CONSTRAINT `fk_CARRERA_TITULO1`
    FOREIGN KEY (`TITULO_idTitulo`)
    REFERENCES `a5255800_empleoo`.`TITULO` (`idTitulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`EXPERIENCIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`EXPERIENCIA` (
  `idExperiencia` INT NOT NULL AUTO_INCREMENT,
  `fechaInicio` VARCHAR(45) NOT NULL,
  `fechaFinal` VARCHAR(45) NOT NULL,
  `empresa` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(300) NOT NULL,
  `ASPIRANTE_idAspirante` INT NOT NULL,
  PRIMARY KEY (`idExperiencia`),
  INDEX `fk_EXPERIENCIA_ASPIRANTE1_idx` (`ASPIRANTE_idAspirante` ASC),
  CONSTRAINT `fk_EXPERIENCIA_ASPIRANTE1`
    FOREIGN KEY (`ASPIRANTE_idAspirante`)
    REFERENCES `a5255800_empleoo`.`ASPIRANTE` (`idAspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`REFERENCIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`REFERENCIA` (
  `idReferencia` INT NOT NULL AUTO_INCREMENT,
  `referencia` VARCHAR(45) NOT NULL,
  `ASPIRANTE_idAspirante` INT NOT NULL,
  PRIMARY KEY (`idReferencia`),
  INDEX `fk_REFERENCIA_ASPIRANTE1_idx` (`ASPIRANTE_idAspirante` ASC),
  CONSTRAINT `fk_REFERENCIA_ASPIRANTE1`
    FOREIGN KEY (`ASPIRANTE_idAspirante`)
    REFERENCES `a5255800_empleoo`.`ASPIRANTE` (`idAspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`TIPO_TRABAJO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`TIPO_TRABAJO` (
  `idTipoTrabajo` INT NOT NULL AUTO_INCREMENT,
  `tipoTrabajo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoTrabajo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`HORAS_SEMANA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`HORAS_SEMANA` (
  `idHorasSemana` INT NOT NULL AUTO_INCREMENT,
  `horasSemana` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idHorasSemana`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`CATEGORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`CATEGORIA` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5255800_empleoo`.`EMPLEO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5255800_empleoo`.`EMPLEO` (
  `idEmpleo` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(900) NOT NULL,
  `fechaInicio` VARCHAR(45) NOT NULL,
  `fechaFin` VARCHAR(45) NULL,
  `presupuesto` DOUBLE NULL,
  `TIPO_TRABAJO_idTipoTrabajo` INT NULL,
  `HORAS_SEMANA_idHorasSemana` INT NULL,
  `CATEGORIA_idCategoria` INT NULL,
  `EMPRESA_idEmpresa` INT NOT NULL,
  PRIMARY KEY (`idEmpleo`),
  INDEX `fk_EMPLEO_TIPO_TRABAJO1_idx` (`TIPO_TRABAJO_idTipoTrabajo` ASC),
  INDEX `fk_EMPLEO_HORAS_SEMANA1_idx` (`HORAS_SEMANA_idHorasSemana` ASC),
  INDEX `fk_EMPLEO_CATEGORIA1_idx` (`CATEGORIA_idCategoria` ASC),
  INDEX `fk_EMPLEO_EMPRESA1_idx` (`EMPRESA_idEmpresa` ASC),
  CONSTRAINT `fk_EMPLEO_TIPO_TRABAJO1`
    FOREIGN KEY (`TIPO_TRABAJO_idTipoTrabajo`)
    REFERENCES `a5255800_empleoo`.`TIPO_TRABAJO` (`idTipoTrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEO_HORAS_SEMANA1`
    FOREIGN KEY (`HORAS_SEMANA_idHorasSemana`)
    REFERENCES `a5255800_empleoo`.`HORAS_SEMANA` (`idHorasSemana`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEO_CATEGORIA1`
    FOREIGN KEY (`CATEGORIA_idCategoria`)
    REFERENCES `a5255800_empleoo`.`CATEGORIA` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEO_EMPRESA1`
    FOREIGN KEY (`EMPRESA_idEmpresa`)
    REFERENCES `a5255800_empleoo`.`EMPRESA` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

