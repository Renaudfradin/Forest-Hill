<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\Activity;
use App\Models\Club;
use App\Models\Contremarque;
use App\Models\Course;
use App\Models\Events;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStat extends BaseWidget
{
    protected static ?string $record = User::class;

    protected function getStats(): array
    {
        return [
            Stat::make('Totals Users', User::query()->count()),
            Stat::make('Totals Clubs', Club::query()->count()),
            Stat::make('Totals Activitys', Activity::query()->count()),
            Stat::make('Totals Events', Events::query()->count()),
            Stat::make('Totals Contremarques', Contremarque::query()->count()),
            Stat::make('Totals Courses', Course::query()->count()),
        ];
    }
}
