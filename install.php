<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_Hpmgmt()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `hpmgmt` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `CAPTION` VARCHAR(255) DEFAULT NULL,
                              `IPILO` VARCHAR(255) DEFAULT NULL,
                              PRIMARY KEY  (`ID`,`HARDWARE_ID`)
                              ) ENGINE=INNODB;");

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `hpsmart` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `SMART` VARCHAR(255) DEFAULT NULL,
                              PRIMARY KEY (`ID`,`HARDWARE_ID`)
                              ) ENGINE=INNODB;");

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `hpraid` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `RAID` VARCHAR(255) DEFAULT NULL,
                              `RAIDSIZE` VARCHAR(255) DEFAULT NULL,
                              PRIMARY KEY (`ID`,`HARDWARE_ID`)
                              ) ENGINE=INNODB;");

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `hpdisk` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `DISK` VARCHAR(255) DEFAULT NULL,
                              `DISKNAME` VARCHAR(255) DEFAULT NULL,
                              `DISKSIZE` VARCHAR(255) DEFAULT NULL,
                              PRIMARY KEY (`ID`,`HARDWARE_ID`)
                              ) ENGINE=INNODB;");
}

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_Hpmgmt()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE `hpmgmt`;");
    $commonObject -> sqlQuery("DROP TABLE `hpsmart`;");
    $commonObject -> sqlQuery("DROP TABLE `hpraid`;");
    $commonObject -> sqlQuery("DROP TABLE `hpdisk`;");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_Hpmgmt()
{

}
