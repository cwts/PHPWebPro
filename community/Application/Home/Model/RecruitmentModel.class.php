<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class RecruitmentModel extends ViewModel {
   public $viewFields = array(
      'recruitment'=>array('id','title','content','time','user_id')
   );
 }
?>