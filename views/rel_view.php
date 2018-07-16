<div class="row">
    <div class="col-sm-6">
        <p class="display-4" align="center">Phụ huynh</p>
        <table class="table table-hover table-bordered" id="datatable">
            <thead>
            <tr>
                <th>Họ tên</th>
                <th>CMND</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($ph as $value) {
                ?>
                <tr>
<!--                    <td><a href="--><?php //echo __BASE_URL . "/rel?id={$value['ph_id']}";?><!--">--><?php //echo $value['ph_hoten']; ?><!--</a>-->
                    <td><a href=""><?php echo $value['ph_hoten']; ?></a>
                    </td>
                    <td><p><?php echo $value['ph_cmnd']; ?></p></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="col-sm-6">
        <p class="display-4" align="center">Học sinh</p>
        <table class="table table-hover table-bordered" id="datatable2">
            <thead>
            <tr>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Xoá liên hệ</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($_GET['id'])) {
                foreach ($hs as $value) {
                    ?>
                    <tr>
                        <td><p><?php echo $value['hs_hoten']; ?></p></td>
                        <td><?php echo $value['hs_ngaysinh']; ?></td>
                        <td>
                            <a href="<?php echo __BASE_URL . "/rel/delete?hs_id={$value['hs_id']}&ph_id={$_GET['id']}";?>" onclick="return confirmDelete()"><img
                                    src="views/assets/images/delete.png" width="20px" height="20px"></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
        <button type="button" id="demohidden" class="btn btn-primary" data-toggle="modal" data-target="#relModal" style="display: <?php if (isset($_GET['id'])) {echo 'block';} else {echo 'none';} ?>">Thiết lập quan hệ</button>
    </div>
</div>