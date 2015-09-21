$(document).ready(function() {
    $.ajax({
        type: "get",
        url: "ems/news/portalNews",
        data: {
            "offset": 0,
            "pageCount": 5,
            "language": "0"
        },
        dataType: "json",
        success: function(data) {
            if (data.length != 0) {
                $("#news").empty();
                $.each(data,
                function(n, b) {
                    $("#news").prepend("<li><a class='news_title' href='ems/news/viewNews?id=" + b.id + "'>" + b.title + "</a><p class='news_date'>" + b.viewPostDate + "</p></li>");
                });
            }
        },
        beforeSend: function() {
            $("#news").html("正在读取新闻，请稍后......");
        }
    });
    $("#appleQuery").change(function(event) {
        var id = $("#appleQuery")[0].selectedIndex;
        if (id == 1) {
            window.location.href = "http://www.11183.com.cn/apple/query/";
        } else if (id == 2) {
            window.location.href = "http://www.11183.com.cn/apple/query/";
        } else if (id == 3) {
            window.location.href = "http://www.11183.com.cn/apple/query/hk/";
        }
    });

    $("#mailnum_input").blur(function(event) {
        if ($(this).val() == "") $(this).val("请输入邮件号")
    }).focus(function(event) {
        if ($(this).val() == '请输入邮件号') $(this).val("")
    });

    $(".input_userName").blur(function(event) {
        if ($(this).val() == "") $(this).val("请输入用户名")
    }).focus(function(event) {
        if ($(this).val() == '请输入用户名') $(this).val("")
    });

    $(".input_password").blur(function(event) {
        if ($(this).val() == "") $(this).val("请输入密码")
    }).focus(function(event) {
        if ($(this).val() == '请输入密码') $(this).val("")
    });

    $(".checkCode_input").blur(function(event) {
        if ($(this).val() == "") $(this).val("验证码") $("#vercod").hide();
    }).focus(function(event) {
        if ($(this).val() == "验证码") $(this).val("");
        if (!$("#vercod").is(":visible")) {
            //$("#checkcodeimg").remove();
            $("#vercod img").attr("src", "http://www.11183.com.cn/ec-web/register/rand.action?type=login&d=" + Math.random()) $("#vercod").show();
            var offset = $(this).offset();
            $("#vercod").offset({
                "top": offset.top + 23,
                "left": offset.left
            });
        }
    }).keydown(function() {
        event.keyCode == 13 && $("#user_login").click();
    }) $("#vernum_input").blur(function(event) {
        if ($(this).val() == "") $(this).val("验证码") $("#vercod").hide();
    }).focus(function(event) {
        if ($(this).val() == "验证码") $(this).val("");

        if (!$("#vercod").is(":visible")) {
            //$("#checkcodeimg").remove();
            $("#vercod img").attr("src", "ems/rand?" + Math.random()) $("#vercod").show();
            var offset = $(this).offset();
            $("#vercod").offset({
                "top": offset.top + 30,
                "left": offset.left
            });
        }
    }).keydown(function(event) {
        event.keyCode == 13 && $("#mailquery_btn").click();
    }) $("#vercod").find("span:first").click(function() {
        $(this).parent().parent().hide();
    })

    $("#mailquery_btn").click(function() {

        if ($("#mailnum_input").val() == "请输入邮件号") {
            alert("请输入邮件号。");
            return;
        }
        if ($("#vernum_input").val() == "验证码") {
            alert("请输入验证码。");
            return;
        }

        $("#singleform").submit();
    }) $("#user_login").click(function() {
        if ($("#loginid").val() == "请输入用户名") {
            alert("请输入用户名。");
            return;
        }
        if ($("#password").val() == "请输入密码") {
            alert("请输入密码。");
            return;
        }
        if ($("#checkCode").val() == "验证码") {
            alert("请输入验证码。");
            return;
        }
        $("#custormerform").submit();
    });
});

if (!window.slider) var slider = {};
slider.data = [{
    "id": "slide-img-6",
    "client": "",
    "desc": ""
},
{
    "id": "slide-img-1",
    "client": "",
    "desc": ""
},
{
    "id": "slide-img-2",
    "client": "",
    "desc": ""
},
{
    "id": "slide-img-3",
    "client": "",
    "desc": ""
},
{
    "id": "slide-img-4",
    "client": "",
    "desc": ""
},
{
    "id": "slide-img-5",
    "client": "",
    "desc": ""
}];

< !--二维码悬浮-->

function scrollx(p) {
    var d = document,
    dd = d.documentElement,
    db = d.body,
    w = window,
    o = d.getElementById(p.id),
    ie6 = /msie 6/i.test(navigator.userAgent),
    style,
    timer;
    if (o) {
        cssPub = ";position:" + (p.f && !ie6 ? 'fixed': 'absolute') + ";" + (p.t != undefined ? 'top:' + p.t + 'px;': 'bottom:0;');
        if (p.r != undefined && p.l == undefined) {
            o.style.cssText += cssPub + ('right:' + p.r + 'px;');
        } else {
            o.style.cssText += cssPub + ('margin-left:' + p.l + 'px;');
        }
        if (p.f && ie6) {
            cssTop = ';top:expression_r(documentElement.scrollTop +' + (p.t == undefined ? dd.clientHeight - o.offsetHeight: p.t) + '+ "px" );';
            cssRight = ';right:expression_r(documentElement.scrollright + ' + (p.r == undefined ? dd.clientWidth - o.offsetWidth: p.r) + ' + "px")';
            if (p.r != undefined && p.l == undefined) {
                o.style.cssText += cssRight + cssTop;
            } else {
                o.style.cssText += cssTop;
            }
            dd.style.cssText += ';background-image: url(about:blank);background-attachment:fixed;';
        } else {
            if (!p.f) {
                w.onresize = w.onscroll = function() {
                    clearInterval(timer);
                    timer = setInterval(function() {
                        //双选择为了修复chrome 下xhtml解析时dd.scrollTop为 0
                        var st = (dd.scrollTop || db.scrollTop),
                        c;
                        c = st - o.offsetTop + (p.t != undefined ? p.t: (w.innerHeight || dd.clientHeight) - o.offsetHeight);
                        if (c != 0) {
                            o.style.top = o.offsetTop + Math.ceil(Math.abs(c) / 10) * (c < 0 ? -1 : 1) + 'px';
                        } else {
                            clearInterval(timer);
                        }
                    },
                    10)
                }
            }
        }
    }
}