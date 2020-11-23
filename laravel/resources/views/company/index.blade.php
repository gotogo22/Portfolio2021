@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Conpany Index</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--成功時のメッセージ--}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('name')}}</th>
                                    <th>{{__('phone')}}</th>
                                    <th>{{__('adress')}}</th>
                                    <th>{{__('employees')}}</th>
                                    <th>{{__('language')}}</th>
                                    <th>{{__('content')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($companies))  // $adminデータ存在チェック
                                    @foreach ($companies as $company)  // テーブル作成
                                        <tr>
                                            <td><a href="/companies/{{ $company->id }}">{{ $company->id }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->phone }}</td>
                                            <td>{{ $company->adress}}</td>
                                            <td>{{ $company->employees}}</td>
                                            <td>{{ $company->language }}</td>
                                            <td>{{ $company->content }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
