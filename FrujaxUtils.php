<?php

declare(strict_types=1);

namespace Ruwork\FrujaxBundle;

use Ruwork\FrujaxBundle\HttpFoundation\FrujaxHeaders;
use Symfony\Component\HttpFoundation\Request;

final class FrujaxUtils
{
    public static function isFrujaxRequest(Request $request): bool
    {
        return $request->isXmlHttpRequest() && $request->headers->has(FrujaxHeaders::FRUJAX);
    }

    public static function getFrujaxBlock(Request $request): ?string
    {
        return $request->headers->get(FrujaxHeaders::FRUJAX_BLOCK) ?: null;
    }
}
