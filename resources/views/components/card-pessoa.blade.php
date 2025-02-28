<div class="card p-3 my-3">
    <h3>{{$nomePessoa}}</h3>
    <hr>
    <p class="text-light">Línguas que domina:</p>
    <ul>
        @foreach($linguasPessoa as $lingua)
            <li class="text-warning">{{$lingua}}</li>
        @endforeach
    </ul>
</div>
