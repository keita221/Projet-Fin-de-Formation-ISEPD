<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modification Ligne de Transport</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modification Ligne de Transport</h1>
        <form action="{{url('update/'.$ligne->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="libelle" class="form-label">Libelle</label>
                        <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Libelle de la ligne" value="{{$ligne->libelle}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre_bus" class="form-label">Nombre de Bus</label>
                        <input type="text" class="form-control" id="nombre_bus" name="nombre_bus" placeholder="Nombre de bus" value="{{$ligne->nombre_bus}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lieu" class="form-label">Lieu Depart</label>
                        <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de départ" value="{{$ligne->lieu}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="destination" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination" value="{{$ligne->destination}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua8zV+wv5ll2m1Xa3Uf5c5Fd/j5xmQIjB6tF5rs5Yf5P6f5L5P5W5O3j5M5" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .container {
            background-color: #fff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        .form-group {
            margin-bottom: 20px; 
        }

        .form-group label {
            color: #333; 
            font-weight: bold; 
        }

        .form-control {
            border-color: #28a745; 
        }

        .btn-success {
            background-color: #28a745; 
            color: #fff; 
            border: none; 
        }

        h1 {
            color: #333; 
        }
    </style>
    @endsection
</body>
</html>