<div class="modal fade" id="phModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm mới phụ huynh</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="<?php echo __BASE_URL . "/phuhuynh/add"?>" method="post" name="addPH">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="name" name="name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="cmnd">CMND</label>
                            <input type="number" class="form-control" id="cmnd" name="cmnd" required>
                        </div>
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
                                foreach ($data_hs as $value) {
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
                        <button type="submit" class="btn btn-primary" onclick="return validateAddPH()">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>