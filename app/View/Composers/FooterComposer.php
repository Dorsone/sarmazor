<?php

namespace App\View\Composers;

use App\Services\SettingsService;
use Illuminate\View\View;

class FooterComposer
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
            ->with('email', $settings->email);
    }
}
