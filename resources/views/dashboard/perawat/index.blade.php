<x-layouts.main title="Perawat">
    <h4 class="fw-bold py-3">Perawat</h4>

    <div class="row mb-4">
        <div class="col">
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalInfo"><i
                    class="fa fa-info-circle me-1"></i> Info</button>
            <a class="btn btn-primary" href="/dashboard/perawat/create"><i class="fa fa-plus me-1"></i> Tambah Data</a>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Data Perawat</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>

                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                        <td>Barry Hunter</td>
                        <td>

                        </td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-2"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                        <td>Trevor Baker</td>
                        <td>

                        </td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-2"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        <td>

                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-2"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <x-slot name="modals">
        <div class="modal fade" id="modalInfo" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Informasi Penggunaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/LogoProgram.png') }}" alt="asd" width="200">
                            </div>
                            <div class="col-8">
                                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Animi
                                    libero maiores
                                    nesciunt, molestiae aliquid, vitae ab facere dicta qui excepturi corrupti. Atque
                                    laudantium, tempore nemo cumque quas fugiat consectetur reiciendis inventore vel
                                    harum, aperiam quae, itaque incidunt ipsam totam illum quibusdam rem numquam quam.
                                    Delectus neque veritatis incidunt quod similique!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/LogoProgram.png') }}" alt="asd" width="200">
                            </div>
                            <div class="col-8">
                                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                    Animi
                                    libero maiores
                                    nesciunt, molestiae aliquid, vitae ab facere dicta qui excepturi corrupti. Atque
                                    laudantium, tempore nemo cumque quas fugiat consectetur reiciendis inventore vel
                                    harum, aperiam quae, itaque incidunt ipsam totam illum quibusdam rem numquam quam.
                                    Delectus neque veritatis incidunt quod similique!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-layouts.main>
