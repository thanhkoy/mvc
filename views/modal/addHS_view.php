<div class="modal fade" id="hsModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm mới học sinh</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="<?php echo __BASE_URL . "/hocsinh/add"?>" method="post" name="addHS">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="name" name="name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="ngaysinh">Ngày sinh (yyyy-mm-dd)</label>
                            <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return validateAddHS()">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>