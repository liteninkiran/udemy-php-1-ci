<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>
    <h2>Loan List</h2>

    <hr/>

    <table class="table">

        <thead>

            <tr>
                <th>Row</th>
                <th>Student</th>
                <th>Book</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th style="width: 3.5em;"></th>
            </tr>
        </thead>

        <tbody>

<?php
            $i = 0;

            foreach($loanData as $l)
            {
                $student = $this->student_model->getById($l->student_id);
                $book = $this->book_model->getById($l->book_id);

                $startDate = date('d/m/Y', strtotime($l->start_date));

                if($l->end_date)
                {
                    $endDate = date('d/m/Y H:i:s', strtotime($l->end_date));
                }
                else
                {
                    $endDate = '';
                }

                $i++;
?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $book->name; ?></td>
                    <td><?php echo $startDate; ?></td>
                    <td><?php echo $endDate; ?></td>
                    <td>
                        <?php if(!$l->end_date) { ?>
                            <a href="<?php echo base_url(); ?>loan/editLoan/<?php echo $l->id; ?>" role="button" data-toggle="modal" onclick="return confirm('Are you sure you want to end this Loan?')"><i class="fa fa-pencil"></i></a>
                        <?php } ?>
                    </td>
                </tr>
<?php
            }
?>

        </tbody>

    </table>

<!-- 
    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Return Book</h3>
                </div>

                <div class="modal-body">
                    <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to end this Loan?<br>This cannot be undone.</p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>

            </div>

        </div>

    </div>
 -->