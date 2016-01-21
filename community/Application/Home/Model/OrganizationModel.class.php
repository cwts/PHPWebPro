<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class OrganizationModel extends ViewModel {
   public $viewFields = array(
     'Organization'=>array('id','content','time','user_name')
   );
 }
?>