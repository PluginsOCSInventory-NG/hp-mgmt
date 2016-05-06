<?php
function plugin_version_Hpmgmt()
{
return array('name' => 'Hpgmt',
'version' => '1.0',
'author'=> 'Guillaume PRIOU',
'license' => 'GPLv2',
'verMinOcs' => '2.2');
}

function plugin_init_Hpmgmt()
{
$object = new plugins;
$object -> add_cd_entry("Hpgmt","other");

// Officepack table creation

$object -> sql_query("CREATE TABLE IF NOT EXISTS `hpmgmt` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `HARDWARE_ID` INT(11) NOT NULL,
  `CAPTION` VARCHAR(255) DEFAULT NULL,
  `IPILO` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY  (`ID`,`HARDWARE_ID`)
) ENGINE=INNODB;");

$object -> sql_query("CREATE TABLE IF NOT EXISTS `hpsmart` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `HARDWARE_ID` INT(11) NOT NULL,
  `SMART` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`HARDWARE_ID`)
 ) ENGINE=INNODB;");

$object -> sql_query("CREATE TABLE IF NOT EXISTS `hpraid` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `HARDWARE_ID` INT(11) NOT NULL,
  `RAID` VARCHAR(255) DEFAULT NULL,
  `RAIDSIZE` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`HARDWARE_ID`)
 ) ENGINE=INNODB;");

$object -> sql_query("CREATE TABLE IF NOT EXISTS `hpdisk` (
    `ID` INT(11) NOT NULL AUTO_INCREMENT,
    `HARDWARE_ID` INT(11) NOT NULL,
    `DISK` VARCHAR(255) DEFAULT NULL,
    `DISKNAME` VARCHAR(255) DEFAULT NULL,
    `DISKSIZE` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`ID`,`HARDWARE_ID`)
  ) ENGINE=INNODB;");

}

function plugin_delete_Hpmgmt()
{
$object = new plugins;
$object -> del_cd_entry("Hpmgmt");

$object -> sql_query("DROP TABLE `hpmgmt`;");
$object -> sql_query("DROP TABLE `hpsmart`;");
$object -> sql_query("DROP TABLE `hpraid`;");
$object -> sql_query("DROP TABLE `hpdisk`;");

}
