@extends('admin.layouts.app')

@section('title', $article->title)

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.articles.index') }}">Articles</a></li>
<li class="breadcrumb-item active">Afficher</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>{{ $article->title }}</h2>
    <div>
        <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>Modifier
        </a>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Retour
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-file-alt me-2"></i>
                    Contenu de l'Article
                </h5>
            </div>
            <div class="card-body">
                @if($article->image)
                    <div class="text-center mb-4">
                        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" 
                             class="img-fluid rounded" style="max-height: 300px;">
                    </div>
                @endif

                @if($article->subtitle)
                    <h4 class="text-muted mb-3">{{ $article->subtitle }}</h4>
                @endif

                @if($article->excerpt)
                    <div class="alert alert-info">
                        <strong>Résumé :</strong><br>
                        {{ $article->excerpt }}
                    </div>
                @endif

                <div class="article-content">
                    {!! nl2br(e($article->content)) !!}
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
                    <strong>Statut :</strong>
                    @if($article->is_published)
                        <span class="badge bg-success">Publié</span>
                    @else
                        <span class="badge bg-warning">Brouillon</span>
                    @endif
                </div>

                <div class="mb-3">
                    <strong>Date de création :</strong><br>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y H:i') }}</small>
                </div>

                @if($article->updated_at != $article->created_at)
                    <div class="mb-3">
                        <strong>Dernière modification :</strong><br>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($article->updated_at)->format('d/m/Y H:i') }}</small>
                    </div>
                @endif

                @if($article->meta_title)
                    <div class="mb-3">
                        <strong>Titre Meta :</strong><br>
                        <small class="text-muted">{{ $article->meta_title }}</small>
                    </div>
                @endif

                @if($article->meta_description)
                    <div class="mb-3">
                        <strong>Description Meta :</strong><br>
                        <small class="text-muted">{{ $article->meta_description }}</small>
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
                <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-trash me-2"></i>Supprimer l'Article
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 