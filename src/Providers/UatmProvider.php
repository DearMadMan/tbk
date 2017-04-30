<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class UatmProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function event($params = [])
    {
        $this->setMethod('uatm.event');

        $default = 'event_id,event_title,start_time,end_time';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function eventItem($params = [])
    {
        $this->setMethod('uatm.event.item');
        $this->checkParams($params, 'uatm.event.item');

        $default = 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,type,status';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function favorites($params = [])
    {
        $this->setMethod('uatm.favorites');

        $default = 'favorites_title,favorites_id,type';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function favoritesItem($params = [])
    {
        $this->setMethod('uatm.favorites.item');
        $this->checkParams($params, 'uatm.favorites.item');

        $default = 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

