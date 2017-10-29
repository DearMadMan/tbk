<?php
namespace Dearmadman\Tbk\Providers;

use Dearmadman\Tbk\Traits\FieldsFiller;
use Dearmadman\Tbk\Traits\ParamChecker;

class ContentProvider extends AbstractProvider
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
        $this->setMethod('content');
        $this->checkParams($params, 'content');

        return $this->httpClient->post($this->getRequestURL(), [
            'form_params' => $this->getQueryBody($params)
        ]);
    }
}

