
<li>
    <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
        <div class="w-90px sm-w-65px sm-mb-10px">
            <img src="https://via.placeholder.com/130x130" class="rounded-circle" alt="">
        </div>
        <div class="w-100 ps-30px last-paragraph-no-margin sm-ps-0">
            <a href="#" class="text-dark-gray fw-600">{{ $comment->user->name }}</a>
            <a href="#comments" class="btn-reply text-uppercase section-link">Reply</a>
            <div class="fs-14 lh-24 mb-10px">17 July 2020, 6:05 PM</div>
            <p class="w-85 sm-w-100">{{ $comment->body }}.</p>
        </div>
    </div>

</li>
