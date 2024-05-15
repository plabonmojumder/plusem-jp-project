var showTotal = 6;
var numTotal = 6;

var show = showTotal; //譛蛻昴↓陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var num = numTotal;  //繧ゅ▲縺ｨ隕九ｋ縺ｧ陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var contents = '.areaWorks .tab-web ul li'; // 蟇ｾ雎｡縺ｮlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
if ($(contents + '.is-hidden').length == 0) {
    $('.areaWorks .tab-web .btnMore').addClass('is-hidden');
}
$('.areaWorks .tab-web .btnMore').on('click', function () {
  $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
  if ($(contents + '.is-hidden').length == 0) {
    $('.areaWorks .tab-web .btnMore').fadeOut();
  }
});


var show2 = showTotal; //譛蛻昴↓陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var num2 = numTotal;  //繧ゅ▲縺ｨ隕九ｋ縺ｧ陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var contents2 = '.areaWorks .tab-lp ul li'; // 蟇ｾ雎｡縺ｮlist
$(contents2 + ':nth-child(n + ' + (show2 + 1) + ')').addClass('is-hidden');
if ($(contents2 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-lp .btnMore').addClass('is-hidden');
}
$('.areaWorks .tab-lp .btnMore').on('click', function () {
  $(contents2 + '.is-hidden').slice(0, num2).removeClass('is-hidden');
  if ($(contents2 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-lp .btnMore').fadeOut();
  }
});

var show3 = showTotal; //譛蛻昴↓陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var num3 = numTotal;  //繧ゅ▲縺ｨ隕九ｋ縺ｧ陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var contents3 = '.areaWorks .tab-banner ul li'; // 蟇ｾ雎｡縺ｮlist
$(contents3 + ':nth-child(n + ' + (show3 + 1) + ')').addClass('is-hidden');
if ($(contents3 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-banner .btnMore').addClass('is-hidden');
}
$('.areaWorks .tab-banner .btnMore').on('click', function () {
  $(contents3 + '.is-hidden').slice(0, num3).removeClass('is-hidden');
  if ($(contents3 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-banner .btnMore').fadeOut();
  }
});

var show4 = showTotal; //譛蛻昴↓陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var num4 = numTotal;  //繧ゅ▲縺ｨ隕九ｋ縺ｧ陦ｨ遉ｺ縺吶ｋ莉ｶ謨ｰ
var contents4 = '.areaWorks .tab-dtp ul li'; // 蟇ｾ雎｡縺ｮlist
$(contents4 + ':nth-child(n + ' + (show4 + 1) + ')').addClass('is-hidden');
if ($(contents4 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-dtp .btnMore').addClass('is-hidden');
}
$('.areaWorks .tab-dtp .btnMore').on('click', function () {
  $(contents4 + '.is-hidden').slice(0, num4).removeClass('is-hidden');
  if ($(contents4 + '.is-hidden').length == 0) {
    $('.areaWorks .tab-dtp .btnMore').fadeOut();
  }
});