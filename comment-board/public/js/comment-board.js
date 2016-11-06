var App = (function() {
	var app = {
		name: 'Comment Board',
		url: window.location.origin + '/comment-board/'
	};

	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

	var init = function() {
		validateFormsToSend();
	};

	var validateFormsToSend = function() {
		var _forms = $('form');

		if (_forms.length) {
			_forms.on('submit', function(event) {
				event.preventDefault();

				var _this = $(this);
				var _data = _this.serializeArray();

				if (_data) {
					var _postData = {};
					var _errors = false;

					_this.addClass('loading');

					for (var _index in _data) {
						var _field = _data[_index];

						if (!_field.value) {
							_errors = true;
						} else {
							_postData[_field.name] = _field.value;
						}
					}

					if (_errors) {
						createAlert('danger', 'Please complete all form fields.');
					} else {
						var _request = $.ajax({
							url: _this.attr('action'),
							type: 'POST',
							data: _postData
						});

						_request.success(function() {
							_this.removeClass('loading').trigger('reset');
							createAlert('success', 'Your comment has successfully been added!');
							createComment(_postData.name, _postData.comment);
						});

						_request.fail(function() {
							_this.removeClass('loading');
							createAlert('danger', 'There was an error adding your comment. Please try again later.');
						});
					}
				}
			});
		}
	};

	var createAlert = function(type, text) {
		var _alertArea = $('.form-alerts');

		if (_alertArea.find('.alert').length) {
			_alertArea.find('.alert').remove();
		}

		$('<div />', {
			class: 'alert alert-' + type,
			text: text
		}).appendTo(_alertArea);
	}

	var createComment = function(name, text) {
		var _target, _template, _date, _now;

		_target = $('.comment-list').children('.col-md-12');
		_date = new Date();
		_now = {
			date: moment().format('D MMMM YYYY'),
			time: moment().format('h:mma')
		};

		_template = [
			'<div class="panel panel-default comment">',
				'<div class="panel-heading clearfix">',
					'<h3 class="panel-title comment-author pull-left">Posted by <strong>' + name + '</strong></h3>',
					'<h6 class="panel-title comment-date pull-right">Posted on ' + _now.date + ' at ' + _now.time + '</h6>',
				'</div>',
				'<div class="panel-body comment-text">' + text + '</div>',
			'</div>'
		];

		$('<div />', {
			class: 'col-md-6',
			html: _template.join('')
		}).insertAfter(_target);
	};

	return {
		init: init
	};
})().init();