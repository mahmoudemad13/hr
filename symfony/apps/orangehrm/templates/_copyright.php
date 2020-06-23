<?php 
$rootPath = realpath(dirname(__FILE__)."/../../../../");

if (@include_once $rootPath."/lib/confs/sysConf.php") {
    $conf = new sysConf();
    $version = $conf->getVersion();
}
$prodName = 'IT Ambition';
$copyrightYear = date('Y');

?>
<?php echo $prodName . ' ' . $version;?><br/>
&copy; 2020 - <?php echo $copyrightYear;?> <a href="http://www.orangehrm.com" target="_blank">IT Ambition, Inc</a>. All rights reserved.
