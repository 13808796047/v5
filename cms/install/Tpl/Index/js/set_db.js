$(function(){
	$('form').validate({
		'DB_HOST':{
			rule:{
				required:true
			},
			error:{
				required:'主机名不能为空'
			},
			message:'如果不知道怎么填,使用默认就行'

		}
	})
})