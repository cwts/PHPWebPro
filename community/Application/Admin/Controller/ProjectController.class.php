<?php
namespace Admin\Controller;
use Think\Controller\RestController;
/**
 * 文章管理
 */
class ProjectController extends RestController
{
    /**
     * 新闻列表
     * @return [type] [description]
     */
    public function index($key="")
    {
    	$sid = session('adminId');
    	//判断用户是否登陆
    	if(!isset($sid ) ) {
    		redirect(U('Login/index'));
    	}
    	else 
    	{
        if($key == ""){
            $model = D('ProjectView'); 
        }else{
            $where['Project.title'] = array('like',"%$key%");
            $where['member.username'] = array('like',"%$key%");
            $where['projectcategory.name'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = D('ProjectView')->where($where); 
        }        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $post = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('Project.id DESC')->select();
        $this->assign('model', $post);
        $this->assign('page',$show);
      
        $this->display();     
        }
    }
    /**
     * 添加新闻
     */
    public function add()
    {
        //默认显示添加表单
        if (!IS_POST) {
        	$model=M('projectcategory');
        	$projectcategory=$model->select();
        	$this->assign("category",$projectcategory);
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
             $model = D("Project");
//             $model->time = time();
//             $model->user_id = 1; 
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("添加成功", U('Project/index'));
                } else {
                    $this->error("添加失败");
                }
            }
        }
    }
    /**
     * 更新新闻信息
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update($id)
    {
        //默认显示添加表单
        if (!IS_POST) {
            $model = M('Project')->where('id='.$id)->find();
            $category=M('projectcategory');
            $projectcategory=$category->select();
            $this->assign("category",$projectcategory);
            $this->assign('post',$model);
            $this->display();
        }
        if (IS_POST) {
            $model = D("Project");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                if ($model->save()) {
                    $this->success("更新成功", U('Project/index'));
                } else {
                    $this->error("更新失败");
                }        
            }
        }
    }
    /**
     * 删除文章
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $model = M('Project');
        $result = $model->where("id=".$id)->delete();
        if($result){
            $this->success("删除成功", U('Project/index'));
        }else{
            $this->error("删除失败");
        }
    }
}
