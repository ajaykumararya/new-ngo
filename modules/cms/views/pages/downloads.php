<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">
                <?= ES('downloads_page_title') ?>
            </h2>
            <table class="table table-striped table-bordered my-data-table theme-table" data-bootstrap="true">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $this->SiteModel->get_contents('downloads');
                    if ($data->num_rows()):
                        $index = 1;
                        foreach ($data->result() as $row):
                            ?>
                            <tr data-id="<?= $row->id ?>">
                                <td style="width: 50px;">
                                    <?= $index++ ?>.
                                </td>
                                <td class="edit editable" data-column="field1">
                                    <?= $row->field1 ?>
                                </td>
                                <td style="width:200px">
                                    <a href="{base_url}upload/<?= $row->field2 ?>" target="_blank"
                                        class="theme-btn btn-style-one">
                                        <span class="btn-title">
                                            <i class="fa fa-download"></i> Download
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>