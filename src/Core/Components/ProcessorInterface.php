<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Components;

use Symfony\Component\HttpFoundation\Response;

interface ProcessorInterface
{
    public function process(AbstractContext $actionContext): void;
    public function getResponseContent(): string;
    public function makeResponse(): Response;
}
