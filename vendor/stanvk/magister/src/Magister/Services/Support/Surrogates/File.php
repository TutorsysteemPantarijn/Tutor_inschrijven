<?php

namespace Magister\Services\Support\Surrogates;

/**
 * Class File.
 */
class File extends Surrogate
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getSurrogateAccessor()
    {
        return 'files';
    }
}
