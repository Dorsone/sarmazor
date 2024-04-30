<?php

namespace App\Services;

use App\DTO\Responses\HeaderSettingsResponseDTO;
use App\Enums\SettingKeyEnum;
use App\Models\Setting;

class SettingsService
{
    public function getHeaderSettings(): HeaderSettingsResponseDTO
    {
        $settings = Setting::query()
            ->whereIn('key', [
                SettingKeyEnum::ADDRESS,
                SettingKeyEnum::PHONE,
                SettingKeyEnum::WORKING_DAYS,
                SettingKeyEnum::WORKING_TIME,
                SettingKeyEnum::TELEGRAM_LINK,
                SettingKeyEnum::INSTAGRAM_LINK,
                SettingKeyEnum::FACEBOOK_LINK,
                SettingKeyEnum::TWITTER_LINK,
                SettingKeyEnum::EMAIL
            ])->get();

        return new HeaderSettingsResponseDTO($settings);
    }
}
