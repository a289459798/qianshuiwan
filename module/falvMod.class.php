<?php
class falvMod extends commonMod
{
	private $_fenlei = array(
		1 => 'a)国家对小区管理的法律法规',
		2 => 'b)浅水湾小区议事规则',
		3 => 'c)历次小区表决投票汇总名单',
	);
	public function index()
	{
		$list=$this->model->field('id,title,dateline,fenlei')->table('falv')->order('id desc')->select();
		$this->assign('list', $list);
		$this->display();
	}	
	
	//显示文章内容
	public function show()
	{
		$id=intval($_GET[0]);//文章id
		if(empty($id))
		{
			$this->error('参数传递有误');
		}
		$condition['id']=$id;
		$condition['status']=1;
    	$info=$this->table('article')->where($condition)->find();
		if(empty($info))
			$this->error('该文章不存在或者已被删除！');
			
		$info['title']=out($info['title']);
		$info['content']=html_out($info['content']);
		$info['create_time']=date('Y-m-d',$info['create_time']);
		
		//如果没有填写摘要，从内容提取前面200个字符作为摘要
		if(empty($info['description']))
		{
			$info['description']=msubstr(str_replace(array("\r\n","\r","\n"),'',strip_tags($info['content'])),0,200);
		}
		if(empty($info['keywords']))
		{
			$info['keywords']=$info['title'];
		}
		//更新文章浏览量
		$this->table('article')->data('views=views+1')->where($condition)->update();
		
		//获取分类名称
		unset($condition);
		$condition['id']=$info['cat_id'];
		$cat=$this->table('category')->where($condition)->find();
		$info['cat_name']=$cat['name'];
		
		$this->assign('info',$info);
		$this->assign('prev',$this->table('article')->field('id,title')->where('id<'.$id)->order('id desc')->limit(1)->find());
		$this->assign('next',$this->table('article')->field('id,title')->where('id>'.$id)->order('id asc')->limit(1)->find());
		$this->display();
	}
	
	//获取文章列表
	public function getList($condition="",$limit=11,$order="id desc")
	{
		return	$this->table('article')->field('id,title')->where($condition)->order($order)->limit($limit)->select();	
	}
}
?>