<?php

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
 */
use Illuminate\Support\Collection;

Artisan::command('inspire', function () {
    // Response
    $this->info('Macro on response');
    $this->comment(
        response()->title('some random string ssAsdsad loREM ipSum')
    );

    // Collection
    $this->info('Macro on collection');
    collect()->ifEmpty(function (Collection $collection) {
        echo 'hi, you are empty now.' . PHP_EOL;
    });
    collect([1, 2, 3])->ifEmpty(function (Collection $collection) {
        echo 'hi, you are not empty now.' . PHP_EOL;
    });

    // URL
    $this->info('Macro on route');
    $this->comment('Landing Page URL: ' . url()->landingPage());
    $this->comment('About Us Page URL: ' . url()->aboutUs());
})->describe('Display an inspiring quote');
