<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\proxy;

class ProxySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        proxy::create([
            'status' => 'active',
            'proxytext' => '123.456.789.0:8080:admin:password123',
            'networkType' => 'private',
            'whitelistedIps' => ['192.168.0.1', '192.168.0.2'],
            'username' => 'admin',
            'password' => 'password123',
            'publicIp' => '123.456.789.0',
            'connectIp' => '123.456.789.1',
            'httpPort' => 8080,
            'httpsPort' => 8443,
            'socks5Port' => 1080,
            'proxyType' => 'http',
            'createdAt' => now(),
            'expiresAt' => now()->addDays(30),
            'metadata' => ['key1' => 'value1', 'key2' => 'value2'],
        ]);
    }
}
