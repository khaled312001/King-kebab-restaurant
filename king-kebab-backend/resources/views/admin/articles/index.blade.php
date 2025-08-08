@extends('admin.layouts.app')

@section('title', 'Gestion des Articles')

@section('breadcrumb')
<li class="breadcrumb-item active">Articles</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Gestion des Articles</h2>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Nouvel Article
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-file-alt me-2"></i>
            Liste des Articles
        </h5>
    </div>
    <div class="card-body">
        @if($articles->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Résumé</th>
                            <th>Statut</th>
                            <th>Date de Création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>
                                @if($article->image)
                                    <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" 
                                         style="width: 50px; height: 50px; border-radius: 8px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $article->title }}</strong>
                                @if($article->subtitle)
                                    <br><small class="text-muted">{{ $article->subtitle }}</small>
                                @endif
                            </td>
                            <td>
                                @if($article->excerpt)
                                    <small class="text-muted">{{ Str::limit($article->excerpt, 100) }}</small>
                                @else
                                    <small class="text-muted">{{ Str::limit($article->content, 100) }}</small>
                                @endif
                            </td>
                            <td>
                                @if($article->is_published)
                                    <span class="badge bg-success">Publié</span>
                                @else
                                    <span class="badge bg-warning">Brouillon</span>
                                @endif
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($article->created_at)->format('Y-m-d') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.articles.show', $article) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" 
                                          class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
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
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Aucun article trouvé</h5>
                <p class="text-muted">Commencez par créer votre premier article</p>
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Créer un Article
                </a>
            </div>
        @endif
    </div>
</div>
@endsection 