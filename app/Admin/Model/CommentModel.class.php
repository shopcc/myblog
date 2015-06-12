<?php
namespace Admin\Model;
use Think\Model;

class CommentModel extends Model {

	/**
	 * 获取评论列表
	 * @return array() 所有评论
	 */
	public function get_comment_list(){
		$page = I('post.page',0,'intval');
		if(!isset($page)) $page =1;
		return $this->page($page,'10')->select();
	}

	public function getcount(){
		return $this->count();
	}

	public function build_html_comment(){
		$arr = $this->get_comment_list();
		$html = "<tr><th class='center' width='5%'>";
		$html .= "<label class='position-relative'>";
		$html .= "<input type='checkbox' class='ace'>";
		$html .= "<span class='lbl'></span></label></th>";
		$html .= "<th class='center' width='50%'>".L('comment_content')."</th>";								
		$html .= "<th class='center' width='20%'>".L('comment_user')."</th>";								
		$html .= "<th class='center hidden-480'>".L('from')."</th>";										
		$html .= "<th class='center'>操作</th></tr>";										
		foreach($arr as $v){
			$html .= "<tr><td class='center'>";
			$html .= "<label class='position-relative'>";
			$html .= "<input type='checkbox' name='comment_id[]' value='".$v['id']."' class='ace'>";
			$html .= "<span class='lbl'></span></label></td>";
			$html .= "<td>".$v['content']."</td>";							
			$html .= "<td>".$v['user_id']."</td>";						
			$html .= "<td>".$v['article_id']."</td>";						
			$html .= "<td><a href='javascript:' id='bootbox-regular' onclick='huifu(".$v['id'].")'>回复</a></td></tr>";															
										
		}
		return $html;								
	}
}