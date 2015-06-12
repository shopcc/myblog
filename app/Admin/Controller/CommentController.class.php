<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller{
	public function listAction(){
		$model_comment = D('comment');
		if(IS_POST){
			$this->ajaxReturn($model_comment->build_html_comment());
		}
		$this->assign('comment',$model_comment->get_comment_list());
		$this->display('comment_list');
	}

	public function upAction(){
		if(IS_AJAX && IS_POST){
			$ids = I('post.id');
			$type = I('post.type');
			$model_comment = D('comment');
			switch ($type) {
				case 'del':
					# code...
					if($model_comment->delete($ids)){
						$this->success('删除成功');
					}else{
						$this->error('删除失败');
					}
					break;
				case 'hide':
					# code...
					$where['id'] =array('in',$ids);
					if($model_comment->where($where)->save(array('status'=>'0'))){
						$this->success('修改成功');
					}else{
						$this->error('修改失败');
					}
					break;
				case 'pub':
					# code...
					$where['id'] =array('in',$ids);
					if($model_comment->where($where)->save(array('status'=>'1'))){
						$this->success('修改成功');
					}else{
						$this->error('修改失败');
					}
					break;
				default:
					# code...
					return false;
					break;
			}
		}
	}

	public function replyAction(){
		if(IS_POST && IS_AJAX){
			$model_comment = D('comment');
			$model_comment->create();
			if($model_comment->save()){
				$this->success('回复成功');
			}else{
				$this->error('回复失败');
			}
		}
	}
}