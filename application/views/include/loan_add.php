
    <script>

        $(document).ready(function()
        {
            $("#department").change(function()
            {
                var depId = $("#department").val();
                $.ajax(
                {
                    type: "POST",
                    url: "<?php echo base_url(); ?>loan/addLoan/" + depId,
                    success: function(data)
                    {
                        $("#book").html(data);
                    }
                })
            })
        });

    </script>

    <h2>Add Loan</h2>

    <hr/>

<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>

    <style>

        .drop-down
        {
            border: 1px solid #ddd;
            padding: 5px;
            width: 100%;
        }

    </style>

    <div class="panel-body" style="width:600px;">

        <form action="<?php echo base_url(); ?>loan/addLoanForm" method="post">

            <div class="form-group">
                <label>Department</label><br>
                <select name="department_id" class="drop-down" id="department">
                    <option value="">PLEASE SELECT</option>
<?php
                    foreach($departmentData as $d)
                    {
?>
                        <option value="<?php echo $d->id; ?>"><?php echo $d->name; ?></option>
<?php  
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label class="required">Book</label><br>
                <select name="book_id" class="drop-down" id="book" required>
                    <option value="">PLEASE SELECT</option>
<?php
                    foreach($bookData as $b)
                    {
?>
                        <option value="<?php echo $b->id; ?>"><?php echo $b->name; ?></option>
<?php  
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label class="required">Student</label><br>
                <select name="student_id" class="drop-down" id="student" required>
                    <option value="">PLEASE SELECT</option>
<?php
                    foreach($studentData as $s)
                    {
?>
                        <option value="<?php echo $s->id; ?>"><?php echo $s->name; ?></option>
<?php  
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label class="required">Start Date</label>
                <input type="date" name="start_date" class="form-control span12" value="<?php echo date('Y-m-d'); ?>" required>
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>
