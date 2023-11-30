<div class="card">
  <div class="card-body">
    <h1 class="card-title">Danh sách bình luận</h1>
    <div class="table-responsive">
      <table id="zero_config" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nội dung</th>
            <th>Ngày bình luận</th>
            <th>Tên tài khoản</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($listbl as $bl) { ?>
            <tr>
              <td><?php echo $bl['id_bl']; ?></td>
              <td><?php echo $bl['noidung']; ?></td>
              <td><?php echo $bl['ngaybinhluan']; ?></td>
              <td><?php echo $bl['name_tk']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
