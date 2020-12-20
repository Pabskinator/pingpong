<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitesControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_create_sites()
    {
        $this->withoutExceptionHandling();

        // create a user
        $user = User::factory()->create();

        // make a post request to a route to create a site
        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post(route('sites.store'), [
            'name' => 'Google',
            'url' => 'https://google.com'
        ]);

        // make sure the site exists within the database
        $site = Site::first();
        $this->assertEquals(1, Site::count());
        $this->assertEquals('Google', $site->name);
        $this->assertEquals('https://google.com', $site->url);
        $this->assertNull($site->is_online);
        $this->assertEquals($user->id, $site->user_id);

        // see the site's name on the page
        $response->assertSeeText('Google');

        //ensure url is correct
        $this->assertEquals(route('sites.show', $site), url()->current());
    }
}
