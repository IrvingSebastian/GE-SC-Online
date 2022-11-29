@extends('layouts.app')

@section('template_title')
    Datos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('stadistics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Número</th>
										<th>Título</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stadistics as $stadistic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $stadistic->rank }}</td>
											<td>{{ $stadistic->title }}</td>

                                            <td>
                                                <form action="{{ route('stadistics.destroy',$stadistic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('stadistics.show',$stadistic->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('stadistics.edit',$stadistic->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $stadistics->links() !!}
            </div>
        </div>
    </div>
@endsection
