<?php
declare(strict_types=1);

namespace Learning\Hello\Api;

/**
 * Interface HelloInterface
 * @package Dima\Hello\Api
 */
interface HelloInterface
{
    /**
     * Hello Api
     *
     * @param string $name
     * @return string
     */
    public function hello(string $name);
}
