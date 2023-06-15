@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')   
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data {!!$panel_name!!} 
                    </div>
                    <div class="col-6">

                    </div> 
                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Name"   />  
                                <x-html.th-content title="Logo"   /> 
                                <x-html.th-content title="ico"   />  
                                <x-html.th-content title="Theme"   />  
                                <x-html.th-content title="Mode"   />  
                                <x-html.th-content title="Color"   />  
                                <x-html.th-content-width title="Action" width="15%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-center">  
                                        {{ $row->name }}  
                                    </td>  
                                    <td class="text-left">   
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/storage/app/public/aboutapp/'.$row->logo) }}" 
                                                alt=""> 
                                    </td>  
                                    <td class="text-left">  
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/storage/app/public/aboutapp/'.$row->ico) }}" 
                                                alt="">  
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->theme }}   
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->mode }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->color }}  
                                    </td>    
                                    <td class="text-center"> 
                                        <a href="{{ route($content.'.edit', $row->id ) }}" 
                                            class="btn btn-default btn-sm" >
                                            <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                            Edit  
                                        </a>      
                                    </td>  
                                </tr>
                                @empty 
                                    
                            @endforelse     
                        </tbody>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
