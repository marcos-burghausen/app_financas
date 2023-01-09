<x-layout>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Receitas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Receitas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">

            <!-- Recietas pendentes -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Receitas pendentes</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-up-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Receitas pendentes -->

            <!-- Receitas recebidas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="/despesas/adicionar"><i class="bi bi-three-dots"></i></a>
                  <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul> -->
                </div>

                <div class="card-body">
                  <h5 class="card-title">Receitas recebidas</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-1">
                      <h6>$3,264</h6>
                    </div>
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-down-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End receitas recebidas -->

            <!-- Total -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-1">
                      <h6>$3,264</h6>
                    </div>
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-credit-card-2-front"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Fim Total -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Adicionar despesa
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Despesa</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                  </div>
                  <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Despesa" aria-label="First name">
                    <input type="text" class="form-control" placeholder="Data" aria-label="First name">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Categoria</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Carteira</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salvar despesa</button>
                  </div>
                </div>
              </div>
            </div>

            

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col">
                    </div>
                    <div class="col">
                      <button><i class="bi bi-caret-left-fill"></i></button>
                      <span class="card-title">OUTUBRO - 2022</span>
                      <button><i class="bi bi-caret-right-fill"></i></button>
                    </div>
                    <div class="col">
                    </div>
                  </div>
                  <!-- <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Situação</th>
                        <th scope="col">Data</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Conta</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><i class="bi bi-check-circle"></i></th>
                        <td> 01/10/2022 </td>
                        <td> Vale </td>
                        <td>Salário</td>
                        <td><span class="badge bg-success">Sicredi</span></td>
                        <td>R$ 1000.00</td>
                        <td>
                          <i class="bi bi-pen"></i>
                          <i class="bi bi-trash3"></i>
                          <i class="bi bi-three-dots-vertical"></i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><i class="bi bi-check-circle"></i></th>
                        <td> 01/10/2022 </td>
                        <td> Vale </td>
                        <td>Salário</td>
                        <td><span class="badge bg-success">Sicredi</span></td>
                        <td>R$ 1000.00</td>
                        <td>
                          <i class="bi bi-pen"></i>
                          <i class="bi bi-trash3"></i>
                          <i class="bi bi-three-dots-vertical"></i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><i class="bi bi-check-circle"></i></th>
                        <td> 01/10/2022 </td>
                        <td> Vale </td>
                        <td>Salário</td>
                        <td><span class="badge bg-primary">Sicredi</span></td>
                        <td>R$ 1000.00</td>
                        <td>
                          <i class="bi bi-pen"></i>
                          <i class="bi bi-trash3"></i>
                          <i class="bi bi-three-dots-vertical"></i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><i class="bi bi-check-circle"></i></th>
                        <td> 01/10/2022 </td>
                        <td> Vale </td>
                        <td>Salário</td>
                        <td><span class="badge bg-danger">Sicredi</span></td>
                        <td>R$ 1000.00</td>
                        <td>
                          <i class="bi bi-pen"></i>
                          <i class="bi bi-trash3"></i>
                          <i class="bi bi-three-dots-vertical"></i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><i class="bi bi-check-circle"></i></th>
                        <td> 01/10/2022 </td>
                        <td> Vale </td>
                        <td>Salário</td>
                        <td><span class="badge bg-warning">Sicredi</span></td>
                        <td>R$ 1000.00</td>
                        <td>
                          <i class="bi bi-pen"></i>
                          <i class="bi bi-trash3"></i>
                          <i class="bi bi-three-dots-vertical"></i>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table> -->

                </div>

              </div>
            </div><!-- Fim Atividades Recentes -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

               

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

</x-layout>