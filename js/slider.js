$(document).ready(function(){
	var count=0;
	var images=['images/image1.jpg','images/image2.jpg','images/image3.jpeg','images/image4.jpg'];
	var image=$(".slider");

	image.css("background-image","url("+images[count]+")");

	setInterval(function(){
		image.fadeOut(500,function(){
			image.css("background-image","url("+images[count++]+")","background-position","fixed");
			image.fadeIn(500);
		});
		if(count ==images.length)
		{
			count=0
		}
	},5000);

});
	