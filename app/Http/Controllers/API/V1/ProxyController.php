<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proxy;

class ProxyController extends Controller
{
    public function index()
    {
        $proxies = Proxy::all();
        return response()->json(['proxies' => $proxies], 200);
    }

    public function show($id)
    {
        $proxy = Proxy::find($id);
        if ($proxy) {
            return response()->json(['proxy' => $proxy], 200);
        } else {
            return response()->json(['message' => 'Proxy not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $data = $request->only(['status','proxytext', 'networkType', 'whitelistedIps', 'username', 'password', 'publicIp', 'connectIp', 'httpPort', 'httpsPort', 'socks5Port', 'proxyType', 'createdAt', 'expiresAt', 'metadata']);
        $proxy = Proxy::create($data);
        return response()->json(['proxy' => $proxy], 201);
    }

    public function update(Request $request, $id)
    {
        $proxy = Proxy::find($id);
        if ($proxy) {
            $data = $request->only(['status','proxytext', 'networkType', 'whitelistedIps', 'username', 'password', 'publicIp', 'connectIp', 'httpPort', 'httpsPort', 'socks5Port', 'proxyType', 'createdAt', 'expiresAt', 'metadata']);
            $proxy->update($data);
            return response()->json(['proxy' => $proxy], 200);
        } else {
            return response()->json(['message' => 'Proxy not found'], 404);
        }
    }

    public function destroy($id)
    {
        $proxy = Proxy::find($id);
        if ($proxy) {
            $proxy->delete();
            return response()->json(['message' => 'Proxy deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Proxy not found'], 404);
        }
    }
}
