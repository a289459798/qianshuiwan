<?php
//前台首页
class indexMod extends commonMod
{
	//首页
	public function index()
	{	
		//最新公告
		//业主通讯
		$tongxun = $this->model->field('id, title, dateline')->table('news')->where('fenlei=3')->order('id desc')->limit(5)->select();
		//小区新闻
		$news = $this->model->field('id, title, dateline')->table('news')->where('fenlei=1')->order('id desc')->limit(5)->select();
		//业委会工作
		
		$this->assign('tongxun', $tongxun);
		$this->assign('news', $news);
		$this->display();
	}
}
?>