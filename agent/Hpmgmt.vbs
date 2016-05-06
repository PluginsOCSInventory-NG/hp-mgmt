On Error Resume Next
strComputer = "."
Set objWMIService = GetObject("winmgmts:\\" & strComputer & "\root\hpq")

Set colItems = objWMIService.ExecQuery("Select * from HP_ManagementProcessor")
For Each objItem in colItems
strILOName = objItem.Caption
strIPILO = objItem.IPAddress
Wscript.Echo "<HPMGMT>"
Wscript.Echo "<CAPTION>" & strILOName & "</CAPTION>"
Wscript.Echo "<IPILO>" & strIPILO & "</IPILO>"
Wscript.Echo "</HPMGMT>"
Next

Set colItems = objWMIService.ExecQuery("Select * from HPSA_ArraySystem")
For Each objItem in colItems
strSmart = objItem.ElementName
Wscript.Echo "<HPSMART>"
Wscript.Echo "<SMART>" & strSmart & "</SMART>"
Wscript.Echo "</HPSMART>"
Next

Set colItems = objWMIService.ExecQuery("Select * from HPSA_StorageVolume")
For Each objItem in colItems
strRaid = objItem.ElementName
strRaidSize = Fix((objItem.BlockSize * objItem.NumberOfBlocks) / 1073741824) & " Go"
Wscript.Echo "<HPRAID>"
Wscript.Echo "<RAID>" & strRaid & "</RAID>"
Wscript.Echo "<RAIDSIZE>" & strRaidSize & "</RAIDSIZE>"
Wscript.Echo "</HPRAID>"
Next

Set colItems = objWMIService.ExecQuery("Select * from HPSA_StorageExtent")
For Each objItem in colItems
strDisk = objItem.ElementName
strDiskName = objItem.Name
strDiskSize = Fix((objItem.BlockSize * objItem.NumberOfBlocks) / 1073741824) & " Go"
Wscript.Echo "<HPDISK>"
Wscript.Echo "<DISK>" & strDisk & "</DISK>"
Wscript.Echo "<DISKNAME>" & strDiskName & "</DISKNAME>"
Wscript.Echo "<DISKSIZE>" & strDiskSize & "</DISKSIZE>"
Wscript.Echo "</HPDISK>"
Next