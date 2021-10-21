<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Components\Exception;

use Throwable;

class SystemException extends UIBundleException
{
    public function __construct(
        string $message = "",
        ?int $code = 500,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, (int) $code, $previous);
    }
}
