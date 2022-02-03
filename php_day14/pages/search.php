<?php include 'header.php'; ?>
<section class="py-5 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card ">
                    <div class="card-header bg-success text-center">All User</div>
                    <div class="card-body  bg-secondary text-center">
                        <form action="action.php" method="POST" >
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search"/>
                            <div class="input-group-append">
                            <button type="submit" name="search_btn" class="btn btn-success">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) { ?>
                                <tr >
                                <td> <?php echo $student['name']?></td >
                                <td ><?php echo $student['mobile']?></td >
                                <td > <?php echo $student['email']?></td >
                                <td ><?php echo $student['address']?> </td >
                            </tr >
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include 'footer.php'; ?>