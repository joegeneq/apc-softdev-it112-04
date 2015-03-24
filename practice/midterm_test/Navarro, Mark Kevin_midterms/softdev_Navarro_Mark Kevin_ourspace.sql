SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `softdev_navarro_markkevin_ourspace` DEFAULT CHARACTER SET latin1 ;
USE `softdev_navarro_markkevin_ourspace` ;

-- -----------------------------------------------------
-- Table `softdev_navarro_markkevin_ourspace`.`myaddress`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softdev_navarro_markkevin_ourspace`.`myaddress` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(30) NULL DEFAULT NULL ,
  `middlename` VARCHAR(30) NULL DEFAULT NULL ,
  `lastname` VARCHAR(30) NULL DEFAULT NULL ,
  `gender` VARCHAR(1) NULL DEFAULT NULL ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softdev_navarro_markkevin_ourspace`.`mycomment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softdev_navarro_markkevin_ourspace`.`mycomment` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `myaddress_id` INT(11) NOT NULL ,
  `author` VARCHAR(255) NOT NULL ,
  `body` LONGTEXT NOT NULL ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_mycomment_myaddress_idx` (`myaddress_id` ASC) ,
  CONSTRAINT `fk_mycomment_myaddress`
    FOREIGN KEY (`myaddress_id` )
    REFERENCES `softdev_navarro_markkevin_ourspace`.`myaddress` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `softdev_navarro_markkevin_ourspace` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
