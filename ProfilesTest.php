<?php
 
namespace TestsFeature;
 
use IlluminateFoundationTestingDatabaseMigrations;
use TestsTestCase;
use IlluminateFoundationTestingWithFaker;
use IlluminateFoundationTestingRefreshDatabase;
 
class ProfilesTest extends TestCase
{
    use DatabaseMigrations;
 
    public function test_a_user_has_a_profile()
    {
        $user = create('AppUser');
 
        $this->withoutExceptionHandling()->get('/profiles/' . $user->name)
            ->assertSee($user->name);
    }
}
