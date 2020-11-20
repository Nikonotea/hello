<?php
declare(strict_types=1);


namespace Learning\Hello\Model;


use Learning\Hello\Api\HelloInterface;

/**
 * Class Hello
 * @package Learning\Hello\Model
 */
class Hello implements HelloInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function hello(string $name)
    {
        return "Hello, " . $name;
    }
}
