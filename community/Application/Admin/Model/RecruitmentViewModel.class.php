<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class RecruitmentViewModel extends ViewModel {
   public $viewFields = array(
     'recruitment'=>array('id','title','content','time','user_id'),
    // 'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'post.cate_id=category.id'),
     'member'=>array('username', '_on'=>'recruitment.user_id=member.id'),
   );
 }

?>