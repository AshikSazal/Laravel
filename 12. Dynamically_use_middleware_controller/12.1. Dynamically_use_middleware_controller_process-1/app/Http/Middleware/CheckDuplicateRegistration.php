<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class CheckDuplicateRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $modelName)
    {
        $model = "App\\Models\\" . ucfirst($modelName);
        // if (class_exists($model)) {
        //     return response()->json([
        //         'message' => "model name: $model"
        //     ], 400);
        // }
        $email = $request->input('email');
        $dataExists = $model::where('email', $email)->first();;
        if ($dataExists) {
            return response()->json([
                'message' => "Data already exists in the $modelName model."
            ]);
        }

        return $next($request);
    }
}
