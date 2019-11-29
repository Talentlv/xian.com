<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016101300678186",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEA2YYN2c8SWCYel3kGe7ek9xUvLgKYYBnV1/hSKLhtIjEKWYuhlw6PSTeGi2+funckDmfYu3mBBiRRutM5AcKup1hDMUzhLuMNgZeaFbI1mYPSMP3wXbMqYEGyuRwIrG6i7pxLvhU7RHONcrKlEyO4mnzzt9lFA7liCuWKU+95rjw5B/AkkOc0zi2Mst3iOsRD5I6LCPzKNAgxG3Szc/QQMLFxK9Lt5MY6empjrrUkLmU88nuO7LxCHxrN7huJPVZrW3jFMpPnvpbfWSlDfDKFnZwXs1GUSrY7wqIkIBzdHIdX69p+nvfaTee1ofYJMOKMLIGwI6NYMIoDq5FVtw4EHQIDAQABAoIBAEs5WMDiI23ogNvRNrTCJYJtCQvYSemyBYnSjlcWsGcKnpGpABDFMDgZw6WkzJAnc4in0QPEWSJOnRUGxsgdE1k75MC/3X/hdWJDkz29i1uzgpT+vIkq1JTFI5FwaG95M09hLbBml0Bs1ZW8wemEiOqkG4SQ1pUbHxS1nMi6IFJoTfP2HB5uGm5jXyKJY8NL+mpgPuAHR9rpWieaBdw865ezRAQfumgEIdyD9XA3g77Qj3jdKGJEVuF+2pBXptVEQs4/Soq1/gCF+9CRBqgveXmY+2OxKSIrEXPbPr3tBFhbxaYRdcVc9s72H09FZLdq/TWjZDFIbJE+uvyvgcfrRQECgYEA7+xwwYzfQfv3WGgxV2Ld0Bc0IfxjjssVBTkfpwXW1xdhs3G7PBXrKhiAw5+MjYaQnxXXZr5ZcaZeyP4UI8tEao2h3qq1iym5gSMYaUSeM2YJtBln59ObAq4BOrCFhfwSadKWdMu+D39rIxzR8IJrgK46/DEPvYq3eqqOEGnrbzUCgYEA6Blfk/EHk8xc6GjwmvcrPq/dVUGprfdZZ9/vgjGKBc9/Uhxdpw7CX5++85ktmqaETYM4KIyU9AJLG/1JjT2IvXRyOgEKRTGw3DHDma8Ppg/2/2zzYOI65lHXjW68RfzDBtZoI/QWUpQlezxYXzN7yCpSVtH+WQZiQXzfgQnB1kkCgYAzf2m4cbdeH2o5BKxKmIMJ7mEXRmhMNxT8+QTtQdiadH9ZF/lbbUz7zSSeWLm/ivmx2+tPN15VgaNouvixsiiuQlZTSAsNotgZeuH7fmoCmE1O5gEiho4IJjdHVKpkVvXQ1w3KZg0WoH/rmn0JhcTzavJoPVOmmIbHgqJZrZKGXQKBgQDh0tY45lo+BqgbBQedb4HnA0uxySqj9jdKJwstPLATSTmTFcBVa7nZOl+bOl2xy/SMSnEYmvfOlnCn8gBfaRCjbSo6n4pzmo5/H/g1jqwGIiBrk4EVsegm8lhs5uJOokjLXU+EM9iITlZNmoBNWJVGQ09L5BO6YMi2+R2pummb6QKBgH9OhYiqMB/eQyeozGsKR/yVB4vn0DOJpw2X355XtfpgkgJ6Stcgf8hav4acQ0fyKIOEzty3sCxlXuTO3zlrN4dv48azgJI/fzTrN12XDPqNTJASZUdB2VVByTDQogawt2T1MffqYw9lgVSXdOEjP0ofmZudwZTYsjTIe8gbGHh+",
		//签名方式
		'sign_type'=>"RSA",
		//异步通知地址
		'notify_url' => "http://www.2019xian.com/alipay/notify_url.php",
		//http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/
		
		//同步跳转
		//'return_url' => "http://www.ali.cn/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
		'return_url' => "http://www.2019xian.com/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		//'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
		//支付宝沙箱网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",


		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB",
);