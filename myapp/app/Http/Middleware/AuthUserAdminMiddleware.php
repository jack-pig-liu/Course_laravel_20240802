<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Shop\Entity\User;

class AuthUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = session()->get('user_id');
        # 如果有登入
        if (!is_null($user_id)) {
            $User = User($user_id);
            # 並且 資料庫非空值 並且 使用者類型為管理者
            if (!is_null($User) && $User->type == 'A') {
                return $next($request);
            }
        }

        return redirect('/user/auth/login');
    }
}
