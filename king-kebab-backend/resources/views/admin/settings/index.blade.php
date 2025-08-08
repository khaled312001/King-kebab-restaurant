@extends('admin.layouts.app')

@section('title', 'Paramètres du Site')

@section('breadcrumb')
<li class="breadcrumb-item active">Paramètres</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Paramètres du Site</h2>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-cog me-2"></i>
            Paramètres Généraux
        </h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-3">Informations de Base du Site</h6>
                    
                    <div class="mb-3">
                        <label for="site_name" class="form-label">Nom du Site <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('site_name') is-invalid @enderror" 
                               id="site_name" name="site_name" value="{{ $settings['site_name'] ?? '' }}" required>
                        @error('site_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_description" class="form-label">Description du Site</label>
                        <textarea class="form-control @error('site_description') is-invalid @enderror" 
                                  id="site_description" name="site_description" rows="3">{{ $settings['site_description'] ?? '' }}</textarea>
                        @error('site_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('site_email') is-invalid @enderror" 
                               id="site_email" name="site_email" value="{{ $settings['site_email'] ?? '' }}" required>
                        @error('site_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_phone" class="form-label">Numéro de Téléphone</label>
                        <input type="text" class="form-control @error('site_phone') is-invalid @enderror" 
                               id="site_phone" name="site_phone" value="{{ $settings['site_phone'] ?? '' }}">
                        @error('site_phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_address" class="form-label">Adresse</label>
                        <textarea class="form-control @error('site_address') is-invalid @enderror" 
                                  id="site_address" name="site_address" rows="2">{{ $settings['site_address'] ?? '' }}</textarea>
                        @error('site_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h6 class="mb-3">Réseaux Sociaux</h6>
                    
                    <div class="mb-3">
                        <label for="site_facebook" class="form-label">Lien Facebook</label>
                        <input type="url" class="form-control @error('site_facebook') is-invalid @enderror" 
                               id="site_facebook" name="site_facebook" value="{{ $settings['site_facebook'] ?? '' }}">
                        @error('site_facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_twitter" class="form-label">Lien Twitter</label>
                        <input type="url" class="form-control @error('site_twitter') is-invalid @enderror" 
                               id="site_twitter" name="site_twitter" value="{{ $settings['site_twitter'] ?? '' }}">
                        @error('site_twitter')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_instagram" class="form-label">Lien Instagram</label>
                        <input type="url" class="form-control @error('site_instagram') is-invalid @enderror" 
                               id="site_instagram" name="site_instagram" value="{{ $settings['site_instagram'] ?? '' }}">
                        @error('site_instagram')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="site_youtube" class="form-label">Lien YouTube</label>
                        <input type="url" class="form-control @error('site_youtube') is-invalid @enderror" 
                               id="site_youtube" name="site_youtube" value="{{ $settings['site_youtube'] ?? '' }}">
                        @error('site_youtube')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-3">Images et Fichiers</h6>
                    
                    <div class="mb-3">
                        <label for="site_logo" class="form-label">Logo du Site</label>
                        <input type="file" class="form-control @error('site_logo') is-invalid @enderror" 
                               id="site_logo" name="site_logo" accept="image/*">
                        @error('site_logo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if(isset($settings['site_logo']) && $settings['site_logo'])
                            <div class="mt-2">
                                <img src="{{ asset($settings['site_logo']) }}" alt="Logo actuel" 
                                     style="max-width: 100px; height: auto;">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="site_favicon" class="form-label">Icône du Site</label>
                        <input type="file" class="form-control @error('site_favicon') is-invalid @enderror" 
                               id="site_favicon" name="site_favicon" accept="image/*">
                        @error('site_favicon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if(isset($settings['site_favicon']) && $settings['site_favicon'])
                            <div class="mt-2">
                                <img src="{{ asset($settings['site_favicon']) }}" alt="Icône actuelle" 
                                     style="max-width: 32px; height: auto;">
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h6 class="mb-3">Informations Supplémentaires</h6>
                    
                    <div class="mb-3">
                        <label for="opening_hours" class="form-label">Heures d'Ouverture</label>
                        <textarea class="form-control @error('opening_hours') is-invalid @enderror" 
                                  id="opening_hours" name="opening_hours" rows="3">{{ $settings['opening_hours'] ?? '' }}</textarea>
                        @error('opening_hours')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="delivery_info" class="form-label">Informations de Livraison</label>
                        <textarea class="form-control @error('delivery_info') is-invalid @enderror" 
                                  id="delivery_info" name="delivery_info" rows="3">{{ $settings['delivery_info'] ?? '' }}</textarea>
                        @error('delivery_info')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="about_text" class="form-label">Texte À Propos</label>
                        <textarea class="form-control @error('about_text') is-invalid @enderror" 
                                  id="about_text" name="about_text" rows="4">{{ $settings['about_text'] ?? '' }}</textarea>
                        @error('about_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>Sauvegarder les Paramètres
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 