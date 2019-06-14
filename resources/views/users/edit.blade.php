@extends('welcome')
@section('title')
    Profil de {{$user->name}}
@endsection()
@section('content')

    @extends('welcome')
@section('title')
    Profil de {{$user->name}}
@endsection()
@section('content')





    <div id="wrapper-container">

        <div class="container object">

            <div style="text-align: center">

                <div>
                    <p style="font-weight: bold; font-size: 30px;">Profil de {{$user->name}}</p>
                </div>

                <div>
                    <figure>
                        <img style="width: 256px" src="{{asset('storage/' . $user->avatar)}}" alt="" />
                    </figure>
                    <form method="post" action="{{ route('app_user_update',['id' => $user->id]) }}">
                        @csrf

                        <div class="form-group">
                            <label style="font-weight: bold;" for="name">Mon nom d'utilisateur: </label>
                            <input type="text" class="form-control" name="name" value={{ $user->name }} />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="price">Mon adresse mail: </label>
                            <input type="text" class="form-control" name="email" value={{ $user->email }} />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="quantity">Mot de passe: :</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>



                </div>
            </div>

            <p style="font-weight: bold; font-size: 26px;">Tous les works de {{$user->name}}</p>
            @inject('works', 'App\Http\Controllers\WorkController')
            {!! $works->indexUser($user->id) !!}
        </div>

    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>

@endsection
@endsection
