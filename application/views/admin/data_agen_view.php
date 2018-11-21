<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Agen</h3>
        <div class="box-tools pull-right">
          <a href="<?php echo base_url('data_agen/tambah')?>" class="btn btn-primary ">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Agen</th>
              <th>Kategori</th>
             
               <th>No. Telp</th>
                <th>Alamat</th>
                 
                   <th>Latitude</th>
                  <th>Longitute</th>
                   <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($agen)):
                foreach ($agen as $key => $p) {
                  $no = $key+1;
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_agen.'</td>';
                    echo '<td>'.$p->kategori.'</td>'; 
                    echo '<td>'.$p->no_hp.'</td>';
                    echo '<td>'.$p->alamat.'</td>';
                    echo '<td>'.$p->latitude.'</td>';
                    echo '<td>'.$p->longitude.'</td>';
                    echo '<td><a href="'.base_url('data_agen/hapus/'.$p->id_agen).'" class="btn btn-danger btn-xs">Hapus</a>
                              <a href="'.base_url('data_agen/edit/'.$p->id_agen).'"class="btn btn-info btn-xs">Edit</a>
                    </td>';
                  echo '</tr>';
                } endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#example1').DataTable();
</script>
<?php $this->load->view('admin/footer') ?>
