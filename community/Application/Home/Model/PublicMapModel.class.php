<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class PublicMapModel extends ViewModel {
   public $viewFields = array(
     'post'=>array('title','content')
   );
 }
?>