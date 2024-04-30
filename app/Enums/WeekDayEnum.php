<?php

namespace App\Enums;

use Exception;

enum WeekDayEnum: string
{
    case MONDAY = 'Monday';
    case TUESDAY = 'Tuesday';
    case WEDNESDAY = 'Wednesday';
    case THURSDAY = 'Thursday';
    case FRIDAY = 'Friday';
    case SATURDAY = 'Saturday';
    case SUNDAY = 'Sunday';

    public function code(): string
    {
        return match ($this) {
            self::MONDAY => 'Mon',
            self::TUESDAY => 'Tue',
            self::WEDNESDAY => 'Wed',
            self::THURSDAY => 'Thu',
            self::FRIDAY => 'Fri',
            self::SATURDAY => 'Sat',
            self::SUNDAY => 'Sun',
        };
    }

    public function translated(LocaleEnum $locale): string
    {
        return match ($locale) {
            LocaleEnum::ENGLISH => match ($this) {
                self::MONDAY => self::MONDAY->value,
                self::TUESDAY => self::TUESDAY->value,
                self::WEDNESDAY => self::WEDNESDAY->value,
                self::THURSDAY => self::THURSDAY->value,
                self::FRIDAY => self::FRIDAY->value,
                self::SATURDAY => self::SATURDAY->value,
                self::SUNDAY => self::SUNDAY->value,
            },
            LocaleEnum::RUSSIAN => match ($this) {
                self::MONDAY => 'Понедельник',
                self::TUESDAY => 'Вторник',
                self::WEDNESDAY => 'Среда',
                self::THURSDAY => 'Четверг',
                self::FRIDAY => 'Пятница',
                self::SATURDAY => 'Суббота',
                self::SUNDAY => 'Воскресенье',
            },
            LocaleEnum::UZBEK => match ($this) {
                self::MONDAY => 'Dushanba',
                self::TUESDAY => 'Seshanba',
                self::WEDNESDAY => 'Chorshanba',
                self::THURSDAY => 'Payshanba',
                self::FRIDAY => 'Juma',
                self::SATURDAY => 'Shanba',
                self::SUNDAY => 'Yakshanba',
            },
        };
    }

    public function translatedCode(LocaleEnum $locale): string
    {
        return match ($locale) {
            LocaleEnum::ENGLISH => match ($this) {
                self::MONDAY => 'Mon',
                self::TUESDAY => 'Tue',
                self::WEDNESDAY => 'Wed',
                self::THURSDAY => 'Thu',
                self::FRIDAY => 'Fri',
                self::SATURDAY => 'Sat',
                self::SUNDAY => 'Sun',
            },
            LocaleEnum::RUSSIAN => match ($this) {
                self::MONDAY => 'Пн',
                self::TUESDAY => 'Вт',
                self::WEDNESDAY => 'Ср',
                self::THURSDAY => 'Чт',
                self::FRIDAY => 'Пт',
                self::SATURDAY => 'Сб',
                self::SUNDAY => 'Вс',
            },
            LocaleEnum::UZBEK => match ($this) {
                self::MONDAY => 'Du',
                self::TUESDAY => 'Se',
                self::WEDNESDAY => 'Cho',
                self::THURSDAY => 'Pa',
                self::FRIDAY => 'Ju',
                self::SATURDAY => 'Sha',
                self::SUNDAY => 'Yak',
            },
        };
    }

    /**
     * @throws Exception
     */
    public static function getByCode(string $code): WeekDayEnum
    {
        foreach (WeekDayEnum::cases() as $weekDayEnum) {
            if ($weekDayEnum->code() === $code) {
                return $weekDayEnum;
            }
        }

        throw new Exception('Invalid week day code');
    }
}
