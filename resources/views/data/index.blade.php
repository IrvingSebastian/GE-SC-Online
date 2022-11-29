@extends('layouts.app')

@section('template_title')
    ¿Que Hacemos?
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('¿Qué Hacemos?') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('data.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No.</th>
                                        
										<th>Icono</th>
										<th>Título</th>
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                <i class='{{$data->icon}}'></i>
                                            </td>
											<td>{{ $data->title }}</td>
											<td>{{ $data->description }}</td>

                                            <td>
                                                <form action="{{ route('data.destroy',$data->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('data.show',$data->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('data.edit',$data->id) }}"><i class="fa fa-fw fa-edit"></i> Actualizar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
