<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            if (! Schema::hasColumn('events', 'datetime_from')) {
                $table->dateTime('datetime_from')->nullable();
            }
            if (! Schema::hasColumn('events', 'datetime_to')) {
                $table->dateTime('datetime_to')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            if (Schema::hasColumn('events', 'datetime_from')) {
                $table->dropColumn('datetime_from');
            }
            if (Schema::hasColumn('events', 'datetime_to')) {
                $table->dropColumn('datetime_to');
            }
        });
    }
};
