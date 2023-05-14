<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Auth\Notifications\ResetPassword;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
  /**
   * The policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    // 'App\Models\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
   * Register any authentication / authorization services.
   */
  public function boot(): void {
    $this->registerPolicies();

    ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
      return config("app.frontend_url") .
        "/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
    });

    Auth::viaRequest("remember", function ($request) {
      $token = $request->cookie("remember_token");

      if ($token && !$request->bearerToken()) {
        $personalAccessToken = PersonalAccessToken::findToken($token);

        if ($personalAccessToken) {
          $user = $personalAccessToken->tokenable;
          return $user;
        }
      }
    });
    //
    //
  }
}
