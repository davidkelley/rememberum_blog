define(['jquery', 'helpers/binder'], function($, Binder) {

	var container = $('.recommended');
	var pages = $('.pages .page');
	var dots = $('.dots .dot');

	var i = 0;

	var m = {
		dot: function() {
			//get dot number
			var n = $(this).data('dot');
			i = n;
			m.moveActive();
			m.moveTo(i);
		},

		right: function() {
			if (i + 1 < dots.length) {
				m.moveTo(++i);
				m.moveActive();
			}
		},

		left: function() {
			if (i - 1 >= 0) {
				m.moveTo(--i);
				m.moveActive();
			}
		},

		moveActive: function(cb) {
			$(dots).removeClass('active');
			$(dots[i]).addClass('active');
		},

		moveTo: function(n) {
			var l = -(n * 100);
			$(pages).css({left:l + '%'});
		}
	};

	var b = new Binder({
		'.dots .dot': {
			click: [ m.dot ]
		},
		'.dots .left': {
			click: [ m.left ]
		},
		'.dots .right': {
			click: [ m.right ]
		}
	});

	return m;
});