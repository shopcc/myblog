<?php
namespace Admin\Model;
use Think\Model;
/**
 * 分类模型
 */
class CategoryModel extends Model{

	protected $_validate = array(
		array('cate_name','require','分类名称不为空!','1','unique',3),
		array('order_sort','require','排序不为空!','1','regex',3)
		);
	protected $insertFields = array('cate_name','order_sort','is_nav','status');
	protected $updateFields = array('id','cate_name','order_sort','is_nav','status');
	/**
	 * 获取分类列表
	 * @param string $page
	 * @param string $pagesize
	 */
	public function get_cate_list($page='1',$pagesize='10'){
		$list = $this->page($page,$pagesize)->select();
		return $this->tree($list);
	}
	/**
	 * 获取所有分类信息
	 * @return array()
	 */
	public function get_all_list(){
		$list = $this->select();
		return $this->tree($list);
	}
	/**
	 * 递归分类树,将一级分类二级分类用树的形式展示出来
	 * @param unknown $arr
	 * @param string $pid
	 * @param string $level
	 * @return multitype:string
	 */
	public function tree($arr,$pid='0',$level='0'){
		static $tree = array();
		foreach($arr as $v){
			if($v['pid'] == $pid){
				$v['level'] = $level;
				$tree[] = $v;
				$this->tree($arr,$v['id'],$level+1);
			}
		}
		return $tree;
	}
	/**
	 * 获取一条分类记录的所有信息
	 * @param string $id
	 * @return boolean|\Think\mixed
	 */
	public function get_one_info($id){
		if(empty($id)){return false;}
		return $this->find($id);
	}
}