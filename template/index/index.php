{% extends "layout.html" %}



{% block content %}
	<div class="indexGrid clearfix">
		<div class="mod_box">
			<div class="mod_tit clearfix"><h3>最新公告</h3><a href="#" class="more">更多>></a></div>
			<div class="mod_cont">
				<ul class="recArticleList">
					<li><a href="#">孩子叛逆冷漠？孩子弃学厌学？孩子上网...</a></li>
					<li><a href="#">家长的选择迎来我校招生的高峰</a></li>
					<li><a href="#">上级领导来指导工作</a></li>
					<li><a href="#">龙门香溪堡拓展训练</a></li>
					<li><a href="#">南方都市报3月6号报道我中心消息(原... </a></li>
				</ul>
			</div>
		</div>
		<div class="mod_box">
			<div class="mod_tit clearfix"><h3>业主通讯</h3><a href="#" class="more">更多>></a></div>
			<div class="mod_cont">
				<ul class="recArticleList">
					{% for v in tongxun %}
					<li><a href="#">·{{ v.title }}</a></li>
					{% endfor %}
				</ul>
			</div>
		</div>
		<div class="mod_box">
			<div class="mod_tit clearfix"><h3>小区新闻</h3><a href="#" class="more">更多>></a></div>
			<div class="mod_cont">
				<ul class="recArticleList">
					{% for v in news %}
					<li><a href="#">·{{ v.title }}</a></li>
					{% endfor %}
				</ul>
			</div>
		</div>
		<div class="mod_box">
			<div class="mod_tit clearfix"><h3>业委会工作</h3><a href="#" class="more">更多>></a></div>
			<div class="mod_cont">
				<ul class="recArticleList">
					<li><a href="#">孩子叛逆冷漠？孩子弃学厌学？孩子上网...</a></li>
					<li><a href="#">家长的选择迎来我校招生的高峰</a></li>
					<li><a href="#">上级领导来指导工作</a></li>
					<li><a href="#">龙门香溪堡拓展训练</a></li>
					<li><a href="#">南方都市报3月6号报道我中心消息(原... </a></li>
				</ul>
			</div>
		</div>
	</div>
{% endblock %}

{% block flink %}
	<div class="mod_box">
		<div class="mod_tit clearfix"><h3>友情链接</h3></div>
		<div class="mod_cont">
			<div class="friendLinks clearfix">
				<a href="#">财付通</a>
				<a href="#">松江区政府</a>
				<a href="#">东方网</a>
			</div>
		</div>
	</div>
{% endblock %}