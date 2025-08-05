@extends('admin.layouts.app')

@section('title', 'إدارة النشرة الإخبارية')

@section('breadcrumb')
<li class="breadcrumb-item active">إدارة النشرة الإخبارية</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>إدارة النشرة الإخبارية</h2>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-primary" onclick="filterNewsletters('all')">الكل</button>
        <button type="button" class="btn btn-outline-success" onclick="filterNewsletters('active')">نشط</button>
        <button type="button" class="btn btn-outline-danger" onclick="filterNewsletters('inactive')">غير نشط</button>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-newspaper me-2"></i>
            قائمة المشتركين
        </h5>
    </div>
    <div class="card-body">
        @if($newsletters->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>البريد الإلكتروني</th>
                            <th>الحالة</th>
                            <th>تاريخ الاشتراك</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsletters as $newsletter)
                        <tr data-status="{{ $newsletter->status }}">
                            <td>
                                <strong>{{ $newsletter->email }}</strong>
                            </td>
                            <td>
                                <select class="form-select form-select-sm status-select" 
                                        data-newsletter-id="{{ $newsletter->id }}" 
                                        style="width: auto;">
                                    <option value="active" {{ $newsletter->status == 'active' ? 'selected' : '' }}>
                                        نشط
                                    </option>
                                    <option value="inactive" {{ $newsletter->status == 'inactive' ? 'selected' : '' }}>
                                        غير نشط
                                    </option>
                                </select>
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($newsletter->created_at)->format('Y-m-d H:i') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.newsletters.show', $newsletter) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.newsletters.edit', $newsletter) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.newsletters.destroy', $newsletter) }}" 
                                          class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا المشترك؟')">
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
                {{ $newsletters->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">لا توجد مشتركين</h5>
                <p class="text-muted">لم يتم الاشتراك في النشرة الإخبارية بعد</p>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterNewsletters(status) {
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
            const newsletterId = this.dataset.newsletterId;
            const newStatus = this.value;
            
            // Update the data attribute
            this.closest('tr').dataset.status = newStatus;
            
            // Show success message
            const alert = document.createElement('div');
            alert.className = 'alert alert-success alert-dismissible fade show position-fixed';
            alert.style.top = '20px';
            alert.style.right = '20px';
            alert.style.zIndex = '9999';
            alert.innerHTML = `
                <i class="fas fa-check-circle me-2"></i>
                تم تحديث حالة المشترك بنجاح
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            document.body.appendChild(alert);
            
            setTimeout(() => {
                alert.remove();
            }, 3000);
        });
    });
});
</script>
@endsection 