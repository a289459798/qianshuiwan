<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/css/index.css" type="text/css" />
<script src="__PUBLIC__/js/menu.js" type="text/javascript"></script>
<title>网站管理后台</title>
<dl id="header">
<dt>&nbsp;</dt>
	<dd>
		<li>当前用户：admin&nbsp;&nbsp;</li>
		<li>所属用户组：管理员&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><a href="__ROOT__/../" target="_blank">[网站首页]</a>&nbsp;&nbsp;</li>
		<li><a href="__APP__/index/logout" target="_self">[退出系统]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	</dd>
</dl>
<div id="contents">
	<div class="left">
		
		<div class="menu_top"></div>
		<div class="menu" id="TabPage3">
			<ul id="TabPage2">
				<li id="left_tab1" class="Selected" onClick="javascript:border_left('TabPage2','left_tab1');" title="常用">常用</li>
				<li id="left_tab2" onClick="javascript:border_left('TabPage2','left_tab2');" title="小区新闻">小区</li>		
				<li id="left_tab3" onClick="javascript:border_left('TabPage2','left_tab3');" title="温馨提示">温馨</li>
				<li id="left_tab5" onClick="javascript:border_left('TabPage2','left_tab5');" title="法律法规">法律</li>
				<li id="left_tab4" onClick="javascript:border_left('TabPage2','left_tab4');" title="业委会介绍">业委会</li>
				<li id="left_tab7" onClick="javascript:border_left('TabPage2','left_tab7');" title="业主通讯">通讯</li>
			</ul>
			<div id="left_menu_cnt">
				
				<ul id="dleft_tab1">
					<li id="now21"><a href="__APP__/changyong/jianjie.html" onClick="go_cmdurl('小区简介',this)" target="content3" title="小区简介">小区简介</a></li>
					<li id="now21"><a href="__APP__/changyong/yeweihui.html" onClick="go_cmdurl('业委会简介',this)" target="content3" title="业委会简介">业委会简介</a></li>
					<li id="now21"><a href="__APP__/changyong/houxuanren.html" onClick="go_cmdurl('换届候选人',this)" target="content3" title="换届候选人">换届候选人</a></li>
				
				</ul>
				<ul id="dleft_tab2" style="display:none;">
					<li id="now21"><a href="__APP__/news/add-1.html" onClick="go_cmdurl('添加新闻',this)" target="content3" title="添加新闻">添加新闻</a></li>
					<li id="now23"><a href="__APP__/news/index-1.html" onClick="go_cmdurl('新闻列表',this)" target="content3" title="新闻列表">新闻列表</a></li>
				
				</ul>
				<ul id="dleft_tab3" style="display:none;">
				
					<li id="now21"><a href="__APP__/news/add-2.html" onClick="go_cmdurl('添加温馨提示',this)" target="content3" title="添加新闻">添加温馨提示</a></li>
					<li id="now23"><a href="__APP__/news/index-2.html" onClick="go_cmdurl('温馨提示列表',this)" target="content3" title="新闻列表">温馨提示列表</a></li>
				

				</ul>
				
				<ul id="dleft_tab4" style="display:none;">
				
					<li>开发中...</li>	
				</ul>
				<ul id="dleft_tab5" style="display:none;">
				
					<li id="now21"><a href="__APP__/falv/add.html" onClick="go_cmdurl('添加法律法规',this)" target="content3" title="添加法律法规">添加法律法规</a></li>
					<li id="now23"><a href="__APP__/falv/index.html" onClick="go_cmdurl('法律法规列表',this)" target="content3" title="法律法规列表">法律法规列表</a></li>
			
				</ul>
				<ul id="dleft_tab7" style="display:none;">
					<li id="now21"><a href="__APP__/news/add-3.html" onClick="go_cmdurl('添加业主通讯',this)" target="content3" title="添加新闻">添加业主通讯</a></li>
					<li id="now23"><a href="__APP__/news/index-3.html" onClick="go_cmdurl('业主通讯列表',this)" target="content3" title="新闻列表">业主通讯列表</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="menu_end"></div>
	</div>
	<div class="right">
	   <ul id="TabPage1">
			<li id="Tab1" class="Selected" onClick="javascript:switchTab('TabPage1','Tab1');" title="后台首页">后台首页</li>
			<!--<li id="Tab2" onClick="javascript:switchTab('TabPage1','Tab2');">标签</li>-->
			<li id="Tab3" onClick="javascript:switchTab('TabPage1','Tab3');"><span id="dnow99" style="display:block">发布新闻</span></li>
	   </ul>
		<div id="cnt">
		  <div id="dTab1" class="Box">
		  <iframe src="__URL__/welcome" name="content1" frameborder="0" scrolling="auto"></iframe>
		  </div>
		  <!--
			<div id="dTab2" class="HackBox Box">
			<iframe src="第二调用地址" name="content2" frameborder="0" scrolling="auto"></iframe>
			</div>
			-->
			<div id="dTab3" class="HackBox Box">
			<iframe src="__APP__/news/add-1.html" name="content3" id="content3" frameborder="0" scrolling="auto"></iframe>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>