<!-- Modal Buat komunitas -->
<div class="modal fade" id="modal-form-tambah-community" tabindex="-1" aria-labelledby="modal-form-tambah-community" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <form id="form-buat-komunitas" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Komunitas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                        <label for="nama-komunitas">Nama Komunitas</label>
                        <input type="text" name="nama-komunitas" id="nama-komunitas" class="form-control" required>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="deskripsi">Deskripsi Komunitas</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                        </div>
            
                        <div class="col-md-12 mt-3">
                        <label for="kategori">Kategori</label>
                        <select class="form-select" name="kategori" id="kategori" aria-label="Default select example" required>
                            <option disabled selected hidden>Mohon pilih kategori komunitas</option>
                            @foreach($kategori as $item)
                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="alamat">Alamat Komunitas</label>
                            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" class="form-control" required>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="telpon">No. Telepon</label>
                            <input type="text" name="telpon" id="telpon" class="form-control" required>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
        
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<!-- End Modal Buat komunitas -->