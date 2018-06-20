<div class="row">
    <div class="col-sm-12">
        <p class="display-4" align="center">Học sinh</p>
        <table class="table table-hover table-bordered" id="datatable">
            <thead>
            <tr>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Sửa</th>
                <th>Xoá</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $value['hs_hoten']; ?></td>
                    <td><?php echo $value['hs_ngaysinh']; ?></td>
                    <td>
                        <button type="button" data-toggle="modal" data-target="#ediths"
                                onclick="fillFormEditHS(<?php echo "{$value['hs_id']}, '{$value['hs_hoten']}', {$value['hs_ngaysinh']}"; ?>)">
                            <i class="fa fa-edit"></i></button>
                    </td>
                    <td><a href="<?php echo __BASE_URL . "/hocsinh/delete?id={$value['hs_id']}"; ?>" onclick="return confirmDelete()"><img
                                src="views/assets/images/delete.png" width="20px" height="20px"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hsModal">Thêm mới</button>
    </div>
</div>