<div class="event-heading">
    <h2><b>POST</b></h2>
</div>
<div class="main">
    <div class="container">
        <div class="card border-primary mb-3 mx-auto" style="max-width: 60rem;">
            <div class="card-header bg-transparent border-primary">
                <p style="font-weight:bold;font-size:20px">{title}</p>
                <div class="d-flex justify-content-between">
                    <p style="font-size:16px;"><i class="fa fa-dot-circle-o"
                            aria-hidden="true"></i><?= date('Y-m-d H:i:s', $timeid) ?>
                    </p>
                    <p class="share" style="font-size:18px;cursor:pointer;"><i class="fa fa-share-alt"
                            aria-hidden="true"></i></p>
                </div>
            </div>
            <div class="card-body text-success">
                <img style="width:100%;height:auto;" src="{base_url}upload/{image}" alt="">
            </div>
            <div class="card-footer bg-transparent border-success">{description}
                हुए</div>
        </div>
    </div>
    <!-- ============================================== -->

    <div class="container">
        <h2 class="text-primary mt-2">Similar News</h2>
        <div class="row similar_news">
            <?php
            $similerPost = $this->db->where('timeid!=', $timeid)->limit(3)->order_by('timeid', 'DESC')->get('posts');
            if ($similerPost->num_rows()) {
                foreach ($similerPost->result() as $row) {

                    ?>
                    <div class="col-md-4 similar_link" data-id="<?=$row->timeid?>">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="display: flex;align-items:center;">
                                    <img style="width:100%" src="{base_url}upload/<?=$row->image?>"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p style="font-size:13px;" class="card-text">
                                            <?=$row->description?></p>
                                        <p class="card-text"><small class="text-muted"><?=date('Y-m-d H:i:s',$row->timeid)?></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="<?=$row->timeid?>" action="view-post" method="post">
                            <input type="hidden" name="Event_id" value="<?=$row->timeid?>">
                        </form>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- ============================================== -->

</div>