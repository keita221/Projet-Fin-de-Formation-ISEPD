<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('scss/main.css')}}">
    <title>Document</title>
    <style>
           /* Review style starts  */
.box-container {
    display:flex;
    justify-content: center; 
    gap: 30px;  
}
.box {
    width:30rem;
    text-align: center;
    padding:0 1rem; 
    box-shadow: 0 .1rem .1rem rgba(0,0,0,2  );
}
.box i {
    font-size:6rem; 
    margin-top:-3rem; 
    color:var(--red);
    opacity: .4;
}
   .box p {
    font-size:1.3rem; 
    color:#666;
    padding:2rem 0;
}
.box .user {
    display: flex;
    align-items: center;
    text-align: left;
    padding:.5rem 0;
    border-top:.1rem solid #3334;

}
.box .user img {
    width:4rem; 
    height:4rem; 
    border-radius: 50%;
    object-fit: cover;
    margin:.8rem 1rem; 
}
.box .user .info h3 {
    font-size:1.4rem; 
    color:black;
}
.box .user .info span {
    font-size:1rem; 
    color: red;
}
/* Review style ends  */
.prod {
         background-color: white;
         border-radius: 8px;
         padding: 24px;
         box-shadow: 0 .1rem .1rem rgba(0,0,0,2  );
      }
.voir {
            background-color: orange;
            padding: 6px;
            text-decoration: none;
            color: white;
            border-radius: 8px;
        }
 .flex {
          display: flex;
          justify-content: space-between;
        }
        .par {
            color: #F4F3F3;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 160%;
            flex-shrink: 0;
            padding-bottom: 20px;
          }
        .tit {
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
        }
        .btn0 {
            display: flex;
            width: 178.513px;
            height: 40.527px;
            padding: 14px 17px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            gap: 10px;
            flex-shrink: 0;
            padding-bottom: 20px;
            background-color: orange;
          }
          strong {
            color: orange;
          }
    </style>
</head>
<body>
    @extends('layouts.header')
        @section('content')
        <main>
            <section class=" sections section-loading">
                <div class="container">
                                
                </div>
                <div class="container">
                        <div class="flexs">
                            <div>
                                <h1 id='titre'>Avec <strong>SEN VOYAGE</strong> sur un click simple seulement effectuer votre location de bus ou de mini-bus</h1>
                                <p class="par">Avec sen voyage vous pouvez egalement effectuer un demamde d'envoi de colis ou encore une demande de location de bus, mini-bus. SEN VOYAGE, une agence de transport de haut niveau</p>
                                <a href="{{route('contact.create')}}" class="btn0">Nous Contactez</a>     
                            </div>
                            <div>
                                <img src="{{asset('image/nana (3).svg')}}" width="800px">
                            </div>  
                        </div>           
                </div>
            </section>

            <section class="section section-white">
    			<div class="container">
    				<h3 class="section-title2">Nos Bus en  Location</h3>
         
              <div class="container">
                <div class="row ">
                  @foreach($loc as $bus)
                  @if($bus->etat === "En_fonction")
                    <div class="col-4">
                      <div class="prod ">
                        <a href="{{route('locations.detail',$bus->id)}}" class="voir">voir</a>
                        <center><img src="{{ asset('storage/'.$bus->image) }}" width="150px" height="80px"></center>
                        <center><p>{{$bus->numero}}</p></center>
                        <hr>
                        <div class="flex">
                        <p>200L/jour</p>
                        <p><strong>5000F cfa/Jour</strong></p>
                      </div>
                    </div><br>
                    </div>
                    @endif
                  @endforeach
                </div>
               </div>        
    			    </div>
    		</section>

    		<section class="section section-second">
    			<div class="container">
    				<h3 class="section-title2">Nos services clientel</h3>

                        <div class='clientele'>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Transport Voyage</h3>
                            </div>
                                <div class='react react-one'>
                                <img src="{{asset('scss/route 2.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Transport Scolaire</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Transport Societe</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 4.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Transport Personel</h3>
                            </div>
                        </div>
    			</div>
    		</section>

    		<section class="section review section-white">
    			<div class="container">
    				<h3 class="section-title2">Ce qu'ils pensent de nous</h3>

                    <div class="box-container">

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-1.png')}}" alt="">
                                <div class="info">
                                    <h3>Gerald charo KEITA</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-2.png')}}" alt="">
                                <div class="info">
                                    <h3>Arame THIAM</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum hic repellendus, quo cum at incidunt nulla quas quisquam optio?
                            </p>
                            <div class="user">
                                <img src="{{asset('image/pic-3.png')}}" alt="">
                                <div class="info">
                                    <h3>Oumoul khairy SALL</h3>
                                    <span>jan 5, 2022</span>
                                </div>
                            </div>
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
        </main>
        @endsection
    
   
   
  
  
   
</body>
</html>