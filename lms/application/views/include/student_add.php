
    <h2>Add Student</h2>

    <hr/>

<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>

    <div class="panel-body" style="width:600px;">

        <form action="<?php echo base_url(); ?>student/addStudentForm" method="post">

            <div class="form-group">
                <label class="required">Student Name</label>
                <input type="text" name="name" class="form-control span12" required>
            </div>

            <div class="form-group">
                <label class="required">Department</label>
                <input type="text" name="department" class="form-control span12" required>
            </div>

            <div class="form-group">
                <label>Role Number</label>
                <input type="number" name="role" class="form-control span12">
            </div>

            <div class="form-group">
                <label>Registration Number</label>
                <input type="number" name="registration" class="form-control span12">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control span12">
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>

