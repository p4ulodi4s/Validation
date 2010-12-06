<?php

namespace Respect\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use Respect\Validation\Exceptions\ObjectException;

class Object extends AbstractRule
{

    public function validate($input)
    {
        return is_object($input);
    }

    public function assert($input)
    {
        if (!$this->validate($input))
            throw $this->getException() ? : ObjectException::create()
                    ->configure($input);
        return true;
    }

}