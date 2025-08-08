@extends('admin.layouts.app')

@section('title', 'Gestion des Menus')

@section('breadcrumb')
<li class="breadcrumb-item active">Gestion des Menus</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Gestion des Menus</h2>
    <div>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Ajouter un Élément
        </a>
        <a href="{{ route('admin.menu.categories') }}" class="btn btn-outline-secondary">
            <i class="fas fa-tags me-2"></i>Gérer les Catégories
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-utensils me-2"></i>
            Éléments du Menu
        </h5>
    </div>
    <div class="card-body">
        @if($menus->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Date de Création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                        <tr>
                            <td>
                                @if($menu->image)
                                    <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" 
                                         style="width: 50px; height: 50px; border-radius: 8px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $menu->name }}</strong>
                                @if($menu->description)
                                    <br><small class="text-muted">{{ Str::limit($menu->description, 50) }}</small>
                                @endif
                            </td>
                            <td>
                                @if($menu->category && is_object($menu->category) && $menu->category->name)
                                    <span class="badge bg-info">{{ $menu->category->name }}</span>
                                @elseif($menu->category && is_string($menu->category))
                                    <span class="badge bg-info">{{ $menu->category }}</span>
                                @else
                                    <span class="badge bg-secondary">Sans Catégorie</span>
                                @endif
                            </td>
                            <td>
                                <strong class="text-success">{{ number_format($menu->price, 2) }} €</strong>
                            </td>
                            <td>
                                @if($menu->is_available)
                                    <span class="badge bg-success">Disponible</span>
                                @else
                                    <span class="badge bg-danger">Non Disponible</span>
                                @endif
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($menu->created_at)->format('Y-m-d') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.menus.show', $menu) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" 
                                          class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $menus->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-utensils fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Aucun élément dans le menu</h5>
                <p class="text-muted">Commencez par ajouter de nouveaux éléments au menu</p>
                <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Ajouter un Nouvel Élément
                </a>
            </div>
        @endif
    </div>
</div>
@endsection 