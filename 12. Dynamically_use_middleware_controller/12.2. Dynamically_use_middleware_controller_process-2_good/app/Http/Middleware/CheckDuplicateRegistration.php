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
    public function handle(Request $request, Closure $next)
    {
        $model = ucfirst($request->route('modelType'));
        $modelName = "App\\Models\\$model";
        if (!class_exists($modelName)) {
            return response()->json([
                'message' => "Invalid model name: $modelName"
            ], 400);
        }
        $email = $request->input('email');
        $dataExists = $modelName::where('email', $email)->first();;
        if ($dataExists) {
            return response()->json([
                'message' => "Data already exists in the $modelName model."
            ]);
        }

        return $next($request);
    }
}
