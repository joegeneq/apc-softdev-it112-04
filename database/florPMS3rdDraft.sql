SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `crpms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms` ;

-- -----------------------------------------------------
-- Table `crpms`.`ward`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`ward` (
  `ward_name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NULL ,
  PRIMARY KEY (`ward_name`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`pharmacist`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`pharmacist` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `last_name` VARCHAR(45) NOT NULL ,
  `first_name` VARCHAR(45) NOT NULL ,
  `middle_initial` VARCHAR(45) NOT NULL ,
  `gender` VARCHAR(45) NOT NULL ,
  `birthdate` DATE NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`stock_issue_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`stock_issue_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `current_date` DATE NOT NULL ,
  `date` DATE NOT NULL ,
  `item` VARCHAR(45) NOT NULL ,
  `expiration_date` DATE NULL ,
  `quantity` INT NOT NULL ,
  `unit_cost` INT NOT NULL ,
  `amount` INT NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `prepared_by` VARCHAR(45) NOT NULL ,
  `approved_by` VARCHAR(45) NOT NULL ,
  `issued_by` VARCHAR(45) NOT NULL ,
  `received_by` VARCHAR(45) NOT NULL ,
  `pharmacist_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stock_issue_form_pharmacist1_idx` (`pharmacist_id` ASC) ,
  CONSTRAINT `ward_name`
    FOREIGN KEY ()
    REFERENCES `crpms`.`ward` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_stock_issue_form_pharmacist1`
    FOREIGN KEY (`pharmacist_id` )
    REFERENCES `crpms`.`pharmacist` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`return_slip_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`return_slip_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `patient_name` VARCHAR(45) NOT NULL ,
  `date` DATE NOT NULL ,
  `bed_number` VARCHAR(45) NOT NULL ,
  `item` VARCHAR(45) NOT NULL ,
  `quantity` VARCHAR(45) NOT NULL ,
  `amount` VARCHAR(45) NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `returned_by` VARCHAR(45) NOT NULL ,
  `received_by` VARCHAR(45) NOT NULL ,
  `approved_by` VARCHAR(45) NOT NULL ,
  `accounting_status` TINYINT(1) NOT NULL ,
  `pharmacist_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `patient_name_UNIQUE` (`patient_name` ASC) ,
  INDEX `fk_return_slip_form_pharmacist1_idx` (`pharmacist_id` ASC) ,
  CONSTRAINT `ward_name`
    FOREIGN KEY ()
    REFERENCES `crpms`.`ward` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_return_slip_form_pharmacist1`
    FOREIGN KEY (`pharmacist_id` )
    REFERENCES `crpms`.`pharmacist` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms`.`stocks_record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms`.`stocks_record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `item_name` VARCHAR(45) NOT NULL ,
  `available_quantity` INT NOT NULL ,
  `released_quantity` INT NOT NULL ,
  `delivery_date` DATE NOT NULL ,
  `purchasing_status` TINYINT(1) NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `pharmacist_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stocks_record_pharmacist1_idx` (`pharmacist_id` ASC) ,
  CONSTRAINT `fk_stocks_record_pharmacist1`
    FOREIGN KEY (`pharmacist_id` )
    REFERENCES `crpms`.`pharmacist` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `crpms` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
