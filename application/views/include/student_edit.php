
    <h2>Edit Student</h2>

    <hr/>

<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>

    <style>

        .department
        {
            border: 1px solid #ddd;
            padding: 5px;
            width: 100%;
        }

    </style>

    <div class="panel-body" style="width:600px;">

        <form action="<?php echo base_url(); ?>student/editStudentForm" method="post">

            <input type="hidden" name="id" value="<?php echo $studentData->id; ?>" required>

            <div class="form-group">
                <label class="required">Student Name</label>
                <input type="text" name="name" class="form-control span12" value="<?php echo $studentData->name; ?>" required>
            </div>

            <div class="form-group">
                <label class="required">Department</label><br>
                <select name="department_id" class="department" required>
<?php
                    foreach($departmentData as $d)
                    {
                        if($d->id == $studentData->department_id)
                        {
?>
                            <option value="<?php echo $d->id; ?>" selected="selected"><?php echo $d->name; ?></option>
<?php  
                        }
                        else
                        {
?>
                            <option value="<?php echo $d->id; ?>"><?php echo $d->name; ?></option>
<?php  
                        }
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label>Role Number</label>
                <input type="number" name="role" class="form-control span12" value="<?php echo $studentData->role; ?>">
            </div>

            <div class="form-group">
                <label>Registration Number</label>
                <input type="number" name="registration" class="form-control span12" value="<?php echo $studentData->registration; ?>">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control span12" value="<?php echo $studentData->phone; ?>">
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>

