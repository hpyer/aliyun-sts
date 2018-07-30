<?php
namespace GanymedeNil\Aliyun\Sts\Provider;

use RuntimeException;
use Illuminate\Support\ServiceProvider;

class AliyunStsServiceProvider extends ServiceProvider
{
	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(realpath(__DIR__.'/../../config/aliyun_sts.php'), 'aliyun_sts');

		$config = $this->app['config']['aliyun_sts'];

		if (! $this->app->runningInConsole() && (empty($config['key']) || empty($config['secret']) || empty($config['role_arn']))) {
			throw new RuntimeException('Unable to boot AliyunStsServiceProvider, please set key, secret, role_arn in `config/aliyun_sts.php` file.');
		}
	}

}
