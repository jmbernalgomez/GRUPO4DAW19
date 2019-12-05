<?php
$sentenciasql="
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema alimentos42019
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema alimentos42019
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `alimentos42019` DEFAULT CHARACTER SET utf8 ;
USE `alimentos42019` ;

-- -----------------------------------------------------
-- Table `alimentos42019`.`alimentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alimentos42019`.`alimentos` (
  `nombre` VARCHAR(45) NOT NULL,
  `energia` INT NULL,
  `proteina` INT NULL,
  `hidratocarbono` INT NULL,
  `fibra` INT NULL,
  `grasatotal` INT NULL,
  PRIMARY KEY (`nombre`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
";
?>
