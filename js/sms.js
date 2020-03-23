function prepareSMS(reason) {
    var fn = $('#full-name').val();
    if (fn.length <= 5) {
        alert(messages.no_fn).
        $('#full-name').focus(function() {});
        return;
    }
    if (fn.indexOf(' ') == -1) {
        alert(messages.no_fn_space).
        $('#full-name').focus(function() {});
        return;
    }
    var ad = $('#address').val();
    if (ad.length <= 5) {
        alert(messages.no_ad).
        $('#address').focus(function() {});
        return;
    }
    setCookie('fn', fn);
    setCookie('ad', ad);
    location.href = 'sms:13033&body=' + reason + '%20' + fn + '%20' + ad;
}