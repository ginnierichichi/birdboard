<?php

namespace Tests\Unit;

use App\Project;
use App\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    function it_beings_to_a_project()
    {
        $task = factory(Task::class)->create();

        $this->assertInstanceOf(Project::class, $task->project);

    }


    /** @test */
    function it_has_a_path()
    {
        $task = factory(Task::class)->create();
        $this->assertEquals('/projects/' . $task->project->id . '/tasks/' . $task->id, $task->path());


    }
}