domain = window.Laravel.baseUrl;

let gFromDate;
let gToDate;
// INIT
(function ($, window, document, undefined) {
    'use strict';

    // helpers
    function _id(e) {
        return document.getElementById(e);
    }

    function _e(e) {
        return document.querySelector(e);
    }

    function _ee(e) {
        return document.querySelectorAll(e);
    }

    function _for(e, f) {
        var i, len = e.length;
        for (i = 0; i < len; i++) {
            f(e[i]);
        }
    }

    function log(e, before) {
        before = before || '';
        console.log(before + e);
    }

    function _hasClass(el, selector) {
        var className = " " + selector + " ";
        if ((" " + el.className + " ").replace(/[\n\t]/g, " ").indexOf(className) > -1) {
            return true;
        } else {
            return false;
        }
    }


    // user select/click action
    function userSelect(e, main, month, year) {

        var sel1 = _id('sel1'),
            sel2 = _id('sel2');

        var isDisabled = _hasClass(e, 'disabled');

        // first doesnt exist
        if (sel1 === null && !isDisabled) {
            e.id = 'sel1';
            e.classList.add('sel1');
            $(e).parent().prevAll('tr').find('td').addClass('disabled'); // ugly code
            $(e).prevAll('td').addClass('disabled'); // ugly code
            //log('select second option');

            // temp
            if (_id('out1') === null) {
                $('#cal').after('<i id="out1"></i>');
            }
            $('.from_date').text(e.innerText + '/' + month + '/' + year);
            gFromDate = month + '/' + e.innerText + '/' + year
            // $('.to_date').text(e.innerText + '-' + month + '-' + year);
        }

        // second doesnt exist
        else if (sel2 === null) { // prevent making #2 to #1
            if (isDisabled || e.id == 'sel1') return false;
            e.id = 'sel2';
            e.classList.add('sel2');

            // selection is complete
            var par = e.parentNode,			// tr
                parPar = par.parentNode;	// tbody (main)

            var td = parPar.querySelectorAll('td'),
                go = false,
                stop = false,
                i = 0,
                s1i = 0,
                s2i = 999;

            _for(td, function (e) {
                i++;

                if (e.id == 'sel1') {
                    go = 1;
                    s1i = i;
                }
                if (e.id == 'sel2') {
                    stop = 1;
                    s2i = i;
                }

                if (s1i < s2i && go) {
                    if (go) {
                        e.classList.add('range');
                    }
                    // temp
                    if (_id('out2') === null) {
                        $('#out1').after('<i id="out2"></i>');
                    }
                    $('.to_date').text(e.innerText + '/' + month + '/' + year);
                    gToDate = month + '/' + e.innerText + '/' + year;
                    $('.days').text((Date.parse(gToDate) - Date.parse(gFromDate)) / 86400000);
                    // _id('sel2text').innerHTML = e.innerText + '-' + month + '-' + year;
                }
                if (stop) {
                    go = 0;
                }

            })


        }

        // both selections exist
        else {
            var td = e.parentNode.parentNode.querySelectorAll('td');
            _for(td, function (e) {
                e.classList.remove('range', 'disabled');
            });

            sel1.removeAttribute('class');
            sel1.removeAttribute('id');
            if (sel2 !== null) {
                sel2.removeAttribute('class');
                sel2.removeAttribute('id');
            }

        } //end else/if

    } //userSelect(e);


    /*-----------------------------------------------------

        GET MONTH DATA

    -----------------------------------------------------*/

    function getMonth(year, month) {

        /* Expects month to be in 1-12 index based. */
        var monthInformation = function (year, month) {
            /* Create a date. Usually month in JS is 0-11 index based but here is a hack that can be used to calculate total days in a month */
            var date = new Date(year, month, 0);
            /* Get the total number of days in a month */
            this.totalDays = date.getDate();
            /* End day of month. Like Saturday is end of month etc. 0 means Sunday and 6 means Saturday */
            this.endDay = date.getDay();
            date.setDate(0);
            /* Start day of month. Like Saturday is start of month etc. 0 means Sunday and 6 means Saturday */
            this.startDay = date.getDay();
            /* Here we generate days for 42 cells of a Month */
            this.days = [];
            /* Here we calculate previous month dates for placeholders if starting day is not Sunday */
            var prevMonthDays = 0;
            if (this.startDay !== 0) {
                prevMonthDays = new Date(year, month - 1, 0).getDate() - this.startDay;
            }
            /* This is placeholder for next month. If month does not end on Saturday, placeholders for next days to fill other cells */
            var count = 0;
            // 42 = 7 columns * 6 rows. This is the standard number. Verify it with any standard Calendar
            for (var i = 0; i < 42; i++) {
                var day = {};
                /* So start day is not Sunday, so we can display previous month dates. For that below we identify previous month dates */
                if (i < this.startDay) {
                    day.date = (prevMonthDays = prevMonthDays + 1);
                    /* belong to next month dates. So, month does not end on Saturday. So here we get next month dates as placeholders */
                } else if (i > this.totalDays + (this.startDay - 1)) {
                    day.date = (count = count + 1);
                    /* belong to current month dates. */
                } else {
                    day.date = (i - this.startDay) + 1;
                }
                this.days[this.days.length] = day.date;
            }
        };
        // ini


        /* Usage below */
        var m = {};
        monthInformation.call(m, year, month);


        var days = m.days,
            startDay = m.startDay,
            endDay = m.endDay,
            totalDays = m.totalDays,
            len = days.length,
            key, str = '', i = 0,
            t = $('#t');

        //console.clear();
        //console.log(m);

        str += '<table>';
        str += '<thead><tr><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td><td>S</td></tr></thead><tbody>';

        for (key in days) {
            i++;

            if (i === 1) str += '<tr>';

            //if( key < startDay || key > totalDays ) { str += '<td class="notCurMonth"><i>'+days[key]+'</i></td>'; }
            //else { str += '<td><i>'+days[key]+'</i></td>'; }

            str += '<td><i>' + days[key] + '</i></td>';

            if (i === 7) {
                str += '</tr>';
                i = 0;
            }

        }
        str += '</tbody></table>';
        $('#cal').append(str);


    } // end getMonth()

    // months array (0 based index)
    var monthArr = [
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december'
    ]

    /* INIT */
    var date = new Date();
    var month = date.getMonth(),
        year = date.getFullYear();

    getMonth(month, year);
    $('#month').text(monthArr[month] + ' ' + year); // set month text

    function bind(month, year) {
        var tb = _id('cal');
        $(tb).on('click', 'td', function () {
            userSelect(this, null, month, year);
        });

        // next month
        $('#disp').on('click', 'div', function () {
            var t = this;
            if (t.id == 'next') {
                month++;
                if (month > 12) {
                    year++;
                    month = 1;
                } // switch year and reset month
            } else {
                month--;
                if (month < 1) {
                    year--;
                    month = 1;
                } // switch year and reset month
            }

            $('table').remove();
            getMonth(month, year);
            $('#month').text(monthArr[month - 1] + ' ' + year);
        })

    };

    bind(month, year);

    //get Lab Types AJAX
    // if (window.location.pathname.includes("booking/step-one")) {
    // 	console.log(12312321);
    // 	let domain = window.Laravel.baseUrl;
    // 	let href =  window.location.href;
    // 	$.ajax({
    // 		method: "POST",
    // 		url: domain + '/lab-reservation/getLabTypes',
    // 		headers: {
    // 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // 		},
    // 		data: {'path': href}
    // 	})
    // 		.done(function( response ) {
    // 			console.log(1111111111111111);
    // 			console.log(response);
    // 			if(response === "success") {
    // 				// location.href= "/lab-reservation/booking/step-two"
    // 			}
    // 		});
    // }

})(jQuery, window, document); // end() init


$('.lab_type_box').click(function (e) {
    $(this).addClass('active-lab-type').siblings().removeClass('active-lab-type');
    let currentValue = $(this).find('.lab_type_price h3').text().replace('$', '');
    let currentStr = $(this).find('.lab_type_str').text();
    // $('.total_balance').text( '$' + $('.days').text() * +currentValue );
    $('.lab_type_select_str').text(`${currentStr.slice(0, 50)}...`);
});

// console.log(new Date().getTime());


$('body').on('click', '.button_banner', function () {
    let start_date_string = $('.is-start-date').attr('data-time');
    let end_date_string = $('.is-end-date').attr('data-time');

    let start_date = moment(parseInt(start_date_string)).format('DD/MM/YYYY');
    let end_date = moment(parseInt(end_date_string)).format('DD/MM/YYYY');
    let full_or_part = $('#days_result').text().split(' ')[1];
    let lab_type_id = $('.active-lab-type .lab_type_str').attr('data-lab-type-id');
    let country = $('#step-one-select-country').find(":selected").val();


    if (start_date_string && end_date_string && full_or_part && lab_type_id && country) {
        // AJAX
        $.ajax({
            method: "POST",
            url: domain + "/lab-reservation/booking/step-one-ajax",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'start_date': start_date,
                'end_date': end_date,
                'lab_type_id': lab_type_id,
                'full_or_part': full_or_part,
                'country': country,
            }
        })
            .done(function (response) {
                if (response === "success") {
                    // console.log(123);
                    location.href = domain + "/lab-reservation/booking/step-two"

                }
            });

    }


}).on('click', '.clickable', function () {
    let currentActive = $(this);
    $(".clickable").not(currentActive).removeClass("active");
    currentActive.toggleClass("active");
}).on('click', '#step-three-payment-btn', function () {
    $('#step-three-payment-btn').attr("disabled", true);
    $('#step-three-payment-btn').css('opacity', '0.6');
    var asd = $.ajax({
    	method: "POST",
    	url: domain + "/lab-reservation/booking/payment",
    	headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
    });
    asd.done(function( response ) {
        $('.modal_fon').css({
            display: 'flex'
        });
    	console.log('done');
    });
    asd.fail(function( jqXHR, textStatus, errorName) {
    	console.log('fail');
        $('.modal_fon').css({
            display: 'flex'
        })
    	// $('#step-three-payment-btn').hide();
    	// $('.modal_fon').toggle();
    	// alert( "Request failed: " + errorName );
    });
});
