<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>
    <h2>Student List</h2>

    <hr/>

    <table class="table">

        <thead>

            <tr>
                <th>Row</th>
                <th>Name</th>
                <th>Department</th>
                <th>Role Number</th>
                <th>Registration Number</th>
                <th>Phone</th>
                <th style="width: 3.5em;"></th>
            </tr>
        </thead>

        <tbody>

<?php
            $i = 0;

            foreach($studentData as $s)
            {
                $department = $this->department_model->getById($s->department_id);

                $i++;
?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $s->name; ?></td>
                    <td><?php echo $department->name; ?></td>
                    <td><?php echo $s->role; ?></td>
                    <td><?php echo $s->registration; ?></td>
                    <td><?php echo $s->phone; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>student/editStudent/<?php echo $s->id; ?>"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url(); ?>student/deleteStudent/<?php echo $s->id; ?>" role="button" data-toggle="modal" onclick="return confirm('Would you like to delete this record?')"><i class="fa fa-trash-o"></i></a>
                    </td>
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
