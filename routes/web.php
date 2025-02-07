<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomePage;
use App\Http\Livewire\NewsPage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\KontakPage;
use App\Http\Livewire\AnnouncementPage;
use App\Http\Livewire\AnnouncementDetailPage;
use App\Http\Livewire\FotoPage;
use App\Http\Livewire\VideoPage;
use App\Http\Livewire\ProfileSekolahPage;
use App\Http\Livewire\ProfileGuruPage;
use App\Http\Livewire\ProfileSiswaPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/news', NewsPage::class)->name('news');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/kontak', KontakPage::class)->name('kontak');
Route::get('/announcement', AnnouncementPage::class)->name('announcement');
Route::get('/announcement/{slug}', AnnouncementDetailPage::class)->name('announcement.detail');
Route::get('/foto', FotoPage::class)->name('foto');
Route::get('/video', VideoPage::class)->name('video');
Route::get('/profile-sekolah', ProfileSekolahPage::class)->name('profile.sekolah');
Route::get('/profile-guru', ProfileGuruPage::class)->name('profile.guru');
Route::get('/profile-siswa', ProfileSiswaPage::class)->name('profile.siswa');
