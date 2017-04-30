<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class RebateProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function order($params = [])
    {
        $this->setMethod('rebate.order');
        $this->checkParams($params, 'rebate.order');

        $default = 'tb_trade_parent_id,tb_trade_id,num_iid,item_title,item_num,price,pay_price,seller_nick,seller_shop_title,commission,commission_rate,unid,create_time,earning_time';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function auth($params = [])
    {
        $this->setMethod('rebate.auth');
        $this->checkParams($params, 'rebate.auth');

        $default = 'param,rebate';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

