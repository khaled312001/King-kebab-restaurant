@extends('admin.layouts.app')

@section('title', 'Tableau de Bord')

@section('breadcrumb')
<li class="breadcrumb-item active">Tableau de Bord</li>
@endsection

@section('content')
<div class="row">
    <!-- Statistics Cards -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stats-number">{{ $stats['reservations'] }}</div>
                    <div class="stats-label">Total Réservations</div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stats-number">{{ $stats['pending_reservations'] }}</div>
                    <div class="stats-label">Réservations en Attente</div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stats-number">{{ $stats['contacts'] }}</div>
                    <div class="stats-label">Messages</div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stats-number">{{ $stats['menus'] }}</div>
                    <div class="stats-label">Éléments du Menu</div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-utensils"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Reservations -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-calendar-check me-2"></i>
                    آخر الحجوزات
                </h5>
            </div>
            <div class="card-body">
                @if($recent_reservations->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>التاريخ</th>
                                    <th>الوقت</th>
                                    <th>عدد الأشخاص</th>
                                    <th>الحالة</th>
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reservation->date)->format('Y-m-d') }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>{{ $reservation->guests }}</td>
                                    <td>
                                        @if($reservation->status == 'pending')
                                            <span class="badge bg-warning">معلق</span>
                                        @elseif($reservation->status == 'confirmed')
                                            <span class="badge bg-success">مؤكد</span>
                                        @elseif($reservation->status == 'cancelled')
                                            <span class="badge bg-danger">ملغي</span>
                                        @else
                                            <span class="badge bg-info">مكتمل</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.reservations.show', $reservation) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.reservations.index') }}" class="btn btn-primary">
                            عرض جميع الحجوزات
                        </a>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                        <p class="text-muted">لا توجد حجوزات حديثة</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <!-- Recent Contacts -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-envelope me-2"></i>
                    آخر الرسائل
                </h5>
            </div>
            <div class="card-body">
                @if($recent_contacts->count() > 0)
                    @foreach($recent_contacts as $contact)
                    <div class="d-flex align-items-start mb-3 p-3 border rounded">
                        <div class="flex-shrink-0">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-user text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">{{ $contact->name }}</h6>
                            <p class="mb-1 text-muted small">{{ Str::limit($contact->message, 50) }}</p>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</small>
                        </div>
                        <div class="flex-shrink-0">
                            @if($contact->status == 'unread')
                                <span class="badge bg-danger">جديد</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary btn-sm">
                            عرض جميع الرسائل
                        </a>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-envelope-open fa-3x text-muted mb-3"></i>
                        <p class="text-muted">لا توجد رسائل حديثة</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Quick Actions -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-bolt me-2"></i>
                    إجراءات سريعة
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.menus.create') }}" class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <i class="fas fa-plus fa-2x mb-2"></i>
                            <span>إضافة عنصر قائمة</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-outline-success w-100 h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <i class="fas fa-file-alt fa-2x mb-2"></i>
                            <span>إضافة مقال</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.settings') }}" class="btn btn-outline-info w-100 h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <i class="fas fa-cog fa-2x mb-2"></i>
                            <span>الإعدادات</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <i class="fas fa-external-link-alt fa-2x mb-2"></i>
                            <span>عرض الموقع</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- System Info -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle me-2"></i>
                    معلومات النظام
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-server text-primary me-2"></i>
                            <div>
                                <small class="text-muted">Laravel Version</small>
                                <div class="fw-bold">{{ app()->version() }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-database text-success me-2"></i>
                            <div>
                                <small class="text-muted">PHP Version</small>
                                <div class="fw-bold">{{ phpversion() }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock text-warning me-2"></i>
                            <div>
                                <small class="text-muted">Server Time</small>
                                <div class="fw-bold">{{ now()->format('H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-calendar text-info me-2"></i>
                            <div>
                                <small class="text-muted">Today</small>
                                <div class="fw-bold">{{ now()->format('Y-m-d') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
// Add any dashboard-specific JavaScript here
document.addEventListener('DOMContentLoaded', function() {
    // Auto-refresh dashboard every 30 seconds
    setTimeout(function() {
        location.reload();
    }, 30000);
});
</script>
@endsection 