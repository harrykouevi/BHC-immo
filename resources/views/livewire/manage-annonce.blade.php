
<div>

<!-- row -->
<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <!--div-->
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
            <form  wire:submit.prevent="save">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        Form Input &amp; Textarea
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    --}}

                    <div class="row row-sm">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Titre" wire:model="titre" type="text">
                            @error('titre') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <textarea class="form-control" placeholder="Description"  wire:model="description" rows="3"></textarea>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">summernote</p>
                            <textarea class="form-control" placeholder="Description"  wire:model="content_" id="summernote" rows="3"></textarea>
                            @error('content_') <span class="error">{{ $message }}</span> @enderror
                            @error('wc_douche') <span class="error">{{ $message }}</span> @enderror
                            @error('nb_salon') <span class="error">{{ $message }}</span> @enderror
                            @error('nb_pieces') <span class="error">{{ $message }}</span> @enderror
                            @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                            @error('contacts_') <span class="error">{{ $message }}</span> @enderror
                            @error('content_') <span class="error">{{ $message }}</span> @enderror
                            @error('adresse') <span class="error">{{ $message }}</span> @enderror
                            @error('prix') <span class="error">{{ $message }}</span> @enderror
                            @error('categoryId') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">Catégorie</p>
                            <select class="form-control select2-no-search" wire:model="categoryId">

                                <option label="Choose one"></option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                @endforeach

                            </select>
                        </div><!-- col-4 -->

                    </div>


                    <div class="row row-sm  mg-t-20">
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Date
                                        </div>
                                    </div>
                                    <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">

                                </div><!-- input-group -->
                            </div><!-- col-4 -->
                            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Téléphone:
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <input class="form-control" id="phoneMask" placeholder="(000) 000-0000" wire:model="phone_number" type="text">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Téléphone + Ext.:
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">

                                </div><!-- input-group -->
                            </div>


                    </div>

                    <div class="row row-sm  mg-t-20">
                        <div class="col-lg-12 col-md-12">
							
									<div>
										<h6 class="card-title mb-1">File Upload</h6>
										<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
									</div>
									
									<div>
										<input id="" type="file" wire:model="photos" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
									</div>
								
						</div>
                        <div class="col-lg-12">
                            
                            @if ($photos)
                            <div class="bd pd-20 clearfix">
                                    @foreach($photos as $photo)
                                    <div class="relative">

                                        <img alt="Aperçu de l'image" class="rounded float-sm-left wd-100p wd-sm-200" src="{{ $photo->temporaryUrl() ??  Storage::disk('public')->url($photo->path)  }}"  style="max-height: 200px;">
                                        <button type="button" wire:click.prevent='removeImage({{ $key  ?? 5 }})'>Remove</button>
                                    </div>
                                    @endforeach
                                   
                            </div>
                            @endif

                            @error('photos.*') <span class="error">{{ $message }}</span> @enderror


                        </div>
                        <div class="col-lg-12">
                            
                            @if ($images)
                            <div class="bd pd-20 clearfix">
                                    @foreach($images as $photo)
                                    <div class="relative">

                                        <img alt="Aperçu de l'image" class="rounded float-sm-left wd-100p wd-sm-200" src="{{ $photo->temporaryUrl() ??  Storage::disk('public')->url($photo->path)  }}"  style="max-height: 200px;">
                                        <button type="button" wire:click.prevent='removeImage({{ $key  ?? 5 }})'>Remove</button>
                                    </div>
                                    @endforeach
                                   
                            </div>
                            @endif

                            @error('photos.*') <span class="error">{{ $message }}</span> @enderror


                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <span class="btn-double-text" data-text="{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'annonce">{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'annonce</span>

                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- row closed -->
</div>

