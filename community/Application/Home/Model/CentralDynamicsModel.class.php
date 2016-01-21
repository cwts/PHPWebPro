<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CentralDynamicsModel extends ViewModel {
   public $viewFields = array(
      'centraldynamics'=>array('id','title','content','time','user_id')
   );
 }
?>