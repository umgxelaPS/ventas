
-- Schema ventas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8 ;
USE `ventas` ;

-- -----------------------------------------------------
-- Table `ventas`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(100) NULL,
  `estado` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(100) NULL,
  `precio` VARCHAR(45) NULL,
  `stock` INT NULL,
  `estado` VARCHAR(45) NULL,
  `categorias_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_productos_categorias`
    FOREIGN KEY (`categorias_id`)
 REFERENCES `ventas`.`categorias` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `telefono` VARCHAR(15) NULL,
  `direccion` VARCHAR(100) NULL,
  `nit` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(100) NULL,
  `apellidos` VARCHAR(100) NULL,
  `telefono` VARCHAR(15) NULL,
  `email` VARCHAR(30) NULL,
  `username` VARCHAR(30) NULL,
  `password` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `roles_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usuario_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `ventas`.`roles` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`tipo_documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`tipo_documento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`ventas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `subtotal` VARCHAR(45) NULL,
  `descuento` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `numero_docuemento` VARCHAR(45) NULL,
  `clientes_id` INT NOT NULL,
  `tipo_documento_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_ventas_clientes1`
    FOREIGN KEY (`clientes_id`)
     REFERENCES `ventas`.`clientes` (`id`),
  CONSTRAINT `fk_ventas_tipo_documento1`
    FOREIGN KEY (`tipo_documento_id`)
    REFERENCES `ventas`.`tipo_documento` (`id`),
  CONSTRAINT `fk_ventas_usuario1`
    FOREIGN KEY (`usuario_id`)
REFERENCES `ventas`.`usuario` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`detalle_venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ventas`.`detalle_venta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `precio` VARCHAR(45) NULL,
  `cantidad` INT NULL,
  `importe` VARCHAR(45) NULL,
  `productos_id` INT NOT NULL,
  `ventas_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`productos_id`) REFERENCES `ventas`.`productos` (`id`),
  FOREIGN KEY (`ventas_id`) REFERENCES `ventas`.`ventas` (`id`))
ENGINE = InnoDB;


