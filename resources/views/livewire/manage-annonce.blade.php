
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
                        <div class="col-lg-12 col-md-12">

                            <div>
                                <h6 class="card-title mb-1">Détail de l'annonce</h6>
                                <p class="text-muted card-sub-title">Informations précises et complètes sur une annonce . Il est essentiel de fournir des détails clairs afin d'attirer l'attention des intéressés et de faciliter leur prise de décision.</p>
                            </div>



                        </div>
                        <div class="col-lg-12 col-md-12">
                            <p class="mg-b-10">Titre</p>
                            <input class="form-control" placeholder="Titre" wire:model="titre" type="text">
                            @error('titre') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">Description</p>

                            <textarea class="form-control" placeholder="Description"  wire:model="description" rows="3"></textarea>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        @error('content_') <span class="error">{{ $message }}</span> @enderror
                        @error('wcdouche') <span class="error">{{ $message }}</span> @enderror
                        @error('nbsalon') <span class="error">{{ $message }}</span> @enderror
                        @error('nbpieces') <span class="error">{{ $message }}</span> @enderror

                        @error('contacts_') <span class="error">{{ $message }}</span> @enderror
                        @error('content_') <span class="error">{{ $message }}</span> @enderror
                        @error('adresse') <span class="error">{{ $message }}</span> @enderror
                        @error('prix') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    {{--
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">summernote content</p>
                            <textarea class="form-control" placeholder="Description"  wire:model="content_" id="summernote" rows="3"></textarea>


                        </div>

                    </div> --}}

                     {{--
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">summernote contacts_</p>
                            <textarea class="form-control" placeholder="Informations de contact"  wire:model="contacts_" id="summernote" rows="3"></textarea>


                        </div>

                    </div> --}}

                    <div class="row row-sm mg-t-20">
                        <div class="col-lg-12 col-md-12">
                            <p class="mg-b-10">Catégorie</p>
                            <select class="form-control " wire:model="categoryId">

                                <option value="null" label="Choose one"></option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                @endforeach

                            </select>
                        </div><!-- col-4 -->
                        <div class="col-lg">
                            @error('categoryId') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>


                    <div class="row row-sm  mg-t-20">
                            <div class="col-lg-12 mg-t-5 mg-lg-t-5">
                                <p class="mg-b-10">Détails Supplémentaires</p>
                            </div>
                            <div class="col-lg-3 mg-t-5 mg-lg-t-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Nombre de salons
                                        </div>
                                    </div>
                                    <input class="form-control" wire:model="nbsalon" placeholder="salons" type="text">

                                </div><!-- input-group -->
                            </div><!--  -->


                            <div class="col-lg-3 mg-t-5 mg-lg-t-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Nombre de pièces:
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <input class="form-control"  wire:model="nbpieces" placeholder="pièces" type="text">

                                </div><!-- input-group -->
                            </div>

                            <div class="col-lg-3 mg-t-5 mg-lg-t-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            WC et Douches:
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <select class="form-control " wire:model="wcdouche">
                                        @foreach($tochooseoptions as $key => $value)
                                            <option value="{{ $key }}" label="{{$value}}"></option>

                                        @endforeach

                                    </select>
                                </div><!-- input-group -->
                            </div>

                            <div class="col-lg-3 mg-t-5 mg-lg-t-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Prix
                                        </div>
                                    </div>
                                    <input class="form-control " wire:model="prix" placeholder="MM/DD/YYYY" type="text">

                                </div><!-- input-group -->
                            </div><!-- col-4 -->
                            <div class="col-lg-4 mg-t-5 mg-lg-t-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Téléphone:
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <input class="form-control"  wire:model="phonenumber" placeholder="(000) 000-0000" wire:model="phonenumber" type="text">
                                </div><!-- input-group -->
                            </div>


                    </div>

                    <div class="row row-sm  mg-t-20">



                        <div class="col-lg">
                            <p class="mg-b-10">Addresse</p>

                            <textarea class="form-control" placeholder="Saisir une addresse"  wire:model="adresse" ></textarea>

                        </div>
                    </div>

                    <div class="row row-sm  mg-t-20">
                        <div class="col-lg-12 col-md-12">

                            <div>
                                <h6 class="card-title mb-2">Upload de Fichiers</h6>
                            </div>

						</div>
                        <div class="col-lg-12 col-md-12">


                            <div>
                                <input id="" type="file" wire:model="photos" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
                            </div>

                         </div>

                        <div class="col-lg-12">
                            <div class="row row-sm  mg-t-20">
                            @if ($photos)

                                @foreach($photos as $index => $photo)
                                <div class="col-lg-12 mg-b-5">
                                <div class="ff_fileupload_uploads bd  d-flex" style=" border-radius: 5px; ">
                                    <div class="ff_fileupload_preview ">
                                        <button class="ff_fileupload_preview_image ff_fileupload_preview_image_has_preview"  style="background-image:url('{{ $photo->temporaryUrl() ??  Storage::disk('public')->url($photo->path)  }}');width: 50px;height: 50px;" type="button" aria-label="Preview" style="background-image: url(&quot;blob:{{ $photo->temporaryUrl() ??  Storage::disk('public')->url($photo->path)  }}&quot;);">
                                            <span class="ff_fileupload_preview_text"></span>
                                        </button>

                                    </div>
                                    <div class="ff_fileupload_summary " style="    flex: 1 0 0%;">
                                        <div class="ff_fileupload_filename d-flex">
                                            <input type="text" >
                                        </div>
                                        <div class="ff_fileupload_fileinfo" style="line-height: normal;    font-size: 0.9em;white-space: normal;">45.84 KB | .png</div>

                                    </div>
                                    <div  style="flex: 1 0 0%;">
                                        <button class="btn btn-sm btn-warning  float-right" type="button" wire:click="removeImage({{ $index }})"  aria-label="Remove from list">Supprimer</button>
                                    </div>
                                </div>
                                </div>
                                @endforeach


                            @endif
                            </div>



                            @error('photos.*') <span class="error">{{ $message }}</span> @enderror


                        </div>

                        <div class="col-lg-12">
                            <div class="row row-sm  mg-t-20">
                            @if ($images)

                                @foreach($images as $photo)
                                <div class="col-lg-12 mg-b-5">
                                <div class="ff_fileupload_uploads bd  d-flex" style=" border-radius: 5px; ">
                                    <div class="ff_fileupload_preview ">
                                        <button class="ff_fileupload_preview_image ff_fileupload_preview_image_has_preview"  style="background-image:url('{{  Storage::disk('public')->url($photo->path)  }}');width: 50px;height: 50px;" type="button" aria-label="Preview" style="background-image: url(&quot;blob:{{ $photo->temporaryUrl() ??  Storage::disk('public')->url($photo->path)  }}&quot;);">
                                            <span class="ff_fileupload_preview_text"></span>
                                        </button>

                                    </div>
                                    <div class="ff_fileupload_summary " style="    flex: 1 0 0%;">
                                        <div class="ff_fileupload_filename d-flex">
                                            <input type="text" >
                                        </div>
                                        <div class="ff_fileupload_fileinfo" style="line-height: normal;    font-size: 0.9em;white-space: normal;">45.84 KB | .png</div>

                                    </div>
                                    <div  style="flex: 1 0 0%;">
                                        <button class="btn btn-sm btn-warning  float-right" type="button" aria-label="Remove from list">Supprimer</button>
                                    </div>
                                </div>
                                </div>
                                @endforeach


                            @endif
                            </div>



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


