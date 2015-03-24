SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `it112_exercise1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `it112_exercise1` ;

-- -----------------------------------------------------
-- Table `it112_exercise1`.`region`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`region` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `region_code` VARCHAR(32) NULL ,
  `region_description` VARCHAR(32) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `it112_exercise1`.`province`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`province` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `province_code` VARCHAR(32) NULL ,
  `province_description` VARCHAR(32) NULL ,
  `region_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_province_region1_idx` (`region_id` ASC) ,
  CONSTRAINT `fk_province_region1`
    FOREIGN KEY (`region_id` )
    REFERENCES `it112_exercise1`.`region` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `it112_exercise1`.`city`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`city` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `city_code` VARCHAR(32) NULL ,
  `city_desciption` VARCHAR(32) NULL ,
  `province_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_city_province1_idx` (`province_id` ASC) ,
  CONSTRAINT `fk_city_province1`
    FOREIGN KEY (`province_id` )
    REFERENCES `it112_exercise1`.`province` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `it112_exercise1` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
