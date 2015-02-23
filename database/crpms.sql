SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `crpms1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms1` ;

-- -----------------------------------------------------
-- Table `crpms1`.`employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1`.`employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `employee_lastname` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_firstname` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_middle_initial` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_birthdate` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_home_address` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_email_address` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_contact_number` VARCHAR(45) NULL DEFAULT NULL ,
  `employee_username` VARCHAR(45) NOT NULL ,
  `employee_password` VARCHAR(45) NOT NULL ,
  `employee_type` VARCHAR(45) NULL DEFAULT NULL ,
  `search` TINYINT(1) NULL DEFAULT NULL ,
  `reports` TINYINT(1) NULL DEFAULT NULL ,
  `forms` TINYINT(1) NULL DEFAULT NULL ,
  `system` TINYINT(1) NULL DEFAULT NULL ,
  `rights_add` TINYINT(1) NULL DEFAULT NULL ,
  `rights_edit` TINYINT(1) NULL DEFAULT NULL ,
  `rights_delete` TINYINT(1) NULL DEFAULT NULL ,
  `rights_view` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `account_username_UNIQUE` (`employee_username` ASC) )
ENGINE = InnoDB AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `crpms1`.`stock_issue_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1`.`stock_issue_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `current_date` DATE NOT NULL ,
  `date` DATE NOT NULL ,
  `item` VARCHAR(45) NOT NULL ,
  `expiration_date` DATE NOT NULL ,
  `quantity` INT NOT NULL ,
  `unit_cost` INT NOT NULL ,
  `amount` INT NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `prepared_by` VARCHAR(45) NOT NULL ,
  `approved_by` VARCHAR(45) NOT NULL ,
  `issued_by` VARCHAR(45) NOT NULL ,
  `received_by` VARCHAR(45) NOT NULL ,
  `ward_name` VARCHAR(45) NOT NULL ,
  `employee_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stock_issue_form_account1_idx` (`employee_id` ASC) ,
  CONSTRAINT `fk_stock_issue_form_account1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `crpms1`.`employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1`.`return_slip_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1`.`return_slip_form` (
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
  `accounting_status` TINYINT(1)  NOT NULL ,
  `ward_name` VARCHAR(45) NOT NULL ,
  `employee_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `patient_name_UNIQUE` (`patient_name` ASC) ,
  INDEX `fk_return_slip_form_account1_idx` (`employee_id` ASC) ,
  CONSTRAINT `fk_return_slip_form_account1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `crpms1`.`employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1`.`stocks_record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1`.`stocks_record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `item_name` VARCHAR(45) NOT NULL ,
  `available_quantity` INT NOT NULL ,
  `released_quantity` INT NOT NULL ,
  `delivery_date` DATE NOT NULL ,
  `purchasing_status` TINYINT(1)  NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `employee_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stocks_record_account1_idx` (`employee_id` ASC) ,
  CONSTRAINT `fk_stocks_record_account1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `crpms1`.`employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
