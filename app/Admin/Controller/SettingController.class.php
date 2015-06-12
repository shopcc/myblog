<?php
namespace Admin\Controller;
use Think\Controller;

class SettingController extends Controller {
	/**
	 * 读取网站配置文件,并展示到页面
	 */
	public function indexAction(){
		$settings = read_config();
		$dir = "./Public/data/email_config";
		$email = read_config($dir);

		$this->assign('email',$email);
		$this->assign('settings',$settings);
		$this->display('setting');
	}

	/**
	 * 更新网站基础配置文件
	 *
	 */
	public function addAction(){
		$data['web_switch'] = I('post.web_switch');
		$data['web_title'] = I('post.web_title');
		$data['web_description'] = I('post.web_description');
		$data['web_url'] = I('post.web_url');
		$data['web_state'] = I('post.web_state');
		if(write_config($data)){
			$this->success('更新成功');
		}else{
			$this->error('更新失败');
		}
	}
	/**
	 * 更新邮件设置
	 */
	public function emailaddAction(){

		$data['email_switch'] = I('post.email_switch');
		$data['email_server'] = I('post.email_server');
		$data['email_port'] = I('post.email_port');
		$data['email_user_send'] = I('post.email_user_send');
		$data['email_user_pwd'] = I('post.email_user_pwd');
		$data['email_user_recive'] = I('post.email_user_recive');
		$dir = "./Public/data/email_config";
		if(write_config($data,$dir)){
			$this->success('更新成功');
		}else{
			$this->error($dir);
		}
	}
}