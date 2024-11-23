<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="fw-bold text-secondary">STT</th>
                            <th class="fw-bold text-secondary">id</th>
                            <th class="fw-bold text-secondary">người nhận</th>
                            <th class="fw-bold text-secondary">email</th>
                            <th class="fw-bold text-secondary">sản phẩm</th>
                            <th class="fw-bold text-secondary">số điện thoại</th>
                            <th class="fw-bold text-secondary">Địa chỉ</th>
                            <th class="fw-bold text-secondary">ngày tạo</th>
                            <th class="fw-bold text-secondary">ghi chú</th>
                            <th class="fw-bold text-secondary">thành tiền</th>
                            <th class="fw-bold text-secondary">trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_donhang as $key) { ?>
                            <tr>
                                <td><?= $key['id_user'] ?></td>
                                <td><?= $key['nguoi_nhan'] ?></td>
                                <td><?= $key['email'] ?></td>
                                <td><?= $key['sanpham'] ?></td>
                                <td><?= $key['tel'] ?></td>
                                <td><?= $key['address'] ?></td>
                                <td><?= $key['date'] ?></td>
                                <td><?= $key['ghi_chu'] ?></td>
                                <td><?= $key['thanhtien'] ?></td>
                                <td><?= $key['trangthai'] ?></td>
                                
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