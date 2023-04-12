$(document).ready(function() {

    const hari = document.getElementById('hari');
    const jakarta = moment().utcOffset('+0700').format('MMMM Do YYYY');

    hari.textContent = jakarta;

    // Indonesia
    setInterval(function() {
        const now = moment().utcOffset('+0700');

        const secondIndo = $('.seconds');
        const minuteIndo = $('.minutes');
        const hourIndo = $('.hours');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);

    // Arab Saudi
    setInterval(function() {
        const now = moment().utcOffset('+0300');

        const secondIndo = $('.seconds-arab');
        const minuteIndo = $('.minutes-arab');
        const hourIndo = $('.hours-arab');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);

    // Turki
    setInterval(function() {
        const now = moment().utcOffset(moment().isDST() ? '+0300' : '+0200');

        const secondIndo = $('.seconds-turki');
        const minuteIndo = $('.minutes-turki');
        const hourIndo = $('.hours-turki');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);

    // Mesir
    setInterval(function() {
        const now = moment().utcOffset('+0200');

        const secondIndo = $('.seconds-mesir');
        const minuteIndo = $('.minutes-mesir');
        const hourIndo = $('.hours-mesir');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);

    // Uzbekistan
    setInterval(function() {
        const now = moment().utcOffset('+0500');

        const secondIndo = $('.seconds-uzbekistan');
        const minuteIndo = $('.minutes-uzbekistan');
        const hourIndo = $('.hours-uzbekistan');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);

    // China
    setInterval(function() {
        const now = moment().utcOffset('+0800');

        const secondIndo = $('.seconds-china');
        const minuteIndo = $('.minutes-china');
        const hourIndo = $('.hours-china');

        // Indonesia
        const secondsIndo = now.seconds() * 6;
        const minutesIndo = now.minutes() * 6 + secondsIndo / 60;
        const hoursIndo = now.hours() % 12 / 12 * 360 + minutesIndo / 12;

        secondIndo.css('transform', `rotate(${secondsIndo}deg)`);
        minuteIndo.css('transform', `rotate(${minutesIndo}deg)`);
        hourIndo.css('transform', `rotate(${hoursIndo}deg)`);
    }, 1000);
});
