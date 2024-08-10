<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            //'https://straddie.com.br',
            //'https://www.straddie.com.br',
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
