$(function(){
    function timer(settings){
        var config = {
            endDate: '2017-12-25 17:30',
            timeZone: 'Europe/Dublin',
            days: $('#days'),
            hours: $('#hours'),
            minutes: $('#minutes'),
            seconds: $('#seconds'),
            newSubMessage: 'and should be back online in a few minutes...'
        };
        function prependZero(number){
            return number < 10 ? '0' + number : number;
        }
        $.extend(true, config, settings || {});
        var currentTime = moment();
        var endDate = moment.tz(config.endDate, config.timeZone);
        var diffTime = endDate.valueOf() - currentTime.valueOf();
        var duration = moment.duration(diffTime, 'milliseconds');
        var months = duration.months();
        var interval = 1000;
        var subMessage = $('.sub-message');
        var clock = $('.clock');
        if(diffTime < 0){
            endEvent(subMessage, config.newSubMessage, clock);
            return;
        }
        if(months > 0){
            $('#months').text(prependZero(months));
            $('.months').css('display', 'inline-block');
        }
        var intervalID = setInterval(function(){
            duration = moment.duration(duration - interval, 'milliseconds');
            var days = duration.days(),
                hours = duration.hours(),
                minutes = duration.minutes(),
                seconds = duration.seconds();
            days = duration.days();
            if(months <= 0 && hours  <= 0 && minutes <= 0 && seconds  <= 0 && days <= 0){
                clearInterval(intervalID);
                endEvent(subMessage, config.newSubMessage, clock);
                window.location.reload();
            }
            if(months === 0){
                $('.months').hide();
            }
            $('#months').text(prependZero(months));
            config.days.text(prependZero(days));
            config.hours.text(prependZero(hours));
            config.minutes.text(prependZero(minutes));
            config.seconds.text(prependZero(seconds));
        }, interval);
    }
    function endEvent($el, newText, hideEl){
        $el.text(newText);
        hideEl.hide();
    }
    timer();
});
