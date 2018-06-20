<div class="modal fade" id="relModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thiết lập quan hệ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="<?php echo __BASE_URL . "/rel/add"?>" method="post">
                        <div class="table-responsive table-striped table-bordered table-hover">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($other as $value) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="hs_id[]"
                                                   value="<?php echo $value['hs_id']; ?>">
                                        </td>
                                        <td><?php echo $value['hs_hoten']; ?></td>
                                        <td><?php echo $value['hs_ngaysinh']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="ph_id" value="<?php echo $_GET['id']; ?>">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>