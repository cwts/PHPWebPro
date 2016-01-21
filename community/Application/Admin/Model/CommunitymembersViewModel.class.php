<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class CommunitymembersViewModel extends ViewModel {
   public $viewFields = array(
     'communitymembers'=>array('id','name','duty','major','qualification','year','photoname','photo','user_id'),
    // 'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'post.cate_id=category.id'),
     'member'=>array('username', '_on'=>'communitymembers.user_id=member.id'),
   );
 }

?>