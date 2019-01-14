<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Helpers\HomeHelper;

class NotifyMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:sendMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Every day send notice to mail to do report.';

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
        $getIdTrainees = HomeHelper::getIdOfTrainee();

        foreach ($getIdTrainees as $getIdTrainee){
            Mail::to($getIdTrainee->email)->send(new SendMail());
        }
    }
}
