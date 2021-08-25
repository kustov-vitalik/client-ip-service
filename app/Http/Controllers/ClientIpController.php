<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientIpController
{
    /**
     * Get client IP. Includes `greeting` key if `name` query param exists.
     *
     * @param Request $request
     * @return string[]
     */
    public function getClientIp(Request $request): array
    {
        $response = [
            'ip' => $request->ip() ?? 'Unknown IP'
        ];

        if ($request->query->has('name')) {
            $response['greeting'] = sprintf('Hello, %s!', $request->query('name', 'World'));
        }

        return $response;
    }
}
