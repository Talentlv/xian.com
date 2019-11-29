<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016101300678262",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAr0TrQ9AutaNFbeGPfb/89SE6i4E/fLVK9ArHeTQOM26U+EMDVz2e1F3lWpP1+i0BAhEKDwOE88czu7W/8WeaL0WgDLIQbzMBYGlQ/cG7mLdnb7DeLYCsaaG4pdsiHgDhi5MMC1Cl1m/LAMpJsisVR+c5HQf8qwPlUKgS+WibCDBeJcElDi3blkXWc+FYSLLliO5xmNl2Ishr7Y0vKHcSKOmur8ESxx+aIPKIgXH2sTFnjrLOuFagk6iS4yO1c4OfTh7UDMhmDE0dauRLe3nc8II7/fS3tLpEw996SGmQS55LyrE0SbJJ/5Rz95XIQpRQJ+6Ercscl7NejoxDlNWWGwIDAQABAoIBAESOncQJ06uC8O55M2qJxYWQ+NiGtvGt7GKnML1tKjzd/XFarRzb4pvJGqSiia3RGrrXNWsIAmJkwgyjnC/uSXZCMsekgx8sAVbX+zE3LY0f+FrNASslUMuE0bg2jhLUX2T8INLwOd42Hl7xwX/qsElO3Z1IeYHfZTx2ce2TCElcE5vT7Qf+I9QACiWOpavHpdCSq1Xh5CBvr0zhQczaHv4rsGzYk1yhpGB8z4rIJZx+9ZNGtK26XBNhVcjV8sQ5SVLjfDPcICQIQ3MC/e9mDKA1PfHoS9RpOXImqwDqRwearghEINBjRGUL0bKT4vZJ9u8wkA9m96urTXxkl9UEbukCgYEA6FP5FGtKNPWbVp/d4C0pkMjohZc4FawXBzZG4J/xfg3FybR4a+GW3kXFW3fNIIm0lSPRQHTZg5hecJE/WoNg8bTFoP3GyTsvnlWlvJWy6FhNbu2Do/0IkHPSnKLiaIlxDHk84lVkH/o3jjZ1QhkKeSdCSZGboUgyXymv+5rA818CgYEAwSCg3CiqJrsmsCVqEQ3fN7pBlMzSAA/qVAXpW2eT3txjoaDY8U2Fm6Yd/ISg/OUVKbc+bd+ihiaBovPLF/9xqiboJKKIBNAnCd7YJhO0XFH2rzaqwsLbvQHOXBaALOcURm3S8KHY5Yqby0bRhEXpDrR2Ra0OoDlGSU5UmrpGcsUCgYBUmBbu124qwG9yaD2K3gbvgCgiVICIa6Pq7Vl7euGcy3kES+E5LugXQQJunr2jJmEJmQQdWy7EWtuwU0LlO0c2W2NGjoEuTo21MmxpsXx2W4i+Zl9ze7P9nR7ICAs2ky0FpLOFmiAeAKbv8mZZzfJhUOkzDoDDhh1JR02b6KpvMwKBgFGPUv/HGJyEuwD2vAV5w0QIn7uUiDdIgWB8oqFca8FZd6YBhLzbTUp/a/iBlm9W24ojffTu1fcreeH0bVe0JC+EgNM/5IuL0IDFoKjr92ZpovE5+AGKQzxd7+VKB1VvPUvFA6ll4HCICeVeAguHbrYsFiq0vBGEPp+kuewiMLA1AoGBAMyud5PBUhVVEzmlwdK6zzncNomKWh4gfc5jGwN3UjdvPa8LFGbsq/ROLSoIa1PFeqw1C70l96nBeB5huZ5kZG6b/0kghAZ2pqsMvvjxnOvnuyRUJCnucNCbuaJO01EbfXpVwo5lLIHlovqUUJC0I77vbHYE25oVhO9aZRZczgnt",
		//签名方式
		'sign_type'=>"RSA",
		//异步通知地址
		'notify_url' => "http://www.xian22.com/alipay/notify_url.php",
		//http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/
		
		//同步跳转
		//'return_url' => "http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
		'return_url' => "http://www.xian22.com/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		//'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
		//支付宝沙箱网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",


		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB",
);