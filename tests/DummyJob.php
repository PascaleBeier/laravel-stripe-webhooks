<?php

namespace PascaleBeier\StripeWebhooks\Tests;

use Illuminate\Cache\Repository;
use Spatie\WebhookClient\Models\WebhookCall;

class DummyJob
{
    public function __construct(
        public WebhookCall $webhookCall,
        public Repository $cache
    ) {
    }

    public function handle()
    {
        $this->cache->put('dummyjob', $this->webhookCall);
    }
}
