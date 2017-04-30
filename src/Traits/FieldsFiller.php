<?php
namespace Dearmadman\Tbk\Traits;

use Dearmadman\Tbk\Exceptions\MissingMandatoryParametersException;

trait FieldsFiller
{
    /**
     * Fill the fields to the parameters.
     *
     * @param  string  $path
     * @return void
     */
    public function fillFields(&$params, $fields)
    {
        if (! array_key_exists('fields', $params)) {
            $params = array_merge(compact('fields'), $params);
        }
    }

}
