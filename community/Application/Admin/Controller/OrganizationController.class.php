<?php
namespace Admin\Controller;
use Think\Controller\RestController;
/**
 * 组织架构
 */
class OrganizationController extends RestController
{
    /**
     * 组织架构详细信息
     * @return [type] [description]
     */
    public function index()
    {
    	$sid = session('adminId');
    	//判断用户是否登陆
    	if(!isset($sid ) ) {
    		redirect(U('Login/index'));
    	}
    	else 
    	{
    		$model = M('organization')->where('id=1')->find();
    		// $this->assign("category",getSortedCategory(M('category')->select()));
    		$this->assign('post',$model);
    		$this->display();     
        }
    }
    /**
     * 添加新闻
     */
/*     public function add()
    {
        //默认显示添加表单
        if (!IS_POST) {
        	//$this->assign("category",getSortedCategory(M('category')->select()));
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
             $model = D("News");
//             $model->time = time();
//             $model->user_id = 1; 
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("添加成功", U('News/index'));
                } else {
                    $this->error("添加失败");
                }
            }
        }
    } */
    /**
     * 更新中心概况
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update($id)
    {
        //默认显示添加表单
        if (!IS_POST) {
            $model = M('organization')->where('id='.$id)->find();
           // $this->assign("category",getSortedCategory(M('category')->select()));
            $this->assign('post',$model);
            $this->display();
        }
        if (IS_POST) {
            $model = D("organization");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                if ($model->save()) {
                    $this->success("修改成功", U('Organization/index'));
                } else {
                    $this->error("修改失败");
                }        
            }
        }
    }
    /**
     * 删除文章
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
/*     public function delete($id)
    {
        $model = M('news');
        $result = $model->where("id=".$id)->delete();
        if($result){
            $this->success("删除成功", U('News/index'));
        }else{
            $this->error("删除失败");
        }
    } */
}
