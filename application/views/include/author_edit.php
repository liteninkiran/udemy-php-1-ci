
    <h2>Edit Author</h2>

    <hr/>

<?php

    $msg = $this->session->flashdata('msg');

    if(isset($msg))
    {
        echo $msg;
    }

?>

    <div class="panel-body" style="width:600px;">

        <form action="<?php echo base_url(); ?>author/editAuthorForm" method="post">

            <input type="hidden" name="id" value="<?php echo $authorData->id; ?>" required>

            <div class="form-group">
                <label class="required">Author Name</label>
                <input type="text" name="name" class="form-control span12" value="<?php echo $authorData->name; ?>" required>
            </div>

            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Submit"> 
            </div>

        </form>

    </div>

