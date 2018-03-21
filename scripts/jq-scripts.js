/* $(document).ready(function(){
	var x, y, h, w;
	$(".featured-items a img").click(function()
	{
		var clicks = $(this).data("clicks");
		h=this.height, w=this.width;
		// alert("c:" + clicks + "\nw: " + w + "\nh: " + h + "\nx: " + x + "\ny" + y)
		if (clicks) {
			$(this).animate({height: y, width: x, opacity: "1"}, "slow");
		}
		else {
			x = w;
			y = h;
			$(this).animate({height: "300px", width: "300px", opacity: "0.8"}, "slow");
		}
		$(this).data("clicks", !clicks);
	});
}); */

$(document).ready(function(){
	var menuVis = false; //variable to determine if menu is open
	$("#nav .menu_wrapper").click(function()
	{
		//open of close menu if menu button is clicked
		$("#nav .nav_table").toggle("fast", "linear");
		$("#nav .menu_label").toggle("fast", "linear");
		// $("#nav .menu_wrapper").css(
		menuVis = true;
	});
	
	$("#nav .menu_wrapper").click(function(event){
		event.stopPropagation();
	});
	$('html').click(function() {
		if(menuVis) {
			$("#nav .nav_table").toggle("fast", "linear");
			$("#nav .menu_label").toggle("fast", "linear");
			menuVis = false;
		};
	});
}); 

