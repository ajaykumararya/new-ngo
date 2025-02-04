<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-list"></i> List <b class="text-primary"><?=$donorName = $this->db->where('id',$donor)->get('donor')->row('name')?></b> Donation Receipt(S)
                </h3>
            </div>
            <div class="card-body">
                <?php
                // echo form_hidden('donor-id',$donor);
                $list = $this->db->get_where('donor_receipts', [
                    'donor_id' => $donor
                ]);
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
                            foreach($list->result() as $row){
                                echo '<tr>
                                        <td></td>  
                                        <td></td>  
                                        <td></td>  
                                        <td></td>  
                                        <td></td>  
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
                    echo alert('This Donor <b class="text-primary">'.$donorName.'</b>\'s Receipts are not available.', 'danger');
                }
                ?>
            </div>
        </div>
    </div>
</div>