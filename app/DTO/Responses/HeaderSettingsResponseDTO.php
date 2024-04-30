<?php

namespace App\DTO\Responses;

use App\Enums\LocaleEnum;
use App\Enums\SettingKeyEnum;
use App\Enums\WeekDayEnum;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;

class HeaderSettingsResponseDTO extends ResponseDTO
{
    public string $address;
    public string $phone;
    public string $email;
    public array $working_days;
    public array $working_time;
    public string $telegram_link;
    public string $instagram_link;
    public string $facebook_link;
    public string $twitter_link;

    public function __construct(
        Collection $settings
    )
    {
        $settings->each(function (Setting $setting) {
            if ($setting->key === SettingKeyEnum::ADDRESS) {
                $this->address = $setting->value[app()->getLocale()];
            } elseif ($setting->key === SettingKeyEnum::WORKING_DAYS) {
                $this->working_days = [
                    'from' => WeekDayEnum::getByCode($setting->value['from'])
                        ->translatedCode(
                            LocaleEnum::from(app()->getLocale())
                        ),
                    'to' => WeekDayEnum::getByCode($setting->value['to'])
                        ->translatedCode(
                            LocaleEnum::from(app()->getLocale())
                        ),
                ];
            }
            else {
                $this->{$setting->key->value} = $setting->value;
            }
        });
    }
}
