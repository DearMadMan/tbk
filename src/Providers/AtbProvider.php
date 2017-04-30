<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class AtbProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function itemsDetail($params = [])
    {
        $this->setMethod('atb.items');
        $this->checkParams($params, 'atb.items');

        $default = 'open_iid,title';
        $this->fillFields($params, $default);

        return $this->getResponse($params);
    }
}

