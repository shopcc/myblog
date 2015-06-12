<?php
namespace Admin\Model;
use Think\Model;

/**
 * 文章模型
 * 包含文章的相关操作[列表,添加,删除,修改,查找]
 */
class ArticleModel extends Model{
	//表单合法性检测
	protected $insertFields = array('article_title','author','sort_id','content','add_time','keywords','description','small_content','thumb_img','click','a_hot');
	protected $updateFields = array('article_title','author','sort_id','content','add_time','keywords','description','small_content','thumb_img','click','a_hot');

	protected $_validate = array(
			array('article_title','require','文章标题不能为空',1,'regex',3),
			array('author','require','文章作者不能为空',1,'regex',3),
			array('add_time','require','文章日期不能为空',1,'regex',3),
			array('content','require','文章内容不能为空',1,'regex',3),
			array('small_content','require','文章简介不能为空',1,'regex',3),
		);

	/**
	 * 获取文章列表
	 * @param string $page
	 * @param string $pagesize
	 * @return \Think\mixed
	 */
	public function get_article_list($page ='1',$pagesize='8',$where=''){
		if($where != ''){
			$this->where($where);
		}
		$this->field('a.id,a.article_title,a.sort_id,a.click,a.add_time,a.a_hot,b.cate_name');
		$this->join('left join __CATEGORY__ as b on b.id = a.sort_id');
		return $this->table('__ARTICLE__')->alias('a')->page($page,$pagesize)->select();
	}

	/**
	 * 获取文章总记录
	 * @param array $where
	 */
	public function getcount($where =''){
		if(is_array($where)){
			$num = count($where);
			if($num >0){
				$this->where($where);
			}
		}
		return $this->table('__ARTICLE__')->alias('a')->count();
	}

	/**
	 * 根据文章ID获取文章信息
	 * @param integer $id
	 * @return void|\Think\mixed
	 */
	public function get_one($id){
		if(empty($id)) return ;
		 $this->field('id,article_title,author,sort_id,thumb_img,add_time,content,keywords,description,click,a_hot,small_content');
		 return $this->find($id);
	}
	/**
	 * ajax提交当前页面,获取当前页面的记录集并拼凑html
	 * @param integer $page
	 * @param integer $pagesize
	 * @param string $where
	 * @return string
	 */
	public function build_ajax_html($page,$pagesize,$where=''){
		$arr = $this->get_article_list($page,$pagesize,$where);
		$html = '';
		$html .= "<thead><tr>";
		$html .= "<th width='5%' class='center'><label class='position-relative'>";
		$html .= "<input type='checkbox' class='ace'><span class='lbl'></span></label></th>";
		$html .= "<th width='30%' class='center'>".L('article_title')."</th>";
		$html .= "<th width='15%' class='center'>".L('article_sort')."</th>";
		$html .= "<th class='center hidden-480'>".L('article_click')."</th>";
		$html .= "<th class='center'>";
		$html .= "<i class='ace-icon fa fa-clock-o bigger-110 hidden-480'></i>".L('article_add_time')."</th>";
		$html .= "<th class='center hidden-480'>".L('article_status')."</th>";
		$html .= "<th class='center'>操作</th></tr></thead>";
		$html .= "";
		foreach ($arr as $k => $v) {
			$html .= "<tr class=''><td class=center>";
			$html .= "<label class='position-relative'><input type='checkbox' name='aid[]' value=".$v['id']." class='ace'>";
			$html .= "<span class='lbl'></span></label></td>";
			$html .= "<td><a href='#'>".$v['article_title']."</a></td>";
			$html .= "<td>".$v['cate_name']."</td>";
			$html .= "<td class='hidden-480'>".$v['click']."</td>";
			$html .= "<td>".date('Y-m-d',$v['add_time'])."</td>";
			$html .= "<td class='hidden-480 center'>";
			if($v['a_hot'] == 1){
				$html .= "<span class='label label-sm label-warning'>".L('a_hot')."</span></td>";
			}else{
				$html .= "<span class='label label-sm label-warning'>".L('n_hot')."</span></td>";
			}
			$html .= "<td class='center'><div class='hidden-sm hidden-xs btn-group'>";
			$html .= "<a href=''><button class='btn btn-xs btn-success'>";
			$html .= "<i class='ace-icon fa fa-search bigger-120'></i></button></a>";
			$html .= "<a href='".U('article/edit',array('id'=>$v['id']))."'><button class='btn btn-xs btn-info'>";
			$html .= "<i class='ace-icon fa fa-pencil bigger-120'></i></button></a>";
			$html .= "<a href='javascript:'><button class='btn btn-xs btn-danger' onclick='del(this,{$v['id']})'>";
			$html .= "<i class='ace-icon fa fa-trash-o bigger-120'></i></button></a>";
			$html .= "</div></td></tr>";
		}
		$html .= "<tr><td><button id='article_del' onclick='all_del()' class='btn btn-white btn-primary btn-sm' disabled='disabled'>删除</button></td><td colspan='6'></td></tr>";

		return $html;

	}

}