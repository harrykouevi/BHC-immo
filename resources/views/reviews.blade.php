@extends('layouts.app')

@section('title', 'Soumettre un Avis')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
    <style>
        .star-rating {
            direction: rtl;
            display: flex;
        }

        .star {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .star:hover,
        .star:hover ~ .star {
            color: #f2b600; /* Couleur des étoiles au survol */
        }

        input[type='radio'] {
            display: none; /* Cacher les boutons radio */
        }

        /* Styles supplémentaires pour correspondre à la page fournie */
        .form-container {
            background-color: #ffffff; /* Couleur de fond du formulaire */
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            color: #333; /* Couleur des labels */
        }

        .submit-button {
            background-color: #23c2ff; /* Couleur du bouton */
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #1a9dcf; /* Couleur du bouton au survol */
        }
    </style>
@endpush

@section('content')
    <div class="container mt-5">
        <h3 class="text-dark-gray fw-700">Laissez votre avis</h3>

        <form action="{{ route('reviews.store') }}" method="POST" class="form-container">
            @csrf
            <input type="hidden" name="annonce_id" value="{{ $annonce->id }}">

            <div class="star-rating mb-3">
                <input type="radio" id="star5" name="rating" value="5" />
                <label for="star5" class="star">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star4" class="star">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star3" class="star">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star2" class="star">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star1" class="star">&#9733;</label>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Écrivez votre avis ici...</label>
                <textarea id="content" name="content" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="submit-button">Soumettre l'avis</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('mouseover', () => {
                const rating = star.getAttribute('for').replace('star', '');
                highlightStars(rating);
            });

            star.addEventListener('mouseout', () => {
                resetStars();
            });
        });

        function highlightStars(rating) {
            document.querySelectorAll('.star').forEach(star => {
                if (parseInt(star.getAttribute('for').replace('star', '')) <= rating) {
                    star.style.color = '#f2b600';
                } else {
                    star.style.color = '#ccc';
                }
            });
        }

        function resetStars() {
            document.querySelectorAll('.star').forEach(star => {
                star.style.color = '#ccc';
            });
        }
    </script>
@endpush
