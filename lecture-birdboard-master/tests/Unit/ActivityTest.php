<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\User;
use App\Project;
use App\Activity;

use Tests\TestCase;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function it_has_a_user()
    {
        $user = $this->signIn();

        // $project = factory(Project::class)->create();
        // $this->assertInstanceOf(User::class, $project->activity->first()->user);

        $project = ProjectFactory::ownedBy($user)->create();
        $this->assertEquals($user->id, $project->activity->first()->user->id);
        
    }
}