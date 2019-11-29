$(function() {
	var b = new Date;
    var b = -b.getTimezoneOffset() / 60;
    var i = '2019/10/21 00:00:00';
    var config = {
        timeText: i, //倒计时时间
        timeZone: b, //时区
        style: "crystal", //显示的样式，可选值有flip,slide,metal,crystal
        color: "black", //显示的颜色，可选值white,black
        width: 5, //倒计时宽度
        textGroupSpace: 5, //天、时、分、秒之间间距
        textSpace: 0, //数字之间间距
        reflection: 0, //是否显示倒影
        reflectionOpacity: 10, //倒影透明度
        reflectionBlur: 0, //倒影模糊程度
        dayTextNumber: 3, //倒计时天数数字个数
        displayDay: 0, //是否显示天数
        displayHour: !0, //是否显示小时数
        displayMinute: !0, //是否显示分钟数
        displaySecond: !0, //是否显示秒数
        displayLabel: 0, //是否显示倒计时底部label
        onFinish: function() {}
    };
    $(".countdown").jCountdown(config);
});