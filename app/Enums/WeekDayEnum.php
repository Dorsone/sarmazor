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
