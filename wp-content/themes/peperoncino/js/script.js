var $ = jQuery;


$(document).ready(function () {
	
	$('.page-filter__sorting').on('click', function (e) {
		var filter = $(this);
		console.log(1);
		if (filter.hasClass('active')) {
			filter.removeClass('active');
		} else {
			filter.addClass('active');
		}
	})

	$('.page-filter__sorting ul li a').on('click', function (e) {
		var listElement = $(this).text();
		$('.page-filter__sorting-type p').text(listElement);
	})

	$('.more-articles-btn').on('click', function (e) {
		e.preventDefault();
		console.log(1);
		
		if ($('.more-articles-btn').hasClass('btn-loading')) {
			return;
		}
		$.ajax({
			url: ajax_url,
			type: 'post',
			data: { whatever: 'done', prim: 'diisk' },
			dataType: 'json',
			beforeSend: function (xhr) {
				console.log(1);
				$('.more-articles-btn').addClass('btn-loading');
			}
		})
			.done(function (data) {
				console.log('done');
			})
			.always(function (data) {
				$('.more-articles-btn').removeClass('btn-loading');
			})

	})

	var clientsListArr = $('.our-clients__client');
	var divEl = $('.out-__client .criss-cross');
		if (clientsListArr.length < 5) {
			console.log('yep');
			divEl.css('display: none;');
		}
})

$(document).ready(function () {

	var searchingInput = $('.input-for-searching');
	var formElem = $('.search-form #close');
	formElem.removeClass('close-search-btn');
	searchingInput.on('input', function (e) {
		var $this = $(this);
		var val = $this.val();
		if (val.length < 1) {
			formElem.removeClass('close-search-btn');
		} else {
			formElem.addClass('close-search-btn');
		}	
	})

	formElem.on('click', function (e) {
		
		e.preventDefault();
		if (searchingInput.length > 0) {
			searchingInput.val('');

			formElem.removeClass('close-search-btn');
		}
	})



});




function getExchangeRate(valute) {
	$(valutesSettings[valute].selector).hide();
	$.ajax({
		method: 'get',
		type: 'html',
		url: valutesSettings[valute].url
	}).done(function(data) {
		var value = $(data).find('td[title="RUB"]').next().find('span').text()
		value = parseFloat(value).toFixed(2);
		if (value) {
			$(valutesSettings[valute].selector).css('display', 'inline-block');
			$(valutesSettings[valute].selector).find('span').html(value);
		}
	});
}