<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\Club;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Model;

class UserStat extends BaseWidget
{
    protected static ?string $record = User::class;

    protected function getStats(): array
    {
        return [
            Stat::make('Totals Users', User::query()->count()),
            Stat::make('Totals Club', Club::query()->count()),
        ];
    }
}
