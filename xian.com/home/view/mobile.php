<?php
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Download：https://github.com/aliyun/openapi-sdk-php
// Usage：https://github.com/aliyun/openapi-sdk-php/blob/master/README.md
require 'vendor/autoload.php';
$mobile=$_POST['mobile'];
$code=rand(10000,99999);
session_start();
$_SESSION['code']=$code;
$arr= array('code' =>$code);
$codes=json_encode($arr);
// // echo $mobile;
 AlibabaCloud::accessKeyClient('LTAI4FupgUwGyCKjeDgmXvc7', 'xl6sjVDHLmdZAAClnR5obls2qBNt5G')
                        ->regionId('cn-hangzhou')
                        ->asDefaultClient();

try {
    $result = AlibabaCloud::rpc()
                          ->product('Dysmsapi')
                          // ->scheme('https') // https | http
                          ->version('2017-05-25')
                          ->action('SendSms')
                          ->method('POST')
                          ->host('dysmsapi.aliyuncs.com')
                          ->options([
                                         'query' => [
                                          'RegionId' => "cn-hangzhou",
                                          'PhoneNumbers' => $mobile,
                                          'SignName' => "理工卖花男的鲜花网",
                                          'TemplateCode' => "SMS_175485845",
                                          'TemplateParam' =>$codes,
                                        ],
                                    ])
                          ->request();
                          if($result['Code']=='OK'){
                            echo 1;
                          }else{
                            echo 2;
                          }
                        // print_r($result->toArray());      
} catch (ClientException $e) {
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    echo $e->getErrorMessage() . PHP_EOL;
}
