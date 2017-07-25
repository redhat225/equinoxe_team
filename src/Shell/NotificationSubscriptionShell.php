<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class NotificationSubscriptionShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->loadModel('AdministratorAccounts');
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('notificationOrderTubes');

    while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);

      $status = $this->send($message['order'],$message['user_account']);
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

  public function send($order,$user_account){

      $administrator_adresses = [];
      $needle = $order['customer_order_delivery_zone'];

      $administrator_accounts = $this->AdministratorAccounts->find()
                                                              ->contain(['Administrators','Cities']);



             foreach ($administrator_accounts as $account){
                          if($order['city_id'] == $account['cities'][0]['id'])
                              array_push($administrator_adresses,$account->administrator->admin_mail);
            }

            if(sizeof($administrator_adresses)==0)
            {
                $administrator_accounts = $this->AdministratorAccounts->find()
                                                              ->where(['AdministratorAccounts.administrator_slug_id'=>1]);
                foreach ($administrator_accounts as $account){
                       array_push($administrator_adresses,$account->administrator->admin_mail);
                }
            }
                           
         try
         {
          $email = new Email('foaniProfile');
          $email->to($administrator_adresses)
          ->subject('⏳ Nouvelle commande client 💼')
          ->template('notification_administrator_cli','blank') 
          ->emailFormat('html')
          ->viewVars(['order'=>$order,'user_account'=>$user_account])
          ->send();
            return true;
          }catch(Exception $e){
              return false;
          }
  }
}