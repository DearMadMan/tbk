<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class ShopProvider extends AbstractProvider
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
        $this->setMethod('shop');
        $this->checkParams($params, 'shop');

        $default = 'user_id,shop_title,shop_type,seller_nick,pict_url,shop_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function recommend($params = [])
    {
        $this->setMethod('shop.recommend');
        $this->checkParams($params, 'shop.commend');

        $default = 'user_id,shop_title,shop_type,seller_nick,pict_url,shop_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function convert($params = [])
    {
        $this->setMethod('shop.convert');
        $this->checkParams($params, 'shop.convert');

        $default = 'user_id,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

    public function shareConvert($params = [])
    {
        $this->setMethod('shop.share.convert');
        $this->checkParams($params, 'shop.share.convert');

        $default = 'user_id,click_url';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }

}

