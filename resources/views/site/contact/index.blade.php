@extends('site.layout.master') @section('content')

<div class="container pt-5 pl-3 pr-3 pb-3">

    @include('site.layout.includes.header')

    <form action="{{ route('site.store') }}" method="POST" class="form-control pt-4 pb-4 border-0">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="text-secondary" for="User">Nome:</label>
                    <input type="text" class="form-control"  name="user">
                </div>
                <div class="form-group">
                    <label class="text-secondary" for="Email">Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label class="text-secondary" for="Subject">Assunto:</label>
                    <select class="form-control" name="subject" id="">
                        <option value="Camisa">Camisas</option>
                        <option value="Bermuda">Bermudas</option>
                        <option value="Tenis">Tenis</option>
                        <option value="Bone">Bonés</option>
                        <option value="Chinelo">Chinelos</option>
                    </select>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>



            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-secondary" for="Message">Menssagem</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

        </div>
    </form>
</div>

@endsection