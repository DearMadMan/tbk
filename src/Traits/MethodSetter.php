<?php
namespace Dearmadman\Tbk\Traits;

trait MethodSetter
{
    /**
     * Set method for request.
     *
     * @param  string  $path
     * @return void
     */
    public function setMethod($path)
    {
        $methods = [
            'item' => 'taobao.tbk.item.get',
            'item.recommend' => 'taobao.tbk.item.recommend.get',
            'item.info' => 'taobao.tbk.item.info.get',
            'item.coupon' => 'taobao.tbk.item.coupon.get',
            'item.click' => 'taobao.tbk.item.click.extract',
            'item.convert' => 'taobao.tbk.item.convert',
            'item.share.convert' => 'taobao.tbk.item.share.convert',
            'atb.items' => 'taobao.atb.items.detail.get',
            'shop' => 'taobao.tbk.shop.get',
            'shop.recommend' => 'taobao.tbk.shop.recommend.get',
            'shop.convert' => 'taobao.tbk.shop.convert',
            'shop.share.convert' => 'taobao.tbk.shop.share.convert',
            'uatm.event' => 'taobao.tbk.uatm.event.get',
            'uatm.event.item' => 'taobao.tbk.uatm.event.item.get',
            'uatm.favorites.item' => 'taobao.tbk.uatm.favorites.item.get',
            'uatm.favorites' => 'taobao.tbk.uatm.favorites.get',
            'ju' => 'taobao.tbk.ju.tqg.get',
            'spread' => 'taobao.tbk.spread.get',
            'itemid.coupon' => 'taobao.tbk.itemid.coupon.get',
            'data.report' => 'taobao.tbk.data.report',
            'order' => 'taobao.tbk.order.get',
            'cooperate.tgg' => 'taobao.tbk.cooperate.tqg.get',
            'rebate.order' => 'taobao.tbk.rebate.order.get',
            'rebate.auth' => 'taobao.tbk.rebate.auth.get',
            'travel.item' => 'taobao.tbk.travel.item.get',

            'wireless.share.tpwd' => 'taobao.wireless.share.tpwd.create'

        ];

        if (! array_key_exists($path, $methods)) {
            throw new \Exception("The ${path} of methods is not found.");
        }

        $this->method = $methods[$path];
    }
}
