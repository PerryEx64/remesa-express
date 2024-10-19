<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user creation.
     *
     * @return void
     */
    public function test_user_creation()
    {
        // Arrange: Create a user with factory or manually
        $user = User::factory()->create([
            'name' => 'John Doe',
            'home_address' => '123 Main St',
            'identification' => '123456789',
            'age' => '1990-01-01',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        // Act: Retrieve the user from the database
        $retrievedUser = User::find($user->id);

        // Assert: Verify that the user was created correctly
        $this->assertEquals('John Doe', $retrievedUser->name);
        $this->assertEquals('123 Main St', $retrievedUser->home_address);
        $this->assertEquals('123456789', $retrievedUser->identification);
        $this->assertEquals('1990-01-01', $retrievedUser->age->format('Y-m-d'));
        $this->assertEquals('johndoe@example.com', $retrievedUser->email);
    }
}
