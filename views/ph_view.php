<div class="row">
    <div class="col-sm-12">
        <p class="display-4" align="center">Phụ huynh</p>
        <table class="table table-hover table-bordered" id="datatable">
            <thead>
            <tr>
                <th>Họ tên</th>
                <th>CMND</th>
                <th>Sửa</th>
                <th>Xoá</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data_ph as $value){
                ?>
                <tr>
                    <td><?php echo $value['ph_hoten']; ?></td>
                    <td><p><?php echo $value['ph_cmnd']; ?></p></td>
                    <td>
                        <button type="button" id="btnedit" data-toggle="modal" data-target="#editph"
                                onclick="fillFormEditPH(<?php echo "{$value['ph_id']}, '{$value['ph_hoten']}', {$value['ph_cmnd']}"; ?>)"><i class="fa fa-edit"></i></button>
                    </td>
                    <td><a href="<?php echo __BASE_URL . "/phuhuynh/delete?id={$value['ph_id']}"; ?>" onclick="return confirmDelete()"><img
                                src="views/assets/images/delete.png" width="20px" height="20px"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#phModal">Thêm mới</button>
    </div>
</div>