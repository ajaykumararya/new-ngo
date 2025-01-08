<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{name} Membership</title>
    <!-- <link href="{base_url}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{base_url}assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> -->
    {basic_header_link}
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

            font-weight: bold;
        }

        .text-capitlize {
            text-transform: capitalize;
        }

        .position-relative {
            position: relative;
        }

        .position-absolute {
            position: absolute;
        }

        .w-100 {
            width: 100%;
        }

        td,
        p {
            font-weight: bold;
            color: black;
            font-size: 14px;
            line-height: 1.815;
        }

        #photo {
            z-index: 999;
            top: 42%;
            left: 85%;
            width: 120px !important;
            height: 95px;
        }

        .test {
            border: 1px solid red
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body class="position-relative">
    <img id="back-image" class="position-relative" src="{document_path}/membership.jpg">
    <div class="position-absolute" id="photo">
        <img src="upload/{profile_img}" style="width:85px;height:106px;border:1px solid black">
    </div>
    <p class="position-absolute" style="top:34%;left:13%">{id}</p>
    <p class="position-absolute  text-center"
        style="z-index:999999999;top:46%;left:13%;width:73%;color:#034aaa;font-size:2rem;margin:0;font-weight:500!important">
        {name}</p>
    <p class="position-absolute  text-center"
        style="top:51%;left:13%;width:73%;color:red;font-size:2rem;margin:0;font-weight:500!important">
        M/S {firm_name}</p>

    <p class="position-absolute  text-center"
        style="line-height:1;top:59%;left:13%;width:75%;color:red;margin:0;font-weight:500!important;font-size:1.3rem">
        {address} -
        {pincode}</p>
    <p class="position-absolute" style="top:34%;left:85%">
        <?php
        if ($validity_start) {
            echo date('d-m-Y', strtotime($validity_start));
        }
        ?>
    </p>
    <p class="position-absolute" style="bottom:13%;left:25%">
        <?php
        if ($validity_end) {
            echo date('d-m-Y', strtotime($validity_end));
        }
        ?>
    </p>
</body>

</html>