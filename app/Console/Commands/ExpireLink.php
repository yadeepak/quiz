<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Generatelinks;
use Illuminate\Support\Carbon;
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
        $now = Carbon::now();
        $activeLinks = Generatelinks::where('expired',0)->whereNotNull('startTime')->get();
        if(isset($activeLinks)){
            foreach($activeLinks as $activeLink){
                $expireInMinutes = $activeLink->endtime;
                $startDateTime =  Carbon::createFromTimeString($activeLink->startTime);
                $iff = Carbon::parse($now)->greaterThanOrEqualTo($startDateTime); // true
                $diff_in_minutes = $now->diffInMinutes($startDateTime);
                if($iff && $diff_in_minutes >= $expireInMinutes){
                   $update =  Generatelinks::find($activeLink->id);
                   $update->expired = 1;
                   $update->save();
                }

            }
        }
        //$this->info("hello");
    }
}
