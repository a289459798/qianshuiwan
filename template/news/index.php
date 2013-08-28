{% extends "layout.html" %}
{% block content %}
<div class="content">
	<!-- path begin -->
	<div class="path"><span>您当前的位置：</span><a href="{{ __APP__ }}">首页</a> >> <a href="{{ __APP__ }}/news/{{ fenlei }}">{{ nav }}</a></div>
	<!-- path end -->
	<div class="mod_box">
		<div class="mod_tit clearfix"><h3>{{ nav }}</h3></div>
		<div class="mod_cont">
			<ul class="newsList">
				{% for new in list %}
				<li>
					<a href="{{ __URL__}}/{{ new.id }}">{{ new.title }}</a>
					<em>{{ new.dateline|date("Y-m-d") }}</em>
					<hr />
				</li>
				{% endfor %}
			</ul>
		</div>
	</div>	
</div>  

{% endblock %}