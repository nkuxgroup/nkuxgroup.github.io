<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.2.0/dist/smooth-scroll.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
		header: '[data-scroll-header]'
	});

	$(document).ready(function () {
		$('.ux-demo button').click(function() {
			console.log("Clicked");
			
			var counter = parseInt($(this).next().children('b').html());
			console.log(counter);
			
			counter = counter + 1;
			console.log("new "+counter);
		});
	});
</script>
</body>

</html>