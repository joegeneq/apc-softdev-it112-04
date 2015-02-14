SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `crpms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms` ;

-- -----------------------------------------------------
-- Table `crpms`.`Patient_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Patient_Record` (
  `id` INT NOT NULL ,
  `patient_lastname` VARCHAR(45) NOT NULL ,
  `patient_firstname` VARCHAR(45) NOT NULL ,
  `patient_middle_initial` VARCHAR(45) NOT NULL ,
  `patient_contact_number` VARCHAR(45) NOT NULL ,
  `patient_address` VARCHAR(45) NOT NULL ,
  `patient_birthdate` DATE NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


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
  `prescription_quantity` INT NOT NULL ,
  `prescribed_by` VARCHAR(45) NOT NULL ,
  `Patient_Record_id` INT NOT NULL ,
  `Medicine_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Prescription_Record_Patient_Record1_idx` (`Patient_Record_id` ASC) ,
  INDEX `fk_Prescription_Record_Medicine_Record1_idx` (`Medicine_Record_id` ASC) ,
  CONSTRAINT `fk_Prescription_Record_Patient_Record1`
    FOREIGN KEY (`Patient_Record_id` )
    REFERENCES `crpms`.`Patient_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prescription_Record_Medicine_Record1`
    FOREIGN KEY (`Medicine_Record_id` )
    REFERENCES `crpms`.`Medicine_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Payment_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Payment_Record` (
  `id` INT NOT NULL ,
  `total_amount` INT NOT NULL ,
  `payment_date` DATE NOT NULL ,
  `payment_confirmation` TINYINT(1) NOT NULL ,
  `Patient_Record_id` INT NOT NULL ,
  `Prescription_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Payment_Record_Patient_Record1_idx` (`Patient_Record_id` ASC) ,
  INDEX `fk_Payment_Record_Prescription_Record1_idx` (`Prescription_Record_id` ASC) ,
  CONSTRAINT `fk_Payment_Record_Patient_Record1`
    FOREIGN KEY (`Patient_Record_id` )
    REFERENCES `crpms`.`Patient_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Payment_Record_Prescription_Record1`
    FOREIGN KEY (`Prescription_Record_id` )
    REFERENCES `crpms`.`Prescription_Record` (`id` )
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
-- Table `crpms`.`Inventory_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Inventory_Record` (
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


-- -----------------------------------------------------
-- Table `crpms`.`Patient_History_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Patient_History_Record` (
  `id` INT NOT NULL ,
  `Payment_Record_id` INT NOT NULL ,
  `Patient_Record_id` INT NOT NULL ,
  `Prescription_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Prescription_History_Record_Payment_Record_idx` (`Payment_Record_id` ASC) ,
  INDEX `fk_Patient_History_Record_Patient_Record1_idx` (`Patient_Record_id` ASC) ,
  INDEX `fk_Patient_History_Record_Prescription_Record1_idx` (`Prescription_Record_id` ASC) ,
  CONSTRAINT `fk_Prescription_History_Record_Payment_Record`
    FOREIGN KEY (`Payment_Record_id` )
    REFERENCES `crpms`.`Payment_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Patient_History_Record_Patient_Record1`
    FOREIGN KEY (`Patient_Record_id` )
    REFERENCES `crpms`.`Patient_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Patient_History_Record_Prescription_Record1`
    FOREIGN KEY (`Prescription_Record_id` )
    REFERENCES `crpms`.`Prescription_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `crpms` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
