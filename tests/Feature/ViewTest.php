<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ViewTest extends TestCase
{

    private function viewTestHelper(string $routeGroup, Closure $closure)
    {
        $routes = config($routeGroup);
        foreach ($routes as $route) {
            $closure($route);
        }
    }

    private function loginRedirectHelper()
    {
        $this->viewTestHelper('adminRoutes', function ($route) {
            $response = $this->get($route);
            $this->followRedirects($response)->assertViewIs('login');
        });
    }

    public function test_public_routes_views_are_returned()
    {

        $this->viewTestHelper('publicRoutes', function ($route) {
            $this->get($route)->assertViewIs($route);
        });
    }

    public function test_admin_views_not_returned_on_current_user_not_authenticated()
    {
        $this->loginRedirectHelper();
    }

    public function test_admin_views_not_returned_on_user_not_admin()
    {
        $user = User::factory()->create();
        Auth::login($user);

        $this->loginRedirectHelper();
    }

    public function test_admin_views_returned_on_admin_user()
    {
        $user = User::factory()->create();
        $user->role = 'admin';
        $user->save();

        Auth::login($user);

        $article = Article::factory()->create();

        $this->viewTestHelper('adminRoutes', function ($route) use ($article) {
            $response = null;
            if (preg_match('/.*\/\{.*\}/', $route)) {
                $route = explode('{', $route)[0];
                $response = $this->get($route . '/' . $article->id);
            } else {
                $response = $this->get($route);
            }
            $response->assertViewIs($route);
        });
    }

    public function test_article_view()
    {
        $article = Article::factory()->create();
        $this->get('article/' . $article->url)->assertViewIs('article');
    }

    public function test_get_chat_on_user_authenticated()
    {
        $user = User::factory()->create();
        $user->password = bcrypt('test');
        $user->save();
        Auth::login($user);
        $this->get('chat')->assertViewIs('chat');
    }
}
