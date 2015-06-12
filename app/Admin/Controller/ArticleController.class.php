<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 文章管理控制器，包含文章的相关操作
 */
class ArticleController extends Controller {
	/**
	 * 文章列表
	 */
	public function listAction(){
		/*实例化模型*/
		$model_article = D('article');
		$page = I('post.page',0,'intval');
		$pagesize = 6;
		if(isset($page) && !empty($page)){
			$html = $model_article->build_ajax_html($page,$pagesize);
			$this->ajaxReturn($html);
		}else{

			//分页统计
			$total = $model_article->getcount();
			$data['v_page'] = ceil($total/$pagesize) > 1 ? '2' : '1';
			$data['totalpage'] = ceil($total/$pagesize) > 0 ? ceil($total/$pagesize) : '1';
			$data['startpage'] = '1';
			/*输出列表*/
			$list = $model_article->get_article_list();
			$this->assign('page',$data);
			$this->assign('article_list',$list);
			$this->display('article_list');
		}
	}

	/**
	 * 添加文章
	 */
	public function addAction(){
		if(!empty($_POST)){
			$model_article = D('article');
			if(!$model_article->create()){
				$this->error($model_article->getError());
			}
			$model_article->add_time = strtotime(I('post.add_time'));
			if($model_article->add()){
				$this->success('文章添加成功',U('article/list'),1);
			}else{
				$this->error('文章添加失败');
			}

		}else{
			$model_category = D('category');
			$list = $model_category->get_all_list();
			$this->assign('list',$list);
			$this->display('article_add');
		}

	}
	/**
	 * 编辑文章
	 * @param string $id
	 */
	public function editAction($id){
		$model_article = D('article');
		if(isset($_POST['id']) && !empty($_POST['id'])){
			if(!$model_article->create()){
				$this->error($model_article->getError());
			}
			$model_article->id = I('post.id');

			if(false !== $model_article->save()){
				$this->success('更新成功',U('article/list'),1);
			}else{
				$this->error('更新失败');
			}
		}else{
			$model_category = D('category');
			$list = $model_category->get_all_list();
			/* 分类列表 赋值到模板 */
			$this->assign('list',$list);
			$this->assign('article',$model_article->get_one($id));
			$this->display('article_edit');
		}
	}
	/**
	 * 删除文章
	 */
	public function delAction(){
		$id = I('post.aid');
		if(isset($id)){
			$model_article = D('article');
			if($model_article->delete($id)){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}
	}

}