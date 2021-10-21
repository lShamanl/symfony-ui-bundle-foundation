<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Components\Exception;

use DomainException;
use Throwable;

class UIBundleException extends DomainException
{
    public function __construct(
        string $message = "",
        ?int $code = 500,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, (int) $code, $previous);
    }
}
