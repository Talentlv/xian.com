<?php
header("content-type:text/html;charset=utf-8;");
include("../alipay-sdk-PHP-3.3.1/AopSdk.php");
//第一步获取auth_code
include("../alipay-sdk-PHP-3.3.1/aop/AopClient.php");
$aop = new AopClient();
$conf=include("./config.php");
$aop->gatewayUrl=$conf['gatewayUrl'];
$aop->appId=$conf['appId'];
$aop->rsaPrivateKey= $conf['rsaPrivateKey'];
$aop->alipayrsaPublicKey= $conf['alipayrsaPublicKey'];
$aop->signType = $conf['signType'];
echo "<pre>";
print_r($_GET);


 //基于  -----用户信息授权
//第二步使用auth_code换取接口access_token及用户userId
$code=trim($_GET['auth_code']);
include("../alipay-sdk-PHP-3.3.1/aop/request/AlipaySystemOauthTokenRequest.php");
$request = new AlipaySystemOauthTokenRequest();
//请求的必传信息
$request->setGrantType("authorization_code");
$request->setCode($code);
$result = $aop->execute($request);
 $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
// echo  $responseNode;
 //var_dump($result);
$resultData = (array) $result->$responseNode;
$access_token=$resultData["access_token"];
echo "<pre>";
print_r( $access_token);
print_r($result);
//第三步使用access_token获取用户信息 
include("../alipay-sdk-PHP-3.3.1/aop/request/AlipayUserInfoShareRequest.php");
$request_a = new AlipayUserInfoShareRequest ();
$result_a = $aop->execute ($request_a,$access_token);
print_r( $result_a);





?>