{% extends "layout.html" %}
{% block content %}
<div class="content">
	<!-- path begin -->
	<div class="path"><span>您当前的位置：</span><a href="{{ __APP__ }}">首页</a> >> <a>业委会工作</a></div>
	<!-- path end -->
	<div class="mod_box">
		<div class="mod_tit clearfix"><h3>业委会工作</h3></div>
		<div class="mod_cont">
			<div class="intro">
				<img src="{{ __PUBLIC__ }}/pic/a.jpg" alt="" />
				{% autoescape false %} 
				{{ info.content }}
				{% endautoescape %} 
			</div>
			<dl class="candidate">
				<dt>换届候选人</dt>
				<dd class="clearfix">
					<span><img src="pic/2.jpg" alt="" />刘德华<br>生于香港新界，祖籍广东省江门市蓬江区，香港非官守太平绅士衔，香港特别行政区荣誉勋章佩戴者，中国残疾人福利基金会副理事长，亚洲新星导计划的发起人。</span>
					<span><img src="pic/2.jpg" alt="" />刘德华<br>生于香港新界，祖籍广东省江门市蓬江区，香港非官守太平绅士衔，香港特别行政区荣誉勋章佩戴者，中国残疾人福利基金会副理事长，亚洲新星导计划的发起人。</span>
					<span><img src="pic/2.jpg" alt="" />刘德华<br>生于香港新界，祖籍广东省江门市蓬江区，香港非官守太平绅士衔，香港特别行政区荣誉勋章佩戴者，中国残疾人福利基金会副理事长，亚洲新星导计划的发起人。</span>
					<span><img src="pic/2.jpg" alt="" />刘德华<br>生于香港新界，祖籍广东省江门市蓬江区，香港非官守太平绅士衔，香港特别行政区荣誉勋章佩戴者，中国残疾人福利基金会副理事长，亚洲新星导计划的发起人。</span>
				</dd>
			</dl>
		</div>
	</div>	
</div>  
{% endblock %}