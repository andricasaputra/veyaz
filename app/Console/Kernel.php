<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
<<<<<<< HEAD
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
=======
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\VeyazSetup::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
