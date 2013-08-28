<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__PUBLIC__/css/right2.css" type="text/css" rel="stylesheet" />
<meta content="MSHTML 6.00.6000.17063" name="GENERATOR" />
<title>{$fname}管理</title>
</head>
<body>
<table  cellpadding="0" cellspacing="1" class="table_list" width="100%">
  <caption>
  	{$fname}
  </caption>
  <tbody>
    <tr>
      <th colspan="7"><div align="left">&nbsp;&nbsp;<a href="__URL__/add-{$fenlei}.html" target="_self">发布{$fname}</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="__URL__/index-{$fenlei}.html" target="_self">所有{$fname}</a></div></th>
    </tr>
	   <tr>
		<td colspan="7">
		<div align="center">
		<form action="__URL__/search" method="get" target="_self">
			关键字： <input name="keyword" type="text" size="40" />
			<input name="do" type="hidden" value="yes" />
			<input name="fenlei" type="hidden" value="{$fenlei}" />
			<input type="submit"  value="搜索" />
		</form>
		</div></td>
    </tr>
    <tr>
      <th width="5%">ID</th>
      <th width="35%">标题</th>
      <th width="6%">浏览量</th>
      <th width="13%">发布时间</th>
      <th width="22%">管理操作</th>
    </tr>
      <?php if(!empty($list)) foreach($list as $vo){?>
      <tr>
        <td class="align_c">{$vo['id']}</td>
        <td><a target="_blank"><span class="">{$vo['title']}</span></a></td>
        <td class="align_c">{$vo['onclick']}</td>
        <td class="align_c"><?php $vo['dateline']=date('Y-m-d H:i:s',$vo['dateline']);?>{$vo['dateline']}</td>
        <td class="align_c">
		<a  href="__URL__/edit-{$vo['id']}-{$fenlei}.html" target="_self">修改</a> 
	    <a  href="__URL__/del-{$vo['id']}-{$fenlei}.html" target="_self" onClick="return confirm('确定要删除吗？')">删除</a></td>
      </tr>
    <?php }?>
	<tr>
	<td colspan="7"><div align="center">{$page}</div></td>
	</tr>
  </tbody>
</table>
</body>
</html>
