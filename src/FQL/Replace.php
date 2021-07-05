<?php

declare(strict_types=1);

namespace FaunaDB\FQL;

use FaunaDB\Expr\Expr;

/**
 * See the [docs](https://app.fauna.com/documentation/reference/queryapi#write-functions).
 *
 * @param mixed $ref The Ref to replace.
 * @param mixed $params An object representing the parameters of the document.
 * @return Expr
 */
function Replace(mixed $ref, mixed $params): Expr
{
    assertIsExprArg($ref);
    assertIsExprArg($params);

    return new Expr(['replace' => wrap($ref), 'params' => wrap($params)]);
}
