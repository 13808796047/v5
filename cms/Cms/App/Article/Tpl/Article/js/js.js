$(function(){
	$('form').validate({
	title:{
		rule:{
			required:true
		},
		error:{
			required:'标题不能为空'
		},
		message:'请输入中文',
		success:'&nbsp'

	}

	})
})