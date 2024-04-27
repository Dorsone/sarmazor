<?php

use App\Enums\SettingKeyEnum;
use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('key')->unique();
            $table->string('value');
            $table->timestamps();
        });

        foreach (SettingKeyEnum::cases() as $setting) {
            Setting::query()->create([
                'label' => $setting->label(),
                'key' => $setting->value,
                'value' => $setting->defaultValue(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
