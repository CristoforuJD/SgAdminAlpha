@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row" style="padding-left: 15px">
        <h2>Editar Bordero</h2>
    </div>
@endsection
<style>

</style>
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Nova Tarifa</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-rate" method="post" action="{{ route('bordero.rates.create', [
                                        'bordero' => $bordero->getKey(),
                                        'rate' => '_rate_id_'
                                    ]) }}"
                    >
                        <div class="row">
                            <div class="col-md-4">
                                <label>Tarifa: </label>
                                <select class="form-control" id="rates"></select>
                            </div>
                            <div class="col-md-4">
                                <label>Valor: </label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input id="rate-value" type="number" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button id="add-rate-submit" type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    {!! form_start($form) !!}


    <div class="box box-body box-info" style="padding-left: 20px;">
        <div class="col-md-8">
            <div class="row">

                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->pro_id) !!}
                            {!! form_widget($form->pro_id) !!}

                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_dataope) !!}
                            {!! form_widget($form->bor_dataope) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_numero) !!}
                            {!! form_widget($form->bor_numero) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_dt_cred) !!}
                            {!! form_widget($form->bor_dt_cred) !!}
                        </div>
                    </div>
                </div>
                {{--            <div class="col">--}}
                {{--                <div class="box-body col-md-4" style=" padding-left: 20px">--}}
                {{--                    <div class="box box-body">--}}

                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>


            <div class="row">
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bco_id) !!}
                            {!! form_widget($form->bco_id) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-body col-md-3" style=" padding-left: 20px">
                            <div class="form-group-sm">
                                {!! form_label($form->bor_qtd_tit) !!}
                                {!! form_widget($form->bor_qtd_tit) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-body col-md-3" style=" padding-left: 20px">
                            <div class="form-group-sm">
                                {!! form_label($form->bor_vlr_bruto) !!}
                                {!! form_widget($form->bor_vlr_bruto) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-body col-md-3" style=" padding-left: 20px">
                            <div class="form-group-sm">
                                {!! form_label($form->bor_cst_com_iof) !!}
                                {!! form_widget($form->bor_cst_com_iof) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->car_id) !!}
                            {!! form_widget($form->car_id) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_qt_recusada) !!}
                            {!! form_widget($form->bor_qt_recusada) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm" >
                            {!! form_label($form->bor_vlr_bruto_recusado) !!}
                            {!! form_widget($form->bor_vlr_bruto_recusado) !!}
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_pz_med_emp) !!}
                            {!! form_widget($form->bor_pz_med_emp) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->tir_id) !!}
                            {!! form_widget($form->tir_id) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_qtd_final) !!}
                            {!! form_widget($form->bor_qtd_final) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_vlr_bruto_final) !!}
                            {!! form_widget($form->bor_vlr_bruto_final) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_pz_med_bco) !!}
                            {!! form_widget($form->bor_pz_med_bco) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->url_id) !!}
                            {!! form_widget($form->url_id) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">

                    </div>

                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_vlr_tot_tarifas) !!}
                            {!! form_widget($form->bor_vlr_tot_tarifas) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_float_acordado) !!}
                            {!! form_widget($form->bor_float_acordado) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">

                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                    </div>

                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_vlr_liquido) !!}
                            {!! form_widget($form->bor_vlr_liquido) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_float_calc) !!}
                            {!! form_widget($form->bor_float_calc) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-body col-md-4" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_tx_empresa) !!}
                            {!! form_widget($form->bor_tx_empresa) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-2" style=" padding-left: 20px">

                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_vlr_liq_correto) !!}
                            {!! form_widget($form->bor_vlr_liq_correto) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_float_dif) !!}
                            {!! form_widget($form->bor_float_dif) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-body col-md-4" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_cst_efetivo) !!}
                            {!! form_widget($form->bor_cst_efetivo) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-2" style=" padding-left: 20px">

                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_chk_liq) !!}
                            {!! form_widget($form->bor_chk_liq) !!}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_chk_iof) !!}
                            {!! form_widget($form->bor_chk_iof) !!}
                        </div>
                    </div>
                </div>
            </div>

            {{--        ARRUMANDOOOOOOOOOOOO--}}
            <div class="row">
                <div class="col-md-8">

                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="box-body col-md-6" style=" padding-left: 20px">
                                    <div class="form-group-sm">
                                        {!! form_label($form->bor_recompra) !!}
                                        {!! form_widget($form->bor_recompra) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-body col-md-6" style=" padding-left: 20px">
                                    <div class="form-group-sm">
                                        {!! form_label($form->bor_retencao) !!}
                                        {!! form_widget($form->bor_retencao) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="box-body col-md-6" style=" padding-left: 20px">
                                    <div class="form-group-sm">
                                        {!! form_label($form->bor_fomento) !!}
                                        {!! form_widget($form->bor_fomento) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box-body col-md-6" style=" padding-left: 20px">
                                    <div class="form-group-sm">
                                        {!! form_label($form->bor_per_outros) !!}
                                        {!! form_widget($form->bor_per_outros) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-lg" >
                            {!! form_label($form->bor_liq_recebido) !!}
                            {!! form_widget($form->bor_liq_recebido) !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">
                    <div class="box-body col-md-3" style=" padding-left: 20px">
                        <div class="form-group-sm">
                            {!! form_label($form->bor_status) !!}
                            {!! form_widget($form->bor_status) !!}
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>

            <div class="btn-group col-md-12">
                {!! form_widget($form->submit) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-header" style="box-shadow: #7a869d">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Nova Tarifa
                </button>

                <div id="tarifas" class="table-responsive-sm"></div>
            </div>
        </div>
    </div>

    <div class="hidden">
        {!! form_rest($form) !!}
    </div>
    {!! form_end($form) !!}




@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
        });
    </script>
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

        $(document).ready(function () {
            loadBorderoRates();

            $("#exampleModal").on('show.bs.modal', function () {
                loadRates();
            });

            $("#add-rate-submit").on('click', function () {
                $("#add-rate").submit();
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
                        $('#exampleModal').modal('toggle');
                    },
                    error: function (error) {
                        console.log(error);
                    },
                })
            })
        });
    </script>
@endsection
