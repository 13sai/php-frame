<?php

namespace Sai\Frame\Exceptions;

use Psr\Container\ContainerExceptionInterface;

class ContainerException extends SaiException implements ContainerExceptionInterface
{
    protected $code = 500;
}
