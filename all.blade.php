@extends('layouts.app')


@php \Carbon\Carbon::setLocale('pt_BR'); @endphp

@section('title', 'Chamados | ' . Options::get('title') )

@section('content')

<div class="container all-tickets-area">
    <div class="ticket-area">
        <div class="ticket-big-box ticket-box all-user-ticket-box">

            <div class="box-title">

                <div class="title-text">

                    <h3>Todos os Chamados</h3>

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover  responsive-table">

                    <thead>

                        <tr>

                            <th>Protocolo</th>

                            <th>Título</th>

                            <th>Departamento</th>

                            <th>Data</th>

                            <th>Status</th>

                            <th>Ação</th>

                        </tr>

                    </thead>



                    @if( count($tickets) )



                        @foreach($tickets as $ticket)

                            <tr class="ticket_row">

                                <td>{{ $ticket->id }}/{{$ticket->created_at->year}}</td>

                                <td>

                                    <a href="{{ route('single.ticket', [

                                        'subject' => $ticket->FormatSubject(),

                                        'id' => $ticket->id

                                    ]) }}">

                                        {{ str_limit($ticket->subject, 30) }}

                                    </a>

                                </td>

                                <td>{{ $ticket->getDepartment() }} </td>



                                    <!-- Check If the date is over 1 month or not -->

                                <?php $date = $ticket->created_at; ?>

                                <td>

                                    {{ $date->diffInMonths(Carbon::now()) >= 1 ? $date->format('j M Y, g:ia') : $date->diffForHumans() }}

                                </td>



                                <td>

                                    <span class="status-{{ $ticket->status }}"> {{ ucwords($ticket->status) }} </span>

                                </td>

                                <td class="action-btns">

                                    <a href="{{ route('single.ticket', [

                                        'subject' => $ticket->FormatSubject(),

                                        'id' => $ticket->id

                                    ]) }}" title="Ver">

                                        <i class="fa fa-eye"></i>

                                    </a>



                                    <?php $editAbility = Options::get('edit_ticket'); ?>

                                    @if( $editAbility == 'on')

                                            <a href="{{ route('edit.ticket', $ticket->id) }}"  title="Editar"><i class="fa fa-edit"></i></a>

                                    @endif

                                    <button type="submit" class="ticket_remove remove-btn" value="{{ $ticket->id }}" title="Delete">

                                        <i class="fa fa-times"></i>

                                    </button>

                                </td>

                            </tr>

                        @endforeach





                    @else

                        <td colspan="6" align="center"> Nenhum chamado para mostrar </td>

                    @endif

                </table>

            </div>

        </div>







                    <!-- Pagination -->

                   {{ $tickets->render() }}

    </div>

</div>

@stop

