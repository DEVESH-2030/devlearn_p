@extends('backend.layouts.app')

@section('content')
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <!-- ! Main -->
    <main class="main new-post-main" id="skip-target">
        <div class="container">
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="main-title-wrapper">
                    <h2 class="main-title">Upload New Image</h2>
                    <div class="main-btns-wrapper">
                        <button class="primary-default-btn" type="submit">Upload</button>
                        <button class="primary-white-btn" type="button"><i data-feather="x"></i>Cancel</button>
                    </div>
                </div>
                <div class="row new-page__row">
                    <div class="col-xl-6 col-md-6">
                        <div class="white-block">
                            <p class="white-block__title">Image</p>
                            <div class="dropzone-wrapper" id="dropzone">
                                <div class="dropzone-start">
                                    <span class="icon thumbnail" aria-hidden="true"></span>
                                    <input type="file" name="image" id="image" accept="image/png, image/jpeg">
                                    {{-- <p class="dropzone-hint" >Drop files to upload or</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
