<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Student;

class WeeklyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:weekly-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Moses Command for test';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
         
        


        $stu = new Student();
        $stu->name =  'bolu';
        $stu->phone =  '90009900';
        $stu->address = 'dd n stree';
        $stu->email =  'aweuda@yahoo.com';
        $stu->image = 'uiuo.png';
         
        $stu->save();
        // $to = 'awedamoses@gmail.com';
        // $subject = "Testing schedule";
        
        // $message = 'Dear '. '<br>';
        // $message .= "We welcome you to be part of family<br><br>";
        // $message .= "Regards,<br>";
        
        // // Always set content-type when sending HTML email
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // // More headers
        // $headers .= 'From: awedamoses@gmail.com' . "\r\n";
      
        
        // mail($to,$subject,$message,$headers);
       
    }
}
