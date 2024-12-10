<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Lấy ngôn ngữ từ session, mặc định là 'vi'
        $locale = Session::get('locale', 'vi');

        // Thiết lập ngôn ngữ cho ứng dụng
        App::setLocale($locale);
        
        // Chia sẻ biến $currentLocale với tất cả view
        View::share('currentLocale', $locale);

        // Tiếp tục xử lý request
        return $next($request);
    }
}
