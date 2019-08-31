@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="box box-header" style="height: 10%">

        <a href="{{route('bordero.index')}}" class="fa fa-arrow-left" style="background-color: white"></a>
        <h2>Editar Borderô</h2>
    </div>
@endsection

@section('content')

    <!-- Create Modal -->
{{--    <div class="modal fade" id="createFareModal" tabindex="-1" role="dialog" aria-labelledby="createFareModalLabel"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h2 class="modal-title" id="createFareModalLabel">Nova Tarifa</h2>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form id="add-rate" method="post" action="{{ route('bordero.rates.create', [--}}
{{--                            'bordero' => $bordero->getKey(),--}}
{{--                            'rate' => '_rate_id_'--}}
{{--                        ]) }}"--}}
{{--                    >--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>Tarifa: </label>--}}
{{--                                <select class="form-control" id="rates"></select>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>Valor: </label>--}}
{{--                                <div class="input-group">--}}
{{--                                    <span class="input-group-addon">$</span>--}}
{{--                                    <input id="rate-value" type="number" class="form-control"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>--}}
{{--                    <button id="add-rate-submit" type="button" class="btn btn-primary">Salvar</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Edit Modal -->
    <div class="modal fade" id="editFareModal" tabindex="-1" role="dialog" aria-labelledby="editFareModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="editFareModalLabel">Editar Tarifa</h2>
                </div>
                <div id="edit-fare-modal-body" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button id="update-rate-submit" type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    {!! form_start($form) !!}


    <div class="box box-body box-info" style=" margin-top: -25px;">
        <div class="col-md-9 justify-content-between">
            {{--            PRIMEIRA LINHA--}}
            <div class="row">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Projeto</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->pro_id) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-3 justify-content-between" style="padding: 0px;">
                        <label style=" ">Data Op.</label>
                    </div>
                    <div class=" col-md-9">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_dataope) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Numero Bor.</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_numero) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-3">
                        <label style=" ">Data Crédito</label>
                    </div>
                    <div class=" col-md-9">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bor_dt_cred) !!}

                        </div>
                    </div>

                </div>

            </div>
            {{--            SEGUNDA LINHA--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Portador</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bco_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7 justify-content-between" style="padding: 0px;">
                        <label style=" ">Qtd.Títulos</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qtd_tit) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label>Vlr Bruto Bordero</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Custo Efet. Acordado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_cst_com_iof) !!}

                        </div>
                    </div>

                </div>

            </div>

            {{--            Terceira Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Carteira</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->car_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7" style="padding-left: 1px; padding-right: 1px">
                        <label style=" ">Qtd.Recusada</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qt_recusada) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Vlr Bruto Recusado</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto_recusado) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Prazo Médio Pond. Emp.</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_pz_med_emp) !!}
                        </div>
                    </div>

                </div>

            </div>
            {{--            QUarta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Tipo Recebível</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->tir_id) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7" style="padding-left: 1px;">
                        <label style=" ">Qtd.Final</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qtd_final) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Vlr Bruto Final</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto_final) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Prazo Médio Pond. Banco</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_pz_med_bco) !!}
                        </div>
                    </div>

                </div>

            </div>

            {{--            QUinta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Utilização Recurso</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->url_id) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4" style="padding-left: 1px;">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Valor Total Tarifas</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_tot_tarifas) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Float Acordado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_acordado) !!}
                        </div>
                    </div>

                </div>

            </div>

            {{--            Sexta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4" style="padding-left: 1px;">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Valor Liquido</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_liquido) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Float Calculado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_calc) !!}
                        </div>
                    </div>

                </div>

            </div>
            {{--            Sétima Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Custo Efetivo Pz Med c/ Float Acordado</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">

                            {!! form_widget($form->bor_tx_empresa)!!}
                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Valor Liquido Correto</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_liq_correto) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label>Diferença Float</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_dif) !!}
                        </div>
                    </div>

                </div>


            </div>
            {{--            Oitava Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label>Custo Efetivo Prazo Médio</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bor_cst_efetivo) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Diferença Calculo Valor Liquido</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_chk_liq) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label>Checagem IOF</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_chk_iof) !!}
                        </div>
                    </div>

                </div>


            </div>
            {{--            Nona Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">

                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">

                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Status</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_status) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>


            </div>
            <br>
            {{--            Décima Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="">

                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>Recompra</label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_recompra) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>
                                Fomento
                            </label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_fomento) !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style=" padding-left: 10px">

                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>Retenção</label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_retencao) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>
                                Outros
                            </label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_per_outros) !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 justify-content-between" style="padding-left: 10px">

                    <div class="col-md-5">
                        <label style="font-size: medium">Valor Liquido Recebido</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-lg">
                            {!! form_widget($form->bor_liq_recebido) !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="btn-group col-md-12">
                {!! form_widget($form->submit) !!}
            </div>

            <div class="hidden">
                {!! form_rest($form) !!}
            </div>

            {!! form_end($form) !!}
        </div>
        <div class="col-md-3 justify-content-between" style=" padding: 0px">
            <h2>Tarifas Borderô</h2>
            <div class="box box-header" style="box-shadow: #7a869d">
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-primary" id="btnCreateRate">
                    Nova Tarifa
                </button>

                <div id="tarifas" class="table-responsive-sm">

                </div>

                <div id="rowInsertRate" class="row hidden">
                    <form id="add-rate" method="post" action="{{ route('bordero.rates.create', [
                            'bordero' => $bordero->getKey(),
                            'rate' => '_rate_id_'
                        ]) }}"
                    >
                            <div class="col-sm-6">
                                <select class="form-control" id="rates"></select>
                            </div>
                            <div class="col-sm-6">
                                <input id="rate-value" type="number" class="form-control"/>
                            </div>

                            <div class="col-sm-12" style="margin-top: 8px">
                                <button id="add-rate-submit" type="submit" class="btn btn-primary btn-sm btn-block form-control">
                                    Salvar
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        function loadBorderoRates() {
            $.ajax({
                url: "{{ route('bordero.rates', '_id_') }}"
                    .replace('_id_', '{{ $bordero->getKey() }}'),
                method: 'GET',
                success: function (response) {
                    $('#tarifas').html(response);
                },
                error: function (error) {
                    $('#tarifas').empty();
                }
            })
        }

        function loadRates() {
            $.ajax({
                url: "{{ route('rate.index') }}",
                method: 'GET',
                success: function (response) {
                    var rates = response.items;
                    var html = "";

                    for (var rate of rates) {
                        html += `<option value=${rate['tar_id']}>${rate['tar_desc']}</option>`
                    }

                    $("#rates").html(html);
                },
                error: function (error) {
                    $('#rates').empty();
                }
            })
        }

        function loadRate(rateId) {
            $.ajax({
                url: "{{ route('bordero.rates.edit', [
                    'bordero' => $bordero->getKey(),
                    'rate' => '_rate_id_'
                ]) }}".replace('_rate_id_', rateId),
                method: 'GET',
                success: function (response) {
                    $('#edit-fare-modal-body').html(response);
                },
                error: function (error) {
                    $('#edit-fare-modal-body').empty();
                }
            })
        }

        $(document).ready(function () {
            loadBorderoRates();

            //$('#money').mask('000.000.000.000.000,00', {reverse: true});

            $("#createFareModal").on('show.bs.modal', function () {
                loadRates();
            });

            $("#btnCreateRate").on('click', function () {
                $('#rowInsertRate').removeClass('hidden');
                loadRates();
            });

           // $(document).on('click', "#add-rate-submit", function () {
                //console.log('teste');
                //document.getElementById("add-rate").submit();
                //$("#add-rate").submit();
            //});

            $("#update-rate-submit").on('click', function () {
                var value = $('#rate-value-edit').val();
                var url = $('#update-rate').attr('action');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    url,
                    method: 'PUT',
                    dataType: "json",
                    data: {
                        amount: value
                    },
                    success: function (response) {
                        loadBorderoRates();
                         $('#editFareModal').modal('toggle');
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });

            });

            $("#add-rate").on('submit', function (e) {
                e.preventDefault();
                var value = $('#rate-value').val();
                var rate = $('#rates').val();
                var url = $('#add-rate').attr('action').replace('_rate_id_', rate);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    url,
                    method: 'POST',
                    dataType: "json",
                    data: {
                        amount: value
                    },
                    success: function (response) {
                        loadBorderoRates();
                        $('#rowInsertRate').addClass('hidden');
                        // $('#createFareModal').modal('toggle');
                    },
                    error: function (error) {
                        console.log(error);
                    },
                })
            });

            $(document).on('click', '.delete-rate', function () {
                const rateId = $(this).data('id');

                if (confirm('Confirma deletar?')) {
                    $.ajax({
                        url: "{{ route('bordero.rates.destroy', [
                            'bordero' => $bordero->getKey(),
                            'rate' => '_rate_id_'
                        ]) }}".replace('_rate_id_', rateId),
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        success: function () {
                            window.location.reload();
                        },
                        error: function () {
                            alert('Erro ao deletar item!');
                        },
                    })
                }
            });

            $(document).on('click', '.update-rate', function () {
                const rateId = $(this).data('id');

                loadRate(rateId);

                $('#editFareModal').modal('show');
            });
        });


    </script>
@endsection
