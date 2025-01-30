<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Password;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('resetPassword')
                ->label('Reset Password')
                ->action(function () {
                    Password::sendResetLink(['email' => $this->record->email]);
                    $this->notify('success', 'Password reset link sent!');
                }),
            Actions\Action::make('verifyEmail')
                ->label('Verify Email')
                ->action(function () {
                    if (!$this->record->hasVerifiedEmail()) {
                        $this->record->sendEmailVerificationNotification();
                        $this->notify('success', 'Verification email sent!');
                    } else {
                        $this->notify('info', 'Email already verified.');
                    }
                }),
        ];
    }
}