
{{-- @can('view') --}}
@extends('dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('layouts.partials.alert-messages')
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            {{-- Dados gerais --}}
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-settings-general" data-toggle="pill" href="#settings-general" role="tab" aria-controls="pills-general" aria-selected="true">Geral</a>
            </li>
            {{-- Gateway --}}
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-settings-gateway" data-toggle="pill" href="#settings-gateway" role="tab" aria-controls="pills-gateway" aria-selected="true">Gateway</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            {{-- Genera --}}
            <div class="tab-pane fade show active" id="settings-general" role="tabpanel" aria-labelledby="settings-email">
                @include('admin.config._general')
            </div>
            {{-- Gateway --}}
            <div class="tab-pane fade" id="settings-gateway" role="tabpanel" aria-labelledby="settings-gateway">
                @include('admin.config._gateway')
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @endcan --}}
