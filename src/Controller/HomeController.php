<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Network\Exception;
use Pheanstalk\Pheanstalk;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeFilter(Event $event){
                parent::beforeFilter($event);
        if(!$this->request->is('ajax'))
        {
            $this->request->params['action'] = 'index';
        }
    }

    public function index(){
            $title = 'Accueil';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);  
    }

    public function contact(){
            $title = 'Contact';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);  
    }
    public function event(){
            $title = 'Events';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);  
    }

        public function indoor(){
            $title = 'Services Intérieurs';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);  
    }

        public function outdoor(){
            $title = 'Services Extérieurs';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);  
    }

    public function home(){
    	    $title = 'Accueil';
            $this->set(compact('title'));
            $this->set('_serialize',['title']);
    }

    public function subscribeNewsletter(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                $data = $this->request->data;
                $this->loadModel('NewsletterSubscribers');
                $newsletter = $this->NewsletterSubscribers->newEntity($data);
                if($newsletter->errors())
                    throw new Exception\ForbiddenException(__('Forbidden'));
                else
                {
                    if($this->NewsletterSubscribers->save($newsletter))
                    {
                        //open the pipe
                        $pheanstalk = new Pheanstalk('127.0.0.1');
                        $payload = ['content'=>$newsletter];
                        $pheanstalk
                          ->useTube('notificationSubscribeNewsletter')
                          ->put(json_encode($payload));
                        //response
                        $this->RequestHandler->renderAs($this, 'json');
                        $response = ['message'=>'ok'];
                        $this->set(compact('response'));
                        $this->set('_serialize',['response']);
                    }
                    else
                    {
                        if($newsletter->errors()['newsletter_label']['_isUnique'])
                        {
                            throw new Exception\UnauthorizedException(__('Unauthorized'));
                        }
                        else
                          throw new Exception\BadRequestException(__('BadRequest'));
                    }

                }

            }
        }
    }

    public function serviceHub(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                $query_data = $this->request->query;

                switch($query_data['action'])
                {
                    case 'get':
                         $this->loadModel('ServiceCategoryItems');
                         $this->RequestHandler->renderAs($this, 'json');
                         $items = $this->ServiceCategoryItems->find();
                         $this->set(compact('items'));
                         $this->set('_serialize',['items']);
                    break;  
                }

            }




            if($this->request->is('post')){
                $data = $this->request->data;
                $this->loadModel('ServiceSubscribers');
                $subscriber = $this->ServiceSubscribers->newEntity($data);
                if($subscriber->errors())
                    throw new Exception\ForbiddenException(__('Forbidden'));
                else
                {
                    if($this->ServiceSubscribers->save($subscriber))
                    {
                        $this->RequestHandler->renderAs($this, 'json');
                        //sollicit a job... naturally!
                        $pheanstalk = new Pheanstalk('127.0.0.1');
                        $payload = ['content'=>$subscriber];
                        $pheanstalk
                          ->useTube('notificationServiceTube')
                          ->put(json_encode($payload));
                        //send response
                        $response = ['message'=>'ok'];
                        $this->set(compact('response'));
                        $this->set('_serialize',['response']);
                    }
                    else
                        throw new Exception\BadRequestException(__('Bad Request'));
                }
            }
        }
    }
}
