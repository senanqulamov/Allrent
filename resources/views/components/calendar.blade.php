<script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>
<link rel="stylesheet" href="{{ asset('/') }}homepage/lib/calendar/calendar_custom.css">

@if (Auth::user())
    <input type="hidden" name="auth_check" value="true">
@else
    <input type="hidden" name="auth_check" value="false">
@endif

<div class="inline-calendar">
    <input id="user_date" name="user_date" hidden />
</div>
<script>
    const auth_check = document.querySelector('input[name="auth_check"]').value;

    const DateTime = easepick.DateTime;
    var disabledDates = [
        '2023-03-02',
        ['2023-03-06', '2023-03-8'],
        '2023-03-18',
        '2023-03-19',
        '2023-04-01',
        '2023-04-11',
        '2023-04-21',
        '2023-04-24',
    ];

    disabledDates = disabledDates.map(d => {
        if (d instanceof Array) {
            const start = new DateTime(d[0], 'YYYY-MM-DD');
            const end = new DateTime(d[1], 'YYYY-MM-DD');

            return [start, end];
        }
        return new DateTime(d, 'YYYY-MM-DD');
    });

    const picker = new easepick.create({
        element: document.getElementById('user_date'),
        css: [
            'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
            '{{ asset('/') }}homepage/lib/calendar/calendar_custom.css',
            // 'https://easepick.com/css/demo_hotelcal.css',
        ],
        plugins: ['RangePlugin', 'LockPlugin'],
        RangePlugin: {
            tooltipNumber(num) {
                return num - 1;
            },
            locale: {
                one: 'Gecə',
                other: 'Gecə',
            },
        },
        inline: true,
        calendars: 2,
        grid: 2,
        readonly: false,
        // lang: 'ru',
        LockPlugin: {
            minDate: new Date(),
            minDays: 2,
            maxDays: 15,
            selectForward: true,
            inseparable: true,
            filter(date, picked) {
                if (picked.length === 1) {
                    const incl = date.isBefore(picked[0]) ? '[)' : '(]';
                    return !picked[0].isSame(date, 'day') && date.inArray(disabledDates, incl);
                }

                return date.inArray(disabledDates, '[)');
            },
        },
        setup(picker) {
            picker.on('select', (e) => {
                const {
                    view,
                    date,
                    target
                } = e.detail;

                if (auth_check == "true") {
                    ChangeDates(e);
                } else {
                    OpenModal_n("get-login-popup-reserv");
                }
            });
        },
    });

    function ChangeDates(e) {
        console.log(e);

        let start_date = new Date(e.detail.start);
        let end_date = new Date(e.detail.end);

        const days = (start_date, end_date) => {
            let diff = end_date.getTime() - start_date.getTime();
            let total_days = Math.ceil(diff / (1000 * 3600 * 24));
            return total_days;
        }

        // start date confs starts here
        var start_day = String(start_date.getDate()).padStart(2, '0');
        var start_month = String(start_date.getMonth()).padStart(2, '0');
        var start_year = String(start_date.getFullYear()).padStart(2, '0');

        start_date_div = document.querySelector('.date-inside-date-box-start');
        start_date_div_2 = document.querySelector('.date-inside-date-box-start-2');

        start_date_div.classList.add('with-date-inside-date-box');
        start_date_div.classList.remove('without-date-inside-date-box');
        start_date_div.innerText = start_day + "." + start_month + "." + start_year;
        start_date_div_2.innerHTML = start_day + `.` + start_month + `.` + start_year + `
            <span class="date-inside-date-box-start-count">` + days(start_date, end_date) + ` gecə</span>
        `;
        // start date confs ends here


        // end date confs starts here
        var end_day = String(end_date.getDate()).padStart(2, '0');
        var end_month = String(end_date.getMonth()).padStart(2, '0');
        var end_year = String(end_date.getFullYear()).padStart(2, '0');

        end_date_div = document.querySelector('.date-inside-date-box-end');
        end_date_div_2 = document.querySelector('.date-inside-date-box-end-2');

        end_date_div.classList.add('with-date-inside-date-box');
        end_date_div.classList.remove('without-date-inside-date-box');
        end_date_div.innerText = end_day + "." + end_month + "." + end_year;
        end_date_div_2.innerText = end_day + "." + end_month + "." + end_year;
        // end date confs starts here

        document.querySelector('.price-info-reservation-days-info-elm').innerHTML = days(start_date, end_date) +
            ` gecə üçün məbləğ`;
        document.querySelector('input[name="days"]').value = days(start_date, end_date);

        var total_price = parseInt(days(start_date, end_date)) * parseInt(document.querySelector(
            'input[name="home_price"]').value);

        var total_price_divs = document.querySelectorAll('.total-price-reservation');
        total_price_divs.forEach(element => {
            element.innerText = total_price;
        });

        document.querySelector('input[name="total_price"]').value = total_price;
    }
</script>

{{--
<script>
    const dates = [
        '2023-03-03',
        '2023-03-07',
        '2023-03-08',
        '2023-03-11',
        '2023-03-15',
        '2023-03-16',
        '2023-03-17',
        '2023-03-21',
    ]

    const prices = [
        '110',
        '120',
        '130',
        '140',
        '150',
        '160',
        '180',
        '170',
    ]

    const picker = new easepick.create({
        element: document.getElementById('user_date'),
        css: [
            'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
        ],

        setup(picker) {
            // generate random prices
            const randomInt = (min, max) => {
                return Math.floor(Math.random() * (max - min + 1) + min)
            }
            dates.forEach(x => {
                prices[x] = randomInt(50, 200);
            });

            // add price to day element
            picker.on('view', (evt) => {
                const {
                    view,
                    date,
                    target
                } = evt.detail;
                const d = date ? date.format('YYYY-MM-DD') : null;

                if (view === 'CalendarDay' && prices[d]) {
                    const span = target.querySelector('.day-price') || document.createElement('span');
                    span.className = 'day-price';
                    span.innerHTML = `$ ${prices[d]}`;
                    target.append(span);
                }
            })
        }
    });

    ---------------------------------

    const picker = new easepick.create({
        element: document.getElementById('user_date'),
        css: [
            'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
        ],
        plugins: ['RangePlugin'],
        lang: 'az-AZ',
        RangePlugin: {
            tooltipNumber(num) {
                return num - 1;
            },
            locale: {
                one: 'gecə',
                other: 'gün',
            },
        },
    });
</script> --}}
