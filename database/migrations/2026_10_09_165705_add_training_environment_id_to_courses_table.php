
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('training_environment_id')->nullable();

            $table->foreign('training_environment_id')
                ->references('id')
                ->on('training_environments')
                ->onDelete('set null')
                ->onUpdate('set null');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['training_environment_id']);
            $table->dropColumn('training_environment_id');
        });
    }
};