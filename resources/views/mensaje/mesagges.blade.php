@if(isset($errors) && count ($errors) > 0 )
<div class="alerta">
    <ul class="lista">
        @foreach ($errors->all() as $error )
        <li> {{$error}} </li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::get('succes', false))
    <?php $data = Session::get('succes'); ?>
        @if (is_array($data))
            @foreach ($data as $message)
                <div class="alerta-succes"> 
                    <i class="checar"></i>
                    {{$message}}
                </div>

            @endforeach
        @else
            <div class="alerta-succes"> 
                <i class="checar"></i>
                {{$data}}
            </div>    
        @endif

@endif