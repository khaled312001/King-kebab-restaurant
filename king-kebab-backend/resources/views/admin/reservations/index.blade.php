@extends('admin.layouts.app')

@section('title', 'إدارة الحجوزات')

@section('breadcrumb')
<li class="breadcrumb-item active">إدارة الحجوزات</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>إدارة الحجوزات</h2>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-primary" onclick="filterReservations('all')">الكل</button>
        <button type="button" class="btn btn-outline-warning" onclick="filterReservations('pending')">معلق</button>
        <button type="button" class="btn btn-outline-success" onclick="filterReservations('confirmed')">مؤكد</button>
        <button type="button" class="btn btn-outline-danger" onclick="filterReservations('cancelled')">ملغي</button>
        <button type="button" class="btn btn-outline-info" onclick="filterReservations('completed')">مكتمل</button>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-calendar-check me-2"></i>
            قائمة الحجوزات
        </h5>
    </div>
    <div class="card-body">
        @if($reservations->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الهاتف</th>
                            <th>التاريخ</th>
                            <th>الوقت</th>
                            <th>عدد الأشخاص</th>
                            <th>الحالة</th>
                            <th>تاريخ الحجز</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr data-status="{{ $reservation->status }}">
                            <td>
                                <strong>{{ $reservation->name }}</strong>
                                @if($reservation->message)
                                    <br><small class="text-muted">{{ Str::limit($reservation->message, 30) }}</small>
                                @endif
                            </td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    {{ \Carbon\Carbon::parse($reservation->date)->format('Y-m-d') }}
                                </span>
                            </td>
                            <td>{{ $reservation->time }}</td>
                            <td>
                                <span class="badge bg-info">{{ $reservation->guests }} أشخاص</span>
                            </td>
                            <td>
                                <select class="form-select form-select-sm status-select" 
                                        data-reservation-id="{{ $reservation->id }}" 
                                        style="width: auto;">
                                    <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>
                                        معلق
                                    </option>
                                    <option value="confirmed" {{ $reservation->status == 'confirmed' ? 'selected' : '' }}>
                                        مؤكد
                                    </option>
                                    <option value="cancelled" {{ $reservation->status == 'cancelled' ? 'selected' : '' }}>
                                        ملغي
                                    </option>
                                    <option value="completed" {{ $reservation->status == 'completed' ? 'selected' : '' }}>
                                        مكتمل
                                    </option>
                                </select>
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($reservation->created_at)->format('Y-m-d H:i') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.reservations.show', $reservation) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.reservations.edit', $reservation) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.reservations.destroy', $reservation) }}" 
                                          class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الحجز؟')">
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
                {{ $reservations->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">لا توجد حجوزات</h5>
                <p class="text-muted">لم يتم إجراء أي حجوزات بعد</p>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterReservations(status) {
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
            const reservationId = this.dataset.reservationId;
            const newStatus = this.value;
            
            fetch(`/admin/reservations/${reservationId}/status`, {
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