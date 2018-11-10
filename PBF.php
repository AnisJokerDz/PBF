<?php
if(!empty($_POST["PHPbackdoor"])){
$PHPbackdoor=$_POST["PHPbackdoor"];
if(!endsWith($PHPbackdoor,"/")){$PHPshell=$PHPbackdoor."/";}
$ve=array
("worm.php","1337.php","wso.phtml","IndoXploit.php","WSO.php","x2300Shell.php","w.php","webshell.php","shell.php","cpanel.
php","cpn.php","sql.php","mysql.php","config.php","configuration.php", "madspot.php", "c99Shell.php", "r57.php", "b374kShell.php", "TryagShell.php","WSOShell.php","r0k.php","abc.php","egy.php","syrian.php","r00tshell.php","cyber.php","c99.php","r57.php","404.php","SyrianShell.php","SymlinkShell.php","Surabaya.php","Sosyete.php","SaudiShell.php","SadrazamShell.php","SQLShell.php","GaZaShell.php","EkinoxShell.php","DkShell.php","CWShell.php","C99Shell.php","AntichatShell.php","AnonGhostShell.php","Anjiyo.php","AngelShell.php","AlucarShell.php","1n73ctionShell.php","r57Shell.php","k2ll33dShell.php","g6sShell.php","ZehirShell.php","UploadShell.php","uploader.php","up.php","SimShell.php","SaudiShell.php","SQLShell.php","MailserShell.php","LostDCShell.php","LocusShell.php","IranShell.php","IndiShell.php","CommandShell.php","CihShell.php","CWShell.php","send.php","mailler.php","sender.php","B1N4RYShell.php","AngelShell.php","1n73ctionShell.php","indo.php","checker.php","1337.php","day.php","0day.php","switch.php","C&C.php"
);
foreach($ve as $file){
$a=$target.$file;
if(SiteExist($a)){echo '<a  href="' . $a .'">' . $file . '</a></br>';}
}
}else{echo '<center>pleas put here a target :</br><form
method="POST"><input type="text" name="target" value="http://
website.com/directory/"><input type="submit" value="send"></
form></center>' ;}
function SiteExist($url){
$ch = curl_init($url);
if($ch){
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_USERAGENT, "PHPbackdoor finder");
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
$tmp = curl_exec($ch);
$hc= curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($hc >= 200 && $hc <= 302){return true;}else{return false;}
curl_close ($ch);
}
return false;
}
function endsWith($haystack, $needle){return $needle === "" ||
substr($haystack, -strlen($needle)) === $needle;}
?>
