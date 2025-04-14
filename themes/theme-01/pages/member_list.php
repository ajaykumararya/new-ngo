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

    .column {
        float: left;
        width: 33.3%;

        margin-bottom: 16px;
        padding: 0 8px;

    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    .card {
        height: auto;
        width: 90%;
        margin: auto;
        box-shadow: 0 4px 10px 0 #b3b5b4;
        background: rgb(18, 55, 78);
        background: linear-gradient(130deg, rgba(18, 55, 78, 1) 43%, rgba(3, 68, 107, 1) 72%);
        color: #000;
    }

    .contain-card {
        padding: 0 16px;
        margin-bottom: 10px;
    }

    .title {
        color: grey;
    }

    .card img {
        border: 2px solid #fff;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        margin-top: 20px;
    }

    .container p {
        text-align: center;
        color: #fff;
        font-family: 'Molengo', sans-serif;
    }

    .container h4 {
        text-align: center;
        margin: 15px;
        color: #fff;
        font-family: 'Molengo', sans-serif;
    }
</style>
<div class="container">
    <div class="event-heading">
        <h2><b>Management Team</b></h2>
        <div class="select">
            <input type="text" id="search" class="form-control" placeholder="Search Here">
        </div>
    </div>
    <br>
    <div id="table-row">
        <div class="container">
            <div class="row">

                <div class="column">
                    <div class="card">
                        <img src="user_img/amit dwivedi00_0822023090638.jpg" class="center"
                            style="height: 100px; width: 100px;">
                        <div class="contain-card">
                            <h4>AMIT DWIVEDI</h4>
                            <p style="font-size: 20px">National President (National)</p>
                            <!-- <p style="font-size: 20px">9919515389</p> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="user_img/ei_1691169228932-removebg-preview_0852023064847.png" class="center"
                            style="height: 100px; width: 100px;">
                        <div class="contain-card">
                            <h4>Ram Ugrah Shukla</h4>
                            <p style="font-size: 20px">National Legal Advisor (National)</p>
                            <!-- <p style="font-size: 20px">9335924899</p> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="user_img/IMG_20230810_220922_08102023165347.png" class="center"
                            style="height: 100px; width: 100px;">
                        <div class="contain-card">
                            <h4>Mann Singh Thakur</h4>
                            <p style="font-size: 20px">National Vice President (Maharashtra)</p>
                            <!-- <p style="font-size: 20px">9860045761</p> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="user_img/IMG_20230810_224609_08102023171632.jpg" class="center"
                            style="height: 100px; width: 100px;">
                        <div class="contain-card">
                            <h4>Tulsi Ram Mishra</h4>
                            <p style="font-size: 20px">National Vice President (Punjab)</p>
                            <!-- <p style="font-size: 20px">9876100726</p> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="user_img/IMG-20230805-WA0010_0852023065257.jpg" class="center"
                            style="height: 100px; width: 100px;">
                        <div class="contain-card">
                            <h4>Santosh Kumar Yadav</h4>
                            <p style="font-size: 20px">National Secretary (National)</p>
                            <!-- <p style="font-size: 20px">9919515386</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>