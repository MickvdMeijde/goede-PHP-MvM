var updateClock = function() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('timer').innerHTML =
    "Current time: " + h + ":" + m + ":" + s;
    var t = setTimeout(updateClock, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i}; 
    return i;
}