var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}
function showDivs(n) {
	
}

function showDivsOrg(n) {
	var i;
	var first, second, third;
	var imgs = document.getElementsByClassName("img_container");
	// var new_style = "inline";
	var new_style = "inline-block";
	// var new_style = "block";
	if (n > imgs.length - 1) {
		slideIndex = 0;
		first = imgs.length - 1;
		second = 0;
		third = 1;
	}
	else if (n == imgs.length - 1) {
		first = n-1;
		second = first + 1;
		third = 0;
	}
	else if (n < 1) {
		slideIndex = imgs.length;
		first = imgs.length - 3 ;
		second = imgs.length - 2 ;
		third = imgs.length - 1 ;
	}
	else {
		first = n-1;
		second = first + 1;
		third = first + 2;
	}
	for (i = 0; i < imgs.length; i++) {
		imgs[i].style.display = "none";
	}
	imgs[first].style.display = new_style;  
	imgs[second].style.display = new_style;  
	imgs[second].classList.add("selected");
	imgs[third].style.display = new_style;  
 
}
