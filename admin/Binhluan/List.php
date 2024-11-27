<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách bình luận</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="fw-bold text-secondary">id</th>
                            <th class="fw-bold text-secondary">id_user</th>
                            <th class="fw-bold text-secondary">id_pro</th>
                            <th class="fw-bold text-secondary">noidung</th>
                            <th class="fw-bold text-secondary">date</th>
                            <th class="fw-bold text-secondary">star</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_binhluan as $key) { ?>
                            <tr>
                                <td><?= $key['id'] ?></td>
                                <td><?= $key['id_user'] ?></td>
                                <td><?= $key['id_pro'] ?></td>
                                <td><?= $key['noidung'] ?></td>
                                <td><?= $key['date'] ?></td>
                                <td><?= $key['star'] ?></td>                            
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>