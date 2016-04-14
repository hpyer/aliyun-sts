<?php
return [

	// AccessKeyID
	'key' => env('ALIYUN_STS_KEY'),

	// AccessKeySecret
	'secret' => env('ALIYUN_STS_SECRET'),

	// RoleArn
	'role_arn' => env('ALIYUN_STS_ROLE_ARN'),

	// Token的失效时间，最少是900s
	'expire_time' => env('ALIYUN_STS_EXPIRE_TIME', 900),

	// Token所要拥有的权限
	'policy' => [
		"Statement" => [
			{
				"Action" => [
					"oss:*"
				],
				"Effect" => "Allow",
				"Resource" => ["acs:oss:*:*:*"]
			}
		],
		"Version" => "1"
	],

];
