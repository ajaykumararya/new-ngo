<style>
        .youtube_div {
            display: block;
            margin: 0 !important;
            padding: 20px 0;
            align-items: center;
            ;
        }

        .row_youtube {
            display: flex;
            justify-content: space-evenly;
            padding: 20px;
        }

        .row_youtube .youtube_div2 {
            /* border: 1px solid green; */
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            margin-top: 10px;
        }

        .youtube_2 iframe {
            height: 300px !important;
            width: 500px !important;
            padding: 0 !important;
            display: block;
            margin: auto !important;
        }

        @media screen and (max-width: 750px) {
            .row_youtube {
                display: block;
                margin: auto !important;
            }

            .youtube_div2 {
                display: block;
                margin: 10px auto !important;
            }
        }

        @media screen and (max-width: 550px) {

            .youtube_2 iframe,
            iframe {
                height: auto;
                width: auto !important;
                padding: 0 !important;
                display: block;
                margin: auto !important;
            }

            .carousel-item {
                ;
                margin-top: 60px !important;
            }

            .margin_m {
                margin: 25px 0 0 0;
            }
        }
    </style>
    <div class="head_item2 mb-n4">
        <h1 class=''><span> Youtube Video </span></h1>
    </div>
    <div class=" youtube_div">
        <div class="row_youtube ">
            <div class="youtube_div2">
                <div class=" youtube_2 ">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/d5RYPYqjBg8"
                        title="संगठन की शक्ति #swarnimhimachal" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="youtube_div2">
                <div class=" youtube_2">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/qYlYOWWrE9I"
                        title="?सफल जीवन के सूत्र ?" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>


        </div>
    </div>