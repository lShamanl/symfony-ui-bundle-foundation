<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Contract\Command;

interface HandlerInterface
{
    /**
     * @param CommandInterface $command
     * @return OutputContractInterface|void
     */
    public function handle(CommandInterface $command);
}
