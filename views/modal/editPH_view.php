<div class="modal fade" id="editph">
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
                    <form action="<?php echo __BASE_URL . "/phuhuynh/edit";?>" method="post" name="editPH">
                        <input type="hidden" class="form-control" name="id" value="1" id="ph_id">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" name="name" id="ph_name" required>
                        </div>
                        <div class="form-group">
                            <label for="cmnd">CMND</label>
                            <input type="number" class="form-control" id="ph_cmnd" name="cmnd" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return validateEditPH()">Lưu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>