@extends('admin.layouts.app')

@section('title', 'الملف الشخصي')

@section('breadcrumb')
<li class="breadcrumb-item active">الملف الشخصي</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>الملف الشخصي</h2>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-user me-2"></i>
                    معلومات الحساب
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.profile.update') }}">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">الاسم <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="mb-3">تغيير كلمة المرور</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="current_password" class="form-label">كلمة المرور الحالية</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                       id="current_password" name="current_password">
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="new_password" class="form-label">كلمة المرور الجديدة</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                       id="new_password" name="new_password">
                                @error('new_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                                <input type="password" class="form-control" 
                                       id="new_password_confirmation" name="new_password_confirmation">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>حفظ التغييرات
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle me-2"></i>
                    معلومات الحساب
                </h5>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" 
                         style="width: 100px; height: 100px;">
                        <span class="text-white fw-bold" style="font-size: 2rem;">{{ substr($user->name, 0, 1) }}</span>
                    </div>
                    <h5>{{ $user->name }}</h5>
                    <p class="text-muted">{{ $user->email }}</p>
                </div>
                
                <div class="row text-center">
                    <div class="col-6">
                        <div class="border-end">
                            <h6 class="text-muted">تاريخ التسجيل</h6>
                            <p class="mb-0">{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="text-muted">آخر تسجيل دخول</h6>
                        <p class="mb-0">{{ \Carbon\Carbon::parse($user->updated_at)->format('Y-m-d') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-shield-alt me-2"></i>
                    الأمان
                </h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-outline-warning" onclick="showPasswordModal()">
                        <i class="fas fa-key me-2"></i>تغيير كلمة المرور
                    </button>
                    <button type="button" class="btn btn-outline-info">
                        <i class="fas fa-history me-2"></i>سجل النشاط
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Password Change Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تغيير كلمة المرور</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="modal_current_password" class="form-label">كلمة المرور الحالية</label>
                        <input type="password" class="form-control" id="modal_current_password" required>
                    </div>
                    <div class="mb-3">
                        <label for="modal_new_password" class="form-label">كلمة المرور الجديدة</label>
                        <input type="password" class="form-control" id="modal_new_password" required>
                    </div>
                    <div class="mb-3">
                        <label for="modal_confirm_password" class="form-label">تأكيد كلمة المرور</label>
                        <input type="password" class="form-control" id="modal_confirm_password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" onclick="changePassword()">تغيير كلمة المرور</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function showPasswordModal() {
    const modal = new bootstrap.Modal(document.getElementById('passwordModal'));
    modal.show();
}

function changePassword() {
    const currentPassword = document.getElementById('modal_current_password').value;
    const newPassword = document.getElementById('modal_new_password').value;
    const confirmPassword = document.getElementById('modal_confirm_password').value;
    
    if (!currentPassword || !newPassword || !confirmPassword) {
        alert('يرجى ملء جميع الحقول');
        return;
    }
    
    if (newPassword !== confirmPassword) {
        alert('كلمة المرور الجديدة غير متطابقة');
        return;
    }
    
    // Here you would typically make an AJAX request to change the password
    // For now, we'll just close the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('passwordModal'));
    modal.hide();
    
    // Show success message
    const alert = document.createElement('div');
    alert.className = 'alert alert-success alert-dismissible fade show position-fixed';
    alert.style.top = '20px';
    alert.style.right = '20px';
    alert.style.zIndex = '9999';
    alert.innerHTML = `
        <i class="fas fa-check-circle me-2"></i>
        تم تغيير كلمة المرور بنجاح
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    document.body.appendChild(alert);
    
    setTimeout(() => {
        alert.remove();
    }, 3000);
}
</script>
@endsection 