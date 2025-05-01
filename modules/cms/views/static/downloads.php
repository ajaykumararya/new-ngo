<div class="row">
    <div class="col-md-5 mt-4">
        {form}
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">Upload Data</h3>
            </div>
            <div class="card-body">
                <div class="form-group mb-4">
                    <label for="title" class="form-label">Enter Title</label>
                    <input type="text" name="field1" placeholder="Enter Title" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="file" class="form-label">Select File</label>
                    <input type="file" id="file" name="field2" class="form-control" required>
                </div>
            </div>
            <div class="card-footer">
                {publish_button}
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-7 mt-4">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List Data</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" setting-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $this->SiteModel->get_contents($type);
                            if ($data->num_rows()):
                                $index = 1;
                                foreach ($data->result() as $row):
                                    ?>
                                    <tr data-id="<?= $row->id ?>">
                                        <td>
                                            <?= $index++ ?>.
                                        </td>
                                        <td class="edit editable" data-column="field1">
                                            <?= $row->field1 ?>
                                        </td>
                                        <td>
                                            <?= img('upload/' . $this->ki_theme->parse_string($row->field2), true, [
                                                'style' => 'width:100px',
                                            ]) ?>
                                        </td>
                                        <td>
                                            <?= base64_encode($row->id) ?>
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
    </div>
    <div class="col-md-5 mt-4">
        <?= $this->ki_theme->extra_setting_title_form('Section Setting', $type.'_page_title', 'Downloads') ?>

    </div>
</div>