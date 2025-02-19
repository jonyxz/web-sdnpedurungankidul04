<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use App\Models\Classroom;

class ClassStatsWidget extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\Relation|null
    {
        return Classroom::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->label('Nama Kelas')
                ->sortable()
                ->searchable(),

            TextColumn::make('students_count')
                ->label('Total Murid')
                ->counts('students')
                ->sortable(),

            TextColumn::make('teacher.name')
                ->label('Guru Pengajar')
                ->default('Belum ada guru'),
        ];
    }
}
