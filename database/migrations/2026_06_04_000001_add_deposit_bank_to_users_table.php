<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Adds per-user "deposit bank account" columns. These hold the bank
     * account details the admin assigns to a specific user for receiving
     * Bank Transfer deposits. They are kept separate from the existing
     * bank_name/account_name/account_number/swift_code columns, which
     * represent the user's own (withdrawal) bank account.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'deposit_bank_name')) {
                $table->string('deposit_bank_name', 191)->nullable()->after('swift_code');
            }
            if (!Schema::hasColumn('users', 'deposit_account_name')) {
                $table->string('deposit_account_name', 191)->nullable()->after('deposit_bank_name');
            }
            if (!Schema::hasColumn('users', 'deposit_account_number')) {
                $table->string('deposit_account_number', 191)->nullable()->after('deposit_account_name');
            }
            if (!Schema::hasColumn('users', 'deposit_swift_code')) {
                $table->string('deposit_swift_code', 191)->nullable()->after('deposit_account_number');
            }
            if (!Schema::hasColumn('users', 'deposit_iban')) {
                $table->string('deposit_iban', 191)->nullable()->after('deposit_swift_code');
            }
            if (!Schema::hasColumn('users', 'deposit_bank_notes')) {
                $table->text('deposit_bank_notes')->nullable()->after('deposit_iban');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'deposit_bank_name',
                'deposit_account_name',
                'deposit_account_number',
                'deposit_swift_code',
                'deposit_iban',
                'deposit_bank_notes',
            ]);
        });
    }
};
