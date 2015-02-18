SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `crpms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms` ;

-- -----------------------------------------------------
-- Table `crpms`.`Medicine_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Medicine_Record` (
  `id` INT NOT NULL ,
  `medicine_name` VARCHAR(45) NOT NULL ,
  `medicine_expiration_date` DATE NOT NULL ,
  `medicine_price` VARCHAR(45) NOT NULL ,
  `medicine_type` VARCHAR(45) NOT NULL ,
  `medicine_manufacturer` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Prescription_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Prescription_Record` (
  `id` INT NOT NULL ,
  `patient_first_name` VARCHAR(45) NOT NULL ,
  `patient_last_name` VARCHAR(45) NOT NULL ,
  `patient_middle_initial` VARCHAR(45) NOT NULL ,
  `patient_Gender` VARCHAR(45) NOT NULL ,
  `patient_age` VARCHAR(45) NOT NULL ,
  `Medicine_Record_id` INT NOT NULL ,
  `prescription_quantity` INT NOT NULL ,
  `prescribed_by` VARCHAR(45) NOT NULL ,
  `accounting_confirmation` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Prescription_Record_Medicine_Record1_idx` (`Medicine_Record_id` ASC) ,
  CONSTRAINT `fk_Prescription_Record_Medicine_Record1`
    FOREIGN KEY (`Medicine_Record_id` )
    REFERENCES `crpms`.`Medicine_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Medicine_Location`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Medicine_Location` (
  `id` INT NOT NULL ,
  `cabinet_number` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `Medicine_Record_id` INT NOT NULL ,
  `quantity` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `cabinet_number_UNIQUE` (`cabinet_number` ASC) ,
  INDEX `fk_Medicine_Location_Medicine_Record1_idx` (`Medicine_Record_id` ASC) ,
  CONSTRAINT `fk_Medicine_Location_Medicine_Record1`
    FOREIGN KEY (`Medicine_Record_id` )
    REFERENCES `crpms`.`Medicine_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Stocks_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Stocks_Record` (
  `id` INT NOT NULL ,
  `delivery_date` DATE NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `Medicine_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Inventory_Record_Medicine_Record1_idx` (`Medicine_Record_id` ASC) ,
  CONSTRAINT `fk_Inventory_Record_Medicine_Record1`
    FOREIGN KEY (`Medicine_Record_id` )
    REFERENCES `crpms`.`Medicine_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `crpms` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
