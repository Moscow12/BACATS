
<div class="col-sm-10">
    <div class="card">
        <div class="card-header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Course Code</th>
                    <th>Course name</th>
                    <th>Instructed By</th>
                    <th><i class="fa fa-eye"></i><span>Attandance</span></th>
                </tr>
                
                    <?php foreach ($courses as $course){ ?>
                        <tr>
                            <td><?php echo $course['course_code']; ?></td>
                            <td><?php echo $course['course_name']; ?></td>
                            <td ></td>
                            <td><button class="btn btn-primary "> <i class = "fa fa-eye"></i></button></td>
                        </tr>
                    <?php } ?>
                
            </table>
        </div>
    </div>
</div>
