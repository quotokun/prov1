<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proxy extends Model
{
    protected $fillable = ['id', 'status', 'proxytext', 'networkType', 'whitelistedIps', 'username', 'password', 'publicIp', 'connectIp', 'httpPort', 'httpsPort', 'socks5Port', 'proxyType', 'createdAt', 'expiresAt', 'metadata'];

    protected $casts = [
        'whitelistedIps' => 'json',
        'connection' => 'json',
        'metadata' => 'json',
    ];

}
