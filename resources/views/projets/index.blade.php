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

<link rel="stylesheet" href="{{asset('dash/plugins/editors/markdown/simplemde.min.css')}}">
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
                              Créer un projet
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
                    <div class="table-responsive">
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
                                @foreach($projets as $projet)
                                <tr>
                                    <td>{{ $projet->titre }}</td>
                                    <td>{{ $projet->sous_titre }}</td>
                                    <td>{{ $services_type[$projet->service_id] }}</td>
                                    <td>{{ $projet->description_paragraphe_1 }}</td>
                                    <td>
                                        <div class="td-content customer-name">
                                            <img class="image_table" src="{{ asset('storage/' . $projet->icone) }}">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">View</a> --}}
                                                <a class="dropdown-item" data-toggle="modal" data-target="#editProjet{{ $projet->id }}" title="Editer un projet" href="javascript:void(0);">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#deleteProjet{{ $projet->id }}" title="Supprimer un projet" href="javascript:void(0);">
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
                </div>
                <div class="paginating-container pagination-solid">
                    <ul class="pagination">
                        {{-- Lien "Précédent" --}}
                        @if ($projets->onFirstPage())
                            <li class="disabled prev"><a href="javascript:void(0);">Prev</a></li>
                        @else
                            <li class="prev"><a href="{{ $projets->previousPageUrl() }}">Prev</a></li>
                        @endif
                
                        {{-- Liens de pagination numérotés --}}
                        @for ($i = 1; $i <= $projets->lastPage(); $i++)
                            <li @if ($projets->currentPage() === $i) class="active" @endif>
                                <a href="{{ $projets->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                
                        {{-- Lien "Suivant" --}}
                        @if ($projets->hasMorePages())
                            <li class="next"><a href="{{ $projets->nextPageUrl() }}">Next</a></li>
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
        {{-- creation d'un projet --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creer un projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="type">Type</label>
                            <select class="form-control" id="service_id" name="service_id" required>
                                @foreach ($services_type as $serviceId => $serviceType)
                                    <option value="{{ $serviceId }}">{{ $serviceType }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="client_name">Noms du client</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" required>
                        </div>
                        <div class="form-group">
                            <label for="projet_date">Date du projet</label>
                            <input type="date" class="form-control" id="projet_date" name="projet_date" required>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_1">Paragraphe 1</label>
                            <textarea class="form-control" id="description_paragraphe_1" name="description_paragraphe_1" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_2">Paragraphe 2</label>
                            <textarea class="form-control" id="description_paragraphe_2" name="description_paragraphe_2" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_3">Paragraphe 3</label>
                            <textarea class="form-control" id="description_paragraphe_3" name="description_paragraphe_3" required></textarea>
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
        {{-- fin de la creation --}}
    </div>
</div>


@foreach($projets as $projet)
<div class="modal fade" id="editProjet{{ $projet->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{-- Modification d'un projet --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier un projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('projets.update', $projet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ $projet->titre }}" required>
                        </div>
                        <div class="form-group">
                            <label for="sous_titre">Sous-titre</label>
                            <input type="text" class="form-control" id="sous_titre" name="sous_titre" value="{{ $projet->sous_titre }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="service_id" name="service_id" required>
                                @foreach ($services_type as $serviceId => $serviceType)
                                    <option value="{{ $serviceId }}" {{ $projet->service_id == $serviceId ? 'selected' : '' }}>
                                        {{ $serviceType }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="client_name">Noms du client</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $projet->client_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="projet_date">Date du projet</label>
                            <input type="date" class="form-control" id="projet_date" name="projet_date" value="{{ $projet->projet_date }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_1">Paragraphe 1</label>
                            <textarea class="form-control" id="description_paragraphe_1" name="description_paragraphe_1" required>{{ $projet->description_paragraphe_1 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_2">Paragraphe 2</label>
                            <textarea class="form-control" id="description_paragraphe_2" name="description_paragraphe_2" required>{{ $projet->description_paragraphe_2 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_paragraphe_3">Paragraphe 3</label>
                            <textarea class="form-control" id="description_paragraphe_3" name="description_paragraphe_3" required>{{ $projet->description_paragraphe_3 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="icone">Icone</label>
                            <input type="file" class="form-control-file" id="icone" name="icone" accept="image/*">
                            <img id="imagePreview" src="#" alt="Aperçu de l'image" style="max-width: 200px; margin-top: 10px; display: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        {{-- Fin de la modification --}}
    </div>
</div>
@endforeach

@foreach($projets as $projet)
<div class="modal fade" id="deleteProjet{{ $projet->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{-- suppresion d'un projet --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer un projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Voulez vous supprimer ce projet ?</h5>
                            <label for="titre"> <h3 class="text-center">{{ $projet->titre}}</h3>  </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary">Supprimer</button>
                    </div>
                </form>
            </div>
        {{-- Fin de Suppresion --}}
    </div>
</div>
@endforeach

@endsection
 {{-- end of section --}}

    <script src="{{asset('dash/plugins/editors/markdown/simplemde.min.js')}}"></script>
    <script src="{{asset('dash/plugins/editors/markdown/custom-markdown.js')}}"></script>
    <script>
        // Initialiser TinyMCE sur le champ textarea avec la classe tinymce-editor
        tinymce.init({
            selector: '.tinymce-editor', // Utiliser la classe tinymce-editor
            // Autres options de configuration...
        });
    </script>
    <script>
        new SimpleMDE({
        element: document.getElementById("demo1"),
        spellChecker: false,
        autosave: {
            enabled: true,
            unique_id: "demo1",
        },
    });
    </script>
 {{-- Javascript start --}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
{{-- img loader start --}}
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
{{-- img loader end --}}
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

{{-- Javascript End --}}
<style>
    img.image_table {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        margin-right: 13px;
    }
</style>