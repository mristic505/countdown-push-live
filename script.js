jQuery(document).ready(function($){

	if($('body').hasClass('coming_soon')) {

		var countDownDate = new Date($('#counter').attr('data-end-date')).getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		    // Get todays date and time
		    var now = new Date().getTime();
		    
		    // Find the distance between now an the count down date
		    var distance = countDownDate - now;
		    
		    // Time calculations for days, hours, minutes and seconds
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		    // Output the result in an element with id="counter"
		    document.getElementById("counter").innerHTML = '<div class="blue_box"><div class="time_label">'+hours + "</div><span>HOURS</span></div>"
		    + '<div class="blue_box"><div class="time_label">'+minutes + "</div><span>MINUTES</span></div>" + '<div class="blue_box"><div class="time_label">'+seconds + "</div><span>SECONDS</span></div>";
	    
		});

	}
});