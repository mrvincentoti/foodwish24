<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry; 


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topjobs
 *
 * @author Administrator
 */
class foodCell extends Cell{
    
    public function display(){
        
        //cell method for most viewed/popular news in the past three weeks
        $jobtable = TableRegistry::get('Jobs');
        $jobs =  $jobtable->find('all')
         ->where(['DATE(post_date) > DATE(DATE_SUB(NOW(), INTERVAL 31 DAY))','approvalstatus' => 'approved'])
           ->order(['job_view_count' => 'desc'])
           ->limit(40);
              
        $this->set('trendingjobs',  $jobs);
    }

    
    //cell method that renders the gallaeries on the footer
    public function footergallary(){
           $galleries_table = TableRegistry::get('Galleries');
        $galleries = $galleries_table->find()->limit(6);
        $this->set('galleries',  $galleries);
    }
    
    
    //method that renders three most recent posts on the footer
    public function footerpost(){
        $dishes_table = TableRegistry::get('Dishes');
        $dishes = $dishes_table->find()
                ->order(['id'=>'DESC'])
                ->limit(3);
        $this->set('dishes',  $dishes);
    }
}
