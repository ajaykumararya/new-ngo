<!-- <script src="{base_url}assets/jquery-1.12.4.min.js"></script> -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"
    integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.min.js"></script>

<script src="{base_url}assets/plugins/global/plugins.bundle.js"></script>
<script src="{base_url}assets/plugins/custom/datatables/datatables.bundle.js"></script>
<style>
    body,
    li,
    .title {
        font-family: 'Reem Kufi' !important;
    }

    @media print {
        body * {
            visibility: hidden;
        }

        #printableContent,
        #printableContent * {
            visibility: visible;
            font-size: 20px;
        }

        #printableContent {
            width: 98%;
            position: absolute;
            left: 2%;
            top: 2%
        }
    }
</style>
<script>
    const base_url = '<?= base_url() ?>';
    var AryaCMS = '0.1.3',
        ajax_url = base_url + 'ajax/';
    <?php
    foreach ($this->ki_theme->default_vars() as $var => $var_value) {
        ?>
        const <?= $var ?> = `<?= $var_value ?>`;
        <?php
    }
    ?>
    $(document).ready(function () {
        $('[data-control="select2"]').select2();
    })
</script>
<style>
    .form-label.required::after {
        content: '*';
        color: red;
        /* font-size: 20px; */
        font-weight: 600;
        padding: 5px;
    }

    .select2 {
        width: 100% !important;
    }

    .select2-container .select2-selection--single {
        height: 36px !important
    }

    .image_div_col label i {
        color: gray;
    }

    input[type=text]:focus,
    input[type=password]:focus,
    input[type=email]:focus,
    input[type=file]:focus,
    input[type=date]:focus,
    option:focus,
    input[type=number]:focus,
    textarea:focus,
    select:focus,
    .select2-container--below.select2-container--open,
    .select2-dropdown.select2-dropdown--below {
        border: 1px solid #DF2800 !important;
        box-shadow: 0px 0px 8px rgb(226, 176, 0) !important;
    }

    input[type=text],
    input[type=password],
    input[type=file],
    input[type=email],
    input[type=date],
    input[type=number],
    select,
    textarea {
        border: 1px solid rgb(226, 176, 0) !important;
    }

    .line-all {
        width: 101%;
        height: 2px;
        margin-bottom: 20px;
        margin-top: 8px;
        background: rgb(255, 93, 0);
        background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
    }

    #red {
        color: red
    }

    .image_div_col label {
        position: absolute;
        font-size: 40px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        right: 30px;
    }

    .image_div_col img {
        position: absolute;
        height: 90%;
        /* width: 100%; */
        top: 50%;
        transform: translateY(-50%);
        left: 30px;
    }

    .image_div_col {
        position: relative;
        /* border: 1px solid red; */
        border-radius: 10px;
    }

    .btn-grad {
        background: rgb(255, 93, 0);
        background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
    }

    .image_preview_div {
        border: 2px solid gray;
        height: 100% !important;
        border-radius: 10px;
        padding: 5px;
    }

    label {
        font-weight: bold;
        font-size: 14px;
        color: rgb(51, 51, 51) !important;
    }

    .btn-grad {
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
    }

    .bname span {
        font-weight: bold;
        font-size: 12px;
        margin-left: 8px;
    }

    .bg-theme,
    .nav-bar,
    .card1,
    .right-div-p,
    .left-div-p,
    .buttons button,
    .contact-footer {
        background: rgb(255, 93, 0);
        background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@5/bootstrap-4.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.js.iife.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.css" />


<script src="{base_url}assets/custom/custom.js"></script>