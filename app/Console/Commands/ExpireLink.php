<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
class ExpireLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expire:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'link will be expired once time is passed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
