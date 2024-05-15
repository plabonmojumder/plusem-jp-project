
//フェードアップ
$(function () {
	$('.anm').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(50).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anm300').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(300).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anm500').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(500).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anm800').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(800).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anm1000').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(1000).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anm1200').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(1200).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});

//フェードレフト
$(function () {
	$('.anmleft').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(100).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmleft300').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(300).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmleft500').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(500).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmleft800').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(800).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmleft1000').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(1000).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});

//フェードライト
$(function () {
	$('.anmright').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(100).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmright300').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(300).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmright500').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(500).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmright800').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(800).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});
$(function () {
	$('.anmright1000').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(1000).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});

//各ページタイトル
$(function () {
	$('.coverHead').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(100).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});

//サービスページ
//各ページタイトル
$(function () {
	$('#serviceContents ul li > div').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(100).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
	$('#serviceContents ul li > figure').on('inview', function (event, isInView) {
		if (isInView) {
			//表示領域に入った時
			$(this).delay(100).queue(function () {
				$(this).stop().addClass('active');
			});

		}
	});
});

//トップ各タイトル
$(function () {
	var delaySpeed = 50;
	$('#concept .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#concept .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).addClass('ttlAnm');
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#awards .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#awards .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#structure .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#structure .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#strength .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#strength .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#service .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#service .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#works .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#works .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#plan .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#plan .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#flow .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#flow .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#contactArea .ttl').on('inview', function (event, isInView) {
		if (isInView) {
			$("#contactArea .ttl .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});

//順番にフェードアップ系
$(function () {
	var delaySpeed = 20;
	$('#concept .con').on('inview', function (event, isInView) {
		if (isInView) {
			$("#concept .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(20).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 20).animate({ bottom: 0 }, 0);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 20;
	$('#awards .con').on('inview', function (event, isInView) {
		if (isInView) {
			$("#awards .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(20).queue(function () {
					$(this).stop(true, false)
						.animate({ opacity: 1 }, 20)
						.animate({ bottom: 0 }, 0);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#strength .con').on('inview', function (event, isInView) {
		if (isInView) {
			$("#strength .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(100).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#works .con').on('inview', function (event, isInView) {
		if (isInView) {
			$("#works .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(100).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 50;
	$('#plan .tabPlan.con').on('inview', function (event, isInView) {
		if (isInView) {
			$("#plan .tabPlan.con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 20).animate({ bottom: 0 }, 0);
				});
			});
		}
	});
});

$(function () {
	var delaySpeed = 50;
	$('.infoArea.con').on('inview', function (event, isInView) {
		if (isInView) {
			$(".infoArea.con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(50).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 20).animate({ bottom: 0 }, 0);
				});
			});
		}
	});
});
$(function () {
	var delaySpeed = 100;
	$('.fMenu .con').on('inview', function (event, isInView) {
		if (isInView) {
			$(".fMenu .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(40).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 100).animate({ bottom: 0 }, 100);
				});
			});
		}
	});
});

$(function () {
	var delaySpeed = 100;
	$('footer .bottom .con').on('inview', function (event, isInView) {
		if (isInView) {
			$("footer .bottom .con .elm").each(function (i) {
				$(this).delay(i * (delaySpeed)).delay(100).queue(function () {
					$(this).stop(true, false).animate({ opacity: 1 }, 30).animate({ bottom: 0 }, 30);
				});
			});
		}
	});
});
