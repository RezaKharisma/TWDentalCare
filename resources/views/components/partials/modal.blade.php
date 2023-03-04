{{-- Modal Profile --}}
<div class="modal fade" id="modalProfile" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Profil //Nama User//</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Masukan nama lengkap" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label">Email</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Masukan nama lengkap" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 form-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Masukan nama lengkap" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label">Alamat</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Masukan nama lengkap" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label">Foto</label>
                        <div class="col-md-8">
                            <img src="{{ asset('img/avatars/1.png') }}" class="img-thumbnail" alt="user image"
                                width="150">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <label class="col-md-4 col-form-label hidden"></label>
                    <div class="col-md-8">
                        <a href="/dashboard/pengaturan/#changePassword">ingin merubah password ?</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Perbarui</button>
            </div>
        </div>
    </div>
</div>
