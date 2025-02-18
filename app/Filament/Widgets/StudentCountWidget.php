<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Student;

class StudentCountWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Murid', Student::count())
                ->icon('heroicon-o-academic-cap')
                ->color('success'),
        ];
    }
}
