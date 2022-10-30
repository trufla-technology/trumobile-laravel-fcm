<?php

namespace TruMobileLaravelFCM\Response\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class InvalidRequestException.
 */
class InvalidRequestException extends Exception
{
    /**
     * InvalidRequestException constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $code = $response->getStatusCode();
        $responseBody = $response->getBody()->getContents();

        parent::__construct($responseBody, $code);
    }
}
