@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-12" style="margin-left: auto; margin-right: auto;">
            <div class="card-body">
                <div class="col-6">
                    <h1>Dodawanie nowego posta</h1>
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Tytuł</label>
                            <input name="title" type="text" class="form-control" placeholder="Wiosenna sałatka owocowa.." required>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Miniaturka</label>
                            <input type="file" name="thumbnail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Opis</label>
                            <input name="description" type="text" class="form-control" placeholder="Lorem ipsum dolor sit amet.." required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Treść</label>
                            <textarea class="form-control" rows="10" name="content" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Zatwierdź</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
