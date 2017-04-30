<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class TravelProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function item($params = [])
    {
        $this->setMethod('travel.item');
        $this->checkParams($params, 'travel.item');

        $default = 'num_iid,title,pict_url,reserve_price,zk_final_price,from_city,dest_city,travel_type,sold_quantity,item_url,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

