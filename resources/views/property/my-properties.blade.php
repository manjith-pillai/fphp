@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

    
                <div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
						
                            <h2 class="center">My Properties</h2>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Location PLC </th>
                                        <th>Property Category </th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
								
									
								@foreach ($rmproperty as $property) 
                                <tbody>
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>
                                  <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}" height="80" width="80" alt=" Image">
                                            {{ $property->loc_plc }}
                                        </td>
                                        <td>{{ $property->propertycategory }}</td>
                                        <td>{{ $property->bestprice }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="#" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-eur"></i> Buy</a>
                                            <a href="#" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-ban"></i> Remove</a>
                                        </td>
                                    </tr>
                            </tbody>
							@endforeach
                            </table>
<!--<div class="center">
                                <ul class="pagination">
                                    <li>
									<a href="#"> 
									
									</a>
									</li>
                                    
                                </ul>
                            </div> -->
                            
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->
            

@endsection