<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>oneKey deploy</title>
    <link rel="">
    <style>
        body{
            background-image: url("timg.jpg");
            filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";
            -moz-background-size:100% 100%;
            background-size:100% 100%;
        }
        .all_line{
            text-align:center;
            margin:0 auto;
            margin-top: 300px;
            padding:0;
            clear:both;
        }
        #corplus {
            margin:0;
            cursor:pointer;
            padding:0;
            display:inline-block;
            _display:inline;
            *display:inline;
            zoom:1;
            width: 300px;
            height: 300px;
            background-color: #00a0e9;

        }
        #gates8 {
            margin:0;
            margin-left: 20px;
            padding:0;
            cursor:pointer;
            display:inline-block;
            _display:inline;
            *display:inline;
            zoom:1;
            width: 300px;
            height: 300px;
            background-color: #47a447;
        }

        p {
            margin-top: 120px;
            font-size: 30px;
        }


    </style>
</head>
<body>
<div class="all_line">
<div id="corplus" onclick="javascript:window.location.href='auto/deployCorplus.php'">
    <p>部署超级企业+V2</p>
</div>
<div id="gates8" onclick="javascript:window.location.href='auto/deployGates8.php'">
    <p>部署八号门</p>
</div>
</div>
</body>
</html>