<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class ProgramEnterpriseCooperationModel extends ViewModel {
   public $viewFields = array(
    'project'=>array('id','title','content','time','cate_id','user_id')
   );
 }
?>