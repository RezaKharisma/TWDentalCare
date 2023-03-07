<x-layouts.main>
    <h4 class="fw-bold mt-3">Pengaturan</h4>
    <nav class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">
                <a href="/dashboard/pengaturan">Pengaturan</a>
            </li>
            <li class="breadcrumb-item active">Profil</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <x-ui.button type="link" href='javascript:void(0);' name='Profil' icon='user me-2' />
                </li>
                <li class="nav-item">
                    <x-ui.button type="link" href='/dashboard/pengaturan/password' name='Password' icon='unlock-alt me-2' navLink />
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Detail Profil</h5>
                <div class="card-body">
                    <livewire:form-foto-profil />
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <livewire:form-update-profile-dokter />
                </div>
            </div>
        </div>
    </div>

</x-layouts.main>
