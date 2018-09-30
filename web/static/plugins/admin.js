$(function(){
	$('.sub-menu').on('click', function(event){
		var th = $(this);
		var text = th.text();
		var href = th.find('a').eq(0).data('url');
		var head = '<section class="content-header"><h1>'+ text +'<small></small></h1><ol class="breadcrumb"><li><a href="/"><i class="fa fa-dashboard"></i>首页</a></li><li class="active">'+ text +'</li></ol></section>';
		$.post(href, { _csrf : _csrf}, function(data) {
      		$('.content-wrapper').html(head + data);
    	});
	});
});