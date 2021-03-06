<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class SpreadProvider extends AbstractProvider
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
        $this->setMethod('spread');

        if (is_array($params) && ! isset($params['requests'])) {
            $params = ['requests' => json_encode($params)];
        }

        return $this->httpClient->post($this->getRequestURL(), [
            'form_params' => $this->getQueryBody($params)
        ]);
    }
}

