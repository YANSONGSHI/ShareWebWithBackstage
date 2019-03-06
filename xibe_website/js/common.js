//var myclick=function(v)
//	{
//		var	llis=document.getElementsByTagName("li");
//		for(var i=0;i<llis.length;i++)
//		{
//			var lli= llis[i];
//			if(lli==document.getElementById("tab"+v))
//			{
//				lli.style.backgroundColor="#FFFFFF";
//				
//			}else{
//				lli.style.backgroundColor="#57ADFD";
//			}
//		}
//		 var divs=document.getElementsByClassName("tab_css");
//		 for(var i=0;i<divs.length;i++)
//		 {
//		 	 var divv=divs[i];
//		 	 if(divv == document.getElementById("tab" + v + "_content")) {  
//                      divv.style.display = "block";  
//                  } else {  
//                      divv.style.display = "none";  
//                  }  
//		 }
//	}	

$(function(){
	$('.eee').click(function(){
		$('.tab_css').eq($(this).index()).show().siblings().hide();
		$(this).css('backgroundColor','#fff').siblings().css('backgroundColor','#57ADFD');
//		$(this).children('div').children('span').css('color','white').parent().parent().siblings().children('div').children('span').css('color','black');
		$(this).children('span').css('color','#3F4347').parent().siblings().children('span').css('color','#fff');
	})
})


$(function(){
	$('.a').click(function(){
		$('.pu_tab_css').eq($(this).index()).show().siblings().hide();
		$(this).css('borderBottom','4px solid #57ADFD').siblings().css('borderBottom','4px solid #fff');
//		$(this).children('div').children('span').css('color','white').parent().parent().siblings().children('div').children('span').css('color','black');
//		$(this).children('span').css('color','#3F4347').parent().siblings().children('span').css('color','#fff');
	})
})
