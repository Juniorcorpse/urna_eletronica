@extends('layouts.dashboard')
{{-- @extends('layouts.app')


@php \Carbon\Carbon::setLocale('pt_BR'); @endphp

@section('title', 'Relatório | ' . Options::get('title') )

@section('content') --}}
 {{-- @stop --}}



<?php



    \Carbon\Carbon::setLocale('pt_BR');

    ?>



@section('title', trans('messages.dashboard.pageTitle') .  Options::get('title') )



@section('content')



    <div class="content wow fadeInUp" data-wow-offset="1" data-wow-duration="01s" >



        <!--====  HEADER TOP  ====-->                    

        <div class="row content-header ">

            

            @include('partials.site.flash.success')



            <div class="col-lg-4 col-md-6">

                <div class="ticket-small-box all-tickets">

                    <a href="{{ route('dashboard.tickets', 'todos') }}">

                        <h4>  {{ trans('messages.dashboard.allTickets') }}

                            <span class="small-box-status">{{ $new_ticket_counting }}</span>

                        

                        </h4>

                        <h2>{{ $all_ticket_counting }}</h2>

                        <i class="ticket-box-bg-icon fa fa-file-text-o"></i>

                    </a>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="ticket-small-box solved-tickets">

                    <a href="{{ route('dashboard.tickets', 'resolvido') }}">

                        <h4>

                            {{ trans('messages.dashboard.solvedTickets') }}

                        </h4>

                        <h2>{{ $solved_ticket_counting }}</h2>

                        <i class="ticket-box-bg-icon fa fa-check-circle-o"></i>

                    </a>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="ticket-small-box pending-tickets">

                    <a href="{{ route('dashboard.tickets', 'pendente') }}">

                        <h4>{{ trans('messages.dashboard.pendingTickets') }}</h4>

                        <h2>{{ $pending_ticket_counting }}</h2>

                        <i class="ticket-box-bg-icon fa fa-hourglass-o"></i>

                    </a>

                </div>

            </div>

        </div>

        



        <!--====  BODY CONTENT  ====-->                    



        <div class="row content-body">

            

            <div class="ticket-box-row-first">





                    <!--====  TICKET BOX  ====-->

                <div class="col-md-12 col-lg-8 ticket-big-box-col">



                    

                    <div class="ticket-big-box recent-ticket-box">

                        <div class="box-title">

                            <div class="title-text pull-left">

                                <h3>{{ trans('messages.dashboard.recentTickets') }}</h3>

                            </div>

                            <div class="box-action pull-right">

                                <span class="popover-wrapper right">

                                  <button data-role="popover" data-target="recent-tickets-action"><i class="fa fa-cog"></i></button>

                                  <div class="popover-modal recent-tickets-action">

                                    <div class="popover-body">

                                        <ul>

                                            <li><a href="{{ route('dashboard.tickets', 'todos')}}">{{ trans('messages.dashboard.allTickets') }}</a></li>

                                            <li><a href="{{ route('dashboard.tickets', 'novo')}}">{{ trans('messages.dashboard.newTickets') }}</a></li>

                                            <li><a href="{{ route('dashboard.tickets', 'pendente')}}">{{ trans('messages.dashboard.pendingTickets') }}</a></li>

                                            <li><a href="{{ route('dashboard.tickets', 'resolvido')}}">{{ trans('messages.dashboard.solvedTickets') }}</a></li>
                                            
                                             <li><a href="{{ route('dashboard.tickets', 'relatorio')}}">{{ trans('messages.dashboard.solvedTickets') }}</a></li>

                                        </ul>

                                    </div>

                                  </div>

                                </span>

                            </div>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover responsive-table">

                                <thead>

                                    <tr>

                                        <th>{{ trans('messages.dashboard.ticketID') }}</th>

                                        <th>{{ trans('messages.dashboard.ticketTitle') }} </th>

                                        <th>{{ trans('messages.dashboard.department') }}</th>

                                        <th>{{ trans('messages.dashboard.date') }}</th>

                                        <th>{{ trans('messages.dashboard.client') }}</th>

                                        <th>{{ trans('messages.dashboard.status') }}</th>

                                    </tr>

                                </thead>



                                {{-- Check if there's any tickets --}}

                                @if( count($tickets) )



                                    {{-- Loop through over the tickets --}}

	                                @foreach($tickets as $ticket)



		                                <tr>

		                                    <td>#{{ $ticket->id }}</td>



		                                    <td>

		                                    	<a href="{{ route('dashboard.single.ticket', [

                                                    'subject' => $ticket->FormatSubject(), 

                                                    'id' => $ticket->id

                                                ]) }}">

		                                    		{{ str_limit($ticket->subject, 16) }}

		                                    	</a>

		                                    </td>



		                                    <td>{{ $ticket->getDepartment() }}</td>

		                                    <td>{{ $ticket->created_at->diffForHumans() }}</td>

		                                    <td>{{ $ticket->user->first_name }}</td>

		                                    <td>

		                                        <span 

		                                        	class="status-{{ $ticket->status }}">

		                                        	{{ $ticket->status }}

		                                        </span>

		                                    </td>

		                                </tr>

	                                @endforeach

                                    {{-- End the Loop --}}



                                @else



                                    {{-- If no rows found --}}



                                	<tr>

                                		<td colspan="6" align="center"> {{ trans('messages.dashboard.noTickets') }} </td>

                                	</tr>



                                @endif

                                {{-- End the if condiction --}}

                            </table>                              

                        </div>

                    </div>

                </div>



                    <!--====  TICKET BOX  ====-->

                <div class="col-md-4 col-lg-4 ticket-big-box-col hidden-xs">

                    <div class="ticket-big-box">

                        <div class="box-title clearfix">

                            <div class="title-text pull-left">

                                <h3>{{ trans('messages.dashboard.newClient') }}</h3>

                            </div>

                            <div class="box-action pull-right">

                                <span class="popover-wrapper right">

                                  <button data-role="popover" data-target="new-clients-action"><i class="fa fa-cog"></i></button>

                                  <div class="popover-modal new-clients-action">

                                    <div class="popover-body">

                                        <ul>

                                            <li><a href="{{ route('dashboard.clients.all') }}"> {{ trans('messages.dashboard.allClient') }} </a></li>

                                        </ul>

                                    </div>

                                  </div>

                                </span>

                            </div>

                        </div>

                        <ul class="clients-list">

                            {{-- Check if there's any clients --}}



                        	@if( count( $clients) )

                                {{-- Loop through over the clients --}}

                        		@foreach( $clients as $client )

		                            <li>    

		                                    <div class="client-list-img">

		                                        <img src="{{ $client->profileImg(50) }}" alt="">

		                                    </div>

		                                    <div class="client-list-name">

		                                        <h4>{{ $client->fullName() }}</h4>

		                                        <span>{{ $client->created_at->diffForHumans() }}</span>

		                                    </div>

		                            </li>

		                        @endforeach

                                {{-- End the loop --}}



                            @else

                                {{-- If no rows found --}}



	                            <li>    

	                                <a href="">

	                                    <div class="client-list-name">

	                                        <h4> {{ trans('messages.dashboard.noClients') }} </h4>

	                                    </div>

	                                </a>

	                            </li>

                            @endif

                            {{-- End the if condiction --}}



                        </ul>

                    </div>

                </div>    

            </div>



                    <!--====  TICKET BOX  ====-->

                <div class="col-lg-12 col-md-12 ticket-big-box-col">


                    <div class="ticket-big-box statistics_box">

                        <div class="box-title clearfix">

                            <div class="title-text pull-left">

                                <h3>{{ trans('messages.dashboard.statisticsTitle') }}</h3>

                            </div>

                        </div>

                      <div class="chart">   

                        <div id="lineLegend"></div>

                        <canvas id="statisticsChart" ></canvas>

                      </div>

                    </div>

                </div>

            <!-- </div> -->



        </div>

    </div>



@stop





@section('script')



    @include('partials.dashboard.statistics')

        

@stop