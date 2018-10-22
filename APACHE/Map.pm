###############################################################################
## OCSINVENTORY-NG
## Copyleft Guillaume PROTET / Olivier Birotheau
## Web : http://www.ocsinventory-ng.org
##
## This code is open source and may be copied and modified as long as the source
## code is always made freely available.
## Please refer to the General Public Licence http://www.gnu.org/ or Licence.txt
################################################################################
 
package Apache::Ocsinventory::Plugins::Hpmgmt::Map;

use strict;

use Apache::Ocsinventory::Map;
# Plugin HPMGMT
  $DATA_MAP{hpmgmt} = {
   mask => 0,
   multi => 1,
   auto => 1,
   delOnReplace => 1,
   sortBy => 'IPILO',
   writeDiff => 1,
   cache => 0,
   mandatory => 1,
   fields => {
       CAPTION => {},
       ILO => {},
    }
  },
  $DATA_MAP{hpsmart} => {
    mask => 0,
    multi => 1,
    auto => 1,
    delOnReplace => 1,
    sortBy => 'SMART',
    writeDiff => 0,
    cache => 0,
    fields => {
        SMART => {},
    }
  },
  $DATA_MAP{hpraid} => {
    mask => 0,
    multi => 1,
    auto => 1,
    delOnReplace => 1,
    sortBy => 'RAID',
    writeDiff => 0,
    cache => 0,
    fields => {
        RAID => {},
        RAIDSIZE => {},
    }
  },
  $DATA_MAP{hpdisk} => {
    mask => 0,
    multi => 1,
    auto => 1,
    delOnReplace => 1,
    sortBy => 'DISK',
    writeDiff => 0,
    cache => 0,
    fields => {
        DISK => {},
        DISKNAME => {},
        DISKSIZE => {},
    }
},
1;
