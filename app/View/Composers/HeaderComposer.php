<?php

namespace App\View\Composers;

use App\Services\SettingsService;
use Illuminate\View\View;

class HeaderComposer
{
    public function __construct(
        private SettingsService $settingsService
    )
    {
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $settings = $this->settingsService->getHeaderSettings();

        $view
            ->with('address', $settings->address)
            ->with('phone', $settings->phone)
            ->with('working_schedule', [
                'time' => $settings->working_time,
                'days' => $settings->working_days,
            ])
            ->with('socials', [
                'instagram' => $settings->instagram_link,
                'facebook' => $settings->facebook_link,
                'twitter' => $settings->twitter_link,
                'telegram' => $settings->telegram_link,
            ]);
    }
}
