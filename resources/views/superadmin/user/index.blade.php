@extends('layouts.app')


@section('tittle','Data User')
@section('menuSuperadminUser','active')

@section('content')
    @livewire('superadmin.user.index')
@endsection
{{-- @livewire('superadmin.user.index') --}}