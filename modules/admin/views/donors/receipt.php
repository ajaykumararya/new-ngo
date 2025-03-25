<?php
$this->load->model('donor_model');

$getDonor = $this->donor_model->get_via_id($donor);
if ($getDonor->num_rows()) {
    $row = $getDonor->row();
    $donorName = $row->name;
    $list = $this->db->get_where('donor_receipts', [
        'donor_id' => $row->id
    ]);

    ?>



    <div class="row">
        <div class="col-md-12">
            <form action="" id="add-donor-receipt">
                <input type="hidden" name="token" value="<?= $this->token->encode(['donor_id' => $row->id]) ?>">
                <div class="card mb-3 border-white">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-plus"></i> Add Receipt of <b class="text-primary"><?= $donorName ?></b>
                        </h3>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label required">Donation Amount</label>

                                <div class="input-group mb-2">
                                    <input  type="number" name="amount" class="form-control" placeholder="Enter Donation Amount" autocomplete="off">
                                    <span class="input-group-text p-0">
                                        <select name="mode" class="form-control" style="    width: 132px;">
                                            <option value="Cash">Cash</option>
                                            <option value="Online">Online</option>
                                        </select>    
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label required">Donation Date</label>
                                <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label required">Receipt No</label>
                                <input type="text" name="receipt_no" placeholder="Enter Receipt No." class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-primary">
                                <div class="card-body text-center p-0">
                                    <table class="table table-bordered table-striped border-primary">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">Donor Details</th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td><?= $row->name ?></td>
                                            </tr>

                                            <tr>
                                                <th>Mobile</th>
                                                <td><?= $row->mobile ?></td>
                                            </tr>

                                            <tr>
                                                <th>Total Donate</th>
                                                <td><?= $row->total_donate ?> {inr}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {publish_button}
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="card border-white">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-list"></i> List <b class="text-primary"><?= $donorName ?></b>
                        Donation Receipt(S)
                    </h3>
                </div>
                <div class="card-body">
                    <?php
                    // echo form_hidden('donor-id',$donor);
                
                    if ($list->num_rows()) {
                        ?>
                        <table class="table table-bordered table-striped" id="list">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Receipt No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($list->result() as $rrow) {
                                    echo '<tr>
                                        <td>' . $i++ . '.</td>  
                                        <td>' . $rrow->receipt_no . '</td>  
                                        <td>' . $rrow->date . '</td>  
                                        <td>' . $rrow->amount . ' {inr}</td>  
                                        <td>
                                            <button class="btn btn-info btn-xs"><i class="fa fa-print"></i> Print</button>
                                            <button class="btn btn-danger btn-xs delete-receipt" data-id="' . $rrow->id . '"><i class="fa fa-trash"></i> Delete</button>
                                        </td>  
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <script>
                            $('table#list').DataTable({
                                dom: '<Btip>'
                            });
                        </script>
                        <?php
                    } else {
                        echo alert('This Donor <b class="text-primary">' . $donorName . '</b>\'s Receipts are not available.', 'danger');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo alert('Invalid Donor ID <b>' . $this->uri->segment(3, 0) . '</b>', 'danger');
}
?>