<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class NewsCenterModel extends ViewModel {
   public $viewFields = array(
      'newscenter'=>array('id','title','content','time','user_id')
   );
 }
?>