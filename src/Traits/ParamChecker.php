<?php
namespace Dearmadman\Tbk\Traits;

use Dearmadman\Tbk\Exceptions\MissingMandatoryParametersException;

trait ParamChecker
{
    /**
     * Check the request's parameters.
     *
     * @param  string  $path
     * @return void
     */
    public function checkParams($params, $type = 'item.recommend')
    {
        $mandatoryParameters = [
            'item.recommend' => ['num_iid'],
            'item.info' => ['num_iids'],
            'item.coupon' => ['pid'],
            'item.click' => ['click_url'],
            'item.share.convert' => ['num_iids', 'sub_pid' ,'adzone_id'],
            'item.convert' => ['num_iids', 'adzone_id'],
            'itemid.coupon' => ['num_iids', 'pid'],
            'atb.items' => ['open_iids'],
            'shop' => ['q'],
            'shop.recommend' => ['user_id'],
            'shop.share.convert' => ['user_ids', 'adzone_id', 'sub_pid'],
            'shop.convert' => ['user_ids', 'adzone_id'],
            'uatm.event.item' => ['adzone_id', 'event_id'],
            'uatm.favorites.item' => ['adzone_id', 'favorites_id'],
            'ju' => ['adzone_id', 'start_time', 'end_time'],
            'data.report' => ['data'],
            'order' => ['start_time', 'span'],
            'cooperate.tqg' => ['adzone_id', 'item_size'],
            'rebate.order' => ['start_time', 'span'],
            'rebate.auth' => ['params', 'type'],
            'travel.item' => ['dest_city', 'channel', 'adzone_id'],
        ];

        foreach ($mandatoryParameters[$type] as $value) {
            if (! array_key_exists($value, $params)) {
                throw new MissingMandatoryParametersException("paramter {$value} is required!");
            }
        }
    }
}
