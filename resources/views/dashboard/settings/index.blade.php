@extends('layouts.dashboard')
@section('content')
        <div class="card-header">
            <h5>
                <a href="{{ route('settings.create') }}" class="btn btn-success bi bi-plus-circle"> НОВО ПОДЕСУВАЊЕ </a>
                @if($setting)
                    <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning bi bi-pen"> ИЗМЕНА НА ОВА ПОДЕСУВАЊЕ </a>
                @endif
            </h5>
            @if($setting)
            <div class="col-12 mb-lg-5 ">
                <div class="card w-100 mb-lg-5 text-bg-primary">
                    <div class="card-body text-center">
                        <h5 class="card-title">Наслов</h5>
                        <p class="card-text">{{ $setting->title }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Главно URL</h5>
                            <p class="card-text">{{ $setting->main_url }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Е-Пошта</h5>
                            <p class="card-text">{{ $setting->email }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Опис</h5>
                            <p class="card-text">{{ $setting->description }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Лого</h5>
                            <p class="card-text">{{ $setting->logo }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">

                    <div class="card-body">
                            <h5 class="card-title">Средно лого</h5>
                            <p class="card-text">{{ $setting->logo_medium }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                    <div class="card-body">
                            <h5 class="card-title">Лого за приказ</h5>
                            <p class="card-text">{{ $setting->logo_thumb }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Линк</h5>
                            <p class="card-text">{{ $setting->link }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Адреса</h5>
                            <p class="card-text">{{ $setting->link }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Телефон</h5>
                            <p class="card-text">{{ $setting->phone }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Twitter</h5>
                            <p class="card-text">{{ $setting->twitter }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Facebook</h5>
                            <p class="card-text">{{ $setting->facebook }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Skype</h5>
                            <p class="card-text">{{ $setting->skype }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Linkedin</h5>
                            <p class="card-text">{{ $setting->linkedin }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">GPlus</h5>
                            <p class="card-text">{{ $setting->g_plus }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Youtube</h5>
                            <p class="card-text">{{ $setting->youtube }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Flickr</h5>
                            <p class="card-text">{{ $setting->flickr }}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">{{ $setting->pinterest}}</p>
                        </div>
                    </div>
                    <div class="card w-100 mb-lg-5 text-bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Последна промена од</h5>
                            <p class="card-text">{{ $setting->user->name }} ({{ $setting->user->role->name }}) во  {{ \Carbon\Carbon::parse($setting->updated_at)->format('d-M-Y H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('settings.destroy', $setting->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger bi bi-trash"> ИЗБРИШИ ПОДЕСУВАЊЕ </button>
            </form>
            @endif
        </div>

    <!--/ends::table card-->
@endsection
