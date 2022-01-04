<?php declare(strict_types=1);

use App\Models\Todo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTodosTable.
 */
class CreateTodosTable extends Migration
{
    /**
     * Create the table.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create((new Todo)->getTable(), function (Blueprint $table): void {
            $table->id();
            $table->string('caption');
            $table->timestamps();
        });
    }

    /**
     * Drop the table.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists((new Todo)->getTable());
    }
}
