

<div class="col-md-12">
    <?php
    $web_title = ES('title');
    $web_logo = logo();
    $getPOsts = $this->db->order_by('timeid', 'DESC')->get('posts');
    if ($getPOsts->num_rows()) {
        foreach ($getPOsts->result() as $row) {
            ?>
            <form id="<?=$row->timeid?>" action="view-post" method="post">
                <input type="hidden" name="Event_id" value="<?=$row->timeid?>">
            </form>
            <form action="" method="POST" enctype="" id="">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <div class="d-flex flex-row align-items-center">
                            <img src="<?= $web_logo ?>" width="40" class="">
                            <div class="d-flex flex-column bname"> <span> <?= $web_title ?> </span> </div>

                        </div>
                        <div class="d-flex flex-row align-items-center ellipsis"> <small class="mr-2"><?=date('Y-m-d H:i:s',$row->timeid)?></small>
                            <i style="font-size:18px;cursor:pointer;" class="fa fa-share-alt share"
                                data-url="{base_url}view-post?Event_id=<?=$row->timeid?>" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="timeline_img" data-id="<?=$row->timeid?>">
                        <img src="{base_url}upload/<?=$row->image?>" data-id="<?=$row->timeid?>"
                            class="img-fluid">
                    </div>
                    <div class="mt-2 mb-3">
                        <div class="m-auto d-flex justify-content-between">
                            <h5 style="font-size:16px;" class="text-justify">
                                <?=$row->description?>
                            </h5>
                            <div>
                            </div>
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row muted-color ml-3"> <span>0 Comments</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="padding:2px 6px;font-size:13px;"
                                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Report
                                </button>
                                <div class="dropdown-menu" id="report_btn" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Spam</a>
                                    <a class="dropdown-item" href="#">Violence</a>
                                    <a class="dropdown-item" href="#">Terrorism</a>
                                    <a class="dropdown-item" href="#">Hate speech</a>
                                    <a class="dropdown-item" href="#">Something else</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="comments">

                            <div class="comments_div" id="comments_div">

                            </div>

                            <div class="comment-input mb-2 mt-2">
                                <input type="hidden" name="Event_id" class="Event_id" id="Event_id" data-eid="<?=$row->timeid?>"
                                    value="<?=$row->timeid?>">
                                <input type="hidden" name="Userid" id="Userid" value="uygbuiytubu gfty i">
                                <input type="text" style="font-size:12px;" class="form-control Comment"
                                    placeholder="Comment here" name="Comment" required="">
                                <button type="submit" class="btn btn-primary ml-2" data-id="<?=$row->timeid?>"
                                    id="comment-btn">Comment</button>
                                <div class="fonts"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
        }
    }
    ?>




</div>
