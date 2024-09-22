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
        Schema::create('share_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('share_no', 100)->nullable();
            $table->string('member_reg_no', 100)->nullable();
            $table->string('member_name')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender', ['M', 'F', 'T'])->default('M');
            $table->integer('nos_of_shares')->unsigned()->nullable();
            $table->string('unit_no', 20)->nullable();
            $table->integer('share_from')->nullable();
            $table->integer('share_to')->nullable();
            $table->date('date')->nullable();
            $table->string('dt_gb_or_mc_meeting_transfer_aaproved')->nullable();
            $table->string('sr_no_sh_reg_held_by_transferor', 100)->nullable();
            $table->string('sr_no_sh_reg_held_by_transferee', 100)->nullable();
            $table->string('chairman', 100)->nullable();
            $table->string('secretary', 100)->nullable();
            $table->string('committee_member', 100)->nullable();
            $table->string('member_type', 100)->nullable();
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_certificates');
    }
};
