
<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Searching.....">
                    <span class="input-group-append">
                        <button class="btn ripple btn-primary" type="button">Search</button>
                    </span>
                </div>
                <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>

            </div>
            {{-- <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>Nom du client</th>
                                <th>Email du visiteur</th>
                                <th>Visite prévue pour</th>
                                <th>Nom de la personne chargé de la visite</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visits as $post)
                            <tr>
                                <td>{{ $post->visitor_name }}</td>
                                <td>{{ $post->visitor_email }}</td>
                                <td>{{ $post->visit_date }}</td>
                                <td>{{ $post->purpose ?? 'rrr'  }}</td>
                                <td>
                                    <a href="{{ route('admin.visits.show', $post->id) }}" class="btn btn-info">Voir Détail</a>
                                    <a href="{{ route('admin.visits.edit', $post->id) }}" class="btn btn-warning">Modifier</a>

                                    @livewire('button-component',['articleId' => $post->id]) <!-- Include your Livewire component -->
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
          <!-- Pagination Links -->
    </div>
    <!--/div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class=" mg-b-15 tx-12">You have 2 unread messages</p>
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
                        <div class="btn-group">
                            <button class="btn btn-light"><i class="bx bx-refresh"></i></button> <button class="btn btn-light disabled"><i class="bx bx-archive"></i></button> <button class="btn btn-light disabled"><i class="bx bx-info-circle"></i></button> <button class="btn btn-light disabled"><i class="bx bx-trash"></i></button> <button class="btn btn-light disabled"><i class="bx bx-folder-open"></i></button> <button class="btn btn-light disabled"><i class="bx bx-purchase-tag-alt"></i></button>
                        </div><!-- btn-group -->
                    </div><!-- main-mail-options -->
                    <div class="main-mail-list">
                        @foreach($visits as $post)
                        <div  class="main-mail-item unread">
                            <div class="main-mail-checkbox">
                                <label class="ckbox"><input type="checkbox"> <span></span></label>
                            </div>
                            <div class="main-mail-star">
                                <i class="typcn typcn-star"></i>
                            </div>
                            <div class="main-img-user"><img alt="" src="../../assets/img/faces/5.jpg"></div>
                            <div class="main-mail-body">
                                <div class="main-mail-from">
                                    {{ $post->visitor_name.' '. $post->visitor_email }}
                                </div>
                                <div class="main-mail-subject">
                                    <strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
                                </div>

                                <div class="btn-group">
                                    <button class="btn btn-light  mg-r-5 " wire:click="toRemind({{$post->id}})"  >Envoyé un rappel</button>
                                    <button class="btn btn-light  mg-r-5 " wire:click="toConfirm({{$post->id}})"  >Confirmer</button>
                                    <button class="btn btn-light  mg-r-5 " wire:click="setVisitToDone({{$post->id}})"  >Marquer la visite comme étant faite</button>

                                </div><!-- btn-group -->


                            </div>
                            <div class="main-mail-attachment">
                                <i class="typcn typcn-attachment"></i>
                            </div>
                            <div class="main-mail-date">
                                {{ $post->visit_date }}
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
                        <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" wire:click="closeModal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="msb-reply d-flex">
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Typing....">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="button">Save changes</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- eNDD Message Modal -->
    <!-- Small modal -->
        <div class="modal" id="modaldemo2">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn ripple btn-primary" type="button">Save changes</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Small Modal -->
</div>
<!-- /row -->
