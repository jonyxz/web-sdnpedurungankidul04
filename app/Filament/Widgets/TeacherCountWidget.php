<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Teacher;

class TeacherCountWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Guru', Teacher::count())
                ->icon('heroicon-o-user-group')
                ->color('primary'),
        ];
    }
}
