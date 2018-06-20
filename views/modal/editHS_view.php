<div class="modal fade" id="ediths">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="<?php echo __BASE_URL . "/hocsinh/edit";?>" method="post" name="editHS">
                        <input type="hidden" class="form-control" id="hs_id" name="id" value="1">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="hs_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="ngaysinh">Ngày sinh (yyyy-mm-dd)</label>
                            <input type="date" class="form-control" id="hs_ngaysinh" name="ngaysinh" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return validateEditHS()">Lưu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>