<?php

namespace Coduo\PHPMatcher\Matcher\Pattern\Expander;

use Coduo\PHPMatcher\Matcher\Pattern\PatternExpander;
use Coduo\ToString\String;

class NotEmpty implements PatternExpander
{
    private $error;

    /**
     * @param $value
     * @return boolean
     */
    public function match($value)
    {
        if (false === $value || (empty($value) && '0' != $value)) {
            $this->error = sprintf("Value %s is not blank.", new String($value));
            return false;
        }

        return true;
    }

    /**
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
}
