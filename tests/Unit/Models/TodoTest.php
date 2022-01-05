<?php declare(strict_types=1);

namespace Tests\Unit\Models;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class TodoTest.
 */
class TodoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The number of models to persist for tests.
     *
     * @var int
     */
    const TODO_NUMBER = 10;

    /**
     * @test
     *
     * @return void
     */
    public function it_can_be_persisted(): void
    {
        /** @var Todo[] $todos */
        $todos = Todo::factory(self::TODO_NUMBER)
                     ->create();

        $this->assertDatabaseCount(
            Todo::class,
            self::TODO_NUMBER
        );

        /** @var Todo $todo */
        foreach($todos as $todo) {
            $todo->refresh();

            $this->assertNotNull($todo->id);
            $this->assertIsInt($todo->id);
            $this->assertGreaterThan(0, $todo->id);

            $this->assertNotNull($todo->caption);
            $this->assertIsString($todo->caption);
            $this->assertNotEmpty($todo->caption);
        }
    }
}
