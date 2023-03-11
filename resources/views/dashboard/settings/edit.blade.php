@extends('layouts.dashboard')
@section('content')

    <div class="card">
        <div class="card-header">Измена на подесување</div>
        <div class="card-body">
            <form method="post" action="{{ route('settings.update', $setting->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mt-2">
                            <label for="title">Наслов</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                   id="title" value="{{ $setting->title }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="main_url">Главно URL</label>
                            <input type="text" name="main_url" class="form-control @error('main_url') is-invalid @enderror"
                                   id="main_url" value="{{ $setting->main_url }}">
                            @error('main_url')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">E-пошта</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" value="{{ $setting->email }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="logo">Лого</label>
                            <input type="text" name="logo" class="form-control @error('logo') is-invalid @enderror"
                                   id="logo" value="{{ $setting->logo }}">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="logo_medium">Средно лого</label>
                            <input type="text" name="logo_medium" class="form-control @error('logo_medium') is-invalid @enderror"
                                   id="logo_medium" value="{{ $setting->logo_medium }}">
                            @error('logo_medium')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="logo_thumb">Лого за приказ</label>
                            <input type="text" name="logo_thumb" class="form-control @error('logo_thumb') is-invalid @enderror"
                                   id="logo_thumb" value="{{ $setting->logo_thumb }}">
                            @error('logo_thumb')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group mt-2">
                            <label for="link">Линк</label>
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                                   id="link" value="{{ $setting->link }}">
                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="address">Адреса</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                   id="address" value="{{ $setting->address }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="phone">Телефон</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                   id="phone" value="{{ $setting->phone }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror"
                                   id="twitter" value="{{ $setting->twitter }}">
                            @error('twitter')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror"
                                   id="facebook" value="{{ $setting->facebook }}">
                            @error('facebook')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="skype">Skype</label>
                            <input type="text" name="skype" class="form-control @error('skype') is-invalid @enderror"
                                   id="skype" value="{{ $setting->skype }}">
                            @error('skype')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group mt-2">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                                   id="linkedin" value="{{ $setting->linkedin }}">
                            @error('linkedin')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="g_plus">GPlus</label>
                            <input type="text" name="g_plus" class="form-control @error('g_plus') is-invalid @enderror"
                                   id="g_plus" value="{{ $setting->g_plus }}">
                            @error('g_plus')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="youtube">Youtube</label>
                            <input type="text" name="youtube" class="form-control @error('youtube') is-invalid @enderror"
                                   id="youtube" value="{{ $setting->youtube }}">
                            @error('youtube')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="flickr">Flickr</label>
                            <input type="text" name="flickr" class="form-control @error('flickr') is-invalid @enderror"
                                   id="flickr" value="{{ $setting->flickr }}">
                            @error('flickr')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="pinterest">Pinterest</label>
                            <input type="text" name="pinterest" class="form-control @error('pinterest') is-invalid @enderror"
                                   id="pinterest" value="{{ $setting->pinterest }}">
                            @error('pinterest')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="description">Опис</label>
                            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                   id="description" value="{{ $setting->description }}">
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-xl-4">
                    Submit
                </button>
            </form>

        </div>
    </div>

@endsection
