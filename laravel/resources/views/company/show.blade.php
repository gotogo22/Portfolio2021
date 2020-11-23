@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Add</div>
                <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->id }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('会社名') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->name }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->phone }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('所在地') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->adress }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="employees" class="col-md-4 col-form-label text-md-right">{{ __('従業員数') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->employees }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="language" class="col-md-4 col-form-label text-md-right">{{ __('言語') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->language }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('事業内容') }}</label>
                        <div class="col-md-6 input-group-text">
                            {{ $companies->content }}
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('companies.edit', $companies->id)  }}'" method="put">
                                {{ __('変更') }}
                            </button>
                            <form style="display:inline" action="{{ route('companies.destroy', $companies->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    {{ __('削除') }}
                                </button>
                            </form>
                            <button type="button" class="btn btn-primary" onclick="history.back()">
                                {{ __('戻る') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
