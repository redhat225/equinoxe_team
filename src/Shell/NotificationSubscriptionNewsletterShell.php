<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class NotificationSubscriptionNewsletterShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->loadModel('ServiceSubscribers');
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('notificationSubscribeNewsletter');

    while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);

          $status = $this->send($message['content']);
          if($status)
          {
            $client->delete($job);
            $this->out('Job Delete');
          }
          else
          {
            $client->bury($job);
            $this->out('Job Burried');

          }
        
    }
  }

  public function send($content){    
     try
         {
            $email = new Email('equinoxe_main_profile');
            $email->to($content['newsletter_label'])
            ->subject('🎫 Inscription Newsletter ✉️')
            ->template('subscription_notification_newsletter','blank') 
            ->emailFormat('html')
            ->viewVars(['content'=>$content])
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}