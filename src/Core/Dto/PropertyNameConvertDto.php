<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Dto;

class PropertyNameConvertDto
{
    protected array $rules = [];

    public function addConvertRule(string $contractName, string $entityProperty): self
    {
        $this->rules[$contractName] = $entityProperty;
        return $this;
    }

    public function getRules(): array
    {
        return $this->rules;
    }
}
