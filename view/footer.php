		<ul class="nav pull-right scroll-top">
			<li>
				<a href="#" title="Scroll to top">
					<i class="glyphicon glyphicon-chevron-up"></i>
				</a>
			</li>
		</ul>

		<footer>
			Created by Maxwell Karp
		</footer>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/readmore.js"></script>
		<script>
			$('#info').readmore({
			moreLink: '<a href="#">More examples and options</a>',
			maxHeight: 390,
			afterToggle: function(trigger, element, expanded) {
			if(! expanded) { // The "Close" link was clicked
			$('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
			}
			}
			});
			$('article').readmore({maxHeight: 240});
		</script>
	</body>
</html>