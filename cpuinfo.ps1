#PowerShell Script
#Get-CPU info
#Version 1.0
$Returnvalues = Get-WmiObject -class "Win32_Processor" -namespace "root/CIMV2" -computername "."

foreach ($object in $Returnvalues){
	Write-Host '<span>'
	Write-Host "CPU Model : " -foregroundcolor yellow -NoNewLine
	Write-Host $object.Name -foregroundcolor white 
	Write-Host '<br/>'
	Write-Host '</span>'

	Write-Host '<span>'
	Write-Host "CPU Cores : " -foregroundcolor yellow -NoNewLine
	Write-Host $object.NumberOfCores -foregroundcolor white
	Write-Host '<br/>'
	Write-Host '</span>'

	Write-Host '<span>'
	Write-Host "CPU Speed : " -foregroundcolor yellow -NoNewLine
	Write-Host $object.MaxClockSpeed
	Write-Host '<br/>'
	Write-Host '</span>'

	Write-Host '<span>'
	Write-Host "CPU Status: " -foregroundcolor yellow -NoNewLine
	if($object.Status -eq "OK"){
		Write-Host $object.Status -foregroundcolor green 
	}
	else{
		Write-Host $object.Status -foregroundcolor red
	}
	Write-Host '</span>'
}