{% extends "layout.html" %}
{% block content %}
<div class="content">
	<!-- path begin -->
	<div class="path"><span>您当前的位置：</span><a href="{{ __APP__ }}">首页</a> >> <a href="">法律法规</a></div>
	<!-- path end -->
	<div class="mod_box">
		<div class="mod_tit clearfix"><h3>法律法规</h3></div>
		<div class="mod_cont">
			<div class="lawsWrap">
				<h3>a)国家对小区管理的法律法规</h3>
				<ul class="recArticleList">
					{% for v in list if v.fenlei==1 %}
					<li>
						<a href="{{ __URL__}}/show-{{ v.id }}">{{ v.title }}</a>
					</li>
					{% endfor %}
					
				</ul>
				<h3>b)浅水湾小区议事规则</h3>
				<ul class="recArticleList">
					{% for v in list if v.fenlei==2 %}
					<li>
						<a href="{{ __URL__}}/show-{{ v.id }}">{{ v.title }}</a>
					</li>
					{% endfor %}
				</ul>
				<h3>c)历次小区表决投票汇总名单等</h3>
				<ul class="recArticleList">
					{% for v in list if v.fenlei==3 %}
					<li>
						<a href="{{ __URL__}}/show-{{ v.id }}">{{ v.title }}</a>
					</li>
					{% endfor %}
				</ul>
			</div>
		</div>
	</div>	
</div>  


{% endblock %}