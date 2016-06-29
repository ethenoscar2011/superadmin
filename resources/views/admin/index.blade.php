@extends('layouts.admin.main')

@section('title', '首页')

@section('csses')
<!-- Morris Charts CSS -->
<link href="{{ asset('/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">首页</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				事业
			</div>
			<div class="panel-body">
				<p>一个人事业上的成功，只有15%是由于他的专业技术，另外的85%要依依耐人际关系、外世技巧。软与硬是相对而言的。专业的技术是硬本领，善于处理人际关系的交际本领则是软本领。<br/>&nbsp;</p>
			</div>
			<div class="panel-footer">
				—— 卡耐基
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
	<div class="col-lg-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				励志
			</div>
			<div class="panel-body">
				<p>在任何一个成功的后面都有着十五年到二十年的生活经验，都有着丰富的生活经验，要是没有这些经验，任何才思敏捷恐怕也不会有，而且在这里，恐怕任何天才也都无济于事。<br/>&nbsp;</p>
			</div>
			<div class="panel-footer">
				—— 巴甫连柯
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
	<div class="col-lg-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				人生
			</div>
			<div class="panel-body">
				<p>一个人光溜溜地到这个世界上来，最后光溜溜地离开这个世界而去，彻底想起来，名利都是身外物，只有尽一个人的心力，使社会上的人多得他工作的裨益，是人生最愉快的事情。<br/>&nbsp;</p>
			</div>
			<div class="panel-footer">
				—— 邹韬奋
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				智慧
			</div>
			<div class="panel-body">
				<p>机会先把前额的头发给你捉而你不捉之后，就要把秃头给你捉了；或者至少它先把瓶子的把儿给你拿，如果你不拿，它就要把瓶子滚圆的身子给你，而那是很难捉住的。在开端起始时善用时机，再没有比这种智慧更大的了。 </p>
			</div>
			<div class="panel-footer">
				—— 培根 
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
	<div class="col-lg-4">
		<div class="panel panel-green">
			<div class="panel-heading">
				时间
			</div>
			<div class="panel-body">
				<p>时间正像一个趋炎附势的主人，对于一个临去的客人不过和他略微握握手，对于一个新来的客人，却伸开了两臂，飞也似的过去抱住他；欢迎是永远含笑的，告别总是带着叹息。<br/>&nbsp; </p>
			</div>
			<div class="panel-footer">
				—— 莎士比亚
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
	<div class="col-lg-4">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				爱情
			</div>
			<div class="panel-body">
				<p>你想把情敌撵走，我能够理解这种心情；你拼命保住自己的心上人，防止节外生枝——这是很自然的事！至于要打死他，就因为他赢得了爱情，这可真像小孩子，自己摔痛了，却去打那地皮。<br/>&nbsp; </p>
			</div>
			<div class="panel-footer">
				—— 冈察洛夫
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->
</div>
<!-- /.row -->

@endsection

@section('scripts')
<!-- Morris Charts JavaScript -->
<script src="{{ asset('/bower_components/raphael/raphael-min.js') }}"></script>
@endsection