<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CommunityMembersModel extends ViewModel {
   public $viewFields = array(
     'communitymembers'=>array('id','title','content','time','user_id')
   );
 }
?>