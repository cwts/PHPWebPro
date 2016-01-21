<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class PublicmapViewModel extends ViewModel {
   public $viewFields = array(
     'publicmap'=>array('id','title','content','time','user_id','coordinate'),
     'member'=>array('username', '_on'=>'publicmap.user_id=member.id'),
   );
 }

?>