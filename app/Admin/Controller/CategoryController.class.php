<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 分类控制器
 */
class CategoryController extends Controller {
	/**
	 * 分类列表
	 */
	public function listAction(){
		$model_cate = D('category');
		$list = $model_cate->get_cate_list();
		$this->assign('cate_list',$list);
		$this->display('cate_list');
	}
	/**
	 * 添加分类
	 */
	public function addAction(){
		$model_cate = D('category');

		if(IS_POST){
			if(!$model_cate->create()){
				$this->error($model_cate->getError());
			}
			if(!isset($_POST['is_nav'])) $model_cate->is_nav = 0;
			if(!isset($_POST['status'])) $model_cate->status = 0;
			$model_cate->add_time = time();
			if($model_cate->add()){
				$this->success('添加成功',U('category/list'));
				exit;
			}else{
				$this->error('添加失败');
				exit;
			}

		}
		//获取所有分类信息
		$cate = $model_cate->get_cate_list();
		$this->assign('list',$cate);
		$this->display('cate_add');
	}
	/**
	 * 更新分类信息
	 * @param  inter $id [分类ID]
	 * @return  boolen
	 */
	public function editAction($id){
		$model_cate = D('category');
		if(IS_POST){
			if($model_cate->create()){
			if(!isset($_POST['is_nav'])) $model_cate->is_nav = 0;
			if(!isset($_POST['status'])) $model_cate->status = 0;
			$model_cate->add_time = time();
				if(false !==$model_cate->save()){
					$this->success('更新成功',U('category/list'),1);
					exit;
				}else{
					$this->error('更新失败');
				}
			}
			$this->error($model_cate->getError());
		}
		$cate = $model_cate->get_one_info($id);
		$this->assign('cate',$cate);
		$this->display('cate_edit');
	}

	/**
	 * 删除分类
	 */
	public function delAction($id){
		if(IS_POST && IS_AJAX){
					$id = I('post.id');
					$model_cate = D('category');
					if($model_cate->delete($id)){
						$this->success('删除成功');
					}else{
						$this->error('删除失败');
					}
				}
	}

}