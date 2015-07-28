<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file pb2json.php
 * @author panhongguang(com@baidu.com)
 * @date 2015/07/28 11:11:41
 * @brief 
 *  
 **/
define('S_ROOT', dirname(__FILE__));
require_once(dirname(__FILE__).'/common/pb.php');
require_once(dirname(__FILE__).'/common/func.php');

// check argc && argv
if ($argc != 3) {
    echo "Usage: ".$argv[0]." pbfilename jsonfilename. exit\n";
    exit;
}

$pbdata = file_get_contents($argv[1]);
$newpb = new Common_Pb();
$resArray = $newpb->res2arr($pbdata);
$resJson = json_encode($resArray);
file_put_contents($argv[2], $resJson);


/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
