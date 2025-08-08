@extends('admin.layouts.app')

@section('title', $menu->name)

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.menus.index') }}">Gestion des Menus</a></li>
<li class="breadcrumb-item active">Afficher</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>{{ $menu->name }}</h2>
    <div>
        <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>Modifier
        </a>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Retour
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-utensils me-2"></i>
                    Détails de l'Élément
                </h5>
            </div>
            <div class="card-body">
                @if($menu->image)
                    <div class="text-center mb-4">
                        <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}" 
                             class="img-fluid rounded" style="max-height: 300px;">
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-muted">Nom</h6>
                        <p class="mb-3"><strong>{{ $menu->name }}</strong></p>
                    </div>
                    
                    <div class="col-md-6">
                        <h6 class="text-muted">Prix</h6>
                        <p class="mb-3"><strong class="text-success">{{ number_format($menu->price, 2) }} €</strong></p>
                    </div>
                </div>

                @if($menu->description)
                    <div class="mb-3">
                        <h6 class="text-muted">Description</h6>
                        <p>{{ $menu->description }}</p>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-muted">Catégorie</h6>
                        <p class="mb-3">
                            @if($menu->category && is_object($menu->category) && $menu->category->name)
                                <span class="badge bg-info">{{ $menu->category->name }}</span>
                            @elseif($menu->category && is_string($menu->category))
                                <span class="badge bg-info">{{ $menu->category }}</span>
                            @else
                                <span class="badge bg-secondary">Sans Catégorie</span>
                            @endif
                        </p>
                    </div>
                    
                    <div class="col-md-6">
                        <h6 class="text-muted">Statut</h6>
                        <p class="mb-3">
                            @if($menu->is_available)
                                <span class="badge bg-success">Disponible</span>
                            @else
                                <span class="badge bg-danger">Non Disponible</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle me-2"></i>
                    Informations
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Date de création :</strong><br>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($menu->created_at)->format('d/m/Y H:i') }}</small>
                </div>

                @if($menu->updated_at != $menu->created_at)
                    <div class="mb-3">
                        <strong>Dernière modification :</strong><br>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($menu->updated_at)->format('d/m/Y H:i') }}</small>
                    </div>
                @endif

                @if($menu->image)
                    <div class="mb-3">
                        <strong>Image :</strong><br>
                        <small class="text-muted">{{ $menu->image }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-trash me-2"></i>
                    Actions
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-trash me-2"></i>Supprimer l'Élément
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 