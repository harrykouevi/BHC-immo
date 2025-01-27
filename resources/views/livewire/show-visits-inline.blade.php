
<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            @if($successMessage)
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif

            @if($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
            <div class="card-header pb-0">

                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Searching.....">
                    <span class="input-group-append">
                        <button class="btn ripple btn-primary" type="button">Search</button>
                    </span>
                </div>
                <p class="tx-12 tx-gray-500 mb-2"> Rechercher. </p>

            </div>
        </div>
          <!-- Pagination Links -->
    </div>
    <!--/div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        {{-- <p class=" mg-b-15 tx-12">You have 2 unread messages</p> --}}
                    </div>
                    <div>
                        {{-- Displaying total records --}}
                        <span class="tx-12 tx-gray-500 mb-2  mg-t-auto">{{ $visits->firstItem() }} to {{ $visits->lastItem() }} of {{ $visits->total() }} results.</span>
                        <ul class="pagination product-pagination mg-l-10 float-right">

                            {{-- Previous Page Link --}}
                            @if ($visits->onFirstPage())
                            <li class=" page-prev disabled">
                                <span class="page-link" >Prev</span>
                            </li>
                            @else
                            <li class=" page-prev ">
                                <a class="page-link"  wire:click="gotoPage({{ $visits->currentPage() - 1 }})" href="javascript:void(0)"  rel="prev" >Prev</a>
                            </li>
                            @endif

                            {{-- Pagination Elements --}}
                            {{-- @for ($i = 1; $i <= $visits->lastPage(); $i++)
                                <li>
                                    @if ($i == $visits->currentPage())
                                        <span>{{ $i }}</span> <!-- Current page -->
                                    @else
                                        <a wire:click="gotoPage({{ $i }})" href="javascript:void(0)">{{ $i }}</a>
                                    @endif
                                </li>
                            @endfor --}}

                            {{-- Next Page Link --}}

                            @if ($visits->hasMorePages())
                            <li class=" page-next mg-l-2">
                                <a class="page-link" wire:click="gotoPage({{ $visits->currentPage() + 1 }})" href="javascript:void(0)" rel="next" >Next</a>
                            </li>
                            @else
                            <li class=" page-next mg-l-2 disabled">
                                <span class="page-link" >Next</span>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div><!-- main-mail-list-header -->
                <div class="main-mail-options">
                    <label class="ckbox"><input id="checkAll" type="checkbox"> <span></span></label>
                    {{-- <div class="btn-group">
                        <button class="btn btn-light"><i class="bx bx-refresh"></i></button> <button class="btn btn-light disabled"><i class="bx bx-archive"></i></button> <button class="btn btn-light disabled"><i class="bx bx-info-circle"></i></button> <button class="btn btn-light disabled"><i class="bx bx-trash"></i></button> <button class="btn btn-light disabled"><i class="bx bx-folder-open"></i></button> <button class="btn btn-light disabled"><i class="bx bx-purchase-tag-alt"></i></button>
                    </div> --}}
                    <!-- btn-group -->
                </div><!-- main-mail-options -->
                <div class="main-mail-list">
                    @foreach($visits as $post)
                    <div  class="main-mail-item unread">
                        <div class="main-mail-checkbox">
                            <label class="ckbox"><input type="checkbox"> <span></span></label>
                        </div>

                        <div class="main-mail-body">
                            <div class="main-mail-from">
                                {{ $post->visitor_name.' '. $post->visitor_email }}
                            </div>
                            <div class="main-mail-subject">
                                <strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-primary  mg-r-5 " wire:click="toRemind({{$post->id}})"  ><span class="badge badge-light mg-r-5">{{$post->remind_count}}</span>Envoyé un rappel</button>
                                <button class="btn btn-light  mg-r-5 " wire:click="toConfirm({{$post->id}})"  >Confirmer</button>
                                <button class="btn btn-light  mg-r-5 " wire:click="setVisitToDone({{$post->id}})"  >Marquer la visite comme étant faite</button>
                            </div>
                        </div>

                        <div class="main-mail-date">
                            {{ $post->visit_date }} {{ $post->scheduled_time }}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mg-lg-b-30"></div>
            </div>
        </div>
    </div>

    <!-- Backdrop -->
    @if($modalVisible)
        <div class="modal-backdrop fade show"></div>
    @endif
    <!-- Message Modal -->
    <div class="modal fade @if($modalVisible) show @endif" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true" style="@if($modalVisible) display:block; @endif">

        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    @if($aboutToSendReminder)
                    <h6 class="modal-title">Envoyer un rappel</h6><button aria-label="Close" class="close" wire:click="closeModal" type="button"><span aria-hidden="true">&times;</span></button>
                    @endif
                    @if($aboutToSetVisitToDone)
                    <h6 class="modal-title">Confimation de visite effectuée</h6><button aria-label="Close" class="close" wire:click="closeModal" type="button"><span aria-hidden="true">&times;</span></button>
                    @endif
                    @if($aboutToConfirmVisit)
                    <h6 class="modal-title">Acceptation de la visite</h6><button aria-label="Close" class="close" wire:click="closeModal" type="button"><span aria-hidden="true">&times;</span></button>
                    @endif
                </div>

                <div class="modal-body">
                    @if($visitId)
                        <div>
                            <h6 class="card-title mb-1">Info Visiteur</h6>
                            Votre Nom :<strong> {{$selectedVisitor->visitor_name}}</strong> <br>
                            Votre Email :<strong> {{ $selectedVisitor->visitor_email}}</strong> <br>
                            Votre Téléphone :<strong> [Téléphone de l'utilisateur]</strong> <br>
                            Adresse de l'Appartement :<strong> [Adresse de l'appartement]</strong> <br>
                        </div>
                    @endif
                    @if($aboutToSendReminder)
                        <br><h6 class="card-title mb-1">Detail Visite</h6>
                        <!-- formulaire de rappel  de visite-->
                        <div class="form-group">
                            <label for="">com </label>
                            <textarea class="form-control" placeholder="Saisir une addresse"  wire:model="comments" ></textarea>

                        </div>
                    @endif

                    @if($aboutToConfirmVisit)
                    <div>
                        <br><h6 class="card-title mb-1">Detail Visite</h6>
                        <!-- formulaire de confirmation de visite-->
                        <div class="form-group">
                            <label for=""> Date de la Visite :</label>
                            <input class="form-control" id="dateMask"  wire:model="preferredDate" placeholder="MM/DD/YYYY" type="text">
                        </div><!-- input-group -->
                        <div class="form-group">
                            <label for="">Heure de la Visite :</label>
                            <input type="time" class="form-control " wire:model="scheduledTime" placeholder="Typing....">
                        </div>
                    </div>

                    @endif
                    @if($aboutToSetVisitToDone)
                        <br><h6 class="card-title mb-1">Detail Visite</h6>
                        <!-- formulaire de rappel  de visite-->
                        <div class="form-group">
                            <label for="">com </label>
                            <textarea class="form-control" placeholder="Saisir une addresse"  wire:model="comments" ></textarea>

                        </div>
                    @endif
                </div>

                <div class="modal-footer">
                    @if($aboutToConfirmVisit)
                    <button class="btn ripple btn-primary" type="button" wire:click="confirm" wire:loading.attr="disabled" >Envoyer <span wire:loading>...</span></button>
                    @endif
                    @if($aboutToSendReminder)
                    <button class="btn ripple btn-primary" type="button" wire:click="remind" wire:loading.attr="disabled" >Envoyer<span wire:loading>...</span></button>
                    @endif
                    @if($aboutToSetVisitToDone)
                    <button class="btn ripple btn-primary" type="button" wire:click="visitDone" wire:loading.attr="disabled" >Envoyer<span wire:loading>...</span></button>
                    @endif
                    <button class="btn ripple btn-secondary" wire:click="closeModal" type="button" >Fermer</button>

                </div>
            </div>
        </div>
    </div>
    <!-- eNDD Message Modal -->

</div>
<!-- /row -->
