SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `crpms1.1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crpms1.1` ;

-- -----------------------------------------------------
-- Table `crpms1.1`.`account`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`account` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `account_lastname` VARCHAR(45) NULL DEFAULT NULL ,
  `account_firstname` VARCHAR(45) NULL DEFAULT NULL ,
  `account_middle_initial` VARCHAR(45) NULL DEFAULT NULL ,
  `account_birthdate` VARCHAR(45) NULL DEFAULT NULL ,
  `account_home_address` VARCHAR(45) NULL DEFAULT NULL ,
  `account_email_address` VARCHAR(45) NULL DEFAULT NULL ,
  `account_contact_number` VARCHAR(45) NULL DEFAULT NULL ,
  `account_username` VARCHAR(45) NOT NULL ,
  `account_password` VARCHAR(45) NOT NULL ,
  `account_type` VARCHAR(45) NULL DEFAULT NULL ,
  `search` TINYINT(1) NULL DEFAULT NULL ,
  `reports` TINYINT(1) NULL DEFAULT NULL ,
  `forms` TINYINT(1) NULL DEFAULT NULL ,
  `system` TINYINT(1) NULL DEFAULT NULL ,
  `rights_add` TINYINT(1) NULL DEFAULT NULL ,
  `rights_edit` TINYINT(1) NULL DEFAULT NULL ,
  `rights_delete` TINYINT(1) NULL DEFAULT NULL ,
  `rights_view` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `account_username_UNIQUE` (`account_username` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `crpms1.1`.`stock_issue_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`stock_issue_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `ward_name` VARCHAR(45) NOT NULL ,
  `prepared_by` VARCHAR(45) NOT NULL ,
  `approved_by` VARCHAR(45) NOT NULL ,
  `issued_by` VARCHAR(45) NOT NULL ,
  `received_by` VARCHAR(45) NOT NULL ,
  `account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stock_issue_form_account1_idx` (`account_id` ASC) ,
  CONSTRAINT `fk_stock_issue_form_account1`
    FOREIGN KEY (`account_id` )
    REFERENCES `crpms1.1`.`account` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1.1`.`return_slip_form`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`return_slip_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `patient_last_name` VARCHAR(45) NOT NULL ,
  `patient_first_name` VARCHAR(45) NOT NULL ,
  `patient_middle_initial` VARCHAR(45) NULL ,
  `date` DATE NOT NULL ,
  `ward_name` VARCHAR(45) NOT NULL ,
  `bed_number` VARCHAR(45) NOT NULL ,
  `returned_by` VARCHAR(45) NOT NULL ,
  `received_by` VARCHAR(45) NOT NULL ,
  `approved_by` VARCHAR(45) NOT NULL ,
  `accounting_status` TINYINT(1)  NOT NULL ,
  `account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `patient_name_UNIQUE` (`patient_last_name` ASC) ,
  UNIQUE INDEX `patient_first_name_UNIQUE` (`patient_first_name` ASC) ,
  INDEX `fk_return_slip_form_account1` (`account_id` ASC) ,
  CONSTRAINT `fk_return_slip_form_account1`
    FOREIGN KEY (`account_id` )
    REFERENCES `crpms1.1`.`account` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1.1`.`stocks_record`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`stocks_record` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `desciption` VARCHAR(45) NOT NULL ,
  `account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stocks_record_account1_idx` (`account_id` ASC) ,
  CONSTRAINT `fk_stocks_record_account1`
    FOREIGN KEY (`account_id` )
    REFERENCES `crpms1.1`.`account` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1.1`.`stock_issue_item`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`stock_issue_item` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `item_name` VARCHAR(45) NOT NULL ,
  `quantity` INT NOT NULL ,
  `expiration_date` DATE NOT NULL ,
  `unit_cost` INT NOT NULL ,
  `amount` INT NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `stock_issue_form_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stock_issue_item_stock_issue_form1_idx` (`stock_issue_form_id` ASC) ,
  CONSTRAINT `fk_stock_issue_item_stock_issue_form1`
    FOREIGN KEY (`stock_issue_form_id` )
    REFERENCES `crpms1.1`.`stock_issue_form` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1.1`.`return_item`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`return_item` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `item_name` VARCHAR(45) NOT NULL ,
  `quantity` INT NOT NULL ,
  `amount` DECIMAL NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `return_slip_form_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_return_item_return_slip_form1_idx` (`return_slip_form_id` ASC) ,
  CONSTRAINT `fk_return_item_return_slip_form1`
    FOREIGN KEY (`return_slip_form_id` )
    REFERENCES `crpms1.1`.`return_slip_form` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crpms1.1`.`stocks_record_item`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crpms1.1`.`stocks_record_item` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `item_name` VARCHAR(45) NOT NULL ,
  `available_quantity` INT NOT NULL ,
  `released_quantity` INT NOT NULL ,
  `delivery_date` DATE NOT NULL ,
  `purchasing_status` TINYINT(1)  NOT NULL ,
  `remarks` VARCHAR(45) NULL ,
  `stocks_record_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_stocks_record_item_stocks_record1_idx` (`stocks_record_id` ASC) ,
  CONSTRAINT `fk_stocks_record_item_stocks_record1`
    FOREIGN KEY (`stocks_record_id` )
    REFERENCES `crpms1.1`.`stocks_record` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
