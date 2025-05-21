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
    <img id="back-image" class="position-relative" src="{document_path}/certificate.jpg">
    <p class="position-absolute text-center" style="left:10%;width:80%;top:40%;font-size:2rem">{portal_name}</p>
    <p class="position-absolute text-center " style="left:46%;top:51.2%;width:280px">{portal_name}</p>
    <p class="position-absolute text-center " style="left:36.5%;top:66%;width:120px"><?=date('d-m-Y',strtotime($validity_start))?></p>
   
</body>

</html>