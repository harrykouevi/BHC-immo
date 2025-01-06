<div>


   <!-- start section -->
   <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-2">
                <h5 class="alt-font text-dark-gray fw-600 ls-minus-05px">{{ $comments->count() }} Comments</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <ul class="blog-comment">

                    @foreach($comments as $comment)
                        @livewire('comment-item',['comment' => $comment]) <!-- Include your Livewire component -->

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section id="comments" class="pt-0 overflow-hidden position-relative overlap-height">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-3">
                <h6 class="alt-font text-dark-gray fw-600 ls-minus-05p mb-5px">Laissez un commentaire</h6>
                <div class="mb-5px">Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués par *.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <livewire:comment-create :post-id="$post->id" />

            </div>
        </div>


    </div>


</section>
<!-- end section -->
</div>

