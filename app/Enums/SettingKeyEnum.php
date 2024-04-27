<?php

namespace App\Enums;

enum SettingKeyEnum: string
{
    case ADDRESS = 'address';
    case PHONE = 'phone';
    case WORKING_TIME = 'working_time';
    case WORKING_DAYS = 'working_days';
    case FACEBOOK_LINK = 'facebook_link';
    case INSTAGRAM_LINK = 'instagram_link';
    case TELEGRAM_LINK = 'telegram_link';
    case TWITTER_LINK = 'twitter_link';
    case PROJECTS_COMPLETED = 'projects_completed';
    case AWARDS_WON = 'awards_won';
    case SATISFIED_CLIENTS = 'satisfied_clients';
    case WORKERS_EMPLOYED = 'workers_employed';
    case EMAIL = 'email';

    public function label(): string
    {
        return match ($this) {
            self::ADDRESS => __('Address'),
            self::PHONE => __('Phone'),
            self::WORKING_TIME => __('Working Time'),
            self::FACEBOOK_LINK => __('Facebook Link'),
            self::INSTAGRAM_LINK => __('Instagram Link'),
            self::TELEGRAM_LINK => __('Telegram Link'),
            self::TWITTER_LINK => __('Twitter Link'),
            self::WORKING_DAYS => __('Working Days'),
            self::PROJECTS_COMPLETED => __('Project completed'),
            self::AWARDS_WON => __('Awards Won'),
            self::SATISFIED_CLIENTS => __('Satisfied Clients'),
            self::WORKERS_EMPLOYED => __('Workers employed'),
            self::EMAIL => __('Email'),
        };
    }

    public function defaultValue(): string|array|int
    {
        return match ($this) {
            self::ADDRESS => [
                'ru' => '210100, Кызылтепа, Навоий, Узбекистан',
                'en' => '210100, Kiziltepa, Navoiy, Uzbekistan',
                'uz' => '210100, Qiziltepa, Navoiy, Uzbekiston',
            ],
            self::PHONE => '+998900858585',
            self::WORKING_TIME => [
                'from' => '00:00',
                'to' => '23:59'
            ],
            self::FACEBOOK_LINK => 'https://www.facebook.com/',
            self::INSTAGRAM_LINK => 'https://www.instagram.com/',
            self::TELEGRAM_LINK => 'https://www.t.me/',
            self::TWITTER_LINK => 'https://www.twitter.com/',
            self::WORKING_DAYS => [
                'from' => WeekDayEnum::MONDAY->code(),
                'to' => WeekDayEnum::SUNDAY->code(),
            ],
            self::PROJECTS_COMPLETED => 231,
            self::AWARDS_WON => 24,
            self::SATISFIED_CLIENTS => 326,
            self::WORKERS_EMPLOYED => 61,
            self::EMAIL => 'support@sarmazor.uz',
        };
    }
}
