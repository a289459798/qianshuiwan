<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__PUBLIC__/css/right2.css" type="text/css" rel="stylesheet" />
<meta content="MSHTML 6.00.6000.17063" name="GENERATOR" />
<title>发布</title>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/js/kindeditor-3.4.4/kindeditor.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/ke4/lang/zh_CN.js"></script>
<script type="text/javascript">
    var editor;
	KindEditor.ready(function(K) {
			editor = K.create('#content', {
					resizeType : 2,
					//uploadJson : '../php/upload_json.php' // 相对于当前页面的路径
			});
	});
	

function check_form(obj){
	if(obj.title.value=='')
	{
		alert('文章标题不能为空');
		obj.title.focus();
		return false;
	}
	
	return true;
}
function hide()
{
	if(document.getElementById('tr_keywords').style.display=="none")
	{
		document.getElementById('tr_keywords').style.display="";
		document.getElementById('tr_description').style.display="";
	}
	else
	{
		document.getElementById('tr_keywords').style.display="none";
		document.getElementById('tr_description').style.display="none";
	}

}

</script>
</head>
<body>
<form name="add" action="__URL__/add" method="post"  onSubmit="return check_form(document.add);" >
  <table cellpadding="0" cellspacing="1" class="table_form">
    <caption>
    发布{$fname}
    </caption>
    <tr>
      <th colspan="2"><div align="left"><strong><a href="__URL__/index-{$fenlei}.html" target="_self">返回{$fname}</a></strong></div></th>
    </tr>
    <tr>
      <th width="20%"><font color="red">*</font> <strong>标题</strong> <br /></th>
      <td><input type="text" name="title" id="title" value="" size="100" class="inputtitle"/>     </td>
    </tr>
    
  
  
    <tr>
      <th width="20%"> <font color="red">*</font> <strong>内容</strong> <br />        </th>
      <td><textarea name="content" id="content" style=" width:700px;height:300px;visibility:hidden;"></textarea></td>
    </tr>
    
    <tr>
      <td></td>
      <td><div align="center">
        <input type="hidden" name="do" value="yes">
        <input type="hidden" name="fenlei" value="{$fenlei}">
        <input type="submit" name="dosubmit" value="提交">
        &nbsp;</div></td>
    </tr>
  </table>
</form>
</body>
</html>
