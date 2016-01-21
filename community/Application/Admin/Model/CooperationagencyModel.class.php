<?php
namespace Admin\Model;
use Think\Model;
class CooperationagencyModel extends Model{
    protected $_validate = array(
        array('title','require','请填写机构名称！'), //默认情况下用正则进行验证
       
    );
    protected $_auto = array ( 
        array('time','time',3,'function'), // 调用time()函数自动写入当前时间
        array('user_id','getUid',3,'callback'), // 使用回调函数获取登陆者的id
    );
    protected function getUid(){
    	return session('adminId');
    }
}