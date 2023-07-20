@extends('dashboard.app')
<link rel="stylesheet" type="text/css" href="{{asset('dash/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dash/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dash/plugins/table/datatable/custom_dt_multiple_tables.css')}}">
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('dash/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('dash/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dash/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dash/assets/css/elements/custom-pagination.css')}}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
@section('content')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div>
                    <div class="col d-flex justify-content-end">
                        <div class="text-center">
                            <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModal">
                              Créer un service
                            </button>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success mb-4" role="alert">
                    <strong>{{ session('success') }} </strong>
                </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger mb-4" role="alert">
                    @foreach ($errors->all() as $error)
                        <strong>{{ $error }} </strong> 
                    @endforeach 
                </div>
                @endif
                <div class="widget-heading">
                    <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>titre</th>
                                <th>sous titre</th>
                                <th>type</th>
                                <th>description</th>
                                <th>icone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->titre }}</td>
                                <td>{{ $service->sous_titre }}</td>
                                <td>{{ $service->type }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <div class="td-content customer-name">
                                        <img class="image_table" src="{{ asset('storage/' . $service->icone) }}" alt="Service-Icon">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            {{-- <a class="dropdown-item" href="javascript:void(0);">View</a> --}}
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editService{{ $service->id }}" title="Editer un service" href="javascript:void(0);">
                                                Edit
                                            </a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#deleteService{{ $service->id }}" title="Supprimer un service" href="javascript:void(0);">
                                                Delete
                                            </a>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>titre</th>
                                <th>sous titre</th>
                                <th>type</th>
                                <th>description</th>
                                <th>icone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="paginating-container pagination-solid">
                    <ul class="pagination">
                        {{-- Lien "Précédent" --}}
                        @if ($services->onFirstPage())
                            <li class="disabled prev"><a href="javascript:void(0);">Prev</a></li>
                        @else
                            <li class="prev"><a href="{{ $services->previousPageUrl() }}">Prev</a></li>
                        @endif
                
                        {{-- Liens de pagination numérotés --}}
                        @for ($i = 1; $i <= $services->lastPage(); $i++)
                            <li @if ($services->currentPage() === $i) class="active" @endif>
                                <a href="{{ $services->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                
                        {{-- Lien "Suivant" --}}
                        @if ($services->hasMorePages())
                            <li class="next"><a href="{{ $services->nextPageUrl() }}">Next</a></li>
                        @else
                            <li class="disabled next"><a href="javascript:void(0);">Next</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          {{-- creation d'un service  --}}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Creer un service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" required>
                            </div>
                            <div class="form-group">
                                <label for="sous_titre">Sous-titre</label>
                                <input type="text" class="form-control" id="sous_titre" name="sous_titre" required>
                            </div>
                            <div class="form-group">
                                <label for="type">type</label>
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="icone">Icone</label>
                                <input type="file" class="form-control-file" id="icone" name="icone" accept="image/*" required>
                                <img id="imagePreview" src="#" alt="Aperçu de l'image" style="max-width: 200px; margin-top: 10px; display: none;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </div>
                    </form>
                </div>
         {{-- fin de creation de service --}}
    </div>
</div>


@foreach($services as $service)
<div class="modal fade" id="editService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         {{-- modifier un service --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier un service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ $service->titre }}" required>
                        </div>
                        <div class="form-group">
                            <label for="sous_titre">Sous-titre</label>
                            <input type="text" class="form-control" id="sous_titre" name="sous_titre" value="{{ $service->sous_titre }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $service->type }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $service->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="icone">Icone</label>
                            <input type="file" class="form-control-file" id="icone" name="icone" accept="image/*" required>
                            <img id="imagePreview" src="#" alt="Aperçu de l'image" style="max-width: 200px; margin-top: 10px; display: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        {{-- fin de modification --}}
    </div>
</div>
@endforeach

@foreach($services as $service)
<div class="modal fade" id="deleteService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{-- supprimer un service --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer un service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Voulez vous supprimer ce service ?</h5>
                            <label for="titre"> <h3 class="text-center">{{ $service->titre}}</h3>  </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary">Supprimer</button>
                    </div>
                </form>
            </div>
        {{-- fin de suppression --}}
    </div>
</div>
@endforeach

@endsection
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).ready(function () {
        $("#icone").change(function () {
            readURL(this);
        });
    });
</script>
<script src="{{asset('dash/plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('dash/assets/js/scrollspyNav.js')}}"></script>
<script>
    $(document).ready(function() {
        $('table.multi-table').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () {
                $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                $('.dataTables_wrapper table').removeClass('table-striped');
            }
        });
    } );
</script>
<style>
    img.image_table {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        margin-right: 13px;
    }
</style>
