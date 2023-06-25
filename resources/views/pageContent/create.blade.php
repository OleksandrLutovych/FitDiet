@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12" style="margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <div class="col-6">
                        <h1>Create new page</h1>
                        <form method="POST" action="{{ route('pageContent.addPage') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="pageName" class="form-label">Page name</label>
                                <input name="pageName" type="text" class="form-control" placeholder="About us.."
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="pageTitle" class="form-label">Title</label>
                                <input name="pageTitle" type="text" class="form-control"
                                    placeholder="We are the best company in..." required>
                            </div>
                            <div class="mb-3">
                                <label for="pageSubtitle" class="form-label">Subtitle</label>
                                <input type="text" name="pageSubtitle" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="pageContent" class="form-label">Page content</label>
                                <input name="pageContent" type="text" class="form-control"
                                    placeholder="Lorem ipsum dolor sit amet.." required>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
