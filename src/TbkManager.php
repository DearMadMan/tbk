<?php
namespace Dearmadman\Tbk;

use Dearmadman\Tbk\Contracts\Factory;
use Dearmadman\Tbk\Providers\AtbProvider;
use Dearmadman\Tbk\Providers\CooperateProvider;
use Dearmadman\Tbk\Providers\DataProvider;
use Dearmadman\Tbk\Providers\ItemProvider;
use Dearmadman\Tbk\Providers\ItemidProvider;
use Dearmadman\Tbk\Providers\JuProvider;
use Dearmadman\Tbk\Providers\OrderProvider;
use Dearmadman\Tbk\Providers\RebateProvider;
use Dearmadman\Tbk\Providers\ShopProvider;
use Dearmadman\Tbk\Providers\SpreadProvider;
use Dearmadman\Tbk\Providers\TravelProvider;
use Dearmadman\Tbk\Providers\UatmProvider;

class TbkManager implements Factory
{
    /**
     * The config of the service.
     *
     * @var array
     */
    protected $config;

    /**
     * The HTTP client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * The instances of the dirvers.
     *
     * @var array
     *
    */
    protected $instances;

    /**
     * Create a new manager instance.
     *
     * @param  array  $config
     * @param  \GuzzleHttp\Client  $httpClient
     * @return void
     */
    public function __construct($config, $httpClient)
    {
        $this->config = $config;
        $this->httpClient = $httpClient;
    }

    /**
     * Creata a new provider implementation.
     *
     * @param  string  $driver
     * @return \Larastarscn\AliDaYu\Providers\AbstractProvider
     */
    public function driver($driver)
    {
        if ($this->instances[$driver]) {
            return $this->instances[$driver];
        }

        $this->load($driver);

        return $this->instances[$driver];
    }

    public function load($driver)
    {
        $drivers = [
            'item' => ItemProvider::class,
            'atb' => AtbProvider::class,
            'Cooperate' => CooperateProvider::class,
            'data' => DataProvider::class,
            'itemid' => ItemidProvider::class,
            'ju' => JuProvider::class,
            'order' => OrderProvider::class,
            'rebate' => RebateProvider::class,
            'shop' => ShopProvider::class,
            'spread' => SpreadProvider::class,
            'travel' => TravelProvider::class,
            'uatm' => UatmProvider::class,
        ];
        if (array_key_exists($driver, $drivers)) {
            return $this->instances[$driver] = new $drivers[$driver]($this->config, $this->httpClient);
        }
        throw new UnknowDriverException("The name of the {$driver} provider is not found.");
    }
}
