<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>获取java web资料</title>

    <!-- Bootstrap core CSS -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!--    cdn-->
    <!--    <link href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
            font-family: 微软雅黑, serif;
        }

        .form-signin {
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }

        .information {
            max-width: 800px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading {
            margin-bottom: 10px;
        }

        .form-signin .form-control {
            width: auto;
            float: left;
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="select"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin label {
            font-size: 23px;
            color: rgb(108, 125, 106);
        }
    </style>

    <!--邮箱自动补全插件的css-->
    <style type="text/css">
        .list-mail ul {
            border: 1px solid #aaa;
            padding: 6px;
            background-color: white;
        }

        .list-mail li {
            list-style-type: none;
            cursor: pointer;
            padding: 2px 3px;
            margin-bottom: 2px;
        }

        .list-mail .name {
            color: #982114;
        }

        .list-mail .hover {
            background: #fefacf;
        }

        .list-mail .select {
            background: #dedaae;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row information">
        <h2 class="form-signin-heading">资料：</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>资料</th>
                <th>链接</th>
                <th>密码</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ftp://10.81.40.222搬过来的网盘分享+课件汇总：</td>
                <td><a href="https://yunpan.cn/cPAnhxJ8RtCSf" target="_blank">https://yunpan.cn/cPAnhxJ8RtCSf </a></td>
                <td>（提取码：1314）</td>
            </tr>
            <tr>
                <td>传播智客视频：</td>
                <td><a href="http://pan.baidu.com/s/1miNantm" target="_blank">http://pan.baidu.com/s/1miNantm</a></td>
                <td>密码: vpn1</td>
            </tr>
            <tr>
                <td>其它视频：</td>
                <td><a href="http://pan.baidu.com/s/1dFLS8vB">http://pan.baidu.com/s/1dFLS8vB</a></td>
                <td>密码: 4rer</td>
            </tr>
            <tr>
                <td><a href="tencent://message/?uin=921977939&Site=&menu=yes" target="_blank">链接失效请Q我</a>';</td>
            </tr>
            </tbody>
        </table>
    </div>
    <form class="form-signin">
        <h2 class="form-signin-heading">订阅：</h2>
        <div class="row">
            <div class="col-lg-3">
                <label for="inputEmail" class="sr-only">Email address</label>
                <label for="no_class">邮箱:</label>
            </div>
            <div class="col-lg-9">
                <input style="width: 100%" type="email" id="inputEmail" class="form-control" placeholder="Email address"
                       required autofocus autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="no_class">学号:</label>
            </div>
            <div class="col-lg-9">
                <select style="width: 58%" class="form-control" id="no_class" name="no_class">
                    <option value="11055311">11055311</option>
                    <option value="11075081">11075081</option>
                    <option value="12055311">12055311</option>
                    <option value="12075081">12075081</option>
                    <option value="13055531" selected>13055531</option>
                </select>
                <select class="form-control" id="no_part1" name="no_part1">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <select class="form-control" id="no_part2" name="no_part2">
                    <option value="0">0</option>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>
        </div>

        <span class="btn btn-lg btn-primary btn-block" id="subscribe">订阅</span>
        <input type="text" style='display:none'/>
    </form>
</div> <!-- /container -->

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    消息
                </h4>
            </div>
            <div class="modal-body">
                按下 ESC 按钮退出。
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">确定
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--<script src="js/jquery-1.9.1.min.js"></script>-->
<script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<!--<script src="js/bootstrap.js"></script>-->
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--邮箱自动补全插件-->
<script type="text/javascript" src="js/automail.js"></script>
<script type="text/javascript">
    /**
     * 全局函数，显示对话框
     * @param text
     * @param callback
     */
    function showDialog(text, callback) {
        var mydialog = $('#myModal');
        mydialog.find('div.modal-body').text(text);
        mydialog.modal('show');
        mydialog.on('hide.bs.modal', function () {
            // 执行一些动作...
            callback && callback();
        })
    }

    function isMail(value) {
        //对电子邮件的验证
        var myreg =  /^(\w+[_|\.]?)*\w+@(\w+[_|\.]?)*\w+\.[a-zA-Z]{2,3}$/;
        return myreg.test(value);
    }

    $(document).ready(function () {
        var $inputEmail = $('#inputEmail');

        //邮箱自动补全
        $inputEmail.autoMail(
            {
                deValue: ""
            });

        var $subscribe = $('#subscribe');
        $subscribe.click(function () {
            if (!isMail($inputEmail.val())) {
                showDialog("先输入正确的邮箱哦！O(∩_∩)O~");
                return;
            }
            showDialog("发送邮件中……└(^o^)┘请稍稍微微再等一下下……");
            $.ajax({
                url: "subscribe.php",
                type: "POST",
                datatype: "json",
                timeout: 3000,
                data: {
                    sno: $('#no_class').val() + $('#no_part1').val() + $('#no_part2').val(),
                    email: $inputEmail.val()
                },
                success: function (rdata, textStatus) {
                    showDialog(rdata);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest + textStatus + errorThrown);
                }
            });
        });
    });
</script>
</body>
</html>
