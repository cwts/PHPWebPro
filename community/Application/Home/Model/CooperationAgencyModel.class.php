<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CooperationAgencyModel extends ViewModel {
   public $viewFields = array(
      'Cooperationagency'=>array('id','title','content','time','user_id')
   );
 }
?>