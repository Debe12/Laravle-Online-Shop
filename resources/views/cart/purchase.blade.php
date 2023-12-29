@extends('layouts.app')

@section('title', $viewData['title'])

@section('subtitle', $viewData['subtitle'])

@section('content')

    <div class="card">

        <div class="card-header">Purchase Compled
            </div>
<div class="card-body">
                
    

            <div class="alter-alter-success" role="alter">

                Congradulation Purchase is Complited.Order number is <b>#{{$viewData['order']->id}}</b>
        
                          


            </div>

        </div>

    </div>

@endsection
