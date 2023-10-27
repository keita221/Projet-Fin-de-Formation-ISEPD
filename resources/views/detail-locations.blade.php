<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <title>Document</title>
    <style>
           .cont {
            display: flex;
            gap: 35px;
           }
           .top {
            background: white;
            padding: 50px;
            width: 40%;
           }
           .item-input {
            padding: 16px;
            width: 100%;
            margin: auto;
            background: white;
            border: 1px solid #dedede;
            border-radius: 8px;
            border-left: 7px solid orange;
          }
          .btn1 {
            border-radius: 8px;
            border: 1px solid orange;
            padding: 0.6em 1.2em;
            font-size: 1em;
            font-weight: 500;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            background-color: orange;
            cursor: pointer;
            transition: border-color 0.25s;
            color: white;
            text-decoration: none;
          }
    </style>
</head>
<body> 
@extends('layouts.header')
    @section('content')
       <section class="section">
               <div class="container">
               <h5>Detaille de location</h5>
                        <div class="cont">
                           <div class="top">
                           <center><img src="{{ asset('storage/'.$detail->image) }}" width="250px" height="180px"></center>
                           </div>
                              <div>
                                  <h5>Numero: <strong>{{$detail->numero}}</strong></h5>
                                  <h5>Description: <strong>{{$detail->description}}</strong></h5>
                                  <h5>Nombre de Places: <strong>{{$detail->places}}</strong></h5>
                                  <h5>Date de location: <strong>date du jour</strong></h5>
                                  <input type="number" class="item-input" placeholder="quantite"><br><br>
                                  <a href="" class="btn1">Louer</a>
                              </div>
                   </div>
               </div>
       </section>
       <footer>
        <div class="container">
          <div class='footer-item'>
            <div>
              <div>
                 <img src="{{asset('image/logo.png')}}" width='100px' height='60px'>
              </div>
              <p class='item-pied'>adipisicing elit. Optio ratione itaque sequi rem vel ipsa numquam at nam unde explicabo!</p>
            </div>
            <div>
              <h4 class='item-h4'>Get in Touch</h4>
              <p class='item-pied'> 8819 Ohio St. South Gate, CA 90280.</p>
              <p class='item-pied'>charodesignestudio@gmail.com</p>
              <p class='item-pied'>+221 337899087.</p>
            </div>
            <div>
              <div class='item-p'>
                <p class='ronded'><a href="" class='rond'>FB</a></p>
                <p class='ronded'><a href="" class='rond'>IN</a></p>
                <p class='ronded'><a href="" class='rond'>LN</a></p>
                <p class='ronded'><a href="" class='rond'>YB</a></p>
              </div>
              <p class='item-pied'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, assumenda?.</p>
            </div>
            <div>
              <h4 class='item-h4'>Join a Newsletter</h4>
              <div>
                <label htmlFor="" class='item-pied'>your email</label>
                <input type="text" class='inpute' placeholder='ecrire ici...'/>
              </div><br />
                <input type="submit" name="" id="env" class='button'/>
            </div>
          </div>
        </div>
        </footer>
        <div class="pied-footer">
             <div class="container">
                <div class="foot">
                    <center><p class="pid">Created by | <strong>GERALD CHARO KEITA</strong> | @2023</p></center>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>