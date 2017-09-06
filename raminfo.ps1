#PowerShell Script
#Get-RAM info
#Version 1.0
$Returnvalues = Get-WmiObject -class "Win32_PhysicalMemory" -namespace "root/CIMV2" -computername "."

foreach ($object in $Returnvalues){
	Write-Host '<span>'
	Write-Host "RAM Capacity : " -foregroundcolor yellow -NoNewLine
	$value =$object.Capacity
	$value = [math]::round((($value/1014)/1024)/1024)
	$str = [string]$value+ " GB"
	Write-Host  $str -foregroundcolor white 
	Write-Host '<br/>'
	Write-Host '</span>'

	Write-Host '<span>'
	Write-Host "RAM Speed : " -foregroundcolor yellow -NoNewLine
	Write-Host $object.Speed -foregroundcolor white
	Write-Host '<br/>'
	Write-Host '</span>'
}