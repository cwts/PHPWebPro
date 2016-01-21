<?php
namespace Admin\Model;
use Think\Model;
class CentraldynamicsModel extends Model{
    protected $_validate = array(
        array('title','require','请填写动态标题！'), //默认情况下用正则进行验证
       
    );
    protected $_auto = array ( 
        array('time','time',3,'function'), // 调用time()函数自动写入当前时间
        array('user_id','getUid',3,'callback'), // 使用回调函数获取登陆者的id
    );
    protected function getUid(){
    	return session('adminId');
    }
}