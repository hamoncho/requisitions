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
        Schema::table('requisitions', function (Blueprint $table) {
            $table->enum('status', ['draft', 'system', 'pending_approval', 'approved', 'rejected'])->default('draft');
            $table->foreignId('current_approver_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('requisitions', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropForeign(['current_approver_id']);
            $table->dropColumn('current_approver_id');
        });
    }
};
