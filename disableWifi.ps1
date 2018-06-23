[Int]$data = Get-Content -Path C:\Apache24\htdocs\Checklist\value.txt;

$output = Get-Content -Path C:\Apache24\htdocs\Checklist\output.txt;

If ($data -gt 99) { $Enable = C:\Apache24\htdocs\Checklist\enable.cmd; Write-Host $data'%</br><p class="alert alert-success">Wi-Fi has been restored to the house</p>' } ElseIf ($data -lt 1) { $Disable = C:\Apache24\htdocs\Checklist\disable.cmd; Write-Host $output $data'%</br><p class="alert alert-warning">Wi-Fi is down, complete all tasks to restore the Wi-Fi!</p>';  } else { Write-Host $data'%</br><p class="alert alert-warning">Wi-Fi is still down, complete more tasks to restore!</p>' }