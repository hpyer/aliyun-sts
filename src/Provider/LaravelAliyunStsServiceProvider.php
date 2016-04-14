<?php
namespace Hpyer\Aliyun\Sts\Provider;

class LaravelAliyunStsServiceProvider extends AliyunStsServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->publishes([
            realpath(__DIR__.'/../../config/aliyun_sts.php') => config_path('aliyun_sts.php'),
        ]);
    }

}
