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
            </tr>
        </thead>

        <tbody>

<?php
            $i = 0;

            foreach($loanData as $l)
            {
                $student = $this->student_model->getById($l->student_id);
                $book = $this->book_model->getById($l->book_id);

                $i++;
?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $book->name; ?></td>
                    <td><?php echo $l->start_date; ?></td>
                    <td><?php echo $l->end_date; ?></td>
                </tr>
<?php
            }
?>

        </tbody>

    </table>


    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>

                <div class="modal-body">
                    <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete This?<br>This cannot be undone.</p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>

            </div>

        </div>

    </div>
