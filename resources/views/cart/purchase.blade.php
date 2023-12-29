@extends('layouts.app')

<<<<<<< HEAD
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

=======

@section('title', $viewData['title'])


@section('subtitle', $viewData['subtitle'])


@section('content')
   <div class="card">
       <div class="card-header"> Purchase Completed
       </div>
       <div class="card-body">
        <div class="alert alert-success" role="alert">
            Congratulations, purchase completed. Order number is <b>#{{ $viewData['order']->id}}</b>
        </div>
    </div>
           
>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
@endsection
