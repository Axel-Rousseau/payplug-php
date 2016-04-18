<?php
namespace Payplug\Resource;
use Payplug;

/**
 * A Card
 */
class Card extends APIResource
{
    /**
     * The factory method that constructs the API resource.
     *
     * @param   array   $attributes the default attributes.
     *
     * @return  Card The new resource.
     */
    public static function fromAttributes(array $attributes)
    {
        $object = new Customer();
        $object->initialize($attributes);
        return $object;
    }
}
