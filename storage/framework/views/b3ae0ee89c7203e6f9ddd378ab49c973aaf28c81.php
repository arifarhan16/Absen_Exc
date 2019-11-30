<?php $__env->startSection('content'); ?>

<div class="container">
	        <form method="post" action="/admin/<?php echo e($data->id); ?>/update">
            <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="<?php echo e($data->nama); ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kelas</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
      <option value="XA" <?php if($data->kelas == 'XA' ): ?> selected <?php endif; ?>>XA</option>
      <option value="XB" <?php if($data->kelas == 'XB' ): ?> selected <?php endif; ?>>XB</option>
      <option value="XC" <?php if($data->kelas == 'XC' ): ?> selected <?php endif; ?>>XC</option>
      <option value="XD" <?php if($data->kelas == 'XD' ): ?> selected <?php endif; ?>>XD</option>
      <option>--</option>
      <option value="XIA" <?php if($data->kelas == 'XIA' ): ?> selected <?php endif; ?>>XIA</option>
      <option value="XIB" <?php if($data->kelas == 'XIB' ): ?> selected <?php endif; ?>>XIB</option>
      <option value="XIC" <?php if($data->kelas == 'XIC' ): ?> selected <?php endif; ?>>XIC</option>
      <option value="XID" <?php if($data->kelas == 'XID' ): ?> selected <?php endif; ?>>XID</option>
      <option>--</option>
      <option value="XIIA" <?php if($data->kelas == 'XIIA' ): ?> selected <?php endif; ?>>XIIA</option>
      <option value="XIIB" <?php if($data->kelas == 'XIIB' ): ?> selected <?php endif; ?>>XIIB</option>
      <option value="XIIC" <?php if($data->kelas == 'XIIC' ): ?> selected <?php endif; ?>>XIIC</option>
      <option value="XIID" <?php if($data->kelas == 'XIID' ): ?> selected <?php endif; ?>>XIID</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Tanggal</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tanggal">
      <option value="1" <?php if($data->tanggal == '1' ): ?> selected <?php endif; ?>>1</option>
      <option value="2" <?php if($data->tanggal == '2' ): ?> selected <?php endif; ?>>2</option>
      <option value="3" <?php if($data->tanggal == '3' ): ?> selected <?php endif; ?>>3</option>
      <option value="4" <?php if($data->tanggal == '4' ): ?> selected <?php endif; ?>>4</option>
      <option value="5" <?php if($data->tanggal == '5' ): ?> selected <?php endif; ?>>5</option>
      <option value="6" <?php if($data->tanggal == '6' ): ?> selected <?php endif; ?>>6</option>
      <option value="7" <?php if($data->tanggal == '7' ): ?> selected <?php endif; ?>>7</option>
      <option value="8" <?php if($data->tanggal == '8' ): ?> selected <?php endif; ?>>8</option>
      <option value="9" <?php if($data->tanggal == '9' ): ?> selected <?php endif; ?>>9</option>
      <option value="10" <?php if($data->tanggal == '10' ): ?> selected <?php endif; ?>>10</option>
      <option value="11" <?php if($data->tanggal == '11' ): ?> selected <?php endif; ?>>11</option>
      <option value="12" <?php if($data->tanggal == '12' ): ?> selected <?php endif; ?>>12</option>
      <option value="13" <?php if($data->tanggal == '13' ): ?> selected <?php endif; ?>>13</option>
      <option value="14" <?php if($data->tanggal == '14' ): ?> selected <?php endif; ?>>14</option>
      <option value="15" <?php if($data->tanggal == '15' ): ?> selected <?php endif; ?>>15</option>
      <option value="16" <?php if($data->tanggal == '16' ): ?> selected <?php endif; ?>>16</option>
      <option value="17" <?php if($data->tanggal == '17' ): ?> selected <?php endif; ?>>17</option>
      <option value="18" <?php if($data->tanggal == '18' ): ?> selected <?php endif; ?>>18</option>
      <option value="19" <?php if($data->tanggal == '19' ): ?> selected <?php endif; ?>>19</option>
      <option value="20" <?php if($data->tanggal == '20' ): ?> selected <?php endif; ?>>20</option>
      <option value="21" <?php if($data->tanggal == '21' ): ?> selected <?php endif; ?>>21</option>
      <option value="22" <?php if($data->tanggal == '22' ): ?> selected <?php endif; ?>>22</option>
      <option value="23" <?php if($data->tanggal == '23' ): ?> selected <?php endif; ?>>23</option>
      <option value="24" <?php if($data->tanggal == '24' ): ?> selected <?php endif; ?>>24</option>
      <option value="25" <?php if($data->tanggal == '25' ): ?> selected <?php endif; ?>>25</option>
      <option value="26" <?php if($data->tanggal == '26' ): ?> selected <?php endif; ?>>26</option>
      <option value="27" <?php if($data->tanggal == '27' ): ?> selected <?php endif; ?>>27</option>
      <option value="28" <?php if($data->tanggal == '28' ): ?> selected <?php endif; ?>>28</option>
      <option value="29" <?php if($data->tanggal == '29' ): ?> selected <?php endif; ?>>29</option>
      <option value="30" <?php if($data->tanggal == '30' ): ?> selected <?php endif; ?>>30</option>
      <option value="31" <?php if($data->tanggal == '31' ): ?> selected <?php endif; ?>>31</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1">Bulan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="bulan">
      <option value="Januari"  <?php if($data->bulan == 'Januari' ): ?> selected <?php endif; ?>>Januari</option>
      <option value="Februari" <?php if($data->bulan == 'Februari' ): ?> selected <?php endif; ?>>Februari</option>
      <option value="Maret" <?php if($data->bulan == 'Maret' ): ?> selected <?php endif; ?>>Maret</option>
      <option value="April" <?php if($data->bulan == 'April' ): ?> selected <?php endif; ?>>April</option>
      <option value="Mei" <?php if($data->bulan == 'Mei' ): ?> selected <?php endif; ?>>Mei</option>
      <option value="Juni" <?php if($data->bulan == 'Juni' ): ?> selected <?php endif; ?>>Juni</option>
      <option value="Juli" <?php if($data->bulan == 'Juli' ): ?> selected <?php endif; ?>>Juli</option>
      <option value="Agustus" <?php if($data->bulan == 'Agustus' ): ?> selected <?php endif; ?>>Agustus</option>
      <option value="September" <?php if($data->bulan == 'September' ): ?> selected <?php endif; ?>>September</option>
      <option value="Oktober" <?php if($data->bulan == 'Oktober' ): ?> selected <?php endif; ?>>Oktober</option>
      <option value="November" <?php if($data->bulan == 'November' ): ?> selected <?php endif; ?>>November</option>
      <option value="Desember" <?php if($data->bulan == 'Desember' ): ?> selected <?php endif; ?>>Desember</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1">Tahun</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
      <option value="2019" <?php if($data->tahun == '2019' ): ?> selected <?php endif; ?>>2019</option>
      <option value="2020" <?php if($data->tahun == '2020' ): ?> selected <?php endif; ?>>2020</option>
      <option value="2021" <?php if($data->tahun == '2021' ): ?> selected <?php endif; ?>>2021</option>
      <option value="2022" <?php if($data->tahun == '2022' ): ?> selected <?php endif; ?>>2022</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Alasan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kehadiran">
      <option value="Alfa"  <?php if($data->kehadiran == 'Alfa' ): ?> selected <?php endif; ?>>Alfa</option>
      <option value="Izin"  <?php if($data->kehadiran == 'Izin' ): ?> selected <?php endif; ?>>Izin</option>
      <option value="Sakit" <?php if($data->kehadiran == 'Sakit' ): ?> selected <?php endif; ?>>Sakit</option>
      <option value="Masuk" <?php if($data->tkehadiran == 'Masuk' ): ?> selected <?php endif; ?>>Masuk</option>
    </select>
  </div>

      </div>
      <div class="modal-footer">
        <a href="/admin"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views//admin/edit.blade.php ENDPATH**/ ?>