<?php

namespace App\Observers;

use Cache;
use App\Models\Link;

class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}
