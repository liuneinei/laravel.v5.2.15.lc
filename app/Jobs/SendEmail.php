<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $user = $this->user;
        $mailer->send('emails.test',['user'=>$this->user],function ($message) use ($user){
            $message->to($user->email)->subject('新功能发布');
        });
    }
}
