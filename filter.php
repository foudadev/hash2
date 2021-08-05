<?php
 $bad_pattern='/[\/:*?"<>|]/';
$string = 'fi?le*.zip';

function filtertion($string,$bad_pattern='/[\/:*?"<>|]/')
{
    $filter = preg_replace($bad_pattern,"",$string);
    if($filter){
        return true;
    }

}
 echo  filtertion($string,$bad_pattern);

$domain = "www.test.com";
 $filter = function() use ($domain){
    return preg_replace($bad_pattern='/[\/:*?"<>|]/',"",$domain);
 };
$domain_name = $filter();
echo $domain_name;
