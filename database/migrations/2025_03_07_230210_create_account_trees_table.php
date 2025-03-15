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
        Schema::create('account_trees', function (Blueprint $table) {
            $table->id();
            $table->foreignid('account_code')->unique()->index();
            $table->json('name')->nullable();
            // $table->unsignedTinyInteger('depth');
            $table->enum('account_nature', ['debit', 'credit']);
            $table->unsignedTinyInteger('account_type')
                ->comment('1: Asset, 2: Liability, 3: Equity, 4: Income, 5: Expense');
            $table->boolean('allow_delete')->default(0);
            $table->boolean('is_active')->default(1);
            // Add nested set columns (_lft , _rgt , parent_id )
            $table->nestedSet();
            $table->json('description')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_trees');
    }
};
