<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{name} ID Card</title>
    <!-- <link href="{base_url}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{base_url}assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> -->
    {basic_header_link}
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
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
            font-size: 13px;
            line-height: 1.815;
        }

        #photo {
            z-index: 999;
            top: 19.4%;
            left: 14%;
        }


        .test {
            border: 1px solid red
        }

        .text-center {
            text-align: center;
        }



        .id-box {
            width: 90mm;
            height: 55mm;
        }

        .id-box img {
            width: 100%;
            height: 100%;
            position: relative;
        }
    </style>
</head>

<body class="page position-relative">
    <div class="id-box position-relative">
        <img src="{document_path}/id-card.jpg" class="position-relative" alt="Front Side">
    </div>
    <div class="position-absolute" id="photo">
        <img src="upload/{profile_img}" style="
            border:3px solid red;
            width: 120px;
            height: 110px;">
    </div>

    <p class="position-absolute text-center"
        style="top:29.5%;width:90mm;color:#034aaa;font-size:1.2rem;margin:0;font-weight:500!important">
        {name}</p>
    
    <p class="position-absolute text-center" style="top:30.3%;width:90mm;">{authority}</p>
    <p class="position-absolute" style="top:32.3%;left:22%"><?= date('Y', strtotime($validity_start)) . str_pad($id, 3, 0, STR_PAD_LEFT) ?></p>
    <p class="position-absolute" style="top:34.2%;left:22%">{mobile}</p>
    <p class="position-absolute" style="top:36%;left:22%;width:100px">{blood_group}</p>
    <p class="position-absolute" style="top:37.5%;left:22%;width:100px"><?=date('d-m-Y',strtotime($validity_start))?></p>
    <p class="position-absolute" style="top:39.2%;left:22%;width:100px"><?=date('d-m-Y',strtotime($validity_end))?></p>

</body>

</html>