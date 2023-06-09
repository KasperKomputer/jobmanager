@extends('layouts.admin2')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <script src="{{ asset('js/main.js') }}"></script>
    <style>
    /* Styl dla ekranu */
    body {
        font-size: 16px;
        padding: 0;
        margin: 0;
    }

    table {
        font-size: 16px;
    }

    /* Styl dla wydruku */
    @media print {

        /* Zastosuj obramowania dla elementów */
        hr,
        .border {
            border: 0.1cm solid black !important;
        }

        .obramowanie_góra_dół {

            border-bottom: 0.1cm solid black;
        }

        body {
            font-size: 20px;
            padding: 0;
            margin: 0;
        }

        table {
            font-size: 20px;
        }

        @page {
            margin-top: 0;
            margin-bottom: 0;
        }

        /* Ukryj domyślny nagłówek */
        header {
            display: none;
        }
    }
    </style>

</head>

<body onload="window.print()">



    <div class="card-body " id="printThis">

        <div class="row d-flex justify-content-center align-items-center">
            <div style="display: flex; align-items: center;">
                <img alt="Qries" src="{{ asset('/img/logo.png')}}" width="80" height="100">
                <h2 style="margin-left: 2%;"><strong> POTWIERDZENIE/ZLECENIE WYKONANIA USŁUG<br>
                        DLA ZLECENIA: {{ $job->order ?? '' }}</strong>
                </h2>
            </div>
        </div>

        <div class="obramowanie_góra_dół"></div>

        <br>
        <table align="center">
            <tr>
                <td style="width:30%;">
                    <div><strong>Akronim Klienta:</strong> {{ $job->company ->kontrahent_kod ?? '' }}</div>
                    <div><strong>Klient:</strong> {{ $job->company -> kontrahent_nazwa1 ?? '' }}
                        {{ $job->company -> kontrahent_nazwa2 ?? '' }} {{ $job->company -> kontrahent_nazwa3 ?? '' }}
                        <br>
                        {{ $job->company -> kontrahent_ulica ?? '' }}
                        {{ $job->company -> kontrahent_kodpocztowy ?? '' }}
                        {{ $job->company -> kontrahent_miasto ?? '' }}
                    </div>
                    <div><strong>Mejsce wykonania usług:</strong><br> {{ $job->company -> kontrahent_ulica ?? ''}}
                        {{$job->company -> kontrahent_kodpocztowy ?? ''}}
                        {{$job->company -> kontrahent_miasto ?? ''}}</div>
                </td>
                <td style="width:15%;"></td>
                <td style="width:30%;">
                    <div><strong>Data zgłoszenia:</strong> {{ $job->start_date ?? '' }}</div>
                    <div><strong>Zgłaszający:</strong> {{ $job->user->name ?? '' }} {{ $job->user->surname ?? '' }}
                    </div>
                    <div><strong>Przyjmujący:</strong> {{ $job->user->name ?? '' }} {{ $job->user->surname ?? '' }}
                    </div>
                    <div><strong>Data rozpoczęcia:</strong> {{ $job->start_date ?? '' }} </div>
                    <div><strong>Data zakończenia:</strong> {{ $job->end_date ?? '' }} </div>
                    <div><strong>Czas trwania:</strong> {{  $minsandsecs  }}</div>
                </td>
            </tr>
        </table>

        <br>
        <h2 class="mb-3 text-center"><strong>Szczegółowy spis wykonanych usług przez serwis Kasper Komputer:</strong>
        </h2>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="border">Lp</th>
                        <th class="border"> {{ trans('cruds.job.fields.task_name') }}</th>
                        <th class="border">{{ trans('cruds.job.fields.description') }}</th>
                        <th class="border"> {{ trans('cruds.job.fields.performed') }}</th>
                        <th class="border"> {{ trans('cruds.job.fields.time') }}</th>
                        <th class="border"> RR.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>

                    @foreach($jobs as $key => $job)
                    <tr class="obramowanie_góra_dół">
                        <td class="center">{{$i}}</td>
                        <td class="left strong"><b> {{ $job->type_task->name ?? '' }}</b></td>
                        <td></td>
                        <?php
                        $zmienna1=$job->user->name;
                        $zmienna2=$job->user->surname;
                        $firstLetter1 = substr($zmienna1, 0, 1);
                        $firstLetter2 = substr($zmienna2, 0, 1);
                        ?>
                        <td class="left"> {{ $firstLetter1 }} {{  $firstLetter2  ?? '' }}</td>
                        <td class="right"> {{ date('G:i', strtotime($job->time)) ?? '' }} h</td>
                        @if($job->paid==1)
                        <td class="right"> B</td>
                        @else
                        <td class="right"> P</td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="7">{!! nl2br(e($job->description)) !!}</td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach


                </tbody>

            </table>
            <br>
            <div class="row justify-content-around mb-5">

                <div class="col-4 text-center">
                    <div class="obramowanie_góra_dół"></div>
                    {{ $job->user->name ?? '' }} {{ $job->user->surname ?? '' }}
                </div>
                <div class="col-4 text-center">
                    <div class="obramowanie_góra_dół"></div>
                    Podpis upoważnionego przedstawiciela Klienta
                </div>
            </div>
        </div>


        <footer class="fixed-bottom" style="font-size: 14px;">


            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        Legenda:
                        RR.- Rodzaj Rozliczenia wykonanej Usługi: (P- Usługa Płatna, B- Usługa Bezpłatna)<br>
                    </div>
                </div>
                <div class="obramowanie_góra_dół"></div>
                <div>
                    Kasper Komputer, ul. Podmiejska 16, 62-800 Kalisz, tel/fax (0-62) 764-40-66, 501-15-05
                </div>
            </div>
        </footer>




    </div>

    </div>
    <!-- <button class="btn btn-success btn-fill pull-right" id="btnPrint">Print</button> -->
    <!-- <button type="submit" class="btn btn-success btn-fill pull-right" id="form-button-add" name="form-button-add" onclick="window.print()">
            CREATE 
        </button> -->

</body>

</html>
@endsection

<script>
document.getElementById("btnPrint").onclick = function() {
    printElement(document.getElementById("printThis"));

    var modThis = document.querySelector("#printSection .modifyMe");
    modThis.appendChild(document.createTextNode(" new"));

    window.print();
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";

    $printSection.appendChild(domClone);
}
</script>

 <script>
         setTimeout(function(){
            window.history.back()
         }, 3000);
      </script>  