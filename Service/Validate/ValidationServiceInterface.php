<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 9-2-18
 * Time: 18:10
 */

namespace Dutchento\Vatfallback\Service\Validate;

interface ValidationServiceInterface
{
    /**
     * Validate a given VAT number via an external service or algorithm
     * @param string $vatNumber
     * @param string $countryIso2
     * @return bool
     */
    public function validateVATNumber(string $vatNumber, string $countryIso2): bool;
}
