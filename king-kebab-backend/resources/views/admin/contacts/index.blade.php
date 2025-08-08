@extends('admin.layouts.app')

@section('title', 'Gestion des Messages')

@section('breadcrumb')
<li class="breadcrumb-item active">Gestion des Messages</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Gestion des Messages</h2>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-primary" onclick="filterContacts('all')">Tous</button>
        <button type="button" class="btn btn-outline-danger" onclick="filterContacts('unread')">Non lus</button>
        <button type="button" class="btn btn-outline-success" onclick="filterContacts('read')">Lus</button>
        <button type="button" class="btn btn-outline-info" onclick="filterContacts('replied')">Répondu</button>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-envelope me-2"></i>
            Liste des Messages
        </h5>
    </div>
    <div class="card-body">
        @if($contacts->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Sujet</th>
                            <th>Message</th>
                            <th>Statut</th>
                            <th>Date d'Envoi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr data-status="{{ $contact->status }}" class="{{ $contact->status == 'unread' ? 'table-warning' : '' }}">
                            <td>
                                <strong>{{ $contact->name }}</strong>
                            </td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>
                                <span class="text-muted">{{ Str::limit($contact->message, 50) }}</span>
                            </td>
                            <td>
                                <select class="form-select form-select-sm status-select" 
                                        data-contact-id="{{ $contact->id }}" 
                                        style="width: auto;">
                                    <option value="unread" {{ $contact->status == 'unread' ? 'selected' : '' }}>
                                        Non lu
                                    </option>
                                    <option value="read" {{ $contact->status == 'read' ? 'selected' : '' }}>
                                        Lu
                                    </option>
                                    <option value="replied" {{ $contact->status == 'replied' ? 'selected' : '' }}>
                                        Répondu
                                    </option>
                                </select>
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($contact->created_at)->format('Y-m-d H:i') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}" 
                                          class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
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
                {{ $contacts->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-envelope-open fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Aucun message</h5>
                <p class="text-muted">Aucun message n'a été envoyé pour le moment</p>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterContacts(status) {
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        if (status === 'all' || row.dataset.status === status) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Handle status changes
    document.querySelectorAll('.status-select').forEach(select => {
        select.addEventListener('change', function() {
            const contactId = this.dataset.contactId;
            const newStatus = this.value;
            
            fetch(`/admin/contacts/${contactId}/status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    status: newStatus
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show position-fixed';
                    alert.style.top = '20px';
                    alert.style.right = '20px';
                    alert.style.zIndex = '9999';
                    alert.innerHTML = `
                        <i class="fas fa-check-circle me-2"></i>
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    document.body.appendChild(alert);
                    
                    // Remove alert after 3 seconds
                    setTimeout(() => {
                        alert.remove();
                    }, 3000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});
</script>
@endsection 