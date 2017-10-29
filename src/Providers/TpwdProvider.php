<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class TpwdProvider extends AbstractProvider
{
    use ParamChecker, FieldsFiller;

    /**
     * Get response from the query API .
     *
     * @param  array  $params
     * @return Psr\Http\Message\ResponseInterface
     */
    public function create($params = [])
    {
        $this->setMethod('tpwd.create');
        $this->checkParams($params, 'tpwd.create');

        return $this->httpClient->post($this->getRequestURL(), [
            'form_params' => $this->getQueryBody($params)
        ]);
    }
}

