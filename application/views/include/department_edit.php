
    <h2>Edit Department</h2>

    <hr/>

<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>

    <div class="panel-body" style="width:600px;">

        <form action="<?php echo base_url(); ?>department/editDepartmentForm" method="post">

            <input type="hidden" name="id" value="<?php echo $departmentData->id; ?>" required>

            <div class="form-group">
                <label class="required">Department Name</label>
                <input type="text" name="name" class="form-control span12" value="<?php echo $departmentData->name; ?>" required>
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>

