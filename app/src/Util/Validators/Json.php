<?php
declare(strict_types=1);

namespace App\Util\Validators;

use App\Util\CommonResponse;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class Json
 * @package App\Util\Validators
 */
class Json
{
    /**
     * Validate if the request has a json
     * @param Request $request
     * @return CommonResponse
     */
    public static function validate(Request $request): ?CommonResponse
    {
        if ($request->getHeader("Content-Type")[0] != "application/json") {
            return (new CommonResponse())->setResponseCode(406)->addError("Somente formato JSON é aceito");
        }

        if (empty($request->getBody()->getContents())) {
            return (new CommonResponse())->setResponseCode(422)->addError("JSON Vazio");
        }

        return null;
    }

}