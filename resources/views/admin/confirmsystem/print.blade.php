@extends('layouts.admin2')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <script src="{{ asset('js/main.js') }}"></script>
    <style>
    @media print {

        /* Zastosuj obramowania dla elementów */
        hr,
        .border {
            border: 2px solid black !important;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 18px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            padding: 5px;
            box-sizing: border-box;
        }

        footer {
            margin-top: 50px !important;
            font-size: 12px;
            page-break-after: always;
        }

        table {
            font-size: 18px;

        }

        @page {
            margin-top: 0;
            margin-bottom: 5px;
            size: A4;
        }

        /* Ukryj domyślny nagłówek */
        header {
            display: none;
        }
    }
    </style>
</head>

<body onload="window.print()">


    <main>
        <div class="card-body " id="printThis">
            <div class="row d-flex justify-content-center align-items-center">
                <div style="display: flex; align-items: center;">
                    <img alt="Qries" src="{{ asset('/img/logo.png')}}" width="80" height="100">
                    <h2 style="margin-left: 2%;"><strong> {{ trans('cruds.print.title') }}<br>
                            {{ trans('cruds.print.order') }}: {{ $job->order ?? '' }}</strong>
                    </h2>
                </div>
            </div>
            <div class="border"></div>
            <br>
            <table align="center">
                <tr>
                    <td style="width:30%;">
                        <div><strong>Akronim Klienta:</strong> {{ $job->company ->kontrahent_kod ?? '' }}</div>
                        <div><strong>Klient:</strong> {{ $job->company -> kontrahent_nazwa1 ?? '' }}
                            {{ $job->company -> kontrahent_nazwa2 ?? '' }}
                            {{ $job->company -> kontrahent_nazwa3 ?? '' }}
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

            <h2 class="mb-3 text-center"><strong>Szczegółowy spis wykonanych usług przez serwis Kasper
                    Komputer:</strong>
            </h2>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border">Lp</th>
                            <th class="border"> {{ trans('cruds.job.fields.task_name') }}</th>
                            <th class="border">{{ trans('cruds.job.fields.description') }}</th>
                            <th class="border"> {{ trans('cruds.job.fields.performed') }}</th>
                            <th class="border"> {{ trans('cruds.job.fields.value_goods') }}</th>
                            <th class="border"> {{ trans('cruds.job.fields.time') }}</th>
                            <th class="border"> RR.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>

                        @foreach($jobs as $key => $job)
                        <tr>
                            <td class="center">{{$i}}</td>
                            <td class="left strong" colspan="2"><b> {{ $job->type_task->name ?? '' }}</b></td>

                            <?php
                        $zmienna1=$job->user->name;
                        $zmienna2=$job->user->surname;
                        $firstLetter1 = substr($zmienna1, 0, 1);
                        $firstLetter2 = substr($zmienna2, 0, 1);
                        ?>
                            <td class="left"> {{ $firstLetter1 }} {{  $firstLetter2  ?? '' }}</td>
                            <td class="left"> </td>
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
                        @foreach($jobs_towary as $id => $jobs_towarys)
                        <tr>
                            <td class="center">{{$i}}</td>
                            <td class="left strong"><b> {{ $jobs_towarys->task_type->name ?? '' }}</b></td>
                            <td class="left strong"> {{ $jobs_towarys->description_goods ?? '' }}</td>
                            <?php
                        $zmienna1=$job->user->name;
                        $zmienna2=$job->user->surname;
                        $firstLetter1 = substr($zmienna1, 0, 1);
                        $firstLetter2 = substr($zmienna2, 0, 1);
                        ?>
                            <td class="left"> {{ $firstLetter1 }} {{  $firstLetter2  ?? '' }}</td>

                            <td class="left"> {{ $jobs_towarys->value_goods ?? '' }}</td>
                            <td></td>
                            @if($jobs_towarys->paid_goods==1)
                            <td class="right"> B</td>
                            @else
                            <td class="right"> P</td>
                            @endif
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                        @foreach($jobs_sprzetzast as $id => $jobs_sprzetzasts)
                        <tr>
                            <td class="center">{{$i}}</td>
                            <td class="left strong"><b> {{ $jobs_sprzetzasts->task_type->name ?? '' }}</b></td>
                            <td class="left strong">{{ $jobs_sprzetzasts->repeq->eq_number ?? '' }}
                                {{ $jobs_sprzetzasts->repeq->eq_name ?? '' }}</td>
                            <?php
                        $zmienna1=$job->user->name;
                        $zmienna2=$job->user->surname;
                        $firstLetter1 = substr($zmienna1, 0, 1);
                        $firstLetter2 = substr($zmienna2, 0, 1);
                        ?>
                            <td class="left"> {{ $firstLetter1 }} {{  $firstLetter2  ?? '' }}</td>
                            <td class="left">1</td>
                            <td></td>
                            @if($jobs_sprzetzasts->paid_eq==1)
                            <td class="right"> B</td>
                            @else
                            <td class="right"> P</td>
                            @endif
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                        <tr>
                            <td align="left">{{$i}}</td>
                            <td align="left" class="strong"><b> Dojazd(DKM)</b></td>
                            <td align="left" class=" strong">Dojazd samochodem osobowym</td>
                            <?php
                        $zmienna1=$job->user->name;
                        $zmienna2=$job->user->surname;
                        $firstLetter1 = substr($zmienna1, 0, 1);
                        $firstLetter2 = substr($zmienna2, 0, 1);
                        ?>
                            <td align="left"> {{ $firstLetter1 }} {{  $firstLetter2  ?? '' }}</td>
                            <td> {{$company_km}} km</td>
                            <td class="left">{{$travel_string}}</td>
                            @if($job->paid==1)
                            <td align="left"> B</td>
                            @else
                            <td align="left"> P</td>
                            @endif
                        </tr>
                        <?php $i++ ?>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        @if($job->comments != NULL)
        <div class="row justify-content-around mb-5">

            <div class="col-12 ml-5">
                <h4 class=" text-center"><strong>OGÓLNE UWAGI DO WYKONANYCH ZADAŃ W RAMACH ZLECENIA:</strong></h4>
                <h5 class=" text-left  ">{!! nl2br(e($job->comments)) !!}</h5>
            </div>
        </div>
        @endif
        <div class="row justify-content-around mb-5">
            <div class="col-4 text-center">
                <hr>
                {{ $job->user->name ?? '' }} {{ $job->user->surname ?? '' }}
            </div>
            <div class="col-4 text-center">
                <hr>
                Podpis upoważnionego przedstawiciela Klienta
            </div>
        </div>
  
</body>


</main>
<footer class="fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Legenda:<br>
                RR.- Rodzaj Rozliczenia wykonanej Usługi: (P- Usługa Płatna, B- Usługa Bezpłatna)<br>
            </div>
        </div>
        <div class="border"></div>
        <div>
            Kasper Komputer, ul. Podmiejska 16, 62-800 Kalisz, tel/fax (0-62) 764-40-66, 501-15-05
        </div>
    </div>
</footer>

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