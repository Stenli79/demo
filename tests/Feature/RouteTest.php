<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexNotLogin()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     * @dataProvider routeProvider
     */
    public function testRoutesIsRedirectedToLogin( $route )
    {
        $response = $this->get($route);

        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

    public function testLoginTrue()
    {
        $credential = [
            'email' => 'demo@demo.com',
            'password' => 'password'
        ];

        $this->post('login',$credential)->assertRedirect('/home');
    }

    public function testLoginFalse()
    {
        $credential = [
            'email' => 'invalid@demo.com',
            'password' => 'invalid'
        ];
        $this->post('login',$credential)->assertRedirect('/');
    }

    /**
     * @test
     * @dataProvider routeAndLabelsProvider
     */
    public function testRoutesWithLoggedUser( $route, $seeString )
    {
        $this->loginWithFakeUser();

        $response = $this->get($route);

        $response->assertSee($seeString);
        $response->assertStatus(200);
    }

    public function routeProvider()
    {
        return [
            ['/home'],
            ['/grid'],
            ['/links'],
            ['/colors'],
        ];
    }

    public function routeAndLabelsProvider()
    {
        return [
            ['/home', 'Dashboard'],
            ['/grid', 'Dashboard'],
            ['/links', 'All Links'],
            ['/links/create', 'Create Link'],
            ['/links/1/edit', 'Edit Link'],
            ['/colors', 'All Colors'],
            ['/colors/create', 'Create Color'],
            ['/colors/1/edit', 'Edit Color'],
        ];
    }
}
