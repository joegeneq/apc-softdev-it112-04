SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `crpms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms` ;

-- -----------------------------------------------------
-- Table `crpms`.`Medicine_Location`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Medicine_Location` (
  `medloc_id` INT NOT NULL AUTO_INCREMENT ,
  `cabinet_number` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`medloc_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Medicine_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Medicine_Record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `medicine_name` VARCHAR(45) NOT NULL ,
  `medicine_expiration_date` DATETIME NOT NULL ,
  `medicine_price` INT NOT NULL ,
  `medicine_type` VARCHAR(45) NOT NULL ,
  `medicine_manufacturer` VARCHAR(45) NOT NULL ,
  `medicine_location_medloc_id` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Medicine_Record_Medicine_Location1_idx` (`Medicine_Location_medloc_id` ASC) ,
  CONSTRAINT `fk_Medicine_Record_Medicine_Location1`
    FOREIGN KEY (`Medicine_Location_medloc_id` )
    REFERENCES `crpms`.`Medicine_Location` (`medloc_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Prescription_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Prescription_Record` (
  `id` INT NOT NULL ,
  `Prescription_quantity` INT NOT NULL ,
  `Medicine_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `Prescription_quantity_UNIQUE` (`Prescription_quantity` ASC) ,
  INDEX `fk_Prescription_Record_Medicine_Record1_idx` (`Medicine_Record_id` ASC) ,
  CONSTRAINT `fk_Prescription_Record_Medicine_Record1`
    FOREIGN KEY (`Medicine_Record_id` )
    REFERENCES `crpms`.`Medicine_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Patient_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Patient_Record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `patient_lastname` VARCHAR(45) NOT NULL ,
  `Patient_firstname` VARCHAR(45) NOT NULL ,
  `patient_middle_inital` VARCHAR(1) NOT NULL ,
  `patient_contact_number` VARCHAR(20) NOT NULL ,
  `Patient_address` VARCHAR(100) NOT NULL ,
  `Patient_birthdate1` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `patient_lastname_UNIQUE` (`patient_lastname` ASC) ,
  UNIQUE INDEX `Patient_firstname_UNIQUE` (`Patient_firstname` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Payment_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Payment_Record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `total_amount` INT NOT NULL ,
  `payment_date` DATETIME NOT NULL ,
  `payment_confirmation` TINYINT(1) NOT NULL ,
  `Patient_Record_id` INT NOT NULL ,
  `Prescription_Record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `payment_confirmation_UNIQUE` (`payment_confirmation` ASC) ,
  INDEX `fk_Payment_Record_Patient_Record_idx` (`Patient_Record_id` ASC) ,
  INDEX `fk_Payment_Record_Prescription_Record1_idx` (`Prescription_Record_id` ASC) ,
  CONSTRAINT `fk_Payment_Record_Patient_Record`
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
-- Table `crpms`.`Patient_History_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Patient_History_Record` (
  `id` INT NOT NULL ,
  `patient_record_id` INT NOT NULL ,
  `prescription_record_id` INT NOT NULL ,
  `payment_record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Patient_History_Record_Patient_Record1_idx` (`Patient_Record_id` ASC) ,
  INDEX `fk_Patient_History_Record_Prescription_Record1_idx` (`Prescription_Record_id` ASC) ,
  INDEX `fk_Patient_History_Record_Payment_Record1_idx` (`Payment_Record_id` ASC) ,
  CONSTRAINT `fk_Patient_History_Record_Patient_Record1`
    FOREIGN KEY (`Patient_Record_id` )
    REFERENCES `crpms`.`Patient_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Patient_History_Record_Prescription_Record1`
    FOREIGN KEY (`Prescription_Record_id` )
    REFERENCES `crpms`.`Prescription_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Patient_History_Record_Payment_Record1`
    FOREIGN KEY (`Payment_Record_id` )
    REFERENCES `crpms`.`Payment_Record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`Inventory_Record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`Inventory_Record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `quantity_in_stocks` INT NOT NULL ,
  `delivery_Date` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `medicine_record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Inventory_Record_Medicine_Record1_idx` (`medicine_record_id` ASC) ,
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
