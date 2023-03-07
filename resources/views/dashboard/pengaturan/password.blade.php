<x-layouts.main>
    <h4 class="fw-bold mt-3">Pengaturan</h4>
    <nav class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">
                <a href="/dashboard/pengaturan">Pengaturan</a>
            </li>
            <li class="breadcrumb-item active">Password</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <x-ui.button type="link" href='/dashboard/pengaturan/profil' name='Profil' icon='user me-2' navLink/>
                </li>
                <li class="nav-item">
                    <x-ui.button type="link" href='javascript:void(0);' name='Password' icon='unlock-alt me-2' style="primary" />
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Password</h5>
                <div class="card-body">
                    <livewire:form-ubah-password />
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Lupa Password</h5>
        <div class="card-body">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
              <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
              <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
            </div>
          </div>
          <form id="formAccountDeactivation" onsubmit="return false">
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
              <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
            </div>
            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
          </form>
        </div>
      </div>

</x-layouts.main>
