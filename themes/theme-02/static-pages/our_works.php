<div class="row">
    <div class="col-md-6">
        {form}
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">Add Work</h3>
            </div>
            <div class="card-body">
                <div class="form-group mb-4">
                    <label for="" class="form-label" required>Image</label>
                    <input type="file" required name="field2" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="" class="form-label required">Title</label>
                    <input type="text" name="field1" class="form-control" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="" class="form-label required">Description</label>
                    <textarea type="text" placeholder="Enter Description" name="field3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Button</label>
                    <input type="text" name="field4" class="form-control" placeholder="Enter Button Title">
                    <input type="text" name="field5" class="form-control" placeholder="Enter Button Link">
                </div>
            </div>
            <div class="card-footer">
                {save_button}
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 mb-5">
        <form action="" class="extra-setting" enctype="multipart/form-data" data-page_load="true">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">Setting</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="form-label">Section Title</label>
                        <textarea name="<?= $type ?>_title" class="form-control"
                            placeholder="Enter Title"><?= ES("{$type}_title", 'Career Point Institute of Skill Development') ?></textarea>
                    </div>                    
                    <div class="form-group">
                        <label for="title" class="form-label">Heading Description</label>
                        <textarea name="<?= $type ?>_heading_description" class="form-control"
                            placeholder="Enter Title"><?= ES("{$type}_heading_description", 'Our Works Description') ?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    {save_button}
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-5">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List Work(s)</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" setting-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Value</th>
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
                                        <td class="edit editable" data-column="field3">
                                            <?= $row->field3 ?>
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
</div>