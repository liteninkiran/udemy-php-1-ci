
    <h2>Edit Book</h2>

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

        <form action="<?php echo base_url(); ?>book/editBookForm" method="post">

            <input type="hidden" name="id" value="<?php echo $bookData->id; ?>" required>

            <div class="form-group">
                <label class="required">Book Name</label>
                <input type="text" name="name" class="form-control span12" value="<?php echo $bookData->name; ?>" required>
            </div>

            <div class="form-group">
                <label class="required">Department</label><br>
                <select name="department_id" class="drop-down" required>
<?php
                    foreach($departmentData as $d)
                    {
                        if($d->id == $bookData->department_id)
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
                <label class="required">Author</label><br>
                <select name="author_id" class="drop-down" required>
<?php
                    foreach($authorData as $a)
                    {
                        if($a->id == $bookData->author_id)
                        {
?>
                            <option value="<?php echo $a->id; ?>" selected="selected"><?php echo $a->name; ?></option>
<?php  
                        }
                        else
                        {
?>
                            <option value="<?php echo $a->id; ?>"><?php echo $a->name; ?></option>
<?php  
                        }
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control span12" value="<?php echo $bookData->total; ?>" required>
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>

