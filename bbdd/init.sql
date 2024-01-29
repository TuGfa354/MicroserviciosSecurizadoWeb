-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vaguada
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vaguada
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vaguada` DEFAULT CHARACTER SET utf8 ;
USE `vaguada` ;

-- -----------------------------------------------------
-- Table `vaguada`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `nombre_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) CHARACTER SET 'utf8' NULL,
  `precio` FLOAT NULL,
  `categoria` VARCHAR(45) NULL,
  `urlFeed` VARCHAR(100) NULL,
  `urlIndividual` VARCHAR(100) NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`preparacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`preparacion` (
  `idpreparacion` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idpreparacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`preparacion_has_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`preparacion_has_producto` (
  `preparacion_idpreparacion` INT NOT NULL,
  `producto_idproducto` INT NOT NULL,
  PRIMARY KEY (`preparacion_idpreparacion`, `producto_idproducto`),
  INDEX `fk_preparacion_has_producto_producto1_idx` (`producto_idproducto` ASC) ,
  INDEX `fk_preparacion_has_producto_preparacion1_idx` (`preparacion_idpreparacion` ASC) ,
  CONSTRAINT `fk_preparacion_has_producto_preparacion1`
    FOREIGN KEY (`preparacion_idpreparacion`)
    REFERENCES `vaguada`.`preparacion` (`idpreparacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_preparacion_has_producto_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `vaguada`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`role` (
  `idrole` INT NOT NULL AUTO_INCREMENT,
  `authority` VARCHAR(45) NULL,
  PRIMARY KEY (`idrole`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`role_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`role_has_user` (
  `role_idrole` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`role_idrole`, `user_iduser`),
  INDEX `fk_role_has_user_user1_idx` (`user_iduser` ASC) ,
  INDEX `fk_role_has_user_role1_idx` (`role_idrole` ASC) ,
  CONSTRAINT `fk_role_has_user_role1`
    FOREIGN KEY (`role_idrole`)
    REFERENCES `vaguada`.`role` (`idrole`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_role_has_user_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `vaguada`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`carrito` (
  `idcarrito` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`idcarrito`, `user_iduser`),
  INDEX `fk_carrito_user1_idx` (`user_iduser` ASC) ,
  CONSTRAINT `fk_carrito_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `vaguada`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaguada`.`carrito_has_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaguada`.`carrito_has_producto` (
  `carrito_idcarrito` INT NOT NULL,
  `producto_idproducto` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`carrito_idcarrito`, `producto_idproducto`),
  INDEX `fk_carrito_has_producto_producto1_idx` (`producto_idproducto` ASC) ,
  INDEX `fk_carrito_has_producto_carrito1_idx` (`carrito_idcarrito` ASC) ,
  CONSTRAINT `fk_carrito_has_producto_carrito1`
    FOREIGN KEY (`carrito_idcarrito`)
    REFERENCES `vaguada`.`carrito` (`idcarrito`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrito_has_producto_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `vaguada`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
