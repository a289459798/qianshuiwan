{% extends "layout.html" %}
{% block content %}
<div class="content">
	<!-- path begin -->
	<div class="path"><span>您当前的位置：</span><a href="{{ __APP__ }}">首页</a> >> <a>小区简介</a></div>
	<!-- path end -->
	<div class="mod_box">
		<div class="mod_tit clearfix"><h3>小区简介</h3></div>
		<div class="mod_cont">
			<div class="aboutCont">
				{% autoescape false %} 
				{{ info.content }}
				{% endautoescape %} 
			</div>
		</div>
	</div>	
</div>  
{% endblock %}