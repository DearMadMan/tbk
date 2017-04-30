<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class CooperateProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function tqg($params = [])
    {
        $this->setMethod('cooperate.tqg');
        $this->checkParams($params, 'cooperate.tqg');

        $default = 'start_time, end_time, items, link_more, title, pic_url, reserve_price, zk_final_price, sold_num, total_amount, click_ur';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

