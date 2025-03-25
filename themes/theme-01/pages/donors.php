<style type="text/css">
    element.style {}

    body {
        font-family: "Lato", sans-serif;
        background-color: #f2f2f2;
    }

    .search {
        margin: auto;
        display: block;
        justify-content: space-between;
        width: 300px;
    }

    .search input {
        border: 1px solid skyblue;
        border-radius: 50px;
        height: 35px;
        padding: 10px;
    }

    .select {
        margin: auto;
        display: block;
        justify-content: space-between;
        width: 280px;
    }
</style>
<Style>
    :root {
        --theme-color: #ff1756;
    }

    .card_donor {
        height: auto;
        width: 250px;
        background: linear-gradient(to bottom,
                var(--theme-color) 110px,
                #ffffff 110px);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(50, 50, 50, 0.1);
        padding: 50px 0;
        margin-left: 10px;

    }

    .card_donor * {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    .card_donor img {
        display: block;
        width: 100px;
        height: 100px;
        position: relative;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 0 8px #ffffff;
    }

    .card_donor h4 {
        color: var(--theme-color);
        font-size: 16px;
        margin: 15px 0 5px 0;
    }

    .card_donor h5 {
        color: #454545;
        font-weight: 400;
        font-size: 14px;
    }

    .card_donor .details {
        width: 80%;
        /*margin-top: 30px;*/
        display: flex;
        margin: auto;

        justify-content: space-between;
    }

    .details h2 {
        font-weight: 400;
    }

    .card_donor .details span {
        color: linear-gradient(267deg, rgba(232, 0, 0, 1) 0%, rgba(61, 0, 0, 1) 100%) !important;
        ;

    }

    .card_donor .buttons {
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
    }

    .card_donor .buttons button {
        width: 130px;
        padding: 8px 0;
        border-radius: 25px;
        border: 3px solid var(--theme-color);
    }

    .card_donor .buttons button:first-child {
        background-color: var(--theme-color);
        color: #ffffff;
    }

    .card_donor .buttons button:last-child {
        background-color: transparent;
        color: var(--theme-color);
    }

    .themes {
        background-color: #ffffff;
        box-shadow: 0 5px 15px rgba(50, 50, 50, 0.1);
        padding: 20px;
        margin-top: 40px;
        display: flex;
        justify-content: space-around;
    }

    .themes button {
        height: 25px;
        width: 25px;
        border: 3px solid #dddddd;
        outline: none;
        border-radius: 50%;
        cursor: pointer;
    }

    .btn1 {
        background-color: #3498db;
    }

    .btn2 {
        background-color: #ff1756;
    }

    .btn3 {
        background-color: #1cb65d;
    }

    .btn4 {
        background-color: #8e44ad;
    }

    .btn5 {
        background-color: #f4b932;
    }
</Style>

<div class="container">
    <div class="event-heading">
        <h2><b>Donors</b></h2>
        <div class="select">
            <input type="text" id="search" class="form-control" placeholder="Search Here">
        </div>
    </div>
    <br>
    <div id="table-row">
        <div class="container">
            <div class="row">
                <?php
                $this->load->model('donor_model');
                $get = $this->donor_model->list_front_donors();
                if ($get->num_rows()) {
                    foreach ($get->result() as $row) {
                        // pre($row);
                        ?>
                        <div class='column m-auto' style='gap:10px;'>
                            <div class="card card_donor">
                                <img src="{base_url}upload/<?= $row->image ?>" alt="profile_img">
                                <h4><?= $row->name ?></h4>

                                <div class="details">
                                    <div class="column">

                                        <span>Amount</span>
                                    </div>
                                    <div class="column">
                                        <span><?= $row->last_donate ?></span>
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="column">

                                        <span>City</span>
                                    </div>
                                    <div class="column">
                                        <span><?= $row->city ?></span>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="column">

                                        <span>Mobile</span>
                                    </div>
                                    <div class="column">
                                        <span><?= $row->mobile ?></span>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="column">

                                        <span>Mode</span>
                                    </div>
                                    <div class="column">
                                        <span><?= $row->mode ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
                // echo $this->db->last_query();
                
                ?>



            </div>
            <p id="noResults" style="display: none; color: red;font-size:26px">No results found</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {


        $('#search').on("input", function () {
            var searchText = $(this).val().toLowerCase(); // Input text को lowercase में बदलें
            var matchFound = false;
            $(".card_donor").each(function () {
                var cardTitle = $(this).find("h4").text().toLowerCase(); // Title को lowercase में बदलें

                if (cardTitle.includes(searchText)) {
                    $(this).show(); // Match होने पर दिखाएं
                    matchFound = true;
                } else {
                    $(this).hide(); // न मिलने पर छिपाएं
                }
            });
            if (!matchFound) {
                $("#noResults").show();
            } else {
                $("#noResults").hide();
            }
        });
    });
</script>