@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div style="padding-left: 15px">
    <div class="row">
        <h2>Antecipação de Recebiveis</h2>
    </div>
@endsection

@section('content')
    <div class="box-body table">
            <a href="{{ route('bordero.create') }}" class="btn btn-primary">Criar Bordero</a>
    @if (count($borderos) > 0)
        <table class="table table-bordered table-hover table-striped dataTable"
               role="grid" aria-describedby="">
            <thead class="">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PROJETO</th>
                <th scope="col">PORTADOR</th>
                <th scope="col">DATA</th>
                <th scope="col">VALOR BRUTO</th>
                <th scope="col">VALOR LIQUIDO</th>
            </tr>
            </thead>
            <tbody>
            <div>
                @foreach ($borderos as $bordero)

                    <tr>
                        <td>{{$bordero->bor_id}}</td>
                        <td>{{$bordero->dprojeto->pro_nome }}</td>

                        <td>{{$bordero->dbanco->bco_nome}}</td>

                        <td>{{$bordero->bor_dataope}}</td>
                        <td>{{$bordero->bor_vlr_bruto}}</td>
                        <td>{{$bordero->bor_vlr_liquido}}</td>
                        <td align="center">
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-sm btn-success" href="{{ route('bordero.show',$bordero->bor_id) }}">MOSTRAR</a>
                            <a href="{{route('bordero.edit',$bordero->bor_id)}}" class="btn btn-sm btn-info">EDIT</a>
                            <button data-id="{{ $bordero->getKey() }}" class="btn btn-sm btn-danger delete-bordero">DELETE</button>
                        </td>
                    </tr>
                @endforeach
            </div>
            </tbody>

        </table>
        <div class="text-center">
            {{$borderos->links()}}
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Não existem títulos cadastrados!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    </div>
@endsection


@section('js')
    <script>
        $('.delete-bordero').on('click', function () {
           const borderoId = $(this).data('id');


           if (confirm('Confirma deletar?')) {
               $.ajax({
                   url: "{{ route('bordero.destroy', '_id_') }}".replace('_id_', borderoId),
                   method: 'DELETE',
                   headers: {
                       'X-CSRF-TOKEN': "{{ csrf_token() }}"
                   },
                   success: function () {
                       alert('Item deletado com sucesso!');
                       window.location.reload();
                   },
                   error: function () {
                       alert('Erro ao deletar item!');
                   },
               })
           }
        });
    </script>
@endsection
