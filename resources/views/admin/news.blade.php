@extends('layouts.admin.admin')

@section('content')

    <main class="form-news mt-5">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Post berita
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fw-normal" id="exampleModalLabel">Pos berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/news" class="news-form" method="post" id="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-grup">
                                        <textarea class="form-control textarea-news" style="resize: none" rows="7"
                                            id="content" name="content" placeholder="Content" required=""
                                            background-color="grey"></textarea><br>
                                    </div>
                                </div>

                                <br><br>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" class="form-control form-control-lg" id="image" name="image"
                                            required="" autofocus="">
                                    </div>

                                    <br>

                                    <div class="form-group form_left">
                                        <input type="text" class="form-control form-control-lg" id="title" name="title"
                                            placeholder="Title" required="">
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                    fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                                </svg>
                                                Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($news as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->image }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->content }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection
