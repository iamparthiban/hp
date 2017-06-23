// JavaScript source code

function slideSwitch() {

    var $active = $('#slideshow IMG.active');
    if ($active.length == 0) $active = $('#slideshow IMG:last');
    var $next = $active.next().length ? $active.next() : $('#slideshow IMG:first');
    $active.addClass('last-active');

    $next.css({ opacity: 0.0 })
        .addClass('active')
        .animate({ opacity: 1.0 }, 1000, function () {
            $active.removeClass('active last-active');
        });
}

function CheckRegisterR() {

    if (IsNumeric(document.RegFormn.phone.value)) {
    }

    else {
        alert("Phone number should be numeric.");
        document.RegFormn.phone.focus();
        document.RegFormn.phone.value = "";
        return false;
    }
    var phoneleng = document.RegFormn.phone.value.length;
    if (phoneleng < 10) {
        alert('Phone Number should be minimum 10 characters!');
        document.RegFormn.phone.focus();
        return false;
    }

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.RegFormn.email.value)) { }
    else {
        alert("Invalid E-mail Address! Please re-enter.");
        document.RegFormn.email.focus();

        return false;
    }

    return true;
}

function CheckRegisters1() {

    if (IsNumeric(document.RegForm.phone.value)) { }
    else {
        alert("Phone number should be numeric.");
        document.RegForm.phone.focus();
        document.RegForm.phone.value = "";
        return false;
    }
    var phoneleng = document.RegForm.phone.value.length;
    if (phoneleng < 10) {
        alert('Phone Number should be minimum 10 characters!');
        document.RegForm.phone.focus();
        return false;
    }

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.RegForm.email.value)) { }
    else {
        alert("Invalid E-mail Address! Please re-enter.");
        document.RegForm.email.focus();
        return false;
    }

    return true;
}

function IsNumeric(strString) {
    var strValidChars = "0123456789.-+ ";
    var strChar;
    var blnResult = true;

    if (strString.length == 0) return false;
    for (i = 0; i < strString.length && blnResult == true; i++) {
        strChar = strString.charAt(i);
        if (strValidChars.indexOf(strChar) == -1) {
            blnResult = false;
        }
    }
    return blnResult;
}
$(function () {
    setInterval("slideSwitch()", 3000);
});

$(document).ready(function () {
    $(".mobilemenu").click(function () {
        $(".menubar").slideToggle();
    });
});
$(function () {
    $("#3").lavaLamp({
        fx: "backout",
        speed: 700,
        click: function (event, menuItem) {
            return true;
        }
    });
});
$(document).ready(function () {
    $('.accordion').accordion();
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});