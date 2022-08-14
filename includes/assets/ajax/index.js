// 打开分类
function class_p(cids, pageno=0) {
	$.ajax({
		type: 'GET',
		url: 'index/ajax.php?search=class_p',
		data: {
			cids: cids,
			pageno: pageno + 1,
			count: 20
		},
		dataType: 'json',
		success: function(data) {
			layer.msg(data.msg, {
				icon: 1,
				time: 3000
			});
			window.location.href = data.url;
		},
		error: function(data) {
			layer.msg('打开失败了', {
				icon: 2
			});
		}
	});
}

function getQueryVariable(variable) {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

// 打开放大图
function enlarge(url, category, tag) {
	$.ajax({
		type: 'POST',
		url: 'index/ajax.php?search=enlarge',
		data: {
			url: url,
			category: category,
			tag: tag
		},
		dataType: 'json',
		success: function(data) {
			document.getElementById("enlargeurl").style.display = "block";
			layer.msg(data.msg, {
				icon: 1,
				time: 3000
			});
			document.getElementById("enlarge").style.display = "none";
			document.getElementById("kaptcha").src = data.url;
			document.getElementById("kaptcha1").innerHTML = data.category;
			document.getElementById("kaptcha2").innerHTML = data.tag;
		},
		error: function(data) {
			layer.msg('打开失败了', {
				icon: 2
			});
		}
	});
}

// 下载
function savepic(url) {
	var url = document.getElementById("kaptcha").src;
	layer.msg('data.msg', {
		icon: 1,
		time: 3000
	});
	window.location.href = url;
}
