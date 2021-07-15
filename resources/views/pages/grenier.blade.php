    <!-- Page Content -->
    <div class="bg-warning">
        <div class="container">
            <!-- Hero Section -->
            <div class="row align-items-center no-gutters">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-4 font-weight-bold">
                          Akwaba sur LE GRENIER
                        </h1>
                        <p class="text-secondary-50 mb-4 lead">
                            Transporte facilement tes produits vivriers<br>
                            <span>Appelez au : 225 01 02 20 52 11</span><br>
                            <span>infos@grenier.ci</span><br>
                        </p>

                        <a href="transporteur" class="btn btn-success">Devenir Transporteur</a>
                        @if (isset($_SESSION['tel']) AND !empty($_SESSION['tel']))
                          <a href="mon_comptes" class="btn btn-white">{{$_SESSION['nom'].' '.$_SESSION['prenom']}}</a>
                        @else
                          <a href="sign" class="btn btn-white">Se connecter</a>
                        @endif

                    </div>
                </div>
                <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
                    <img src="assets/images/hero/hero-img.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <!-- Sous-titre -->
    <div class="bg-white py-4 shadow-sm">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i
                class="fe fe-video"> </i></span>
                        <div class="ml-3">
                            <h4 class="mb-0 font-weight-semi-bold">plus de 100 transporteurs</h4>
                            <p class="mb-0">Des vehicules convenables</p>
                        </div>
                    </div>
                </div>
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i
                class="fe fe-users"> </i></span>
                        <div class="ml-3">
                            <h4 class="mb-0 font-weight-semi-bold">Disponibilité</h4>
                            <p class="mb-0">24h/24 - 7j/7</p>
                        </div>
                    </div>
                </div>
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="d-flex align-items-center">
                        <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i
                class="fe fe-clock"> </i></span>
                        <div class="ml-3">
                            <h4 class="mb-0 font-weight-semi-bold">Rapidité</h4>
                            <p class="mb-0">Nous vous livrons vos produits à temps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtrer  -->
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="container">

            <div class="row mb-4">
                <div class="col">
                    <h2 class="mb-0">Recherche ton transporteur</h2>
                </div>
            </div>

            <div class="position-relative">
                <!-- Card -->
                <div class="card mb-4 ">
                    <!-- Card Body -->
                    <div class="card-body">
                     <form>
                        <div class="row">

                         <div class="col-lg-4">
                          <select class="selectpicker" data-width="100%">
                            <option value="">Départ</option>
                            <option value="&#8377; Indian">Toumodi</option>
                            <option value="$ USD">Abidjan</option>
                          </select>
                         </div>

                         <div class="col-lg-4">
                          <select class="selectpicker" data-width="100%">
                            <option value="">Arrivé</option>
                            <option value="&#8377; Indian">Toumodi</option>
                            <option value="$ USD">Abidjan</option>
                          </select>
                         </div>

                         <div class="col-lg-4">
                          <select class="selectpicker" data-width="100%">
                            <option value="">Unité</option>
                            <option value="&#8377; Indian">Carton </option>
                            <option value="$ USD">Sac</option>
                          </select>
                         </div>

                        </div>
                     </form>
                     <button type="submit" class="btn btn-success mt-3">Rechercher</button>
                    </div>
                </div>
                    <!-- Card -->
            </div>


        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="container">

            <div class="row mb-4">
                <div class="col">
                    <h2 class="mb-0">Nos Tranporteurs</h2>
                </div>
            </div>

            <div class="position-relative">
                <ul class="controls " id="sliderFirstControls">
                    <li class="prev">
                        <i class="fe fe-chevron-left"></i>
                    </li>
                    <li class="next">
                        <i class="fe fe-chevron-right"></i>
                    </li>
                </ul>
                <div class="sliderFirst">

                   <?php
                      for($i=0;$i<=10;$i++){
                     ?>

                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="#" class="card-img-top">
                            <img src="assets/images/course/car.jpg" alt="" class="rounded-top card-img-top">
                            </a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 ">
                                  <a href="#" class="text-inherit text-warning">
                                    Toumodi - Abidjan
                                  </a>
                                </h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>10 places</li>
                                </ul>
                                <div class="lh-1">
                                    <span class="text-warning">unité : </span>
                                    <span class="font-size-xs text-muted">Carton de tomate</span>
                                </div>
                                <!-- Price -->
                                <div class="lh-1 mt-3">
                                    <span class="text-dark font-weight-bold">1000 fcfa / place</span>
                                    <!--<del class="font-size-xs text-muted">$750</del>-->
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Touré Abou</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-white" title="Réserver une place">
                                        <span class="badge badge-warning" type="button" class="btn btn-primary"
                                              data-toggle="modal" data-target="#exampleModalLong">
                                          Réserver
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>



                </div>
            </div>


        </div>
    </div>

<!-- Modal de Réservation -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Réserver</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                 <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xl" alt="">
                </div>
                <div class="col ml-2">
                 <span class="text-warning">Transporteur : </span>
                 <span>Touré Abou</span><br>
                 <span><b>Toumodi - Abidjan</b></span><br>
                 <span>10 places</span><br>
                 <span><b>1000 fcfa / place</b></span><br>
                 <span>Unité : Carton</span>
                </div>
            </div><hr>
            <div class="form-group">
                <label class="input-label" for="selectOne">Combien de places voulez-vous ?
                <span class="input-label-secondary"></span></label>
                <select id="selectOne" class="form-control">
                    <option>Choisir</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="alert alert-warning" role="alert">
                Montant à payer : 00 fcfa
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-warning">Réserver</button>
      </div>
    </div>
  </div>
</div>
