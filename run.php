<?php
require_once(__DIR__.'/servers.php');
$time=time();
foreach($ips as $v){
$cmd = 'ssh -o StrictHostKeyChecking=no -i dos.pem '.$v.' \'bash -s\' < '.$argv[1]."\n";
echo $cmd;
$output=array();
exec($cmd,$output);
file_put_contents($v.$time,implode("\n",$output));
}

?>