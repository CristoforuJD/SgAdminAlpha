@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <div class="box box-header" style="height: 10%">
        <h2>Antecipação de Recebíveis</h2>
    </div>
@endsection

@section('content')
    <div class="box box-body box-info" style="margin-top: -25px">

{{--        @if (count($borderos) > 0)--}}
            <table id="tabela_bordero" class="table table-bordered table-hover table-striped"
                   role="grid" aria-describedby="">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PROJETO</th>
                    <th scope="col">PORTADOR</th>
                    <th scope="col">DATA</th>
                    <th scope="col">VALOR BRUTO</th>
                    <th scope="col">VALOR LIQUIDO</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <div>
                    @foreach ($borderos as $bordero)

                        <tr>
                            <td>{{ $bordero->bor_id}}</td>
                            <td>{{ optional($bordero->dprojeto)->pro_nome }}</td>

                            <td>{{ optional($bordero->dbanco)->bco_nome}}</td>

                            <td>
                                {{ date( 'd/m/Y' , strtotime($bordero->bor_dataope))}}
                            </td>
                            <td>
                                {{  'R$ '.number_format($bordero->bor_vlr_bruto, 2, ',', '.') }}
                            </td>
                            <td>
                                {{  'R$ '.number_format($bordero->bor_vlr_liquido, 2, ',', '.') }}
                            </td>
{{-- ######################################--}}
                            <td align="center">
                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <a class="btn btn-sm btn-success" href="{{ route('bordero.show',$bordero->bor_id) }}">MOSTRAR</a>
                                <a href="{{route('bordero.edit',$bordero->bor_id)}}"
                                   class="btn btn-sm btn-info">EDIT</a>
                                <button data-id="{{ $bordero->getKey() }}" class="btn btn-sm btn-danger delete-bordero">
                                    DELETE
                                </button>
                            </td>
{{-- ######################################   --}}
                        </tr>
                    @endforeach
                </div>
                </tbody>

            </table>
{{--            <div class="text-center">--}}
{{--                {{$borderos->links()}}--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--                Não existem títulos cadastrados!--}}
{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        @endif--}}

    </div>
@endsection


@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tabela_bordero').DataTable({
                "dom":
                    "<'row'<'col-sm-12 col-md-6''<\"toolbar\">'><'col-sm-12 col-md-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "<i class=\"fa fa-search\"></i>",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    },
                },

            });
            $("div.toolbar").html('<a href="{{ route('bordero.create') }}" class="btn btn-primary">Criar Bordero</a>');
        });
    </script>


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
