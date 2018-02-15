(function($) {
	$(document).ready(
	function(){
		$("a[href$='#disqus_thread']").css("display", "none");
		$('.navbar-default .navbar-collapse > ul').removeClass('nav-pills');
        $('.parent > a').addClass('dropdown-toggle');
		$('.parent > a').attr('data-toggle', 'dropdown');
        $('.parent > a').append('<span class="caret"></span>');
        $('.parent > ul').addClass('dropdown-menu');
        $('.nav-child .parent').removeClass('dropdown');
        $('.nav-child .parent').addClass('dropdown-submenu');
        $('.dropdown-submenu > a').removeAttr('class');
        $('.dropdown-submenu > a').removeAttr('data-toggle', 'dropdown');
        $('.dropdown-submenu > a > span').remove();
        $('.navbar-ex1-collapse > ul').addClass('nav navbar-nav');
        $('.parent').addClass('dropdown');
        $('.parent > ul').addClass('dropdown-menu');
        $('.dropdown-submenu > ul').addClass('dropdown-menu');
        $('.nav-child .parent').addClass('dropdown-submenu');   
		$(".parent").hover(
		function (){
			$(this).addClass("open");
		},
		function (){
			$(this).removeClass("open");
		});
		$(".parent").siblings("ul").hover(
		function (){
			$(this).addClass("open");
		},
		function (){
			$(this).removeClass("open");
		});
		$(".navbar-toggle").toggle(
		  function() {
			$(".navbar-ex1-collapse").css("display", "block");
		  }, function() {
			$(".navbar-ex1-collapse").css("display", "none");
		  });
		  $(".product-wrapper .dropdown-toggle").hover(
		  function() {
			$(this).siblings("ul").css("display", "block");
		  }, function() {
			$(this).siblings("ul").css("display", "none");
		  });
		  $(".product-wrapper .dropdown-menu").hover(
		  function() {
			$(this).css("display", "block");
		  }, function() {
			$(this).css("display", "none");
		  });
		
		// Buscador fixed de la derecha
		$('.icon-search').hover(
			function() {
				$("#mod-search-searchword").css("visibility", "visible");
			},
			function() {
			   $("#mod-search-searchword").css("visibility", "hidden");
			} );
			$('#mod-search-searchword').hover(
			function() {
				$("#mod-search-searchword").css("visibility", "visible");
			},
			function() {
			   $("#mod-search-searchword").css("visibility", "hidden");
			} );
			
			$('#mod-search-searchword').blur(
			function() {
				$("#mod-search-searchword").css("visibility", "visible");
			},
			function() {
			   $("#mod-search-searchword").css("visibility", "hidden");
			} );
		});
		$(".contact-form label").hover(
		function (){
			$(this).css("display", "block");
		});
})(jQuery);
