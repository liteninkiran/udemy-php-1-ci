
    <h2>Student List</h2>

    <hr/>

    <table class="table">

        <thead>

            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th style="width: 3.5em;"></th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Tompson</td>
                <td>the_mark7</td>
                <td>
                    <a href="user.html"><i class="fa fa-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>

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
