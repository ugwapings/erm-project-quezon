<?php

use Livewire\Volt\Volt;
use App\Livewire\Employees;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/employee', 'employee.index')
    ->middleware(['auth', 'verified'])
    ->name('employee');

Route::get('employee/export', function () {
    return Excel::download(new EmployeesExport, 'employees.xlsx');
})->middleware(['auth', 'verified'])->name('export');

Route::view('/position', 'position.index')
    ->middleware(['auth', 'verified'])
    ->name('position');

Route::view('/office', 'office.office-page')
    ->middleware(['auth', 'verified'])
    ->name('office');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
