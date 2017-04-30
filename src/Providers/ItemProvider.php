<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class ItemProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function get($params = [])
    {
        $this->setMethod('item');

        $default = 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function recommend($params = [])
    {
        $this->setMethod('item.recommend');
        $this->checkParams($params, 'item.recommend');

        $default = 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function info($params = [])
    {
        $this->setMethod('item.info');
        $this->checkParams($params, 'item.info');

        $default = 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function coupon($params = [])
    {
        $this->setMethod('item.coupon');
        $this->checkParams($params, 'item.coupon');

        return $this->getResponse($params);
    }

    public function click($params = [])
    {
        $this->setMethod('item.click');
        $this->checkParams($params, 'item.click');

        return $this->getResponse($params);
    }

    public function convert($params = [])
    {
        $this->setMethod('item.convert');
        $this->checkParams($params, 'item.convert');

        $default = 'num_iid,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }


    public function shareConvert($params = [])
    {
        $this->setMethod('item.share.convert');
        $this->checkParams($params, 'item.share.convert');

        $default = 'num_iid,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

