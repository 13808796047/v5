$(function(){
	$('form').validate({
	cname:{
		rule:{
			required:true
		},
		error:{
			required:'请输入栏目名称'
		},
		message:'栏目名称请输入中文',
		success:'&nbsp'

	},
	keywords:{
		rule:{
			required:true
		},
		error:{
			required:'关键字不能为空'
		},
		
		success:'&nbsp'

	},
	description:{
		rule:{
			required:true
		},
		error:{
			required:'栏目描述不能为空'
		},
		
		success:'&nbsp'

	}

	})
})