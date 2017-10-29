<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class DgProvider extends AbstractProvider
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
        $this->setMethod('dg');
        $this->checkParams($params, 'dg');

        return $this->httpClient->post($this->getRequestURL(), [
            'form_params' => $this->getQueryBody($params)
        ]);
    }
}

