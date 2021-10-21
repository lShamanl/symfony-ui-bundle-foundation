<?php

declare(strict_types=1);

namespace SymfonyBundle\UIBundle\Foundation\Core\Service;

use Symfony\Component\HttpFoundation\Request;

class RequestParser
{
    /**
     * @param Request $request
     * @return array<string, string>
     * @throws \JsonException
     */
    public function parse(Request $request): array
    {
        $query = $request->query->all();
        $content = (array) json_decode(
            (string) $request->getContent(),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
        $requestData = $request->request->all();

        /** @var array<string, string> $payload */
        $payload = array_merge($query, $content, $requestData);
        return $payload;
    }
}
