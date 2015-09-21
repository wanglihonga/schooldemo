site_location = window.location.protocol+"//"+window.location.hostname;
if (window.location.port != "")
	site_location = site_location + ":" + window.location.port;

$(document).ready(function(){
		$("ul.topnav li div").hover(function() {
		  
	  		$(this).parent().css("background","#FF6600 url('"+site_location+"/images/images2.gif') no-repeat 55px 20px");
	  		$(this).find("span").css("color","white");	  
	        $(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click  
	  
	        $(this).parent().hover(function() {  
	        }, function(){  
	            $(this).parent().find("ul.subnav").slideUp('fast'); //When the mouse hovers out of the subnav, move it back up  
	        });  
	  
	        //Following events are applied to the trigger (Hover events for the trigger)  
	        },function(){
	        	$(this).parent().css("background","#"+$(this).parent().attr("itemid"));
	        	$(this).find("span").css("color","black");
	        });

		
		$("ul.list_menu_sub li div").click(function(){
			$("ul.list_menu_sub li div").each(function(){
				if ($(this))
					$(this).removeClass("list_menu_sub_select").addClass("list_menu_sub_nm")				
			});
			$(this).removeClass("list_menu_sub_nm").addClass("list_menu_sub_select")
		})

	
		$("ul.list_menu li div.list_menu_li_close").click(function(){						
			var e = $(this).parent().find("ul.list_menu_sub");
			if (e.is(":visible")){
				e.slideUp('fast');				
				$(this).removeClass("list_menu_li_open").addClass("list_menu_li_close");
			}
			else{
				var x = $(this);
				$("div.list_menu_li_open").each(function(){
					if (x!=$(this)){
						$(this).removeClass("list_menu_li_open").addClass("list_menu_li_close");
						if ($(this).parent().find("ul.list_menu_sub")){
							$(this).parent().find("ul.list_menu_sub").slideUp('fast')
						}
					}
				})
				e.slideDown('fast').show();
				$(this).removeClass("list_menu_li_close").addClass("list_menu_li_open");

			}
		});
		
		$(window).focus();
});

function selectMenu(indexA, indexB){

	$(document).ready(function(){
	var i = $("ul.list_menu > li").eq(indexA);
	i.find("div:first").removeClass("list_menu_li_close").addClass("list_menu_li_open");
	i.find("ul").show();
	if (indexB != 'undefined')
		i.find("li div").eq(indexB).removeClass("list_menu_sub_nm").addClass("list_menu_sub_select");
	})
}


var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "//hm.baidu.com/hm.js?da6f1445af3167cf70ef00845d0e716b";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();