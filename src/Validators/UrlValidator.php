<?php
/**
 * Created by PhpStorm.
 * User: PhpStorm
 * Date: 2016-09-02
 * Time: 22:20
 */

namespace Mlib\Utils\Validators;

use Mlib\Utils\Exceptions\InvalidDataTypeException;

/**
 * Class UrlValidator
 *
 * @package Mlib\Utils\Validators
 */
class UrlValidator implements ValidatorInterface
{
    public function validate($target)
    {
        if (!is_string($target)) {
            throw new InvalidDataTypeException("Target is not a string, and cannot be validated as URL!");
        }
        
        $filtered = filter_var(
            $target,
            FILTER_VALIDATE_URL,
            FILTER_FLAG_SCHEME_REQUIRED |
            FILTER_FLAG_HOST_REQUIRED
        );
        if ($filtered === false) {
            throw new InvalidDataTypeException("Target is not a valid url: " . $target);
        }
        
        return $filtered;
    }
}
    
